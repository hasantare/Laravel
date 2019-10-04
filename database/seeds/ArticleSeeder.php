<?php

use Illuminate\Database\Seeder;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker\Generator $faker)
    {
       \Illuminate\Support\Facades\DB::table('users')->insert([
          'user_id'=>$faker->numberBetween(1,5),
          'title'=>$faker->sentence(),
           'body'=>$faker->text(),
           'created_at'=>\Carbon\Carbon::now(),
           'updated_at'=>\Carbon\Carbon::now(),
       ]);

}
