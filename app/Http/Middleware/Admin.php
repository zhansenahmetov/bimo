<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {   

        if(Auth::check()){

                // company
                if(Auth::user()->isRole() =='0'){

                    return redirect('/manager');

                // admin
                 }elseif(Auth::user()->isRole() =='1'){ 
                
                    return $next($request);
                // merchant
                 }else{
                    return redirect('/login');
                 }
            
        }else{

            return redirect('/login');

        }


       
    }
}
