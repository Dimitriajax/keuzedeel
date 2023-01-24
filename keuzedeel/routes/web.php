<?php

use App\Http\Controllers\BadgeController;
use App\Http\Controllers\CalculatorsController;
use App\Http\Controllers\DatasetController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\QuizController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/home', [HomeController::class, 'index']);
Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/badges', [BadgeController::class, 'index'])->name('badges');

Route::get('/bereken/{type}', [CalculatorsController::class, 'index'])->name('bereken');
Route::post('/bereken/{type}', [CalculatorsController::class, 'calculate']);

Route::get('quiz', [QuizController::class, 'index'])->name('quiz');
Route::post('quiz', [QuizController::class, 'checkResult'])->name('quiz');


require __DIR__ . '/auth.php';