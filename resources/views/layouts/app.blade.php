<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
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
        (function (m, e, t, r, i, k, a) {
            m[i] = m[i]

            function () {
                (m[i].a = m[i].a[]).push(arguments)
            };
            m[i].l = 1 * new Date();
            for (var j = 0; j < document.scripts.length; j++) {
                if (document.scripts[j].src === r) {
                    return;
                }
            }
            k = e.createElement(t), a = e.getElementsByTagName(t)[0], k.async = 1, k.src = r, a.parentNode.insertBefore(k, a)
        })(window, document, 'script', 'https://mc.yandex.ru/metrika/tag.js?id=105431434', 'ym');

        ym(105431434, 'init', {
            ssr: true,
            webvisor: true,
            clickmap: true,
            ecommerce: "dataLayer",
            accurateTrackBounce: true,
            trackLinks: true
        });
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/105431434" style="position:absolute; left:-9999px;" alt=""/></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
@endenv
</body>
</html>
