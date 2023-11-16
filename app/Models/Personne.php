<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personne extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'contact', 'type', 'num_compte', 'assujetti_tva'];

    public function immeubles()
    {
        return $this->hasMany(Immeuble::class, 'syndic_id');
    }

    public function appartements()
    {
        return $this->hasMany(Appartement::class, 'proprietaire_id');
    }
}
