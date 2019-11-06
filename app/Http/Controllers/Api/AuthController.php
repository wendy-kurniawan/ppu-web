<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use Validator;

class AuthController extends Controller
{
    
   public function register(Request $request) {
        /*Validasi */
        $validator = Validator::make(request()->all(), [
            'USERNAME'  => 'required|max:80',
            'NAMAUMKM' => 'required|max:45',
            'email' => 'required|max:191|email',
        ]);

        /*check status */
        $STATUSUSER     = $request->STATUSUSER;

        $USERNAME       = $request->USERNAME;
        $NAMAUMKM       = $request->NAMAUMKM;
        $email          = $request->email;
        $password       = $request->password;
        $dateNow        = Carbon::now()->toDateTimeString();
        // check user
        $checkUser = DB::table('users')->where('email', '=', $email)->count();

        if( $validator->fails() ){
            return response()->json(['success'=>false, 'message'=> $validator->errors()]);           
        }elseif($checkUser == 0){
            if($STATUSUSER == "UMKM"){
                //ambil nama kemudian str_replace lalu susbstr kan
                $namaUser = $NAMAUMKM;
                $replacE = str_replace(" ","",$namaUser);
                $sub_kalimat = substr($replacE,0,6);
                
                //ambilnomorterakhir database
                $maxUsers   = DB::table('users')->count();
                $lastNumber = $maxUsers + (int) 1;
                //data profileuser_id
                $PROFILEUSERS_ID = $sub_kalimat.sprintf("%06s",$lastNumber);

                $register      = $this->userRegister($PROFILEUSERS_ID,$USERNAME,$NAMAUMKM,$email,$password,$STATUSUSER,$dateNow);
                
                $dataUser = DB::table('users')->select('PROFILEUSERS_ID','USERNAME','NAMAUMKM','email','STATUSUSER')->where('email', '=', $email)->get();
                return response()->json(['success'=>true,'message'=>'success', 'data' => $dataUser]);
            }else{
                //ambil nama kemudian str_replace lalu susbstr kan
                $namaNarasumber = $USERNAME;
                $replacE = str_replace(" ","",$namaNarasumber);
                $sub_kalimat = substr($replacE,0,6);
                
                //ambilnomorterakhir database
                $maxUsers = DB::table('users')->count();
                $lastNumber = $maxUsers + (int) 1;
                //data profileuser_id
                $PROFILEUSERS_ID = $sub_kalimat.sprintf("%06s",$lastNumber);

                $register    = $this->userRegister($PROFILEUSERS_ID,$USERNAME,$NAMAUMKM,$email,$password,$STATUSUSER,$dateNow);
                $dataUser = DB::table('users')->select('PROFILEUSERS_ID','USERNAME','NAMAUMKM','email','STATUSUSER')->where('email', '=', $email)->get();
                return response()->json(['success'=>true,'message'=>'success', 'data' => $dataUser]);
            }
        }else{
            return response()->json(['success'=>false,'message'=>'Email Tersebut Telah Terdaftar']);
        }

   }
   /*Insert DB */
   private function userRegister($PROFILEUSERS_ID,$USERNAME,$NAMAUMKM,$email,$password,$STATUSUSER,$dateNow){
       try {
                DB::table('users')->insert([
                'PROFILEUSERS_ID' => $PROFILEUSERS_ID,
                'USERNAME'  => $USERNAME,
                'NAMAUMKM' => $NAMAUMKM,
                'email' => $email,
                'password'  => Hash::make($password),
                'STATUSUSER'    => $STATUSUSER,
                'created_at'    => $dateNow,
            ]);

       } catch (\Throwable $th) {
           //throw $th;
           return $th->getMessage();
       }
   }

   public function login(Request $request){
    $email                  = $request->email;
    $password               = $request->password;
    // check
    $countUser = DB::table('users')->whereRaw(" email = '$email' ")->count();
    $checkUser = DB::table('users')->whereRaw(" email = '$email' ")->first();

    if($countUser == 0){
        return response()->json(['success'=>false, 'message' => 'Login Fail Please check email or Password']);
    }else{
        if(Hash::check($password, $checkUser->password)){
            //if auth
            $dataUser = DB::table('users')->select('PROFILEUSERS_ID','USERNAME','NAMAUMKM','email','STATUSUSER')->where('email', '=', $email)->get();
            return response()->json(['success'=>true,'message'=>'success', 'data' => $dataUser]);
        }else{
            return response()->json(['success'=>false, 'message' => 'Login Fail, please check email or Password', 'data' => "Login Fail, please check email or Password"]);
        }
     }

   }

    
}
