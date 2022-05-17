<?php

use App\Models\Demande;
use App\Models\Mission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\LivreurController;
use App\Http\Controllers\MissionController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\Admin\ProduitController;
use App\Http\Controllers\Admin\ProfileController;
use App\Http\Controllers\Admin\VehiculeController;
use App\Http\Controllers\Admin\LivraisonController;
use App\Http\Controllers\ProduitController as ProduitControllerFront;
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
            'livreurs' => LivreurController::class,
            'clients' => ClientController::class,
            'users' => UserController::class,
            'livraisons' => LivraisonController::class,
            'vehicules' => VehiculeController::class,
        ]);
        Route::post('missions', [MissionController::class, 'store'])->name('missions.store');
        Route::get('missions', [MissionController::class, 'index'])->name('missions.index');
        Route::get('livreur/{demande}/affect', [LivraisonController::class, 'affect'])->name('livreur.affect');
        Route::get('commandes/{client}', [CommandeController::class, 'getCommandeByClient'])->name('commandes.client');
        Route::get('approuver/{user}', [UserController::class, 'approuver'])->name('approuver');
        Route::get('refuser/{user}', [UserController::class, 'refuser'])->name('refuser');
    });
});
Route::get('missions', function(){
    $missions = Auth::user()->missions()->get();

    return view('admin.missions.index', compact('missions'));
});
Route::put('mission/{id}/modifierStatus/', function(Request $request, $id){
    $mission = Mission::find($id);
    $mission->etat = $request->etat;

    $mission->save();

    return response()->json([
        "deleted" => "Mission à été modifié avec succé"
    ]);


});
Route::middleware(['auth'])->group(function () {
    Route::prefix('fournisseur')->name('fournisseur.')->group(function () {
        Route::resources([
            'demandes' => ProduitController::class,
        ]);
    });
});
Route::get('profile', [ProfileController::class, "index"]);
Route::put('profile', [ProfileController::class, "update"]);
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

Route::get('downloads/{id}', function($id){
    $demande = Demande::find($id);
    $filepath = public_path('uploads/').$demande->document;
    return Response::download($filepath);
})->name('download.file');