<?php namespace Webschool\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;

class AdminMiddleware {

	protected $auth;

	public function __construct(Guard $auth){
		$this->auth = $auth;
	}

	public function handle($request, Closure $next)
	{
		if ($this->auth->guest())
		{
			if ($request->ajax())
			{
				return response('Unauthorized.', 401);
			}
			else
			{
				return redirect()->guest('login');
			}
		}

		if ($request->user()->type != "admin") {
			return redirect('/');
		}

		return $next($request);
	}

}
