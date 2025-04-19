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
                        <a class="btn btn-brand-5-new" href="#buyPFTG"><span>PFTG</span>{{__('Принять участие')}}
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
                            <span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/iPFT.png')}}" alt="PF страхование"></span>
                            <span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/PFT.png')}}" alt="PF общий"></span>
                            <span class="item-author"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF золотой"></span>
                        </div>
                        <span class="text-lg d-inline-block">{{__('Разные токены для разных задач: проекты, управление, страхование')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- купить токены-->
    <section class="section-box wow animate__animated animate__fadeIn box-imazing-features-white animated " id="buyPFTG">
        <div class="container">
            <div class="row mb-30">
                <div class="col-lg-12 ">
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
                                       <p class="text-md neutral-500">{{__('Привилегированный токен управления платформой (PFTG)')}} </p>
                                    </div>
                                </div>
                                <div class="card-info">
                                    <span class="text-ss neutral-500">{{__('Размещено: ')}}{{$sendSumm}} PFTG</span><br/>
                                    <span class="text-ss neutral-500 pb-5">{{__('Владельцев: ')}}{{$holders}}</span><br/>
                                    <p class="text-sm d-inline-block">{{__('SoftCup')}}
                                        <span class="h4">700&nbsp;000</span>&nbsp;PFTG&nbsp;(цель сбора)
                                    <div class="progress">
                                        <div class="progress-bar-ico" id="progressBarICO" role="progressbar" style="width: {{$percent}}%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                    </div>
                                    <div style="display: flex; justify-content: space-between; margin-top: 5px;">
                                        <span>{{$percent}}%</span>
                                        <span>700 000 PFTG</span>
                                    </div>
                                    </p>



                                </div>
                            </div>
                            <div class="card-integration bg-2">
                                <div class="card-title">
                                    <h6><span class="number">2</span>{{__('Заполнить форму покупки')}}</h6>
                                </div>
                                <div class="card-image">

                                    <div class="card-image-info">
                                        {{__('Бонус ')}}<span class="h1">10 %*</span> {{__(' от ')}}<span class="h3">1 000</span> USD
                                        <p class="text-md neutral-500">{{__('NB токены PFTG поступают через сеть TRON, поэтому для зачисления укажите адрес получения TRX')}} </p>
                                    </div>
                                </div>
                                <div class="card-info">
                                    <ul class="list-check-black-100">
                                        <li>{{{__('Указать сумму или выбрать из предложенных')}}}</li>
                                        <li>{{__('Выбрать способ оплаты из предложенных')}}</li>
                                        <li>{{__('Указать адрес (кошелек) получения')}}</li>
                                    </ul>
                                    <p class="text-ss neutral-700">{{__('*Бонус начисляется в PFTG')}} </p>
                                 </div>
                            </div>
                            <div class="card-integration bg-2">
                                <div class="card-title">
                                    <h6><span class="number">3</span>{{__('Получить токены')}}</h6>
                                </div>
                                <div class="card-image">
                                    <div class="card-image-info">
                                        <p class="text-md neutral-1000">{{__('Проверка транзакций происходит с ручным подтверждением')}} </p>
                                        {{__('Срок зачисления токенов ')}}<span class="h3">PFTG</span>{{__(' от ')}}<span class="h3">1</span> {{__(' до ')}}<span class="h3">24</span> {{__('часов')}}
                                    </div>
                                </div>
                                <div class="card-info">

                                    <p class="neutral-500"><span class="text_md">{{__('После оплаты сохраните номер заявки')}}</span> <span class="text_ss neutral-1000">{{__(' (доступен после отправки отправки формы)')}}</span></p>
                                    <p class="text-sm neutral-500">{{__('По возникающим с заявкой вопросам, наши операторы готовы ответить в телеграмм канале Call-центра поддержки эмиссии')}} <a href="https://t.me/PFTGoldHelper_bot" target="_blank">@PFTGoldHelper_bot</a></p>



                                </div>
                            </div>
                        </div>
                        <div class="col-lg-8 mb-40" id="mobileBuy">
                            <form id="tokenPurchaseForm" action="{{route('buy_PFTG')}}" method="POST">
                                @csrf
                                <div class="box-form-register">
                                    <h3 class="title-register">{{__('Купить токены PFTG')}}</h3>
                                    <p class="text-md neutral-700 pb-10">{{__('Привилегированные токены платформы')}}</p>


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
                                            <option value="trx" >{{__('TRX')}}</option>
                                            <option value="btc">{{__('Bitcoin (BTC)')}}</option>
                                            <option value="eth">{{__('Ethereum (ETH)')}}</option>
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
                                                <input type="hidden" name="priceCrypto" id="priceCryptoHidden" value="0">
                                                <input type="hidden" name="cryptoAmount" id="cryptoAmountHidden" value="0">
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
    </section>
    <!-- О платформе -->
    <section class="section-box wow animate__animated animate__fadeIn box-imazing-features animated" style="visibility: visible;" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 mb-30">
                    <a class="btn btn-brand-5" href="#">{{__('О платформе')}}</a>
                    <h3 class="mb-25 mt-15 neutral-0">{{__('Новое единое цифровое решение для запуска проектов и инвестиций')}}</h3>
                    <p class="text-md neutral-0">{{__('Инновационное решение, направленное на объединение предпринимателей, которые ищут финансирование для своих проектов и инвесторов, готовых поддержать инновационные проекты и новые технологические направления. Платформа функционирует на условиях гарантии прозрачности финансирования, своевременного исполнения проектных задач и понятного дохода с инвестиций.')}}</p>
                    <div class="box-list-check">
                        <ul class="list-check list-check-block">
                            <li>{{__('Интерактивная карта проектов (РФ,РБ)')}}</li>
                            <li>{{__('Токенизация проектов')}}</li>
                            <li>{{__('Реализация проектных услуг, ресурсов, продукции')}}</li>
                            <li>{{__('Система страхования')}}</li>
                            <li>{{__('Понятное управление')}}</li>
                            <li>{{__('Аналитика и отчетность')}}</li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-7 mb-30">
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <div class="card-features-5">
                                <div class="card-image"><img src="{{asset('MainPublic/assets/imgs/page/homepage2/3d.svg')}}" alt="Блокчейн"></div>
                                <div class="card-info">
                                    <h6>{{__('Реестр учета')}}</h6>
                                    <p class="text-sm neutral-500">{{__('ЦИПП использует технологию Blockchain для создания защищенного реестра учета, который обеспечивает целостность и доступность всех сделок и контрактов. Этот реестр позволяет фиксировать каждую транзакцию в неизменяемом виде, а также документировать историю проектов и автоматизировать выполнение обязательств с помощью смарт-контрактов. Это повышает уровень доверия как для инвесторов, так и для предпринимателей, обеспечивая прозрачность и безопасность.')}}</p>
                                </div>
                            </div>
                            <div class="card-features-5">
                                <div class="card-image"><img src="{{asset('MainPublic/assets/imgs/page/homepage2/security.svg')}}" alt="Защита"></div>
                                <div class="card-info">
                                    <h6>{{__('Защита данных и идентификация')}}</h6>
                                    <p class="text-sm neutral-500">{{__('Платформа обеспечивает надежную идентификацию пользователей через интеграцию с государственными сервисами, что упрощает процесс регистрации и верификации. Использование электронных подписей гарантирует безопасность и подлинность документов, связанных с инвестициями, что дополнительно защищает интересы участников.')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6 pt-40">
                            <div class="card-features-5">
                                <div class="card-image"><img src="{{asset('MainPublic/assets/imgs/page/homepage2/web.svg')}}" alt="ЦФА"></div>
                                <div class="card-info">
                                    <h6>{{__('Внедрение цифровых активов (токены, ЦФА, УЦП)')}}</h6>
                                    <p class="text-sm neutral-500">{{__('Инвесторы легко и быстро приобретают доли в проектах,а инициаторы проекта быстро (в срок от 72 часов) получают средства для запуска. Возможность диверсификации инвестиционных инструментов. Платформа также предлагает благотворительные ЦФА для сбора средств на социальные проекты с полной прозрачностью')}}</p>
                                </div>
                            </div>
                            <div class="card-features-5">
                                <div class="card-image"><img src="{{asset('MainPublic/assets/imgs/page/homepage2/social2.svg')}}" alt="Эксперты"></div>
                                <div class="card-info">
                                    <h6>{{__('AI эксперты и аналитики')}}</h6>
                                    <p class="text-sm neutral-500">{{__('ЦИПП внедряет систему автоматизированной оценки проектов, проектной аналитики с использованием искусственного интеллекта, что позволяет прогнозировать стоимость проектов и присваивать им буквенные индексы, отражающие риск и потенциал доходности. Это упрощает процесс принятия решений для инвесторов, позволяя им быстрее и более обоснованно выбирать проекты, соответствующие их инвестиционным стратегиям.')}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 d-none d-md-block" >
                    <div class="image-container">
                        <img src="{{asset('doc/CIPPdrawio.svg')}}" alt="CIPP Diagram" style="width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--токеномика-->
    <section class="section-box wow animate__animated animate__fadeIn box-imazing-features-white animated bg-2-line" id="tokenomika">
        <div class="container">
            <a class="btn btn-brand-4-sm" href="#">{{__('Токеномика')}}</a>
            <h3 class=" mt-15 neutral-1000">{{__('Токены для управления, проектной работы и страхования рисков')}}</h3>
            <p class="text-sm neutral-500 mb-25">{{__('Детализация при наведении на сектор')}} </p>
            <div class="row align-items-top">
                <div class="col-lg-4 mb-30">
                    <div class="card-integration bg-6">
                        <div class="card-title">
                            <h6><span class="number">1</span>{{__('Токен управления')}}</h6>
                        </div>
                        <div class="card-info">
                            <span id="chart"></span>

                        </div>
                        <div class="card-image">
                            <div class="card-image-left"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/256x256.png')}}" alt="PF"></div>
                            <div class="card-image-info">
                                <span class="h3">PFTGold</span>
                                <p class="text-md neutral-500">{{__('Привилегированный токен управления платформой (PFTG)')}} </p>
                                <p class="text-md neutral-700">{{__('Объем эмиссии 3 500 000 PFTG')}} </p>
                            </div>
                        </div>

                        <p class="text-ss neutral-500">{{__('PFTg – токен привязанный к курсу стоимости золота – котировка рассчитывается ежедневно на платформе projects-fund.com, имеет стоимость 0,01 грамм Золота 10 карт. (источники данных GOLDAPI и API.CB)')}} </p>
                    </div>


                </div>
                <div class="col-lg-4 mb-30">
                    <div class="card-integration bg-6">
                        <div class="card-title">
                            <h6><span class="number">2</span>{{__('Основной токен')}}</h6>
                        </div>
                        <div class="card-info">
                            <span id="chart2"></span>

                        </div>
                        <div class="card-image">
                            <div class="card-image-left"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/PFT-tr.png')}}" alt="PF"></div>
                            <div class="card-image-info">
                                <span class="h3">PFT</span>
                                <p class="text-md neutral-500">{{__('Основной токен платформы (PFT)')}} </p>
                                <p class="text-md neutral-700">{{__('Объем эмиссии 6 626 070 150 PFT')}} </p>
                            </div>
                        </div>

                        <p class="text-ss neutral-500">{{__('PFT – основная учетная единица платформы, увеличение капитализации, увеличение стоимости активов владельцев, привлечение средств для продвижения платформы, оплат лицензий и сторонних сервисов в рамках ')}} </p>
                    </div>


                </div>
                <div class="col-lg-4 mb-30">
                    <div class="card-integration bg-6">
                        <div class="card-title">
                            <h6><span class="number">3</span>{{__('Токен страхования')}}</h6>
                        </div>
                        <div class="card-info">
                            <span id="chart3"></span>

                        </div>
                        <div class="card-image">
                            <div class="card-image-left"><img src="{{asset('MainPublic/assets/imgs/page/homepage1/iPFT.png')}}" alt="PF"></div>
                            <div class="card-image-info">
                                <span class="h3">iPFT</span>
                                <p class="text-md neutral-500">{{__('Не подлежит реализации')}} </p>
                                <p class="text-md neutral-700">{{__('Объем эмиссии 1 500 000 iPFT')}} </p>
                            </div>
                        </div>

                        <p class="text-ss neutral-500">{{__('iPFT – токен страхования от финансовых рисков инвесторов и гарантия целевого исполнения задач по проектному инвестированию. В обьем эмисс включена комиссия за транзакции (токен без комиссии для участников)')}} </p>
                    </div>


                </div>
            </div>
        </div>
        </div>
    </section>
    <!--Дорожная карта-->
    <section class="section-box wow animate__animated animate__fadeIn box-imazing-features-white animated" id="roadMap">
        <div class="container">
        <a class="btn btn-brand-4-sm" href="#">{{__('Дорожная карта платформы')}}</a>
        <h2 class="mt-15 mb-20">{{__('Этапы реализации цифровой инвестиционной проектной платформы')}}</h2>
    <div class="list-change-log">
        <div class="item-log">
            <div class="date-log"> <span class="btn btn-brand-4-sm bg-5">{{__('Март 2024')}}</span></div>
            <div class="line-log"> </div>
            <div class="info-log">
                <h4>{{__('Формирование идеи и исследования')}}</h4>
                <p class="text-md">{{__('Изучены проблемы пользователей, таких как инвесторы и стартапы, и определены их потребности. Проведен мозговой штурм и анализ конкурентов с целью формирования уникального торгового предложения (УТП) и ключевых функций платформы. Выполнен анализ рынка и целевой аудитории, а также собраны требования.')}}</p>
                <ul class="list-check-black">
                    <li>{{__('Анализ рынка')}}</li>
                    <li>{{__('Выбор технологий')}}</li>
                    <li>{{__('Создание архитектуры платформы')}}</li>
                    <li>{{__('Сбор требований')}}</li>
                    <li>{{__('Подготовка законодательной базы')}}</li>
                </ul>
            </div>
        </div>
        <div class="item-log">
            <div class="date-log"> <span class="btn btn-brand-4-sm bg-5">{{__('Июнь 2024')}}</span></div>
            <div class="line-log"> </div>
            <div class="info-log">
                <h4>{{__('Начало кодирования и детализация требований, создание справочников, интеграций')}}</h4>
                <p class="text-md">{{__('Этап кодирования и детализации требований. Созданы проектные справочники, включающие информацию о токенизации и цифровых финансовых активах (ЦФА). Также разработаны смарт-контракты для автоматизации исполнения проектов. Важным направлением стали решения по интеграции с финансовыми учреждениями, что обеспечило надежное взаимодействие с банковскими системами. Кроме того, были разработаны решения для интеграции с государственными отчетными органами, что способствовало соблюдению нормативных требований и повышению прозрачности платформы.')}}</p>
                <ul class="list-check-black">
                    <li>{{__('Проектные справочники')}}</li>
                    <li>{{__('Токенизация и ЦФА')}}</li>
                    <li>{{__('Смарт контракты исполнения проектов')}}</li>
                    <li>{{__('Решения по интеграции с финансовыми учреждениями')}}</li>
                    <li>{{__('Решения по интеграции государственными отчетными органами')}}</li>

                </ul>
            </div>
        </div>
        <div class="item-log">
            <div class="date-log"> <span class="btn btn-brand-4-sm bg-5">{{__('Декабрь 2024')}}</span></div>
            <div class="line-log"> </div>
            <div class="info-log">
                <h4>{{__('Эмиссия токенов, реализация PoC - proof of concept, система страхования инвесторов')}}</h4>
                <p class="text-md">{{__('Реализована система автоматической оценки проектов, подключен ИИ к работе, рассчитана токеномика по платформе, выявлена необходимость собственного реестра (блокчейн) платформы, реализованы базовые модули, ролевые системы.')}}</p>
                <ul class="list-check-black">
                    <li>{{{__('Эмиссия PFTG привилегированных')}}}</li>
                    <li>{{{__('Постановка задачи на блокчейн ГАНИМЕД')}}}</li>
                    <li>{{__('Инвестиционное предложение')}}</li>
                    <li>{{__('Постановка задачи на marketplace результатов проектов')}}</li>
                    <li>{{__('Собрана предварительная база проектов')}}</li>
                    <li>{{{__('WHITEPAPER')}}}
                    <li>{{{__('Система страхования и страховой токен iPFT')}}}</li>
                </ul>
            </div>
        </div>
        <div class="item-log">
            <div class="date-log"> <span class="btn btn-brand-4-sm">{{__('Апрель 2025')}}</span></div>
            <div class="line-log"> </div>
            <div class="info-log">
                <h4>{{__('Разработка MVP, работы с привлеченными инвесторами, мобильное приложение, начало продвижения')}}</h4>
                <p class="text-md">{{__('Продолжение работ по реализации платформы, набор сотрудников, начало реализации публичной части платформы. Площадка обмена активами проектов, выпуск обычных токенов платформы, создание контрактов на страховую эмиссию. Выявлен интерес со стороны финансовых структур, выбор банка - оператора платформы. Подготовка к организационно-правовой реорганизации платформы')}}</p>
                <ul class="list-check-black">
                    <li>{{{__('Эмиссия PFT - основных токенов платформы ')}}}</li>
                    <li>{{__('Ограничение эмиссии  привилегированных токенов PFTG')}}</li>
                    <li>{{__('Итоговая модульная архитектура')}}</li>
                    <li>{{__('Исламский аккаунт')}}</li>
                    <li>{{__('База знаний платформы')}}</li>
                    <li>{{__('ИИ экспертиза проектов')}}</li>

                </ul>
            </div>
        </div>
        <div class="item-log">
            <div class="date-log"> <span class="btn btn-brand-4-sm">{{__('Октябрь 2025')}}</span></div>
            <div class="line-log"> </div>
            <div class="info-log">
                <h4>{{__('Зпуск MVP ЦИПП, запуск блокчейн ГАНИМЕД, подключение к ГосУслугам, ФНС, запуск кошельков, начало работ по бирже SFORDEX')}}</h4>
                <p class="text-md">{{__('Полностью функциональная платформа проектного инвестирования, идет регистрация первых 50 проектов, запущены системы криптозащиты и протоколирования, реестр ГАНИМЕД запущен. Начаты работы над реализацией биржи проектных активов SFORDEX. Запущен документооборот на платформе, права проектного участию подтверждаются криптографическими сертификатами.')}}</p>
                <ul class="list-check-black">
                    <li>{{{__('API платформы, EndPoint портала ГосУслуг, ГосКлюч, ФНС')}}}</li>
                    <li>{{__('Полиномиальные ключи шифрования')}}</li>
                    <li>{{__('Биржа активов проектов SFORDEX')}}</li>
                    <li>{{__('Проектные ICO')}}</li>
                    <li>{{__('Подготовка к лицензированию')}}</li>
                    <li>{{__('Выпуск первой эмиссии монеты блокчейна GND')}}</li>
                </ul>
            </div>

        </div>
        <div class="item-log">
            <div class="date-log"> <span class="btn btn-brand-4-sm">{{__('Октябрь 2026')}}</span></div>
            <div class="line-log"> </div>
            <div class="info-log">
                <h4>{{__('Функционирует платформа цифрового проектного инвестирования, блокчейн ГАНИМЕД ведет реестр проектов и транзакций, биржа SFORDEX запущена.')}}</h4>
                <p class="text-md">{{__('Все модули протестированы и активны, справочники заполнены, активное продвижение платформы в качестве гаранта привлечения инвестиций и исполнения проектов. Подключен банк оператор - работают мультивалютные фиатные шлюзы.')}}</p>
                <ul class="list-check-black">
                    <li>{{{__('Лицензия деятельности')}}}</li>
                    <li>{{__('Мобильное приложение')}}</li>
                    <li>{{__('Кошельки')}}</li>
                    <li>{{__('Аналитика')}}</li>
                    <li>{{__('Экспертизы')}}</li>
                </ul>
            </div>

        </div>
    </div>

        </div>
    </section>
    <!-- FAQ -->
    <section class="section-box box-faqs-3" id="faq">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="box-faq-left"><a class="btn btn-brand-4-sm" href="#">{{__('Ответы на частые вопросы')}}</a>
                        <h2 class="heading-2 mb-20 mt-20">{{__('У Вас есть вопросы по платформе?')}}</h2>
                        <p class="h4 neutral-700">{{__('Попробуем на них ответить! ')}}</p>
                        <p class="text-lg neutral-700">{{__('Не нашли ответ или нужна детализация -  ')}}<a class="text-18-bold brand-1-1" href="#">{{__('в ближайшем релизе будет доступен модуль "БАЗА ЗНАНИЙ"')}}</a></p>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="accordion accordion-flush accordion-style-2" id="accordionFAQS">
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="true" aria-controls="flush-collapseOne">
                                    {{__('Что такое Цифровая инвестиционная проектная платформа (ЦИПП)?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse show" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    <p>{{__('ЦИПП — это инновационная платформа, которая объединяет предпринимателей, ищущих финансирование для своих проектов, и инвесторов, готовых поддержать новые технологические направления. Платформа обеспечивает прозрачность финансирования и гарантирует своевременное выполнение проектных задач.')}}</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                                    {{__('Как работает реестр учета ГАНИМЕД на основе Blockchain?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('Платформа использует технологию Blockchain для создания защищенного реестра ГАНИМЕД, который фиксирует все сделки и контракты в неизменяемом виде, обеспечивая их целостность и доступность. Это повышает уровень доверия между инвесторами и предпринимателями.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                                    {{__('Как осуществляется защита данных и идентификация пользователей?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseThree" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('ЦИПП обеспечивает надежную идентификацию пользователей через интеграцию с государственными сервисами и использует электронные подписи для гарантии безопасности и подлинности документов. Шифрование и защита передаваемых данных осуществляется с помощью четырех ключевых алгоритмов полиномиального шифрования.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFour">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                                    {{__('Что такое цифровые финансовые активы (ЦФА) на платформе?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseFour" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('ЦФА — это цифровые токены, представляющие права на активы или доходы, связанные с проектами на платформе. Они упрощают процесс инвестирования и позволяют инвесторам быстро приобретать доли в проектах.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingFive">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                                    {{__('Как осуществляется автоматизированная оценка проектов с помощью AI?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseFive" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('Платформа использует искусственный интеллект для прогнозирования стоимости проектов и присвоения им буквенных индексов, отражающих риск и потенциал доходности. Это помогает инвесторам принимать более обоснованные решения.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSix">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                                    {{__('Как ЦИПП обеспечивает прозрачность и доверие?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseSix" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('ЦИПП внедряет интеграцию с внешними аудиторами и налоговыми органами через API, что позволяет проводить автоматизированную отчетность и мониторинг соответствия, а также уведомления о подозрительных операциях.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingSeven">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
                                    {{__('Как работает внутренняя система страхования участников?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseSeven" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('Участники могут использовать токены iPFT для приобретения страховых полисов, которые покрывают их инвестиции. Система также включает гарантии возврата средств и страхование рисков, связанных с проектами.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingEight">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
                                    {{__('Какие преимущества предлагает ЦИПП для инвесторов и стартапов?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseEight" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('ЦИПП обеспечивает прозрачность информации, доступность для широкого круга пользователей, возможность диверсификации инвестиций и создание сообщества для обмена опытом и знаниями.')}}
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingNine">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
                                    {{__('Какие планы по развитию у ЦИПП?')}}
                                </button>
                            </h2>
                            <div class="accordion-collapse collapse" id="flush-collapseNine" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFAQS">
                                <div class="accordion-body">
                                    {{__('Платформа планирует запуск минимально жизнеспособного продукта (MVP), расширение функционала на основе отзывов пользователей и глобальную экспансию на международные рынки.')}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <script src="{{asset('MainPublic/assets/js/script.js')}}" defer></script>

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
