<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            if(Auth::user()->role == 'admin'){
                return redirect('adminHome');
            }else{
                return redirect('home');
            }
        }else{
            return view('login');
        }
    }

    public function register()
    {
        if (Auth::check()) {
            return redirect('home');
        }else{
            return view('register');
        }
    }

    public function actionlogin(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::Attempt($data)) {
            if(Auth::user()->role == 'admin'){
                return redirect('adminHome');
            }else{
                return redirect('home');
            }
        }else{
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/');
        }
    }

    public function regisAction(Request $request){
        $request->validate([
            'name' => 'required',
            'nik' => 'required|numeric|min:16',
            'nomor_telepon' => 'required|numeric',
            'email'=> 'required|email:dns|unique:users',
            'golonganDarah' => 'required',
            'password' => 'required|min:6'

        ]);

        User::create([
            'nik' =>$request->nik,
            'nomor_telepon' =>$request->nomor_telepon,
            'name' =>$request->name,
            'email' => $request->email,
            'password' =>Hash::make($request->password),
            'golonganDarah' =>$request->golonganDarah
        ]);

        return redirect("home");
    }

    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
