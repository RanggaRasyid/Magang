<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterMahasiswaiController extends Controller
{
    public function index(){
        return view('admin.master_mahasiswa');
    }
    public function show(){
    }
}
