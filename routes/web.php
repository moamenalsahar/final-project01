<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {

    $name ='';
    $cites = [
        '1' => 'غزة',
        '2' => 'نابلس',
        '3' => 'جنين'
    ];
    return view('about' , compact('name' , 'cites'));
});

Route::post('/about', function () {

    $name =$_POST['name'];
    $cites = [
        '1' => 'غزة',
        '2' => 'نابلس',
        '3' => 'جنين'
    ];
    return view('about' , compact('name' , 'cites'));
});
