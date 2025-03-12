<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proizvod extends Model
{
    use HasFactory;

    protected $fillable = ["naziv", "cijena", "opis", "slika", "broj_kupnji"];

    public function narudzba() {
        return $this->belongsTo(Narudzba::class);
    }
}
