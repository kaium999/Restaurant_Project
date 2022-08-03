<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\admin;
class LogINController extends Controller
{
    public function LoginCheck(Request $req){
        $obj=admin::where('email','=',$req->email)->first();
        if($obj){
            if(Hash::check($req->password,$obj->password)){
                $req->session()->put('logid',$obj->id);
                $req->session()->put('username',$obj->name);
             return redirect('Home');
            }
            else{
             return "You are not Athentic User";
            }
        }else{
         return "You email are not Authentic";
        }

    }

    public function apLogout(){
        if(Session::has('logid')){
            Session::pull('logid');
            return redirect('login');
        }
     }
}
