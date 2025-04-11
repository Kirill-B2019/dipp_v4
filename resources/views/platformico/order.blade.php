@extends('layouts.platformICO.app-ico')
@section('description')
    <meta name="" content="Увеличьте свой капитал с помощью платформы Проектный фонд и инвестиций в криптоактивы. Выберите новый токен и примите участие в pre-ICO.">
@endsection
@section('title') {{__('ICO. Инвестиционный токен платформы. Заказ № ')}}{{$order->order_id}}@endsection
@section('content')
    <main class="main">
        <section class="section-box box-content-register">
            <div class="container">
                <div class="text-center contact-head">
                    <h2 class="heading-2 neutral-0 mb-20 mt-15">{{__('Покупка токенов PFTG')}}</h2>

                </div>
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-10">
                        <div class="row align-items-center">
                            <div class="col-lg-7 mb-40">
                                <div class="box-form-register">
                                    <h3 class="title-register">{{__('Заявка №')}}{{$order->order_id}}</h3>
                                    <p class="text-md neutral-700">{{__('Создана ')}}{{$order->created_at}}</p>
                                    <p class="text-sm neutral-900">{{__('Автоматическая отмена через: ')}}<span id="timer"></span></p>
                                    <script>
                                        // Здесь мы передаем дату из контроллера
                                        const createdAt = '{{ $order->created_at }}'; // Используйте подходящий синтаксис для передачи даты
                                    </script>


                                    <form class="form-register" action="#">
                                        <div class="form-group">
                                            <label>{{__('Отдаете:')}}<span class="brand-1">*</span></label>
                                            <img src="{{asset('MainPublic/assets/imgs/coins/'.$cionImg)}}" alt="PF">
                                            <input class="form-control" type="text" placeholder="Name">
                                        </div>
                                        <div class="form-group">
                                            <label>Your Email<span class="brand-1">*</span></label>
                                            <input class="form-control" type="text" placeholder="email@website.com">
                                        </div>
                                        <div class="form-group">
                                            <label>Password *</label>
                                            <input class="form-control" type="password" value="*****************************">
                                        </div>
                                        <div class="form-group">
                                            <label>Confirm Password *</label>
                                            <input class="form-control" type="password" value="*****************************">
                                        </div>
                                        <div class="form-group-cb">
                                            <label class="text-md">
                                                <input class="cb-agree" type="checkbox">I agree to terms &amp; conditions
                                            </label>
                                        </div>
                                        <div class="form-group">
                                            <button class="btn btn-black btn-rounded">Sign Up
                                                <svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8" fill="none">
                                                    <path d="M22.5 4.00032L18.9791 0.479492V3.3074H0.5V4.69333H18.9791V7.52129L22.5 4.00032Z" fill=""></path>
                                                </svg>
                                            </button>
                                        </div>

                                    </form>
                                </div>
                            </div>
                            <div class="col-lg-5 mb-40">
                                <div class="box-border-rounded">
                                    <div class="card-casestudy">
                                        <div class="card-title">
                                            <h6><span class="number">1</span>Signup for Service</h6>
                                        </div>
                                        <div class="card-desc">
                                            <p>This process is straightforward and swift, prioritizing your convenience and experience. It enables you to access tailored solutions and special offers swiftly, ensuring you can quickly begin enjoying our services.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-border-rounded">
                                    <div class="card-casestudy">
                                        <div class="card-title">
                                            <h6><span class="number">2</span>Research &amp; Development</h6>
                                        </div>
                                        <div class="card-desc">
                                            <p>We delve deeply into understanding your needs and objectives. We construct a customized strategy and solutions to ensure they reflect your goals and meet your expectations.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-border-rounded">
                                    <div class="card-casestudy">
                                        <div class="card-title">
                                            <h6><span class="number">3</span>Sales &amp; Earning</h6>
                                        </div>
                                        <div class="card-desc">
                                            <p>We monitor performance, optimize campaigns, and make certain that you attain the results you anticipate. This is the ultimate step to ensure you are well on your way to achieving success and revenue from your project.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>
    <script src="{{asset('MainPublic/assets/js/orderTimer.js')}}" defer></script>
    <!-- toast-->
    <div id="toastContainer" class="p-3">
        <div id="myToast" class="toast toast-alert" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">Внимание</strong>
                <small class="text-muted small">Сейчас</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div id="toastBody" class="toast-body">

            </div>
        </div>
    </div>
@endsection
