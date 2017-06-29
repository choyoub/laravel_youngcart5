<?php

use Illuminate\Database\Seeder;

class G5MemberTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $dateTime = date('Y-m-d H:i:s', time());
        $password = bcrypt('la!kdk0703');
        $remoteAddr = request()->server('REMOTE_ADDR');

        DB::table('g5_member')->insert([
          'username' => 'admin',
          'password' => $password,
          'mb_name' => '관리자',
          'mb_nick' => '관리자',
          'mb_email' => 'admin@localhost',
          'mb_level' => '10',
          'mb_mailling' => '1',
          'mb_open' => '1',
          'mb_email_certify' => $dateTime,
          'mb_datetime' => $dateTime,
          'mb_ip' => $remoteAddr
        ]);
    }
}
