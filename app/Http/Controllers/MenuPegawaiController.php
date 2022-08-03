<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\User;
use App\Pegawai;
use App\Info_cuti;
class MenuPegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pegawai=Pegawai::all();
        return view('layouts.adminpegawai',compact('pegawai'));
    }

    public function cetak(){
        $pegawai=Pegawai::all();
        return view('layouts.adminlaporancetak',compact('pegawai'));
    }

    public function riwayat($id)
    {
        $pegawai=Pegawai::findorfail($id);
        return view('layouts.adminriwayat',compact('pegawai'));

    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('layouts.adminpegawaitambah');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pegawai=new Pegawai();
        $pegawai->nip=$request->nip;
        $pegawai->nama=$request->nama;
        $pegawai->password=Hash::make($request->password);
        $pegawai->jabatan=$request->jabatan;
        $pegawai->unit=$request->unit;
        $pegawai->tempat_lahir=$request->tempat_lahir;
        $pegawai->tanggal_lahir=$request->tanggal_lahir;
        $pegawai->telepon=$request->telepon;
        $pegawai->alamat=$request->alamat;
        $pegawai->email=$request->email;
        $pegawai->save();


        $info=new info_cuti();
        $info->pegawai_id=$pegawai->id;
        $info->tahunan=12;
        $info->besar=90;
        $info->sakit=365;
        $info->melahirkan=90;
        $info->alasan_penting=60;
        $info->diluar_tanggungan=1095;
        $info->save();

        User::create([
            'name' => $request->nama,
            'email' => $request->email,
            'nip' => $request->nip,
            'password' => Hash::make($request->password),
            // 'status'=>'pegawai',
        ]);

        return redirect()->route('adminpegawai.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show=Pegawai::where('id',$id)->first();
        return view('layouts.adminpegawaishow',compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit=Pegawai::where('id',$id)->first();
        return view('layouts.adminpegawaiedit',compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pegawai=Pegawai::where('id',$id)->first();
        $pegawai->nip=$request->nip;
        $pegawai->nama=$request->nama;
        $pegawai->jabatan=$request->jabatan;
        $pegawai->unit=$request->unit;
        $pegawai->tempat_lahir=$request->tempat_lahir;
        $pegawai->tanggal_lahir=$request->tanggal_lahir;
        $pegawai->telepon=$request->telepon;
        $pegawai->alamat=$request->alamat;
        $pegawai->email=$request->email;
        $pegawai->save();
        return redirect()->route('adminpegawai.index')->with('alert-success','Berhasil Menambahkan Data!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Pegawai::where('id',$id)->first();
        $cuti=Info_cuti::where('pegawai_id',$id)->first();
        if(!empty($data->nip)){
            $user=User::where('nip',$data->nip)->first();
        }

        else{
            $user=User::where('email',$data->email)->first();
        }
        // var_dump($user);

        $cuti->delete();
        $data->delete();
        $user->delete();
        return redirect()->route('adminpegawai.index')->with('alert-success','Data berhasi dihapus!');
    }
}
