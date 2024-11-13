<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Presensi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class MasterPresensiController extends Controller
{
    public function index(){
        return view('admin.presensimhs');
    }

    public function show(){

        $presensim = Mahasiswa::orderBy('nim', 'asc')->get();

        return DataTables::of($presensim)
        ->addIndexColumn()
        ->addColumn('detail', function ($row) {
            $btn = 
            "<a href='" . url('super-admin/presensi/sdetail/' . $row->nim) . "' onclick=detail($(this)) data-id='{$row->nim}' class='btn-icon text-success waves-effect waves-light'><i class='tf-icons ti ti-file-invoice' ></i></a>";
            return $btn;
        })
        ->rawColumns(['detail'])

        ->make(true);
    }

    public function showDetail(){
        return view('admin.detail_presensimhs');
    }

    public function detail(){

        $presensi = Presensi::with('nimmhs')
        ->orderBy('nim', 'desc')
        ->get();

        return DataTables::of($presensi)
        ->addIndexColumn()
        ->editColumn('tgl', function ($row) {
            return Carbon::parse($row->created_at)->format('d/m/y');
        })
        ->editColumn('status', function ($row) {
            return $row->status == 1 ? 'Hadir' : 'Tidak Hadir';
        })
        ->addColumn('detail', function ($row) {
            $icon = ($row->status) ? "ti-circle-x" : "ti-circle-check";
            $color = ($row->status) ? "danger" : "success";

            $btn = "<a data-bs-toggle='modal' data-id='{$row->nim}' onclick=edit($(this)) class='btn-icon text-success waves-effect waves-light'><i class='tf-icons ti ti-file-invoice'></i>";
            return $btn;
        })
        ->rawColumns(['detail'])

        ->make(true);
    }
        
}
