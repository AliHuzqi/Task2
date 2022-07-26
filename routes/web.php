<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [ProductController::class,'index']);


// Folders Route
Route::get('/folders', [\App\Http\Controllers\foldersController::class,'index'])->name('folders.index');
Route::get('/folders/create', [\App\Http\Controllers\foldersController::class,'create'])->name('folders.create');
Route::post('/folders', [\App\Http\Controllers\foldersController::class,'store'])->name('folders.store');
Route::get('/folders/{id}/edit', [\App\Http\Controllers\foldersController::class,'edit'])->name('folders.edit');
Route::put('/folders/{id}', [\App\Http\Controllers\foldersController::class,'update'])->name('folders.update');
Route::delete('/folders/{id}', [\App\Http\Controllers\foldersController::class,'delete'])->name('folders.delete');
Route::get('/folders/view', [\App\Http\Controllers\foldersController::class,'view'])->name('folders.view');
Route::get('/folders/show/{id}', [\App\Http\Controllers\foldersController::class,'show'])->name('folders.show');

//Route::view('folders/search',[folderController::class,'search'])->name('folders.search');;


Route::get('/file/create', [\App\Http\Controllers\fileUploadController::class,'create'])->name('file.create');
Route::post('/file', [\App\Http\Controllers\fileUploadController::class,'store'])->name('file.store');
Route::get('/file/{id}/edit', [\App\Http\Controllers\fileUploadController::class,'edit'])->name('file.edit');
Route::put('/file/{id}', [\App\Http\Controllers\fileUploadController::class,'update'])->name('file.update');
Route::delete('/file/{id}', [\App\Http\Controllers\fileUploadController::class,'delete'])->name('file.delete');



// Tags Route
Route::get('/tags', [\App\Http\Controllers\tagsController::class,'index'])->name('tags.index');
Route::get('/tags/create', [\App\Http\Controllers\tagsController::class,'create'])->name('tags.create');
Route::post('/tags', [\App\Http\Controllers\tagsController::class,'store'])->name('tags.store');
Route::get('/tags/{id}/edit', [\App\Http\Controllers\tagsController::class,'edit'])->name('tags.edit');
Route::put('/tags/{id}', [\App\Http\Controllers\tagsController::class,'update'])->name('tags.update');
Route::delete('/tags/{id}', [\App\Http\Controllers\tagsController::class,'delete'])->name('tags.delete');
Route::get('/tags/show/{id}', [\App\Http\Controllers\tagsController::class,'show'])->name('tags.show');



