<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class BidangUMKM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataUMKM = DB::table('bidangumkm')->get();
        return view('dashboard/add-bidangUMKM',
        [
            'dataUMKM' => $dataUMKM,
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
        $namaUMKM = $request->jenisUMKM;
        /*check if exits */
        $cekUMKM = DB::table('bidangumkm')->where('NAMA_UMKM', '=',$namaUMKM)->get()->count();
       
        if ($cekUMKM > 0) {
            Alert::error('Data '.$namaUMKM.' telah terdaftar', 'Error')->persistent('Close')->autoclose(3000);
            return redirect('panel/bidangumkm');
        }else {
        /*ambil nama kemudian str_replace lalu susbstr kan */
        $namaUMKM = $request->jenisUMKM;
        $replacE = str_replace(" ","",$namaUMKM);
        $subKalimat =  substr($replacE,0,6);
        /*count form DB */
        $lastCount = DB::table('bidangumkm')->count();
        $lastNumber = $lastCount + (int) 1;
        $idUMKM = $subKalimat.sprintf("%06s",$lastNumber);
        /*date*/
        $current_date_time = Carbon::now()->toDateTimeString();

        DB::table('bidangumkm')->insert([
            'ID_UMKM' => $idUMKM,
            'NAMA_UMKM' => $namaUMKM,
            'created_at' => $current_date_time
        ]);

        Alert::success('Data '.$namaUMKM.' Telah Tersimpan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/bidangumkm');
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
