<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }

    public function alternatif_kost(){
        return view('admin.alternatif_kost');
    }

    public function profil(){
        return view('admin.profil');
    }
}
