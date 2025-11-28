<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
<head>
    <title>404 Страница</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CComfortaa:300,400,700%7COpen+Sans:300,400,600,700">
    <script src="/core.min.js?v={{ filemtime(public_path('core.min.js')) }}"></script>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    @endif
</head>
<body>
<div class="preloader">
    <div class="preloader-body">
        <div class="cssload-bell">
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
            <div class="cssload-circle">
                <div class="cssload-inner"></div>
            </div>
        </div>
    </div>
</div>
<div class="page">
    <section class="section section-single context-dark bg-image" style="background-image: url({{ Vite::asset('resources/images/bg-404.jpg') }});">
        <div class="section-single-inner">
            <header class="section-single-header page-header">
                <div class="page-head-inner">
                    <a class="brand" href="{{ route('home') }}">
                        <img class="brand-logo-dark" src="{{ Vite::asset('resources/images/aquastyle-logo.png') }}" alt="" width="200" srcset="{{ Vite::asset('resources/images/aquastyle-logo.png') }} 2x"/>
                        <img class="brand-logo-light" src="{{ Vite::asset('resources/images/aquastyle-logo.png') }}" alt="" width="200" srcset="{{ Vite::asset('resources/images/aquastyle-logo.png') }} 2x"/>
                    </a>
                </div>
            </header>

            <div class="section-single-main">
                <div class="container">
                    <div class="title-modern">404</div>
                    <h3 class="fw-light text-spacing-100">Страница не найдена</h3><a class="button button-lg button-secondary button-zakaria" href="{{ route('home') }}">Перейти на главную</a>
                </div>
            </div>
            <div class="section-single-footer">
                <div class="container text-center">
                    <p class="rights"><span>&copy;&nbsp; </span><span class="copyright-year"></span><span>&nbsp;</span><span>Дайвинг-центр "Аквастиль"</span><span>.&nbsp; Все права защищены.</span><span>&nbsp;</span><a href="/privacy-policy">Политика конфиденциальности.</a></p>
                </div>
            </div>

        </div>
    </section>
</div>
<div class="snackbars" id="form-output-global"></div>
</body>
</html>
