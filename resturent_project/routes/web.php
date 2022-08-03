<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

route::get('/login',"App\Http\Controllers\homecontroller@login"); //->middleware('Alreadylogin');
route::get('/registration',"App\Http\Controllers\homecontroller@registration");
route::post('/addadmin',"App\Http\Controllers\Admincontroller@addAdmin");
route::post('/loginCheck',"App\Http\Controllers\LogINController@LoginCheck");
route::get('/aplogOut',"App\Http\Controllers\LogINController@apLogout");


/*Product Routing*/

route::get('Home',"App\Http\Controllers\homecontroller@Home");
route::get('/UploadProductpage',"App\Http\Controllers\ProductController@UploadProductpage")->middleware('AuthCheck');;
route::post('/UploadProduct',"App\Http\Controllers\ProductController@UploadProduct")->middleware('AuthCheck');
route::get('/AllproductShow',"App\Http\Controllers\ProductController@AllproductShow")->middleware('AuthCheck');;
Route::get('delete/{id}','App\Http\Controllers\ProductController@ProductDelete');
Route::get('edit/{id}','App\Http\Controllers\ProductController@ProductEdit');
Route::post('/edit','App\Http\Controllers\ProductController@Productupdate');
Route::get('/productOrder','App\Http\Controllers\ProductController@ProductOrder')->middleware('AuthCheck');;
Route::get('OrderConfirmPage/{id}','App\Http\Controllers\ProductController@OrderConfirmPage')->middleware('AuthCheck');;
Route::post('OrderConfirmPage','App\Http\Controllers\ProductController@OrderConfirm')->middleware('AuthCheck');;


/*Table Show and Reservation Routing*/
route::get('/tableshow',"App\Http\Controllers\Restaurent_table_Controller@showTable")->middleware('AuthCheck');;
route::get('/tablreservation',"App\Http\Controllers\Restaurent_table_Controller@Reservation_table")->middleware('AuthCheck');;
route::post('/tablreservationCheck',"App\Http\Controllers\Restaurent_table_Controller@Reservation_table_Check")->middleware('AuthCheck');;
route::get('/AdminSeeReservation',"App\Http\Controllers\Restaurent_table_Controller@AdminSeeReservation")->middleware('AuthCheck');;

