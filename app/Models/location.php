<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Role;


class location extends Model
{
    use HasFactory;
    protected $table = 'location';
    public $timestamps = false;

    protected $fillable = [
        'dateDebut',
        'dateFin',
        'prix',
        'client_id',
        'voiture_id',


    ];


    public function client(){
        return $this->belongsTo(Client::class);
    }


    public function voitures(){
        return $this->belongsToMany(Voiture::class,"voiture_id");
    }

}
