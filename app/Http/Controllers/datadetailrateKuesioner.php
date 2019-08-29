<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class datadetailrateKuesioner extends Controller
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
        //
        $dataKegiatan   = $this->dataKegiatan($id);
        $detailKegiatan = $this->rateKegiatan($dataKegiatan);

        // dd($dataKegiatan);

        return view ('dashboard/detailRateKegiatanNarasumber',[
            'dataKegiatan' => $dataKegiatan,
        ]);
    }
    //dataKegiatan
    private function dataKegiatan($iddetail){
        return DB::table('inptkegiatan')
        ->where('IDKEGIATAN','=', $iddetail)->get();
    }
    //detail rate
    private function rateKegiatan($idkegiatan){
        foreach ($idkegiatan as $key => $value) {
            $pertayaan          = DB::table('kuesioner')
            ->where('IDKEGIATAN', '=', $value->IDKEGIATAN)->count('PERTANYAAN');
            $value->totalPertayaan = $pertayaan;

            $totJawaban         = DB::table('hasilkuesioner')
            ->where('IDKEGIATAN','=',$value->IDKEGIATAN)->sum('JAWABAN');
            $value->totalJawaban = $totJawaban;

            $totUser            = DB::table('regiskegiatan')
            ->where('IDKEGIATAN', '=', $value->IDKEGIATAN)->count('EMAILPESERTA');
            $value->totalUser   = $totUser;
            
            $userKuesioner      = DB::table('regiskegiatan')
            ->where('IDKEGIATAN','=', $value->IDKEGIATAN)->get();
            $value->user        = $userKuesioner;
        }
        return $idkegiatan;
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
