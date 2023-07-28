<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
class Candidat extends Model
{
    use HasFactory;

protected $fillable = [
        'civilte',
        'epouse',
        'type',
        'adresse',
        'date_nais',
        'ville_nais',
        'nationalite',
        'photo',
    ];

    public function dossiers()
    {
        return $this->hasMany(Dossier::class);
    }
     public function these()
    {
        return $this->belongsTo(These::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function diplome()
    {
        return $this->belongsTo(Diplome::class);
    }
      public function piece()
    {
        return $this->belongsTo(Piece::class);
    }
}
