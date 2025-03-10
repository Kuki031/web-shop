<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Narudzba extends Model
{

    protected $fillable = ["narucitelj_id", "proizvod_id", "kolicina"];
    public function proizvod() {
        return $this->hasMany(Proizvod::class);
    }

    public function narucitelj() {
        return $this->hasMany(Narucitelj::class);
    }
}
