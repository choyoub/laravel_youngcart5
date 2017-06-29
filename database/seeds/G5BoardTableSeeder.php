<?php

use Illuminate\Database\Seeder;

class G5BoardTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tmp_bo_table = array("qa", "free", "notice");
        $tmp_bo_subject = array("질문답변", "자유게시판", "공지사항");

        for ($i=0; $i<count($tmp_bo_table); $i++)
        {
          DB::table('g5_board')->insert([
            'bo_table' => $tmp_bo_table[$i],
            'gr_id' => 'shop',
            'bo_subject' => $tmp_bo_subject[$i],
            'bo_device' => 'both',
            'bo_admin' => '',
            'bo_list_level' => '1',
            'bo_read_level' => '1',
            'bo_write_level' => '1',
            'bo_reply_level' => '1',
            'bo_comment_level' => '1',
            'bo_html_level' => '1',
            'bo_link_level' => '1',
            'bo_count_modify' => '1',
            'bo_count_delete' => '1',
            'bo_upload_level' => '1',
            'bo_download_level' => '1',
            'bo_read_point' => '-1',
            'bo_write_point' => '5',
            'bo_comment_point' => '1',
            'bo_download_point' => '-20',
            'bo_use_category' => '0',
            'bo_category_list' => '',
            'bo_use_sideview' => '0',
            'bo_use_file_content' => '0',
            'bo_use_secret' => '0',
            'bo_use_dhtml_editor' => '0',
            'bo_use_rss_view' => '0',
            'bo_use_good' => '0',
            'bo_use_nogood' => '0',
            'bo_use_name' => '0',
            'bo_use_signature' => '0',
            'bo_use_ip_view' => '0',
            'bo_use_list_view' => '0',
            'bo_use_list_content' => '0',
            'bo_use_email' => '0',
            'bo_table_width' => '100',
            'bo_subject_len' => '60',
            'bo_mobile_subject_len' => '30',
            'bo_page_rows' => '15',
            'bo_mobile_page_rows' => '15',
            'bo_new' => '24',
            'bo_hot' => '100',
            'bo_image_width' => '600',
            'bo_skin' => 'basic',
            'bo_mobile_skin' => 'basic',
            'bo_include_head' => '_head.php',
            'bo_include_tail' => '_tail.php',
            'bo_content_head' => '',
            'bo_content_tail' => '',
            'bo_mobile_content_head' => '',
            'bo_mobile_content_tail' => '',
            'bo_insert_content' => '',
            'bo_gallery_cols' => '4',
            'bo_gallery_width' => '174',
            'bo_gallery_height' => '124',
            'bo_mobile_gallery_width' => '125',
            'bo_mobile_gallery_height' => '100',
            'bo_upload_count' => '2',
            'bo_upload_size' => '1048576',
            'bo_reply_order' => '1',
            'bo_use_search' => '0',
            'bo_order' => '0'
        ]);
      }
    }
}
