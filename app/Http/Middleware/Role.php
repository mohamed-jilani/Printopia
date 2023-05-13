<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user() == null){
            return redirect('home')->with('error','you have not a user access.');
        }
        else if(auth()->user()->role == 'user'){
            return $next($request);
        }
        else{
            return redirect('home')->with('error','you have not a user access.');
        }
    }
}
