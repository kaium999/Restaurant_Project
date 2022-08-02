<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
use App\Models\Order;
use File;
class ProductController extends Controller
{
    public function UploadProductpage(){
        return view("UploadProduct");
    }
    public function UploadProduct(Request $req){
        $product=new Menu();
        $product->product_name=$req->Productname;
        if($req->hasfile('Product_image')){
            $file=$req->file('Product_image');
            $extension=$file->getClientOriginalName();
            $filename=time().'.'.$extension;
            $file-> move(public_path('public/Image'), $filename);

            $product->product_image=$filename;
          
          } 
       // $product->product_name=$req->Productname;
        $product->product_price=$req->Product_price;
        $product->save();
        return redirect('AllproductShow');
    }

    public function AllproductShow(){
        $menu=Menu::all();
        return view('MenuList',compact('menu'));

    }

    public function ProductDelete($id){
        $data=Menu::find($id);
   
       $destination='public/Image/'.$data->product_image;
       if(File::exists($destination)){
           File::delete($destination);
       }
       $data->delete();
       return redirect('AllproductShow');

   }
   public function ProductEdit($id){
    $data=Menu::find($id);
    return view('ProductEdit',compact('data'));
}
public function Productupdate(Request $req){
    $productData=Menu::find($req->id);
    $productData->product_name=$req->name;
   
   
    if($req->hasfile('image')){

        $destination='public/Image/'.$productData->product_image;
      if(File::exists($destination)){
        File::delete($destination);
         }
        $file=$req->file('image');
        $extension=$file->getClientOriginalName();
        $filename=time().'.'.$extension;
      
        $file-> move(public_path('public/Image'), $filename);
        $productData->product_image=$filename;
       
    }
    $productData->product_price=$req->product_price;
    $productData->update();
    return redirect('AllproductShow'); 

}
public function ProductOrder(){
    $product=Menu::all();
    return view('MenuPageCustomer',compact('product'));
}
public function OrderConfirmPage(){
    return view("CustomerOrderpage");
}
public function OrderConfirm(Request $req){
    $order=new Order();
    $order->order_name=$req->customer_name;
    $order->order_email=$req->customer_email;
    $order->mobile_number=$req->mobile_number;
    $order->quantity=$req->Quantity;
    $order->date=$req->order_date;
    $order->time=$req->time;
    $product=Menu::find(2);
    $order->total_price=$req->Quantity*$product->product_price;
    $order->save();

    //return view("CustomerOrderpage");
}

}
