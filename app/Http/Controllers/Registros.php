<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class Registros extends Controller
{
    public function index() {
        return view('registro');
    }
    public function registrar(Request $request) {
        $item = new User();
        $item->name = $request->name;
        $item->password = Hash::make($request->password);
        $item->save();
        return redirect()->route('login');
    }
}
