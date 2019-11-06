<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class penerimaanData extends Controller
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
        //dataRequest
        $tgl            = $request->tglPMT;
        $idUMKM         = $request->idPermintaanUMKM;
        $idNarasumber   = $request->idPermintaanNARASUMBER;
        $approved       = $request->pApprove;
        $reject         = $request->pReject;
        /*date*/
        $updatedDate = Carbon::now()->toDateTimeString();

        // dd($current_date_time);

        if($approved =="APPROVE"){
            $err = $this->pmt_umkmStatus($tgl,$idUMKM,$approved,$idNarasumber,$updatedDate);
            $status  = $approved;
            /*
            Audit Log
            */
            DB::table('auditlog')->insert([
                'AKTIVITASUSER' => $idNarasumber." Memberikan Status APPROVE untuk permintaan umkm ". $idUMKM,
                'created_at' => $updatedDate
            ]);
        }else{
            $err = $this->pmt_umkmStatus($tgl,$idUMKM,$reject,$idNarasumber,$updatedDate);
            $status = $reject;
            /*
            Audit Log
            */
            DB::table('auditlog')->insert([
                'AKTIVITASUSER' => $idNarasumber." Memberikan Status REJECT untuk permintaan umkm ". $idUMKM,
                'created_at' => $updatedDate
            ]);
        }
        
        if($err){
            Alert::error('Error Internal Server '.$err, 'Server Down!!!')->persistent('Close')->autoclose(4000);
            return redirect('panel/listpenerimaan/'.$idNarasumber);
        }else{
            Alert::success('Update Data Berhasil di '.$status, 'Terima Kasih')->persistent('Close')->autoclose(4000);
            return redirect('panel/listpenerimaan/'.$idNarasumber);
        }
    }
    //data
    private function pmt_umkmStatus($date,$idUMKM,$param,$idNarasumber,$updatedDate){
        try {
            DB::table('pmt_umkm')
            ->whereRaw("IDUMKM = '$idUMKM' AND DATE(created_at) = '$date' ")
            ->update(['STATUSPMT' => $param, 'updated_at' => $updatedDate]);
            return false;
        } catch (\Throwable $th) {
            //throw $th;
            // dd($th->getMessage());
            return $th->getMessage();
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
        //show data byid UMKM
        $dataPermintaan = $this->listDataUMKM($id);
        $jenisMasalahUMKM = $this->listJKMasalah($dataPermintaan);
        //show data byid NARASUMBER
        $dataPNarasumber = $this->listDataNarasumber($id);
        $jenisMasalah    = $this->listJKMasalah($dataPNarasumber);

        // dd($jenisMasalah);
        return view('dashboard/listPermintaan',[
            'dataPermintaan' => $dataPermintaan,
            'dataPNarasumber' => $dataPNarasumber,
        ]);
        
        
    }
    //Request UMKM
    private function listDataUMKM($idUser){
        return DB::table('pmt_umkm')
        ->where('IDUMKM', '=', $idUser)
        ->orderBy('created_at', 'Desc')
        ->get();
    }
    //Request Narasumber
    private function listDataNarasumber($idNarasumber){
        return DB::table('pmt_umkm')
        ->where('IDNARASUMBER', '=', $idNarasumber)
        ->orderBy('created_at', 'Desc')
        ->get();
    }
    //Data Jenis Masalah
    private function listJKMasalah($idMasalah){
        foreach ($idMasalah as $key => $value) {
            $jkMasalah = DB::table('pmt_jp')
            ->where('IDMASALAHJP', '=', $value->IDMASALAH)
            ->get();
            $value->IDMASALAH = $jkMasalah;
            $idMasalah[$key] = $value;
        }
        return $idMasalah;
        

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
