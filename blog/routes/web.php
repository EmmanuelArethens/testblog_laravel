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

Route::get('/article', function(){
    return ($articles = [
    "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "Vivamus id massa ac ex rutrum vestibulum.",
    "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
]);
});

Route::get('article/{index}', function ($index) {
    $articles = [
        "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
        "Vivamus id massa ac ex rutrum vestibulum.",
        "Nam purus justo, porttitor vel urna id, blandit aliquam orci."
    ];
    if ($index >= count($articles)) {
        return ('articles');
    }
    return $articles[$index];
})->where('index', '[0-9]+')->name('articles');