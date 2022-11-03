<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class Login70Controller extends Controller
{

    public function registeruserbaru70()
    {
        return view('auth.Register70');
    }

    public function prosesregisteruserbaru70(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'password' => 'required',
            'role' => 'required',
        ]);

        // $nama = $request->old('')

        $adduser = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' =>  bcrypt($request->password),
            'role' => $request->role
        ]);

        return redirect('/loginuserbaru70');
    }

    public function loginuserbaru70()
    {
        return view('auth.Login70');
    }

    public function userPenduduk70()
    {
        $getUser = new User();
        $getUser->penduduk;
    }

    public function prosesloginuserbaru70(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);


        $data = [
            "email" => $request->email,
            "password" => $request->password
        ];

        if (Auth::Attempt($data)) {
            return redirect('/data70');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/loginuserbaru');
        }
    }

    public function logoutuserbaru()
    {
        Auth::logout();
        return redirect('/loginuserbaru');
    }
}
