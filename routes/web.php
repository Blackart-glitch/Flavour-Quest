<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RecipeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', [RecipeController::class, 'home'])->name('home');

Route::get('/getrecipe', [RecipeController::class, 'index'])->name('getrecipe');

Route::post('/getrecipe', [RecipeController::class, 'recipedata'])->name('submitIngredients');

Route::get('/cookingtips', function () {
    return view('cookingtips');
})->name('cookingtips');
