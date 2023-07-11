<?php

namespace App\Http\Controllers;

use App\Models\Piece;
use App\Models\These;
use App\Models\Diplome;
use App\Models\Dossier;
use App\Models\Traveau;
use App\Models\Candidat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CandidatureController extends Controller
{
    public function recap()
    {
        $candidat=Candidat::where('user_id', Auth::user()->id)->first();

        if(!$candidat)
        {
            return redirect()->route('inf');
        }
        $Diplome=Diplome::where('candidat_id', $candidat->id)->get();
        $These=These::where('candidat_id', $candidat->id)->get();
        $Dossier=Dossier::where('candidat_id', $candidat->id)->first();
        $Piece=Piece::where('dossier_id', $Dossier->id)->get();
        $Traveau=Traveau::where('dossier_id', $Dossier->id)->get();

        return view('home.recap', compact('candidat','Dossier','Diplome','These','Piece','Traveau'));
    }

    public function voir()
    {

        $Candidat=Candidat::where('user_id', Auth::user()->id)->first();
        if ($Candidat==null) {
            return view('home.pers');
        }
        $Dossier=Dossier::where('candidat_id', $Candidat->id)->first();
        if ($Dossier==null) {

            return view('home.prof');
        }

         return view('home.voir', compact('Candidat','Dossier'));
    }
}
