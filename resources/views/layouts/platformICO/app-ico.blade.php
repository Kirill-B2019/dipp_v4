@include('layouts.platformICO.header-ico')
<body>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img src="{{asset('MainPublic/assets/imgs/template/loading.gif')}}" alt="ProjectsFund"></div>
        </div>
    </div>
</div>
@include('layouts.platformICO.nav-ico')
@include('layouts.platformICO.mobile_nav-ico')
@yield('content')

@include('layouts.platformICO.footer-ico')
<!--Vendors Scripts-->
@include('layouts.js')
@include('layouts.platformICO.ico-js')
</body>
</html>
