<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\ContatoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NewUserController;
use App\Http\Controllers\SobreController;
use App\Http\Controllers\WeatherController;

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

Route::get('/', [IndexController::class, 'index']);

Route::get('/home', [IndexController::class, 'index']);

Route::get('/sobre', [SobreController::class, 'sobre']);

Route::get('/cadastro', [CadastroController::class, 'cadastro']);

Route::get('/login', [AuthController::class, 'showLoginSite'])->name('login');

Route::get('/contato', [ContatoController::class, 'contato']);

Route::get('/get-weather', [WeatherController::class, 'getWeather'])->name('get-weather');

Route::post('/login', [AuthController::class, 'authenticate'])->name('login.authenticate');

Route::post('/logout', [AuthController::class, 'logout'])->name('login.logout');

Route::get('/dashboard', [DashboardController::class, 'dashboard'])->middleware('auth.check');

Route::post('/send-form', [FormController::class, 'saveForm'])->name('saveForm.saveForm');

Route::post('/new-user', [NewUserController::class, 'saveUser'])->name('saveUser.saveUser');