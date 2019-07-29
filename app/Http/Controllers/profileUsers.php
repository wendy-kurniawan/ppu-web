<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Alert;

class profileUsers extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //GET Data Myprofile
        $dataID     =$request->myProfile;
        //
        $users = DB::table('users')
            ->join('profileusers', 'PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
            ->select('users.*', 'profileusers.*')
            ->where('PROFILE_ID','=', $dataID)
            ->get();
    
        // dd($users);
        
        return view('dashboard/profileUsers',
        [
            'users' => $users,
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
        //stat user
        $statUser   = $request->statUser;
        $profileID  = $request->idProfile;
        
        if($statUser == "UMKM"){
            $file       = $request->file('docProfile'); 
            if($file == ""){
                $addrsLembaga = $request->addrsLembaga;
                $profileTelpUMKM = $request->profileTelpUMKM;
                $replace =str_replace(" ","",$profileTelpUMKM);

                // dd("INI UMKM".$statUser.$profileID.$addrsLembaga.$replace);
                //update
                $profileUser = DB::table('profileusers')
                ->where('PROFILE_ID',$profileID)
                ->update(
                    [
                    'NOHPUMKM' => $replace,
                    'ALAMATUMKM' => $addrsLembaga,
                    ]);
                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                return redirect('panel/myprofile?myProfile='.$profileID);
            }else{
                //images
                $nameProf   = $file->hashName();
                $move = $file->move(public_path('\assetLogin\img\profile'), $nameProf);

                $addrsLembaga = $request->addrsLembaga;
                $profileTelpUMKM = $request->profileTelpUMKM;
                $replace =str_replace(" ","",$profileTelpUMKM);

                //update
                $profileUser = DB::table('profileusers')
                ->where('PROFILE_ID',$profileID)
                ->update(
                    [
                    'NOHPUMKM' => $replace,
                    'GAMBAR' => $nameProf,
                    'ALAMATUMKM' => $addrsLembaga,
                    ]);
                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                return redirect('panel/myprofile?myProfile='.$profileID);
            }
            
        }elseif ($statUser == "NARASUMBER"){
            $file       = $request->file('docProfile');            
                if($file == ""){
                    $profileHandphoneNarasumber = $request->profileHandphoneNarasumber;
                    $profileJK = $request->profileJK;
                    $bioNarasumber = $request->bioNarasumber;
        
                    //update
                    $profileUser = DB::table('profileusers')
                    ->where('PROFILE_ID',$profileID)
                    ->update(
                        [
                        'NOHP' => $profileHandphoneNarasumber,
                        'BIOGRAFI' => $bioNarasumber,
                        'JENISKL' => $profileJK,
                        ]);
                    Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                    return redirect('panel/myprofile?myProfile='.$profileID);
                }else{
                    $nameProf   = $file->hashName();
                    $move = $file->move(public_path('\assetLogin\img\profile'), $nameProf);
                                
                    $profileHandphoneNarasumber = $request->profileHandphoneNarasumber;
                    $profileJK = $request->profileJK;
                    $bioNarasumber = $request->bioNarasumber;

                    //update
                    $profileUser = DB::table('profileusers')
                    ->where('PROFILE_ID',$profileID)
                    ->update(
                        [
                        'NOHP' => $profileHandphoneNarasumber,
                        'GAMBAR' => $nameProf,
                        'BIOGRAFI' => $bioNarasumber,
                        'JENISKL' => $profileJK,
                        ]);
                    Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                    return redirect('panel/myprofile?myProfile='.$profileID);
                }
        }else{
            Alert::error('Update Gagal ', 'Hubungi Pihak Terkait')->persistent('Close')->autoclose(3000);
            return redirect('panel/myprofile?myProfile='.$profileID);
        }
        
        Alert::error('Update Gagal ', 'Hubungi Pihak Terkait')->persistent('Close')->autoclose(3000);
        return redirect('panel/myprofile?myProfile='.$profileID);
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
