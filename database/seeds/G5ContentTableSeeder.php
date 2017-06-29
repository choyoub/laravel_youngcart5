<?php

use Illuminate\Database\Seeder;

class G5ContentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('g5_content')->insert([
          'co_id' => 'company',
          'co_html' => '1',
          'co_subject' => '회사소개',
          'co_content'=> '<p align=center><b>회사소개에 대한 내용을 입력하십시오.</b></p>',
          'co_skin' => 'basic',
          'co_mobile_skin' => 'basic'
        ]);

        DB::table('g5_content')->insert([
          'co_id' => 'privacy',
          'co_html' => '1',
          'co_subject' => '개인정보 처리방침',
          'co_content'=> '<p align=center><b>개인정보 처리방침에 대한 내용을 입력하십시오.</b></p>',
          'co_skin' => 'basic',
          'co_mobile_skin' => 'basic'
        ]);

        DB::table('g5_content')->insert([
          'co_id' => 'provision',
          'co_html' => '1',
          'co_subject' => '서비스 이용약관',
          'co_content'=> '<p align=center><b>서비스 이용약관에 대한 내용을 입력하십시오.</b></p>',
          'co_skin' => 'basic',
          'co_mobile_skin' => 'basic'
        ]);
    }
}
