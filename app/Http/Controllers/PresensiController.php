<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use App\Models\Presensi;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class PresensiController extends Controller
{
    public function index() {
        return view('mahasiswa.presensi');
    }

    public function show() {
        $presensi = Presensi::with('nimmhs')->where('nim', Auth::user()->nim);
        $presensi = $presensi->orderBy('nim', 'asc')->get();
        return DataTables::of($presensi)
        ->addIndexColumn()
        ->editColumn('tgl', function ($row) {
            return Carbon::parse($row->created_at)->format('d/m/y');
        })
        ->editColumn('status', function ($row) {
            return $row->status == 1 ? 'Hadir' : 'Tidak Hadir';
        })
        ->make(true);
    }
}
