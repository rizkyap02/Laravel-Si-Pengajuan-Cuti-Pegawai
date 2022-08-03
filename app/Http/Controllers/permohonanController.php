<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pegawai;
use App\Cuti;
use App\Info_cuti;


class permohonanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pegawai=Pegawai::all();
        return view('layouts.adminpermohonan',compact('pegawai'));
        // foreach($pegawai as $data){
            //     if(isset($data->cuti->nama)){
                // echo json_encode($data->cuti);}}
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data=Cuti::find($id);
        $pegawai=Pegawai::find($data->pegawai_id);
        $pengajuan=array(
            'tgl_pengajuan'=>$data->created_at->format('d - m - yy'),
            'tgl_mulai'=>$data->mulai_cuti->format('d - m - yy'),
            'tgl_akhir'=>$data->akhir_cuti->format('d - m - yy'),
        );
        // $data->created_at=$pengajuan;
        return response()->json(array('data'=>$data,'pegawai'=>$pegawai,'pengajuan'=>$pengajuan), 200);

    }
    public function laporan()
    {
        $pegawai=Pegawai::all();
        return view('layouts.adminlaporan',compact('pegawai'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $data=Cuti::find($id);
        $pegawai=Info_cuti::where('pegawai_id',$data->pegawai_id)->first();
        $tanggal=date_diff($data->akhir_cuti,$data->mulai_cuti);
        $tanggal=$tanggal->format('%a');
        $data_jenis=$data->jenis_cuti;
        $pegawai->$data_jenis=$pegawai->$data_jenis - (int)$tanggal;
        $data->status='disetujui';
        $data->save();
        $pegawai->save();
        return redirect('adminpermohonan');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=Cuti::find($id);
        $data->status='gagal';
        $data->save();
        return redirect('adminpermohonan');

    }
}
