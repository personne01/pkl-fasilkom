<?php

namespace App\Http\Middleware;

use Closure;



class Roles{
    public function handle($request, Closure $next, ...$roles){
        if(in_array($request->user()->roles, $roles)){
            return $next($request);
        }
        return redirect('/');
    }
}

?>