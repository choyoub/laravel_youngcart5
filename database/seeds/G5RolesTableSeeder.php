<?php

use Illuminate\Database\Seeder;

class G5RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('g5_roles')->insert([
        'name' => 'admin',
      ]);

      DB::table('g5_role_admins')->insert([
        'role_id' => '1',
        'mb_id' => 'admin',
      ]);
    }
}
