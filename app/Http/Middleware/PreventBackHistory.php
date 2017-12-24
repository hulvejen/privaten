<?php

namespace App\Http\Middleware;

use Closure;

class PreventBackHistory
{
    /**
	 * http://geekhmer.github.io/blog/2017/07/10/laravel-5-dot-x-x-4-steps-to-prevent-browsers-back-button-after-user-logout/
	 *
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
		$response = $next($request);
		
        return $response->header('Cache-Control','nocache, no-store, max-age=0, must-revalidate')
			->header('Pragma','no-cache')
			->header('Expires', 'Sun, 02 Jan 1990 00:00:00 GMT');
    }
}
