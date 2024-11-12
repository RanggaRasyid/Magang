<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoogbookRequest;
use App\Models\LoogBoook;
use App\Models\Mahasiswa;
use Exception;
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

    public function store(LoogbookRequest $request){
        try {

            $mahasiswa = Mahasiswa::where('nim', auth()->user()->nim)->first();
            $loogbook = LoogBoook::create([
                'nim' => $mahasiswa->nim,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                
            ]);
            return response()->json([
                'error' => false,
                'message' => 'Loogbook successfully Created!',
                'modal' => '#modal-loogbook',
                'table' => '#table-loogbook-mahasiswa'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
            ]);
        }
    }
}
