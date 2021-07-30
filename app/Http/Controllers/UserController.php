<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Log;

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

    public function loging(UserRequest $request)
    {
        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        if (Auth::check() === true){
            Log::channel('netflix')->info('Logado', ['user' => Auth::user()->name, 'time' => date('d:m:s d/m/Y')]);

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

        if(empty($request->file('img'))){
            return redirect()->back()->withInput()->withErrors(['Escolha uma imagem.']);
        }

        $request->validate([
            'img' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time().'.'.$request->img->extension();

        $request->img->move(public_path('users'), $imageName);

        $go = back()
            ->with('success','You have successfully upload image.')
            ->with('image',$imageName);

        if(empty($request->number)){
            return redirect()->back()->withInput()->withErrors(['Insira um telefone de contato.']);
        }

        if(empty($request->cartao)){
            return redirect()->back()->withInput()->withErrors(['Insira um cartão de crédito.']);
        }

        if(empty($request->plano)){
            return redirect()->back()->withInput()->withErrors(['Insira um plano.']);
        }

        $user = new User();
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->name = $request->name;
        $user->file = $imageName;
        $user->telefone = $request->number;
        $user->cartao = $request->cartao;
        $user->metodo = $request->metodo;
        $user->plano = $request->plano;
        $user->save();

        Auth::attempt(['email' => $request->email, 'password' => $request->password]);

        Log::channel('netflix')->info('Cadastrado', ['user' => Auth::user()->name, 'time' => date('d:m:s d/m/Y')]);

        return redirect()->route('browse');
    }

    public function logout()
    {
        User::query()->where('email', '=', Auth::user()->email)->update(['logout' => date("Y-m-d H:i:s")]);

        Log::channel('netflix')->info('Logout', ['user' => Auth::user()->name, 'time' => date('d:m:s d/m/Y')]);

        Auth::logout();

        return redirect()->route('login');
    }
}
