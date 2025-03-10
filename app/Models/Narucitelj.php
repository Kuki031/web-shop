<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Narucitelj extends Model
{
    use HasFactory;

    protected $fillable = ["ime"];

    public function narudzba() {
        return $this->belongsTo(Narudzba::class);
    }
}
