<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make(12345678)
        ]);
        $admin->attachRole('admin');

        $pimpinan = User::create([
            'name' => 'Pimpinan',
            'email' => 'pimpinan@mail.com',
            'password' => Hash::make(12345678)
        ]);
        $pimpinan->attachRole('pimpinan');
    }
}
