<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

Route::get("/comments", [CommentsController::class, "index"]);
Route::get("/comments/create", [CommentsController::class, "create"]);
Route::post("/comments", [CommentsController::class, "store"]);
Route::get("/comments/{commentid}", [CommentsController::class, "show"]);
Route::get("/comments/{commentid}/edit", [CommentsController::class, "edit"]);
Route::patch("/comments/{commentid}", [CommentsController::class, "update"]);
Route::delete("/comments/{commentid}", [CommentsController::class, "destroy"]);

Route::get("{name}", function($name){
    return "{$name} es un payaso";
});

