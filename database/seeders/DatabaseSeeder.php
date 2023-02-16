<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\serdik;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

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

        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>Hash::make('admin123'),
            'level' => 'admin'
        ]);

        // serdik::create([
        //     'nama_siswa' => 'exser',
        //     'nosis' => '123456',
        //     'tempat_lahir' => 'manado',
        //     'tgl_lahir' => '1999-08-25'
        // ]);
    }
}
