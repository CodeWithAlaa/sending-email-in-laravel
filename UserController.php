<?php

namespace App\Http\Controllers;

use App\Mail\DisableAccountEmail;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Image;
use Hash;
use Illuminate\Support\Facades\Mail;
use DB;
class UserController extends Controller
{



    public function __construct()
    {
        $this->middleware('auth');

    }


    public function desactiver(){

            
        $user = Auth::user();
         DB::table('vendeurs')
                 ->where( 'vendeurs.vendeur_id', $user->id)
                 ->update(['vendeurs.etat_compte'=>'desactiver']);
        


        $email=Auth::user()->email;
        Mail::to($email)->send(new DisableAccountEmail);      
        $user->save();
        Auth::logout();


        return redirect('/');


    }
}
