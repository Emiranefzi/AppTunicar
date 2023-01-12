<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class voiture extends Model
{
    use HasFactory;
    protected $table = 'voiture';
    public $timestamps = false;

    public $fillable = [
        "modele", "matricule", "etat", "kilometrage","prix","disponibilite","image"
    ];

    public function locations(){
        return $this->belongsToMany(Location::class, "voiture_id", "location_id");
    }
}
