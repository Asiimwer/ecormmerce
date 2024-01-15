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

Route::get('/', function () {
    return view('statics.index');
});

Route::get('landing_page', function () {
    return view('welcome');
});

Route::get('fill', function () {
    return view('statics.form');
});
Route::get('index', function (){
    return view('statics.index');
});
Route::get ('aboutus',function() {
    return view('statics.aboutus');
}); 
Route::get ('login', function(){
    return view('statics.login');
});
Route::get ('welcome1', function(){
    return view('statics.welcome1');
 });

Route::get('home',function(){
    return view('statics.home');
});
Route::get('sidebar', function(){
    return view('statics.sidebar');
});
Route::get('footer', function(){
    return view('statics.footer');
});
Route::get('signin',function(){
    return view('statics.signin');
});
Route::get('library',function(){
    return view('statics.library');
});
Route::get('novels',function(){
    return view('statics.novels');
});
Route::get('plays',function(){
    return view('statics.plays');
});
Route::get('culture',function(){
     return view('statics.culture');
});
Route::get('history', function(){
    return view('statics.history');
});
Route::get('economics',function(){
    return view('statics.economics');
});
Route::get('mathematics',function(){
    return view('statics.mathematics');
});

Route::get('physics',function(){
    return view('statics.physics');
});

Route::get('chemistry',function(){
    return view('statics.chemistry');
});

Route::get('biology',function(){
    return view('statics.biology');
});

Route::get('english',function(){
    return view('statics.english');
});

Route::get('literature',function(){
    return view('statics.literature');
});

Route::get('french',function(){
    return view('statics.french');
});

Route::get('business',function(){
    return view('statics.business');
});
Route::get('entreprenuership',function(){
    return view('statics.entreprenuership');
});
Route::get('ict',function(){
    return view('statics.ict');
});
Route::get('swahili',function(){
    return view('statics.swahili');
});
Route::get('papers',function(){
    return view('statics.papers');
});
Route::get('assignments',function(){
    return view('statics.assignments');
});
Route::get('upload',function(){
    return view('statics.upload');
});