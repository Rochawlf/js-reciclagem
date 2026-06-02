<?php
$pageTitle = 'Acondicionamento e Destinação | JS Reciclagem';
include 'partials/head.php';
?>

<body class="font-sans antialiased text-gray-800 bg-white dark:bg-[#080808] dark:text-gray-300">

    <?php include 'partials/navbar.php'; ?>

    <main>

        <header class="relative pt-36 pb-28 md:pt-44 md:pb-40 bg-gray-950 overflow-hidden flex items-center min-h-[78vh]">
            <div class="absolute inset-0 z-0">
                <img src="img/banner.jpeg" alt="Acondicionamento e destinação correta de resíduos"
                    class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-black/75"></div>
                <div class="absolute inset-0 bg-gradient-to-r from-black via-black/80 to-black/20"></div>
            </div>

            <div class="container mx-auto px-6 relative z-10">
                <div class="max-w-3xl reveal">
                    <span
                        class="font-heading inline-flex items-center gap-3 mb-6 text-brand-light font-extrabold uppercase tracking-[0.35em] text-xs md:text-sm">
                        <span class="w-10 h-[2px] bg-brand-light"></span>
                        Gestão ambiental responsável
                    </span>

                    <h1
                        class="font-heading text-4xl md:text-7xl font-extrabold text-white leading-tight mb-6 tracking-tight drop-shadow-lg">
                        Acondicionamento de resíduos e
                        <span class="text-brand-light">destinação correta</span>
                    </h1>

                    <p class="text-lg md:text-2xl text-gray-200 max-w-2xl leading-relaxed drop-shadow-md">
                        Soluções seguras para armazenamento, transporte e destinação ambientalmente adequada dos resíduos
                        sólidos.
                    </p>

                    <div class="mt-10 flex flex-col sm:flex-row gap-4">
                        <a href="#conteudo"
                            class="inline-flex justify-center items-center bg-brand hover:bg-green-500 text-white font-bold py-4 px-8 rounded-full shadow-[0_0_25px_rgba(22,163,74,0.35)] transition-all duration-300 hover:-translate-y-1">
                            Conhecer soluções
                        </a>

                        <a href="#galeria"
                            class="inline-flex justify-center items-center border border-white/30 bg-white/10 backdrop-blur-md text-white font-bold py-4 px-8 rounded-full transition-all duration-300 hover:bg-white hover:text-gray-950">
                            Ver estrutura
                        </a>
                    </div>
                </div>
            </div>
        </header>

        <section id="conteudo" class="py-24 bg-white dark:bg-black overflow-hidden border-b border-gray-100 dark:border-gray-800">
            <div class="container mx-auto px-6">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">
                    <div class="reveal">
                        <span
                            class="font-heading inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                            Responsabilidade e conformidade
                        </span>

                        <h2
                            class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-8">
                            Gerenciamento adequado para
                            <span class="text-brand">preservar o meio ambiente</span>
                        </h2>

                        <div class="space-y-6 text-lg leading-relaxed text-gray-700 dark:text-gray-300">
                            <p>
                                O acondicionamento e a destinação correta dos resíduos sólidos são práticas essenciais
                                para a proteção da saúde pública e a preservação do meio ambiente. Essas ações evitam
                                a contaminação do solo e dos recursos hídricos, reduzem a proliferação de vetores
                                transmissores de doenças e contribuem para o reaproveitamento sustentável de materiais.
                            </p>
                            <p>
                                Um gerenciamento eficiente envolve duas etapas fundamentais: o acondicionamento seguro
                                dos resíduos e a destinação final ambientalmente adequada, garantindo conformidade com
                                as normas ambientais e promovendo sustentabilidade.
                            </p>
                        </div>

                        <div class="mt-10 grid grid-cols-1 sm:grid-cols-2 gap-5">
                            <div
                                class="bg-gray-100 dark:bg-[#111111] border border-gray-200 dark:border-gray-800 rounded-2xl p-6">
                                <i class="fas fa-recycle text-brand text-3xl mb-4"></i>
                                <h4 class="font-heading text-xl font-bold text-gray-900 dark:text-white mb-2">
                                    Sustentabilidade
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                    Processos ambientalmente corretos e alinhados às normas vigentes.
                                </p>
                            </div>

                            <div
                                class="bg-gray-100 dark:bg-[#111111] border border-gray-200 dark:border-gray-800 rounded-2xl p-6">
                                <i class="fas fa-shield-alt text-brand text-3xl mb-4"></i>
                                <h4 class="font-heading text-xl font-bold text-gray-900 dark:text-white mb-2">
                                    Segurança
                                </h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                    Controle adequado para evitar riscos ambientais e operacionais.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-5 reveal-zoom">
                        <div class="space-y-5">
                            <img src="img/Acondicionamento de resíduos e destinação correta/01.jpeg"
                                alt="Acondicionamento de resíduos sólidos"
                                class="w-full h-60 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700">
                            <img src="img/Acondicionamento de resíduos e destinação correta/02.jpeg"
                                alt="Destinação correta de resíduos"
                                class="w-full h-80 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700">
                        </div>

                        <div class="space-y-5 pt-12">
                            <img src="img/Acondicionamento de resíduos e destinação correta/03.jpeg"
                                alt="Gerenciamento ambiental de resíduos"
                                class="w-full h-80 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700">
                            <img src="img/Acondicionamento de resíduos e destinação correta/04.jpeg"
                                alt="Operação de destinação de resíduos"
                                class="w-full h-60 object-cover rounded-3xl shadow-2xl hover:scale-[1.02] transition duration-700">
                        </div>
                    </div>
                </div>

            </div>
        </section>

        <section class="py-24 bg-gray-100 dark:bg-[#0f3c20] overflow-hidden border-b border-gray-200 dark:border-gray-800">
            <div class="container mx-auto px-6">

                <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                    <span class="font-heading text-brand font-bold uppercase tracking-[0.3em] text-sm">
                        Soluções operacionais
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mt-4 mb-6">
                        Equipamentos para acondicionamento seguro
                    </h2>

                    <p class="text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        Disponibilizamos equipamentos adequados ao perfil de cada operação, garantindo melhor organização,
                        segurança no armazenamento e eficiência na coleta dos resíduos.
                    </p>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
                    <div class="w-full reveal-zoom">
                        <div class="image-wrapper">
                            <div class="circle-arc"></div>
                            <div class="image-container aspect-[4/3] rounded-2xl shadow-xl overflow-hidden">
                                <img src="img/Acondicionamento de resíduos e destinação correta/05.jpeg"
                                    alt="Caçambas Roll-on Roll-off"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>

                    <div class="w-full reveal delay-100">
                        <h3
                            class="font-heading text-3xl font-extrabold text-gray-900 dark:text-white mb-4 border-l-4 border-brand pl-4">
                            Caçambas <span class="text-brand">Roll-on Roll-off</span>
                        </h3>

                        <p class="text-gray-700 dark:text-gray-300 text-lg mb-4 leading-relaxed">
                            Equipamentos robustos ideais para indústrias com alta geração de resíduos volumosos.
                            O sistema Roll-on Roll-off garante agilidade na coleta e substituição do equipamento,
                            sem interromper a rotina produtiva da operação.
                        </p>

                        <ul class="text-gray-600 dark:text-gray-400 font-medium space-y-3">
                            <li><i class="fas fa-check text-brand mr-2"></i> Capacidade variada para diferentes volumes</li>
                            <li><i class="fas fa-check text-brand mr-2"></i> Alta resistência para resíduos industriais e sucatas</li>
                            <li><i class="fas fa-check text-brand mr-2"></i> Coleta mecanizada, segura e eficiente</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center mb-24">
                    <div class="w-full md:order-2 reveal-zoom">
                        <div class="image-wrapper">
                            <div class="circle-arc-reverse"></div>
                            <div class="image-container aspect-[4/3] rounded-2xl shadow-xl overflow-hidden">
                                <img src="img/Acondicionamento de resíduos e destinação correta/06.jpeg"
                                    alt="Contêineres IBC e bombonas"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>

                    <div class="w-full md:order-1 reveal delay-100">
                        <h3
                            class="font-heading text-3xl font-extrabold text-gray-900 dark:text-white mb-4 border-l-4 border-brand pl-4">
                            Contêineres IBC e <span class="text-brand">Bombonas</span>
                        </h3>

                        <p class="text-gray-700 dark:text-gray-300 text-lg mb-4 leading-relaxed">
                            Soluções fundamentais para o envase, armazenamento e transporte seguro de resíduos líquidos,
                            pastosos, químicos e materiais que exigem maior controle operacional.
                        </p>

                        <ul class="text-gray-600 dark:text-gray-400 font-medium space-y-3">
                            <li><i class="fas fa-check text-brand mr-2"></i> Acondicionamento seguro de resíduos específicos</li>
                            <li><i class="fas fa-check text-brand mr-2"></i> Redução de riscos de vazamentos e contaminação</li>
                            <li><i class="fas fa-check text-brand mr-2"></i> Melhor controle para armazenamento temporário</li>
                        </ul>
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-16 items-center">
                    <div class="w-full reveal-zoom">
                        <div class="image-wrapper">
                            <div class="circle-arc"></div>
                            <div class="image-container aspect-[4/3] rounded-2xl shadow-xl overflow-hidden">
                                <img src="img/Acondicionamento de resíduos e destinação correta/07.jpeg"
                                    alt="Prensas e caçambas estacionárias"
                                    class="w-full h-full object-cover hover:scale-105 transition-transform duration-700">
                            </div>
                        </div>
                    </div>

                    <div class="w-full reveal delay-100">
                        <h3
                            class="font-heading text-3xl font-extrabold text-gray-900 dark:text-white mb-4 border-l-4 border-brand pl-4">
                            Prensas e Caçambas <span class="text-brand">Estacionárias</span>
                        </h3>

                        <p class="text-gray-700 dark:text-gray-300 text-lg mb-4 leading-relaxed">
                            Equipamentos estacionários posicionados em pontos estratégicos da operação. As prensas
                            auxiliam na redução de volume dos materiais, otimizando espaço e facilitando o transporte.
                        </p>

                        <ul class="text-gray-600 dark:text-gray-400 font-medium space-y-3">
                            <li><i class="fas fa-check text-brand mr-2"></i> Otimização do pátio de resíduos</li>
                            <li><i class="fas fa-check text-brand mr-2"></i> Redução de volume de papelão, plástico e materiais recicláveis</li>
                            <li><i class="fas fa-check text-brand mr-2"></i> Melhor organização e eficiência operacional</li>
                        </ul>
                    </div>
                </div>

            </div>
        </section>

        <?php
            $solucoesIndustriais = [
                [
                    'titulo' => 'Descaracterização',
                    'icone' => 'fas fa-cogs',
                    'descricao' => 'Processo que torna o bem, produto ou estrutura industrial irreconhecível em sua forma original, evitando reutilização indevida e garantindo a destinação correta.',
                    'itens' => [
                        'Corte, fragmentação e remoção de estruturas e equipamentos',
                        'Preparação do material para destinação correta',
                        'Conformidade com normas ambientais e de segurança',
                    ],
                    'imagens' => ['08.jpeg', '09.jpeg', '10.jpeg', '11.jpeg'],
                    'ordem' => 'normal',
                ],
                [
                    'titulo' => 'Descomissionamento',
                    'icone' => 'fas fa-industry',
                    'descricao' => 'Encerramento seguro e planejado das atividades de uma instalação industrial, com foco na redução de riscos, impactos ambientais e reaproveitamento responsável.',
                    'itens' => [
                        'Desativação de sistemas e equipamentos',
                        'Descontaminação de áreas e estruturas',
                        'Gestão ambiental e destinação adequada de resíduos',
                    ],
                    'imagens' => ['12.jpeg', '13.jpeg', '14.jpeg', '15.jpeg'],
                    'ordem' => 'reverse',
                ],
                [
                    'titulo' => 'Desmobilização',
                    'icone' => 'fas fa-truck-loading',
                    'descricao' => 'Retirada planejada de equipamentos, materiais e estruturas do local, com logística eficiente, segura e adequada à operação do cliente.',
                    'itens' => [
                        'Remoção e transporte de máquinas e equipamentos',
                        'Gerenciamento de resíduos e materiais',
                        'Limpeza, organização e entrega da área',
                    ],
                    'imagens' => ['16.jpeg', '17.jpeg', '18.jpeg', '19.jpeg'],
                    'ordem' => 'normal',
                ],
            ];
        ?>

        <section class="py-24 bg-gray-100 dark:bg-[#080808] overflow-hidden border-b border-gray-200 dark:border-gray-800">
            <div class="container mx-auto px-6">

                <div class="text-center max-w-4xl mx-auto mb-16 reveal">
                    <span
                        class="font-heading inline-block mb-4 text-brand font-extrabold uppercase tracking-[0.3em] text-sm">
                        Soluções para fim de ciclo industrial
                    </span>

                    <h2
                        class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight">
                        Descaracterização, descomissionamento e
                        <span class="text-brand">desmobilização</span>
                    </h2>

                    <p class="mt-6 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        Atuamos com segurança, responsabilidade ambiental e equipe especializada em todas as etapas
                        do processo, garantindo conformidade, qualidade e destinação adequada dos materiais.
                    </p>
                </div>

                <div class="space-y-24">
                    <?php foreach ($solucoesIndustriais as $solucao): ?>
                        <div class="grid grid-cols-1 lg:grid-cols-2 gap-14 items-center">

                            <div class="<?php echo $solucao['ordem'] === 'reverse' ? 'lg:order-2' : ''; ?> reveal-zoom">
                                <div class="grid grid-cols-2 gap-4">
                                    <?php foreach ($solucao['imagens'] as $index => $imagem): ?>
                                        <div class="group relative overflow-hidden rounded-3xl shadow-2xl bg-gray-200 dark:bg-gray-900
                                            <?php echo $index === 1 ? 'mt-8' : ''; ?>
                                            <?php echo $index === 2 ? '-mt-4' : ''; ?>">
                                            <img src="img/Acondicionamento de resíduos e destinação correta/<?php echo $imagem; ?>"
                                                alt="<?php echo $solucao['titulo']; ?> - imagem <?php echo $index + 1; ?>"
                                                class="w-full h-56 md:h-72 object-cover transition duration-700 group-hover:scale-110">

                                            <div
                                                class="absolute inset-0 bg-gradient-to-t from-black/60 via-black/10 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>

                            <div class="<?php echo $solucao['ordem'] === 'reverse' ? 'lg:order-1' : ''; ?> reveal">
                                <span
                                    class="font-heading inline-flex items-center gap-3 mb-5 text-brand font-extrabold uppercase tracking-[0.3em] text-xs md:text-sm">
                                    <i class="<?php echo $solucao['icone']; ?> text-2xl"></i>
                                    Solução industrial
                                </span>

                                <h3
                                    class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white leading-tight mb-6 border-l-4 border-brand pl-5">
                                    <?php echo $solucao['titulo']; ?>
                                </h3>

                                <p class="text-lg leading-relaxed text-gray-700 dark:text-gray-300 mb-8">
                                    <?php echo $solucao['descricao']; ?>
                                </p>

                                <ul class="space-y-4 text-gray-700 dark:text-gray-300 font-medium text-lg">
                                    <?php foreach ($solucao['itens'] as $item): ?>
                                        <li class="flex items-start">
                                            <i class="fas fa-check-circle text-brand mr-3 mt-1"></i>
                                            <span><?php echo $item; ?></span>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>

                                <div class="mt-10">
                                    <button onclick="abrirModal(event)"
                                        class="font-heading bg-brand hover:bg-green-500 text-white font-bold py-4 px-10 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.35)] transition-all duration-300 transform hover:-translate-y-1">
                                        Solicitar Orçamento
                                    </button>
                                </div>
                            </div>

                        </div>
                    <?php endforeach; ?>
                </div>

            </div>
        </section>

        <section id="galeria" class="py-24 bg-white dark:bg-black overflow-hidden">
            <div class="container mx-auto px-6">

                <div class="text-center mb-16 reveal">
                    <span class="font-heading text-brand font-bold uppercase tracking-[0.3em] text-sm">
                        Nossa operação
                    </span>

                    <h2 class="font-heading text-4xl md:text-5xl font-extrabold text-gray-900 dark:text-white mt-4">
                        Estrutura operacional e logística
                    </h2>

                    <p class="max-w-3xl mx-auto mt-6 text-lg text-gray-600 dark:text-gray-400 leading-relaxed">
                        Conheça parte da nossa estrutura, equipamentos e processos utilizados para garantir eficiência
                        operacional, segurança ambiental e conformidade legal.
                    </p>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
                    <?php for ($i = 1; $i <= 21; $i++): ?>
                        <?php $imagem = str_pad($i, 2, '0', STR_PAD_LEFT) . '.jpeg'; ?>

                        <div
                            class="group relative overflow-hidden rounded-3xl shadow-2xl reveal-zoom bg-gray-200 dark:bg-gray-900">
                            <img src="img/Acondicionamento de resíduos e destinação correta/<?php echo $imagem; ?>"
                                alt="Imagem <?php echo $i; ?> - Acondicionamento e destinação correta"
                                class="w-full h-80 object-cover transition duration-700 group-hover:scale-110">

                            <div
                                class="absolute inset-0 bg-gradient-to-t from-black/85 via-black/20 to-transparent opacity-0 group-hover:opacity-100 transition duration-500">
                                <div class="absolute bottom-0 left-0 p-6">
                                    <span class="font-heading text-brand-light text-sm font-bold uppercase tracking-widest">
                                        JS Reciclagem
                                    </span>
                                    <h4 class="font-heading text-white text-xl font-extrabold mt-2">
                                        Gestão de Resíduos
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
                <h2 class="font-heading text-3xl md:text-4xl font-extrabold text-gray-900 dark:text-white mb-4">
                    Precisa de uma solução adequada para seus resíduos?
                </h2>

                <p class="text-lg text-gray-700 dark:text-gray-300 mb-10 max-w-2xl mx-auto leading-relaxed">
                    Dimensionamos os equipamentos e processos mais adequados para o volume, tipo de resíduo
                    e necessidade da sua operação.
                </p>

                <button onclick="abrirModal(event)"
                    class="font-heading bg-brand hover:bg-green-500 text-white font-bold py-4 px-12 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.4)] transition-all duration-300 text-xl transform hover:-translate-y-1">
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