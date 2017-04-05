<?php
/**
 * storetree
 *
 * @author    lyozsi (kristof.dekany@apex-it-services.eu)
 * @copyright internal usage
 *
 * Date: 4/5/17 9:17 AM
 */

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\DB;

/**
 * Class TestTransactions
 *
 * This middleware will enclose database methods in a transaction and roll them back
 * if the test param in the query is true
 *
 * @package App\Http\Middleware
 */
class TestTransactions
{
    /**
     * @param Request $request
     * @param Closure $next
     *
     * @return mixed
     * @throws \Exception
     */
    public function handle(Request $request, Closure $next)
    {
        if ( $request->exists('test') && $request->get('test') ) {
            DB::beginTransaction();
        }

        return $next($request);
    }

    /**
     * @param Request  $request
     * @param Response $response
     *
     * @return Response
     */
    public function terminate(Request $request, Response $response)
    {
        if ( $request->exists('test') && $request->get('test') ) {
            DB::rollBack();
        }

        return $response;
    }
}