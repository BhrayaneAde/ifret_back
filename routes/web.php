<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PageController;

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

// Route pour afficher la page de connexion
Route::get('/supper_admin/connexion', [PageController::class, 'connexion'])->name('connexion');

// Route pour afficher la page du mot de passe oublié
Route::get('/supper_admin/mot_de_passe_oublie', [PageController::class, 'password'])->name('password');

// Route pour afficher la page du tableau de bord 
Route::get('/supper_admin/dashboard', [PageController::class, 'dashboard'])->name('dashboard');

// Affichage des pages utilisateurs
// Route pour afficher la page chargeur 
Route::get('/supper_admin/utilisateurs/chargeur', [PageController::class, 'chargeur'])->name('utilisateurs.chargeur');
// Route pour afficher la page chargeur 
Route::get('/supper_admin/utilisateurs/transporteur', [PageController::class, 'transporteur'])->name('utilisateurs.transporteur');
// Route pour afficher la page chargeur 
Route::get('/supper_admin/utilisateurs/chauffeur', [PageController::class, 'chauffeur'])->name('utilisateurs.chauffeur');

// Affichage des pages camion
// Route pour afficher la page Rejetés 
Route::get('/supper_admin/camions/rejete', [PageController::class, 'rejete'])->name('camions.rejete');
// Route pour afficher la page Validés 
Route::get('/supper_admin/camions/valide', [PageController::class, 'valide'])->name('camions.valide');
// Route pour afficher la page En attents 
Route::get('/supper_admin/camions/en_attent', [PageController::class, 'en_attent'])->name('camions.en_attent');

// Affichage des pages Chats
// Route pour afficher la page chat Chargeur 
Route::get('/supper_admin/chats/chargeur', [PageController::class, 'chat_chargeur'])->name('chats.chargeur');
// Route pour afficher la page chat Transporteur 
Route::get('/supper_admin/chats/transporteur', [PageController::class, 'chat_transporteur'])->name('chats.transporteur');

// Route pour afficher la page de Gestion des demandes
Route::get('/supper_admin/gestion_demande', [PageController::class, 'gestion_demande'])->name('gestion_demande');

// Route pour afficher la page du Traking 
Route::get('/supper_admin/traking', [PageController::class, 'traking'])->name('traking');





// Route pour afficher la page details de la gestion des demandes  
Route::get('/supper_admin/gestion_demande/details', [PageController::class, 'details'])->name('details');

// Route pour afficher la page details des contenus pour valider  les camions
Route::get('/supper_admin/camions/details_val_camion', [PageController::class, 'details_val_camion'])->name('details_val_camion');
