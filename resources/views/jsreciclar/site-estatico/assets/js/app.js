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