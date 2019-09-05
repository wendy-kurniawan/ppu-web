<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rangkingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $rangkingBoard  = $this->getRangking();

        // dd($rangkingBoard);
        return view('dashboard/rangkingBoard',[
            'rangkingBoard' => $rangkingBoard,
        ]);
    }
    /*Rangkin function */
    private function getRangking(){
        $dataUser = DB::table('users')
        ->select('users.PROFILEUSERS_ID','profileusers.NAMALENGKAP')
        ->join('profileusers', 'users.PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->where('STATUSUSER', '=', 'NARASUMBER')->get();
        
        foreach ($dataUser as $key => $value) {
           $dataKegiatan = DB::table('inptkegiatan')
           ->select([
               'inptkegiatan.IDKEGIATAN','kuesioner.IDKEGIATAN','hasilkuesioner.IDKEGIATAN','regiskegiatan.IDKEGIATAN',
               DB::raw('(SELECT (COUNT(kuesioner.PERTANYAAN)*5) FROM kuesioner WHERE inptkegiatan.IDKEGIATAN = kuesioner.IDKEGIATAN) as totalPertanyaan'),
               DB::raw('(SELECT SUM(hasilkuesioner.JAWABAN) FROM hasilkuesioner WHERE kuesioner.IDKEGIATAN = hasilkuesioner.IDKEGIATAN) as totalJawaban'),            
               DB::raw('(SELECT (COUNT(regiskegiatan.IDKEGIATAN)*totalPertanyaan) FROM regiskegiatan WHERE hasilkuesioner.IDKEGIATAN = regiskegiatan.IDKEGIATAN) as totalUserPerkues'),                
               DB::raw('(SELECT ROUND(totalUserPerkues/totalJawaban,2)*100) as Persen')
               ])
           ->LeftJoin('kuesioner', 'inptkegiatan.IDKEGIATAN', '=', 'kuesioner.IDKEGIATAN')
           ->LeftJoin('hasilkuesioner', 'inptkegiatan.IDKEGIATAN', '=', 'hasilkuesioner.IDKEGIATAN')
           ->LEFTJoin('regiskegiatan', 'inptkegiatan.IDKEGIATAN', '=', 'regiskegiatan.IDKEGIATAN')
           ->groupBy('inptkegiatan.IDKEGIATAN','kuesioner.IDKEGIATAN','hasilkuesioner.IDKEGIATAN','regiskegiatan.IDKEGIATAN')
           ->where('inptkegiatan.IDNARASUMBER', '=', $value->PROFILEUSERS_ID)
           ->get();
           $value->kegiatanNarasumber = $dataKegiatan;

           $countKegiatan = DB::table('inptkegiatan')->where('IDNARASUMBER' ,'=', $value->PROFILEUSERS_ID)->count('IDKEGIATAN');
           $value->totalKegiatanNarasumber = $countKegiatan;

           $collection = collect($value->kegiatanNarasumber)->sum('Persen');
           $value->rank = $collection;
       }
       return $dataUser;
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
