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
        DB::table('pais')->insert([
            'nom'=>'Espanya',
            'continent'=>'Europa'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Itàlia',
            'continent'=>'Europa'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Xina',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Tailàndia',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Sydney',
            'continent'=>'Austràlia'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Rússia',
            'continent'=>'Àsia'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Mèxic',
            'continent'=>'Amèrica'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Argentina',
            'continent'=>'Amèrica'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Egipte',
            'continent'=>'Àfrica'
        ]);
        DB::table('pais')->insert([
            'nom'=>'Senegal',
            'continent'=>'Àfrica'
        ]);
    }
}
