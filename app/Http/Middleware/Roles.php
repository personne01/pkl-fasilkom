<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;


class Roles{
    public function handle($request, Closure $next, ...$roles){
        if (!Auth::check()) {
            return redirect('login');
        }
        // $user = Auth::user();

        // if ($user->level == $roles) {
        //     return $next($request);
        // }
        // echo json_encode(Auth::AkunMahasiswa());
        if(in_array($request->user()->roles, $roles)){
            return $next($request);
        }
        return redirect('/');
    }
}

?>
