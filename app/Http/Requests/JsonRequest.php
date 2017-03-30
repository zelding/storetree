<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/28/17 9:24 AM
 */

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\JsonResponse;

class JsonRequest extends FormRequest
{
    /**
     * list the field names in their respective categories
     *
     * @var array
     */
    protected $errorTypes = [
        406 => [],
        409 => []
    ];

    protected $defaultErrorStatus = 422;

    public function response(array $errors)
    {
        if ($this->expectsJson()) {
            $status = $this->defaultErrorStatus;

            $error409 = array_intersect($this->errorTypes[409], array_keys($errors));
            $error406 = array_intersect($this->errorTypes[406], array_keys($errors));

            if ( !empty($error409) ) {
                $status = 409;
            }
            elseif( !empty($error406) ) {
                $status = 406;
            }

            return new JsonResponse(
                [
                    'code'    => $status,
                    'message' => array_collapse(array_values($errors)),
                    'fields'  => array_keys($errors)
                ],
                $status,
                [],
                480
            );
        }

        return $this->redirector->to($this->getRedirectUrl())
                                ->withInput($this->except($this->dontFlash))
                                ->withErrors($errors, $this->errorBag);
    }
}