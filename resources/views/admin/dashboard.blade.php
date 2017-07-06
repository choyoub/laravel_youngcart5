@extends('layouts.admin.app')

@section('content')
<h1>관리자메인</h1>

<section>
	<h2>신규가입회원 5건 목록</h2>
	<div class="local_desc02 local_desc">
		총회원수 1명 중 차단 0명, 탈퇴 : 0명
	</div>

	<div class="tbl_head01 tbl_wrap">
		<table>
			<caption>신규가입회원</caption>
			<thead>
				<tr>
					<th scope="col">회원아이디</th>
					<th scope="col">이름</th>
					<th scope="col">닉네임</th>
					<th scope="col">권한</th>
					<th scope="col">포인트</th>
					<th scope="col">수신</th>
					<th scope="col">공개</th>
					<th scope="col">인증</th>
					<th scope="col">차단</th>
					<th scope="col">그룹</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="td_mbid">admin</td>
					<td class="td_mbname">최고관리자</td>
					<td class="td_mbname sv_use">
						<div>
              <span class="sv_wrap">
                <a href="http://localhost/youngcart5/bbs/profile.php?mb_id=admin" class="sv_member" title="최고관리자 자기소개" target="_blank" onclick="return false;"> 최고관리자</a>
                <span class="sv">
                  <a href="http://localhost/youngcart5/bbs/memo_form.php?me_recv_mb_id=admin" onclick="win_memo(this.href); return false;">쪽지보내기</a>
                  <a href="http://localhost/youngcart5/bbs/formmail.php?mb_id=admin&amp;name=%EC%B5%9C%EA%B3%A0%EA%B4%80%EB%A6%AC%EC%9E%90&amp;email=op6lm5OWcZNw1JfcmdhnyKfS" onclick="win_email(this.href); return false;">메일보내기</a>
                  <a href="http://localhost/youngcart5/bbs/profile.php?mb_id=admin" onclick="win_profile(this.href); return false;">자기소개</a>
                  <a href="http://localhost/youngcart5/bbs/new.php?mb_id=admin">전체게시물</a>
                  <a href="http://localhost/youngcart5/adm/member_form.php?w=u&amp;mb_id=admin" target="_blank">회원정보변경</a>
                  <a href="http://localhost/youngcart5/adm/point_list.php?sfl=mb_id&amp;stx=admin" target="_blank">포인트내역</a>
                </span>
              </span>
						</div>
					</td>
					<td class="td_num">10</td>
					<td><a href="./point_list.php?sfl=mb_id&amp;stx=admin">200</a></td>
					<td class="td_boolean">예</td>
					<td class="td_boolean">예</td>
					<td class="td_boolean">예</td>
					<td class="td_boolean">아니오</td>
					<td class="td_category"></td>
				</tr>
			</tbody>
		</table>
	</div>
</section>
@endsection
