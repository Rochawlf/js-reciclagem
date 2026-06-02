<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'JS Reciclagem LTDA | Gerenciamento de Resíduos')</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=Montserrat:wght@700;800;900&display=swap"
        rel="stylesheet">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    fontFamily: {
                        sans: ['Inter', 'sans-serif'],
                        heading: ['Montserrat', 'sans-serif'],
                    },
                    colors: {
                        brand: {
                            light: '#0d5235',
                            DEFAULT: '#72af50',
                            dark: '#006838',
                            deep: '#004225',
                        }
                    },
                }
            }
        }
    </script>

    <style>
        .hide-scrollbar::-webkit-scrollbar {
            display: none;
        }

        .hide-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }

        body {
            transition: background-color 0.3s ease, color 0.3s ease;
            overflow-x: hidden;
        }

        .reveal {
            opacity: 0;
            transform: translateY(40px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal.active {
            opacity: 1;
            transform: translateY(0);
        }

        .reveal-zoom {
            opacity: 0;
            transform: scale(0.85) translateY(20px);
            transition: all 0.8s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal-zoom.active {
            opacity: 1;
            transform: scale(1) translateY(0);
        }

        .reveal-left {
            opacity: 0;
            transform: translateX(-80px);
            transition: all 0.9s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal-left.active {
            opacity: 1;
            transform: translateX(0);
        }

        .reveal-right {
            opacity: 0;
            transform: translateX(80px);
            transition: all 0.9s cubic-bezier(0.5, 0, 0, 1);
        }

        .reveal-right.active {
            opacity: 1;
            transform: translateX(0);
        }

        .image-wrapper-lg {
            position: relative;
            width: 100%;
            max-width: 620px;
            margin: 0 auto;
            z-index: 1;
        }

        @media (max-width: 767px) {

            .reveal-left,
            .reveal-right {
                transform: translateY(40px);
            }

            .reveal-left.active,
            .reveal-right.active {
                transform: translateY(0);
            }

            .image-wrapper-lg {
                max-width: 100%;
            }
        }

        .delay-100 {
            transition-delay: 100ms;
        }

        .image-wrapper {
            position: relative;
            width: 100%;
            max-width: 450px;
            margin: 0 auto;
            z-index: 1;
        }

        .image-container {
            position: relative;
            width: 100%;
            overflow: hidden;
            z-index: 10;
        }

        .image-container img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .circle-arc {
            position: absolute;
            top: -15px;
            left: -15px;
            right: 15%;
            bottom: 15%;
            border-radius: 20px;
            border: 12px solid #16a34a;
            border-bottom-color: transparent;
            border-right-color: transparent;
            z-index: 0;
        }

        .circle-arc-reverse {
            position: absolute;
            top: 15%;
            left: 15%;
            right: -15px;
            bottom: -15px;
            border-radius: 20px;
            border: 12px solid #16a34a;
            border-top-color: transparent;
            border-left-color: transparent;
            z-index: 0;
        }
    </style>

    <script>
        if (
            localStorage.theme === 'dark' ||
            (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)
        ) {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
        }
    </script>
</head>

<body class="font-sans antialiased text-gray-800 bg-white dark:bg-[#080808] dark:text-gray-300">

    @include('partials.navbar')

    <main>
        @yield('content')
    </main>

    @include('partials.footer')

    @include('partials.modal-orcamento')



    <script>
        function setTheme(mode) {
            if (mode === 'dark') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }

            ajustarNavbarNoScroll();
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('hamburger-icon');

            if (!menu || !icon) return;

            menu.classList.toggle('hidden');

            if (menu.classList.contains('hidden')) {
                icon.classList.remove('fa-times', 'text-red-500');
                icon.classList.add('fa-bars', 'text-white');
            } else {
                icon.classList.remove('fa-bars', 'text-white');
                icon.classList.add('fa-times', 'text-red-500');
            }
        }

        function abrirModal(e) {

            if (e) e.preventDefault();

            const modal = document.getElementById('modal-orcamento');

            if (!modal) {
                console.error('Modal #modal-orcamento não encontrado.');
                return;
            }

            modal.classList.remove('hidden');
            modal.classList.add('flex', 'items-center', 'justify-center');

            document.body.style.overflow = 'hidden';
        }

        function fecharModal() {
            const modal = document.getElementById('modal-orcamento');

            if (!modal) return;

            modal.classList.add('hidden');
            modal.classList.remove('flex', 'items-center', 'justify-center');

            document.body.style.overflow = 'auto';
        }

        function aceitarCookies() {
            localStorage.setItem('cookies_aceitos', 'true');

            const cookieBanner = document.getElementById('cookie-banner');

            if (cookieBanner) {
                cookieBanner.classList.add('translate-y-full');
            }
        }

        function ajustarNavbarNoScroll() {
            const navbar = document.getElementById('main-navbar');
            const links = document.querySelectorAll('.nav-link');
            const themeButtons = document.querySelectorAll('.theme-button');

            if (!navbar) return;

            if (window.scrollY > 80) {
                navbar.classList.remove('bg-transparent');
                navbar.classList.add(
                    'bg-white/95',
                    'dark:bg-black/95',
                    'backdrop-blur-md',
                    'shadow-sm'
                );

                links.forEach(link => {
                    if (!link.classList.contains('text-brand') && !link.classList.contains('dark:text-brand-light')) {
                        link.classList.remove('text-white');
                        link.classList.add('text-gray-900', 'dark:text-white');
                    }
                });

                themeButtons.forEach(button => {
                    button.classList.remove('text-white/70');
                    button.classList.add('text-gray-600', 'dark:text-white/70');
                });
            } else {
                navbar.classList.add('bg-transparent');
                navbar.classList.remove(
                    'bg-white/95',
                    'dark:bg-black/95',
                    'backdrop-blur-md',
                    'shadow-sm'
                );

                links.forEach(link => {
                    if (!link.classList.contains('text-brand') && !link.classList.contains('dark:text-brand-light')) {
                        link.classList.remove('text-gray-900', 'dark:text-white');
                        link.classList.add('text-white');
                    }
                });

                themeButtons.forEach(button => {
                    button.classList.add('text-white/70');
                    button.classList.remove('text-gray-600', 'dark:text-white/70');
                });
            }
        }

        function enviarParaWhatsApp(e) {
            e.preventDefault();

            const aceite = document.getElementById('lgpd_aceite');

            if (aceite && !aceite.checked) return;

            const empresa = document.getElementById('empresa')?.value || '';
            const cnpj = document.getElementById('cnpj')?.value || '';
            const responsavel = document.getElementById('responsavel')?.value || '';
            const telefone = document.getElementById('telefone')?.value || '';
            const servico = document.getElementById('servico')?.value || '';

            let msg = `*NOVA SOLICITAÇÃO (Site)*\n\n*Empresa:* ${empresa}\n*CNPJ:* ${cnpj}\n*Responsável:* ${responsavel}\n*Contato:* ${telefone}\n*Serviço:* ${servico}\n\n_✓ Aceite LGPD registrado._`;

            window.open(`https://wa.me/5571999886554?text=${encodeURIComponent(msg)}`, '_blank');

            fecharModal();

            const form = document.getElementById('form-whatsapp');

            if (form) {
                form.reset();
            }
        }

        window.addEventListener('scroll', ajustarNavbarNoScroll);

        document.addEventListener('DOMContentLoaded', () => {
            ajustarNavbarNoScroll();

            const cookieBanner = document.getElementById('cookie-banner');

            if (cookieBanner && localStorage.getItem('cookies_aceitos') !== 'true') {
                setTimeout(() => {
                    cookieBanner.classList.remove('translate-y-full');
                }, 1500);
            }

            const reveals = document.querySelectorAll('.reveal, .reveal-zoom, .reveal-left, .reveal-right');

            const revealOnScroll = new IntersectionObserver(function (entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, {
                threshold: 0.15,
                rootMargin: "0px 0px -50px 0px"
            });

            reveals.forEach(reveal => revealOnScroll.observe(reveal));
        });
    </script>

</body>

</html>