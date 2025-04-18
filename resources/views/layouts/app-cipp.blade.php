@include('layouts.header')
<body>
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="text-center"><img src="{{asset('MainPublic/assets/imgs/template/loading.gif')}}" alt="ProjectsFund"></div>
        </div>
    </div>
</div>
@include('layouts.nav')
@include('layouts.mobile_nav')
@yield('content')

@include('layouts.footer')
<!--Vendors Scripts-->
@include('layouts.js')
</body>
</html>
