<?php

use App\Models\jobDataCollection;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobDataCollectionController;


Route::get('/', function () {
    $data = jobDataCollection::all();
    return view('welcome', compact('data'));
})->name('mainPage');


// table route start
Route::put('data/store',[JobDataCollectionController::class,'data_store'])->name('data.store');
Route::get('edit/page/{id}',[JobDataCollectionController::class,'edit'])->name('edit.page');
Route::put('data/update/{id}',[JobDataCollectionController::class,'update'])->name('date.update');
Route::get('close/page',[JobDataCollectionController::class,'close'])->name('close.page');
Route::delete('delete/data/{id}',[JobDataCollectionController::class,'delete'])->name('delete.data');

// table route end