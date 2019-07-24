<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/src';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        /*Check the Condition */
        if($data['statusUser'] == "UMKM"){
            //ambil nama kemudian str_replace lalu susbstr kan
            $namaUser = $data['namaUMKM'];
            $replacE = str_replace(" ","",$namaUser);
            $sub_kalimat = substr($replacE,0,6);
            
            //ambilnomorterakhir database
            $maxUsers = User::count();
            $lastNumber = $maxUsers + (int) 1;
            //data profileuser_id
            $idUser = $sub_kalimat.sprintf("%06s",$lastNumber);


            /*for Check the validastion */
            // $password   = $data['password'];
            // $email      = $data['email'];
            // $status     = $data['statusUser'];
            // dd($idUser,$namaUser,$password,$email,$status);

              return User::create([
            'PROFILEUSERS_ID' => $idUser,
            'USERNAME' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'STATUSUSER'=> $data['statusUser'],
            ]);
        }else{
            //ambil nama kemudian str_replace lalu susbstr kan
            $namaNarasumber = $data['name'];
            $replacE = str_replace(" ","",$namaNarasumber);
            $sub_kalimat = substr($replacE,0,6);
            
            //ambilnomorterakhir database
            $maxUsers = User::count();
            $lastNumber = $maxUsers + (int) 1;
            //data profileuser_id
            $idNarasumber = $sub_kalimat.sprintf("%06s",$lastNumber);

              /*for Check the validastion */
            // $password   = $data['password'];
            // $email      = $data['email'];
            // $status     = $data['statusUser'];
            // dd($idNarasumber,$password,$email,$status);

            return User::create([
                'PROFILEUSERS_ID' => $idNarasumber,
                'USERNAME' => $data['name'],
                'email' => $data['email'],
                'password' => Hash::make($data['password']),
                'STATUSUSER'=> $data['statusUser'],
                ]);
        
        }
    }
}
