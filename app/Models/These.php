<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class These extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'titre',
        'institution',
        'mention',
        'resultat',
        'date',
        'fichier',
    ];

    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }
}
