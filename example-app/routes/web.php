<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
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

// Route::get('/', function () {
//     return view('welcome');
   
// });

// Route::get('/about',function(){
//     return "Hi";
// });

// Route::get('/post/{id}',function($id){
 
//     return "Page number ${id}";
// });

// Route::get('admin/posts/example',array('as'=>'admin',function(){
//    $url = route('admin');
//    return "this url ".$url;
// }));

Route::resource('post','PostController');

Route::get('/post/{id}',[PostController::class,'index']);

Route::get('/contract',[PostController::class,'contract']);