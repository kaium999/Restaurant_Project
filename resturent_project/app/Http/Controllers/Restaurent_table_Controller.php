<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\reservation;
use App\Models\restaurent_table;
class Restaurent_table_Controller extends Controller
{
    public function showTable(){
        $table=restaurent_table::all();
        return view('RestaurentTableShow',compact('table'));
    }

    public function Reservation_table(){
        return view('TableReservationPage');
    }

    public function Reservation_table_Check(Request $req){
        $data=reservation::all();
        foreach($data as $data){
        if($data->customer_no_of_seats==$req->No_of_seats){
            if($data->reservation_date==$req->reserve_date){
                return "You can not Reserve This table is reserve";
            }
        }
        else{
            $object=new reservation();
            $object->customer_name=$req->customer_name;
            $object->customer_email=$req->customer_email;
            $object->customer_no_of_seats=$req->No_of_seats;
            $object->reservation_date=$req->reserve_date;
            $object->mobile_number=$req->mobile_number;
            $object->save();
            return "Sucessfully reservation,,, thank u";
        }
    }
    }

    public function AdminSeeReservation(){
        $reservation=reservation::all();
        return view ("SeeReservationPage",compact('reservation'));
    }
}
