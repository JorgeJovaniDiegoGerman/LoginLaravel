<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Administradores;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        if(isset($request->name_admin)){
            $this->validate($request,[
                'name_admin'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú]+$/',
                'app'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú]+$/',
                'apm'=>'required|regex:/[A-Z,a-z, ,á,é,í,ó,ú]+$/',
                'email'=>'required|email|unique:users',
                'password'=>'required|confirmed',
            ]);
            $passwordEncrip = Hash::make($request->password);
            $user = new User;
            $user -> email = $request -> email;
            $user -> password = $passwordEncrip;
            $user -> save();
            $admin = new Administradores;
            $admin -> name_admin = $request -> name_admin;
            $admin -> id_user = $user->id;
            $admin -> app = $request -> app;
            $admin -> apm = $request -> apm;
            $admin -> save();  
            return back();    
        }else{
            print('No');
        }
/*        

        return redirect(RouteServiceProvider::HOME);*/
    }
}
