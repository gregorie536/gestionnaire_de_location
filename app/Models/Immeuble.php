<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immeuble extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'adresse', 'syndic_id'];

    public function appartements()
    {
        return $this->hasMany(Appartement::class);
    }

    public function syndic()
    {
        return $this->belongsTo(Personne::class, 'syndic_id');
    }

    public function equipements()
    {
        return $this->belongsToMany(Equipement::class);
    }
}
