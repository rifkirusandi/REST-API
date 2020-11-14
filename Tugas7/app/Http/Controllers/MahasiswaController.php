<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use App\Mahasiswa;

class MahasiswaController extends Controller
{
    public function get_mahasiswa(){
      return response()->json(Mahasiswa::all(), 200);
    }

    public function create_mahasiswa(Request $request){
      $mahasiswa = new Mahasiswa;
      $mahasiswa->nama = $request->input('nama');
      $mahasiswa->nim = $request->input('nim');
      $mahasiswa->kelas = $request->input('kelas');
      $mahasiswa->semester = $request->input('semester');
      $mahasiswa->created_at = date('Y-m-d H:i:s');
		  $mahasiswa->updated_at = date('Y-m-d H:i:s');
      $mahasiswa->save();

      return response([
        'status' => 'OK',
        'message' => 'Mahasiswa ditambahkan',
        'data' => $mahasiswa
      ], 200);
    }

}
