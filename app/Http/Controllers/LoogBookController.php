<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoogbookRequest;
use App\Models\LoogBoook;
use App\Models\Mahasiswa;
use Carbon\Carbon;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;
use Illuminate\Support\Facades\Storage;

class LoogBookController extends Controller
{
    public function index() {
        
        return view('mahasiswa.loogbook.loogbook');
    }

    public function show()  {
        $loogbook = LoogBoook::with('nimmhs')->where('nim', Auth::user()->nim)
            ->orderBy('nim', 'asc')
            ->get();

        return DataTables::of($loogbook)
            ->addIndexColumn()
            ->editColumn('created_at', function ($row) {
                return Carbon::parse($row->created_at)->format('d/m/y');
            })
            ->editColumn('picture', function ($row) {
                // Generate URL gambar menggunakan Storage
                $url = Storage::url('' . $row->picture);
                return "<img src='$url' alt='Picture' style='width: 50px; height: 50px; object-fit: cover;'>";
            })
            ->addColumn('action', function ($row) {
                $icon = ($row->status) ? "ti-circle-x" : "ti-circle-check";
                $color = ($row->status) ? "danger" : "success";

                $btn = "<a data-bs-toggle='modal' data-id='{$row->nim}' onclick=edit($(this)) class='btn-icon text-warning waves-effect waves-light'><i class='tf-icons ti ti-edit'></i></a>";
                return $btn;
            })
            ->rawColumns(['action', 'picture']) // Tambahkan 'picture' ke rawColumns agar HTML <img> dieksekusi
            ->make(true);
    }


    public function store(LoogbookRequest $request) {
        try {

            $mahasiswa = Mahasiswa::where('nim', auth()->user()->nim)->first();
                     
            $file = null; 
            if ($request->file('picture')) {
                $file = Storage::put('public/loogbook' , $request->file('picture'));
            }

            $loogbook = LoogBoook::create([
                'nim' => $mahasiswa->nim,
                'nama' => $request->nama,
                'deskripsi' => $request->deskripsi,
                'picture' => $file
                
            ]);
            // dd($loogbook);
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
