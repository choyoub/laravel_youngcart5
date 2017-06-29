<?php

use Illuminate\Database\Seeder;

class G5GroupTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('g5_group')->insert([
          'gr_id' => 'shop',
          'gr_subject' => '쇼핑몰'
        ]);
    }
}
