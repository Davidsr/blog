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

Route::get('about', function () {
    //return view('about')->with('name', 'David');
    /*
    return view('about',[
    		'name' => 'David'
    ]);
    */
    $name = 'David';
    $test = 'Saldana';
    $datos = array( 1, 2, 3);

    $tareas = DB::table('tareas')->get();

    return $tareas;
    return view('about', compact('name', 'test', 'datos'));
});