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

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $data = $request->all(); //Prendo tutti i nuovi dati dal form
        $new_cloth = new Cloth(); //Creo nuovo elemento

        $new_cloth->fill($data); //Riempio dati per db
        $new_cloth->save(); //Salvo nel db

        return redirect()->route('homepage');
    }
}
