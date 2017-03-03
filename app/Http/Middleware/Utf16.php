<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 3/3/17 10:26 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class Utf16
{
    public function handle($request, Closure $next)
    {
        /** @var Response $response */
        $response    = $next($request);
        $response->setCharset('UTF-16');

       // $response->setContent( mb_convert_encoding($response->getContent(), 'UTF-16', 'UTF-8') );

        return $response;
    }
}