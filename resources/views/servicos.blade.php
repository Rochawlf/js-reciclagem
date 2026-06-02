@extends('layouts.app')

@section('title', 'Serviços e Produtos | JS Reciclagem LTDA')

@section('content')

    <header class="relative pt-36 pb-28 md:pt-44 md:pb-40 bg-gray-950 overflow-hidden flex items-center min-h-[78vh]">
        <div class="absolute inset-0 z-0">
            <img src="{{ asset('img/banner.jpeg') }}" alt="Serviços e Produtos JS Reciclagem"
                class="w-full h-full object-cover object-center">

            <div class="absolute inset-0 bg-black/75"></div>
            <div class="absolute inset-0 bg-gradient-to-r from-black via-black/85 to-black/25"></div>
        </div>

        <div class="container mx-auto px-6 relative z-10">
            <div class="max-w-3xl reveal">
                <span
                    class="inline-flex items-center gap-3 mb-6 text-brand font-extrabold uppercase tracking-[0.35em] text-xs md:text-sm">
                    <span class="w-10 h-[2px] bg-brand"></span>
                    Serviços e Produtos
                </span>

                <h1 class="font-heading text-4xl md:text-6xl font-extrabold text-white leading-tight mb-6">
                    Soluções completas
                    <br>
                    em
                    <span class="text-brand">gestão de resíduos</span>
                </h1>

                <p class="text-lg md:text-xl text-gray-200 leading-relaxed max-w-xl mb-8">
                    Atendemos empresas e indústrias com soluções integradas para coleta, transporte,
                    armazenamento, valorização, comercialização e destinação ambientalmente correta de resíduos.
                </p>

                <button onclick="abrirModal(event)"
                    class="bg-brand hover:bg-brand-dark text-white font-bold py-4 px-10 rounded-full transition duration-300 shadow-lg text-lg transform hover:-translate-y-1">
                    Solicitar Orçamento
                </button>
            </div>
        </div>
    </header>

    <section class="py-24 bg-white overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                <div class="reveal">
                    <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                        Atendimento industrial
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-950 leading-tight mb-6">
                        Serviços especializados para o
                        <span class="text-brand">setor industrial</span>
                    </h2>

                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed mb-8">
                        Unimos experiência operacional, responsabilidade ambiental e estrutura logística para entregar
                        soluções eficientes, seguras e alinhadas às necessidades de cada cliente.
                    </p>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 shadow-lg">
                            <i class="fas fa-shield-alt text-brand text-3xl mb-4"></i>

                            <h3 class="font-heading text-xl font-bold text-gray-950 mb-2">
                                Segurança
                            </h3>

                            <p class="text-gray-600 text-sm leading-relaxed">
                                Processos planejados para reduzir riscos e garantir conformidade ambiental.
                            </p>
                        </div>

                        <div class="bg-gray-50 border border-gray-200 rounded-2xl p-6 shadow-lg">
                            <i class="fas fa-truck-moving text-brand text-3xl mb-4"></i>

                            <h3 class="font-heading text-xl font-bold text-gray-950 mb-2">
                                Logística
                            </h3>

                            <p class="text-gray-600 text-sm leading-relaxed">
                                Estrutura preparada para coleta, transporte e atendimento operacional.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="reveal-zoom">
                    <div class="relative min-h-[420px] md:min-h-[520px] flex items-center justify-center">
                        <div class="absolute top-0 right-0 w-[420px] h-[420px] bg-brand/10 rounded-full blur-3xl"></div>
                        <div class="absolute bottom-0 left-0 w-[360px] h-[360px] bg-brand/10 rounded-full blur-3xl"></div>

                        <img src="{{ asset('img/servicos/01.png') }}" alt="Serviços especializados JS Reciclagem"
                            class="relative z-10 w-full max-w-xl mx-auto object-contain">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-white dark:bg-black overflow-hidden">
        <div class="container mx-auto px-6">

            <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                    O que fazemos
                </span>

                <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                    Nossas principais
                    <span class="text-brand">soluções</span>
                </h2>

                <p class="mt-5 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                    Conheça os serviços prestados pela JS Reciclagem para empresas que buscam eficiência,
                    conformidade ambiental e melhor aproveitamento dos resíduos.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-3 gap-7">

                <div
                    class="group bg-gray-50 dark:bg-[#101010] border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300 reveal-zoom">
                    <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-recycle text-brand text-3xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Gestão e valorização de resíduos
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-5">
                        Soluções para reaproveitamento, organização, separação e valorização dos resíduos gerados pela
                        operação.
                    </p>

                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                        <li><i class="fas fa-check text-brand mr-2"></i> Revitalização de resíduos</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Cooprocessamento</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Descaracterização de produtos</li>
                    </ul>
                </div>

                <div
                    class="group bg-gray-50 dark:bg-[#101010] border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300 reveal-zoom">
                    <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-truck-moving text-brand text-3xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Coleta e transporte de resíduos
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-5">
                        Transporte planejado para resíduos classe I e classe II, com segurança, rastreabilidade e
                        eficiência.
                    </p>

                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                        <li><i class="fas fa-check text-brand mr-2"></i> Resíduos perigosos</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Resíduos não perigosos</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Frota própria equipada</li>
                    </ul>
                </div>

                <div
                    class="group bg-gray-50 dark:bg-[#101010] border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300 reveal-zoom">
                    <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-warehouse text-brand text-3xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Armazenagem e logística
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-5">
                        Organização operacional para controle de materiais, fardos, áreas de armazenamento e movimentação
                        interna.
                    </p>

                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                        <li><i class="fas fa-check text-brand mr-2"></i> Controle de fardos e materiais</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Monitoramento da cadeia logística</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Roteirização inteligente</li>
                    </ul>
                </div>

                <div
                    class="group bg-gray-50 dark:bg-[#101010] border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300 reveal-zoom">
                    <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-boxes-stacked text-brand text-3xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Acondicionamento de resíduos
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-5">
                        Equipamentos e processos adequados para armazenamento seguro dos resíduos antes da coleta e
                        destinação.
                    </p>

                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                        <li><i class="fas fa-check text-brand mr-2"></i> Caçambas e contentores</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Bombonas e IBCs</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Prensas e estruturas estacionárias</li>
                    </ul>
                </div>

                <div
                    class="group bg-gray-50 dark:bg-[#101010] border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300 reveal-zoom">
                    <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-handshake-angle text-brand text-3xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Comercialização técnica
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-5">
                        Compra, venda e direcionamento de materiais recicláveis com foco em rentabilidade e destinação
                        correta.
                    </p>

                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                        <li><i class="fas fa-check text-brand mr-2"></i> Polímeros e plásticos industriais</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Papelão e papel kraft</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Sucatas ferrosas e não ferrosas</li>
                    </ul>
                </div>

                <div
                    class="group bg-gray-50 dark:bg-[#101010] border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl hover:-translate-y-2 transition-all duration-300 reveal-zoom">
                    <div class="w-16 h-16 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                        <i class="fas fa-industry text-brand text-3xl"></i>
                    </div>

                    <h3 class="font-heading text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                        Descomissionamento industrial
                    </h3>

                    <p class="text-gray-600 dark:text-gray-400 leading-relaxed mb-5">
                        Desativação e remoção de estruturas, equipamentos e ativos industriais, com foco em segurança e
                        recuperação ambiental.
                    </p>

                    <ul class="space-y-3 text-gray-700 dark:text-gray-300 font-medium">
                        <li><i class="fas fa-check text-brand mr-2"></i> Remoção de estruturas obsoletas</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Mitigação de impactos ambientais</li>
                        <li><i class="fas fa-check text-brand mr-2"></i> Recuperação de áreas degradadas</li>
                    </ul>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 bg-gray-100 dark:bg-[#080808] overflow-hidden">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                <div class="reveal-zoom">
                    <div
                        class="relative rounded-3xl overflow-hidden shadow-2xl border border-gray-200 dark:border-gray-800">
                        <img src="{{ asset('img/servicos/02.png') }}" alt="Soluções industriais JS Reciclagem"
                            class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="reveal">
                    <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                        Atendimento personalizado
                    </span>

                    <h2
                        class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-8">
                        Soluções sob medida para
                        <span class="text-brand">cada operação</span>
                    </h2>

                    <div class="space-y-5 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                        <p>
                            Cada indústria possui uma realidade operacional diferente. Por isso, avaliamos volume,
                            tipo de resíduo, rotina de coleta, espaço disponível e necessidade logística antes de
                            propor a melhor solução.
                        </p>

                        <p>
                            Nosso objetivo é reduzir riscos, melhorar a organização, garantir conformidade ambiental
                            e transformar resíduos em valor para o cliente.
                        </p>
                    </div>

                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5 mt-10">
                        <div class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-2xl p-6">
                            <i class="fas fa-shield-alt text-brand text-3xl mb-4"></i>
                            <h4 class="font-heading text-xl font-bold text-gray-900 dark:text-white mb-2">Segurança</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Processos com controle operacional e responsabilidade ambiental.
                            </p>
                        </div>

                        <div class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-2xl p-6">
                            <i class="fas fa-chart-line text-brand text-3xl mb-4"></i>
                            <h4 class="font-heading text-xl font-bold text-gray-900 dark:text-white mb-2">Eficiência</h4>
                            <p class="text-gray-600 dark:text-gray-400 text-sm leading-relaxed">
                                Soluções que otimizam tempo, espaço e aproveitamento dos materiais.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-20 bg-brand relative overflow-hidden">
        <div class="absolute inset-0 bg-black/10"></div>

        <div class="container mx-auto px-6 text-center relative z-10 reveal">
            <h2 class="font-heading text-3xl md:text-5xl font-extrabold text-white mb-6">
                Precisa de uma solução para sua empresa?
            </h2>

            <p class="text-white/90 text-lg md:text-xl max-w-3xl mx-auto mb-10 leading-relaxed">
                Nossa equipe pode avaliar sua operação e indicar os melhores serviços e equipamentos para
                atender sua demanda com segurança, eficiência e conformidade ambiental.
            </p>

            <button onclick="abrirModal(event)"
                class="bg-black hover:bg-brand-dark text-white font-bold py-4 px-12 rounded-full shadow-xl transition-all duration-300 text-xl transform hover:-translate-y-1">
                Falar com Consultor
            </button>
        </div>
    </section>

@endsection