<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterPresensiController extends Controller
{
    public function index(){
        return view('admin.presensimhs');
    }
}
