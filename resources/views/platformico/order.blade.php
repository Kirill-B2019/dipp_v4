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
                   <div class="col-lg-12">
                        <div class="row align-items-top">

                            <div class="col-lg-7 col-md-6 mb-40">
                                <form id="orderPayment">
                                <div class="box-form-register">
                                    <h3 class="title-register">{{__('Заявка № ')}}{{$order->order_id}}</h3>
                                    <p class="text-md neutral-700">{{__('Создана ')}}{{$order->created_at}}</p>
                                    <p class="text-18-bold pb-10">{{__('Автоматическая отмена через: ')}}<span id="timer"></span></p>

                                    <script>
                                        // Здесь мы передаем дату из контроллера
                                        const createdAt = '{{ $order->created_at }}'; // Используйте подходящий синтаксис для передачи даты
                                    </script>
                                    <div class="row card-exchenge-order bg-4">
                                        <div class="col-lg-6 col-12">
                                                <div class="card-title">
                                                    <h6>{{__('Отдаете')}}</h6>
                                                </div>
                                                <div class="card-image">
                                                    <div class="card-image-left"><img src="{{asset('MainPublic/assets/imgs/coins/'.$cionImg)}}" alt="PF"></div>
                                                    <div class="card-image-info">
                                                        <span id="currentPrice" class="h3">{{$order->amount_crypto}}</span> {{$cryptoName}}
                                                        <p class="text-sm neutral-500">{{__('Курс 1 ')}}{{$cryptoName}}{{__(' = ')}}{{$order->price_crypto}} USD</p>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="col-lg-6 col-12">
                                            <div class="card-title">
                                                <h6>{{__('Получаете')}}</h6>
                                            </div>
                                            <div class="card-image">
                                                <div class="card-image-left"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF"></div>
                                                <div class="card-image-info">
                                                    <span id="currentPrice" class="h3">{{$order->token_total}}</span> PFTG
                                                    <p class="text-sm neutral-500">{{__('Курс 1 PFTG = ')}}{{$order->price}} USD</p>
                                                </div>
                                            </div>
                                                @if($order->token_bonus > 0)
                                                    <div class="card-bottom text-sm  neutral-700">
                                                        {{__('С учетом бонуса в ')}}{{$order->token_bonus}} PFTG
                                                    </div>
                                                @endif
                                       </div>
                                    </div>
                                    <div class="h3">{{__('Инструкция по оплате')}}</div>
                                    <div class="box-border-rounded">
                                        <div class="card-casestudy">
                                            <div class="card-title">
                                                <h6><span class="number">1</span>{{__('Проверте адрес получения PFTG ' )}}</h6>
                                            </div>
                                            <div class="card-desc">
                                                <div class="copy-container pb-10">
                                                    <input type="text" class="copy-input" value="{{ $order->wallet }}" readonly />
                                                </div>
                                                <div class="row">
                                                    <div class="col-12 neutral-1000">

                                                            <label class="text-sm">
                                                                <input class="cb-agree" type="checkbox" id="checkMyAdress" onclick="checkTrueAdres()"><span class="p">{{__('Да, я подтверждаю, что адрес принадлежит мне, и несу все риски в случае неверно указанного адреса (совпадает с Receive TRX адрес)')}}</span>
                                                            </label>

                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-border-rounded">
                                        <div class="card-casestudy">
                                            <div class="card-title">
                                                <h6><span class="number">2</span>{{__('Переведите ' )}} {{$order->amount_crypto}} {{$cryptoName}}</h6>
                                            </div>
                                            <div class="card-desc">
                                                <p class="neutral-1000">Переведите {{$order->amount_crypto}} {{$cryptoName}} со своего кошелька на адрес:</p>


                                                <div class="copy-container pb-10">
                                                    <input type="text" id="copyInput" class="copy-input" value="{{ $recive_wallet }}" readonly>
                                                    <button class="copy-button" onclick="copyText()">
                                                        <svg class="shrink-0 " fill="none" width="16" height="16" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M9.45557 3.89441H20.4556V16.8944H17.4556V6.89441H9.45557V3.89441ZM4.45557 8.89441V21.8944H15.4556V8.91477L4.45557 8.89441Z" fill="currentColor"></path></svg>
                                                    </button>
                                                </div>

                                                <div class="row">
                                                    <div class="col-lg-8 col-md-6 col-12 neutral-1000">
                                                        <p>
                                                            {{__('Перевод криптовалюты в иной сети приведет к потере ваших средств.')}}
                                                        </p>
                                                        <p>
                                                            {{__('Сумма, указанная в заявке, должна поступить на адрес криптообменника одной транзакцией.')}}
                                                        </p>
                                                        <p>
                                                            {{__('Комиссия за перевод оплачивается нами.')}}
                                                        </p>
                                                    </div>
                                                    <div class="col-lg-4 col-md-6 col-12 d-flex justify-content-center align-items-center">
                                                        {!! $qr !!}
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                    <div class="box-buttons-feature-4">
                                        <a class="btn btn-cancel-2 mr-20" id="buttonCancel" href="{{ route('cancel_order_PFTG', ['id' => $order->order_id]) }}">{{__('Отменить заявку')}}</a>
                                        <a class="btn btn-brand-4-medium" id="buttonPaid" href="{{ route('paid_order_PFTG', ['id' => $order->order_id]) }}">{{__('Заявка оплачена')}}
                                            <svg width="22" height="8" viewBox="0 0 22 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M22 3.99934L18.4791 0.478516V3.30642H0V4.69236H18.4791V7.52031L22 3.99934Z" fill=""></path>
                                            </svg></a>
                                    </div>
                                </div>
                                </form>
                            </div>

                            <div class="col-lg-5 col-md-6 mb-40">
                                <div class="box-border-rounded">
                                    <div class="card-casestudy">
                                        <div class="card-title">
                                            <h6><span class="number">1</span>{{__('Заявка на оплату')}}</h6>
                                        </div>
                                        <div class="card-desc">
                                            <p>{{__('Заявка на оплату № ')}}{{$order->order_id}}{{__(' сформирована для оплаты')}}</p>
                                        </div>
                                    </div>
                                </div>
                                <script>
                                    var addressConfirmationTitle = "{{ __('Подтверждение адреса') }}";
                                    var addressConfirmationMessage = "{{ __('Пользователь подтвердил, что адрес получения токенов PFTG указан верно') }}";
                                </script>
                                <div id="orderStatusStep-2"></div>
                                <div id="orderStatusStep-3"></div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <!-- toast-->
    <div id="toastContainer" class="p-3">
        <div id="myToast" class="toast toast-alert" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto">{{__('Внимание')}}</strong>
                <small class="text-muted small">{{__('Сейчас')}}</small>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div id="toastBody" class="toast-body">
            </div>
        </div>
    </div>
@endsection
