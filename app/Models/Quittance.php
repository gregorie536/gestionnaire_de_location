<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quittance extends Model
{
    use HasFactory;

    protected $fillable = ['appartement_id', 'locataire_id', 'montant', 'date_emission', 'date_paiement'];

    public function appartement()
    {
        return $this->belongsTo(Appartement::class);
    }

    public function locataire()
    {
        return $this->belongsTo(Personne::class, 'locataire_id');
    }
}
