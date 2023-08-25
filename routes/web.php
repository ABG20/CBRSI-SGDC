<?php

use App\Models\User;
use App\Models\Dossier;

use App\Models\Candidat;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Notifications\Refuser;
use App\Notifications\Valider;
use App\Notifications\Comfirmation;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Notification;
use App\Http\Controllers\CandidatureController;
use Illuminate\Foundation\Auth\EmailVerificationRequest;
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


Route::get('/',[HomeController::class,'index']);

Route::get('/cont',[HomeController::class,'cont']);

Route::get('/com',[HomeController::class,'com']);

Route::get('/app',[HomeController::class,'app']);

Route::get('/inf',[HomeController::class,'inf'])->name('inf');

Route::get('/prof',[HomeController::class,'prof'])->name('prof');

Route::get('/voir',[CandidatureController::class,'voir'])->name('voir');

Route::get('/these',[HomeController::class,'these'])->name('these');

Route::get('/diplome',[HomeController::class,'diplome'])->name('diplome');

Route::get('/equipe',[HomeController::class,'equipe'])->name('equipe');

Route::get('/cv',[HomeController::class,'cv']);

Route::get('/document',[HomeController::class,'document'])->name('document');

Route::get('/traveau',[HomeController::class,'traveau'])->name('traveau');

Route::get('/listuser',[HomeController::class,'listuser'])->name('listuser');

Route::get('/listcand',[HomeController::class,'listcand']);

Route::get('/etude',[HomeController::class,'etude']);

Route::get('/session',[HomeController::class,'session']);

Route::get('/dossier',[HomeController::class,'dossier']);

Route::get('/cil',[HomeController::class,'cil'])->name('cil');

Route::get('/recap',[CandidatureController::class,'recap'])->name('recap');

Route::get('/modifier/{id}',[HomeController::class,'modifier']);

Route::get('/dossier/{id}',[HomeController::class,'etude_dossier']);

Route::get('/supprimeruser/{id}',[HomeController::class,'supprimeruser']);

Route::get('/modifieruser/{id}',[HomeController::class,'modifieruser']);

Route::POST('/modifier/traitement',[HomeController::class,'modifiertr']);

Route::POST('/notification', function()
    {
        Notification::send(Auth::user(), new Comfirmation());

        return back()->with('status', 'Merci pour votre inscription nous vous avons envoyer un mail');
    });


Route::POST('/valider/{id}', function($dossier_id)
    {

        $dossier = Dossier::findOrFail(intval($dossier_id));
        $dossier->status = true;
        $dossier->save();

        $user = User::findOrFail($dossier->candidat->user_id);


        // Notification::send(Auth::user(), new Valider($user));
            return back()->with('status_valider', 'Vous avez valider le dossier de '.$user->nom .' '.$user->prenom );
    });

Route::POST('/refuser/{id}', function($dossier_id)
    {
        $dossier = Dossier::findOrFail(intval($dossier_id));
        $dossier->status = false;
        $dossier->save();

        $user = User::findOrFail($dossier->candidat->user_id);


        // Notification::send(Auth::user(), new Valider($user));
        return back()->with('status_refuser', 'Vous avez refuser le dossier de '.$user->nom .' '.$user->prenom );

    });


Route::POST('/traitement/pers',[HomeController::class,'pers_traitement']);
Route::POST('/traitement/prof',[HomeController::class,'prof_traitement']);
Route::POST('/traitement/these',[HomeController::class,'these_traitement']);
Route::POST('/traitement/decision/{id}',[HomeController::class,'decision_traitement']);
Route::POST('/traitement/jury',[HomeController::class,'jury_traitement']);
Route::POST('/traitement/diplome',[HomeController::class,'diplome_traitement']);
Route::POST('/traitement/piece',[HomeController::class,'piece_traitement']);
Route::POST('/traitement/traveau',[HomeController::class,'traveau_traitement']);


Route::get('/modifier_these/{id}',[HomeController::class,'voir_these']);

Route::get('/modifier_diplome/{id}',[HomeController::class,'voir_diplome']);

Route::get('/modifier_traveaux/{id}',[HomeController::class,'voir_traveaux']);

Route::get('/modifier_piece/{id}',[HomeController::class,'voir_piece']);


Route::put('/modifier_these/{id}',[HomeController::class,'modifier_these']);

Route::put('/modifier_diplome/{id}',[HomeController::class,'modifier_diplome']);

Route::put('/modifier_traveaux/{id}',[HomeController::class,'modifier_traveaux']);

Route::put('/modifier_piece/{id}',[HomeController::class,'modifier_piece']);


Route::middleware([ 'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    route::get('/dashboard',[HomeController::class,'dashboard'])->name('dashboard');
})->middleware(['auth', 'verified']);


Route::get('/email/verify', function () {
    return view('auth.verify-email');
})->middleware('auth')->name('verification.notice');

Route::get('/email/verify/{id}/{hash}', function (EmailVerificationRequest $request) {
    $request->fulfill();
    return redirect('login');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/email/verification-notification', function (Request $request) {
    $request->user()->sendEmailVerificationNotification();

    return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.send');




Route::get('/create-admin-account', [HomeController::class, 'creerAdmin']);

Route::get('/create-user', function() {
    return view('admin.create-user');
});

Route::post('/create-user', [HomeController::class, 'creerUser']);

Route::get('/avis',[HomeController::class,'avis']);


require_once __DIR__ . "/jetstream.php";
require_once __DIR__ . "/fortify.php";

