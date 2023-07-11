<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diplome extends Model
{
    use HasFactory;

 protected $fillable = [
        'nom',
        'pays',
        'annee',
        'institut',
        'fichier',
    ];


 public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }


}
