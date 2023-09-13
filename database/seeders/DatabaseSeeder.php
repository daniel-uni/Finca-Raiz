<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Global\GlobalValue;
use App\Models\Rol;
use App\Models\User;
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
        Rol::create([
            GlobalValue::ROL_NAME => "Admin",
            GlobalValue::ROL_VALIDATE => true
        ]);

        Rol::create([
            GlobalValue::ROL_NAME => "cliente",
            GlobalValue::ROL_VALIDATE => false
        ]);

        Rol::create([
            GlobalValue::ROL_NAME => "vendedor",
            GlobalValue::ROL_VALIDATE => true
        ]);

        User::factory(1)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
