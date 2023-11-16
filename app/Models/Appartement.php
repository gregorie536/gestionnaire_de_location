<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appartement extends Model
{
    use HasFactory;

    protected $fillable = ['type', 'immeuble_id', 'proprietaire_id'];

    public function immeuble()
    {
        return $this->belongsTo(Immeuble::class);
    }

    public function proprietaire()
    {
        return $this->belongsTo(Personne::class, 'proprietaire_id');
    }

    public function options()
    {
        return $this->belongsToMany(Option::class);
    }

    public function quittances()
    {
        return $this->hasMany(Quittance::class);
    }
}
