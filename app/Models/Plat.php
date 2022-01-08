<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plat extends Model
{
    protected $table="plat";
    public function ciutat() {
        return $this->belongsTo('App\Models\Ciutat');
    }

    public function ingredients() {
        return $this->hasMany('App\Models\Ingredients');
    }
}
