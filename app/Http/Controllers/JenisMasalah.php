<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;


class JenisMasalah extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataMasalah = DB::table('jkmasalah')->get();
        return view('dashboard/add-jenisMasalah',[
            'dataMasalah' => $dataMasalah
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
        //get data by form
        $namaMasalah = $request->namaMasalah;

        $cekMasalah = DB::table('jkmasalah')->where('NAMAMASALAH', '=',$namaMasalah)->get()->count();
       
        if ($cekMasalah > 0) {
            Alert::error('Data '.$namaMasalah.' telah terdaftar', 'Error')->persistent('Close')->autoclose(3000);
            return redirect('panel/masalah');
        }else {
        /*ambil nama kemudian str_replace lalu susbstr kan */
        $replacE = str_replace(" ","",$namaMasalah);
        $subKalimat =  substr($replacE,0,6);
        /*count form DB */
        $lastCount = DB::table('jkmasalah')->count();
        $lastNumber = $lastCount + (int) 1;
        $idJenisMasalah = $subKalimat.sprintf("%06s",$lastNumber);
        /*date*/
        $current_date_time = Carbon::now()->toDateTimeString();
        DB::table('jkmasalah')->insert([
            'IDMASALAH' => $idJenisMasalah,
            'NAMAMASALAH' => $namaMasalah,
            'created_at' => $current_date_time
        ]);

        Alert::success('Data '.$namaMasalah.' Telah Tersimpan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/masalah');
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
        /*get NewValue susbstr kan */
        $namaMasalah        = $request->namaMasalah;
        $replaceNewValue    = str_replace(" ","",$namaMasalah);
        $newValue           = substr($replaceNewValue,0,6);

        /*Old Value */
        $namaMasalahOV      = $request->oldValue;
        $replaceOldValue    = str_replace(" ","",$namaMasalahOV);
        $lastValue          = substr($replaceOldValue,6,12);

        /*Combine New and Old Value */
        $idMasalahUpdate = $newValue.$lastValue;

        /*update DB */
        $idData             = $request->idDB;
        $current_date_time = Carbon::now()->toDateTimeString();

        // dd($newValue,$lastValue,$idMasalahUpdate,$idData);

        DB::table('jkmasalah')->where('NO', $idData)
            ->update([
                'IDMASALAH' => $idMasalahUpdate,
                'NAMAMASALAH' => $namaMasalah,
                'updated_at' => $current_date_time,
                ]);
        /*
            Audit Log && optimize DB
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => "Admin Mengupdate IDMASALAH ".$namaMasalahOV,
            'created_at' => $current_date_time
        ]);

        DB::disconnect('jkmasalah');
        DB::disconnect('auditlog');
        Alert::success('Update Data '.$namaMasalah.' Telah Berhasil', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/masalah');
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
        $deleteData = DB::table('jkmasalah')->where('IDMASALAH', '=', $id)->delete();
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
        return redirect('panel/masalah');
    }
}
