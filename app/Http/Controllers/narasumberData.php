<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class narasumberData extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $dataNarasumber = DB::table('users')
        ->join('profileusers', 'PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->select('users.*','profileusers.*')
        ->where('STATUSUSER', '=', 'NARASUMBER')
        ->get();
        // dd($dataNarasumber);

        return view('dashboard/dataNarasumber',
        [
            'dataNarasumber' => $dataNarasumber,
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
        $data = DB::table('users')
        ->join('profileusers', 'users.PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->select('users.*','profileusers.*')
        ->whereRaw("users.USERNAME LIKE '%$id%' AND users.STATUSUSER= 'NARASUMBER' ")
        ->get();

        return $data;
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
