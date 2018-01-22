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
    /**
     * @param         $request
     * @param Closure $next
     *
     * @link https://laracasts.com/discuss/channels/general-discussion/add-content-length-header-on-views
     *
     * @return Response
     */
    public function handle($request, Closure $next)
    {
        /** @var Response $response */
        $response    = $next($request);

        // to be sure nothing was already output (by an echo statement or something)
        if (headers_sent() || ob_get_contents() != '') return $response;

        //$content     = iconv("utf-8", 'utf-16be', $response->getContent()); // - not sure if needed
        $content     = $response->getContent();

        $contentLength = mb_strlen($content) * 16;

        $response->header('Content-Type', 'text/html charset=utf-16be')
                 ->header('Content-Disposition', 'inline')
                 ->header("Connection", "Close")
                 ->header("Content-Length",  $contentLength)
                 ->setContent( $content );

        return $response;
    }
}
