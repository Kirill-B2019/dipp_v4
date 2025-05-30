<div class="mobile-header-active mobile-header-wrapper-style perfect-scrollbar">
    <div class="mobile-header-wrapper-inner">
        <div class="burger-icon burger-icon-white"><span class="burger-icon-top"></span><span class="burger-icon-mid"></span><span class="burger-icon-bottom"></span></div>
        <div class="mobile-header-top">
            <div class="user-account"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="ProjectsFund">
                <div class="content">
                    <h6 class="user-name">{{__('PFTG (Gold)')}}</h6>
                    <p class="font-xs text-muted">{{__('ICO Привелигированный токен платформы')}} </p>
                </div>
            </div>
        </div>
        <div class="mobile-header-content-area">
            <div class="perfect-scroll">

                <div class="mobile-menu-wrap mobile-header-border">
                    <nav>
                        <ul class="mobile-menu font-heading">
                            <li class="has-children"><a href="{{route('platform_ico')}}#about">{{__('О платформе')}}</a></li>
                            <li class="has-children"><a href="{{route('platform_ico')}}#tokenomika">{{__('Токеномика')}}</a></li>
                            <li class="has-children"><a href="{{route('platform_ico')}}#roadMap">{{__('Дорожная карта')}}</a></li>
                            <li class="has-children"><a href="{{route('platform_ico')}}#faq">{{__('FAQ')}}</a></li>
                            <li class="has-children"><a href="{{route('platform_ico')}}#buyPFTG">{{__('Как купить PFTG')}}</a></li>
                            <li class="has-children"><a href="{{asset('doc/Whitepaper.pdf')}}">{{__('WHITE PAPER v.1')}}</a></li>

                        </ul>
                    </nav>
                </div>
                <div class="mobile-account">
                    <h6 class="mb-10">{{__('СИД-РАУНД ПРОДАЖА (Seed Round)')}}</h6>
                    <ul class="mobile-menu font-heading">
                        <li><a href="{{route('platform_ico')}}#mobileBuy">{{__('Купить PFTG')}}</a></li>
                    </ul>
                </div>
                <div class="mobile-social-icon mb-50">
                    <h6 class="mb-25">{{__('Токены')}}</h6><a class="icon-socials icon-facebook" href="#"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF золотой"></a><a class="icon-socials icon-instagram" href="#"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/PFT-tr.png')}}" alt="PF общий"></a><a class="icon-socials icon-twitter" href="#"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/iPFT.png')}}" alt="PF страхование"></a>
                </div>
                <div class="site-copyright">Copyright &copy; <?= date('Y'); ?> Права защищены (<a href='https://github.com/Kirill-B2019/'>GIT KB</a>).</div>
            </div>
        </div>
    </div>
</div>
