<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        //seeders pais
        DB::table('pais')->insert([
            'pais_nom'=>'Espanya',
            'continent'=>'Europa'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Itàlia',
            'continent'=>'Europa'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Xina',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Tailàndia',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Sydney',
            'continent'=>'Oceania'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Rússia',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Mèxic',
            'continent'=>'Amèrica'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Argentina',
            'continent'=>'Amèrica'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Egipte',
            'continent'=>'Àfrica'
        ]);
        DB::table('pais')->insert([
            'pais_nom'=>'Senegal',
            'continent'=>'Àfrica'
        ]);

        //seeders ciutat
        //espanya
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Madrid',
            'pais_id'=>1
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'València',
            'pais_id'=>1
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Barcelona',
            'pais_id'=>1
        ]);
        
        //itàlia
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Toscana',
            'pais_id'=>2
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Nàpols',
            'pais_id'=>2
        ]);
        DB::table('ciutat')->insert([
            'ciutat_nom'=>'Florència',
            'pais_id'=>2
        ]);

        //xina
        
    }
}
