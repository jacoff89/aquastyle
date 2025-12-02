<header id="main" class="section page-header header-creative-wrap context-dark">
    <!-- RD Navbar-->
    <div class="rd-navbar-wrap">
        <nav class="rd-navbar rd-navbar-creative rd-navbar-creative-2" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="100px" data-xl-stick-up-offset="112px" data-xxl-stick-up-offset="132px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-collapse-toggle rd-navbar-fixed-element-1" data-rd-navbar-toggle=".rd-navbar-collapse"><span></span></div>
            <div class="rd-navbar-aside-outer">
                <div class="rd-navbar-aside">
                    <div class="rd-navbar-collapse">
                        <ul class="contacts-classic">
                            <li>
                                <span class="contacts-classic-title">Позвоните нам:</span>
                            </li>
                            <li>
                                <a href="tel:+79080853524"><span class="icon mdi mdi-phone"></span> +7 (908) 085-35-24</a>
                            </li>
                            <li>
                                <a href="tel:2353524"><span class="icon mdi mdi-phone"></span> 235-35-24</a>
                            </li>
                            <li>
                                <a href="mailto:aquastyl74@mail.ru"><span class="icon mdi mdi-email-outline"></span> aquastyl74@mail.ru</a>
                            </li>
                        </ul>
                    </div>
                    <!-- RD Navbar Panel-->
                    <div class="rd-navbar-panel">
                        <!-- RD Navbar Toggle-->
                        <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                        <!-- RD Navbar Brand-->
                        <div class="rd-navbar-brand">
                            <a class="brand" href="{{ route('home') }}">
                                <img class="brand-logo-dark" src="{{ Vite::asset('resources/images/aquastyle-logo.png') }}" alt="" width="120" srcset="{{ Vite::asset('resources/images/aquastyle-logo.png') }} 2x"/>
                                <img class="brand-logo-light" src="{{ Vite::asset('resources/images/aquastyle-logo.png') }}" alt="" width="119" srcset="{{ Vite::asset('resources/images/aquastyle-logo.png') }} 2x"/>
                            </a>
                        </div>
                    </div>
                    <div class="rd-navbar-aside-element">
                        <!-- RD Navbar Search-->
                        {{--<div class="rd-navbar-search rd-navbar-search-2">
                            <button class="rd-navbar-search-toggle rd-navbar-fixed-element-3 rd-navbar-fixed-element-4" data-rd-navbar-toggle=".rd-navbar-search"><span></span></button>
                            <form class="rd-search" action="search-results.html" data-search-live="rd-search-results-live" method="GET">
                                <div class="form-wrap">
                                    <label class="form-label" for="rd-navbar-search-form-input">Поиск...</label>
                                    <input class="rd-navbar-search-form-input form-input" id="rd-navbar-search-form-input" type="text" name="s" autocomplete="off"/>
                                    <div class="rd-search-results-live" id="rd-search-results-live"></div>
                                    <button class="rd-search-form-submit fl-bigmug-line-search74" type="submit"></button>
                                </div>
                            </form>
                            <select class="select select-inline rd-navbar-fixed-element-2" data-placeholder="Select an option" data-dropdown-class="select-inline-dropdown">
                                <option value="en" selected="">en</option>
                                <option value="fr">fr</option>
                                <option value="es">es</option>
                            </select>
                        </div>--}}
                    </div>
                </div>
            </div>
            <div class="rd-navbar-main-outer">
                <div class="rd-navbar-main">
                    <div class="rd-navbar-nav-wrap">
                        <!-- RD Navbar Nav-->
                        <ul class="rd-navbar-nav">
                            <li class="rd-nav-item active"><a class="rd-nav-link" href="#main">Главная</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#services">Услуги</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#about">О нас</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#reviews">Отзывы</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#gallery">Галерея</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#team">Инструкторы</a>
                            </li>
                            <li class="rd-nav-item"><a class="rd-nav-link" href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
</header>
