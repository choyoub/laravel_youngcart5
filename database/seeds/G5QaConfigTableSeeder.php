<?php

use Illuminate\Database\Seeder;

class G5QaConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('g5_qa_config')->insert([
          'qa_title' => '1:1문의',
          'qa_category' => '회원|포인트',
          'qa_skin' => 'basic',
          'qa_mobile_skin' => 'basic',
          'qa_use_email' => '1',
          'qa_req_email' => '0',
          'qa_use_hp' => '1',
          'qa_req_hp' => '0',
          'qa_use_editor' => '1',
          'qa_subject_len' => '60',
          'qa_mobile_subject_len' => '30',
          'qa_page_rows' => '15',
          'qa_mobile_page_rows' => '15',
          'qa_image_width' => '600',
          'qa_upload_size' => '1048576'
        ]);
    }
}
