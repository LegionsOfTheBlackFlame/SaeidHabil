<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
       $data = config('data');

        return view('home', [
            'portraits' => $data['portraits'],
            'gallery'   => $data['gallery'],
        ]);
    }
}