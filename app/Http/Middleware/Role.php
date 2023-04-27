<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        //check đúng quyền admin với role=1 thì mới được access vào các route có prefix admin
        // if (session('role')!=1) {
        //     return redirect('/login');
        // }
        if (Auth::user()->role != 1) {
            return redirect('/login');
        }
        return $next($request);
    }
}
