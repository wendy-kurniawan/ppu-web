<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class formKuesioner extends Controller
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
        //insert to db
        $kegiatanID = $request->idKegiatan;    
        $idUser     = $request->userID;    
        $jwbUser    = $request->jwb;
        /*date now */
        $dateNow = Carbon::now()->toDateTimeString();
        // dd($request->all());
        for ($i=0; $i < count($jwbUser); $i++) { 
            // echo $jwbUser[$i]."<br>";
            DB::table('hasilkuesioner')->insert([
                'IDKEGIATAN' => $kegiatanID,
                'IDUSER' => $idUser,
                'JAWABAN'=> $jwbUser[$i],
                'created_at' => $dateNow
            ]);
        }
        //update
        DB::table('regiskegiatan')->whereRaw("IDKEGIATAN = '$kegiatanID' AND IDUSER = '$idUser' ")
        ->update(['STATUSKUESIONER' => 'DONE','updated_at' => $dateNow]);
        /*for optimize database */
        DB::disconnect('regiskegiatan');
        
        Alert::success('Data Kuesioner Telah Tersubmit', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('panel/datakuesioner/'.$idUser);
        
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
        $dataKuesioner  = $this->dbKuesioner($id);

        return view('dashboard/detailKuesioner',[
            'dataKuesioner' => $dataKuesioner,
        ]);
    }
    /*data Kuesioner */
    private function dbKuesioner($idKegiatan){
        return DB::table('kuesioner')
        ->where('IDKEGIATAN', '=', $idKegiatan)
        ->get();
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
