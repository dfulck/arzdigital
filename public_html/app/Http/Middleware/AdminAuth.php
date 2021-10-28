<?php

	namespace App\Http\Middleware;

	use Closure;

	class AdminAuth
	{

		public function handle($request, Closure $next)
        {

            $value = $request->session()->get('admin');
            if ($value and $value['logged'] == "true" and $value['rule']=="admin") {
                return $next($request);
            }
            else if ($value and $value['logged'] == "true" and $value['rule']=="user"){
                return redirect("/user/dashboard");
            }
            else {
                return redirect("/login");
            }
        }

	}
