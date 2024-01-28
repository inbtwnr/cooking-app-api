<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direction extends Model
{
    use HasFactory;

    public function directions() {
        return $this->belongsTo(Recipe::class);
    }

    public function ingredients() {
        return $this->hasMany(Ingredient::class);
    }
}
