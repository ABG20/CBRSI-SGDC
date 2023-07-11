<?php

use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use Illuminate\Foundation\Auth\EmailVerificationRequest;
use App\Notifications\Comfirmation;
use App\Notifications\Valider;
use App\Notifications\Refuser;
use Illuminate\Http\Request;
use App\Models\Candidat;
use Illuminate\View\View;
use App\Models\User;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Auth;
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

Route::get('/prof',[HomeController::class,'prof'])->name('inf');

Route::get('/voir',[CandidatureController::class,'voir'])->name('inf');

Route::get('/these',[HomeController::class,'these'])->name('dossier');

Route::get('/diplome',[HomeController::class,'diplome'])->name('dossier');

Route::get('/equipe',[HomeController::class,'equipe'])->name('dossier');

Route::get('/cv',[HomeController::class,'cv']);

Route::get('/document',[HomeController::class,'document'])->name('dossier');

Route::get('/traveau',[HomeController::class,'traveau'])->name('dossier');

Route::get('/listuser',[HomeController::class,'listuser']);

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


Route::POST('/valider/{id}', function($id)
    {

        $user=user::find(intval($id));


        Notification::send(Auth::user(), new Valider($user));
return back()->with('status', 'Vous avez valider le dossier de '.$user->nom .' '.$user->prenom );

    });

Route::POST('/refuser/{id}', function($id)
    {
        $user=user::find(intval($id));

        Notification::send(Auth::user(), new Refuser($user));
return back()->with('statu', 'Vous avez refuser le dossier de ');

    });


Route::POST('/traitement/pers',[HomeController::class,'pers_traitement']);
Route::POST('/traitement/prof',[HomeController::class,'prof_traitement']);
Route::POST('/traitement/these',[HomeController::class,'these_traitement']);
Route::POST('/traitement/decision/{id}',[HomeController::class,'decision_traitement']);
Route::POST('/traitement/jury',[HomeController::class,'jury_traitement']);
Route::POST('/traitement/diplome',[HomeController::class,'diplome_traitement']);
Route::POST('/traitement/piece',[HomeController::class,'piece_traitement']);
Route::POST('/traitement/traveau',[HomeController::class,'traveau_traitement']);


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
