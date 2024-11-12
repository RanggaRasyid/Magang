<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PresensiController extends Controller
{
    public function index() {
        return view('mahasiswa.presensi');
    }
    public function show() {
        $mahasiswa = Mahasiswa::where('nim', Auth::user()->nim)->first();
    }
}
