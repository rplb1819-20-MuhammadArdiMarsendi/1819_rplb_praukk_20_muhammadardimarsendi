<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
      //
            public function Login()
            {
                return view('User/Login');
            }

      //
        public function ProsesLogin(request $request)
        {
     if(!\Auth::attempt(['name' => $request->name,'password' => $request->password])){
            return redirect('/User/Dashboard');
            }
            return redirect('/')->with('message',"username atau password salah");
             }
                //
                public function Register()
                {
                    return view('User/Register');
                }

                public function ProsesRegister(request $request)
                {
                    $this->validate($request, [
                        'name'=> 'required|min:4',
                        'email'=> 'required|email|unique:users',
                        'password'=>'required|min:6|confirmed'
                    ]);
                    User::create([
                        'name'=> $request->name,
                        'email'=> $request->email,
                        'password'=> bcrypt($request->password)
                    ]);

                    return redirect(route('Login'));
                }

    //

                    public function CekLoginPetugas()
                            {
                                return view('User/Dashboard');
                            }


                     public function Homepage()
                             {
                        return view('User/Homepage');
                                }
}