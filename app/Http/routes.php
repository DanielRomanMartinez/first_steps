<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

use App\Note;

Route::get('/', function () {
    return view('welcome');
});

Route::get('notes', function () {
    
	$notes = Note::all();

    return view('notes', compact('notes'));
});

/* EJEMPLO POST */
Route::Post('notes', function(){
	return "Creating a note";
});


Route::get('notes/create', function () {
    // return '[Create notes]'; Ejemplo string
    return ['notes' => 'create']; // Ejemplo Json
});

Route::get('note/{note}/{slug?}', function ($note, $slug = null) {
    dd($note, $slug);
})->where('note', '[0-9]+');