<?php 

namespace App\Http\Controllers;

use App\Models\Pais;

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
}