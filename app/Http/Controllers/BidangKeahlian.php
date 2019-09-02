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
            Audit Log
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => "Admin Menginput ".$namaKeahlian,
            'created_at' => $current_date_time
        ]);
        

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
