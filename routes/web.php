<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\FournisseurController;
use App\Http\Controllers\Admin\ProduitController;

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

Route::middleware(['auth'])->group(function () {
    Route::prefix('admin')->name('admin.')->group(function () {
        Route::resources([
            'categories' => CategorieController::class,
            'fournisseurs' => FournisseurController::class,
            'clients' => ClientController::class,
            'users' => UserController::class,
        ]);
        Route::get('commandes/{client}', [CommandeController::class, 'getCommandeByClient'])->name('commandes.client');
        Route::get('approuver/{user}', [UserController::class, 'approuver'])->name('approuver');
        Route::get('refuser/{user}', [UserController::class, 'refuser'])->name('refuser');
    });
});
Route::middleware(['auth'])->group(function () {
    Route::prefix('fournisseur')->name('fournisseur.')->group(function () {
        Route::resources([
            'produits' => ProduitController::class,
        ]);
        Route::get('commandes/{client}', [CommandeController::class, 'getCommandeByClient'])->name('commandes.client');
    });
});
Route::get('/home', function () {
    return view('admin.home');
});
Route::get('/login', function () {
    return view('auth.login');
});
Route::get('register/fournisseur', function(){
    return view('auth.register_fournisseur');
})->name('fournisseur_register');

Route::get('register/client', function(){
    return view('auth.register_client');
})->name('client_register');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
