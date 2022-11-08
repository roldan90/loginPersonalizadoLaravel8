<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Inicios extends Controller
{
    public function __construct() {
        $this->middleware(['auth', 'nocache'])->only(['index']);
    }

    public function index(){
        return view('inicio');
    }
}
