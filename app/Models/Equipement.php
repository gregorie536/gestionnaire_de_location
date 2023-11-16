<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipement extends Model
{
    use HasFactory;

    protected $fillable = ['nom', 'description'];

    public function immeubles()
    {
        return $this->belongsToMany(Immeuble::class);
    }
}
