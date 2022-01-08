<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CiutatPlat extends Model
{
    use HasFactory;
    protected $table="ciutat_plat";
    public function plat() {
        return $this->hasMany('App\Models\Plat');
    }

    public function ciutat() {
        return $this->hasMany('App\Models\Ciutat');
    }
}

