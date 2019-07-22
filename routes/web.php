<?php

use Illuminate\Http\Request;
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
    $links = \App\Link::all();
    $libros = \App\Libro::all();
    return view('welcome', ['links' => $links, 'libros' => $libros]);
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/submit', function () {
    return view('submit');
});

Route::post('/submit', function (Request $request) {
    $data = $request->validate([
        'title' => 'required|max:255',
        'url' => 'required|url|max:255',
        'description' => 'required|max:255'
    ]);
    tap(new App\Link($data))->save();
    return redirect('/');
});

Route::get('/libros', 'LibroController@index')->name('libros');


Route::post('/libros', 'LibroController@librosAdd')->name('libros');
