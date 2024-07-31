<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NodeProxyController;
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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/chatbot-qr', function () {
    $port = 4001; // Cambia el puerto si es necesario
    return redirect("http://localhost:$port");
});


Route::get('/node-content', [NodeProxyController::class, 'showContent']);
