<?php

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
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/about', function() {
return '<h1>Halo</h1>'
.'Selamat datang di webapp saya<br>'
.'Laravel, emang keren.';
});
Route::get('/kantin/{satu}/{dua}/{tiga}',function($e,$f,$g){
	return 'Saya memesan <b>'.$e.'</b><br>'
	      .'Minumnya <b>'.$f.'</b><br>'
	      .'Dan Cemilan nya <b>'.$g.'</b>';
});
Route::get('/user/{name?}',function($name = 'Diki'){
	return 'Nama Saya <b>'.$name.'</b>';
});
// Route::get('/about/1',function(){
//  return '<h1>Ini Halaman 1</h1>';	
// });
// Route::get('/about/2',function(){
//  return '<h1>Ini Halaman 2</h1>';	
// });
// Route::get('/about/3',function(){
//  return '<h1>Ini Halaman 3</h1>';	
// });
// Route::get('/about/4',function(){
//  return '<h1>Ini Halaman 4</h1>';	
// });
// Route::get('/about/5',function(){
//  return '<h1>Ini Halaman 5</h1>';	
// });
Route::get('/about/{id}',function($a){
	return 'Ini Halaman About <b>'.$a.'</b>';
});