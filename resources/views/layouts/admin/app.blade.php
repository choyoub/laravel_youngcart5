<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }} 관리자</title>

    <!-- Styles -->
    <link href="{{ asset('css/admin.css') }}" rel="stylesheet">
</head>
<body>
    @include('layouts.admin.head')
    <div id="wrapper">
    	<div id="container">
    		<div id="text_size">
    			<!-- font_resize('엘리먼트id', '제거할 class', '추가할 class'); -->
    			<button onclick="font_resize('container', 'ts_up ts_up2', '');"><img src="{{ asset('images/admin/ts01.gif') }}" alt="기본"></button>
    			<button onclick="font_resize('container', 'ts_up ts_up2', 'ts_up');"><img src="{{ asset('images/admin/ts02.gif') }}" alt="크게"></button>
    			<button onclick="font_resize('container', 'ts_up ts_up2', 'ts_up2');"><img src="{{ asset('images/admin/ts03.gif') }}" alt="더크게"></button>
    		</div>

        @yield('content')

        <noscript>
            <p>
                귀하께서 사용하시는 브라우저는 현재 <strong>자바스크립트를 사용하지 않음</strong>으로 설정되어 있습니다.<br>
                <strong>자바스크립트를 사용하지 않음</strong>으로 설정하신 경우는 수정이나 삭제시 별도의 경고창이 나오지 않으므로 이점 주의하시기 바랍니다.
            </p>
        </noscript>
    	</div>
    </div>

    @include('layouts.admin.footer')

    <!--[if lte IE 8]>
    <script src="{{ asset('js/html5.js') }}"></script>
    <![endif]-->

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/jquery.menu.js') }}"></script>
    <script src="{{ asset('js/common.js') }}"></script>
    <script src="{{ asset('js/wrest.js') }}"></script>
    <script src="{{ asset('js/admin.js') }}"></script>
</body>
</html>
