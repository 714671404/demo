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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/article', function (\Illuminate\Http\Request $request) {
    $article = \App\Article::all()->forPage($request->page, 10);
    $data = [];
    $d = [];
    foreach ($article as $key => $value) {
        $data[$key]['title'] = $value->title;
    }
    $d['list'] = $data;
    return $d;
//    dd($article[0]->title);
});