<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Anggota;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        Anggota::create([
            "nama" => "Budi Santoso",
            "no" => "087212345678",
        ]);

        Anggota::create([
            "nama" => "Siti Aisyah",
            "no" => "087212345679",
        ]);

        Anggota::create([
            "nama" => "Joko Prasetyo",
            "no" => "087212345680",
        ]);
    }
}
