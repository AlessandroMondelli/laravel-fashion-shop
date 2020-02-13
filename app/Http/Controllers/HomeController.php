<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class HomeController extends Controller
{
    public function index() {
        $clothes = Cloth::all();
        dd($clothes);
        // phpinfo();
        return view('home');
    }
}
