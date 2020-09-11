<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;
use App\post;
use GuzzleHttp\Psr7\Request;

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/home', 'HomeController@index')->name('home');

Route::post('/cekBerita/kategori',"HomeController@kategori");
Route::get('cekBerita',"HomeController@berita");


Route::get('blog',function(){
    $posts = post::all();
    return view('blog',['posts'=> $posts]);
});
Route::get('blog/create',function(){
   return view('post');
});
Route::post('blog/create/post', 'HomeController@post');
Route::get('blog/delete/{id}', 'HomeController@delete');
Route::get('blog/edit/{id}','homeController@edit');
Route::post('/post/update/{id}', 'HomeController@update');


Route::resource('cerita','CeritaController');




Auth::routes();


