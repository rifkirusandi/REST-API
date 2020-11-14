<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PostGetController extends Controller
{
    /**
  	 * Create a new controller instance.
  	 *
  	 * @return void
  	 */
  	public function __construct() {

  	}
    public function list_mahasiswa(){
        $data = Http::get('http://localhost:8000/api/mahasiswa');
        $data = json_decode($data, true);
        return view('listMahasiswa', ['data'=>$data]);
    }

    /**
	 * Show the application dashboard.
	 *
	 * @return \Illuminate\Contracts\Support\Renderable
	 */
	public function index() {
	}
}
