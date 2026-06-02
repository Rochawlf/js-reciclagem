<!DOCTYPE html>
<html lang="pt-br" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JS Reciclagem - Gerenciamento de Resíduos</title>
    
    <script src="https://cdn.tailwindcss.com"></script>
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        brand: {
                            light: '#4ade80',
                            DEFAULT: '#16a34a',
                            dark: '#14532d',
                        }
                    }
                }
            }
        }
    </script>
    <style>
        .hide-scrollbar::-webkit-scrollbar { display: none; }
        .hide-scrollbar { -ms-overflow-style: none; scrollbar-width: none; }
        
        body { transition: background-color 0.3s ease, color 0.3s ease; }
        section { transition: background-color 0.3s ease; }
    </style>

    <script>
        if (localStorage.theme === 'dark' || (!('theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>
</head>
<body class="bg-gray-50 dark:bg-gray-900 font-sans antialiased text-gray-800 dark:text-gray-200">

    <div class="fixed left-0 top-1/2 transform -translate-y-1/2 z-[60] flex flex-col bg-white dark:bg-gray-800 shadow-2xl rounded-r-xl overflow-hidden border-y border-r border-gray-200 dark:border-gray-700">
        <button onclick="setTheme('light')" id="btn-light" class="p-3 hover:bg-gray-100 dark:hover:bg-gray-700 transition flex flex-col items-center justify-center gap-1 group" title="Modo Claro">
            <i class="fas fa-sun text-xl text-yellow-500 group-hover:scale-110 transition-transform"></i>
            <span class="text-[10px] font-bold text-gray-500 dark:text-gray-400">Claro</span>
        </button>
        <div class="w-full h-px bg-gray-200 dark:bg-gray-700"></div>
        <button onclick="setTheme('dark')" id="btn-dark" class="p-3 hover:bg-gray-100 dark:hover:bg-gray-700 transition flex flex-col items-center justify-center gap-1 group" title="Modo Escuro">
            <i class="fas fa-moon text-xl text-gray-400 dark:text-brand-light group-hover:scale-110 transition-transform"></i>
            <span class="text-[10px] font-bold text-gray-500 dark:text-gray-400">Escuro</span>
        </button>
    </div>

    <nav class="bg-white dark:bg-gray-900 shadow-md fixed w-full z-50 top-0 transition-colors duration-300 border-b border-transparent dark:border-gray-800">
        <div class="container mx-auto px-6 py-4 flex justify-between items-center">
            <a href="#" class="flex items-center">
                <img src="{{ asset('img/logo.jpg') }}" alt="JS Reciclagem" class="h-14 w-auto object-contain dark:bg-white dark:p-1 dark:rounded">
            </a>
            
            <div class="hidden md:flex space-x-8 items-center">
                <a href="#" class="text-brand font-bold border-b-2 border-brand pb-1">Início</a>
                <a href="#quem-somos" class="text-gray-600 dark:text-gray-300 font-semibold hover:text-brand dark:hover:text-brand-light transition">Sobre Nós</a>
                <a href="#servicos" class="text-gray-600 dark:text-gray-300 font-semibold hover:text-brand dark:hover:text-brand-light transition">Serviços</a>
                <a href="#materiais" class="text-gray-600 dark:text-gray-300 font-semibold hover:text-brand dark:hover:text-brand-light transition">Materiais</a>
                <a href="#galeria" class="text-gray-600 dark:text-gray-300 font-semibold hover:text-brand dark:hover:text-brand-light transition">Galeria</a>
                <a href="#" onclick="abrirModal(event)" class="text-gray-600 dark:text-gray-300 font-semibold hover:text-brand dark:hover:text-brand-light transition">Orçamento</a>
            </div>

            <div class="hidden md:block">
                <button onclick="abrirModal(event)" class="bg-brand hover:bg-green-700 text-white font-bold py-2 px-6 rounded-full transition duration-300 shadow-md">
                    Agendar Coleta
                </button>
            </div>
        </div>
    </nav>

    <header class="relative pt-24 pb-32 flex items-center min-h-[85vh] overflow-hidden">
        <video autoplay loop muted playsinline class="absolute inset-0 w-full h-full object-cover z-0">
            <source src="{{ asset('img/bk.mp4') }}" type="video/mp4">
        </video>
        <div class="absolute inset-0 bg-brand-dark bg-opacity-80 z-10"></div>
        <div class="container mx-auto px-6 relative z-20 flex flex-col items-start text-left">
            <p class="text-brand-light font-bold tracking-widest uppercase mb-3 drop-shadow-md">Gerenciamento de Resíduos Industriais</p>
            <h1 class="text-5xl md:text-7xl font-extrabold text-white leading-tight mb-6 max-w-3xl drop-shadow-lg">
                Reciclando para um <br><span class="text-brand-light">mundo melhor</span>
            </h1>
            <p class="text-lg md:text-xl text-gray-200 mb-10 max-w-2xl leading-relaxed">
                Referência no Polo Industrial de Camaçari. Gestão inteligente, frota própria e compromisso absoluto com a sustentabilidade e a conformidade legal.
            </p>
            <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                <button onclick="abrirModal(event)" class="bg-brand hover:bg-green-600 text-white font-bold py-4 px-8 rounded-full transition duration-300 shadow-lg text-center">
                    Solicitar Orçamento
                </button>
                <a href="#servicos" class="bg-transparent border-2 border-white hover:bg-white hover:text-brand-dark text-white font-bold py-4 px-8 rounded-full transition duration-300 shadow-lg text-center">
                    Nossos Serviços
                </a>
            </div>
        </div>
    </header>

    <section id="quem-somos" class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-6 border-l-4 border-brand pl-4">Quem Somos Nós?</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-4 leading-relaxed text-lg">Fundada em 2017, visando atender as necessidades das grandes indústrias da região de <strong>Camaçari</strong>, a JS Reciclagem iniciou suas operações no ramo de coleta, transporte e destinação de resíduos recicláveis.</p>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed text-lg">Prezamos pela ética, responsabilidade socioambiental e pelo pronto atendimento às demandas do setor industrial com infraestrutura de altíssima qualidade.</p>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('img/01.jpg') }}" alt="Nossa História" class="rounded-2xl shadow-xl w-full h-[400px] object-cover border-b-8 border-brand">
                </div>
            </div>
        </div>
    </section>

    <section id="servicos" class="py-20 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('img/02.jpg') }}" alt="Nossos Serviços" class="rounded-2xl shadow-xl w-full h-[450px] object-cover border-b-8 border-brand">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-6 border-l-4 border-brand pl-4">Nossos Serviços</h2>
                    <div class="space-y-6">
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md flex items-start border-l-4 border-brand">
                            <i class="fas fa-truck-loading text-brand text-3xl mr-4 mt-1"></i>
                            <div><h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Coleta</h3><p class="text-gray-600 dark:text-gray-400">Retirada eficiente direto na fonte geradora, adequada para grandes volumes industriais.</p></div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md flex items-start border-l-4 border-brand">
                            <i class="fas fa-route text-brand text-3xl mr-4 mt-1"></i>
                            <div><h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Transporte</h3><p class="text-gray-600 dark:text-gray-400">Logística de transporte segura, monitorada e em total conformidade com os órgãos ambientais.</p></div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 p-6 rounded-xl shadow-md flex items-start border-l-4 border-brand">
                            <i class="fas fa-recycle text-brand text-3xl mr-4 mt-1"></i>
                            <div><h3 class="text-xl font-bold text-gray-800 dark:text-white mb-1">Destinação</h3><p class="text-gray-600 dark:text-gray-400">Processamento e encaminhamento responsável, inserindo o material de volta na economia circular.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-white dark:bg-gray-800">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row items-center gap-12">
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-6 border-l-4 border-brand pl-4">Infraestrutura e Logística</h2>
                    <p class="text-gray-600 dark:text-gray-300 mb-6 leading-relaxed text-lg">Estamos estrategicamente localizados para garantir agilidade no atendimento às demandas logísticas do Polo de Camaçari e municípios vizinhos. Nosso corpo técnico está preparado para qualquer desafio.</p>
                    <div class="bg-gray-50 dark:bg-gray-700 p-6 rounded-xl border border-gray-200 dark:border-gray-600">
                        <h4 class="font-bold text-gray-800 dark:text-white mb-2 flex items-center"><i class="fas fa-map-marker-alt text-brand mr-2"></i> Nossa Matriz</h4>
                        <p class="text-gray-600 dark:text-gray-300 font-medium">BA 093, KM 14</p>
                        <p class="text-gray-500 dark:text-gray-400">Bairro Jardim Futurama - Dias D'Ávila/BA</p>
                    </div>
                </div>
                <div class="md:w-1/2">
                    <img src="{{ asset('img/03.jpg') }}" alt="Infraestrutura" class="rounded-2xl shadow-xl w-full h-[400px] object-cover border-b-8 border-brand">
                </div>
            </div>
        </div>
    </section>

    <section id="materiais" class="py-20 bg-brand-dark dark:bg-black text-white">
        <div class="container mx-auto px-6">
            <div class="flex flex-col md:flex-row-reverse items-center gap-12">
                <div class="md:w-1/2">
                    <img src="{{ asset('img/04.png') }}" alt="Materiais" class="rounded-2xl shadow-2xl w-full h-[400px] object-cover border-b-8 border-brand-light">
                </div>
                <div class="md:w-1/2">
                    <h2 class="text-3xl md:text-4xl font-bold text-white mb-6 border-l-4 border-brand-light pl-4">O Que Nós Reciclamos?</h2>
                    <p class="text-gray-300 mb-8 leading-relaxed text-lg">Atuamos com a triagem e processamento de grandes volumes. Nosso foco é dar a destinação correta aos principais passivos gerados pela indústria moderna.</p>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-white/10 dark:bg-gray-800/50 p-4 rounded-lg backdrop-blur-sm"><h4 class="font-bold text-brand-light text-xl mb-1">Papelão & Papel</h4><p class="text-sm text-gray-300">Embalagens e aparas em escala industrial.</p></div>
                        <div class="bg-white/10 dark:bg-gray-800/50 p-4 rounded-lg backdrop-blur-sm"><h4 class="font-bold text-brand-light text-xl mb-1">Plásticos</h4><p class="text-sm text-gray-300">Diversos tipos de polímeros (PEAD, PET, PP).</p></div>
                        <div class="bg-white/10 dark:bg-gray-800/50 p-4 rounded-lg backdrop-blur-sm"><h4 class="font-bold text-brand-light text-xl mb-1">Metais e Sucata</h4><p class="text-sm text-gray-300">Ferrosos e não-ferrosos para reaproveitamento.</p></div>
                        <div class="bg-white/10 dark:bg-gray-800/50 p-4 rounded-lg backdrop-blur-sm"><h4 class="font-bold text-brand-light text-xl mb-1">Eletrônicos</h4><p class="text-sm text-gray-300">Descarte ecológico de equipamentos obsoletos.</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="galeria" class="py-20 bg-gray-100 dark:bg-gray-900">
        <div class="container mx-auto px-6 mb-10 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-gray-800 dark:text-white mb-4">Nossa Operação na Prática</h2>
            <p class="text-gray-600 dark:text-gray-400 max-w-2xl mx-auto text-lg">Deslize para o lado e passe o mouse (ou toque) nas imagens para ver os detalhes.</p>
        </div>
        
        <div class="flex overflow-x-auto gap-6 px-6 pb-12 snap-x snap-mandatory hide-scrollbar w-full max-w-[1400px] mx-auto">
            
            <div class="snap-center shrink-0 w-[80vw] md:w-[400px] h-72 group [perspective:1000px] cursor-pointer">
                <div class="relative h-full w-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]">
                        <img src="{{ asset('img/01.jpg') }}" class="w-full h-full object-cover rounded-xl shadow-lg border-2 border-transparent">
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-brand dark:bg-brand-dark text-white p-6 [transform:rotateY(180deg)] [backface-visibility:hidden] flex flex-col justify-center items-center text-center shadow-lg">
                        <i class="fas fa-boxes text-4xl mb-4 text-white opacity-80"></i>
                        <h3 class="text-xl font-bold mb-2">Triagem Eficiente</h3>
                        <p class="text-sm opacity-90">Recebimento e separação detalhada de materiais para garantir a pureza dos fardos antes do processamento final.</p>
                    </div>
                </div>
            </div>

            <div class="snap-center shrink-0 w-[80vw] md:w-[400px] h-72 group [perspective:1000px] cursor-pointer">
                <div class="relative h-full w-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]">
                        <img src="{{ asset('img/02.jpg') }}" class="w-full h-full object-cover rounded-xl shadow-lg border-2 border-transparent">
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-brand dark:bg-brand-dark text-white p-6 [transform:rotateY(180deg)] [backface-visibility:hidden] flex flex-col justify-center items-center text-center shadow-lg">
                        <i class="fas fa-truck-moving text-4xl mb-4 text-white opacity-80"></i>
                        <h3 class="text-xl font-bold mb-2">Logística Avançada</h3>
                        <p class="text-sm opacity-90">Frota própria e equipada para coleta em grandes proporções industriais com total segurança.</p>
                    </div>
                </div>
            </div>

            <div class="snap-center shrink-0 w-[80vw] md:w-[400px] h-72 group [perspective:1000px] cursor-pointer">
                <div class="relative h-full w-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]">
                        <img src="{{ asset('img/03.jpg') }}" class="w-full h-full object-cover rounded-xl shadow-lg border-2 border-transparent">
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-brand dark:bg-brand-dark text-white p-6 [transform:rotateY(180deg)] [backface-visibility:hidden] flex flex-col justify-center items-center text-center shadow-lg">
                        <i class="fas fa-industry text-4xl mb-4 text-white opacity-80"></i>
                        <h3 class="text-xl font-bold mb-2">Estrutura Interna</h3>
                        <p class="text-sm opacity-90">Nossa matriz localizada estrategicamente preparada para processar toneladas de recicláveis diariamente.</p>
                    </div>
                </div>
            </div>

            <div class="snap-center shrink-0 w-[80vw] md:w-[400px] h-72 group [perspective:1000px] cursor-pointer">
                <div class="relative h-full w-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]">
                        <img src="{{ asset('img/04.png') }}" class="w-full h-full object-cover rounded-xl shadow-lg border-2 border-transparent">
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-brand dark:bg-brand-dark text-white p-6 [transform:rotateY(180deg)] [backface-visibility:hidden] flex flex-col justify-center items-center text-center shadow-lg">
                        <i class="fas fa-recycle text-4xl mb-4 text-white opacity-80"></i>
                        <h3 class="text-xl font-bold mb-2">Foco no Plástico</h3>
                        <p class="text-sm opacity-90">Tratamento adequado de polímeros gerados por atividades produtivas, transformando passivo em ativo.</p>
                    </div>
                </div>
            </div>

            <div class="snap-center shrink-0 w-[80vw] md:w-[400px] h-72 group [perspective:1000px] cursor-pointer">
                <div class="relative h-full w-full transition-transform duration-700 [transform-style:preserve-3d] group-hover:[transform:rotateY(180deg)]">
                    <div class="absolute inset-0 [backface-visibility:hidden]">
                        <img src="{{ asset('img/05.png') }}" class="w-full h-full object-cover rounded-xl shadow-lg border-2 border-transparent">
                    </div>
                    <div class="absolute inset-0 h-full w-full rounded-xl bg-brand dark:bg-brand-dark text-white p-6 [transform:rotateY(180deg)] [backface-visibility:hidden] flex flex-col justify-center items-center text-center shadow-lg">
                        <i class="fas fa-leaf text-4xl mb-4 text-white opacity-80"></i>
                        <h3 class="text-xl font-bold mb-2">Sustentabilidade Real</h3>
                        <p class="text-sm opacity-90">Nossa missão é garantir que o impacto ambiental da sua indústria seja positivo e documentado.</p>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <footer class="bg-gray-900 dark:bg-black text-white py-16 border-t border-gray-800">
        <div class="container mx-auto px-6">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left">
                <div>
                    <img src="{{ asset('img/logo.jpg') }}" alt="JS Reciclagem" class="h-16 mx-auto md:mx-0 mb-6 object-contain bg-white p-2 rounded">
                    <p class="text-gray-400">Reciclando para um mundo melhor. Gerenciamento profissional de resíduos no Polo de Camaçari.</p>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-6 border-b-2 border-brand pb-2 inline-block">Contatos</h3>
                    <ul class="space-y-4 text-gray-300">
                        <li><i class="fab fa-whatsapp text-brand mr-2"></i> <strong>Comercial:</strong> (71) 99988-6554</li>
                        <li><i class="fas fa-phone text-brand mr-2"></i> <strong>Suprimentos:</strong> (71) 99979-2800</li>
                        <li><i class="fas fa-truck text-brand mr-2"></i> <strong>Logística:</strong> (71) 98111-8130</li>
                        <li><i class="fas fa-coins text-brand mr-2"></i> <strong>Financeiro:</strong> (75) 99926-6146</li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-xl font-bold mb-6 border-b-2 border-brand pb-2 inline-block">Localização</h3>
                    <p class="text-gray-300 mb-4"><i class="fas fa-map-marker-alt text-brand mr-2"></i> BA 093, KM 14<br>Bairro Jardim Futurama<br>Dias D'Ávila - BA</p>
                </div>
            </div>
            
            <div class="border-t border-gray-800 mt-12 pt-8 text-center text-gray-500 text-sm flex flex-col md:flex-row justify-center items-center gap-2">
                <span>&copy; {{ date('Y') }} JS Reciclagem. Todos os direitos reservados.</span>
                <span class="hidden md:inline">|</span>
                <span>Desenvolvido por <a href="https://rocha-portifolio.vercel.app/" target="_blank" rel="noopener noreferrer" class="text-brand hover:text-brand-light font-bold transition">RochaWLF</a></span>
            </div>

        </div>
    </footer>

    <a href="https://wa.me/5571999886554" target="_blank" rel="noopener noreferrer" 
       class="fixed bottom-8 right-8 bg-[#25D366] hover:bg-[#128C7E] text-white p-4 rounded-full shadow-2xl transition-transform hover:scale-110 z-50 flex items-center justify-center animate-bounce">
        <i class="fab fa-whatsapp text-4xl"></i>
    </a>

    <div id="modal-orcamento" class="fixed inset-0 z-[100] hidden items-center justify-center bg-black/60 backdrop-blur-md transition-opacity">
        <div class="relative w-full max-w-2xl bg-white dark:bg-gray-800 rounded-3xl shadow-2xl p-8 m-4 max-h-[90vh] overflow-y-auto border border-transparent dark:border-gray-700">
            
            <button onclick="fecharModal()" class="absolute top-5 right-5 text-gray-400 hover:text-red-500 transition">
                <i class="fas fa-times text-2xl"></i>
            </button>
            
            <div class="text-center mb-6 pt-2">
                <h2 class="text-3xl font-bold text-gray-800 dark:text-white mb-2">Solicite um Orçamento</h2>
                <p class="text-gray-600 dark:text-gray-400">Preencha os dados abaixo e fale diretamente com nosso comercial.</p>
            </div>
            
            <form id="form-whatsapp" onsubmit="enviarParaWhatsApp(event)" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Nome da Empresa *</label>
                        <input type="text" id="empresa" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand focus:border-transparent outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">CNPJ *</label>
                        <input type="text" id="cnpj" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand focus:border-transparent outline-none">
                    </div>
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Nome do Responsável *</label>
                        <input type="text" id="responsavel" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand focus:border-transparent outline-none">
                    </div>
                    <div>
                        <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">WhatsApp para retorno *</label>
                        <input type="tel" id="telefone" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand focus:border-transparent outline-none">
                    </div>
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Serviço Desejado *</label>
                    <select id="servico" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-600 bg-white dark:bg-gray-700 text-gray-900 dark:text-white focus:ring-2 focus:ring-brand focus:border-transparent outline-none">
                        <option value="" disabled selected>Selecione o serviço...</option>
                        <option value="Coleta Especializada">Coleta Especializada de Resíduos</option>
                        <option value="Destinação">Destinação de Plásticos e Papelão</option>
                        <option value="Reciclagem Metais">Reciclagem de Sucata e Metais</option>
                        <option value="Outros">Outros / Consultoria Ambiental</option>
                    </select>
                </div>

                <div class="pt-4 text-center">
                    <button type="submit" class="w-full bg-[#25D366] hover:bg-[#128C7E] text-white font-bold py-4 px-10 rounded-full text-lg transition duration-300 shadow-lg flex items-center justify-center">
                        <i class="fab fa-whatsapp text-2xl mr-3"></i> Enviar por WhatsApp
                    </button>
                </div>
            </form>
        </div>
    </div>

    <script>
        /* ---------------- LOGICA DO THEME CLARO/ESCURO ---------------- */
        function setTheme(mode) {
            if (mode === 'dark') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('theme', 'light');
            }
        }

        /* ---------------- LÓGICA DO MODAL E WHATSAPP ---------------- */
        function abrirModal(event) {
            if(event) event.preventDefault();
            const modal = document.getElementById('modal-orcamento');
            modal.classList.remove('hidden');
            modal.classList.add('flex');
            document.body.style.overflow = 'hidden'; 
        }

        function fecharModal() {
            const modal = document.getElementById('modal-orcamento');
            modal.classList.add('hidden');
            modal.classList.remove('flex');
            document.body.style.overflow = 'auto'; 
        }

        window.onclick = function(event) {
            const modal = document.getElementById('modal-orcamento');
            if (event.target === modal) fecharModal();
        }

        function enviarParaWhatsApp(event) {
            event.preventDefault();
            const empresa = document.getElementById('empresa').value;
            const cnpj = document.getElementById('cnpj').value;
            const responsavel = document.getElementById('responsavel').value;
            const telefone = document.getElementById('telefone').value;
            const servico = document.getElementById('servico').value;

            let mensagem = `*NOVA SOLICITAÇÃO DE ORÇAMENTO* ♻️\n\n`;
            mensagem += `*Empresa:* ${empresa}\n`;
            mensagem += `*CNPJ:* ${cnpj}\n`;
            mensagem += `*Responsável:* ${responsavel}\n`;
            mensagem += `*Contato:* ${telefone}\n`;
            mensagem += `*Serviço:* ${servico}\n\n`;
            mensagem += `_Vim através do site da JS Reciclagem._`;

            window.open(`https://wa.me/5571999886554?text=${encodeURIComponent(mensagem)}`, '_blank');
            fecharModal();
            document.getElementById('form-whatsapp').reset();
        }
    </script>
</body>
</html>