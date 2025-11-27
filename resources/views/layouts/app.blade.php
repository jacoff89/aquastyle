<!DOCTYPE html>
<html class="wide wow-animation" lang="ru">
<head>
    <title>Дайвинг клуб &quot;Аквастиль&quot; - обучиться дайвингу и фридайвингу, подводной охоте в Челябинске</title>
    <meta name="description"
          content="Где обучиться дайвингу и фридайвингу, подводной охоте в Челябинске на Урале и повышать свое мастерство? Конечно же в ДАЙВИНГ-КЛУБЕ &quot;АКВАСТИЛЬ&quot;.">
    <meta name="keywords" content="Дайвинг клуб, обучиться дайвингу, фридайвинг">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700%7CLato%7CComfortaa:300,400,700%7COpen+Sans:300,400,600,700">
    <script src="/modules/jQuery.js?v={{ filemtime(public_path('modules/jQuery.js')) }}"></script>
    <script src="/modules/jQueryMigrate.js?v={{ filemtime(public_path('modules/jQueryMigrate.js')) }}"></script>
    <script src="/modules/Cookie.js?v={{ filemtime(public_path('modules/Cookie.js')) }}"></script>
    <script src="/modules/Device.js?v={{ filemtime(public_path('modules/Device.js')) }}"></script>
    <script src="/modules/ResizeEvent.js?v={{ filemtime(public_path('modules/ResizeEvent.js')) }}"></script>
    <script src="/modules/Easing.js?v={{ filemtime(public_path('modules/Easing.js')) }}"></script>
    <script src="/modules/TouchSwipe.js?v={{ filemtime(public_path('modules/TouchSwipe.js')) }}"></script>
    <script src="/modules/Popper_js.js?v={{ filemtime(public_path('modules/Popper_js.js')) }}"></script>
    <script src="/modules/Bootstrap.js?v={{ filemtime(public_path('modules/Bootstrap.js')) }}"></script>
    <script src="/modules/Regula.js?v={{ filemtime(public_path('modules/Regula.js')) }}"></script>
    <script src="/modules/Form.js?v={{ filemtime(public_path('modules/Form.js')) }}"></script>
    <script src="/modules/RDInputLabel.js?v={{ filemtime(public_path('modules/RDInputLabel.js')) }}"></script>
    <script src="/modules/Owl.js?v={{ filemtime(public_path('modules/Owl.js')) }}"></script>
    <script src="/modules/Isotope.js?v={{ filemtime(public_path('modules/Isotope.js')) }}"></script>
    <script src="/modules/RD.js?v={{ filemtime(public_path('modules/RD.js')) }}"></script>
    <script src="/modules/UIToTop.js?v={{ filemtime(public_path('modules/UIToTop.js')) }}"></script>
    <script src="/modules/Materianize.js?v={{ filemtime(public_path('modules/Materianize.js')) }}"></script>
    <script src="/modules/Swiper.js?v={{ filemtime(public_path('modules/Swiper.js')) }}"></script>
    <script src="/modules/Lightgallery.js?v={{ filemtime(public_path('modules/Lightgallery.js')) }}"></script>
    <script src="/modules/WOW.js?v={{ filemtime(public_path('modules/WOW.js')) }}"></script>
    <script src="/modules/Mousewheel.js?v={{ filemtime(public_path('modules/Mousewheel.js')) }}"></script>
    <script src="/modules/PageTransition.js?v={{ filemtime(public_path('modules/PageTransition.js')) }}"></script>
    <script src="/modules/Select2.js?v={{ filemtime(public_path('modules/Select2.js')) }}"></script>
    <script src="/modules/Slick.js?v={{ filemtime(public_path('modules/Slick.js')) }}"></script>
    <script src="/modules/MultiToggles.js?v={{ filemtime(public_path('modules/MultiToggles.js')) }}"></script>
    <script src="/modules/_Util.js?v={{ filemtime(public_path('modules/_Util.js')) }}"></script>
    <script src="/modules/_Counter.js?v={{ filemtime(public_path('modules/_Counter.js')) }}"></script>
    <script src="/modules/_ProgressCircle.js?v={{ filemtime(public_path('modules/_ProgressCircle.js')) }}"></script>
    <script src="/modules/_Countdown.js?v={{ filemtime(public_path('modules/_Countdown.js')) }}"></script>
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
    @if (request()->routeIs('home'))
        @include('partials.header-main')
    @else
        @include('partials.header')
    @endif

    @yield('content')

    @include('partials.footer')
</div>
<div class="snackbars" id="form-output-global"></div>
@env(['production'])
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(m,e,t,r,i,k,a){
            m[i]=m[i]function(){(m[i].a=m[i].a[]).push(arguments)};
            m[i].l=1*new Date();
            for (var j = 0; j < document.scripts.length; j++) {if (document.scripts[j].src === r) { return; }}
            k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)
        })(window, document,'script','https://mc.yandex.ru/metrika/tag.js', 'ym');

        ym(91621881, 'init', {webvisor:true, clickmap:true, accurateTrackBounce:true, trackLinks:true});
    </script>
    <noscript><div><img src="https://mc.yandex.ru/watch/91621881" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
    <!-- /Yandex.Metrika counter -->
    @include('partials.cookie-banner')
@endenv
</body>
</html>
