<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class permintaanUMKM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $ListNarasumber     = $this->DataNarasumber();
        $ListMasalah        = $this->DataMasalah();
        $progressPermintaan = $this->Progress();

        // dd($ListNarasumber);

        return view('dashboard/progressPermintaan',[
            'ListNarasumber' => $ListNarasumber,
            'ListMasalah' => $ListMasalah,
            'progressPermintaan' => $progressPermintaan,
        ]);
    }
    /*Data Narasumber */
    public function DataNarasumber(){
        $data = DB::table('users')
        ->join('profileusers','users.PROFILEUSERS_ID', '=' ,'profileusers.PROFILE_ID')
        ->select('users.PROFILEUSERS_ID', 'profileusers.NAMALENGKAP')
        ->where('STATUSUSER', '=', 'NARASUMBER')
        ->get();
        return $data;
    }
    /*Data Trouble */
    public function DataMasalah(){
        $dataMasalah = DB::table('jkmasalah')->get();
        return $dataMasalah;
    }
    /*Data Progress */
    public function Progress(){
        $dataProgress = DB::table('pmt_umkm')->get();
        return $dataProgress;
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
        $idAdmin        = $request->idUser;
        $idNarasumber   = $request->narasumber;
        $jenisMasalah   = $request->jkMasalah;
        $noHP           = $request->noHP;

        if(empty($jenisMasalah)){
            Alert::info('Mohon Isi Form Jenis Permasalahan', 'Data Kosong')->persistent('Close')->autoclose(3000);
            return redirect('panel/permintaan');
        }else{
            //GENERATE IDMASALAH
            $subKalimat     =  substr($idAdmin,0,3);
            $pmt            = DB::table('pmt_umkm')->count();
            $lastNumber     = $pmt + (int) 1;
            $idMasalah      = $subKalimat."msl".sprintf("%06s",$lastNumber);
            //date
            $current_date_time = Carbon::now()->toDateTimeString();

            DB::table('pmt_umkm')->insert([
                'IDMASALAH' => $idMasalah,
                'IDNARASUMBER' => $idNarasumber,
                'IDUMKM' => $idAdmin,
                'NAMANARASUMBER' => $namaNarasumber,
                'NAMAUMKMPMT'  => $namaUMKM,
                'GAMBARNARASUMBER'  => $fotoNarasumber, 
                'KETERANGANPMT'  => $masalahUMKM,
                'TLPUMKM' => $tlpUMKM,
                'created_at' => $current_date_time
            ]);

            for ($i=0; $i < count($jenisMasalah); $i++) { 
                DB::table('pmt_jp')->insert([
                    'IDMASALAHJP' => $idMasalah,
                    'JKMASALAH' => $jenisMasalah[$i],
                    'created_at' => $current_date_time,
                ]);
            }

        }


        dd($request->all());
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
        $deleteData = DB::table('pmt_umkm')->where('IDMASALAH', '=', $id)->delete();
        $current_date_time = Carbon::now()->toDateTimeString();
        /*
            Audit Log && optimize DB
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => "Admin Mengdelete IDMasalah ".$id,
            'created_at' => $current_date_time
        ]);

        DB::disconnect('jkmasalah');
        DB::disconnect('auditlog');

        Alert::success('Delete Data Telah Berhasil', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/permintaan');
    }
}
