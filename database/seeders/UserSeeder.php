<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
  public function run()
  {
    DB::table('users')->insert([
      [
        'name' => 'wadek',
        'email' => 'wadek@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'wadek',
      ], [
        'name' => 'kaur_lab',
        'email' => 'kaur_lab@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'kaur_lab',
      ], [
        'name' => 'kaur',
        'email' => 'kaur@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'kaur',
      ], [
        'name' => 'staff',
        'email' => 'staff@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'staff',
      ], [
        'name' => 'laboran',
        'email' => 'laboran@gmail.com',
        'password' => Hash::make('password'),
        'role' => 'laboran',
      ]
    ]);
  }
}
