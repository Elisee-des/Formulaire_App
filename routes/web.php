<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConsultantController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DomaineCompetenceController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NiveauDiplomeController;
use App\Http\Controllers\OutilsTechnoController;
use App\Http\Controllers\PartenaireController;
use App\Http\Controllers\PaysController;
use App\Http\Controllers\ProfilController;
use App\Models\NiveauDiplome;
use App\Models\Pays;
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

Route::get('/', [HomeController::class, 'index'])->name('accueil');
Route::get('/succes', [HomeController::class, 'succes'])->name('succes');
Route::get('/register-partenaire', [HomeController::class, 'createPartenaire'])->name('createPartenaire');
Route::get('/register-consultant', [HomeController::class, 'createConsultant'])->name('createConsultant');


Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name("login.index");
    Route::post('login', 'loginAction')->name("login.action");

    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::prefix('profils')->group(function () {
        Route::get('/list', [ProfilController::class, 'index'])->name('profil.index');
        Route::post('/store', [ProfilController::class, 'store'])->name('profil.store');
        Route::put('/update/{id}', [ProfilController::class, 'update'])->name('profil.update');
        Route::get('/destroy/{id}', [ProfilController::class, 'destroy'])->name('profil.destroy');
    });

    Route::prefix('pays')->group(function () {
        Route::get('/list', [PaysController::class, 'index'])->name('pays.index');
        Route::post('/store', [PaysController::class, 'store'])->name('pays.store');
        Route::put('/update/{id}', [PaysController::class, 'update'])->name('pays.update');
        Route::get('/destroy/{id}', [PaysController::class, 'destroy'])->name('pays.destroy');
    });

    Route::prefix('diplomes')->group(function () {
        Route::get('/list', [NiveauDiplomeController::class, 'index'])->name('diplome.index');
        Route::post('/store', [NiveauDiplomeController::class, 'store'])->name('diplome.store');
        Route::put('/update/{id}', [NiveauDiplomeController::class, 'update'])->name('diplome.update');
        Route::get('/destroy/{id}', [NiveauDiplomeController::class, 'destroy'])->name('diplome.destroy');
    });

    Route::prefix('competences')->group(function () {
        Route::get('/list', [DomaineCompetenceController::class, 'index'])->name('competence.index');
        Route::post('/store', [DomaineCompetenceController::class, 'store'])->name('competence.store');
        Route::put('/update/{id}', [DomaineCompetenceController::class, 'update'])->name('competence.update');
        Route::get('/destroy/{id}', [DomaineCompetenceController::class, 'destroy'])->name('competence.destroy');
    });

    Route::prefix('techno-outils')->group(function () {
        Route::get('/list', [OutilsTechnoController::class, 'index'])->name('techno.index');
        Route::post('/store', [OutilsTechnoController::class, 'store'])->name('techno.store');
        Route::put('/update/{id}', [OutilsTechnoController::class, 'update'])->name('techno.update');
        Route::get('/destroy/{id}', [OutilsTechnoController::class, 'destroy'])->name('techno.destroy');
    });

    Route::prefix('partenaires')->group(function () {
        Route::get('/list', [PartenaireController::class, 'index'])->name('partenaire.index');
        Route::get('/show/{id}', [PartenaireController::class, 'show'])->name('partenaire.show');
        Route::get('/destroy/{id}', [PartenaireController::class, 'destroy'])->name('partenaire.destroy');
    });

    Route::prefix('consultants')->group(function () {
        Route::get('/list', [ConsultantController::class, 'index'])->name('consultant.index');
        Route::get('/show/{id}', [ConsultantController::class, 'show'])->name('consultant.show');
        Route::get('/destroy/{id}', [ConsultantController::class, 'destroy'])->name('consultant.destroy');
    });
});
