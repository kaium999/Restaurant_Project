<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;
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

}
