<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class JenisKegiatan extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataKegiatan = DB::table('inptjeniskegiatan')->get();
        return view('dashboard/add-jenisKegiatan',[
            'dataKegiatan' => $dataKegiatan,
        ]);
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
        $namaKegiatan = $request->jenisKegiatan;
        /*check if exits */
        $cekKegiatan = DB::table('inptjeniskegiatan')->where('NAMA_KEGIATAN', '=',$namaKegiatan)->get()->count();
       
        if ($cekKegiatan > 0) {
            Alert::error('Data '.$namaKegiatan.' telah terdaftar', 'Error')->persistent('Close')->autoclose(3000);
            return redirect('panel/jeniskegiatan');
        }else {
        /*ambil nama kemudian str_replace lalu susbstr kan */
        $namaKegiatan = $request->jenisKegiatan;
        $replacE = str_replace(" ","",$namaKegiatan);
        $subKalimat =  substr($replacE,0,6);
        /*count form DB */
        $lastCount = DB::table('inptjeniskegiatan')->count();
        $lastNumber = $lastCount + (int) 1;
        $idJenisKegiatan = $subKalimat.sprintf("%06s",$lastNumber);
        /*date*/
        $current_date_time = Carbon::now()->toDateTimeString();

        DB::table('inptjeniskegiatan')->insert([
            'ID_KEGIATAN' => $idJenisKegiatan,
            'NAMA_KEGIATAN' => $namaKegiatan,
            'created_at' => $current_date_time
        ]);

        Alert::success('Data '.$namaKegiatan.' Telah Tersimpan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/jeniskegiatan');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }
}
