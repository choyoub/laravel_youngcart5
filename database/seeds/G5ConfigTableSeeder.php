<?php

use Illuminate\Database\Seeder;

class G5ConfigTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $read_point = 0;
        $write_point = 0;
        $comment_point = 0;
        $download_point = 0;

        DB::table('g5_config')->insert([
          'cf_title' => env('APP_NAME', 'youngcart5'),
          'cf_theme' => 'basic',
          'cf_admin' => '$admin_id',
          'cf_admin_email' => '$admin_email',
          'cf_admin_email_name' => env('APP_NAME', 'youngcart5'),
          'cf_use_point' => '1',
          'cf_use_copy_log' => '1',
          'cf_login_point' => '100',
          'cf_memo_send_point' => '500',
          'cf_cut_name' => '15',
          'cf_nick_modify' => '60',
          'cf_new_skin' => 'basic',
          'cf_new_rows' => '15',
          'cf_search_skin' => 'basic',
          'cf_connect_skin' => 'basic',
          'cf_read_point' => $read_point,
          'cf_write_point' => $write_point,
          'cf_comment_point' => $comment_point,
          'cf_download_point' => $download_point,
          'cf_write_pages' => '10',
          'cf_mobile_pages' => '5',
          'cf_link_target' => '_blank',
          'cf_delay_sec' => '30',
          'cf_filter' => '18아,18놈,18새끼,18년,18뇬,18노,18것,18넘,개년,개놈,개뇬,개새,개색끼,개세끼,개세이,개쉐이,개쉑,개쉽,개시키,개자식,개좆,게색기,게색끼,광뇬,뇬,눈깔,뉘미럴,니귀미,니기미,니미,도촬,되질래,뒈져라,뒈진다,디져라,디진다,디질래,병쉰,병신,뻐큐,뻑큐,뽁큐,삐리넷,새꺄,쉬발,쉬밸,쉬팔,쉽알,스패킹,스팽,시벌,시부랄,시부럴,시부리,시불,시브랄,시팍,시팔,시펄,실밸,십8,십쌔,십창,싶알,쌉년,썅놈,쌔끼,쌩쑈,썅,써벌,썩을년,쎄꺄,쎄엑,쓰바,쓰발,쓰벌,쓰팔,씨8,씨댕,씨바,씨발,씨뱅,씨봉알,씨부랄,씨부럴,씨부렁,씨부리,씨불,씨브랄,씨빠,씨빨,씨뽀랄,씨팍,씨팔,씨펄,씹,아가리,아갈이,엄창,접년,잡놈,재랄,저주글,조까,조빠,조쟁이,조지냐,조진다,조질래,존나,존니,좀물,좁년,좃,좆,좇,쥐랄,쥐롤,쥬디,지랄,지럴,지롤,지미랄,쫍빱,凸,퍽큐,뻑큐,빠큐,ㅅㅂㄹㅁ',
          'cf_possible_ip' => '',
          'cf_intercept_ip' => '',
          'cf_member_skin' => 'basic',
          'cf_mobile_new_skin' => 'basic',
          'cf_mobile_search_skin' => 'basic',
          'cf_mobile_connect_skin' => 'basic',
          'cf_mobile_member_skin' => 'basic',
          'cf_faq_skin' => 'basic',
          'cf_mobile_faq_skin' => 'basic',
          'cf_editor' => 'smarteditor2',
          'cf_captcha_mp3' => 'basic',
          'cf_register_level' => '2',
          'cf_register_point' => '1000',
          'cf_icon_level' => '2',
          'cf_leave_day' => '30',
          'cf_search_part' => '10000',
          'cf_email_use' => '1',
          'cf_prohibit_id' => 'admin,administrator,관리자,운영자,어드민,주인장,webmaster,웹마스터,sysop,시삽,시샵,manager,매니저,메니저,root,루트,su,guest,방문객',
          'cf_prohibit_email' => '',
          'cf_new_del' => '30',
          'cf_memo_del' => '180',
          'cf_visit_del' => '180',
          'cf_popular_del' => '180',
          'cf_use_member_icon' => '2',
          'cf_member_icon_size' => '5000',
          'cf_member_icon_width' => '22',
          'cf_member_icon_height' => '22',
          'cf_login_minutes' => '10',
          'cf_image_extension' => 'gif|jpg|jpeg|png',
          'cf_flash_extension' => 'swf',
          'cf_movie_extension' => 'asx|asf|wmv|wma|mpg|mpeg|mov|avi|mp3',
          'cf_formmail_is_member' => '1',
          'cf_page_rows' => '15',
          'cf_mobile_page_rows' => '15',
          'cf_cert_limit' => '2',
          'cf_stipulation' => '해당 홈페이지에 맞는 회원가입약관을 입력합니다.',
          'cf_privacy' => '해당 홈페이지에 맞는 개인정보처리방침을 입력합니다.'
        ]);
    }
}
