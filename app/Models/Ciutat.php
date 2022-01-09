<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ciutat extends Model
{
    protected $table="ciutat";
    public function pais() {
        return $this->belongsTo('App\Models\Pais');
    }

    public function plat() {
        return $this->belongsToMany('App\Models\Plat', 'ciutat_plat', 'ciutat_id', 'plat_id');
    }
}
