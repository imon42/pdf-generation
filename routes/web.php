<?php

use App\Http\Controllers\PDFController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

// Route::get('/pdf', function () {
//     return Inertia::render('PdfFile');
// });

Route::get('/pdf', [PDFController::class, 'generatePDF']);
