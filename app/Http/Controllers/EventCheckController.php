<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class EventCheckController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages/eventCheck');
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
        $emailGuest = $request->emailGuest;
        /*Check */
        $cek    = DB::table('regiskegiatan') ->whereRaw("EMAILPESERTA = '$emailGuest' AND STATUSKUESIONER= 'UNDONE' ")->count(); 
        if($cek == 0){
            Alert::info('Email: '.$emailGuest.'Sudah Mengisi Kuesioner', 'Informasi')->persistent('Close')->autoclose(4000);
            return redirect('checkkuesioner');
        }else{
            Alert::info('Email: '.$emailGuest.' Terdaftar', 'Info')->persistent('Close')->autoclose(4000);
            return redirect('kuesioner/'.$emailGuest);
        }
        // dd($cek);
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
