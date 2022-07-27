<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class isKonselor
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
        $level = "none";
        if (auth()->user()) {
            $level = auth()->user()->level;
        }
        if ($level == "konselor") {
            return $next($request);
        }
        return redirect('/')->with('error', "Only Counselor can access!");
    }
}
