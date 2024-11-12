<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Exception;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables as DataTablesDataTables;
use Yajra\DataTables\Facades\DataTables;

class MasterMahasiswaiController extends Controller
{
    public function index(){
        return view('admin.master_mahasiswa');
    }

    public function show(){

        $mahasiswa = Mahasiswa::orderBy('nim', 'asc')->get();
        return DataTables::of($mahasiswa)
        ->addIndexColumn()
        ->editColumn('status', function ($row) {
            if ($row->status == 1) {
                return "<div class='text-center'><div class='badge rounded-pill bg-label-success'>" . "Active" . "</div></div>";
            } else {
                return "<div class='text-center'><div class='badge rounded-pill bg-label-danger'>" . "Inactive" . "</div></div>";
            }
        })
        ->addColumn('action', function ($row) {
            $icon = ($row->status) ? "ti-circle-x" : "ti-circle-check";
            $color = ($row->status) ? "danger" : "success";

            $btn = "<a data-bs-toggle='modal' data-id='{$row->nim}' onclick=edit($(this)) class='btn-icon text-warning waves-effect waves-light'><i class='tf-icons ti ti-edit'></i>
            <a data-status='{$row->status}' data-id='{$row->nim}' data-url='master-mahasiswa/status' class='btn-icon update-status text-{$color} waves-effect waves-light'><i class='tf-icons ti {$icon}'></i></a>";
            return $btn;
        })
        ->rawColumns(['action', 'status'])

        ->make(true);
    }

    public function store(){
        //
    }

    public function status(String $id)
    {
        try {
            $mahasiswa = Mahasiswa::where('nim', $id)->first();
            $mahasiswa->status = ($mahasiswa->status) ? false : true;
            $mahasiswa->save();

            return response()->json([
                'error' => false,
                'message' => 'Status Mahasiswa successfully Updated!',
                'table' => '#table-master-mahasiswa'
            ]);
        } catch (Exception $e) {
            return response()->json([
                'error' => true,
                'message' => $e->getMessage(),
                
            ]);
        }
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $mahasiswa = Mahasiswa::where('nim', $id)->first();
        return $mahasiswa;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update( $request, string $id)
    {
        // try {
        //     $univ = Mahasiswa::where('nim', $id)->first();

        //     $univ->namauniv = $request->namauniv;
        //     $univ->jalan = $request->jalan;
        //     $univ->kota = $request->kota;
        //     $univ->telp = $request->telp;
        //     $univ->save();

        //     return response()->json([
        //         'error' => false,
        //         'message' => 'Universitas successfully Updated!',
        //         'modal' => '#modal-universitas',
        //         'table' => '#table-master-univ'
        //     ]);
        // } catch (Exception $e) {
        //     return response()->json([
        //         'error' => true,
        //         'message' => $e->getMessage(),
        //     ]);
        // }
    }
}
