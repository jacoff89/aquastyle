@if (!Cookie::get('cookies_accepted'))
    <style>
        #cookie-banner {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            background: #1f2937;
            color: white;
            padding: 16px;
            font-size: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            z-index: 9999;

            opacity: 0;
            transform: translateY(100%);
            transition: opacity .5s ease, transform .5s ease;
        }

        #cookie-banner.show {
            opacity: 1;
            transform: translateY(0);
        }
        #cookie-accept-btn {
            margin: 0;
            padding: 5px 15px;
            font-weight: 400;
        }
    </style>

    <div id="cookie-banner">
        <span>
            Мы используем cookies для улучшения работы сайта. Продолжая использовать сайт, вы соглашаетесь с нашей
            <a href="/privacy-policy" target="_blank" style="color: white;text-decoration: underline;">политикой конфиденциальности</a>.
        </span>
        <button id="cookie-accept-btn" class="button button-secondary">Понятно</button>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Плавное появление
            setTimeout(() => {
                document.getElementById('cookie-banner').classList.add('show');
            }, 50);

            // Скрытие и отправка запроса
            document.getElementById('cookie-accept-btn').addEventListener('click', function () {
                fetch("{{ route('accept-cookies') }}", {
                    method: "POST",
                    headers: {
                        "X-CSRF-TOKEN": "{{ csrf_token() }}",
                        "Content-Type": "application/json"
                    },
                    body: "{}"
                }).then(() => {
                    const banner = document.getElementById('cookie-banner');
                    banner.classList.remove('show');
                    setTimeout(() => banner.style.display = 'none', 500);
                });
            });
        });
    </script>
@endif

