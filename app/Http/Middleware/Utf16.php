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
        $content     = iconv("utf-8", 'utf-16be', $response->getContent());

        $response->header('Content-Type', 'text/html charset=utf-16be')
                 ->header('Content-Disposition', 'inline')
                 ->setContent( $content );

        return $response;
    }
}