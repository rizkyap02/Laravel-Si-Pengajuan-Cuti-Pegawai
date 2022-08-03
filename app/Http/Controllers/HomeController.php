<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Cuti;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('status');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $pegawai=Pegawai::all()->count();
        // var_dump($pegawai);
        // die;
        $cuti=Cuti::all()->count();
        return view('layouts.admindashboard',compact(['pegawai','cuti']));
    }
    public function pegawai()
    {
        return view('layouts.adminpegawai');
    }
    public function permohonan()
    {
        return view('layouts.adminpermohonan');
    }
    public function laporan()
    {
        return view('layouts.adminlaporan');
    }
}
