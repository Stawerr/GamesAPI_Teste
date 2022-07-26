<?php

use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->insert(['name' => 'Adventure','created_at'=>now(),'updated_at'=>now()]);
        DB::table('genres')->insert(['name' => 'Drama','created_at'=>now(),'updated_at'=>now()]);
    }
}
