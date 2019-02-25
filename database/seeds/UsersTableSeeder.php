<?php

use Illuminate\Database\Seeder;
use App\User;
use Faker\Generator as Faker;

class UsersTableSeeder extends Seeder
{
  public function run(Faker $faker)
  {
    for ($i = 0; $i < 10 ; $i++) {

      $newUser = new User;
      $newUser->name = $faker->firstName;
      $newUser->lastname = $faker->lastName;
      $newUser->age = rand(18, 80);

      $newUser->save();
    }
  }
}
