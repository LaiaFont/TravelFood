<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ingredient extends Model
{
    use HasFactory;
    protected $table="ingredient";
    public function plat() {
        return $this->belongsToMany('App\Models\Plat', 'ingredients_plat', 'ingredient_id', 'plat_id');
    }

    public function categoria() {
        return $this->belongsTo('App\Models\Categoria');
    }
}
