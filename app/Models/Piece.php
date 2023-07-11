<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Piece extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'fichier',
        'description',
    ];

 public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }

     public function dossier(): HasOne
    {
        return $this->belongsTo(Dossier::class);
    }


}
