<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NarasumberController extends Controller
{
    public function index() {
        $rankings = DB::table('hasilkuesioner')
            ->join('kuesioner', 'hasilkuesioner.IDKEGIATAN', 'kuesioner.IDKEGIATAN')
            ->select('hasilkuesioner.IDKEGIATAN')
            ->selectRaw('ROUND((SUM(JAWABAN) / (COUNT(kuesioner.PERTANYAAN) * ?)) / ? * ?, ?) as PERCENTAGE', [5, $this->getTotalActivity('Goo000005'), 100, 2])
            ->groupBy('hasilkuesioner.IDKEGIATAN')
            ->get();
        dd($rankings);
        return view('pages.narasumber', ['rankings' => $rankings]);
    }

    

    private function getTotalActivity($id_kegiatan) {
        $totals = DB::table('inptkegiatan')
            ->where('IDNARASUMBER', $this->getNarasumber($id_kegiatan))
            ->groupBy('IDNARASUMBER')
            ->selectRaw('COUNT(IDKEGIATAN) as jumlah_kegiatan')
            ->get();

        foreach ($totals as $total) {
            return $total->jumlah_kegiatan;
        }
    }

    private function getNarasumber($id_kegiatan) {
        $narasumbers = DB::table('inptkegiatan')
            ->where('IDKEGIATAN', $id_kegiatan)
            ->select('IDNARASUMBER')
            ->get();

        foreach ($narasumbers as $narasumber) {
            return $narasumber->IDNARASUMBER;
        }
    }
}
