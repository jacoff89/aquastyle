@extends('layouts.app')

@section('content')
    <!-- Swiper-->
    <section class="section swiper-container swiper-slider swiper-slider-4" data-loop="true" data-autoplay="6000" data-simulate-touch="false">
        <div class="swiper-wrapper context-dark">
            <div class="swiper-slide swiper-slide-1" data-slide-bg="{{ Vite::asset('resources/images/slide-2.jpg') }}">
                <div class="swiper-slide-caption section-md text-sm-start">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-xl-7">
                                <h1 class="swiper-title-1" data-caption-animate="fadeInLeft" data-caption-delay="100">Дайвинг-центр "Аквастиль"<br class="d-none d-xl-block"> В Челябинске на Урале</h1>
                                <h5 class="swiper-title-2 text-width-medium font-sec" data-caption-animate="fadeInLeft" data-caption-delay="250">Дайвинг, подводная охота, фридайвинг. Обучение от новичка до инструктора.</h5>
                                <div class="button-wrap" data-caption-animate="fadeInLeft" data-caption-delay="400"><a class="button button-lg button-shadow-4 button-secondary button-zakaria" href="#form">Оставить заявку</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide swiper-slide-1" data-slide-bg="{{ Vite::asset('resources/images/slide-1.jpg') }}">
                <div class="swiper-slide-caption section-md text-sm-start">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-8 col-md-8 col-xl-7">
                                <h1 class="swiper-title-1 text-spacing-0" data-caption-animate="fadeInLeft" data-caption-delay="100">Наслаждайтесь подводным миром<br class="d-none d-xl-block"> Ныряйте с нами</h1>
                                <h5 class="swiper-title-2 text-width-medium font-sec" data-caption-animate="fadeInLeft" data-caption-delay="250">Мы предлагаем широкий выбор туров и мест для подводного плавания с аквалангом для всех желающих.</h5>
                                <div class="button-wrap" data-caption-animate="fadeInLeft" data-caption-delay="400"><a class="button button-lg button-shadow-4 button-secondary button-zakaria" href="#form">Оставить заявку</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
    </section>

    <section id="services" class="section section-lg bg-default">
        <div class="container">
            <h3 class="wow fadeScale">Услуги</h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-8" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-dots="true" data-mouse-drag="false">
                <article class="box-info-modern wow slideInUp" data-wow-delay=".1s"><a class="box-info-modern-figure" href="#form"><img src="{{ Vite::asset('resources/images/about-1-340x243.jpg') }}" alt="" width="340" height="243"/></a>
                    <h4 class="box-info-modern-title"><a href="#">Базовый курс по дайвингу</a></h4>
                    <div class="box-info-modern-text">Обучение дайвингу (Дайвер 1 звезда). <br>Погружение до 18 метров.</div>
                    <h6 class="box-info-modern-title">от 30 000 рублей</h6>
                    <a class="box-info-modern-link" href="#form">Записаться</a>
                </article>
                <article class="box-info-modern wow slideInUp"><a class="box-info-modern-figure" href="#"><img src="{{ Vite::asset('resources/images/about-2-340x243.jpg') }}" alt="" width="340" height="243"/></a>
                    <h4 class="box-info-modern-title"><a href="#form">Пробное погружение</a></h4>
                    <div class="box-info-modern-text">Inter dive - Пробное погружение Это самый первый и запоминающийся этап знакомства с подводным миром. Для знакомства с дайвингом не требуется специальная подготовка, опыт погружений и обращения со снаряжением. Инструктор все сделает за Вас!</div>
                    <h6 class="box-info-modern-title">от 6 000 рублей</h6>
                    <a class="box-info-modern-link" href="#form">Записаться</a>
                </article>
                <article class="box-info-modern wow slideInUp" data-wow-delay=".1s"><a class="box-info-modern-figure" href="#"><img src="{{ Vite::asset('resources/images/about-3-340x243.jpg') }}" alt="" width="340" height="243"/></a>
                    <h4 class="box-info-modern-title"><a href="#form">Фридайвинг. <br>Базовый курс</a></h4>
                    <div class="box-info-modern-text">Базовый курс по основам ФРИДАЙВИНГА. Курс по подготовке фридайверов, даст Вам знания и навыки, необходимые для планирования и осуществления погружений на задержке дыхания</div>
                    <h6 class="box-info-modern-title">26 000 рублей</h6>
                    <a class="box-info-modern-link" href="#form">Записаться</a>
                </article>
            </div>
        </div>
    </section>

    <section id="about" class="section section-sm bg-image-1 bg-gray-1">
        <div class="container">
            <h3 class="wow fadeScale pb-5">Вам у нас понравится</h3>
            <div class="row row-xl row-30 row-md-40 row-lg-50 align-items-center">
                <div class="col-md-5 col-xl-4">
                    <div class="row row-30 row-md-40 row-lg-50 bordered-2">
                        <div class="col-sm-6 col-md-12">
                            <article class="box-icon-classic box-icon-nancy-right text-center text-lg-right wow fadeInLeft">
                                <div class="unit flex-column flex-lg-row-reverse">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-svg"><img src="{{ Vite::asset('resources/images/index-icon-1-77x79.png') }}" alt="" width="77" height="79"/>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        {{--<h4 class="box-icon-classic-title text-spacing-0"><a href="#">Best Equipment</a></h4>--}}
                                        <p class="box-icon-classic-text">Клуб "Аквастиль" существует с 1997 года! За это время мы подготовили более 1000 дайверов базового курса, более 500 фридайверов. Наши воспитанники вступили в ряды наших инструкторов.</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <article class="box-icon-classic box-icon-nancy-right text-center text-lg-right wow fadeInLeft" data-wow-delay=".1s">
                                <div class="unit flex-column flex-lg-row-reverse">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-svg"><img src="{{ Vite::asset('resources/images/index-icon-2-77x79.png') }}" alt="" width="77" height="79"/>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        {{--<h4 class="box-icon-classic-title text-spacing-0"><a href="#">Exciting Places</a></h4>--}}
                                        <p class="box-icon-classic-text">Летом мы базируемся на о. Увильды. А так же организовываем выездные дайвы в различные карьеры!</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-xl-4 d-none d-md-block wow fadeScale"></div>
                <div class="col-md-5 col-xl-4">
                    <div class="row row-30 row-md-40 row-lg-50 bordered-2">
                        <div class="col-sm-6 col-md-12">
                            <article class="box-icon-classic box-icon-nancy-left text-center text-lg-left wow fadeInRigth">
                                <div class="unit flex-column flex-lg-row">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-svg"><img src="{{ Vite::asset('resources/images/index-icon-3-77x79.png') }}" alt="" width="77" height="79"/>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        {{--<h4 class="box-icon-classic-title text-spacing-0"><a href="#">100% Safety</a></h4>--}}
                                        <p class="box-icon-classic-text">Бассейн "Строитель" олимпийского уровня. Удобное время работы</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-md-12">
                            <article class="box-icon-classic box-icon-nancy-left text-center text-lg-left wow fadeInRight" data-wow-delay=".1s">
                                <div class="unit flex-column flex-lg-row">
                                    <div class="unit-left">
                                        <div class="box-icon-classic-svg"><img src="{{ Vite::asset('resources/images/index-icon-4-77x79.png') }}" alt="" width="77" height="79"/>
                                        </div>
                                    </div>
                                    <div class="unit-body">
                                        {{--<h4 class="box-icon-classic-title text-spacing-0"><a href="#">Instructors</a></h4>--}}
                                        <p class="box-icon-classic-text">Узнайте детальную информацию о наших преимуществах по телефону: +7 (351) 235-35-24</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Counter Modern-->
    <section class="parallax-container" data-parallax-img="{{ Vite::asset('resources/images/parallax-1.jpg') }}">
        <div class="parallax-content section-xxl context-dark">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">1997</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h6 class="counter-modern-title fw-medium font-sec">Клуб существует<br class="d-none d-sm-block">с 1997 года!</h6>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">1000</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h6 class="counter-modern-title fw-medium font-sec">Более 1000 дайверов<br class="d-none d-sm-block"> прошли базовый курс</h6>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">500</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h6 class="counter-modern-title fw-medium font-sec">Более 500 фридайверов<br class="d-none d-sm-block">обучено</h6>
                        </div>
                    </div>
                    <div class="col-6 col-sm-3">
                        <div class="counter-modern">
                            <h2 class="counter-modern-number"><span class="counter">300</span>
                            </h2>
                            <div class="counter-modern-decor"></div>
                            <h6 class="counter-modern-title fw-medium font-sec">Более 300 <br class="d-none d-sm-block"> положительных отзывов</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Why Choose Divers-->
    <section class="section section-xxl bg-default text-md-start">
        <div class="container">
            <div class="row row-30 row-md-60 row-lg-70 justify-content-center align-items-md-center">
                <div class="col-sm-8 col-md-5 col-xl-6">
                    <div class="product-wrap-1">
                        <!-- Owl Carousel-->
                        <div class="owl-carousel owl-style-5" data-items="1" data-margin="20" data-dots="true" data-autoplay="false" data-animation-out="fadeOut">
                            <article class="product-creative">
                                <div class="product-figure"><img src="{{ Vite::asset('resources/images/product-big-1-543x558.png') }}" alt="" width="543" height="558"/>
                                </div>
                            </article>
                            <article class="product-creative">
                                <div class="product-figure"><img src="{{ Vite::asset('resources/images/product-big-2-543x558.png') }}" alt="" width="543" height="558"/>
                                </div>
                            </article>
                            <article class="product-creative">
                                <div class="product-figure"><img src="{{ Vite::asset('resources/images/product-big-3-543x558.png') }}" alt="" width="543" height="558"/>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 col-xl-6">
                    <h3 class="text-transform-capitalize wow fadeInRight">Почему выбирают нас</h3>
                    <!-- Bootstrap collapse-->
                    <div class="card-group-custom card-group-corporate" id="accordion1" role="tablist" aria-multiselectable="false">
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate wow fadeInRight" data-wow-delay=".1s">
                            <div class="card-header" role="tab">
                                <div class="card-title"><a id="accordion1-card-head-jbkowjdl" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-xopvtrxc" aria-controls="accordion1-card-body-xopvtrxc" aria-expanded="true" role="button">25+ лет опыта в дайвинге
                                        <div class="card-arrow">
                                            <div class="icon"></div>
                                        </div></a></div>
                            </div>
                            <div class="collapse show" id="accordion1-card-body-xopvtrxc" aria-labelledby="accordion1-card-head-jbkowjdl" data-parent="#accordion1" role="tabpanel">
                                <div class="card-body">
                                    <p>Работаем с 1997 года. За это время нам удалось собрать команду опытных инструкторов. Это делает нас выбором №1 среди путешественников, которые ищут незабываемые и на 100% безопасные погружения с консультациями лучших дайверов.</p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate wow fadeInRight" data-wow-delay=".2s">
                            <div class="card-header" role="tab">
                                <div class="card-title"><a class="collapsed" id="accordion1-card-head-cihbkdpa" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-nrfcgjwb" aria-controls="accordion1-card-body-nrfcgjwb" aria-expanded="false" role="button">Сильная команда инструкторов
                                        <div class="card-arrow">
                                            <div class="icon"></div>
                                        </div></a></div>
                            </div>
                            <div class="collapse" id="accordion1-card-body-nrfcgjwb" aria-labelledby="accordion1-card-head-cihbkdpa" data-parent="#accordion1" role="tabpanel">
                                <div class="card-body">
                                    <p>Все наши инструктора прошли профессиональную подготовку и имеют международную сертификацию по стандартам CMAS, NDL .</p>
                                </div>
                            </div>
                        </article>
                        <!-- Bootstrap card-->
                        <article class="card card-custom card-corporate wow fadeInRight" data-wow-delay=".3s">
                            <div class="card-header" role="tab">
                                <div class="card-title"><a class="collapsed" id="accordion1-card-head-ihgdrovf" data-bs-toggle="collapse" data-parent="#accordion1" href="#accordion1-card-body-kytsrifk" aria-controls="accordion1-card-body-kytsrifk" aria-expanded="false" role="button">Доступные цены
                                        <div class="card-arrow">
                                            <div class="icon"></div>
                                        </div></a></div>
                            </div>
                            <div class="collapse" id="accordion1-card-body-kytsrifk" aria-labelledby="accordion1-card-head-ihgdrovf" data-parent="#accordion1" role="tabpanel">
                                <div class="card-body">
                                    <p>Дайверский центр придерживается доступной ценовой политики, что позволяет нам предлагать лучшие дайвинг-туры и услуги по разумным ценам.</p>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
                {{--<div class="col-xl-12">
                    <div class="row row-30">
                        <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".2s">
                            <article class="box-icon-creative-2">
                                <div class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                                    <div class="unit-left"><img src="{{ Vite::asset('resources/images/index-icon-1-52x54.png') }}" alt="" width="52" height="54"/>
                                    </div>
                                    <div class="unit-body">
                                        <h5 class="box-icon-creative-title-2"><a href="#">Разные локации</a></h5>
                                        <p class="box-icon-creative-text-2">A wide variety of destinations</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInLeft" data-wow-delay=".1s">
                            <article class="box-icon-creative-2">
                                <div class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                                    <div class="unit-left"><img src="{{ Vite::asset('resources/images/index-icon-2-52x55.png') }}" alt="" width="52" height="55"/>
                                    </div>
                                    <div class="unit-body">
                                        <h5 class="box-icon-creative-title-2"><a href="#">Бесплатный трансфер</a></h5>
                                        <p class="box-icon-creative-text-2">We offer free transfer to Divers</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-sm-6 col-lg-4 wow fadeInLeft">
                            <article class="box-icon-creative-2">
                                <div class="unit flex-column flex-md-row flex-lg-column flex-xl-row align-items-md-center align-items-lg-start align-items-xl-center">
                                    <div class="unit-left"><img src="{{ Vite::asset('resources/images/index-icon-3-54x54.png') }}" alt="" width="54" height="54"/>
                                    </div>
                                    <div class="unit-body">
                                        <h5 class="box-icon-creative-title-2"><a href="#">Онлайн-оплата</a></h5>
                                        <p class="box-icon-creative-text-2">Pay for any diving tour online</p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
    </section>

    <!-- Отзывы-->
    <section id="reviews" class="section section-xxl bg-gray-1">
        <div class="container">
            <h3 class="text-transform-capitalize wow fadeScale">Отзывы</h3>
            <div class="row row-sm row-30 justify-content-center">
                <div class="col-xl-9">
                    <div class="slick-quote">
                        <!-- Slick Carousel-->
                        <div class="slick-slider carousel-parent" id="carousel-parent" data-autoplay="true" data-swipe="true" data-items="1" data-child="#child-carousel" data-for="#child-carousel">
                            <div class="item">
                                <p class="quote-minimal-text">Прошла обучение два года назад и сразу поехала с ребятами в Египет. Огромная благодарность всей команде . Постоянные интересные выезды по уралу и заграницу. Как одна  огромная семья.
                                    Рекомендую всем кто хочет просто попробовать и так же кто хочет заниматься профисионально. </p>
                            </div>
                            <div class="item">
                                <p class="quote-minimal-text">Вчера моя дочь была на первом пробном занятии и первом погружении. Прошло все идеально, лучше, чем вообще думали. Очень понравилось. Дочь давно интересовалась дайвингом и наконец ее мечта осуществилась.
                                    Все инструкторы внимательные, спокойные, провели полный инструктаж, все обьяснили, показали, контролировали при погружении. В итоге, на первом занятии дочка смогла сама проплыть туда и обратно, опускаясь  на самое дно бассейна.
                                    Всей команде спасибо и процветания вашему делу!!! </p>
                            </div>
                            <div class="item">
                                <p class="quote-minimal-text">Мне 12 лет .Вчера было пробное погружение .Очень понравилось .Выдали все оборудование :гидрокостюм,маску ,ласты и т.д.Все подошло по размеру .Было удобно.Сначало провели инструктаж как,что .Меня полностью
                                    контролировали при погружении.Я безумно рада.У меня все получилось.Теперь буду ходить на секцию!!!!</p>
                            </div>
                        </div>
                        <div class="slick-quote-nav">
                            <div class="slick-slider child-carousel" id="child-carousel" data-arrows="true" data-for="#carousel-parent" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="3" data-xl-items="3" data-xxl-items="3">
                                <div class="item">
                                    <div class="quote-minimal-figure"><img src="{{ Vite::asset('resources/images/review-1-87x87.jpg') }}" alt="" width="87" height="87"/>
                                    </div>
                                    <div class="quote-minimal-author">Леля Счастливая</div>
                                    {{--<div class="quote-minimal-status">Клиент</div>--}}
                                </div>
                                <div class="item">
                                    <div class="quote-minimal-figure"><img src="{{ Vite::asset('resources/images/review-3-87x87.jpg') }}" alt="" width="87" height="87"/>
                                    </div>
                                    <div class="quote-minimal-author">Gornoe318</div>
                                    {{--<div class="quote-minimal-status">Клиент</div>--}}
                                </div>
                                <div class="item">
                                    <div class="quote-minimal-figure"><img src="{{ Vite::asset('resources/images/review-2-87x87.jpg') }}" alt="" width="87" height="87"/>
                                    </div>
                                    <div class="quote-minimal-author">Соня Тарасова</div>
                                    {{--<div class="quote-minimal-status">Клиент</div>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Masonry Галерея-->
    <section id="gallery" class="section section-xxl bg-default">
        <div class="container">
            <h3 class="text-transform-capitalize wow fadeScale">Галерея</h3>
            <div class="isotope-wrap">
                <div class="isotope-filters"></div>
                <div class="row row-30 isotope isotope-custom-1" data-lightgallery="group">
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-1-270x250.jpg') }}" alt="" width="270" height="250"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/grid-gallery-2-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-1-270x250.jpg') }}" alt="" width="270" height="250"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-2-270x530.jpg') }}" alt="" width="270" height="530"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/masonry-gallery-2-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-2-270x530.jpg') }}" alt="" width="270" height="530"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-3-270x250.jpg') }}" alt="" width="270" height="250"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/masonry-gallery-3-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-3-270x250.jpg') }}" alt="" width="270" height="250"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-4-270x250.jpg') }}" alt="" width="270" height="250"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/masonry-gallery-4-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-4-270x250.jpg') }}" alt="" width="270" height="250"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-3 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-5-270x250.jpg') }}" alt="" width="270" height="250"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/grid-gallery-3-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-5-270x250.jpg') }}" alt="" width="270" height="250"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-4 col-xl-6 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-6-570x530.jpg') }}" alt="" width="570" height="530"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/grid-fullwidth-gallery-2-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-6-570x530.jpg') }}" alt="" width="570" height="530"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-6 col-lg-8 col-xl-6 isotope-item">
                        <!-- Thumbnail Classic-->
                        <article class="thumbnail-classic">
                            <div class="thumbnail-classic-figure"><img src="{{ Vite::asset('resources/images/masonry-gallery-7-570x250.jpg') }}" alt="" width="570" height="250"/>
                            </div>
                            <div class="thumbnail-classic-caption">
                                <div>
                                    <h5 class="thumbnail-classic-title"><a href="#"></a></h5>
                                    <div class="thumbnail-classic-button-wrap">
                                        <div class="thumbnail-classic-button"><a class="button button-primary-2 button-zakaria fl-bigmug-line-search74" href="{{ Vite::asset('resources/images/masonry-gallery-7-1200x800-original.jpg') }}" data-lightgallery="item"><img src="{{ Vite::asset('resources/images/masonry-gallery-7-570x250.jpg') }}" alt="" width="570" height="250"/></a></div>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Подписаться to Our Newsletter-->
    <section id="form" class="parallax-container" data-parallax-img="{{ Vite::asset('resources/images/parallax-4.jpg') }}">
        <div class="parallax-content section-xxl context-dark text-md-left">
            <div class="container">
                <h3 class="text-spacing-0 mb-lg-5">Оставьте заявку и мы вам позвоним</h3>
                <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="contact/send">
                    @csrf
                    <div class="row row-20 row-md-30">
                        <div class="col-lg-8">
                            <div class="row row-20 row-md-30">
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-first-name" type="text" name="name" data-constraints='@@Required(message="Введите имя")'/>
                                        <label class="form-label" for="contact-first-name">Ваше имя</label>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-wrap">
                                        <input class="form-input" id="contact-phone" type="text" name="phone" data-constraints='@@Required(message="Введите телефон")'/>
                                        <label class="form-label" for="contact-phone">Телефон</label>
                                    </div>
                                </div>
                                <div class="col-sm-12">
                                    <div class="form-wrap">
                                        <label class="checkbox-inline">
                                            <input name="input-checkbox" value="checkbox" type="checkbox"'>
                                            <span class="context-dark">Я согласен с <a class="context-dark" href="/privacy-policy">политикой обработки персональных данных</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <button class="button button-lg button-secondary button-zakaria" type="submit">Оставить заявку</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </section>
    <!-- Instructors-->
    <section id="team" class="section section-xxl bg-default">
        <div class="container">
            <h3 class="text-spacing-0 text-transform-capitalize wow fadeScale">Наша команда</h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-margin="30" data-dots="true" data-mouse-drag="false">
                @foreach ($teams as $team)
                    <article class="team-modern box-sm wow slideInUp">
                        <img
                            src="{{ asset('storage/' . $team->image) }}"
                            alt="Инструктор: {{ $team->first_name }} {{ $team->last_name }}"
                            width="270"
                            height="227"
                        />
                        <h5 class="team-modern-name">{{ $team->first_name }} {{ $team->last_name }}</h5>
                        <p class="team-modern-text">{{ $team->position }}</p>
                        {{--<ul class="list-inline team-modern-list-social list-social-2 list-inline-sm">
                            <li><a class="icon mdi mdi-facebook" href="#"></a></li>
                            <li><a class="icon mdi mdi-twitter" href="#"></a></li>
                            <li><a class="icon mdi mdi-instagram" href="#"></a></li>
                            <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                        </ul>--}}
                    </article>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Блог Post-->
    {{--<section class="section section-xxl bg-gray-1">
        <div class="container">
            <h3 class="text-transform-capitalize text-spacing-0 wow fadeScale">Our Блог</h3>
            <!-- Owl Carousel-->
            <div class="owl-carousel" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-dots="true" data-mouse-drag="false">
                <!-- Post Classic-->
                <article class="post post-classic box-md wow slideInDown"><a class="post-classic-figure" href="blog-post.html"><img src="{{ Vite::asset('resources/images/post-1-370x239.jpg') }}" alt="" width="370" height="239"/></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2021-08-09">August 9, 2021</time>
                        </div>
                        <h5 class="post-classic-title text-spacing-0"><a href="blog-post.html">New Caledonia: The Lagoon of All Hopes</a></h5>
                        <p class="post-classic-text font-fourth">As we dived for the very first time in the lagoon of New Caledonia, at Duck Island, with only our masks and fins...</p>
                    </div>
                </article>
                <!-- Post Classic-->
                <article class="post post-classic box-md wow slideInUp"><a class="post-classic-figure" href="blog-post.html"><img src="{{ Vite::asset('resources/images/post-2-370x239.jpg') }}" alt="" width="370" height="239"/></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2021-08-09">August 9, 2021</time>
                        </div>
                        <h5 class="post-classic-title text-spacing-0"><a href="blog-post.html">Scuba Diving in Okinawa: A First-timer Guide</a></h5>
                        <p class="post-classic-text font-fourth">It is one of these places where it is not so straightforward to organize a scuba diving trip. There are so many...</p>
                    </div>
                </article>
                <!-- Post Classic-->
                <article class="post post-classic box-md wow slideInDown"><a class="post-classic-figure" href="blog-post.html"><img src="{{ Vite::asset('resources/images/post-3-370x239.jpg') }}" alt="" width="370" height="239"/></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2021-08-09">August 9, 2021</time>
                        </div>
                        <h5 class="post-classic-title text-spacing-0"><a href="blog-post.html">Shore Diving in Maui &amp; Big Island</a></h5>
                        <p class="post-classic-text font-fourth">The Hawaiian Archipelago is full of bucket list dives with exciting adventures such as diving in the crater...</p>
                    </div>
                </article>
                <article class="post post-classic box-md wow slideInDown"><a class="post-classic-figure" href="blog-post.html"><img src="{{ Vite::asset('resources/images/post-3-370x239.jpg') }}" alt="" width="370" height="239"/></a>
                    <div class="post-classic-content">
                        <div class="post-classic-time">
                            <time datetime="2021-08-09">August 9, 2021</time>
                        </div>
                        <h5 class="post-classic-title text-spacing-0"><a href="blog-post.html">Shore Diving in Maui &amp; Big Island</a></h5>
                        <p class="post-classic-text font-fourth">The Hawaiian Archipelago is full of bucket list dives with exciting adventures such as diving in the crater...</p>
                    </div>
                </article>
            </div>
        </div>
    </section>--}}
@endsection
