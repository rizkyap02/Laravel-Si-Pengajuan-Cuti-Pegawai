<?php

namespace App\Http\Controllers;
use App\Pegawai;
use App\Cuti;
use App\Info_cuti;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class PegawaiController extends Controller
{
//     public function __construct()
// {
//    $this->middleware('auth:admin');
// }
    public function index()
    {
        return view('layouts.pegawaidashboard');
    }
    public function profil()
    {
        $show='';
        if(!empty(session('nip'))){
        $show=Pegawai::where('nip',session('nip'))->first();}
        else{
            $show=Pegawai::where('email',session('email'))->first();
        }
        return view('layouts.pegawaiprofil',compact('show'));
    }
    public function update(Request $request,$id)
    {
        $pegawai=Pegawai::where('id',$id)->first();
        $pegawai->nip=$request->nip;
        $pegawai->nama=$request->nama;
        $pegawai->password=$request->password;
        $pegawai->jabatan=$request->jabatan;
        $pegawai->unit=$request->unit;
        $pegawai->tempat_lahir=$request->tempat_lahir;
        $pegawai->tanggal_lahir=$request->tanggal_lahir;
        $pegawai->telepon=$request->telepon;
        $pegawai->alamat=$request->alamat;
        $pegawai->email=$request->email;
        if(!empty($request->password)){
            $pegawai->password=Hash::make($request->password);
            $cek=Pegawai::where('nip',$request->nip)->first();
            if(!empty($cek)){
                $user=User::where('nip',$request->nip)->first();
                $user->password=Hash::make($request->password);
                $user->save();
            }
            else{
                $user=User::where('email',$request->email)->first();
                $user->password=Hash::make($request->password);
                $user->save();
            }
        }
        // var_dump($pegawai);
        $pegawai->save();
        return redirect('/pegawaiprofil')->with('alert-success','Berhasil Mengubah Data!');;
    }
    public function permohonan()
    {
        return view('layouts.pegawaipermohonan');
    }
    public function dashboard()
    {
        $pegawai=Pegawai::where('nip',session('nip'))->get();
        return view('layouts.pegawaidashboard',compact('pegawai'));
    }
    public function riwayat()
    {
        $spegawai='';
        if(!empty(session('nip'))){
        $pegawai=Pegawai::where('nip',session('nip'))->get();}
        else{
            $pegawai=Pegawai::where('email',session('email'))->get();
        }
        return view('layouts.pegawairiwayat',compact('pegawai'));
    }
    public function tambahpermohonan(Request $request)
    {
        $id=Pegawai::where('nip',session('nip'))->first();

        $tambah=new cuti();
        $nama_cuti=$request->jenis_cuti;
        $tambah->pegawai_id=$id->id;
        $tambah->mulai_cuti=$request->mulaicuti;
        $tambah->akhir_cuti=$request->akhircuti;
        $tambah->jenis_cuti=$request->jeniscuti;
        $tambah->ket=nl2br($request->keterangan);
        $tambah->status='belum';
        $tambah->save();
        // DB::select('update info_cuti set ?=? where id_pegawai = ?', [$nama_cuti,$namacuti.' - '.$diff,$id->id]);
        return redirect()->route('pegawai.permohonan')->with('alert-success','Berhasil Menambahkan Data Cuti!');
    }
    public function cetakpermohonan($id)
    {
        $data=DB::table('Cuti')
        ->join('Pegawai', 'Pegawai.id', '=', 'Cuti.Pegawai_id')
        ->select('Cuti.*', 'Pegawai.*')
        ->where('cuti.id',$id)
        ->first();
        // echo json_encode($data);
        return view('layouts.pegawairiwayatcetak', compact('data'));

    }
}
