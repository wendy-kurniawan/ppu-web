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
        //get activity narasumber
        $Narasumber = $this->dataNarasumber($dataID);
        // get skills
        $dataSkills = DB::table('skill')->get();
    
        // dd($Narasumber);
        return view('dashboard/profileUsers',
        [
            'users' => $users,
            'Narasumber' => $Narasumber,
            'dataSkills' => $dataSkills,
        ]);
    }
    /*function index*/
    private function dataNarasumber($idNarsumber){
        $dataNara = DB::table('users')
        ->join('profileusers', 'users.PROFILEUSERS_ID', '=', 'profileusers.PROFILE_ID')
        ->select('users.PROFILEUSERS_ID','users.USERNAME','users.STATUSUSER','users.email', 'profileusers.*')
        ->where('PROFILE_ID','=', $idNarsumber)
        ->get();

        foreach ($dataNara as $key => $value) {
            $kegiatanNara   = DB::table('inptkegiatan')->where('IDNARASUMBER', '=', $value->PROFILE_ID)->get();
            $value->kNarasumber = $kegiatanNara;

            $skillsUser     = DB::table('inptskill')
            ->join('skill', 'inptskill.IDSKILL', '=', 'skill.ID_SKILL')
            ->select('inptskill.SKILUSERS_ID', 'inptskill.IDSKILL', 'skill.NAMASKILL')
            ->where('SKILUSERS_ID', '=', $idNarsumber)
            ->get();
            $value->Skills = $skillsUser;
        }

        return $dataNara;
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
        $skills     = $request->skills;
        $dateNow = Carbon::now()->toDateTimeString();

        if($statUser == "ADMIN"){
            $file       = $request->file('docProfile'); 
            if($file == ""){
                $profileTelpAdmin = $request->profileTelpUMKM;
                $replace =str_replace(" ","",$profileTelpAdmin);
                //update
                $profileUser = DB::table('profileusers')
                ->where('PROFILE_ID',$profileID)
                ->update(
                    [
                    'NOHP' => $replace,
                    ]);
                /*
                Audit Log && optimize DB
                */
                DB::table('auditlog')->insert([
                    'AKTIVITASUSER' => "Admin ".$profileID." Mengupdate Profile NoHP ".$profileTelpAdmin,
                    'created_at' => $dateNow
                ]);

                DB::disconnect('profileusers');
                DB::disconnect('auditlog');
                
                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                return redirect('panel/myprofile?myProfile='.$profileID);
            }else{
                //images
                $nameProf   = $file->hashName();
                $move = $file->move(public_path('\assetLogin\img\profile'), $nameProf);

                $profileTelpAdmin = $request->profileTelpUMKM;
                $replace =str_replace(" ","",$profileTelpAdmin);

                //update
                $profileUser = DB::table('profileusers')
                ->where('PROFILE_ID',$profileID)
                ->update(
                    [
                    'NOHP' => $replace,
                    'GAMBAR' => $nameProf,
                    ]);
                 /*
                Audit Log && optimize DB
                */
                DB::table('auditlog')->insert([
                    'AKTIVITASUSER' => "Admin ".$profileID." Mengupdate Profile NoHP".$profileTelpAdmin." Dan Gambar ".$nameProf,
                    'created_at' => $dateNow
                ]);

                DB::disconnect('profileusers');
                DB::disconnect('auditlog');

                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                return redirect('panel/myprofile?myProfile='.$profileID);
            }
        }elseif($statUser == "UMKM"){
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
                /*
                Audit Log && optimize DB
                */
                DB::table('auditlog')->insert([
                    'AKTIVITASUSER' => "UMKM ".$profileID." Mengupdate Profile ".$addrsLembaga.",".$profileTelpUMKM,
                    'created_at' => $dateNow
                ]);

                DB::disconnect('profileusers');
                DB::disconnect('auditlog');
                
                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                return redirect('panel/myprofile?myProfile='.$profileID);
            }else{ //if has photo umkm
                $photoUMKM  = DB::table('profileusers')->where('PROFILE_ID',$profileID)->get();
                
                foreach ($photoUMKM as $umkmPhoto) {
                    if($umkmPhoto->GAMBAR != 'guest.jpg'){
                        $target = unlink(public_path('assetLogin/img/profile/'.$umkmPhoto->GAMBAR));
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
                        /*
                        Audit Log && optimize DB
                        */
                        DB::table('auditlog')->insert([
                            'AKTIVITASUSER' => "UMKM ".$profileID." Mengupdate Profile ".$addrsLembaga.",".$profileTelpUMKM."dan Gambar ".$nameProf,
                            'created_at' => $dateNow
                        ]);

                        DB::disconnect('profileusers');
                        DB::disconnect('auditlog');

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
                        /*
                        Audit Log && optimize DB
                        */
                        DB::table('auditlog')->insert([
                            'AKTIVITASUSER' => "UMKM ".$profileID." Mengupdate Profile ".$addrsLembaga.",".$profileTelpUMKM."dan Gambar ".$nameProf,
                            'created_at' => $dateNow
                        ]);

                        DB::disconnect('profileusers');
                        DB::disconnect('auditlog');

                        Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                        return redirect('panel/myprofile?myProfile='.$profileID);
                    }
                }
                
            }
            
        }elseif ($statUser == "NARASUMBER"){
            $file       = $request->file('docProfile');
            if(!empty($skills)){
                /*Check data skills if number >0 */
                $dataCount      = DB::table('inptskill')->where('SKILUSERS_ID', '=', $profileID)->count();
                /*when user already have that skill */
                $checkdataSkillsUser = DB::table('inptskill')->where('SKILUSERS_ID', '=', $profileID)->count();
                if($dataCount == 0){
                    for ($i=0; $i < count($skills); $i++) { 
                        // echo "No[$i] ".$skills[$i]."<br>";
                        DB::table('inptskill')->insert([
                            'SKILUSERS_ID' => $profileID,
                            'IDSKILL' => $skills[$i],
                            'created_at' => $dateNow
                        ]);
                    }
                    /*
                    Audit Log && Optimized DB
                    */
                    DB::table('auditlog')->insert([
                        'AKTIVITASUSER' => "Narasumber ".$profileID." Menambahkan Bidang Keahlian/Skils",
                        'created_at' => $dateNow
                    ]);
                    DB::disconnect('inptskill');
                    DB::disconnect('auditlog');

                    Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                    return redirect('panel/myprofile?myProfile='.$profileID);
                    
                    Alert::success('Input Skills Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                    return redirect('panel/myprofile?myProfile='.$profileID);
                }elseif($checkdataSkillsUser > 0) {
                   /*find the compare array IMPORTANT!!! */

                   $deleteSkill = DB::table('inptskill')->where('SKILUSERS_ID', '=', $profileID)->delete();
                   for ($i=0; $i < count($skills); $i++) { 
                    // echo "No[$i] ".$skills[$i]."<br>";
                    DB::table('inptskill')->insert([
                        'SKILUSERS_ID' => $profileID,
                        'IDSKILL' => $skills[$i],
                        'created_at' => $dateNow
                    ]);
                }

                    // dd($request->skills, $deleteSkill);

                    Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                    return redirect('panel/myprofile?myProfile='.$profileID);


                }
            }elseif($file == ""){
                    $profileHandphoneNarasumber = $request->profileHandphoneNarasumber;
                    $profileJK      = $request->profileJK;
                    $bioNarasumber  = $request->bioNarasumber;
                    $tglLahir       = $request->tglLahirprofile;
                    //update
                    $profileUser = DB::table('profileusers')
                    ->where('PROFILE_ID',$profileID)
                    ->update(
                        [
                        'TANGGALLAHIR' =>$tglLahir,
                        'NOHP' => $profileHandphoneNarasumber,
                        'BIOGRAFI' => $bioNarasumber,
                        'JENISKL' => $profileJK,
                        ]);
                    /*
                    Audit Log && optimize db
                    */
                    DB::table('auditlog')->insert([
                        'AKTIVITASUSER' => "Narasumber ".$profileID." Mengupdate Profile ".$profileHandphoneNarasumber.",".$profileJK."dan tglLahir ".$tglLahir,
                        'created_at' => $dateNow
                    ]);

                    DB::disconnect('profileusers');
                    DB::disconnect('auditlog');

                    Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                    return redirect('panel/myprofile?myProfile='.$profileID);
                }else{ //if has photo
                    $photo  = DB::table('profileusers')->where('PROFILE_ID',$profileID)->get();

                        foreach ($photo as $photoNarasumber) {
                            if($photoNarasumber->GAMBAR != 'guest.jpg'){
                                $targetphotoNarasumber = unlink(public_path('assetLogin/img/profile/'.$photoNarasumber->GAMBAR));

                                //move PhotoNarasumber
                                $nameProf   = $file->hashName();
                                $move = $file->move(public_path('\assetLogin\img\profile'), $nameProf);
                                            
                                $profileHandphoneNarasumber = $request->profileHandphoneNarasumber;
                                $profileJK = $request->profileJK;
                                $bioNarasumber = $request->bioNarasumber;
                                $tglLahir       = $request->tglLahirprofile;
            
                                //update
                                $profileUser = DB::table('profileusers')
                                ->where('PROFILE_ID',$profileID)
                                ->update(
                                    [
                                    'TANGGALLAHIR' =>$tglLahir,
                                    'NOHP' => $profileHandphoneNarasumber,
                                    'GAMBAR' => $nameProf,
                                    'BIOGRAFI' => $bioNarasumber,
                                    'JENISKL' => $profileJK,
                                    ]);
                                /*
                                Audit Log && optimize DB
                                */
                                DB::table('auditlog')->insert([
                                    'AKTIVITASUSER' => "Narasumber ".$profileID." Mengupdate Profile ".$profileHandphoneNarasumber.",".$profileJK."dan tglLahir ".$tglLahir,
                                    'created_at' => $dateNow
                                ]);
            
                                DB::disconnect('profileusers');
                                DB::disconnect('auditlog');
            
                                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                                return redirect('panel/myprofile?myProfile='.$profileID);
                            }else{
                                //move PhotoNarasumber
                                $nameProf   = $file->hashName();
                                $move = $file->move(public_path('\assetLogin\img\profile'), $nameProf);
                                            
                                $profileHandphoneNarasumber = $request->profileHandphoneNarasumber;
                                $profileJK = $request->profileJK;
                                $bioNarasumber = $request->bioNarasumber;
                                $tglLahir       = $request->tglLahirprofile;
            
                                //update
                                $profileUser = DB::table('profileusers')
                                ->where('PROFILE_ID',$profileID)
                                ->update(
                                    [
                                    'TANGGALLAHIR' =>$tglLahir,
                                    'NOHP' => $profileHandphoneNarasumber,
                                    'GAMBAR' => $nameProf,
                                    'BIOGRAFI' => $bioNarasumber,
                                    'JENISKL' => $profileJK,
                                    ]);
                                /*
                                Audit Log && optimize DB
                                */
                                DB::table('auditlog')->insert([
                                    'AKTIVITASUSER' => "Narasumber ".$profileID." Mengupdate Profile ".$profileHandphoneNarasumber.",".$profileJK."dan tglLahir ".$tglLahir,
                                    'created_at' => $dateNow
                                ]);
            
                                DB::disconnect('profileusers');
                                DB::disconnect('auditlog');
            
                                Alert::success('Update Berhasil ', 'Terima Kasih')->persistent('Close')->autoclose(3000);
                                return redirect('panel/myprofile?myProfile='.$profileID);

                            }
                        }
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
