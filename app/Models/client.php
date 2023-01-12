<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class client extends Model
{
    use HasFactory;
    protected $table = 'client';
    protected $guarded = [];
    public $timestamps = false;

    public function locations(){
        return $this->hasMany(Location::class);
    }
}
