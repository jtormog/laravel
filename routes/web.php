<?php

use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;

Route::resources([
    'comments'=> CommentsController::class
]);
