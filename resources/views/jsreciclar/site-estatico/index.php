<?php
$page = 'home';
?>

<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Início | JS Reciclagem LTDA</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link rel="icon" type="image/png" href="img/logo.png">

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

    <?php include __DIR__ . '/partials/navbar.php'; ?>

    <main>
<header class="relative pt-32 pb-32 md:pt-40 md:pb-48 bg-gray-900 overflow-hidden flex items-center min-h-[75vh]">
        <div class="absolute inset-0 z-0">
            <img src="img/banner.jpeg" alt="Banner JS Reciclagem"
                class="w-full h-full object-cover object-center">
            <div class="absolute inset-0 bg-black/60 dark:bg-black/70"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10 flex flex-col items-start reveal">
            <h1
                class="font-heading text-5xl md:text-7xl font-extrabold text-white leading-tight mb-4 tracking-tight drop-shadow-lg">
                Reciclando para um Mundo <br><span class="text-brand-light">Melhor</span>
            </h1>

            <p class="text-xl md:text-2xl text-gray-200 mb-8 font-medium leading-relaxed max-w-lg drop-shadow-md">
                Conheça nossos Serviços e entre em contato com a gente! Teremos o maior prazer em lhe atender.
            </p>

            <button onclick="abrirModal(event)"
                class="bg-brand hover:bg-green-600 text-white font-bold py-4 px-10 rounded-full transition duration-300 shadow-lg text-lg transform hover:-translate-y-1 border border-transparent hover:border-white/20">
                Falar com Consultor
            </button>
        </div>
    </header>

    <section class="py-24 bg-white dark:bg-black overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">
                <div class="reveal">
                    <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                        Quem somos nós?
                    </span>

                    <h2
                        class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-8">
                        Reciclando para um
                        <span class="text-brand">mundo melhor</span>
                    </h2>

                    <div class="space-y-5 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                        <p>
                            Fundada em <strong class="text-brand">2017</strong>, a JS Reciclagem nasceu com o objetivo
                            de atender às necessidades das grandes indústrias da região de Camaçari, atuando nos serviços
                            de coleta, transporte e destinação de resíduos recicláveis.
                        </p>

                        <p>
                            Desde então, atendemos nossos clientes com qualidade, respeito às normas ambientais,
                            responsabilidade socioambiental, ética e pronto atendimento às demandas operacionais.
                        </p>

                        <p>
                            Com infraestrutura de qualidade e corpo técnico qualificado, oferecemos soluções eficientes
                            para transformar resíduos em oportunidades.
                        </p>
                    </div>

                    <div class="mt-8">
                        <button onclick="abrirModal(event)"
                            class="bg-brand hover:bg-green-600 text-white font-bold py-4 px-10 rounded-full transition duration-300 shadow-lg transform hover:-translate-y-1">
                            Solicitar Atendimento
                        </button>
                    </div>
                </div>

                <div class="reveal-zoom">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-800">
                        <img src="img/06.png" alt="Quem somos nós - JS Reciclagem"
                            class="w-full h-full object-cover">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-100 dark:bg-[#080808] overflow-hidden border-y border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto mb-14 reveal">
                <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                    Nossa essência
                </span>

                <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                    Missão, Visão e
                    <span class="text-brand">Valores</span>
                </h2>

                <p class="mt-5 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    Atuamos com responsabilidade, compromisso e transparência para entregar soluções sustentáveis
                    aos nossos clientes.
                </p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mb-14">
                <div
                    class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl reveal-zoom">
                    <div class="w-14 h-14 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-bullseye text-brand text-2xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Missão
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Ser referência no ramo de reciclagem de resíduos com compromisso humanitário,
                        buscando inclusão social através da reciclagem com sustentabilidade para um mundo
                        melhor e mais limpo.
                    </p>
                </div>

                <div
                    class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl reveal-zoom">
                    <div class="w-14 h-14 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-eye text-brand text-2xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Visão
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                        Ser reconhecida como a principal empresa do ramo de reciclagem da região metropolitana,
                        proporcionando o desenvolvimento sustentável dos nossos clientes.
                    </p>
                </div>

                <div
                    class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl reveal-zoom">
                    <div class="w-14 h-14 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-handshake text-brand text-2xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Valores
                    </h3>

                    <ul class="text-gray-600 dark:text-gray-400 leading-relaxed space-y-3">
                        <li><i class="fas fa-check text-brand mr-2"></i> Comprometimento</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Integridade</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Transparência</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Responsabilidade socioambiental</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Profissionalismo</li>
                    </ul>
                </div>
            </div>

            <div class="reveal-zoom">
                <img src="img/07.png" alt="Missão, Visão e Valores - JS Reciclagem"
                    class="w-full rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-800">
            </div>
        </div>
    </section>


    <section class="py-24 bg-white dark:bg-black overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                <div class="reveal">
                    <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                        Solução industrial
                    </span>

                    <h2
                        class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-8">
                        Descomissionamento
                        <span class="text-brand">industrial</span>
                    </h2>

                    <div class="space-y-5 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                        <p>
                            O descomissionamento industrial é o processo de desativação e remoção de equipamentos,
                            instalações ou ativos que atingiram o fim de sua vida útil ou não são mais viáveis
                            economicamente.
                        </p>

                        <p>
                            Esse serviço envolve ações planejadas para mitigar impactos ambientais, recuperar áreas
                            degradadas e permitir a posterior utilização segura e responsável desses espaços pela sociedade.
                        </p>
                    </div>

                    <div class="mt-8">
                        <button onclick="abrirModal(event)"
                            class="bg-brand hover:bg-green-600 text-white font-bold py-4 px-10 rounded-full transition duration-300 shadow-lg transform hover:-translate-y-1">
                            Solicitar Avaliação
                        </button>
                    </div>
                </div>

                <div class="reveal-zoom">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-800 bg-gray-100 dark:bg-gray-900">
                        <img src="img/08.png" alt="Descomissionamento Industrial - JS Reciclagem"
                            class="w-full h-full object-cover">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="nossos-servicos"
        class="py-28 bg-white dark:bg-black overflow-hidden border-b border-gray-100 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto mb-20 reveal">
                <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                    Serviços e produtos
                </span>

                <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                    Soluções completas para
                    <span class="text-brand">gestão de resíduos</span>
                </h2>
            </div>

            <div class="flex flex-col md:flex-row items-center gap-14 md:gap-20">
                <div class="w-full md:w-[55%] reveal-left">
                    <div class="image-wrapper-lg">
                        <div class="circle-arc"></div>

                        <div
                            class="image-container aspect-[16/11] md:aspect-[5/4] rounded-3xl shadow-2xl overflow-hidden group">
                            <img src="img/01.jpg" alt="Gestão de Resíduos"
                                class="transition-transform duration-700 group-hover:scale-105 w-full h-full object-cover">

                            <div
                                class="absolute inset-0 bg-brand/10 group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[45%] reveal-right">
                    <h2
                        class="font-heading text-3xl md:text-5xl font-extrabold text-gray-900 dark:text-white uppercase mb-8 tracking-wide border-l-4 border-brand pl-4">
                        Gestão e Valorização <br>
                        <span class="text-brand">de Resíduos</span>
                    </h2>

                    <ul class="text-gray-700 dark:text-gray-300 text-lg space-y-4 font-medium list-none">
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Revitalização de
                            resíduos</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Cooprocessamento
                        </li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Descaracterização
                            de produtos</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Coleta e
                            transporte de resíduo classe 1 (perigoso)</li>
                        <li class="flex items-center"><i class="fas fa-check-circle text-brand mr-3"></i> Coleta e
                            transporte de resíduo classe 2 (não perigoso)</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-28 bg-gray-100 dark:bg-[#0f3c20] overflow-hidden border-b border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-14 md:gap-20">
                <div class="w-full md:w-[55%] reveal-right">
                    <div class="image-wrapper-lg">
                        <div class="circle-arc-reverse"></div>

                        <div
                            class="image-container aspect-[16/11] md:aspect-[5/4] rounded-3xl shadow-2xl overflow-hidden group">
                            <img src="img/Acondicionamento de resíduos e destinação correta/09.jpeg"
                                alt="Armazenagem e Distribuição"
                                class="transition-transform duration-700 group-hover:scale-105 w-full h-full object-cover">

                            <div
                                class="absolute inset-0 bg-brand/10 group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[45%] reveal-left">
                    <h2
                        class="font-heading text-3xl md:text-5xl font-extrabold text-gray-900 dark:text-white uppercase mb-8 tracking-wide border-l-4 border-brand pl-4">
                        Armazenagem e <br>
                        <span class="text-brand">Logística</span>
                    </h2>

                    <ul class="text-gray-700 dark:text-gray-300 text-lg space-y-4 font-medium list-none">
                        <li class="flex items-center"><i class="fas fa-truck-loading text-brand mr-3"></i> Sistema de
                            controle de fardos e materiais</li>
                        <li class="flex items-center"><i class="fas fa-map-marked-alt text-brand mr-3"></i> Monitoramento
                            rigoroso da cadeia de transporte</li>
                        <li class="flex items-center"><i class="fas fa-truck text-brand mr-3"></i> Transporte em frota
                            própria equipada</li>
                        <li class="flex items-center"><i class="fas fa-route text-brand mr-3"></i> Roteirização inteligente
                            no Polo Industrial</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="py-28 bg-white dark:bg-black overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-14 md:gap-20">
                <div class="w-full md:w-[55%] reveal-left">
                    <div class="image-wrapper-lg">
                        <div class="circle-arc"></div>

                        <div
                            class="image-container aspect-[16/11] md:aspect-[5/4] rounded-3xl shadow-2xl overflow-hidden group">
                            <img src="img/02.jpg" alt="Comercialização Técnica"
                                class="transition-transform duration-700 group-hover:scale-105 w-full h-full object-cover">

                            <div
                                class="absolute inset-0 bg-brand/10 group-hover:bg-transparent transition-colors duration-500">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w-full md:w-[45%] reveal-right">
                    <h2
                        class="font-heading text-3xl md:text-5xl font-extrabold text-gray-900 dark:text-white uppercase mb-8 tracking-wide border-l-4 border-brand pl-4">
                        Comercialização <br>
                        <span class="text-brand">Técnica</span>
                    </h2>

                    <ul class="text-gray-700 dark:text-gray-300 text-lg space-y-4 font-medium list-none">
                        <li class="flex items-center"><i class="fas fa-recycle text-brand mr-3"></i> Foco em Polímeros e
                            Plásticos industriais</li>
                        <li class="flex items-center"><i class="fas fa-magnet text-brand mr-3"></i> Gestão técnica de
                            sucatas ferrosas e não ferrosas</li>
                        <li class="flex items-center"><i class="fas fa-box-open text-brand mr-3"></i> Tratamento de Papelão
                            e Papel Kraft</li>
                        <li class="flex items-center"><i class="fas fa-leaf text-brand mr-3"></i> Destinação correta e
                            rentabilidade de passivos</li>
                        <li class="flex items-center"><i class="fas fa-hand-sparkles text-brand mr-3"></i> Garantia de
                            pureza extrema de fardos</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

        
    <section class="py-24 bg-gray-100 dark:bg-[#080808] overflow-hidden border-y border-gray-200 dark:border-gray-800">
        <div class="container mx-auto px-6">
            <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                    Estrutura operacional
                </span>

                <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                    Conheça parte da nossa
                    <span class="text-brand">estrutura</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="group relative overflow-hidden rounded-3xl shadow-2xl reveal-zoom">
                    <img src="img/04.png" alt="Estrutura JS Reciclagem"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/10 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-heading text-3xl font-extrabold text-white mb-2">
                            Operação estruturada
                        </h3>
                        <p class="text-white/80">
                            Frota, equipamentos e equipe preparados para atender operações industriais.
                        </p>
                    </div>
                </div>

                <div class="group relative overflow-hidden rounded-3xl shadow-2xl reveal-zoom">
                    <img src="img/05.png" alt="Operação logística JS Reciclagem"
                        class="w-full h-full object-cover transition duration-700 group-hover:scale-105">
                    <div class="absolute inset-0 bg-gradient-to-t from-black/75 via-black/10 to-transparent"></div>
                    <div class="absolute bottom-0 left-0 p-8">
                        <h3 class="font-heading text-3xl font-extrabold text-white mb-2">
                            Logística inteligente
                        </h3>
                        <p class="text-white/80">
                            Soluções planejadas para coleta, transporte, armazenamento e destinação correta.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-gray-100 dark:bg-[#080808] border-t-4 border-brand relative overflow-hidden">
        <div class="absolute inset-0 bg-brand/5"></div>

        <div class="container mx-auto px-6 text-center relative z-10 reveal">
            <h2 class="font-heading text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                Pronto para transformar seus resíduos?
            </h2>

            <p class="text-lg text-gray-700 dark:text-gray-300 mb-10 max-w-2xl mx-auto">
                Nossos analistas comerciais estão prontos para ajudar sua indústria com soluções eficientes,
                adequação legal e rentabilidade sustentável.
            </p>

            <button onclick="abrirModal(event)"
                class="bg-brand hover:bg-green-500 text-white font-bold py-4 px-12 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.4)] transition-all duration-300 text-xl transform hover:-translate-y-1">
                Solicitar Avaliação
            </button>
        </div>
    </section>


    <section id="localizacao" class="py-20 bg-gray-100 dark:bg-black">
        <div class="container mx-auto px-6">

            <div class="text-center max-w-3xl mx-auto mb-10 reveal">
                <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                    Onde estamos
                </span>

                <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                    Nossa
                    <span class="text-brand">localização</span>
                </h2>
            </div>

            <div class="relative w-full max-w-6xl mx-auto reveal">
                <div
                    class="w-full h-[320px] md:h-[450px] overflow-hidden rounded-3xl shadow-2xl border border-gray-200 dark:border-gray-800 bg-gray-200 dark:bg-gray-900">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3892.6422726722303!2d-38.3752298249286!3d-12.671444387617035!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x71669d33f8b5025%3A0x152f77b09488edfb!2sJs%20reciclagem!5e0!3m2!1spt-BR!2sbr!4v1779735673925!5m2!1spt-BR!2sbr"
                        width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                </div>

                <div class="max-w-2xl mx-auto mt-8 relative z-10">
                    <div class="bg-black p-6 rounded-2xl shadow-xl border border-gray-800 text-center">
                        <i class="fas fa-map-marker-alt text-3xl text-brand mb-3"></i>

                        <h3 class="font-heading text-xl font-bold text-white mb-2">
                            Nossa Matriz Estratégica
                        </h3>

                        <p class="text-base font-medium text-gray-300">
                            BA 093, KM 14 — Bairro Jardim Futurama<br>
                            Dias D'Ávila - BA. CEP: 42850-000
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section>
    </main>

    <?php include __DIR__ . '/partials/footer.php'; ?>

    <?php include __DIR__ . '/partials/modal-orcamento.php'; ?>

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
