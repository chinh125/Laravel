<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;


Route::get('/', function (){
    return "Hello World";
});
Route::get('list',[ClassController::class,'all']);
Route::get('class/add',[ClassController::class,'add']);
Route::post('class/save',[ClassController::class,'save']);
Route::get('class/delete/{id}',[ClassController::class,'delete']);
Route::get('class/edit/{id}',[ClassController::class,'edit']);
Route::post('class/update/{id}',[ClassController::class,'update']);
