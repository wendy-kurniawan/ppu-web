<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class KuesionerGuest extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('pages/kuesionerGuest');
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
        $emailGuest         = $request->emailGuest;
        $idKegiatanGuest    = $request->idkegiatanGuest;
        $jwbGuest           = $request->jwb;
        /*date now */
        $dateNow = Carbon::now()->toDateTimeString();
        $data = $request->all();
        // dd($jwbGuest);
        for ($i=0; $i < count($jwbGuest); $i++) { 
            // echo "No[$i] ".$jwbGuest[$i]."<br>";
            DB::table('hasilkuesioner')->insert([
                'IDKEGIATAN' => $idKegiatanGuest,
                'IDUSER' => "Guest",
                'JAWABAN'=> $jwbGuest[$i],
                'created_at' => $dateNow
            ]);
        }
        // dd($data);
        // update
        DB::table('regiskegiatan')->whereRaw("IDKEGIATAN = '$idKegiatanGuest' AND EMAILPESERTA = '$emailGuest' ")
        ->update(['STATUSKUESIONER' => 'DONE','updated_at' => $dateNow]);
        /*
            Audit Log
        */
        DB::table('auditlog')->insert([
            'AKTIVITASUSER' => $emailGuest." Mengisi Kuesioner dengan idkegiatan: ".$idKegiatanGuest,
            'created_at' => $dateNow
        ]);

        /*for optimize database */
        DB::disconnect('regiskegiatan');
        DB::disconnect('hasilkuesioner');
        DB::disconnect('auditlog');
        
        Alert::success('Data Kuesioner Telah Tersubmit', 'Terima Kasih')->persistent('Close')->autoclose(3000);
        return redirect('checkkuesioner');
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
        $getGuest       = $this->dataregisKegiatan($id);
        $getKuesioner   = $this->dbKuesioner($getGuest);
        // dd($getGuest,$getKuesioner);

        return view('pages/kuesionerGuest',[
            'getGuest'  => $getGuest,
        ]);
    }
    //dataUser
    private function dataregisKegiatan($idGuest){
        return DB::table('regiskegiatan')
        ->join('inptkegiatan', 'inptkegiatan.IDKEGIATAN', '=', 'regiskegiatan.IDKEGIATAN')
        ->whereRaw("EMAILPESERTA = '$idGuest' AND STATUSKUESIONER= 'UNDONE' ")->get();
    }
    /*get data kuesioner */
    private function dbKuesioner($idKegiatan){ 
        foreach ($idKegiatan as $key => $value) {
            $kuesioner = DB::table('kuesioner')->where('IDKEGIATAN', '=', $value->IDKEGIATAN)->get();
            $value->totalKuesioner = $kuesioner;
        }
        return $idKegiatan;
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
