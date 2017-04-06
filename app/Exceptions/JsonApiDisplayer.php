<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 4/6/17 9:40 AM
 */

namespace App\Exceptions;
use GrahamCampbell\Exceptions\Displayers\JsonDisplayer;
use Symfony\Component\HttpFoundation\JsonResponse;

class JsonApiDisplayer extends JsonDisplayer
{
    /**
     * Get the error response associated with the given exception.
     *
     * @param \Exception $exception
     * @param string     $id
     * @param int        $code
     * @param string[]   $headers
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function display(\Exception $exception, $id, $code, array $headers)
    {
        $info = $this->info->generate($exception, $id, $code);

        $error = ['id' => $id, 'status' => $info['code'], 'title' => $info['name'], 'detail' => $info['detail']];

        return new JsonResponse(
            [
                'code'    => $code,
                'message' => [$info['name']],
                'fields'  => [$info['detail']]
            ],
            $code,
            array_merge($headers, ['Content-Type' => $this->contentType()])
        );
    }
}