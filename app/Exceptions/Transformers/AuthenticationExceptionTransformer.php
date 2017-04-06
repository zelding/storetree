<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 4/6/17 9:58 AM
 */

namespace App\Exceptions\Transformers;
use Exception;
use App\Exceptions\UnauthenticatedHttpException;
use GrahamCampbell\Exceptions\Transformers\TransformerInterface;
use Illuminate\Auth\AuthenticationException;

class AuthenticationExceptionTransformer implements TransformerInterface
{
    /**
    * Transform the provided exception.
    *
    * @param \Exception $exception
    *
    * @return \Exception
    */
    public function transform(Exception $exception)
    {
        if ($exception instanceof AuthenticationException) {
            $exception = new UnauthenticatedHttpException($exception->getMessage(), $exception, $exception->getCode());
        }

        return $exception;
    }
}