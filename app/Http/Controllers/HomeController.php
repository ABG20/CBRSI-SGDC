<?php

namespace App\Http\Controllers;

use App\Models\Jury;

use App\Models\User;
use App\Models\Piece;
use App\Models\These;
use App\Models\Diplome;
use App\Models\Dossier;
use App\Models\Traveau;
use App\Models\Candidat;
use App\Models\Decision;
use Illuminate\Http\File;
use Illuminate\View\View;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Notification;

class HomeController extends Controller
{

    public function creerAdmin(Request $request)
    {
        $admin = User::where('role', 'Administrateur')->first();

        if ($admin) {
            return response()->json("L'administrateur avait déja été enregistrer");
        }

        User::create([
            'nom' => 'Guy',
            'prenom' => 'KPEDJO',
            'email' => 'gkpedjo@gmail.com',
            'telephone' => '63053905',
            'role' => 'Administrateur',
            'password' => Hash::make('password'),
        ]);

        return response()->json("L'administrateur a été bien enregistrer");
    }

    public function creerUser(Request $request)
    {

        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'role' => 'required',
        ]);

        $request->user()->sendEmailVerificationNotification();

        User::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'role' => $request->role,
            'password' => Hash::make(Str::random(8)),
        ]);

        return redirect()->route('listuser');
    }



    public function index()
    {
        return view('home.userpage');
    }
    public function cont()
    {

        return view('home.contact');
    }

    public function com()
    {

        return view('home.com');
    }

    public function app()

    {

        return view();
    }


    public function inf()

    {
        return view('home.pers');
    }

    public function prof()
    {

        return view('home.prof');
    }




    public function pers_traitement(Request $request)

    {

        $request->validate([

            'civilte' => 'required',
            'type' => 'required',
            'adresse' => 'required',
            'date_nais' => 'required',
            'ville_nais' => 'required',
            'nationalite' => 'required',
            'photo' => 'required',

        ]);

        $candidats = new Candidat();

        $candidats->civilte = $request->civilte;
        $candidats->epouse = $request->epouse;
        $candidats->type = $request->type;
        $candidats->adresse = $request->adresse;
        $candidats->date_nais = $request->date_nais;
        $candidats->ville_nais = $request->ville_nais;
        $candidats->nationalite = $request->nationalite;


        $candidats->user_id = Auth::user()->id;

        $path = Storage::putFile('public/photos', $request->photo);
        $path_to_table = explode('/', $path);

        $candidats->photo = $path_to_table[2];
        $candidats->save();

        return redirect('/prof')->with('status', 'Vos informations personnelles ont été bien enregistré');
    }

    public function prof_traitement(Request $request)

    {


        $request->validate([

            'matricule' => 'required',
            'section' => 'required',
            'grade_act' => 'required',
            'grade_post' => 'required',
            'specialite' => 'required',

        ]);

        $dossier = new Dossier();

        $dossier->matricule = $request->matricule;
        $dossier->section = $request->section;
        $dossier->grade_act = $request->grade_act;
        $dossier->grade_post = $request->grade_post;
        $dossier->specialite = $request->specialite;
        $dossier->date = date('Y-m-d');
        $candidat = Candidat::where('user_id', Auth::user()->id)->first();

        $dossier->candidat_id = $candidat->id;
        $dossier->save();

        return redirect('/voir')->with('status', 'Vos informations professionnelles ont été bien enregistré');
    }


    public function dashboard()
    {
        $role = Auth::user()->role;

        if ($role == 'Administrateur') {
            return view('admin.admin');
        } elseif ($role == 'CIL') {
            return view('admin.home');
        } elseif ($role == 'Directeur') {
            return view('admin.direct');
        } else {
            return view('home.dash');
        }
    }


    public function these(): View
    {

        return view('home.these');
    }

    public function diplome(): View
    {

        return view('home.diplome');
    }

    public function equipe(): View
    {

        return view('home.equipe');
    }

    public function cv(): View
    {

        return view('home.cv');
    }

    public function document(): View
    {

        return view('home.document');
    }

    public function traveau(): View
    {

        return view('home.traveau');
    }


    public function listuser(): View
    {

        $Users = User::all();
        return view('admin.listuser', compact('Users'));
    }

    public function listcand(): View
    {

        $candidats = DB::table('candidats')
            ->join('users', 'candidats.user_id', '=', 'users.id')
            ->join('dossiers', 'candidats.id', '=', 'dossiers.candidat_id')
            ->select('candidats.*', 'dossiers.*', 'users.nom', 'users.prenom', 'users.telephone')
            ->get();
        return view('admin.listcand', compact('candidats'));
    }
    public function etude(): View
    {

        $candidats = DB::table('candidats')
            ->join('users', 'candidats.user_id', '=', 'users.id')
            ->join('dossiers', 'candidats.id', '=', 'dossiers.candidat_id')
            ->select('candidats.*', 'dossiers.*', 'users.nom', 'users.prenom', 'users.telephone', 'users.id as user_id', 'dossiers.id as dossier_id')
            ->get();
        return view('admin.etude', compact('candidats'));
    }
    public function session(): View
    {

        return view('admin.session');
    }

    public function cil(): View
    {

        $candidats = DB::table('candidats')
            ->join('users', 'candidats.user_id', '=', 'users.id')
            ->join('dossiers', 'candidats.id', '=', 'dossiers.candidat_id')
            ->select('candidats.*', 'dossiers.*', 'users.nom', 'users.prenom', 'users.telephone')
            ->get();
        return view('admin.cil', compact('candidats'));
    }

    public function these_traitement(Request $request)
    {


        $request->validate([

            'type' => 'required',
            'titre' => 'required',
            'mention' => 'required',
            'date' => 'required',
            'resultat' => 'required',
            'institution' => 'required',
            'fichier' => 'required',

        ]);

        $these = new These();

        $these->type = $request->type;
        $these->titre = $request->titre;
        $these->mention = $request->mention;
        $these->date = $request->date;
        $these->resultat = $request->resultat;
        $these->institution = $request->institution;

        $path = Storage::putFile('public/these', $request->fichier);
        $path_to_table = explode('/', $path);

        $these->fichier = $path_to_table[2];


        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();

        $these->candidat_id = $candidat->id;

        $these->save();

        return redirect('/equipe')->with('status', 'Votre Thèse a été bien enregistré veuillez renseigner les membres du jury ');
    }


    public function jury_traitement(Request $request)
    {

        $request->validate([

            'type' => 'required',
            'nom' => 'required',
            'grade' => 'required',
            'specialite' => 'required',
            'etablissement' => 'required',

        ]);


        $jury = new Jury();

        $jury->type = $request->type;
        $jury->nom = $request->nom;
        $jury->grade = $request->grade;
        $jury->specialite = $request->specialite;
        $jury->etablissement = $request->etablissement;

        $these = These::latest()->first();
        $jury->these_id = $these->id;

        $jury->save();

        return back()->with('status', 'Enregistrement avec succès');
    }



    public function diplome_traitement(Request $request)
    {

        $request->validate([

            'nom' => 'required',
            'annee' => 'required',
            'pays' => 'required',
            'institut' => 'required',
            'fichier' => 'required',

        ]);

        $diplome = new Diplome();


        $diplome->nom = $request->nom;
        $diplome->annee = $request->annee;
        $diplome->institut = $request->institut;
        $diplome->pays = $request->pays;

        $path = Storage::putFile('public/diplome', $request->fichier);
        $path_to_table = explode('/', $path);

        $diplome->fichier = $path_to_table[2];


        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();

        $diplome->candidat_id = $candidat->id;

        $diplome->save();

        return redirect('/diplome')->with('status', 'Votre diplôme a été bien enregistré ');
    }
    public function piece_traitement(Request $request)
    {

        $request->validate([

            'nom' => 'required',
            'fichier' => 'required',

        ]);

        $piece = new Piece();

        $piece->nom = $request->nom;
        $piece->description = $request->description;
        $path = Storage::putFile('public/pieces', $request->fichier);
        $path_to_table = explode('/', $path);

        $piece->fichier = $path_to_table[2];
        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();
        $dossier = Dossier::where('candidat_id', $candidat->id)->first();
        $piece->dossier_id = $dossier->id;

        $piece->save();

        return redirect('/document')->with('status', 'Votre document a été bien enregistré ');
    }
    public function traveau_traitement(Request $request)
    {

        $request->validate([

            'type' => 'required',
            'titre' => 'required',
            'date' => 'required',
            'fichier' => 'required',

        ]);

        $traveau = new Traveau();

        $traveau->type = $request->type;
        $traveau->titre = $request->titre;
        $traveau->date = $request->date;
        $path = Storage::putFile('public/traveaux', $request->fichier);
        $path_to_table = explode('/', $path);

        $traveau->fichier = $path_to_table[2];
        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();
        $dossier = Dossier::where('candidat_id', $candidat->id)->first();
        $traveau->dossier_id = $dossier->id;

        $traveau->save();

        return redirect('/traveau')->with('status', 'Votre document a été bien enregistré ');
    }




    public function modifier($id)
    {

        $candidat = Candidat::find($id);

        return view('home.modifier', compact('candidat'));
    }

    public function modifieruser($id)
    {

        $user = User::find($id);

        return view('admin.modifieruser', compact('user'));
    }

    public function modifiertr(Request $request)
    {
        $request->validate([

            'nom' => 'required',
            'prenom' => 'required',
            'email' => 'required',
            'telephone' => 'required',
            'role' => 'required',


        ]);

        $user = User::find($request->id);

        $user->nom = $request->nom;

        $user->prenom = $request->prenom;

        $user->email = $request->email;

        $user->telephone = $request->telephone;

        $user->role = $request->role;

        $user->update();

        return view('admin.listuser')->with('status', 'l\'utililateur a été bien modifier');
    }

    public function supprimeruser($id)
    {
        $user = User::find($id);
        $user->delete();

        return view('admin.listuser')->with('status', 'l\'utililateur a été bien supprimer');
    }


    public function dossier()
    {
    }

    public function etude_dossier($id)
    {
        $candidat = DB::table('candidats')
            ->join('users', 'candidats.user_id', '=', 'users.id')
            ->join('dossiers', 'candidats.id', '=', 'dossiers.candidat_id')
            ->where('candidats.id', $id)
            ->select('candidats.*', 'dossiers.*', 'users.*')
            ->first();

        $dossiers = DB::table('dossiers')
            ->join('pieces', 'dossiers.id', '=', 'pieces.dossier_id')
            ->where('dossiers.candidat_id', $id)
            ->select('pieces.*')
            ->get();

        $traveaus = DB::table('dossiers')
            ->join('traveaus', 'dossiers.id', '=', 'traveaus.dossier_id')
            ->where('dossiers.candidat_id', $id)
            ->select('traveaus.*')
            ->get();

        $diplomes = DB::table('diplomes')
            ->join('candidats', 'candidats.id', '=', 'diplomes.candidat_id')
            ->where('diplomes.candidat_id', $id)
            ->select('diplomes.*')
            ->get();

        $theses = DB::table('theses')
            ->join('candidats', 'candidats.id', '=', 'theses.candidat_id')
            ->where('theses.candidat_id', $id)
            ->select('theses.*')
            ->get();
        return view('admin.dossier', compact('candidat', 'dossiers', 'diplomes', 'theses', 'traveaus'));
    }
    public function decision_traitement(Request $request, $id)
    {
        $request->validate([

            'commentaire' => 'required',

        ]);


        $decision = new Decision();

        $decision->commentaire = $request->commentaire;


        $dossier = Dossier::where('candidat_id', $id)->latest()->first();
        $decision->dossier_id = $dossier->id;


        $decision->save();

        return redirect()->route('cil')->with('status', 'le dossier du candidat à été etudier');
    }

    public function voir_these($id)
    {

        $these = These::find($id);

        return view('home.these', ['these' => $these]);
    }

    public function voir_diplome($id)
    {

        $diplome = Diplome::find($id);

        return view('home.diplome', ['diplome' => $diplome]);
    }

    public function voir_traveaux($id)
    {

        $traveau = Traveau::find($id);

        return view('home.traveau', ['traveau' => $traveau]);
    }

    public function voir_piece($id)
    {

        $piece = Piece::find($id);

        return view('home.document', ['piece' => $piece]);
    }

    public function modifier_these(Request $request, $id)
    {
        $request->validate([

            'type' => 'required',
            'titre' => 'required',
            'mention' => 'required',
            'date' => 'required',
            'resultat' => 'required',
            'institution' => 'required',
            'fichier' => 'nullable',

        ]);

        $these = These::findOrFail($id);

        $these->type = $request->type;
        $these->titre = $request->titre;
        $these->mention = $request->mention;
        $these->date = $request->date;
        $these->resultat = $request->resultat;
        $these->institution = $request->institution;

        if ($request->fichier) {
            $path = Storage::putFile('public/these', $request->fichier);
            $path_to_table = explode('/', $path);
            $these->fichier = $path_to_table[2];
        }


        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();

        $these->candidat_id = $candidat->id;

        $these->save();

        return redirect('/recap')->with('status', 'Votre Thèse a été bien modifiée veuillez renseigner les membres du jury ');
    }

    public function modifier_diplome(Request $request, $id)
    {

        $request->validate([
            'nom' => 'required',
            'annee' => 'required',
            'pays' => 'required',
            'institut' => 'required',
            'fichier' => 'nullable',

        ]);

        $diplome = Diplome::findOrFail($id);


        $diplome->nom = $request->nom;
        $diplome->annee = $request->annee;
        $diplome->institut = $request->institut;
        $diplome->pays = $request->pays;

        if($request->fichier)
        {
            $path = Storage::putFile('public/diplome', $request->fichier);
            $path_to_table = explode('/', $path);
            $diplome->fichier = $path_to_table[2];
        }


        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();

        $diplome->candidat_id = $candidat->id;

        $diplome->save();

        return redirect('/recap')->with('status', 'Votre diplôme a été bien modifié');
    }

    public function modifier_traveaux(Request $request, $id)
    {

        $request->validate([

            'type' => 'required',
            'titre' => 'required',
            'date' => 'required',
            'fichier' => 'nullable',
        ]);

        $traveau = Traveau::findOrfAil($id);

        $traveau->type = $request->type;
        $traveau->titre = $request->titre;
        $traveau->date = $request->date;

       if($request->fichier)
       {
            $path = Storage::putFile('public/traveaux', $request->fichier);
            $path_to_table = explode('/', $path);
            $traveau->fichier = $path_to_table[2];
       }

        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();
        $dossier = Dossier::where('candidat_id', $candidat->id)->first();
        $traveau->dossier_id = $dossier->id;

        $traveau->save();

        return redirect('/recap')->with('status', 'Votre document a été bien modifié ');
    }

    public function modifier_piece(Request $request, $id)
    {
        $request->validate([

            'nom' => 'required',
            'fichier' => 'nullable',
        ]);

        $piece = Piece::findOrFail($id);

        $piece->nom = $request->nom;
        $piece->description = $request->description;

        if($request->fichier)
        {
            $path = Storage::putFile('public/pieces', $request->fichier);
            $path_to_table = explode('/', $path);
            $piece->fichier = $path_to_table[2];
        }

        $candidat = Candidat::where('user_id', Auth::user()->id)->firstOrFail();
        $dossier = Dossier::where('candidat_id', $candidat->id)->first();
        $piece->dossier_id = $dossier->id;

        $piece->save();

        return redirect('/recap')->with('status', 'Votre document a été bien modifié ');
    }

    public function avis()
    {
        $candidat=Candidat::where('user_id', Auth::user()->id)->first();
        if(!$candidat)
            {
                return redirect()->route('dashboard');
            }
        $Dossier=Dossier::where('candidat_id', $candidat->id)->first();
        $Decision=Decision::where('dossier_id',$Dossier->id)->get();
        if(!$Decision)
            {
                return redirect()->route('dashboard');
            }

        return view('home.avis',compact('Decision'));
    }
}
