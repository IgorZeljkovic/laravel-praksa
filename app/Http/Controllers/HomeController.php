<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('age')->only('GET');
    }
    
    public function get()
    {
        return 'Ovo je get';
    }

    public function simple()
    {
        $first_name = 'Igor';
        return view('simple', ['first_name' => $first_name]);
    }

    public function post()
    {
        return 'Ovo je post';
    }

    public function put()
    {
        return 'Ovo je put';
    }

    public function patch()
    {
        return 'Ovo je patch';
    }

    public function delete()
    {
        return 'Ovo je delete';
    }
}
