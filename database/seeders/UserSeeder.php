<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users') -> insert([
            [
                'name' => 'Administrativo',
                'email' => 'pingu@admin.com',
                'password' => Hash::make('pg!Syst3m.2023_'),
                'role' => 'admin'
            ],

            [
                'name' => 'Operacional',
                'email' => 'pingu@operac.com',
                'password' => Hash::make('Op3raci0n@l%2023$$'),
                'role' => 'operac'
            ],

            [
                'name' => 'Comercial',
                'email' => 'pingu@comerc.com',
                'password' => Hash::make('Com3rci@l%2023&&'),
                'role' => 'comerc'
            ],

            [
                'name' => 'Aniversariante',
                'email' => 'pingu@anivers.com',
                'password' => Hash::make('s3nha!'),
                'role' => 'anivers'
            ],

        ]);
    }
}
