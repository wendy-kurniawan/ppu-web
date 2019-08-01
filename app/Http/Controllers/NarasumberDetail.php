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
         $idNarsumber   = $request->idNarasumber;
         $idUMKM        = $request->idUMKM;
         
         //method Narasumber
         $profileNarasumber = $this->dataNarasumber($idNarsumber);
         $profileUMKM = $this->dataUMKM($idUMKM);

         return view('dashboard/profileNarasumber',
         [
             'profileNarasumber' => $profileNarasumber,
             'profileUMKM'  => $profileUMKM,
             'idNarsumber' => $idNarsumber,
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
        $idUMKM         = $request->idUMKM;
        $idNarasumber   = $request->idNarasumber;
        $masalahUMKM    = $request->permasalahanUMKM;
        $tlpUMKM        = $request->tlpUMKM;
        //data
        dd($idUMKM.$idNarasumber.$masalahUMKM.$tlpUMKM);
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
