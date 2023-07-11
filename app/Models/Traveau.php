<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Traveau extends Model
{
    use HasFactory;

     protected $fillable = [
        'type',
        'date',
        'titre',
        'fichier',
    ];

     public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }

     public function dossier()
    {
        return $this->belongsTo(Dossier::class);
    }


}
