<?php

namespace App\Http\Controllers;

use App\Models\LoogBoook;
use App\Models\Mahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class LoogBookController extends Controller
{
    public function index(){
        
        return view('mahasiswa.loogbook.loogbook');
    }

    public function show(){
        $loogbook = LoogBoook::with('nimmhs')->where('nim', Auth::user()->nim);
        $loogbook = $loogbook
        // $loogbook = LoogBoook::orderBy('id_loogbook', 'asc')->get();
        ->orderBy('nim', 'asc')->get();
        return DataTables::of($loogbook)
        ->addIndexColumn()
        
        ->addColumn('action', function ($row) {
            $icon = ($row->status) ? "ti-circle-x" : "ti-circle-check";
            $color = ($row->status) ? "danger" : "success";

            $btn = "<a data-bs-toggle='modal' data-id='{$row->nim}' onclick=edit($(this)) class='btn-icon text-warning waves-effect waves-light'><i class='tf-icons ti ti-edit'></i>";
            return $btn;
        })
        ->rawColumns(['action'])

        ->make(true);
    }

    public function store(){
        
    }
}
