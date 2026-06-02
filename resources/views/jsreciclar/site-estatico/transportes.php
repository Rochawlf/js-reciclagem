<?php
$pageTitle = 'Transportes e Locação de Equipamentos | JS Reciclagem';
include 'partials/head.php';
?>

<body class="font-sans antialiased text-gray-800 bg-white dark:bg-[#080808] dark:text-gray-300">

    <?php include 'partials/navbar.php'; ?>

    <main>

        <header class="relative pt-36 pb-28 md:pt-44 md:pb-40 bg-gray-950 overflow-hidden flex items-center min-h-[78vh]">
            <div class="absolute inset-0 z-0">
                <img
                    src="img/banner.jpeg"
                    alt="Transporte e locação de equipamentos"
                    class="w-full h-full object-cover object-center"
                >

                <div class="absolute inset-0 bg-black/75"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/20"></div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-3xl reveal">
                    <span class="inline-flex items-center gap-3 mb-6 text-brand-light font-extrabold uppercase tracking-[0.35em] text-xs md:text-sm">
                        <span class="w-10 h-[2px] bg-brand-light"></span>
                        Operação logística
                    </span>

                    <h1 class="text-4xl md:text-7xl font-extrabold text-white leading-tight mb-6 tracking-tight drop-shadow-lg">
                        Transporte e locação
                        <span class="text-brand-light">de equipamentos</span>
                    </h1>

                    <p class="text-lg md:text-2xl text-gray-200 max-w-2xl leading-relaxed drop-shadow-md">
                        Estrutura preparada para coleta, movimentação, transporte e apoio operacional em processos industriais.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a
                            href="#conteudo"
                            class="inline-flex justify-center items-center bg-brand hover:bg-green-500 text-white font-bold py-4 px-8 rounded-full shadow-[0_0_25px_rgba(22,163,74,0.35)] transition-all duration-300 hover:-translate-y-1"
                        >
                            Conhecer soluções
                        </a>

                        <a
                            href="#galeria"
                            class="inline-flex justify-center items-center border border-white/30 bg-white/10 backdrop-blur-md text-white font-bold py-4 px-8 rounded-full transition-all duration-300 hover:bg-white hover:text-gray-950"
                        >
                            Ver frota e estrutura
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section id="conteudo" class="py-24 bg-white dark:bg-black overflow-hidden">
            <div class="container mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="reveal">
                        <span class="inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                            Eficiência, segurança e agilidade
                        </span>

                        <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-8">
                            Transporte adequado para
                            <span class="text-brand">operações industriais</span>
                        </h2>

                        <div class="space-y-6 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                            <p>
                                O transporte correto dos resíduos e materiais industriais é essencial para garantir
                                segurança, rastreabilidade e conformidade ambiental durante toda a operação.
                            </p>

                            <p>
                                A JS Reciclagem atua com soluções logísticas planejadas, equipamentos adequados e
                                equipe preparada para atender empresas que precisam de agilidade, organização e
                                responsabilidade no transporte e na locação de equipamentos.
                            </p>
                        </div>

                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div class="bg-gray-100 dark:bg-[#111111] border border-gray-200 dark:border-gray-800 rounded-2xl p-6">
                                <i class="fas fa-truck-moving text-brand text-3xl mb-4"></i>

                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                    Transporte seguro
                                </h4>

                                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                    Coletas planejadas, movimentação adequada e logística eficiente.
                                </p>
                            </div>

                            <div class="bg-gray-100 dark:bg-[#111111] border border-gray-200 dark:border-gray-800 rounded-2xl p-6">
                                <i class="fas fa-dolly-flatbed text-brand text-3xl mb-4"></i>

                                <h4 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                    Equipamentos
                                </h4>

                                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                    Locação de equipamentos conforme a necessidade da operação.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-5 reveal-zoom">
                        <div class="space-y-5">
                            <img
                                src="img/Transporte e locação de equipamentos/02.jpeg"
                                alt="Transporte industrial"
                                class="w-full h-60 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700"
                            >

                            <img
                                src="img/Transporte e locação de equipamentos/03.jpeg"
                                alt="Locação de equipamentos"
                                class="w-full h-80 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700"
                            >
                        </div>

                        <div class="space-y-5 pt-12">
                            <img
                                src="img/Transporte e locação de equipamentos/04.jpeg"
                                alt="Operação logística"
                                class="w-full h-80 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700"
                            >

                            <img
                                src="img/Transporte e locação de equipamentos/05.jpeg"
                                alt="Equipamentos para resíduos"
                                class="w-full h-60 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700"
                            >
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-24 bg-gray-100 dark:bg-[#080808] overflow-hidden">
            <div class="container mx-auto px-6">

                <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                    <span class="text-brand font-bold uppercase tracking-[0.3em] text-sm">
                        Soluções disponíveis
                    </span>

                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mt-4 mb-6">
                        Apoio completo para sua operação
                    </h2>

                    <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        Disponibilizamos estrutura para transporte, coleta e locação de equipamentos,
                        oferecendo suporte desde o armazenamento até a movimentação final dos materiais.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl reveal-zoom">
                        <div class="w-14 h-14 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                            <i class="fas fa-truck text-brand text-2xl"></i>
                        </div>

                        <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                            Coleta e transporte
                        </h3>

                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Transporte de resíduos e materiais industriais com planejamento, controle e segurança operacional.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl reveal-zoom">
                        <div class="w-14 h-14 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                            <i class="fas fa-dumpster text-brand text-2xl"></i>
                        </div>

                        <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                            Locação de equipamentos
                        </h3>

                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Equipamentos dimensionados para o volume, tipo de material e rotina de cada operação.
                        </p>
                    </div>

                    <div class="bg-white dark:bg-black border border-gray-200 dark:border-gray-800 rounded-3xl p-8 shadow-xl reveal-zoom">
                        <div class="w-14 h-14 rounded-2xl bg-brand/10 flex items-center justify-center mb-6">
                            <i class="fas fa-route text-brand text-2xl"></i>
                        </div>

                        <h3 class="text-2xl font-extrabold text-gray-900 dark:text-white mb-4">
                            Logística planejada
                        </h3>

                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            Roteirização e programação de coletas para reduzir riscos, atrasos e impactos na produção.
                        </p>
                    </div>
                </div>

            </div>
        </section>

        <section id="galeria" class="py-24 bg-white dark:bg-black overflow-hidden">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16 reveal">
                    <span class="text-brand font-bold uppercase tracking-[0.3em] text-sm">
                        Galeria
                    </span>

                    <h2 class="text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mt-4">
                        Transporte e equipamentos
                    </h2>

                    <p class="max-w-3xl mx-auto mt-6 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        Veja parte da estrutura utilizada em nossas operações de transporte,
                        coleta e locação de equipamentos.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5 gap-6">
                    <?php for ($i = 1; $i <= 10; $i++): ?>
                        <?php $imagem = str_pad($i, 2, '0', STR_PAD_LEFT) . '.jpeg'; ?>

                        <div class="group relative overflow-hidden rounded-3xl shadow-2xl reveal-zoom bg-gray-200 dark:bg-gray-900">
                            <img
                                src="img/Transporte e locação de equipamentos/<?php echo $imagem; ?>"
                                alt="Imagem <?php echo $i; ?> - Transporte e locação de equipamentos"
                                class="w-full h-80 object-cover transition duration-700 group-hover:scale-110"
                            >

                            <div class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">
                                <div class="absolute bottom-0 left-0 p-6">
                                    <span class="text-brand-light text-sm font-bold uppercase tracking-widest">
                                        JS Reciclagem
                                    </span>

                                    <h4 class="text-white text-xl font-extrabold mt-2">
                                        Operação Logística
                                    </h4>
                                </div>
                            </div>
                        </div>
                    <?php endfor; ?>
                </div>

            </div>
        </section>

        <section class="py-20 bg-gray-100 dark:bg-[#080808] border-t-4 border-brand relative overflow-hidden">
            <div class="absolute inset-0 bg-brand/5"></div>

            <div class="container mx-auto px-6 text-center relative z-10 reveal">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                    Precisa de transporte ou locação de equipamentos?
                </h2>

                <p class="text-lg text-gray-700 dark:text-gray-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Nossa equipe pode dimensionar a melhor solução conforme sua operação, volume de resíduos e necessidade logística.
                </p>

                <button
                    onclick="abrirModal(event)"
                    class="bg-brand hover:bg-green-500 text-white font-bold py-4 px-12 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.4)] transition-all duration-300 text-xl transform hover:-translate-y-1"
                >
                    Solicitar Orçamento
                </button>
            </div>
        </section>

    </main>

    <?php include 'partials/footer.php'; ?>
    <?php include 'partials/modal-orcamento.php'; ?>

    <script src="assets/js/app.js"></script>
</body>

</html>
