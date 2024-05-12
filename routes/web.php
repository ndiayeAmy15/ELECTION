<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ElecteurController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CandidatController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\SecteurController;

use App\Models\Candidat;
use App\Models\Testingsale;

use App\Models\User;


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
    return view('auth.login');
})->name('app_login');


Route::match(['get','post'],'/home',function(){
    if(Auth::check())
    {
        if(Auth::user()->profilU == 'admin'){
            $cand = Candidat::with('programmes')->with('likes');
            $cand=Candidat::with('programmes.likes');
            $nbElecteur = User::count();
            $nbCandidat = Candidat::count();
            return View('Admin_users/dashbord',['nbElecteur' => $nbElecteur,'nbCandidat' => $nbCandidat]);
        }
        }else{
            $cand= Candidat::all();
            return View('Admin_users.acceuil',['cands' => $cand ]);
        }
})->middleware('auth')->name('app_dashboard');

Route::get('/acceuil',[UserController::class,'acceuil'])->name('app_acceuill');
Route::get('/list_Candidat',[CandidatController::class,'listCandidat'])->name('app_list_Candidat');
Route::get('/electeur',[UserController::class,'list_electeur'])->name('app_list_electeur');
Route::get('/addCandidatview',[CandidatController::class,'viewaddCandidat'])->name('app_add_candidat_view');
//Route::post('addCandidat',[CandidatController::class,'addCandidat'])->name('app_add_candidat');
Route::post('addingCandidat',[CandidatController::class,'addingCandidat'])->name('app_adding_candidat');
Route::get('/logout',[UserController::class,'logout'])->name('app_logout');
Route::match(['get','post'],'/addProgrammeForCand',[ProgrammeController::class,'addProgramme'])->name('app_add_programme');
Route::match(['get','post'],'/updateCandidat/{id}',[CandidatController::class,'updateCandidat'])->name('app_update_Candidat');
Route::get('/delateCandidat/{id}',[CandidatController::class,'delateCandidat'])->name('app_delate_Candidat');
Route::get('/listProgramme',[ProgrammeController::class,'listProgramme'])->name('app_list_programme');
Route::get('/listSecteur',[SecteurController::class,'listSecteur'])->name('app_list_secteur');
Route::get('addSV',[SecteurController::class,'addSV'])->name('app_addSV');
Route::post('/addSecteurForProg',[SecteurController::class,'addSecteur'])->name('app_add_secteur');


Route::get('/detailCandidat/{id}',[CandidatController::class,'detailCandidat'])->name('app_detailCandidat');
Route::get('/detailCand/{id}',[CandidatController::class,'detailCand'])->name('app_detailCand');

Route::get('/detailProgramme/{id}',[ProgrammeController::class,'detailProgramme'])->name('app_detailProgramme');
Route::get('/listCand',[CandidatController::class,'listCand'])->name('app_listCand');
Route::get('/detailProg/{id}',[ProgrammeController::class,'detailProg'])->name('app_detailProg');


Route::post('/like/{programmeid}',[ProgrammeController::class,'likePost'])->name('app_like');

Route::post('/dislike/{id}',[ProgrammeController::class,'dislikePost'])->name('app_dislike');

Route::get('/graph',[ProgrammeController::class,'graph'])->name('graph');
Route::get('/graphB',[ProgrammeController::class,'graphB'])->name('graphB');




//////ELECTEUR

Route::get('/acceuil',function(){
    return view('Admin_users.acceuil');
})->name('app_acceuil');
