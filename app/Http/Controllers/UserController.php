<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;

class UserController extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function view()
    {
        if (Auth::check() === true){
            return redirect()->route('browse');
        }

        return view('login.login');
    }

    public function loging(Request $request)
    {
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if (Auth::check() === true){
            return redirect()->route('browse');
        }

        return redirect()->route('login')->withInput()->withErrors(['E-mail ou Senha incorretas. Tente novamente.']);
    }

    public function register(Request $request)
    {
        Auth::logout();

        $email = User::query()->where('email', '=', $request->email)->first();

        if($email !== null){
            return redirect()->back()->withInput()->withErrors(['E-mail já cadastrado.']);
        }

        if($request->password != $request->confirm_password){
            return redirect()->back()->withInput()->withErrors(['Senhas diferentes.']);
        }

        $user = new User();
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        return redirect()->route('browse');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
