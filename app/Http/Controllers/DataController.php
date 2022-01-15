<?php 

namespace App\Http\Controllers;

use App\Models\Pais;
use App\Models\Plat;
use App\Models\Categoria;

class DataController {
    public function getData()
    {
        $data = [];
        $data['continents'] = [];
        //Envia tots els paisos ordenats per continent
        $data['paisos'] = Pais::orderBy('continent')->simplePaginate(10);
        foreach ($data['paisos'] as $pais) {
            if (!in_array($pais->continent, $data['continents'])) {
                array_push($data['continents'], $pais->continent);
            }
        }
        return $data;
    }

    public function getPlats() {
        $data = [];
        $data['plats'] = Plat::inRandomOrder('nom')->with('ciutat')->simplePaginate(3);
        return $data;
    }

    public function getIcons() {
        $data = [];
        $data['icons'] = Categoria::orderBy('id')->paginate(9);
        return $data;
    }
}