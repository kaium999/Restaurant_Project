<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use App\Models\admin;
class AdminController extends Controller
{
    public function addAdmin(Request $req){
        $ad=new admin();
        $ad->name=$req->name;
        $ad->email=$req->email;
        $ad->password=\Hash::make($req->password);
        $ad->mobile_number=$req->mobile_number;
        $ad->save();
        return redirect('/');
}
}