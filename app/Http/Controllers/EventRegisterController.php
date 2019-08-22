<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class EventRegisterController extends Controller
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
        // pageid
        $page       = $request->nopage;
        //@guest
        $idkegiatanGuest = $request->guestidKegiatan;
        $guestEmail = $request->emailGuest;
        $guestName  = $request->nameGuest;
        $guestHP    = $request->hpGuest;
        //@login
        $statusLogin = $request->statuslogin;
        $idKegiatanlogin = $request->idKegiatan;
        $nama   = $request->namalengkapUMKM;
        $namaUMKM = $request->namaOrganisasi;
        $email  = $request->emailUMKM;
        $HP = $request->nohpUMKM;
        $userID = $request->noidUser;
        // dateNOW
        $dateNow = Carbon::now()->toDateTimeString();
        $cekdate = date("Y-m-d");
        // check login
        $cekRegisterGuest = DB::table('regiskegiatan')->whereRaw("EMAILPESERTA = '$guestEmail' AND DATE(created_at) = '$cekdate' ")->get()->count();
        $cekRegisterLogin = DB::table('regiskegiatan')->whereRaw("EMAILPESERTA = '$email' AND DATE(created_At) = '$cekdate' ")->get()->count();
        //Logic
        if($cekRegisterGuest || $cekRegisterLogin > 0 ){
            Alert::error('Terima Kasih', 'Anda Telah Terdaftar')->persistent('Close')->autoclose(3000);
            return redirect('eventregister/'.$page);
        }
        elseif($statusLogin == "LOGIN"){
            DB::table('regiskegiatan')->insert([
                'IDKEGIATAN' => $idKegiatanlogin,
                'IDUSER'    => $userID,
                'NAMAPESERTA' => $nama,
                'NAMAUMKM' => $namaUMKM,
                'EMAILPESERTA' => $email,
                'HANDPHONEPESERTA' => $HP,
                'created_at' => $dateNow
            ]);
            Alert::success('Terima Kasih','Selamat '.$nama.' Anda Telah Terdaftar')->persistent('Close')->autoclose(3000);
            return redirect('eventregister/'.$page);
        }else{
            DB::table('regiskegiatan')->insert([
                'IDKEGIATAN' => $idkegiatanGuest,
                'IDUSER'    => "",
                'NAMAPESERTA' => $guestName,
                'NAMAUMKM' => "",
                'EMAILPESERTA' => $guestEmail,
                'HANDPHONEPESERTA' => $guestHP,
                'created_at' => $dateNow
            ]);
            Alert::success('Terima Kasih','Selamat '.$guestName.' Anda Telah Terdaftar')->persistent('Close')->autoclose(3000);
            return redirect('eventregister/'.$page);
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
        
        //get Data
        $dataEvent = DB::table('inptkegiatan')
        ->where('NO', '=', $id)
        ->get();
        return view('pages/eventRegister',[
            'dataEvent' => $dataEvent,
        ]);
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
