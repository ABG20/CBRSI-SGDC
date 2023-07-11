<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Dossier extends Model
{
    use HasFactory;


    protected $fillable = [
        'matricule',
        'section',
        'grade_act',
        'grade_post',
        'specialite',
         ' date',
    ];
    public function candidat()
    {
        return $this->hasOne(Candidat::class);
    }

  public function piece()
    {
        return $this->belongsTo(Piece::class);
    }

 public function traveau()
    {
        return $this->belongsTo(Traveau::class);
    }

    public function decision()
    {
        return $this->belongsTo(Decision::class);
    }
}
