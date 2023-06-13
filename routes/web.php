<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClassController;
use App\Http\Controllers\StudentController;


Route::get('/', function (){
    return "Hello World";
});

Route::get('list',[ClassController::class,'all']);
Route::get('class/add',[ClassController::class,'add']);
Route::post('class/save',[ClassController::class,'save']);
Route::get('class/delete/{id}',[ClassController::class,'delete']);
Route::get('class/edit/{id}',[ClassController::class,'edit']);
Route::post('class/update/{id}',[ClassController::class,'update']);

Route::get('students/list',[StudentController::class,'all']);
Route::get('students/add',[StudentController::class,'add']);
Route::post('students/save',[StudentController::class,'save']);
Route::get('students/delete/{id}',[StudentController::class,'delete']);
Route::get('students/edit/{id}',[StudentController::class,'edit']);
Route::post('students/update/{id}',[StudentController::class,'update']);
