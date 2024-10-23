<?php

use App\Http\Controllers\AnimalController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::get('/user', function (Request $request) {
//     return $request->user();
// })->middleware('auth:sanctum');

// Route::get('/users', function (Request $request) {
//     return "Hello World";
// });


// Route::post('/animals', function () {
//     echo "menambahkan hewan baru";
// });

// Route::put('/animals/{id}', function ($id) {
//     echo "mengupdate data hewan id $id";
// });

// Route::delete('/animals', function ($id) {
//     echo "menghapus data hewan id $id";
// });

Route::get('/animals', [AnimalController::class, 'index']);
Route::post('/animals', [AnimalController::class, 'store']);
Route::put('/animals/{id}', [AnimalController::class, 'update'] );
Route::delete('/animals/{id}', [AnimalController::class, 'destroy'] );