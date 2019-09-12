<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;


class BidangKeahlian extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataSkill = DB::table('skill')->get();
        return view('dashboard/add-bidangkeahlian',
        [
            'dataSkill' => $dataSkill,
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
        //
        $namaKeahlian = $request->jenisKeahlian;
        /*check if exits */
        $cekSkill = DB::table('skill')->where('NAMASKILL', '=',$namaKeahlian)->get()->count();
       
        if ($cekSkill > 0) {
            Alert::error('Data '.$namaKeahlian.' telah terdaftar', 'Error')->persistent('Close')->autoclose(3000);
            return redirect('panel/bidangkeahlian');
        }else {
        /*ambil nama kemudian str_replace lalu susbstr kan */
        $namaKeahlian = $request->jenisKeahlian;
        $replacE = str_replace(" ","",$namaKeahlian);
        $subKalimat =  substr($replacE,0,6);
        /*count form DB */
        $lastCount = DB::table('skill')->count();
        $lastNumber = $lastCount + (int) 1;
        $idSkill = $subKalimat.sprintf("%06s",$lastNumber);
        /*date*/
        $current_date_time = Carbon::now()->toDateTimeString();

        DB::table('skill')->insert([
            'ID_SKILL' => $idSkill,
            'NAMASKILL' => $namaKeahlian,
            'created_at' => $current_date_time
        ]);
         /*
            Audit Log && Optimze DB
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => "Admin Menginput Keahlian ".$namaKeahlian,
            'created_at' => $current_date_time
        ]);
        DB::disconnect('skill');
        DB::disconnect('auditlog');
        

        Alert::success('Data '.$namaKeahlian.' Telah Tersimpan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/bidangkeahlian');
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
        $namaKeahlian       = $request->jenisKeahlian;
        $replaceNewValue    = str_replace(" ","",$namaKeahlian);
        $newValue           = substr($replaceNewValue,0,6);

        /*Old Value */
        $namaKeahlianOV     = $request->oldValue;
        $replaceOldValue    = str_replace(" ","",$namaKeahlianOV);
        $lastValue          = substr($replaceOldValue,6,12);

        /*Combine New and Old Value */
        $idSkillUpdate = $newValue.$lastValue;

        /*update DB */
        $idData             = $request->idDB;
        $current_date_time = Carbon::now()->toDateTimeString();

        DB::table('skill')->where('NO', $idData)
            ->update([
                'ID_SKILL' => $idSkillUpdate,
                'NAMASKILL' => $namaKeahlian,
                'updated_at' => $current_date_time,
                ]);
        /*
            Audit Log && optimize DB
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => "Admin Mengupdate IDKeahlian ".$namaKeahlianOV,
            'created_at' => $current_date_time
        ]);

        DB::disconnect('skill');
        DB::disconnect('auditlog');
        
        Alert::success('Update Data '.$namaKeahlian.' Telah Berhasil', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/bidangkeahlian');
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
        $deleteData = DB::table('skill')->where('ID_SKILL', '=', $id)->delete();
        $current_date_time = Carbon::now()->toDateTimeString();
        /*
            Audit Log && optimize DB
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => "Admin Mengdelete idKeahlian ".$id,
            'created_at' => $current_date_time
        ]);

        DB::disconnect('skill');
        DB::disconnect('auditlog');

        Alert::success('Delete Data Telah Berhasil', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/bidangkeahlian');
    }
}
