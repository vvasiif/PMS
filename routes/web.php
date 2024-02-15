<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductsController;

use App\Http\Controllers\WebController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [WebController::class, 'welcome']);


Route::get('/api/products', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/api/products', [WebController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('dashboard');




Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    route::get('/api/products/{id}', [ProductsController::class, 'view']); 
    route::get('/addform', [WebController::class, 'addform']); 
    route::post('/api/products', [ProductsController::class, 'add']); 
    route::get('/updateform/{id}', [WebController::class, 'updateform']);
    route::put('/api/products/{id}', [ProductsController::class, 'update']); 
    Route::delete('/api/products/{id}', [ProductsController::class, 'delete']);

});

require __DIR__ . '/auth.php';
