<?php

use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('platforms')->insert(['name' => 'XBOX One','created_at'=>now(),'updated_at'=>now()]);
        DB::table('platforms')->insert(['name' => 'PS5','created_at'=>now(),'updated_at'=>now()]);
        DB::table('platforms')->insert(['name' => 'PC','created_at'=>now(),'updated_at'=>now()]);
    }
}
