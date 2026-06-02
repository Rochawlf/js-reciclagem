<div id="modal-orcamento" class="fixed inset-0 z-[100] hidden bg-black/75 backdrop-blur-sm transition-opacity px-4">
    <div class="relative w-full max-w-2xl bg-white dark:bg-[#101010] rounded-3xl shadow-[0_25px_80px_rgba(0,0,0,0.45)] p-6 md:p-8 max-h-[90vh] overflow-y-auto border border-gray-200 dark:border-gray-800">
        <button onclick="fecharModal()" class="absolute top-5 right-5 w-10 h-10 rounded-full bg-gray-100 dark:bg-[#1a1a1a] text-gray-500 hover:text-red-500 hover:bg-red-50 dark:hover:bg-red-950/30 transition flex items-center justify-center">
            <i class="fas fa-times text-xl"></i>
        </button>

        <div class="text-center mb-8 pt-4">
            <span class="inline-block mb-3 text-brand font-extrabold uppercase tracking-[0.25em] text-xs">
                Atendimento comercial
            </span>

            <h2 class="text-3xl md:text-4xl font-heading font-extrabold text-gray-900 dark:text-white mb-3">
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
                    <input type="text" id="empresa" required class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">CNPJ *</label>
                    <input type="text" id="cnpj" required class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-5">
                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Responsável *</label>
                    <input type="text" id="responsavel" required class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                </div>

                <div>
                    <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">Telefone *</label>
                    <input type="tel" id="telefone" required class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                </div>
            </div>

            <div>
                <label class="block text-sm font-bold text-gray-700 dark:text-gray-300 mb-2">
                    Serviço de Interesse *
                </label>

                <select id="servico" required class="w-full px-4 py-3 rounded-xl bg-gray-50 dark:bg-[#171717] border border-gray-300 dark:border-gray-700 text-gray-900 dark:text-white focus:outline-none focus:ring-2 focus:ring-brand focus:border-brand transition">
                    <option value="" disabled selected>Selecione uma opção...</option>
                    <option value="Gestão de Resíduos">Gestão de Resíduos</option>
                    <option value="Logística e Transporte">Logística e Transporte</option>
                    <option value="Comercialização">Comercialização</option>
                    <option value="Acondicionamento de Resíduos">Acondicionamento de Resíduos</option>
                    <option value="Destinação Correta">Destinação Correta</option>
                    <option value="Descomissionamento Industrial">Descomissionamento Industrial</option>
                    <option value="Transporte e Locação de Equipamentos">Transporte e Locação de Equipamentos</option>
                </select>
            </div>

            <div class="flex items-start mt-4 bg-gray-50 dark:bg-[#171717] p-4 rounded-xl border border-gray-200 dark:border-gray-800">
                <input type="checkbox" id="lgpd_aceite" required class="mt-1 w-5 h-5 text-brand bg-white dark:bg-[#101010] border-gray-300 dark:border-gray-600 rounded focus:ring-brand">

                <label for="lgpd_aceite" class="ml-3 text-sm font-medium text-gray-600 dark:text-gray-400 leading-relaxed">
                    Concordo com a Política de Privacidade e consinto com a coleta dos meus dados para fins exclusivos de contato comercial e elaboração de orçamento.
                </label>
            </div>

            <div class="pt-4 text-center">
                <button type="submit" class="w-full bg-brand hover:bg-brand-dark text-white font-bold py-4 px-10 rounded-full shadow-[0_0_20px_rgba(22,163,74,0.35)] transition duration-300 text-lg uppercase tracking-wide transform hover:-translate-y-1">
                    Enviar Solicitação
                </button>
            </div>
        </form>
    </div>
</div>
