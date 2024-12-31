<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function index(){
        if (Auth::user() == TRUE) {
            return redirect('/dashboard');
        } else {
            return view('auth.login');
        }
    }

    public function authenticate(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            // 'captcha' => 'required|captcha'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password) && $user->status == "Active") {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // Jika berhasil login

                activity()->log('Login');
                return redirect('/dashboard');
            } 
        } else if ($user && Hash::check($request->password, $user->password) && $user->status == 'Non Active') {
            return redirect('/login')->with('status2','User Tidak Aktif, Silahkan Hubungi Admin !');
        } else {
            return redirect('/login')->with('status2','Nama User atau Password Tidak Sesuai !');
        }

    }

    public function authenticate_web(Request $request){

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            // 'captcha' => 'required|captcha'
        ]);

        $user = User::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password) && $user->status == "Active") {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                // Jika berhasil login

                activity()->log('Login');
                return redirect('/');
            } 
        } else if ($user && Hash::check($request->password, $user->password) && $user->status == 'Non Active') {
            return redirect('/page-login')->with('status2','User Tidak Aktif, Silahkan Hubungi Admin !');
        } else {
            return redirect('/page-login')->with('status2','Nama User atau Password Tidak Sesuai !');
        }

    }

    public function logout(Request $request)
    {
    //    activity()->log('Log Out');
       Auth::logout();
       $request->session()->invalidate();
    
       $request->session()->regenerateToken();
       Session::flush();
       return redirect('login')->with('status','Terimakasih !');
    }

    public function logout_web(Request $request)
    {
    //    activity()->log('Log Out');
       Auth::logout();
       $request->session()->invalidate();
    
       $request->session()->regenerateToken();
       Session::flush();
       return redirect('page-login')->with('status','Terimakasih !');
    }
}
