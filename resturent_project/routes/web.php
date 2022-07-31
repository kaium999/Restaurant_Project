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

route::get('/',"App\Http\Controllers\homecontroller@login");
route::get('/registration',"App\Http\Controllers\homecontroller@registration");
route::post('/addadmin',"App\Http\Controllers\Admincontroller@addAdmin");
route::post('/loginCheck',"App\Http\Controllers\LogINController@LoginCheck");
route::get('/aplogOut',"App\Http\Controllers\LogINController@apLogout");


/*Product Routing*/
route::get('/UploadProductpage',"App\Http\Controllers\ProductController@UploadProductpage");
route::post('/UploadProduct',"App\Http\Controllers\ProductController@UploadProduct");
route::get('/AllproductShow',"App\Http\Controllers\ProductController@AllproductShow");
Route::get('delete/{id}','App\Http\Controllers\ProductController@ProductDelete');
Route::get('edit/{id}','App\Http\Controllers\ProductController@ProductEdit');
Route::post('/edit','App\Http\Controllers\ProductController@Productupdate');