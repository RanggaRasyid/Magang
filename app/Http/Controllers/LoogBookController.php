<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoogBookController extends Controller
{
    public function index(){
        
        return view('mahasiswa.loogbook');
    }

    public function show(){
        $mahasiswa = Mahasiswa::where('nim', Auth::user()->nim)->first();
        // return view('mahasiswa.loogbook', compact('mahasiswa'));
    }
}
