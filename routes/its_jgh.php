<?php
    $nome = 'Soufian';
    use Illuminate\Support\Facades\Route;

    Route::get('/salve', function(Request $request){
        return response("<h1>Ciao ".$nome."!</h1>");
    });