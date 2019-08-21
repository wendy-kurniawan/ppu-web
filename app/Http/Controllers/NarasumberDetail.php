<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class NarasumberDetail extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
         //show profileNarasumber
         $idNarsumber    = $request->idNarasumber;
         $idUMKM         = $request->idUMKM;

         
         //method Narasumber
         $profileNarasumber = $this->dataNarasumber($idNarsumber);
         $profileUMKM = $this->dataUMKM($idUMKM);
        //  jenismasalah Load on select
        $jenisMasalah   = $this->dataMasalah();
         
         return view('dashboard/profileNarasumber',
         [
             'profileNarasumber' => $profileNarasumber,
             'profileUMKM'  => $profileUMKM,
             'idNarsumber' => $idNarsumber,
             'jenisMasalah' => $jenisMasalah
         ]);
        
    }
    /*function index*/
    private function dataNarasumber($idNarsumber){
        return  DB::table('users')
        ->join('profileusers', 'PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->select('users.*', 'profileusers.*')
        ->where('PROFILE_ID','=', $idNarsumber)
        ->get();
    }

    private function dataUMKM($idUMKM){
        return  DB::table('users')
        ->join('profileusers', 'PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->select('users.*', 'profileusers.*')
        ->where('PROFILE_ID','=', $idUMKM)
        ->get();
    }
    private function dataMasalah(){
        return DB::table('jkmasalah')->get();
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
        
        //date
        $current_date_time = Carbon::now()->toDateTimeString();
        //data
        $idUMKM         = $request->idUMKM;
        $idNarasumber   = $request->idNarasumber;
        $masalahUMKM    = $request->permasalahanUMKM;
        $tlpUMKM        = $request->tlpUMKM;
        $namaNarasumber = $request->namaNarasumber;
        $namaUMKM       = $request->namaUMKM;
        $fotoNarasumber = $request->imgNarasumber;
        //GENERATE IDMASALAH
        $subKalimat =  substr($idUMKM,0,3);
        $pmt            = DB::table('pmt_umkm')->count();
        $lastNumber     = $pmt + (int) 1;
        $idMasalah      = $subKalimat."msl".sprintf("%06s",$lastNumber);
        // arraySelect
        $datajkMasalah    = $request->jkMasalah;
        //loop to db pmt_jp
        for($i=0; $i < count($datajkMasalah); $i++){
            echo $datajkMasalah[$i];
            DB::table('pmt_jp')->insert([
                'IDMASALAHJP' => $idMasalah,
                'JKMASALAH' => $datajkMasalah[$i],
                'created_at' => $current_date_time
            ]);
        }
        DB::table('pmt_umkm')->insert([
            'IDMASALAH' => $idMasalah,
            'IDNARASUMBER' => $idNarasumber,
            'IDUMKM' => $idUMKM,
            'NAMANARASUMBER' => $namaNarasumber,
            'NAMAUMKMPMT'  => $namaUMKM,
            'GAMBARNARASUMBER'  => $fotoNarasumber, 
            'KETERANGANPMT'  => $masalahUMKM,
            'TLPUMKM' => $tlpUMKM,
            'created_at' => $current_date_time
        ]);
        Alert::success('Berhasil Mengajukan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/detailnarasumber?idNarasumber='.$idNarasumber.'&idUMKM='.$idUMKM);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
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
