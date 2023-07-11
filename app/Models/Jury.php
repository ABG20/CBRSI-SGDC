<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jury extends Model
{
    use HasFactory;

 protected $fillable = [
        'type',
        'nom',
        'grade',
        'eta',
        'specialite',
    ];

 public function these()
    {
        return $this->hasOne(These::class);
    }


}
