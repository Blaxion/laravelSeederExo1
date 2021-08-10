<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
        DB::table('membres')->insert([
            [
                "name"=>'perso1',
                "age"=>'1',
                "mail"=>'perso1@gmail.com',
                "phone"=>'1111/11.11.11'
            ],
            [
                "name"=>'perso2',
                "age"=>'2',
                "mail"=>'perso2@gmail.com',
                "phone"=>'2222/22.22.22'
            ],
            [
                "name"=>'perso3',
                "age"=>'3',
                "mail"=>'perso3@gmail.com',
                "phone"=>'3333/33.33.33'
            ],
            [
                "name"=>'perso4',
                "age"=>'4',
                "mail"=>'perso4@gmail.com',
                "phone"=>'4444/44.44.44'
            ]
            ]);
    }
}
