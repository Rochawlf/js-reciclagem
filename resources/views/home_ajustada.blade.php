<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Reciclagem LTDA | Gerenciamento de Resíduos</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="{{ asset('img/logo.png') }}">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            light: '#4ade80',
                            DEFAULT: '#16a34a',
                            dark: '#000000', // Preto Puro para o tema escuro
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

        /* Efeitos de revelar no scroll */
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

        .delay-100 {
            transition-delay: 100ms;
        }

        .delay-200 {
            transition-delay: 200ms;
        }

        /* Estilos para a Moldura de Arco ao redor da imagem quadrada */
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

        /* O arco na Esquerda Superior e Direita Inferior */
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

        /* O arco na Direita Inferior e Esquerda Superior */
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
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>

<body class="font-sans antialiased text-gray-800 bg-white dark:bg-[#080808] dark:text-gray-300">

    <nav
        class="fixed w-full z-50 top-0 transition-all duration-300 bg-white/95 dark:bg-black/95 backdrop-blur-md shadow-sm border-b border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-6 py-3 flex justify-between items-center relative">
            <a href="#" class="flex items-center z-50">
                <img src="{{ asset('img/logo.png') }}" alt="JS Reciclagem"
                    class="h-14 w-auto object-contain transition-transform hover:scale-105 brightness-0 invert dark:brightness-100 dark:invert-0">
            </a>

            <div class="hidden md:flex space-x-6 items-center">
                <a href="{{ url('/') }}"
                    class="inline-block text-gray-800 dark:text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                    Início
                </a>

                <a href="#nossos-servicos"
                    class="inline-block text-gray-800 dark:text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                    Serviços e Produtos
                </a>

                <a href="{{ url('/acondicionamento') }}"
                    class="inline-block text-gray-800 dark:text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                    Acondicionamento
                </a>

                <a href="#localizacao"
                    class="inline-block text-gray-800 dark:text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                    Contato / Localização
                </a>

                <a href="#" onclick="abrirModal(event)"
                    class="inline-block text-gray-800 dark:text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                    Orçamento
                </a>

                <div class="flex items-center border-l border-gray-300 dark:border-gray-700 pl-6 ml-2 gap-3">
                    <button onclick="setTheme('light')" class="text-gray-500 hover:text-yellow-500 transition"
                        title="Modo Claro"><i class="fas fa-sun text-xl"></i></button>
                    <button onclick="setTheme('dark')" class="text-gray-400 hover:text-brand-light transition"
                        title="Modo Escuro"><i class="fas fa-moon text-xl"></i></button>
                </div>
            </div>

            <div class="md:hidden flex items-center z-50">
                <button onclick="toggleMobileMenu()" class="text-gray-800 dark:text-white focus:outline-none p-2">
                    <i id="hamburger-icon" class="fas fa-bars text-3xl transition-transform duration-300"></i>
                </button>
            </div>
        </div>

        <div id="mobile-menu"
            class="hidden md:hidden absolute top-full left-0 w-full bg-white dark:bg-black border-b border-gray-200 dark:border-gray-800 shadow-xl transition-all duration-300 origin-top">
            <div class="flex flex-col px-6 py-6 space-y-5 text-center">
                <a href="{{ url('/') }}" onclick="toggleMobileMenu()"
                    class="text-gray-800 dark:text-white font-bold text-lg hover:text-brand transition">
                    Início
                </a>

                <a href="#nossos-servicos" onclick="toggleMobileMenu()"
                    class="text-gray-800 dark:text-white font-bold text-lg hover:text-brand transition">
                    Serviços e Produtos
                </a>

                <a href="{{ url('/acondicionamento') }}" onclick="toggleMobileMenu()"
                    class="text-gray-800 dark:text-white font-bold text-lg hover:text-brand transition">
                    Acondicionamento
                </a>

                <a href="#localizacao" onclick="toggleMobileMenu()"
                    class="text-gray-800 dark:text-white font-bold text-lg hover:text-brand transition">
                    Contato / Localização
                </a>

                <a href="#" onclick="abrirModal(event); toggleMobileMenu()"
                    class="text-gray-800 dark:text-white font-bold text-lg hover:text-brand transition">
                    Orçamento
                </a>

                <div class="pt-4 border-t border-gray-200 dark:border-gray-700">
                    <p class="text-xs text-gray-500 dark:text-gray-400 mb-3 font-bold uppercase tracking-widest">Tema
                    </p>
                    <div class="flex justify-center gap-4">
                        <button onclick="setTheme('light')"
                            class="bg-gray-100 dark:bg-gray-800 px-4 py-2 rounded-lg font-bold text-gray-800 dark:text-white"><i
                                class="fas fa-sun mr-2 text-yellow-500"></i>Claro</button>
                        <button onclick="setTheme('dark')"
                            class="bg-gray-200 dark:bg-gray-700 px-4 py-2 rounded-lg font-bold text-gray-800 dark:text-white"><i
                                class="fas fa-moon mr-2 text-brand-light"></i>Escuro</button>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <header class="relative pt-32 pb-32 md:pt-40 md:pb-48 bg-gray-900 overflow-hidden flex items-center min-h-[75vh]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/banner.jpeg') }}" alt="Banner JS Reciclagem"
                class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black/60 dark:bg-black/70"></div>
        </div>
        <div class="container mx-auto px-6 relative z-10 flex flex-col items-start reveal">
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-4 tracking-tight drop-shadow-lg">
                Nossos <br><span class="text-brand-light">Serviços</span>
            </h1>
            <p class="text-xl md:text-2xl text-gray-200 mb-8 font-medium leading-relaxed max-w-lg drop-shadow-md">
                Conheça nossas soluções e entre em contato com a gente! Teremos o maior prazer em lhe atender.
            </p>
            <button onclick="abrirModal(event)"
                class="bg-brand hover:bg-green-600 text-white font-bold py-4 px-10 rounded-full transition duration-300 shadow-lg text-lg transform hover:-translate-y-1 border border-transparent hover:border-white/20">
                Falar com Consultor
            </button>
        </div>
    </header>

    <section id="nossos-servicos"
        class="py-24 bg-white dark:bg-black overflow-hidden border-b border-gray-100 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
                <div class="w-full md:w-1/2 reveal-zoom">
                    <div class="image-wrapper">
                        <div class="circle-arc"></div>
                        <div class="image-container aspect-[4/3] rounded-2xl shadow-2xl overflow-hidden group">
                            <img src="{{ asset('img/01.jpg') }}" alt="Gestão de Resíduos"
                                class="transition-transform duration-700 group-hover:scale-105 h-full object-cover">
                            <div
                                class="absolute inset-0 bg-brand/10 group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 reveal delay-100">
                    <h2
                        class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white uppercase mb-6 tracking-wide border-l-4 border-brand pl-4">
                        Gestão e Valorização <br><span class="text-brand">de Resíduos</span></h2>
                    <ul class="text-gray-700 dark:text-gray-300 text-lg space-y-4 font-medium list-none">
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Revitalização
                            de resíduos</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i>
                            Cooprocessamento</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i>
                            Descaracterização de produtos</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Coleta e
                            transporte de resíduo classe 1 (perigoso)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Coleta e
                            transporte de resíduo classe 2 (não perigoso)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-100 dark:bg-[#0f3c20] overflow-hidden border-b border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12 md:gap-16">
                <div class="w-full md:w-1/2 reveal-zoom">
                    <div class="image-wrapper">
                        <div class="circle-arc-reverse"></div>
                        <div class="image-container aspect-[4/3] rounded-2xl shadow-2xl overflow-hidden group">
                            <img src="{{ asset('img/02.jpg') }}" alt="Armazenagem e Distribuição"
                                class="transition-transform duration-700 group-hover:scale-105 h-full object-cover">
                            <div
                                class="absolute inset-0 bg-brand/10 group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 reveal delay-100">
                    <h2
                        class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white uppercase mb-6 tracking-wide border-l-4 border-brand pl-4">
                        Armazenagem e <br><span class="text-brand">Logística</span></h2>
                    <ul class="text-gray-700 dark:text-gray-300 text-lg space-y-4 font-medium list-none">
                        <li class="flex items-center"><i class="fas fa-truck-loading text-brand mr-3"></i> Sistema de
                            controle de fardos e materiais</li>
                        <li class="flex items-center"><i class="fas fa-map-marked-alt text-brand mr-3"></i>
                            Monitoramento rigoroso da cadeia de transporte</li>
                        <li class="flex items-center"><i class="fas fa-truck text-brand mr-3"></i> Transporte em frota
                            própria equipada</li>
                        <li class="flex items-center"><i class="fas fa-route text-brand mr-3"></i> Roteirização
                            inteligente no Polo Industrial</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-white dark:bg-black overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12 md:gap-16">
                <div class="w-full md:w-1/2 reveal-zoom">
                    <div class="image-wrapper">
                        <div class="circle-arc"></div>
                        <div class="image-container aspect-[4/3] rounded-2xl shadow-2xl overflow-hidden group">
                            <img src="{{ asset('img/03.jpg') }}" alt="Comercialização"
                                class="transition-transform duration-700 group-hover:scale-105 h-full object-cover">
                            <div
                                class="absolute inset-0 bg-brand/10 group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w-full md:w-1/2 reveal delay-100">
                    <h2
                        class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white uppercase mb-6 tracking-wide border-l-4 border-brand pl-4">
                        Comercialização <br><span class="text-brand">Técnica</span></h2>
                    <ul class="text-gray-700 dark:text-gray-300 text-lg space-y-4 font-medium list-none">
                        <li class="flex items-center"><i class="fas fa-recycle text-brand mr-3"></i> Foco em Polímeros e
                            Plásticos industriais</li>
                        <li class="flex items-center"><i class="fas fa-magnet text-brand mr-3"></i> Gestão técnica de
                            sucatas ferrosas e não ferrosas</li>
                        <li class="flex items-center"><i class="fas fa-box-open text-brand mr-3"></i> Tratamento de
                            Papelão e Papel Kraft</li>
                        <li class="flex items-center"><i class="fas fa-leaf text-brand mr-3"></i> Destinação correta e
                            rentabilidade de passivos</li>
                        <li class="flex items-center"><i class="fas fa-hand-sparkles text-brand mr-3"></i> Garantia de
                            pureza extrema de fardos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-100 dark:bg-[#080808] border-t-4 border-brand relative overflow-hidden">
        <div class="absolute inset-0 bg-brand/5"></div>
        <div class="container mx-auto px-6 text-center relative z-10 reveal">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">Pronto para transformar
                seus resíduos?</h2>
            <p class="text-lg text-gray-700 dark:text-gray-300 mb-10 max-w-2xl mx-auto">Nossos analistas comerciais
                estão prontos para ajudar sua indústria com soluções eficientes, adequação legal e rentabilidade
                sustentável.</p>
            <button onclick="abrirModal(event)"
                class="bg-brand hover:bg-green-500 text-white font-bold py-4 px-12 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.4)] transition-all duration-300 text-xl transform hover:-translate-y-1">
                Solicitar Avaliação
            </button>
        </div>
    </section>

    <section id="localizacao" class="bg-gray-100 dark:bg-black pb-16">
        <div class="w-full h-[450px] shadow-inner">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.6422726722303!2d-38.3752298249286!3d-12.671444387617035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71669d33f8b5025%3A0x152f77b09488edfb!2sJs%20reciclagem!5e0!3m2!1spt-BR!2sbr!4v1779735673925!5m2!1spt-BR!2sbr" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
        <div class="container mx-auto px-6 mt-6 text-center flex flex-col items-center reveal">
            <div
                class="bg-white dark:bg-gray-900 p-6 rounded-2xl shadow-lg -mt-16 relative z-10 border border-gray-200 dark:border-gray-700 max-w-2xl">
                <i class="fas fa-map-marker-alt text-3xl text-brand mb-3"></i>
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">Nossa Matriz Estratégica</h3>
                <p class="text-base font-medium text-gray-600 dark:text-gray-400">BA 093, KM 14 — Bairro Jardim
                    Futurama<br>Dias D'Ávila - BA. CEP: 42850-000</p>
            </div>
        </div>
    </section>

    <div id="modal-orcamento" class="fixed inset-0 z-[100] hidden bg-black/75 backdrop-blur-sm transition-opacity px-4">
        <div class="relative w-full max-w-2xl bg-white dark:bg-[#101010] rounded-3xl shadow-[0_25px_80px_rgba(0,0,0,0.45)] p-6 md:p-8 max-h-[90vh] overflow-y-auto border border-gray-200 dark:border-gray-800">
            <button onclick="fecharModal()"
                class="absolute top-5 right-5 w-10 h-10 rounded-full bg-gray-100 dark:bg-[#1a1a1a] text-gray-500 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-950/30 transition flex items-center justify-center">
                <i class="fas fa-times text-xl"></i>
            </button>

            <div class="text-center mb-8 pt-4">
                <span class="inline-block mb-3 text-brand font-extrabold uppercase tracking-[0.25em] text-xs">
                    Atendimento comercial
                </span>

                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-3">
                    Solicite um Orçamento
                </h2>

                <p class="text-gray-600 dark:text-gray-400 font-medium max-w-md mx-auto">
                    Preencha os dados abaixo para nossa equipe comercial lhe atender.
                </p>
            </div>

            <form id="form-whatsapp" onsubmit="enviarParaWhatsApp(event)" class="space-y-5">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Empresa *</label>
                        <input type="text" id="empresa" required
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">CNPJ *</label>
                        <input type="text" id="cnpj" required
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Responsável *</label>
                        <input type="text" id="responsavel" required
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                    </div>

                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Telefone *</label>
                        <input type="tel" id="telefone" required
                            class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">
                        Serviço de Interesse *
                    </label>

                    <select id="servico" required
                        class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                        <option value="" disabled selected>Selecione uma opção...</option>
                        <option value="Gestão de Resíduos">Gestão de Resíduos</option>
                        <option value="Logística e Transporte">Logística e Transporte</option>
                        <option value="Comercialização">Comercialização</option>
                        <option value="Acondicionamento de Resíduos">Acondicionamento de Resíduos</option>
                        <option value="Destinação Correta">Destinação Correta</option>
                    </select>
                </div>

                <div class="flex items-start mt-4 bg-gray-50 dark:bg-[#171717] p-4 rounded-xl border border-gray-200 dark:border-gray-800">
                    <input type="checkbox" id="lgpd_aceite" required
                        class="mt-1 w-5 h-5 text-brand bg-white dark:bg-[#101010] border-gray-300 dark:border-gray-600 rounded focus:ring-brand">

                    <label for="lgpd_aceite" class="ml-3 text-sm font-medium text-gray-600 dark:text-gray-400 leading-relaxed">
                        Concordo com a Política de Privacidade e consinto com a coleta dos meus dados para fins exclusivos de contato comercial e elaboração de orçamento.
                    </label>
                </div>

                <div class="pt-4 text-center">
                    <button type="submit"
                        class="w-full bg-brand hover:bg-green-600 text-white font-bold py-4 px-10 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.35)] transition duration-300 text-lg uppercase tracking-wide transform hover:-translate-y-1">
                        Enviar Solicitação
                    </button>
                </div>
            </form>
        </div>
    </div>

    <footer class="bg-black text-white py-12">
        <div class="container mx-auto px-6 text-center md:text-left grid grid-cols-1 md:grid-cols-3 gap-8 items-center">
            <div>
                <img src="{{ asset('img/logo.png') }}" alt="JS Reciclagem"
                    class="h-16 w-auto mx-auto md:mx-0 mb-4 brightness-0 invert opacity-80 dark:brightness-100 dark:invert-0 dark:opacity-100">
                <p class="text-sm text-gray-400 font-medium">Sustentabilidade e conformidade legal para o Polo
                    Industrial de Camaçari.</p>
            </div>
            <div class="text-gray-400 text-sm font-medium">
                <p class="mb-3 hover:text-white transition"><i class="fab fa-whatsapp text-brand mr-2 text-lg"></i> (71)
                    99988-6554</p>
                <p class="hover:text-white transition"><i class="fas fa-envelope text-brand mr-2 text-lg"></i>
                    comercial@jsreciclagem.com.br</p>
            </div>
            <div class="text-sm text-gray-500 md:text-right font-medium">
                <p class="mb-1">© {{ date('Y') }} JS Reciclagem LTDA.</p>
                <p>Desenvolvido por <a href="https://rocha-portifolio.vercel.app/" target="_blank"
                        class="text-brand font-bold hover:text-brand-light transition">RochaWLF</a>.</p>
            </div>
        </div>
    </footer>

    <div id="cookie-banner"
        class="fixed bottom-0 left-0 w-full bg-gray-900 border-t border-gray-700 p-4 z-50 transform transition-transform duration-500 translate-y-full shadow-[0_-10px_30px_rgba(0,0,0,0.5)]">
        <div class="container mx-auto px-6 flex flex-col md:flex-row items-center justify-between gap-6">
            <p class="text-sm text-gray-300 text-center md:text-left font-medium">
                Utilizamos cookies e tecnologias semelhantes para melhorar sua experiência em nosso site e personalizar
                conteúdo. Ao continuar navegando, você concorda com nossa Política de Privacidade.
            </p>
            <div class="flex gap-4 shrink-0">
                <button onclick="aceitarCookies()"
                    class="bg-brand hover:bg-green-600 text-white font-bold py-3 px-8 rounded-full text-sm transition shadow-lg">Entendi
                    e Aceito</button>
            </div>
        </div>
    </div>


    <script>
        function setTheme(mode) {
            if (mode === 'dark') { document.documentElement.classList.add('dark'); localStorage.setItem('theme', 'dark'); }
            else { document.documentElement.classList.remove('dark'); localStorage.setItem('theme', 'light'); }
        }

        function toggleMobileMenu() {
            const menu = document.getElementById('mobile-menu');
            const icon = document.getElementById('hamburger-icon');
            menu.classList.toggle('hidden');
            if (menu.classList.contains('hidden')) { icon.classList.remove('fa-times'); icon.classList.add('fa-bars'); }
            else { icon.classList.remove('fa-bars'); icon.classList.add('fa-times'); }
        }

        function abrirModal(e) {
            e.preventDefault();

            const modal = document.getElementById('modal-orcamento');
            modal.classList.remove('hidden');
            modal.classList.add('flex', 'items-center', 'justify-center');

            document.body.style.overflow = 'hidden';
        }

        function fecharModal() {
            const modal = document.getElementById('modal-orcamento');
            modal.classList.add('hidden');
            modal.classList.remove('flex', 'items-center', 'justify-center');

            document.body.style.overflow = 'auto';
        }

        function enviarParaWhatsApp(e) {
            e.preventDefault();
            if (!document.getElementById('lgpd_aceite').checked) return;
            const empresa = document.getElementById('empresa').value;
            const cnpj = document.getElementById('cnpj').value;
            const responsavel = document.getElementById('responsavel').value;
            const telefone = document.getElementById('telefone').value;
            const servico = document.getElementById('servico').value;
            let msg = `*NOVA SOLICITAÇÃO (Site)*\n\n*Empresa:* ${empresa}\n*CNPJ:* ${cnpj}\n*Responsável:* ${responsavel}\n*Contato:* ${telefone}\n*Serviço:* ${servico}\n\n_✓ Aceite LGPD registrado._`;
            window.open(`https://wa.me/5571999886554?text=${encodeURIComponent(msg)}`, '_blank');
            fecharModal();
            document.getElementById('form-whatsapp').reset();
        }

        function aceitarCookies() {
            localStorage.setItem('cookies_aceitos', 'true');
            document.getElementById('cookie-banner').classList.add('translate-y-full');
        }

        document.addEventListener('DOMContentLoaded', () => {
            if (localStorage.getItem('cookies_aceitos') !== 'true') {
                setTimeout(() => { document.getElementById('cookie-banner').classList.remove('translate-y-full'); }, 1500);
            }

            const reveals = document.querySelectorAll('.reveal, .reveal-zoom');
            const revealOnScroll = new IntersectionObserver(function (entries, observer) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.classList.add('active');
                        observer.unobserve(entry.target);
                    }
                });
            }, { threshold: 0.15, rootMargin: "0px 0px -50px 0px" });

            reveals.forEach(reveal => revealOnScroll.observe(reveal));
        });
    </script>
</body>

</html>