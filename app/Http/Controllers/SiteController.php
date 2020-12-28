<?php

namespace App\Http\Controllers;
use App;
use App\Model\User;
use Illuminate\Http\Request;



class SiteController extends Controller
{
    
    public function show_login(){

        return view('auth.login');

    }

    public function get_login(Request $request){

            $user = array(
                'email' => $request['email'],
                'password' => $request['password']
            );
            
            if(auth()->attempt($user)){

                return redirect()->route('show_main_admin');
                  
              }else{

                return back()->withErrors("Данный пользователь не найден");

              }

    }

    public function get_logout(){

        auth()->logout();
        return redirect()->route('show_login');

    }


}
