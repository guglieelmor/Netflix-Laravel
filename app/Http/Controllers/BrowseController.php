<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;

class BrowseController extends BaseController
{
    public function construct()
    {
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
