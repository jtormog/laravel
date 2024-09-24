<?php

use App\Http\Controllers\CommentsController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;

Route::resources([
    'comments'=> CommentsController::class
]);

Route::get("/", [ProductController::class, "index"]);
Route::get("/ofertas", [ProductController::class, "indexOfertas"]);
Route::get("/seleccion", [ProductController::class, "indexseleccion"]);
Route::get("/top-ventas", [ProductController::class, "indexTopVentas"]);
Route::get("/producto/{id}", [ProductController::class, "show"]);