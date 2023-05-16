<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Traits\HasRoles;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }

    public function registration()
    {
        return view('pages.auth.register');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                if (Auth::user()->hasRole('admin')) {
                    return redirect()->intended('/admin/dashboard');
                } else {
                    return redirect()->intended('/');
                }
            } else {
                return back()->with('loginError', 'Password anda salah!');
            }
        } else {
            return redirect()->back()->with('loginError', ' Email atau password anda salah!!');
        }
        // dd("something wrong,Please make sure that you enter the correct Password or E-mail");

        return redirect('login')->withSuccess('Login details are not valid');
    }



    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'alamat' => 'required',
            'username' => 'required',
            'nomorhp' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = new User;
        $user->name = Str::title($request->name);
        $user->alamat = $request->alamat;
        $user->username = $request->username;
        $user->nomorhp = $request->nomorhp;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->assignRole('user');
        $user->save();
        return redirect('login')->with('success', 'Berhasil Registrasi');
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'alamat' => $data['alamat'],
            'username' => $data['username'],
            'nomorhp' => $data['nomorhp'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    public function dashboard()
    {
        if (Auth::check()) {
            return view('dashboard');
        }

        return redirect('login')->withSuccess('You are not allowed to access');
    }

    public function signOut()
    {
        Auth::logout();

        return Redirect('login');
    }
}
