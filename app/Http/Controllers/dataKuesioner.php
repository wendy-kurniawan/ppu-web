<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class dataKuesioner extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //func data
        $dataKuesioner       = $this->registerKegiatan($id);
        // dd($dataKuesioner);
        return view ('dashboard/kuesionerTable',[
            'dataKuesioner' => $dataKuesioner,
        ]);
    }
    /*data Kuesioner */
    private function registerKegiatan($idUser){
        return DB::table('regiskegiatan')
        ->join('inptkegiatan', 'regiskegiatan.IDKEGIATAN', '=', 'inptkegiatan.IDKEGIATAN')
        ->select('inptkegiatan.IDKEGIATAN','inptkegiatan.NAMANARASUMBER','inptkegiatan.JUDULACARA','inptkegiatan.GAMBAR','inptkegiatan.TGLMULAI','inptkegiatan.TGLSELESAI','regiskegiatan.STATUSKUESIONER')
        ->whereRaw("IDUSER = '$idUser' AND STATUSKUESIONER= 'UNDONE' ")
        ->get();
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
