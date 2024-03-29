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
         'email' => 'dev@this',
         'role' => 30,
         'password' => Hash::make('dev123#@!'),
      ]);

      User::create([
         'name' => 'admin',
         'email' => 'admin@this',
         'role' => 30,
         'password' => Hash::make('adm123#@!'),
      ]);

      User::create([
         'name' => 'guest',
         'email' => 'guest@this',
         'password' => Hash::make('guest123'),
      ]);
   }
}
