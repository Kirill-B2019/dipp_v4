@extends('layouts.platformICO.app-ico')
@section('description')
    <meta name="" content="Увеличьте свой капитал с помощью платформы Проектный фонд и инвестиций в криптоактивы. Выберите новый токен и примите участие в pre-ICO.">
@endsection
@section('title') {{__('ICO. Проектный фонд - инвестиционная проектная платформа')}}@endsection
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
                        <a class="btn btn-brand-5-new" href="#"><span>PFTG</span>{{__('Принять участие')}}
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
                            </span><span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF золотой"></span>

                        </div>
                        <span class="text-lg d-inline-block">{{__('Разные токены для разных задач: проекты, управление, страхование')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Как это рабтает-->
    <section class="section-box box-pricing-2 box-pricing-3">
        <div class="container"><a class="btn btn-brand-4-sm" href="#">{{__('Как это работает')}}</a>
            <h2 class="mt-15 mb-20">{{__('Всего 3 простых и быстрых шага')}}<br class="d-none d-lg-block">{{__(' для размещения проекта или запуска инвестиций в работу!')}}</h2>
            <p class="text-lg neutral-500 mb-55">{{__('Цифровая инвестиционная проектная платформа создана для того, чтобы сделать процесс инвестирования простым и доступным для всех.')}}<br class="d-none d-lg-block">{{__('Мы стремимся обеспечить прозрачность и безопасность, помогая вам достигать ваших финансовых целей!')}}</p>
            <div class="row">
                <div class="col-lg-3">
                    <div class="box-border-rounded">
                        <div class="card-casestudy">
                            <div class="card-title">
                                <h6><span class="number">1</span>{{__('Определиться с суммой инвестирования')}}</h6>
                            </div>
                            <div class="card-desc">
                                <p>{{__('При инвестировании сумма от 1000 USD Ваш бонус при покупке +10 % к количеству токенов')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-border-rounded">
                        <div class="card-casestudy">
                            <div class="card-title">
                                <h6><span class="number">2</span>{{__('Выбрать метод оплаты')}}</h6>
                            </div>
                            <div class="card-desc">
                                <p><strong>{{__('- Для инициаторов проектов: ')}}</strong>{{__('Разместите и активируйте свой проект, создайте проектное «пространство» и выберите подходящую финансовую модель. Ознакомьтесь с инвестиционными предложениями.')}}</p>
                                <p><strong>{{__('- Для инвесторов: ')}}</strong>{{__('Исследуйте доступные проекты, выберите интересные и запустите свой инвестиционный портфель.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="box-border-rounded">
                        <div class="card-casestudy">
                            <div class="card-title">
                                <h6><span class="number">3</span>{{__('Оплатить заявку и получить токены PFTG')}}</h6>
                            </div>
                            <div class="card-desc">
                                <p><strong>{{__('- Для инициаторов проектов: ')}}</strong>{{__('Ваш проект проинвестирован и реализовано задуманное.')}}</p>
                                <p><strong>{{__('- Для инвесторов: ')}}</strong>{{__('Ваш портфель будет приносить стабильный доход. Система автоматического контроля распределения (проектные smart контракты) и прозрачная отчетность обеспечат защиту от нецелевого использования инвестиций.')}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <img src="{{asset('MainPublic/assets/imgs/page/features/img-feature2.png')}}" alt="PF">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="block-pricing">
                <div class="row">
                    <div class="col-lg-4 d-none d-lg-block">
                            <img src="{{asset('MainPublic/assets/imgs/page/features/img-feature4.png')}}" alt="PF">
                        </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="container">
                            <!-- Текущая цена токена -->
                            <div class="section">
                                <h3>Текущая цена токена</h3>
                                <div>
                                    <span id="currentPrice">$0.40</span>
                                    <span id="bonusBadge" style="display: none; margin-left: 10px; padding: 2px 5px; background-color: #f0f0f0; border-radius: 5px;">
                    +10% бонус
                </span>
                                </div>
                                <p>Бонус от $1000</p>
                            </div>

                            <!-- Доступные платежные методы -->
                            <div class="section">
                                <h3>Доступные платежные методы</h3>
                                <div>
                                    <i class="fa fa-bitcoin" style="margin-right: 10px;"></i>
                                    <i class="fa fa-ethereum" style="margin-right: 10px;"></i>
                                    <i class="fa fa-usdt" style="margin-right: 10px;"></i>
                                    <i class="fa fa-usdt" style="margin-right: 10px;"></i>
                                </div>
                            </div>

                            <!-- Статистика продажи -->
                            <div class="section">
                                <h3>Статистика продажи</h3>
                                <div>
                                    <div>
                                        <span>Продано токенов PFTG:</span>
                                        <span id="tokensSold">Загрузка...</span>
                                    </div>
                                    <div>
                                        <span>Осталось:</span>
                                        <span id="tokensRemaining">Загрузка...</span>
                                    </div>
                                    <div>
                                        <span>Участников:</span>
                                        <span id="holdersCount">Загрузка...</span>
                                    </div>
                                </div>
                            </div>

                            <!-- SoftCap -->
                            <div class="section">
                                <h3>SoftCap до цели в 350,000 USD</h3>
                                <div class="progress-bar">
                                    <div class="progress-bar-fill"></div>
                                </div>
                                <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                                    <span>$0</span>
                                    <span>$350,000</span>
                                </div>
                            </div>



                        </div>


                    </div>
                    <div class="col-lg-4 col-md-6" >
                        <div class="card-pricing card-pricing-style-2 card-pricing-style-3">
                            <!-- Форма покупки -->

                            <div class="card-lists"><strong class="text-18-bold">{{__('Купить токены PFTG')}}</strong>





                                <div class="form-group">
                                    <label for="wallet">Ваш крипто-кошелек</label>
                                    <input type="text" id="wallet" placeholder="Введите адрес вашего кошелька">
                                </div>







                            </div>
                            <div class="card-button btn btn-get-started" onclick="processPurchase()">{{__('К оплате заявки')}}
                                    <svg width="23" height="8" viewbox="0 0 23 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M22.5 3.99934L18.9791 0.478516V3.30642H0.5V4.69236H18.9791V7.52031L22.5 3.99934Z" fill=""></path>
                                    </svg></div>
                            <div class="form-group-cb">
                                <div class="d-flex justify-content-between align-items-center">
                                    <label class="text-sm">
                                        <input class="cb-agree" type="checkbox" id="agreeTerms" checked>{{__('Согласие с ')}}
                                        <a class="text-md neutral-500" href="#">{{__('условиями продажи')}}</a>
                                    </label>
                                </div>
                            </div>



                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <div class="row">
            <div class="col-lg-12">
                <a class="btn btn-brand-4-sm" href="#">{{__('Как принять участие')}}</a>
                <h2 class="mt-15 mb-20">{{__('Всего 3 простых и быстрых шага')}}<br class="d-none d-lg-block">{{__(' для участия в закрытой эмиссии!')}}</h2>

                <div class="row align-top">
                    <div class="col-lg-4 mb-40">
                        <div class="box-border-rounded">
                            <div class="card-casestudy">
                                <div class="card-title">
                                    <h6><span class="number">1</span>{{__('Определиться с суммой')}}</h6>
                                </div>
                                <div class="card-desc">
                                    <p>This process is straightforward and swift, prioritizing your convenience and experience. It enables you to access tailored solutions and special offers swiftly, ensuring you can quickly begin enjoying our services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-border-rounded">
                            <div class="card-casestudy">
                                <div class="card-title">
                                    <h6><span class="number">2</span>{{__('Выбрать метод оплаты')}}</h6>
                                </div>
                                <div class="card-desc">
                                    <p>We delve deeply into understanding your needs and objectives. We construct a customized strategy and solutions to ensure they reflect your goals and meet your expectations.</p>
                                </div>
                            </div>
                        </div>
                        <div class="box-border-rounded">
                            <div class="card-casestudy">
                                <div class="card-title">
                                    <h6><span class="number">3</span>{{__('Получить токены PFTG')}}</h6>
                                </div>
                                <div class="card-desc">
                                    <p>We monitor performance, optimize campaigns, and make certain that you attain the results you anticipate. This is the ultimate step to ensure you are well on your way to achieving success and revenue from your project.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-8 mb-40">
                        <form id="tokenPurchaseForm">
                            <div class="box-form-register">
                            <h3 class="title-register">{{__('Купить токены PFTG')}}</h3>
                            <p class="text-md neutral-700">{{__('Привилигированные токены платформы)')}}</p>

                            <form class="form-register" action="#">
                                <!-- Сумма инвестиции-->
                                <div class="form-group">
                                    <label>{{__('Сумма инвестиции (USD)')}}</label>
                                    <input class="form-control" type="number"  id="amount" min="100" step="50" value="100" placeholder="USD">
                                    <div class="btn-group pt-2 w-100" role="group" aria-label="Basic example">
                                        <button type="button" onclick="setAmount(100)" class="btn btn-amount-sm">100$</button>
                                        <button type="button" onclick="setAmount(500)" class="btn btn-amount-sm">500$</button>
                                        <button type="button" onclick="setAmount(1000)" class="btn btn-amount-sm">1,000$</button>
                                        <button type="button" onclick="setAmount(5000)" class="btn btn-amount-sm">5,000$</button>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <ul class="list-feature">
                                        <li>
                                            <span>Вы получите:</span> <span id="tokenAmount">400 PFTG</span>
                                        </li>
                                    </ul>
                                    <div>
                                        <span>Бонус:</span>
                                        <span id="tokenBonus">+0 PFTG (0%)</span>
                                    </div>
                                    <div>
                                        <span>Итого:</span>
                                        <span id="tokenTotal">400 PFTG</span>
                                    </div>

                                </div>

                                <!-- Метод оплаты -->

                                <div class="form-group">
                                    <label for="paymentMethod">{{__('Метод оплаты')}}</label>
                                    <select id="paymentMethod" onchange="updateAmount()" class="form-control">
                                    <option value="btc">Bitcoin (BTC)</option>
                                    <option value="eth">Ethereum (ETH)</option>
                                    <option value="trx">TRX</option>
                                    <option value="usdt_erc20">USDT (ERC-20)</option>
                                    <option value="usdt_trc20">USDT (TRC-20)</option>

                                </select>
                                    <div>
                                        <span>Сумма платежа:</span>
                                        <span id="cryptoAmount">0.25 BTC</span>
                                    </div>
                                </div>
                                <!--Ваш TRON крипто-кошелек (Receive TRX адрес)-->
                                <div class="form-group">
                                    <label>{{__('Ваш TRON крипто-кошелек (Receive TRX адрес)')}}<span class="brand-1">*</span></label>
                                    <input class="form-control" id="wallet" type="text" placeholder="">
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

                            </form>
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
@endsection
