<?php

namespace App\Http\Middleware;

use Closure, View, Route;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use DB;
use App\User;

class Authenticate
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string|null
     */
    public function handle($request, Closure $next)
    {
        if (!is_null(request()->user())) {
            return $next($request);
        } else {

        //    $user = User::where('phone', '=', $request->input('search'))->first();


//        $user = User::where('phone', '=', 3)->first();

            // $user = Auth::user();  

            // Auth::loginUsingId($user->id);



        //    Auth::loginUsingId();

     //       $user = Auth::user();

       //     echo $user;

            return redirect('autologin')->with(['user'=> $user]);
        }
    }
}
