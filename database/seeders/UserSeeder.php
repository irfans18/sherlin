<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
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
      User::create([
         'name' => 'dev',
         'email' => 'admin@this',
         'password' => Hash::make('password'),
     ]);
   }
}