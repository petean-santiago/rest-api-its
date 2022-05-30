<?php


use Illuminate\Support\Facades\Route;

Route::get('/salve', function(Request $request){
    return response("Evviva");
});
