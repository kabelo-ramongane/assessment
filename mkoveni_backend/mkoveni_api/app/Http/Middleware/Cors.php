<?php

namespace App\Http\Middleware;

use Closure;

class Cors
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);
        $headers = [
          'Cache-Control' => 'nocache, no-store, max-age=0, must-revalidate',
          'Pragma','no-cache',
          'Expires','Fri, 01 Jan 1990 00:00:00 GMT',
          'Access-Control-Allow-Origin','*',
          'Access-Control-Allow-Methods','GET, POST, PUT, DELETE, OPTIONS',
          'Access-Control-Allow-Headers','X-Requested-With, Content-Type, X-Token-Auth, Authorization',
        ];

        foreach($headers as $key => $value) {
          $response->headers->set($key, $value);
        }

        return $response;
        /*return $next($request)
        ->header('Access-Control-Allow-Origin', '*')
        ->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS')
        ->header('Access-Control-Allow-Headers', 'X-Requested-With, Content-Type, X-Token-Auth, Authorization');
*/
    }
}
