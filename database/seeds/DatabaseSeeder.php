<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->insert(['title' => 'client']);
        DB::table('roles')->insert(['title' => 'moderator']);
        DB::table('roles')->insert(['title' => 'admin']);
        DB::table('roles')->insert(['title' => 'superAdmin']);
    }
}
