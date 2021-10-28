<?php

	namespace App\Http\Middleware;

	use Closure;

	class UserAuth
	{

		public function handle($request, Closure $next)
        {
            $value = $request->session()->get('user');
            if ($value and $value['logged'] == "true" and $value['rule']=="user") {
                return $next($request);
            }
            else{
                return redirect("/login");
            }
        }

	}
