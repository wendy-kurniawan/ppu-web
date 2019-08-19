<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class KegiatanUMKM extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('dashboard/inputKegiatan');
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
        //Get Data from request
        $idNarasumber   = $request->idNarasumber;
        $namaNarasumber  = $request->namaNarasumber;
        $jkKegiatan     = $request->JKKegiatan;
        $judul          = $request->judulKegiatan;
        //Date Start
        $reqtglMulaiKegiatan       = $request->tglMulai;
        $reqtimeMulaiKegiatan      = $request->timeMulai;
        $MulaiKegiatan   = date('Y-m-d H:i:s', strtotime("$reqtglMulaiKegiatan $reqtimeMulaiKegiatan"));
        //Date Finish
        $tglSelesaiKegiatan     = $request->tglSelesai;
        $timeSelesaiKegiatan    = $request->timeSelesai;
        $selesaiKegiatan        = date('Y-m-d H:i:s', strtotime("$tglSelesaiKegiatan $timeSelesaiKegiatan"));
        $keterangan             =$request->keteranganKegiatan;
        $lokasiAcara            = $request->lokasiKegiatan;
        /*Get Images then hash it */
        $gambar                 = $request->file('gambarLokasi');
        /*ambil nama kemudian hitung lalu susbstr kan */
        $kegiatanID = $idNarasumber;
        $dataID =  substr($kegiatanID,0,3);
        /*count form DB */
        $lastCount = DB::table('inptkegiatan')->count();
        $lastNumber = $lastCount + (int) 1;
        $idKegiatan = $dataID.sprintf("%06s",$lastNumber);
        /*date now */
        $dateNow = Carbon::now()->toDateTimeString();
        /*Insert DB */
        if($gambar != null){
        $hashGambar             = $gambar->hashName();
        $move = $gambar->move(public_path('\assetLogin\img\kegiatan'), $hashGambar);
        DB::table('inptkegiatan')->insert([
            'IDKEGIATAN' => $idKegiatan,
            'IDNARASUMBER' => $idNarasumber,
            'NAMANARASUMBER' => $namaNarasumber,
            'JKKEGIATAN' => $jkKegiatan,
            'JUDULACARA' => $judul,
            'LOKASI'    => $lokasiAcara,
            'KETKEGIATAN' => $keterangan,
            'TGLMULAI' => $MulaiKegiatan,
            'TGLSELESAI' => $selesaiKegiatan,
            'GAMBAR' =>$hashGambar,
            'created_at' => $dateNow
        ]);
            Alert::success('Kegiatan'.$judul.'Berhasil Ditambahkan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
            return redirect('panel/kegiatanUMKM');
        }else{
            DB::table('inptkegiatan')->insert([
                'IDKEGIATAN' => $idKegiatan,
                'IDNARASUMBER' => $idNarasumber,
                'NAMANARASUMBER' => $namaNarasumber,
                'JKKEGIATAN' => $jkKegiatan,
                'JUDULACARA' => $judul,
                'LOKASI'    => $lokasiAcara,
                'KETKEGIATAN' => $keterangan,
                'TGLMULAI' => $MulaiKegiatan,
                'TGLSELESAI' => $selesaiKegiatan,
                'GAMBAR' => "",
                'created_at' => $dateNow
            ]);
            Alert::success('Kegiatan '.$judul.' Berhasil Ditambahkan', 'Terima Kasih')->persistent('Close')->autoclose(3000);
            return redirect('panel/kegiatanUMKM');
        }

        // dd($idKegiatan,$idNarasumber,$namaNarasumber,$jkKegiatan,$judul,$MulaiKegiatan,$selesaiKegiatan,$keterangan,$lokasiAcara,$gambar);

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
