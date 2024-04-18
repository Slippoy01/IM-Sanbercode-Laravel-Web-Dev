<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function main() {
        return view('index');
    }

    public function form() {
        return view('page.form');
    }

    public function welcome(Request $request) {
        $namaDepan = $request -> input ('first_name');
        $namaBlkg = $request -> input ('last_name');
        return view('page.welcome' , ["namaDepan" => $namaDepan , "namaBlkg" => $namaBlkg]);
    }
}
