<?php
$currentPage = basename($_SERVER['PHP_SELF']);

function navActiveClass(string $page, string $currentPage): string
{
    return $currentPage === $page
        ? 'text-brand dark:text-brand-light border-b-2 border-brand'
        : 'text-white';
}
?>

<nav id="main-navbar" class="fixed w-full z-50 top-0 transition-all duration-300 bg-transparent">
    <div class="container mx-auto px-6 h-28 flex justify-between items-center relative">

        <a href="/" class="flex items-center justify-center z-50 h-full overflow-visible">
            <img
                src="img/logo.png"
                alt="JS Reciclagem"
                class="h-40 md:h-44 w-auto object-contain transition-transform hover:scale-105 relative top-4"
            >
        </a>

        <div class="hidden md:flex space-x-6 items-center">
            <a href="/"
                class="nav-link inline-block <?= navActiveClass('index.php', $currentPage); ?> font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                Início
            </a>

            <a href="/servicos"
                class="nav-link inline-block <?= navActiveClass('servicos.php', $currentPage); ?> font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                Serviços e Produtos
            </a>

            <a href="/acondicionamento"
                class="nav-link inline-block <?= navActiveClass('acondicionamento.php', $currentPage); ?> font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                Acondicionamento
            </a>

            <a href="/transportes"
                class="nav-link inline-block <?= navActiveClass('transportes.php', $currentPage); ?> font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                Transportes / Locação
            </a>

            <a href="/#localizacao"
                class="nav-link inline-block text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                Localização
            </a>

            <a href="#" onclick="abrirModal(event)"
                class="nav-link inline-block text-white font-bold hover:text-brand dark:hover:text-brand-light transition pb-1">
                Orçamento
            </a>

            <div class="flex items-center pl-6 ml-2 gap-3">
                <button onclick="setTheme('light')" class="theme-button text-white/70 hover:text-yellow-400 transition" title="Modo Claro">
                    <i class="fas fa-sun text-xl"></i>
                </button>

                <button onclick="setTheme('dark')" class="theme-button text-white/70 hover:text-brand-light transition" title="Modo Escuro">
                    <i class="fas fa-moon text-xl"></i>
                </button>
            </div>
        </div>

        <div class="md:hidden flex items-center z-50">
            <button onclick="toggleMobileMenu()"
                class="w-12 h-12 rounded-full bg-black/55 backdrop-blur-md border border-white/10 shadow-lg flex items-center justify-center focus:outline-none transition-all duration-300"
                aria-label="Abrir menu">
                <i id="hamburger-icon" class="fas fa-bars text-2xl text-white transition-all duration-300"></i>
            </button>
        </div>
    </div>

    <div id="mobile-menu"
        class="hidden md:hidden absolute top-full left-0 w-full bg-white/90 dark:bg-black/85 backdrop-blur-xl shadow-xl transition-all duration-300 origin-top">
        <div class="flex flex-col px-6 py-6 space-y-5 text-center">
            <a href="/" onclick="toggleMobileMenu()"
                class="text-gray-900 dark:text-white font-bold text-lg hover:text-brand transition">
                Início
            </a>

            <a href="/servicos" onclick="toggleMobileMenu()"
                class="text-gray-900 dark:text-white font-bold text-lg hover:text-brand transition">
                Serviços e Produtos
            </a>

            <a href="/acondicionamento" onclick="toggleMobileMenu()"
                class="text-gray-900 dark:text-white font-bold text-lg hover:text-brand transition">
                Acondicionamento
            </a>

            <a href="/transportes" onclick="toggleMobileMenu()"
                class="text-gray-900 dark:text-white font-bold text-lg hover:text-brand transition">
                Transportes / Locação
            </a>

            <a href="/#localizacao" onclick="toggleMobileMenu()"
                class="text-gray-900 dark:text-white font-bold text-lg hover:text-brand transition">
                Contato / Localização
            </a>

            <a href="#" onclick="abrirModal(event); toggleMobileMenu()"
                class="text-gray-900 dark:text-white font-bold text-lg hover:text-brand transition">
                Orçamento
            </a>

            <p class="text-xs text-gray-500 dark:text-gray-400 mb-3 font-bold uppercase tracking-widest">
                Tema
            </p>

            <div class="flex justify-center gap-4">
                <button onclick="setTheme('light')"
                    class="bg-gray-100 dark:bg-white/10 px-4 py-2 rounded-lg font-bold text-gray-900 dark:text-white hover:bg-gray-200 dark:hover:bg-white/20 transition">
                    <i class="fas fa-sun mr-2 text-yellow-500"></i>Claro
                </button>

                <button onclick="setTheme('dark')"
                    class="bg-gray-100 dark:bg-white/10 px-4 py-2 rounded-lg font-bold text-gray-900 dark:text-white hover:bg-gray-200 dark:hover:bg-white/20 transition">
                    <i class="fas fa-moon mr-2 text-brand"></i>Escuro
                </button>
            </div>
        </div>
    </div>
</nav>
