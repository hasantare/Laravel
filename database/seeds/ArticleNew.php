<?php

use Illuminate\Database\Seeder;

class ArticleNew extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Fake\Generate $faker)
    {
       for ($i = 0; $i < 5; $i++){
          \Illuminate\Support\Facades\DB::table('article')->insert(array(
              'name' => $faker->name,
              'email' => $faker->unique()->safeEmail,
              'email_verified_at' => now(),
              'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
              'remember_token' => Str::random(10),
              'created_at'=>\Carbon\Carbon::now(),
              'updated_at'=>\Carbon\Carbon::now(),
          ));
}
    }
}
