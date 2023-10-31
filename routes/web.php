<?php

use App\Http\Controllers\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {

    $test = 10*5 . 'abcd';

    $user = User::find(1);

    return view('home')
        ->with("test", $test)
        ->with("user", $user);
});

Route::get("users", [UserController::class, 'index'])->name('users.index');
Route::get("users/create", [UserController::class, 'create'])->name('users.create');
Route::get("users/{user}", [UserController::class, 'show'])->name('users.show');
Route::post("users", [UserController::class, 'store'])->name('users.store');
Route::get("users/{user}/edit", [UserController::class, 'edit'])->name('users.edit');