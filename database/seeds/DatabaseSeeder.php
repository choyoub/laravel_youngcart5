<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(G5ConfigTableSeeder::class);
        $this->call(G5MemberTableSeeder::class);
        $this->call(G5GroupTableSeeder::class);
        $this->call(G5ContentTableSeeder::class);
        $this->call(G5QaConfigTableSeeder::class);
        $this->call(G5BoardTableSeeder::class);
    }
}
