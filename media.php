<?php
$pageTitle = "Media - Mariana Queirós";
include 'header.php'; ?>

<script src="https://cdn.tailwindcss.com"></script>

<style>
    .media-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .media-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(37, 99, 235, 0.3);
    }


    .reveal {
        opacity: 0;
        transition: all 1.2s cubic-bezier(0.17, 0.55, 0.55, 1);
    }

    .reveal.active {
        opacity: 1;
        transform: translate(0, 0) scale(1);
    }

    .from-left {
        transform: translateX(-80px);
    }

    .from-right {
        transform: translateX(80px);
    }

    .from-bottom {
        transform: translateY(80px);
    }


    #sparklesCanvas {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        pointer-events: none;
        z-index: 1;
    }
</style>

<canvas id="sparklesCanvas"></canvas>

<div class="fixed inset-0 bg-[#0b0216] -z-10"></div>

<main class="pt-24 min-h-screen relative z-10 text-white">
    <div class="container mx-auto px-6 py-12">

        <div class="text-center mb-16 reveal from-bottom">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="w-12 h-[2px] bg-gradient-to-r from-transparent to-blue-600"></span>
                <i class="fas fa-photo-video text-blue-600 text-xl"></i>
                <span class="w-12 h-[2px] bg-gradient-to-l from-transparent to-blue-600"></span>
            </div>
            <h1 class="text-5xl md:text-7xl font-black uppercase mb-4">
                <span class="bg-gradient-to-r from-blue-400 to-blue-600 bg-clip-text text-transparent">Media</span>
            </h1>
            <p class="text-gray-400 text-lg max-w-2xl mx-auto">Vídeos e fotografias dos melhores momentos</p>
        </div>

        <section class="mb-20 reveal from-left">
            <h2 class="text-3xl font-black uppercase mb-8 flex items-center gap-3">
                <i class="fas fa-video text-blue-500"></i>
                Vídeos
            </h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                <div class="media-card bg-white/5 border border-white/10 rounded-2xl overflow-hidden">
                    <div class="aspect-video">
                        <iframe src="https://www.youtube.com/embed/is8lQsfNdfQ" title="Video 1" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen class="w-full h-full">
                        </iframe>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-white mb-2">#ASKFCPortoW</h3>
                        <p class="text-gray-400 text-sm">Bastidores</p>
                    </div>
                </div>
                <div class="media-card bg-white/5 border border-white/10 rounded-2xl overflow-hidden">
                    <div class="aspect-video">
                        <iframe src="https://www.youtube.com/embed/9KsjSkRdBlg" title="Video 2" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen class="w-full h-full">
                        </iframe>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-white mb-2">Homenagem da AF Porto à Mariana Queirós</h3>
                        <p class="text-gray-400 text-sm">Entrevista</p>
                    </div>
                </div>
                <div class="media-card bg-white/5 border border-white/10 rounded-2xl overflow-hidden">
                    <div class="aspect-video">
                        <iframe src="https://www.youtube.com/embed/t81ZQHpx9SY" title="Mariana Queirós Short"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen class="w-full h-full">
                        </iframe>
                    </div>
                    <div class="p-4">
                        <h3 class="font-bold text-white mb-2">Homenagem às campeãs - Mariana Queirós</h3>
                        <p class="text-gray-400 text-sm">Short</p>
                    </div>
                </div>
    
        </section>

        <section class="reveal from-right">
            <h2 class="text-3xl font-black uppercase mb-8 flex items-center gap-3">
                <i class="fas fa-images text-blue-500"></i>
                Fotografias
            </h2>
            <div id="photo-gallery" class="grid grid-cols-2 md:grid-cols3 lg:grid-cols-4 gap-4 mb-8"></div>


            <div class="flex justify-center items-center gap-4 md:gap-8 mt-12 w-full select-none">

                <button id="prevBtn"
                    class="group w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 rounded-full transition-all disabled:opacity-30 disabled:cursor-not-allowed shadow-lg shadow-blue-900/50 hover:shadow-blue-800/50 hover:scale-110 active:scale-95">
                    <i
                        class="fas fa-chevron-left text-white text-lg md:text-xl group-hover:-translate-x-1 transition-transform"></i>
                </button>


                <div
                    class="px-6 py-3 bg-white/5 border border-white/10 rounded-full backdrop-blur-sm min-w-[120px] text-center">
                    <span id="pageInfo" class="text-white font-bold text-sm md:text-base tracking-wide"></span>
                </div>


                <button id="nextBtn"
                    class="group w-12 h-12 md:w-14 md:h-14 flex items-center justify-center bg-gradient-to-r from-blue-600 to-blue-700 hover:from-blue-500 hover:to-blue-600 rounded-full transition-all disabled:opacity-30 disabled:cursor-not-allowed shadow-lg shadow-blue-900/50 hover:shadow-blue-800/50 hover:scale-110 active:scale-95">
                    <i
                        class="fas fa-chevron-right text-white text-lg md:text-xl group-hover:translate-x-1 transition-transform"></i>
                </button>
            </div>
        </section>

        <section class="mt-20 reveal from-bottom">
            <h2 class="text-3xl font-black uppercase mb-8 flex items-center gap-3">
                <i class="fas fa-newspaper text-blue-500"></i>
                Imprensa
            </h2>
            <p class="text-gray-400 mb-8">Destaques na comunicação social</p>


            <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <a href="https://www.diariodesantotirso.pt/mariana-queiros-convocada-para-a-selecao-nacional-sub-18/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 0ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/marianaportugal.jpg" alt="Seleção Portugal"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-flag text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2025</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Convocada para Seleção Nacional Sub-18
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Mariana Queirós integra estágio de preparação da Seleção Portuguesa Sub-18 Feminina.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>


                <a href="https://www.fcporto.pt/pt/noticias/20250702-pt-quero-mostrar-que-este-voto-de-confianca-foi-merecido"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 100ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/renovacao.jpg" alt="Renovação FC Porto"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-pen-fancy text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2025</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            "Quero mostrar que este voto de confiança foi merecido"
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Entrevista oficial FC Porto sobre a renovação de contrato.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">FC Porto</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>



                <a href="https://www.diariodesantotirso.pt/mariana-queiros-convocada-para-a-selecao-nacional-de-sub-17/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 200ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/imagemnova37.jpg" alt="Seleção Sub-17"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-flag text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2025</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Convocada para Seleção Nacional Sub-17
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Integra convocatória da Seleção Nacional Feminina Sub-17 para estágio de preparação.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>


                <a href="https://www.diariodesantotirso.pt/mariana-queiros-marcou-na-goleada-do-fc-porto-por-28-golos/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 300ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/imagemnova23.jpg" alt="Goleada FC Porto"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-futbol text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2025</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Marcou na goleada do FC Porto por 28 golos!
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Mariana Queirós marcou na vitória esmagadora 28-0.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>







                <a href="https://www.diariodesantotirso.pt/mariana-queiros-assina-pelo-futebol-clube-do-porto/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 400ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/imagemnova26.jpg" alt="Assinatura FC Porto"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-pen-fancy text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Assina pelo Futebol Clube do Porto
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Com apenas 15 anos, Mariana assina pelo FC Porto e inicia nova etapa na carreira.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>


                <a href="https://www.diariodesantotirso.pt/mariana-queiros-sobe-a-segunda-divisao-nacional-com-o-sc-rio-tinto/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 500ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/subida.jpg" alt="Subida Divisão"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-arrow-up text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2024</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Sobe à Segunda Divisão Nacional
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Conquista subida de divisão com o SC Rio Tinto na época 2023/2024.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>


                <a href="https://www.diariodesantotirso.pt/mariana-queiros-convocada-para-a-selecao-nacional-de-sub-16/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 600ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/convocada.jpg" alt="Seleção Sub-16"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-flag text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2023</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Convocada para Seleção Nacional Sub-16
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Primeiras convocatórias para representar Portugal nas camadas jovens.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>


                <a href="https://www.diariodesantotirso.pt/mariana-queiros-sagra-se-campea-de-juniores-pelo-sc-rio-tinto/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 700ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/imagemnova30.jpg" alt="Campeã Juniores"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-trophy text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2023</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Campeã de Juniores pelo SC Rio Tinto
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Conquista o Campeonato Nacional de Juniores Femininos pelo Rio Tinto.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>


                <a href="https://www.diariodesantotirso.pt/jovem-atleta-de-rebordoes-venceu-torneio-inter-associacoes-de-futebol-feminino-sub-16/"
                    target="_blank" rel="noopener noreferrer"
                    class="group relative bg-white/5 border border-white/10 rounded-2xl overflow-hidden hover:border-blue-500/50 transition-all duration-300 h-[320px] block reveal from-bottom"
                    style="transition-delay: 800ms;">
                    <div class="absolute inset-0">
                        <img src="fotosmariana/imagemnova33.jpg" alt="Torneio Inter Associações"
                            class="w-full h-full object-contain bg-[#0b0216] group-hover:scale-105 transition-transform duration-500">
                        <div class="absolute inset-0 bg-gradient-to-t from-black via-black/80 to-black/40"></div>
                    </div>
                    <div class="relative p-6 h-full flex flex-col justify-end">
                        <div class="flex items-start justify-between mb-3">
                            <div
                                class="w-12 h-12 rounded-full bg-blue-600/30 backdrop-blur-sm flex items-center justify-center border border-blue-400/30">
                                <i class="fas fa-medal text-blue-400 text-xl"></i>
                            </div>
                            <span
                                class="text-xs text-blue-300 uppercase tracking-wider font-bold bg-blue-600/20 backdrop-blur-sm px-3 py-1 rounded-full border border-blue-400/30">2023</span>
                        </div>
                        <h3
                            class="text-xl font-bold text-white mb-2 drop-shadow-lg group-hover:text-blue-300 transition-colors">
                            Vencedora do Torneio Inter Associações Sub-16
                        </h3>
                        <p class="text-gray-200 text-sm mb-3 drop-shadow">
                            Conquista Torneio Inter Associações de Futebol Feminino pela AF Porto.
                        </p>
                        <div class="flex items-center justify-between">
                            <span class="text-xs text-blue-300 font-semibold">Diário de Santo Tirso</span>
                            <i
                                class="fas fa-arrow-right text-blue-300 group-hover:translate-x-1 transition-transform"></i>
                        </div>
                    </div>
                </a>



            </div>
        </section>
    </div>
</main>


<div id="lightbox" class="fixed inset-0 bg-black/95 z-50 hidden items-center justify-center p-4">
    <button id="closeLightbox"
        class="absolute top-4 right-4 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-2xl transition-all hover:scale-110">
        <i class="fas fa-times"></i>
    </button>

    <button id="prevPhoto"
        class="absolute left-4 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xl transition-all hover:scale-110">
        <i class="fas fa-chevron-left"></i>
    </button>

    <button id="nextPhoto"
        class="absolute right-4 w-12 h-12 rounded-full bg-white/10 hover:bg-white/20 flex items-center justify-center text-white text-xl transition-all hover:scale-110">
        <i class="fas fa-chevron-right"></i>
    </button>

    <div class="max-w-6xl max-h-[90vh] relative">
        <img id="lightboxImg" src="" alt="" class="max-w-full max-h-[90vh] object-contain rounded-lg">
        <p id="lightboxCaption" class="text-center text-white mt-4 text-lg font-semibold"></p>
    </div>
</div>

<script>
    const allPhotos = [
        { src: 'fotosmariana/novaimagemnova1.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/novaimagemnova2.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/novaimagemnova3.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/imagemnova.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/imagemnova2.jpg', caption: 'Stop the Purple' },
        { src: 'fotosmariana/imagemnova3.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/imagemnova4.jpg', caption: 'Comunhão com os Adeptos' },
        { src: 'fotosmariana/imagemnova5.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/imagemnova6.jpg', caption: 'Campeonato 2025/2026' },
        { src: 'fotosmariana/marianaportugal.jpg', caption: 'Estreia na Seleção Nacional' },
        { src: 'fotosmariana/imagemnova7.jpg', caption: 'Media Day' },
        { src: 'fotosmariana/dragao.jpg', caption: 'Jogo de Apresentação 2025/2026' },
        { src: 'fotosmariana/dragao3.jpg', caption: 'Jogo de Apresentação 2025/2026' },
        { src: 'fotosmariana/imagemnova9.jpg', caption: 'Renovação pelo FCPorto' },
        { src: 'fotosmariana/dragao2.jpg', caption: 'Renovação pelo FCPorto' },
        { src: 'fotosmariana/imagemnova10.jpg', caption: 'Renovação pelo FCPorto' },
        { src: 'fotosmariana/imagemnova11.jpg', caption: 'Renovação pelo FCPorto' },
        { src: 'fotosmariana/renovacao.jpg', caption: 'Foto em Familia' },
        { src: 'fotosmariana/fotocomtaca.jpg', caption: 'Campeã Nacional' },
        { src: 'fotosmariana/imagemnova12.jpg', caption: 'Celebrações por Ganhar o Campeonato' },
        { src: 'fotosmariana/3divisao.jpg', caption: 'Celebrações por Ganhar o Campeonato' },

        { src: 'fotosmariana/imagemnova14.jpg', caption: 'Celebrações por Ganhar o Campeonato' },
        { src: 'fotosmariana/imagemnova15.jpg', caption: 'Celebrações por Ganhar o Campeonato' },
        { src: 'fotosmariana/imagemnova16.jpg', caption: 'Celebrações por Ganhar o Campeonato' },
        { src: 'fotosmariana/imagemnova17.jpg', caption: '1 Mão da Final do Campeonato' },
        { src: 'fotosmariana/imagemnova18.jpg', caption: '1 Mão da Final do Campeonato' },
        { src: 'fotosmariana/imagemnova19.jpg', caption: 'Subida de Divisão' },
        { src: 'fotosmariana/imagemnova20.jpg', caption: 'Foto em Familia' },
        { src: 'fotosmariana/imagemnova21.jpg', caption: 'Subida de Divisão' },
        { src: 'fotosmariana/imagemnova22.jpg', caption: 'Campeonato 2024/2025' },
        { src: 'fotosmariana/imagemnova23.jpg', caption: 'Campeonato 2024/2025' },
        { src: 'fotosmariana/imagemnova24.jpg', caption: 'Primeiro Jogo no Dragão' },
        { src: 'fotosmariana/1jogo.jpg', caption: 'Primeiro Jogo no Dragão' },
        { src: 'fotosmariana/imagemnova25.jpg', caption: 'Primeiro Jogo no Dragão' },
        { src: 'fotosmariana/imagemnova27.jpg', caption: 'Foto em Familia' },
        { src: 'fotosmariana/imagemnova26.jpg', caption: 'Contração FC Porto' },

        { src: 'fotosmariana/imagemnova28.jpg', caption: 'Jogo pelo Rio Tinto' },
        { src: 'fotosmariana/imagemnova29.jpg', caption: 'Jogo pelo Rio Tinto' },
        { src: 'fotosmariana/imagemnova30.jpg', caption: 'Campeã pelo Rio Tinto sub19' },
        { src: 'fotosmariana/imagemnova32.jpg', caption: 'Campeã pelo Rio Tinto sub19' },
        { src: 'fotosmariana/imagemnova31.jpg', caption: 'Campeã pelo Rio Tinto sub17' },
        { src: 'fotosmariana/imagemnova33.jpg', caption: 'campeã do Torneio Inter Associações de Futebol Feminino Sub-16' },
        { src: 'fotosmariana/imagemnova34.jpg', caption: 'AF Porto' },
        { src: 'fotosmariana/imagemnova35.jpg', caption: 'AF Porto' },
        { src: 'fotosmariana/imagemnova36.jpg', caption: 'Tirsense' },
        { src: 'fotosmariana/imagemnova37.jpg', caption: 'Seleção Sub-16' },
    ];


    function preloadImages() {
        const startIndex = (currentPage - 1) * photosPerPage;
        const endIndex = Math.min(startIndex + photosPerPage * 2, allPhotos.length);

        for (let i = startIndex; i < endIndex; i++) {
            const img = new Image();
            img.src = allPhotos[i].src;
        }
    }

    const photosPerPage = 12;
    let currentPage = 1;
    let currentPhotoIndex = 0;
    const totalPages = Math.ceil(allPhotos.length / photosPerPage);

    function displayPhotos() {
        const gallery = document.getElementById('photo-gallery');
        const startIndex = (currentPage - 1) * photosPerPage;
        const endIndex = startIndex + photosPerPage;
        const photosToShow = allPhotos.slice(startIndex, endIndex);

        gallery.innerHTML = photosToShow.map((photo, index) => `
            <div class="media-card group relative aspect-square overflow-hidden rounded-xl border border-white/10 cursor-pointer photo-stagger" 
                style="opacity: 0; transform: translateY(30px); transition: all 0.5s ease; transition-delay: ${index * 80}ms;"
                onclick="openLightbox(${startIndex + index})">
                <img src="${photo.src}" alt="${photo.caption}" loading="lazy"
                    class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                <div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-300 flex items-end p-4">
                    <p class="text-white text-sm font-semibold">${photo.caption}</p>
                </div>
                <div class="absolute inset-0 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-300 bg-black/30">
                    <i class="fas fa-search-plus text-white text-3xl"></i>
                </div>
            </div>
        `).join('');


        setTimeout(() => {
            document.querySelectorAll('.photo-stagger').forEach(el => {
                el.style.opacity = '1';
                el.style.transform = 'translateY(0)';
            });
        }, 50);

        document.getElementById('pageInfo').textContent = `Página ${currentPage} de ${totalPages}`;
        document.getElementById('prevBtn').disabled = currentPage === 1;
        document.getElementById('nextBtn').disabled = currentPage === totalPages;


        preloadImages();
    }

    function openLightbox(index) {
        currentPhotoIndex = index;
        updateLightbox();
        document.getElementById('lightbox').classList.remove('hidden');
        document.getElementById('lightbox').classList.add('flex');
        document.body.style.overflow = 'hidden';
    }

    function closeLightbox() {
        document.getElementById('lightbox').classList.add('hidden');
        document.getElementById('lightbox').classList.remove('flex');
        document.body.style.overflow = 'auto';
    }

    function updateLightbox() {
        const photo = allPhotos[currentPhotoIndex];
        document.getElementById('lightboxImg').src = photo.src;
        document.getElementById('lightboxCaption').textContent = photo.caption;
    }

    function nextPhotoInLightbox() {
        currentPhotoIndex = (currentPhotoIndex + 1) % allPhotos.length;
        updateLightbox();
    }

    function prevPhotoInLightbox() {
        currentPhotoIndex = (currentPhotoIndex - 1 + allPhotos.length) % allPhotos.length;
        updateLightbox();
    }

    document.getElementById('closeLightbox').addEventListener('click', closeLightbox);
    document.getElementById('nextPhoto').addEventListener('click', nextPhotoInLightbox);
    document.getElementById('prevPhoto').addEventListener('click', prevPhotoInLightbox);

    document.getElementById('lightbox').addEventListener('click', (e) => {
        if (e.target.id === 'lightbox') closeLightbox();
    });

    document.addEventListener('keydown', (e) => {
        if (document.getElementById('lightbox').classList.contains('flex')) {
            if (e.key === 'Escape') closeLightbox();
            if (e.key === 'ArrowRight') nextPhotoInLightbox();
            if (e.key === 'ArrowLeft') prevPhotoInLightbox();
        }
    });

    document.getElementById('prevBtn').addEventListener('click', () => {
        if (currentPage > 1) {
            currentPage--;
            displayPhotos();
        }
    });

    document.getElementById('nextBtn').addEventListener('click', () => {
        if (currentPage < totalPages) {
            currentPage++;
            displayPhotos();
        }
    });

    displayPhotos();
</script>

<script>

    const reveals = document.querySelectorAll('.reveal');

    const revealObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, { threshold: 0.05 });

    reveals.forEach(reveal => revealObserver.observe(reveal));
</script>

<script>

    const canvas = document.getElementById('sparklesCanvas');
    const ctx = canvas.getContext('2d');

    function resizeCanvas() {
        canvas.width = window.innerWidth;
        canvas.height = window.innerHeight;
    }
    resizeCanvas();
    window.addEventListener('resize', resizeCanvas);

    const COLORS = ["#3b82f6", "#60a5fa", "#93c5fd", "#ffffff"];

    const sparkles = [];
    const isMobile = window.innerWidth < 768;
    const NUM_SPARKLES = isMobile ? 30 : 80;

    for (let i = 0; i < NUM_SPARKLES; i++) {
        sparkles.push({
            x: Math.random() * canvas.width,
            y: Math.random() * canvas.height,
            size: Math.random() * 3 + 1,
            alpha: Math.random(),
            alphaSpeed: (Math.random() - 0.5) * 0.02,
            color: COLORS[Math.floor(Math.random() * COLORS.length)]
        });
    }

    function animateSparkles() {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        sparkles.forEach(s => {
            s.alpha += s.alphaSpeed;
            if (s.alpha <= 0.1 || s.alpha >= 1) {
                s.alphaSpeed *= -1;
            }
            s.alpha = Math.max(0.1, Math.min(1, s.alpha));

            ctx.beginPath();
            ctx.arc(s.x, s.y, s.size, 0, Math.PI * 2);

            const hex = s.color;
            const r = parseInt(hex.slice(1, 3), 16);
            const g = parseInt(hex.slice(3, 5), 16);
            const b = parseInt(hex.slice(5, 7), 16);
            ctx.fillStyle = `rgba(${r}, ${g}, ${b}, ${s.alpha})`;
            ctx.fill();
        });

        requestAnimationFrame(animateSparkles);
    }

    animateSparkles();
</script>

<script>
    const galleryContainer = document.getElementById('photo-gallery');
    let touchStartX = 0;
    let touchEndX = 0;

    galleryContainer.addEventListener('touchstart', e => {
        touchStartX = e.changedTouches[0].screenX;
    }, {passive: true});

    galleryContainer.addEventListener('touchend', e => {
        touchEndX = e.changedTouches[0].screenX;
        handleSwipe();
    }, {passive: true});

    function handleSwipe() {
        const swipeThreshold = 50;
        
        if (touchEndX < touchStartX - swipeThreshold) {
            const nextBtn = document.getElementById('nextBtn');
            if (!nextBtn.disabled) nextBtn.click();
        }
        
        if (touchEndX > touchStartX + swipeThreshold) {
            const prevBtn = document.getElementById('prevBtn');
            if (!prevBtn.disabled) prevBtn.click();
        }
    }

    const lightboxEl = document.getElementById('lightbox');
    let lbTouchStartX = 0;
    let lbTouchEndX = 0;

    lightboxEl.addEventListener('touchstart', e => {
        lbTouchStartX = e.changedTouches[0].screenX;
    }, {passive: true});

    lightboxEl.addEventListener('touchend', e => {
        lbTouchEndX = e.changedTouches[0].screenX;
        handleLightboxSwipe();
    }, {passive: true});

    function handleLightboxSwipe() {
        const swipeThreshold = 50;
        
        if (lbTouchEndX < lbTouchStartX - swipeThreshold) {
            nextPhotoInLightbox();
        }
        
        if (lbTouchEndX > lbTouchStartX + swipeThreshold) {
            prevPhotoInLightbox();
        }
    }
</script>

<?php include 'footer.php'; ?>