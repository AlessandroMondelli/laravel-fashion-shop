<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Cloth;

class HomeController extends Controller
{
    public function index() {
        $clothes = Cloth::all();
        return view('home', ['clothes'=>$clothes]);
    }
}
