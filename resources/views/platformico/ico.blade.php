@extends('layouts.platformICO.app-ico')
@section('description')
    <meta name="" content="Увеличьте свой капитал с помощью платформы Проектный фонд и инвестиций в криптоактивы. Выберите новый токен и примите участие в pre-ICO.">
@endsection
@section('title') {{__('ICO. Проектный фонд - инвестиционная проектная платформа')}}@endsection
<script>
    let exchangeRates = {!! $ExchangeRates !!};
</script>
@section('content')
<main class="main">

    <section class="section-box">
        <div class="banner-hero hero-5">
            <div class="banner-image-main">
                <div class="img-bg-ico"></div>
                <div class="blur-bg blur-move"></div>
            </div>
            <div class="banner-inner-top">
                <div class="container">
                    <div class="box-banner-left">
                        <h3 class="display-6 mb-30 mt-15 neutral-500">{{__('СИД-РАУНД ПРОДАЖА (Seed Round)')}}</h3>
                        <h1 class="display-2 mb-30 mt-15 neutral-0">{{__('Ограниченная эмиссия токена PFTG')}}</h1>
                        <a class="btn btn-brand-5-new" href="#buyPFT"><span>PFTG</span>{{__('Принять участие')}}
                            <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewbox="0 0 22 22" fill="none">
                                <path d="M22 11.0003L18.4791 7.47949V10.3074H0V11.6933H18.4791V14.5213L22 11.0003Z" fill=""></path>
                            </svg></a>
                        <h1 class="display-4 mb-30 mt-25 neutral-0">{{__('Цифровая Инвестиционная Проектная Платформа')}}</h1>
                         <div class="d-flex mb-60">
                             <p class="text-lg neutral-500 mb-55">{{__('цифровая инфраструктура новой экономики, где сливаются технологии, капитал и регуляторика')}}</p>
                         </div>
                    </div>

                </div>
            </div>
            <div class="banner-inner-bottom">
                <div class="container">
                    <div class="box-joined">
                        <div class="box-authors">
                            <span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/ipft.png')}}" alt="PF страхование"></span>
                            <span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/pft.png')}}" alt="PF общий"></span>
                            <span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF золотой"></span>

                        </div>
                        <span class="text-lg d-inline-block">{{__('Разные токены для разных задач: проекты, управление, страхование')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Как это рабтает-->
    <div class="container mt-10 " id="buyPFT" >

        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-brand-4-sm" href="#">{{__('Как принять участие')}}</a>
                <h2 class="mt-15 mb-20">{{__('Всего 3 простых и быстрых шага для участия в закрытой эмиссии!')}}</h2>

                <div class="row align-top">
                    <div class="col-lg-4 mb-40">

                        <div class="card-integration bg-2">
                            <div class="card-title">
                                <h6><span class="number">1</span>{{__('Определиться с суммой')}}</h6>
                            </div>
                            <div class="card-image">
                                <div class="card-image-left"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF"></div>
                                <div class="card-image-info">
                                    {{__('Сегодня ')}}<span id="currentPrice" class="h1">{{$goldPrice}}</span> USD/PFTG


                                    <p class="text-md neutral-500">{{__('Привилигированный токен управления платформой (PFTG)')}} </p>
                                </div>
                            </div>
                            <div class="card-info">
                                <p class="text-sm d-inline-block">{{__('SoftCup')}}
                                    <span class="h4">350&nbsp;000</span>&nbsp;USD&nbsp;(цель сбора)
                                    <div class="progress">
                                        <div class="progress-bar-fill"></div>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                                        <span>$0</span>
                                        <span>$350,000</span>
                                    </div>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="col-lg-8 mb-40">
                        <form id="tokenPurchaseForm" action="{{route('buy_PFTG')}}" method="POST">
                            @csrf
                            <div class="box-form-register">
                            <h3 class="title-register">{{__('Купить токены PFTG')}}</h3>
                            <p class="text-md neutral-700 pb-10">{{__('Привилигированные токены платформы')}}</p>


                                <!-- Сумма инвестиции-->
                                <div class="form-group">
                                    <label>{{__('Сумма инвестиции (от 50 USD)')}}</label>
                                    <input class="form-control" type="number"  id="amount" min="50" step="50" value="50" placeholder="USD" name="amount">
                                    <div class="btn-group pt-2 w-100" role="group" aria-label="Basic example">
                                        <button type="button" onclick="setAmount(100)" class="btn btn-amount-sm">100$</button>
                                        <button type="button" onclick="setAmount(500)" class="btn btn-amount-sm">500$</button>
                                        <button type="button" onclick="setAmount(1000)" class="btn btn-amount-sm">1,000$</button>
                                        <button type="button" onclick="setAmount(5000)" class="btn btn-amount-sm">5,000$</button>
                                    </div>
                                </div>


                                <!-- Метод оплаты -->

                                <div class="form-group">
                                    <label for="paymentMethod">{{__('Метод оплаты')}}</label>
                                    <select id="paymentMethod" onchange="updateAmount()" class="form-control" name="payment_method">
                                    <option value="--">{{__('Метод оплаты')}}</option>
                                    <option value="btc">{{__('Bitcoin (BTC)')}}</option>
                                    <option value="eth">{{__('Ethereum (ETH)')}}</option>
                                    <option value="trx" >{{__('TRX')}}</option>
                                    <option value="usdt-erc20">{{__('USDT (ERC-20)')}}</option>
                                    <option value="usdt-trc20">{{__('USDT (TRC-20)')}}</option>
                                    </select>
                                </div>
                                <!--Ваш TRON крипто-кошелек (Receive TRX адрес)-->
                                <div class="form-group">
                                    <label>{{__('Ваш TRON крипто-кошелек (Receive TRX адрес)')}}<span class="brand-1">*</span></label>
                                    <input id="wallet" class="form-control"  type="text" placeholder="Receive TRX адрес" name="wallet">
                                </div>
                                <div class="form-group card-invoce">
                                    <div class="h4">{{__('Детали платежа')}}</div>
                                    <div class="row row-border-bottom">
                                        <div class="col">
                                            <span>{{__('Курс ')}} {{ \Carbon\Carbon::today()->format('d.m.Y') }}:</span>
                                        </div>
                                        <div class="col text-18-semibold">
                                            <input type="hidden" name="price" value="{{ $goldPrice }}">
                                            <span>{{$goldPrice}} USD/PFTG</span>
                                        </div>
                                    </div>
                                        <div class="row row-border-bottom">
                                            <div class="col">
                                                <span>{{__('Токенов:')}}</span>
                                            </div>
                                            <div class="col text-18-semibold">
                                                <input type="hidden" name="token" id="tokenAmountValue" value="0">
                                                <span id="tokenAmount"></span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                    <span>{{__('Бонус (в PFTG):')}}:</span>
                                                </div>
                                            <div class="col text-18-semibold">
                                                <input type="hidden" name="token_bonus" id="tokenBonusValue" value="0">
                                                    <span id="tokenBonus" class="neutral-500">(0%)</span>
                                                </div>
                                        </div>
                                        <div class="row row-border-top">
                                            <div class="col">
                                                <span>{{__('К оплате')}}</span>
                                            </div>
                                            <div class="col text-18-semibold ">
                                                <span id="cryptoAmount" class="neutral-500">{{__('не выбран метод')}}</span>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col">
                                                    <span>{{__('Будет отправлено')}}</span>
                                                </div>
                                            <div class="col text-18-bold">
                                                    <input type="hidden" name="tokenTotal" id="tokenTotalHidden" value="0">
                                                    <span id="tokenTotal"></span>
                                                </div>
                                         </div>
                                </div>
                                <div class="form-group">
                                    <div class="btn btn-black btn-rounded" onclick="processPurchase()">{{__('Перейти к оплате')}}
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23" height="8" viewBox="0 0 23 8" fill="none">
                                            <path d="M22.5 4.00032L18.9791 0.479492V3.3074H0.5V4.69333H18.9791V7.52129L22.5 4.00032Z" fill=""></path>
                                        </svg>
                                    </div>
                                </div>
                                <div class="form-group-cb">
                                    <label class="text-md">
                                        <input class="cb-agree" type="checkbox" id="agreeTerms" checked>{{__('Согласие с ')}}
                                        <a class="text-md neutral-500" href="#">{{__('условиями продажи')}}</a>
                                    </label>


                                </div>


                        </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div id="chart"></div>

    <script src="{{asset('MainPublic/assets/js/script.js')}}" defer></script>

</main>

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
