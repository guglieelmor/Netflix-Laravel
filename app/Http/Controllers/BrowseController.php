<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;

class BrowseController extends BaseController
{
    public function construct()
    {
        Log::channel('netflix')->info('Navegado para o Browse', ['user' => Auth::user()->name, 'time' => date('d:m:s d/m/Y')]);
        return view('browse');
    }

    public function header()
    {
        $data = [
            'nome' => 'Guilherme'
        ];

        return view('layout.browse-html', $data);
    }

    public function main()
    {
        return view('browse');
    }

}
