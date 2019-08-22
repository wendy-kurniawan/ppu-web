<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class dataKegiatanUser extends Controller
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
        /*get Data by function */
        $dataKegiatan = $this->listKegiatan($id);
        $idKegiatan = $this->grupbyIDMASALAH($dataKegiatan);

        return view('dashboard/dataUserNarasumber',[
            'dataKegiatan' => $dataKegiatan,
        ]);
    }
    /*method */
    private function listKegiatan($idNarasumber){
        return DB::table('inptkegiatan')
        ->whereRaw("IDNARASUMBER = '$idNarasumber'")
        ->orderBy("created_At", "Desc")
        ->paginate(2);
    }
    private function grupbyIDMASALAH($idmasalah){
        foreach ($idmasalah as $key => $value) {
            $dataidMasalah = DB::table('regiskegiatan')
            ->where('IDKEGIATAN', '=', $value->IDKEGIATAN)
            ->get();
            $value->IDKEGIATAN = $dataidMasalah;
            $idMasalah[$key] = $value;
        }
        return $idmasalah;

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
