<?php

$pageTitle = "Portefólio - Mariana Queirós";
include 'header.php'; ?>


<link rel="preload" as="image" href="fotosmariana/imagemnova26.jpg">
<link rel="preload" as="image" href="fotosmariana/1jogo.jpg">
<link rel="preload" as="image" href="fotosmariana/marianaportugal.jpg">
<link rel="preload" as="image" href="fotosmariana/fotocomtaca.jpg">
<link rel="preload" as="image" href="fotosmariana/renovacao.jpg">

<script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>

<style>
    @keyframes blob {
        0% {
            transform: translate(0px, 0px) scale(1);
        }

        33% {
            transform: translate(30px, -50px) scale(1.1);
        }

        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }

        100% {
            transform: translate(0px, 0px) scale(1);
        }
    }

    .animate-blob {
        animation: blob 7s infinite;
    }

    .animation-delay-2000 {
        animation-delay: 2s;
    }

    .animation-delay-4000 {
        animation-delay: 4s;
    }

    @keyframes fall-and-fade {
        0% {
            transform: translateY(-50px);
            opacity: 0;
            fill: #ffffff;
        }

        10% {
            opacity: 0.8;
            fill: #ffffff;
        }

        30% {
            fill: #dbeafe;
        }

        50% {
            opacity: 0.6;
            fill: #60a5fa;
        }

        80% {
            opacity: 0.4;
            fill: #1e3a8a;
        }

        95% {
            fill: #0b0216;
            opacity: 0.1;
        }

        100% {
            transform: translateY(110vh);
            opacity: 0;
        }
    }

    .bubble {
        animation: fall-and-fade linear infinite;
        fill: #ffffff;
    }

    .b1 {
        animation-duration: 25s;
        animation-delay: -2s;
        cx: 5%;
    }

    .b2 {
        animation-duration: 32s;
        animation-delay: -15s;
        cx: 15%;
    }

    .b3 {
        animation-duration: 22s;
        animation-delay: -8s;
        cx: 25%;
    }

    .b4 {
        animation-duration: 28s;
        animation-delay: -20s;
        cx: 35%;
    }

    .b5 {
        animation-duration: 35s;
        animation-delay: -5s;
        cx: 50%;
    }

    .b6 {
        animation-duration: 24s;
        animation-delay: -12s;
        cx: 65%;
    }

    .b7 {
        animation-duration: 30s;
        animation-delay: -25s;
        cx: 80%;
    }

    .b8 {
        animation-duration: 20s;
        animation-delay: -3s;
        cx: 90%;
    }

    .b9 {
        animation-duration: 26s;
        animation-delay: -18s;
        cx: 45%;
    }

    .b10 {
        animation-duration: 33s;
        animation-delay: -7s;
        cx: 10%;
    }

    .b11 {
        animation-duration: 29s;
        animation-delay: -22s;
        cx: 3%;
    }

    .b12 {
        animation-duration: 31s;
        animation-delay: -10s;
        cx: 18%;
    }

    .b13 {
        animation-duration: 23s;
        animation-delay: -1s;
        cx: 30%;
    }

    .b14 {
        animation-duration: 27s;
        animation-delay: -14s;
        cx: 42%;
    }

    .b15 {
        animation-duration: 34s;
        animation-delay: -28s;
        cx: 58%;
    }

    .b16 {
        animation-duration: 21s;
        animation-delay: -6s;
        cx: 72%;
    }

    .b17 {
        animation-duration: 29s;
        animation-delay: -19s;
        cx: 85%;
    }

    .b18 {
        animation-duration: 36s;
        animation-delay: -4s;
        cx: 95%;
    }

    .b19 {
        animation-duration: 25s;
        animation-delay: -11s;
        cx: 22%;
    }

    .b20 {
        animation-duration: 30s;
        animation-delay: -24s;
        cx: 60%;
    }

    .b21 {
        animation-duration: 28s;
        animation-delay: -9s;
        cx: 8%;
    }

    .b22 {
        animation-duration: 37s;
        animation-delay: -30s;
        cx: 92%;
    }

    .b23 {
        animation-duration: 24s;
        animation-delay: -16s;
        cx: 38%;
    }

    .b24 {
        animation-duration: 32s;
        animation-delay: -3s;
        cx: 52%;
    }

    .b25 {
        animation-duration: 26s;
        animation-delay: -21s;
        cx: 76%;
    }

    .b26 {
        animation-duration: 39s;
        animation-delay: -13s;
        cx: 12%;
    }

    .b27 {
        animation-duration: 22s;
        animation-delay: -5s;
        cx: 98%;
    }

    .b28 {
        animation-duration: 35s;
        animation-delay: -26s;
        cx: 48%;
    }

    .b29 {
        animation-duration: 29s;
        animation-delay: -17s;
        cx: 68%;
    }

    .b30 {
        animation-duration: 31s;
        animation-delay: -8s;
        cx: 82%;
    }

    .b31 {
        animation-duration: 27s;
        animation-delay: -23s;
        cx: 28%;
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

    .zoom-in {
        transform: scale(0.9);
    }
</style>

<section id="hero" class="relative min-h-screen flex items-center bg-[#0b0216] overflow-hidden pt-20 md:pt-0">

    <div id="particles-js" class="absolute inset-0 z-0 opacity-40 hidden md:block"></div>

    <div
        class="absolute top-0 left-0 w-72 h-72 md:w-96 md:h-96 bg-blue-600 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob">
    </div>
    <div
        class="absolute bottom-0 left-1/4 w-72 h-72 md:w-96 md:h-96 bg-indigo-900 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000">
    </div>

    <div class="absolute inset-0 z-0 pointer-events-none hidden md:block overflow-hidden">
        <svg class="w-full h-full" xmlns="http://www.w3.org/2000/svg">
            <defs>
                <linearGradient id="grad-white" x1="0%" y1="0%" x2="0%" y2="100%">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.8" />
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0.05" />
                </linearGradient>
            </defs>
            <g fill="url(#grad-white)">
                <circle r="2" class="bubble b1" cy="-20" />
                <circle r="3" class="bubble b2" cy="-20" />
                <circle r="1.5" class="bubble b3" cy="-20" />
                <circle r="2.5" class="bubble b4" cy="-20" />
                <circle r="3" class="bubble b5" cy="-20" />
                <circle r="2" class="bubble b6" cy="-20" />
                <circle r="2.5" class="bubble b7" cy="-20" />
                <circle r="1.5" class="bubble b8" cy="-20" />
                <circle r="2" class="bubble b9" cy="-20" />
                <circle r="3" class="bubble b10" cy="-20" />
                <circle r="1" class="bubble b11" cy="-20" />
                <circle r="2.5" class="bubble b12" cy="-20" />
                <circle r="2" class="bubble b13" cy="-20" />
                <circle r="1.5" class="bubble b14" cy="-20" />
                <circle r="3" class="bubble b15" cy="-20" />
                <circle r="2" class="bubble b16" cy="-20" />
                <circle r="2.5" class="bubble b17" cy="-20" />
                <circle r="1.5" class="bubble b18" cy="-20" />
                <circle r="2" class="bubble b19" cy="-20" />
                <circle r="3" class="bubble b20" cy="-20" />
                <circle r="2" class="bubble b21" cy="-20" />
                <circle r="1" class="bubble b22" cy="-20" />
                <circle r="3" class="bubble b23" cy="-20" />
                <circle r="2.5" class="bubble b24" cy="-20" />
                <circle r="1.5" class="bubble b25" cy="-20" />
                <circle r="2" class="bubble b26" cy="-20" />
                <circle r="3" class="bubble b27" cy="-20" />
                <circle r="1.5" class="bubble b28" cy="-20" />
                <circle r="2.5" class="bubble b29" cy="-20" />
                <circle r="2" class="bubble b30" cy="-20" />
                <circle r="1" class="bubble b31" cy="-20" />
            </g>
        </svg>
    </div>

    <div class="container mx-auto px-4 md:px-6 relative z-10 w-full h-full">
        <div class="flex flex-col md:flex-row items-center justify-between h-full gap-8 md:gap-0">

            <div
                class="w-full md:w-1/2 relative h-[45vh] md:h-[85vh] order-1 md:order-1 flex justify-start items-center reveal from-left">
                <div
                    class="absolute top-1/2 left-0 -translate-y-1/2 w-[280px] h-[280px] md:w-[600px] md:h-[600px] bg-blue-800/20 rounded-full blur-3xl animate-blob animation-delay-2000 -z-10">
                </div>
                <div class="relative w-full h-full md:w-[120%] md:-ml-20 overflow-visible ">
                    <img src="fotosmariana/fotocomtaca.jpg"
                        class="w-full h-full object-cover object-top md:object-center rounded-2xl  mask-image-fade transform transition-transform hover:scale-105 duration-1000">
                    <div
                        class="absolute inset-0 bg-gradient-to-t from-[#0b0216] via-[#0b0216]/20 to-transparent md:bg-gradient-to-r md:from-transparent md:via-[#0b0216]/10 md:to-[#0b0216]">
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 text-center text-white order-2 md:order-2 flex flex-col justify-center items-center pb-12 md:pb-0 z-20 reveal from-right"
                style="transition-delay: 200ms;">
                <div class="mb-4 inline-flex items-center justify-center gap-2">
                    <span class="w-8 md:w-12 h-[2px] bg-blue-500"></span>
                    <span class="text-blue-300 text-xs md:text-sm tracking-[0.3em] font-bold uppercase">Futebol Clube do
                        Porto</span>
                    <span class="w-8 md:w-12 h-[2px] bg-blue-500"></span>
                </div>

                <h1 class="text-4xl md:text-7xl font-black mb-6 tracking-tight leading-tight">
                    <span class="typing-text" id="heroName"></span><br>
                    <span
                        class="bg-gradient-to-r from-blue-400 via-blue-200 to-white bg-clip-text text-transparent typing-text"
                        id="heroSurname"></span>
                </h1>

                <p class="text-base md:text-lg text-gray-400 mb-8 max-w-xl mx-auto leading-relaxed font-light">
                    Acompanha os momentos exclusivos da nossa campeã nos relvados.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 justify-center w-full">
                    <a href="media.php"
                        class="px-8 py-3 md:py-4 bg-gradient-to-r from-blue-700 to-blue-900 text-white font-bold uppercase tracking-wider rounded-full shadow-lg hover:shadow-blue-500/25 hover:scale-105 transition-all duration-300 border border-blue-600/30 text-sm md:text-base">
                        Ver Media
                    </a>
                    <a href="sobre.php"
                        class="px-8 py-3 md:py-4 bg-transparent border border-white/20 text-white font-bold uppercase tracking-wider rounded-full hover:bg-white/5 hover:border-white/50 transition-all duration-300 text-sm md:text-base">
                        Sobre
                    </a>
                </div>


                <div class="mt-8 grid grid-cols-4 gap-3 md:gap-6 max-w-md mx-auto">
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-black text-white">17</div>
                        <div class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Anos</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-black text-blue-400">DC</div>
                        <div class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Posição</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-black text-white">1.70m</div>
                        <div class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Altura</div>
                    </div>
                    <div class="text-center">
                        <div class="text-xl md:text-2xl font-black text-blue-400">2</div>
                        <div class="text-[10px] md:text-xs text-gray-500 uppercase tracking-wider">Int. Jovens</div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 animate-bounce text-white/50 z-20 cursor-pointer hidden md:block"
        onclick="document.getElementById('titles').scrollIntoView({behavior: 'smooth'})">
        <i class="fas fa-chevron-down text-2xl"></i>
    </div>
</section>



<section id="trajectory" class="py-20  bg-white relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-gray-50 to-transparent"></div>

    <div class="container mx-auto px-6 relative z-10">

        <div class="text-center mb-16 md:mb-20 reveal from-bottom">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="w-12 h-[2px] bg-gradient-to-r from-transparent to-blue-600"></span>
                <i class="fas fa-route text-blue-600 text-xl"></i>
                <span class="w-12 h-[2px] bg-gradient-to-l from-transparent to-blue-600"></span>
            </div>
            <h2 class="text-4xl md:text-7xl font-black uppercase tracking-tight mb-4">
                <span class="bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">Trajetória</span>
            </h2>

        </div>


        <div class="flex flex-col md:flex-row items-center justify-center gap-4 md:gap-0 reveal from-bottom flex-wrap">


            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 md:w-28 md:h-28 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                    <img src="fotosmariana/saomartinho.png" alt="AR São Martinho" class="w-full h-full object-contain">
                </div>
                <h3 class="mt-3 text-sm md:text-lg font-bold text-gray-800">São Martinho</h3>
                <p class="text-blue-600 font-semibold text-xs">2015 - 2018</p>
                <p class="text-gray-500 text-[10px] mt-1">Iniciação</p>
            </div>


            <div class="hidden md:flex items-center px-2 md:px-4">
                <div class="w-8 md:w-12 h-[2px] bg-gradient-to-r from-blue-300 to-blue-500"></div>
                <i class="fas fa-chevron-right text-blue-500 text-sm"></i>
            </div>
            <div class="flex md:hidden items-center py-1">
                <i class="fas fa-chevron-down text-blue-500 text-sm"></i>
            </div>


            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 md:w-28 md:h-28 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                    <img src="fotosmariana/tirsense.png" alt="Tirsense" class="w-full h-full object-contain">
                </div>
                <h3 class="mt-3 text-sm md:text-lg font-bold text-gray-800">Tirsense</h3>
                <p class="text-blue-600 font-semibold text-xs">2018 - 2022</p>
                <p class="text-gray-500 text-[10px] mt-1">Formação</p>
            </div>


            <div class="hidden md:flex items-center px-2 md:px-4">
                <div class="w-8 md:w-12 h-[2px] bg-gradient-to-r from-blue-300 to-blue-500"></div>
                <i class="fas fa-chevron-right text-blue-500 text-sm"></i>
            </div>
            <div class="flex md:hidden items-center py-1">
                <i class="fas fa-chevron-down text-blue-500 text-sm"></i>
            </div>


            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 md:w-28 md:h-28 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                    <img src="fotosmariana/riotinto.png" alt="SC Rio Tinto" class="w-full h-full object-contain">
                </div>
                <h3 class="mt-3 text-sm md:text-lg font-bold text-gray-800">SC Rio Tinto</h3>
                <p class="text-blue-600 font-semibold text-xs">2022 - 2024</p>
                <p class="text-gray-500 text-[10px] mt-1">Sénior Fem.</p>
            </div>


            <div class="hidden md:flex items-center px-2 md:px-4">
                <div class="w-8 md:w-12 h-[2px] bg-gradient-to-r from-blue-300 to-blue-500"></div>
                <i class="fas fa-chevron-right text-blue-500 text-sm"></i>
            </div>
            <div class="flex md:hidden items-center py-1">
                <i class="fas fa-chevron-down text-blue-500 text-sm"></i>
            </div>


            <div class="flex flex-col items-center group">
                <div
                    class="w-20 h-20 md:w-28 md:h-28 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                    <img src="fotosmariana/FCPortologo.png" alt="FC Porto" class="w-full h-full object-contain">
                </div>
                <h3 class="mt-3 text-sm md:text-lg font-bold text-gray-800">FC Porto</h3>
                <p class="text-blue-600 font-semibold text-xs">2024 - Presente</p>
                <p class="text-gray-500 text-[10px] mt-1">Sénior Fem.</p>
            </div>

        </div>
        <br>

        <div class="mt-16 reveal from-bottom">
            <div class="inline-flex items-center gap-3 mb-4 w-full justify-center">
                <span class="w-12 h-[2px] bg-gradient-to-r from-transparent to-blue-600"></span>
                <i class="fas fa-flag text-blue-600 text-xl"></i>
                <span class="w-12 h-[2px] bg-gradient-to-l from-transparent to-blue-600"></span>
            </div>
            <h2 class="text-4xl md:text-7xl text-center font-black uppercase tracking-tight mb-12">
                <span class="bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">Seleções
                    Representadas</span>
            </h2>

            <div class="flex flex-col md:flex-row items-center justify-center gap-6 md:gap-8 max-w-5xl mx-auto">


                <div class="flex flex-col items-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                        <img src="fotosmariana/afporto.png" alt="AF Porto" class="w-full h-full object-contain">
                    </div>
                    <h4 class="mt-3 text-sm md:text-base font-bold text-gray-800">AF Porto</h4>
                    <p class="text-blue-600 font-semibold text-xs">Sub-16</p>
                </div>

                <div class="hidden md:flex items-center px-2">
                    <div class="w-8 h-[2px] bg-gradient-to-r from-blue-300 to-blue-500"></div>
                </div>
                <div class="flex md:hidden items-center py-1">
                    <i class="fas fa-chevron-down text-blue-500 text-sm"></i>
                </div>


                <div class="flex flex-col items-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                        <img src="fotosmariana/portugal.png" alt="Portugal Sub-16" class="w-full h-full object-contain">
                    </div>
                    <h4 class="mt-3 text-sm md:text-base font-bold text-gray-800">Portugal</h4>
                    <p class="text-blue-600 font-semibold text-xs">Sub-16</p>
                </div>

                <div class="hidden md:flex items-center px-2">
                    <div class="w-8 h-[2px] bg-gradient-to-r from-blue-300 to-blue-500"></div>
                </div>
                <div class="flex md:hidden items-center py-1">
                    <i class="fas fa-chevron-down text-blue-500 text-sm"></i>
                </div>


                <div class="flex flex-col items-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                        <img src="fotosmariana/portugal.png" alt="Portugal Sub-17" class="w-full h-full object-contain">
                    </div>
                    <h4 class="mt-3 text-sm md:text-base font-bold text-gray-800">Portugal</h4>
                    <p class="text-blue-600 font-semibold text-xs">Sub-17</p>
                </div>

                <div class="hidden md:flex items-center px-2">
                    <div class="w-8 h-[2px] bg-gradient-to-r from-blue-300 to-blue-500"></div>
                </div>
                <div class="flex md:hidden items-center py-1">
                    <i class="fas fa-chevron-down text-blue-500 text-sm"></i>
                </div>

                <div class="flex flex-col items-center group">
                    <div
                        class="w-20 h-20 md:w-24 md:h-24 rounded-full bg-gray-50 border border-gray-200 p-3 flex items-center justify-center transition-transform duration-300 group-hover:scale-110 shadow-xl shadow-blue-500/10">
                        <img src="fotosmariana/portugal.png" alt="Portugal Sub-18" class="w-full h-full object-contain">
                    </div>
                    <h4 class="mt-3 text-sm md:text-base font-bold text-gray-800">Portugal</h4>
                    <p class="text-blue-600 font-semibold text-xs">Sub-18</p>
                </div>

            </div>
        </div>

    </div>
</section>

<section id="titles" class="py-20 bg-white relative overflow-hidden">



    <div class="container mx-auto px-6 relative z-10">

        <div class="text-center mb-16 md:mb-20 reveal from-bottom">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="w-12 h-[2px] bg-gradient-to-r from-transparent to-blue-600"></span>
                <i class="fas fa-trophy text-blue-600 text-xl"></i>
                <span class="w-12 h-[2px] bg-gradient-to-l from-transparent to-blue-600"></span>
            </div>
            <h2 class="text-4xl md:text-7xl font-black uppercase tracking-tight mb-4">
                <span class="bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">Palmarés</span>
            </h2>
            <p class="text-gray-500 text-lg max-w-xl mx-auto">Conquistas que marcam uma carreira de sucesso</p>
        </div>


        <div class="grid grid-cols-1 md:grid-cols-3 gap-7 md:gap-8">


            <div class="relative reveal from-bottom select-none"
                style="transition-delay: 0ms; -webkit-tap-highlight-color: transparent;">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 blur transition-all duration-500">
                </div>
                <div
                    class="relative bg-white p-6 border border-gray-200 rounded-2xl h-full flex flex-col transition-all duration-500 shadow-xl shadow-blue-500/10">


                    <div class="w-full h-40 rounded-xl overflow-hidden mb-6 ">
                        <img src="fotosmariana/tacaligafutebolfeminino.jpg" alt="Troféu III Divisão"
                            class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>


                    <div
                        class="absolute top-8 right-8 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        2024/25
                    </div>

                    <h3
                        class="text-2xl md:text-3xl font-black text-gray-900 uppercase leading-tight mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        III Divisão
                    </h3>
                    <p class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-4">Futebol Feminino</p>


                    <div class="flex items-center gap-3 mb-4 text-gray-600">
                        <img src="fotosmariana/FCPortologo.png" alt="FC Porto"
                            class="w-8 h-8 rounded-full object-contain bg-white ">
                        <span class="font-semibold">FC Porto</span>
                    </div>


                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Competição Nacional</span>
                            <span class="text-blue-600 font-bold flex items-center gap-1">
                                <i class="fas fa-medal text-xs"></i> Campeã
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative reveal from-bottom select-none"
                style="transition-delay: 150ms; -webkit-tap-highlight-color: transparent;">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 blur transition-all duration-500">
                </div>
                <div
                    class="relative bg-white p-6 border border-gray-200 rounded-2xl h-full flex flex-col transition-all duration-500 shadow-xl shadow-blue-500/10">

                    <div class="w-full h-40 rounded-xl overflow-hidden mb-6 ">
                        <img src="fotosmariana/tacaligafutebolfeminino.jpg" alt="Troféu Camp. Nacional"
                            class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>


                    <div
                        class="absolute top-8 right-8 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        2022/23
                    </div>


                    <h3
                        class="text-2xl md:text-3xl font-black text-gray-900 uppercase leading-tight mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        Camp. Nacional
                    </h3>
                    <p class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-4">Juniores Feminino</p>


                    <div class="flex items-center gap-3 mb-4 text-gray-600">
                        <img src="fotosmariana/riotinto.png" alt="Rio Tinto"
                            class="w-8 h-8 rounded-full object-contain bg-white ">
                        <span class="font-semibold">Rio Tinto</span>
                    </div>


                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Competição Nacional</span>
                            <span class="text-blue-600 font-bold flex items-center gap-1">
                                <i class="fas fa-medal text-xs"></i> Campeã
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative reveal from-bottom select-none"
                style="transition-delay: 300ms; -webkit-tap-highlight-color: transparent;">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 blur transition-all duration-500">
                </div>
                <div
                    class="relative bg-white p-6 border border-gray-200 rounded-2xl h-full flex flex-col transition-all duration-500 shadow-xl shadow-blue-500/10">


                    <div class="w-full h-40 rounded-xl overflow-hidden mb-6 ">
                        <img src="fotosmariana/tacaligafutebolfeminino.jpg" alt="Troféu AF Porto"
                            class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>


                    <div
                        class="absolute top-8 right-8 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        2022/23
                    </div>


                    <h3
                        class="text-2xl md:text-3xl font-black text-gray-900 uppercase leading-tight mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        AF Porto
                    </h3>
                    <p class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-4">Juniores Feminino Fut7
                    </p>


                    <div class="flex items-center gap-3 mb-4 text-gray-600">
                        <img src="fotosmariana/riotinto.png" alt="FC Porto"
                            class="w-8 h-8 rounded-full object-contain bg-white ">
                        <span class="font-semibold">Rio Tinto</span>
                    </div>


                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Competição Distrital</span>
                            <span class="text-blue-600 font-bold flex items-center gap-1">
                                <i class="fas fa-medal text-xs"></i> Campeã
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative reveal from-bottom select-none"
                style="transition-delay: 300ms; -webkit-tap-highlight-color: transparent;">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 blur transition-all duration-500">
                </div>
                <div
                    class="relative bg-white p-6 border border-gray-200 rounded-2xl h-full flex flex-col transition-all duration-500 shadow-xl shadow-blue-500/10">


                    <div class="w-full h-40 rounded-xl overflow-hidden mb-6 ">
                        <img src="fotosmariana/tacaligafutebolfeminino.jpg" alt="Troféu AF Porto"
                            class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>


                    <div
                        class="absolute top-8 right-8 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        2022/23
                    </div>


                    <h3
                        class="text-2xl md:text-3xl font-black text-gray-900 uppercase leading-tight mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        Torneio Interassociações
                    </h3>
                    <p class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-4">Juniores Feminino
                        sub-16 Fut9
                    </p>


                    <div class="flex items-center gap-3 mb-4 text-gray-600">
                        <img src="fotosmariana/afporto.png" alt="FC Porto"
                            class="w-8 h-8 rounded-full object-contain bg-white ">
                        <span class="font-semibold">AF Porto</span>
                    </div>


                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Competição Distrital</span>
                            <span class="text-blue-600 font-bold flex items-center gap-1">
                                <i class="fas fa-medal text-xs"></i> Campeã
                            </span>
                        </div>
                    </div>
                </div>
            </div>


            <div class="relative reveal from-bottom select-none"
                style="transition-delay: 300ms; -webkit-tap-highlight-color: transparent;">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 blur transition-all duration-500">
                </div>
                <div
                    class="relative bg-white p-6 border border-gray-200 rounded-2xl h-full flex flex-col transition-all duration-500 shadow-xl shadow-blue-500/10">


                    <div class="w-full h-40 rounded-xl overflow-hidden mb-6 ">
                        <img src="fotosmariana/tacaligafutebolfeminino.jpg" alt="Troféu AF Porto"
                            class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>


                    <div
                        class="absolute top-8 right-8 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        2022/23
                    </div>


                    <h3
                        class="text-2xl md:text-3xl font-black text-gray-900 uppercase leading-tight mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        Liga Feminina Divisão de Elite
                    </h3>
                    <p class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-4">Iniciados Feminino
                        Sub-15</p>


                    <div class="flex items-center gap-3 mb-4 text-gray-600">
                        <img src="fotosmariana/riotinto.png" alt="FC Porto"
                            class="w-8 h-8 rounded-full object-contain bg-white ">
                        <span class="font-semibold">Rio Tinto</span>
                    </div>


                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Competição Nacional</span>
                            <span class="text-blue-600 font-bold flex items-center gap-1">
                                <i class="fas fa-medal text-xs"></i> Campeã
                            </span>
                        </div>
                    </div>
                </div>
            </div>

            <div class="relative reveal from-bottom select-none"
                style="transition-delay: 300ms; -webkit-tap-highlight-color: transparent;">
                <div
                    class="absolute -inset-0.5 bg-gradient-to-r from-blue-500 via-blue-600 to-blue-500 rounded-2xl opacity-0 group-hover:opacity-100 blur transition-all duration-500">
                </div>
                <div
                    class="relative bg-white p-6 border border-gray-200 rounded-2xl h-full flex flex-col transition-all duration-500 shadow-xl shadow-blue-500/10">


                    <div class="w-full h-40 rounded-xl overflow-hidden mb-6 ">
                        <img src="fotosmariana/tacaligafutebolfeminino.jpg" alt="Troféu AF Porto"
                            class="w-full h-full object-contain group-hover:scale-105 transition-transform duration-500">
                    </div>


                    <div
                        class="absolute top-8 right-8 bg-blue-600 text-white text-xs font-bold px-3 py-1 rounded-full shadow-lg">
                        2022/23
                    </div>


                    <h3
                        class="text-2xl md:text-3xl font-black text-gray-900 uppercase leading-tight mb-2 group-hover:text-blue-600 transition-colors duration-300">
                        Liga Feminina Divisão de Elite
                    </h3>
                    <p class="text-blue-600 text-sm font-semibold uppercase tracking-wider mb-4">Juniores Feminino
                        Sub-17</p>


                    <div class="flex items-center gap-3 mb-4 text-gray-600">
                        <img src="fotosmariana/riotinto.png" alt="FC Porto"
                            class="w-8 h-8 rounded-full object-contain bg-white ">
                        <span class="font-semibold">Rio Tinto</span>
                    </div>

                    <div class="mt-auto pt-4 border-t border-gray-100">
                        <div class="flex items-center justify-between text-sm">
                            <span class="text-gray-500">Competição Nacional</span>
                            <span class="text-blue-600 font-bold flex items-center gap-1">
                                <i class="fas fa-medal text-xs"></i> Campeã
                            </span>
                        </div>
                    </div>
                </div>
            </div>

        </div>





    </div>
</section>
<br>
<br>
<br>
<div class="text-center mb-12 relative z-20 reveal from-bottom">

    <h2 class="text-4xl md:text-6xl font-black text-white uppercase tracking-tight mb-4">
        <span class="bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">
            Momentos Especiais
        </span>
    </h2>
    <div class="w-24 h-1.5 bg-blue-600/50 mx-auto rounded-full"></div>
</div>

<section id="gallery-slider"
    class="relative w-full h-[85vh] min-h-[750px] bg-[#0b0216] overflow-hidden font-sans group reveal from-bottom">

    <div id="particles-js-gallery" class="absolute inset-0 z-0 opacity-20 pointer-events-none hidden md:block"></div>


    <div id="demo" class="absolute inset-0 w-full h-full z-10"></div>

    <div class="details absolute z-40 top-[15%] md:top-[18%] left-[5%] md:left-[10%] opacity-0 pointer-events-none"
        id="details-even">
        <div class="bg-black/40 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-white/10 shadow-2xl">
            <div class="place-box overflow-hidden h-12 mb-2">
                <div
                    class="text text-blue-400 text-lg md:text-xl font-bold tracking-widest uppercase relative pt-4 drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)]">
                </div>
            </div>
            <div class="title-box-1 overflow-hidden h-[50px] md:h-[80px]">
                <div
                    class="title-1 text-4xl md:text-6xl font-black text-white uppercase leading-none tracking-tighter drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)]">
                </div>
            </div>
            <div class="title-box-2 overflow-hidden h-[50px] md:h-[80px]">
                <div
                    class="title-2 text-4xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400 uppercase leading-none tracking-tighter drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)]">
                </div>
            </div>
            <div
                class="desc pl-4 border-l-2 border-blue-500/80 text-gray-100 mt-5 md:mt-6 max-w-sm md:max-w-lg text-sm md:text-lg font-normal leading-relaxed tracking-wide drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)] line-clamp-3 md:line-clamp-none">
            </div>
        </div>
    </div>

    <div class="details absolute z-40 top-[15%] md:top-[18%] left-[5%] md:left-[10%] opacity-0 pointer-events-none"
        id="details-odd">
        <div class="bg-black/40 backdrop-blur-md rounded-2xl p-6 md:p-8 border border-white/10 shadow-2xl">
            <div class="place-box overflow-hidden h-12 mb-2">
                <div
                    class="text text-blue-400 text-lg md:text-xl font-bold tracking-widest uppercase relative pt-4 drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)]">
                </div>
            </div>
            <div class="title-box-1 overflow-hidden h-[50px] md:h-[80px]">
                <div
                    class="title-1 text-4xl md:text-6xl font-black text-white uppercase leading-none tracking-tighter drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)]">
                </div>
            </div>
            <div class="title-box-2 overflow-hidden h-[50px] md:h-[80px]">
                <div
                    class="title-2 text-4xl md:text-6xl font-black text-transparent bg-clip-text bg-gradient-to-r from-blue-600 to-blue-400 uppercase leading-none tracking-tighter drop-shadow-[0_4px_4px_rgba(0,0,0,0.8)]">
                </div>
            </div>
            <div
                class="desc pl-4 border-l-2 border-blue-500/80 text-gray-100 mt-5 md:mt-6 max-w-sm md:max-w-lg text-sm md:text-lg font-normal leading-relaxed tracking-wide drop-shadow-[0_2px_2px_rgba(0,0,0,0.8)] line-clamp-3 md:line-clamp-none">
            </div>
        </div>
    </div>

    <div class="pagination absolute z-[60] flex items-center justify-between gap-4 opacity-0 pointer-events-none"
        id="pagination">

        <button
            class="w-10 h-10 flex-shrink-0 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white/10 transition-all bg-black/40 backdrop-blur-md pointer-events-auto hover:scale-110"
            onclick="forcePrev()">
            <i class="fas fa-chevron-left text-xs"></i>
        </button>

        <div
            class="flex items-center gap-4 flex-grow bg-black/40 backdrop-blur-md px-4 py-3 rounded-full border border-white/10 pointer-events-auto w-full">
            <div class="progress-sub-container flex-grow h-1.5 bg-white/20 rounded-full overflow-hidden relative">
                <div
                    class="progress-sub-foreground h-full bg-gradient-to-r from-blue-900 to-blue-500 w-0 transition-all duration-500 ease-out shadow-[0_0_10px_rgba(234,179,8,0.5)]">
                </div>
            </div>
            <div
                class="slide-numbers w-8 h-8 relative overflow-hidden text-white font-black text-lg flex items-center justify-center flex-shrink-0">
                <div id="slide-numbers-container">1</div>
            </div>
        </div>

        <button
            class="w-10 h-10 flex-shrink-0 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white/10 transition-all bg-black/40 backdrop-blur-md pointer-events-auto hover:scale-110"
            onclick="forceStep()">
            <i class="fas fa-chevron-right text-xs"></i>
        </button>

    </div>

    <div class="contain absolute inset-0 bg-[#0b0216] z-[100]"></div>

</section>



<section id="highlights" class="py-20 md:py-32  relative overflow-hidden">
    <div class="absolute top-0 left-0 w-full h-32 "></div>

    <div class="container mx-auto px-6 relative z-10">

        <div class="text-center mb-12 md:mb-16 reveal from-bottom">
            <div class="inline-flex items-center gap-3 mb-4">
                <span class="w-12 h-[2px] bg-gradient-to-r from-transparent to-blue-600"></span>
                <i class="fas fa-play-circle text-blue-600 text-xl"></i>
                <span class="w-12 h-[2px] bg-gradient-to-l from-transparent to-blue-600"></span>
            </div>
            <h2 class="text-4xl md:text-7xl font-black uppercase tracking-tight mb-4">
                <span class="bg-gradient-to-r from-blue-900 to-blue-600 bg-clip-text text-transparent">Highlights</span>
            </h2>
            <p class="text-gray-500 text-lg max-w-xl mx-auto">Os melhores momentos em campo</p>
        </div>


        <div class="max-w-4xl mx-auto reveal from-bottom">
            <div class="relative rounded-2xl overflow-hidden shadow-2xl shadow-blue-900/20 border border-white/10">
                <div class="aspect-video">
                    <iframe src="https://www.youtube.com/embed/bWu17Y6KIRc" title="Highlights" frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen class="w-full h-full">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>


<script>
    particlesJS("particles-js", {
        "particles": { "number": { "value": 60, "density": { "enable": true, "value_area": 800 } }, "color": { "value": "#ffffff" }, "shape": { "type": "circle" }, "opacity": { "value": 0.2, "random": true }, "size": { "value": 3, "random": true }, "line_linked": { "enable": true, "distance": 150, "color": "#ffffff", "opacity": 0.1, "width": 1 }, "move": { "enable": true, "speed": 1.5, "direction": "none", "random": false, "straight": false, "out_mode": "out", "bounce": false } },
        "interactivity": { "detect_on": "canvas", "events": { "onhover": { "enable": true, "mode": "grab" }, "onclick": { "enable": true, "mode": "push" }, "resize": true }, "modes": { "grab": { "distance": 140, "line_linked": { "opacity": 1 } } } }, "retina_detect": true
    });

    const header = document.getElementById('main-header');
    window.addEventListener('scroll', () => {
        if (window.scrollY > 50) {
            header.classList.remove('bg-transparent', 'p-6');
            header.classList.add('bg-[#0b0216]/90', 'backdrop-blur-md', 'shadow-lg', 'py-4', 'border-b', 'border-white/5');
        } else {
            header.classList.add('bg-transparent', 'p-6');
            header.classList.remove('bg-[#0b0216]/90', 'backdrop-blur-md', 'shadow-lg', 'py-4', 'border-b', 'border-white/5');
        }
    });



    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('active');
            } else {
                entry.target.classList.remove('active');
            }
        });
    }, { threshold: 0.05 });
    document.querySelectorAll('.reveal').forEach(el => observer.observe(el));


</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script>
    const data = [
        {
            place: 'Estádio do Dragão',
            title: 'ASSINATURA',
            title2: 'DE CONTRATO',
            description: '01/09/2025',
            image: 'fotosmariana/imagemnova26.jpg',
            position: 'object-center'
        },
        {
            place: 'Estádio do Dragão',
            title: 'JOGO DE',
            title2: 'ESTREIA',
            description: '01/09/2024',
            image: 'fotosmariana/1jogo.jpg',
            position: 'object-top'
        },
        {
            place: 'Seleção Portuguesa',
            title: 'JOGO DE',
            title2: 'ESTREIA',
            description: '24/10/2025',
            image: 'fotosmariana/marianaportugal.jpg',
            position: 'object-top'

        },

        {
            place: 'Estádio do Real Sc',
            title: 'CAMPEÃ',
            title2: 'NACIONAL',
            description: '9/6/2025',
            image: 'fotosmariana/fotocomtaca.jpg',
            position: 'object-center'
        },
        {
            place: 'Estádio do Dragão',
            title: 'RENOVAÇÃO',
            title2: 'DE CONTRATO',
            description: '2/7/2025',
            image: 'fotosmariana/renovacao.jpg',
            position: 'object-center'
        },
    ];

    const _ = (id) => document.getElementById(id);

    const isMobile = window.innerWidth < 768;

    const cards = data.map((i, index) =>
        `<div class="card absolute left-0 top-0 shadow-2xl overflow-hidden border border-white/20 origin-center transition-all duration-500 brightness-[0.7] bg-[#0b0216]" id="card${index}">
            <img src="${i.image}" class="relative w-full h-full object-contain z-10 drop-shadow-2xl"> 
            <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent z-20"></div> 
        </div>`
    ).join('');

    const cardContents = data.map((i, index) =>
        `<div class="card-content absolute left-0 top-0 text-white pl-1 pointer-events-none hidden md:block flex flex-col items-start" id="card-content-${index}">
            <div class="content-start w-8 h-1 bg-blue-500 rounded-full mb-2"></div>
            <div class="content-place text-[10px] font-bold uppercase tracking-widest text-blue-200 mb-1 w-full truncate">${i.place}</div>
            <div class="content-title-1 font-bold text-sm uppercase font-sans leading-none mb-0.5 w-full truncate">${i.title}</div>
            <div class="content-title-2 font-bold text-sm uppercase text-white font-sans leading-none w-full truncate">${i.title2}</div>
        </div>`
    ).join('');

    _('demo').innerHTML = cards + cardContents;

    let order = [0, 1, 2, 3, 4];
    let detailsEven = true;
    let offsetTop, offsetLeft, cardWidth, cardHeight, gap;
    let containerHeight, windowWidth;
    let isAnimating = false;
    const ease = "power2.inOut";

    function getCard(index) { return `#card${index}`; }
    function getCardContent(index) { return `#card-content-${index}`; }

    function init() {
        const [active, ...rest] = order;
        const detailsActive = detailsEven ? "#details-even" : "#details-odd";
        const detailsInactive = detailsEven ? "#details-odd" : "#details-even";

        const container = document.getElementById('gallery-slider');
        containerHeight = container.offsetHeight;
        windowWidth = window.innerWidth;
        const isMobile = windowWidth < 768;

        cardWidth = isMobile ? 120 : 180;
        cardHeight = isMobile ? 160 : 240;
        gap = isMobile ? 12 : 20;


        if (isMobile) {

            const shiftPercentage = 0.50;
            offsetLeft = (windowWidth - cardWidth) / 2 - (windowWidth * shiftPercentage);
            offsetTop = containerHeight - cardHeight - 80;



            gsap.set(".details", { top: "5px", left: "50%", x: "-50%", width: "95%", textAlign: "center" });
            gsap.set(".details .place-box", { justifyContent: "center", display: "flex", width: "100%" });
            gsap.set(".details .place-box .text", { textAlign: "center", width: "100%" });
            gsap.set(".details .desc", { margin: "0 auto", borderLeft: "none", borderTop: "2px solid rgba(59, 130, 246, 0.8)", paddingTop: "0.5rem" });

        } else {

            offsetLeft = windowWidth - 650;
            offsetTop = containerHeight - cardHeight - 200;

            gsap.set(".details", { top: "18%", left: "4%", x: 0, width: "auto", textAlign: "left" });
            gsap.set(".details .place-box", { justifyContent: "flex-start", display: "block" });
            gsap.set(".details .desc", { margin: "24px 0 0 0", borderLeft: "2px solid rgba(59, 130, 246, 0.8)", borderTop: "none", paddingTop: "0" });
        }

        const paginationWidth = isMobile ? 280 : (cardWidth * 3) + (gap * 2) + 60;

        gsap.set("#pagination", {
            left: isMobile ? '50%' : offsetLeft,
            x: isMobile ? '-50%' : 0,
            top: isMobile ? 'auto' : offsetTop + cardHeight + 100,
            bottom: isMobile ? '5%' : 'auto',
            width: paginationWidth,
            opacity: 0,
            zIndex: 60
        });

        gsap.set(getCard(active), { x: 0, y: 0, width: windowWidth, height: containerHeight, zIndex: 10, opacity: 1 });
        gsap.set(getCardContent(active), { x: 0, y: 0, opacity: 0 });

        gsap.set(detailsActive, { opacity: 0, zIndex: 22, x: isMobile ? "-50%" : -200 });
        gsap.set(detailsInactive, { opacity: 0, zIndex: 12 });
        gsap.set(`${detailsInactive} .text`, { y: 100 });
        gsap.set(`${detailsInactive} .title-1`, { y: 100 });
        gsap.set(`${detailsInactive} .title-2`, { y: 100 });
        gsap.set(`${detailsInactive} .desc`, { y: 50 });

        gsap.set(".progress-sub-foreground", { width: (100 / order.length) * (active + 1) + "%" });
        _('slide-numbers-container').innerText = active + 1;

        rest.forEach((i, index) => {
            gsap.set(getCard(i), {
                x: offsetLeft + (index * (cardWidth + gap)),
                y: offsetTop,
                width: cardWidth,
                height: cardHeight,
                zIndex: 30,
                borderRadius: 8,
                opacity: 1
            });
            gsap.set(getCardContent(i), {
                x: offsetLeft + (index * (cardWidth + gap)),
                zIndex: 40,
                y: offsetTop + cardHeight + 15,
                width: cardWidth,
                opacity: 1
            });
        });

        gsap.to(".contain", {
            x: windowWidth + 400, delay: 0.2, duration: 1, ease: "power4.out"
        });

        gsap.to("#pagination", { opacity: 1, ease, delay: 0.5, duration: 1 });


        if (isMobile) {
            gsap.to(detailsActive, { opacity: 1, x: "-50%", ease, delay: 0.5, duration: 1 });
        } else {
            gsap.to(detailsActive, { opacity: 1, x: 0, ease, delay: 0.5, duration: 1 });
        }

        updateDetails(detailsActive, order[0]);
        animateDetailsEntry(detailsActive);
    }

    function updateDetails(selector, index) {
        document.querySelector(`${selector} .place-box .text`).innerHTML = data[index].place;
        document.querySelector(`${selector} .title-1`).textContent = data[index].title;
        document.querySelector(`${selector} .title-2`).textContent = data[index].title2;
        document.querySelector(`${selector} .desc`).innerHTML = `<i class="fas fa-calendar-alt text-blue-500 mr-2"></i>${data[index].description}`;
    }

    function animateDetailsEntry(selector) {
        gsap.to(`${selector} .text`, { y: 0, duration: 0.7, ease });
        gsap.to(`${selector} .title-1`, { y: 0, delay: 0.1, duration: 0.7, ease });
        gsap.to(`${selector} .title-2`, { y: 0, delay: 0.1, duration: 0.7, ease });
        gsap.to(`${selector} .desc`, { y: 0, delay: 0.2, duration: 0.7, ease });
    }

    function step() {
        return new Promise((resolve) => {
            order.push(order.shift());
            runTransition(resolve);
        });
    }

    function stepPrev() {
        return new Promise((resolve) => {
            order.unshift(order.pop());
            runTransition(resolve);
        });
    }

    function runTransition(resolve) {
        detailsEven = !detailsEven;
        const detailsActive = detailsEven ? "#details-even" : "#details-odd";
        const detailsInactive = detailsEven ? "#details-odd" : "#details-even";

        const isMobile = window.innerWidth < 768;

        updateDetails(detailsActive, order[0]);
        _('slide-numbers-container').innerText = order[0] + 1;

        const [active, ...rest] = order;


        if (isMobile) {

            data.forEach((_, i) => {
                gsap.set(getCard(i), { opacity: 0, zIndex: 0 });
                gsap.set(getCardContent(i), { opacity: 0 });
            });


            gsap.set(getCard(active), {
                x: 0, y: 0, width: window.innerWidth, height: containerHeight,
                borderRadius: 0, opacity: 1, zIndex: 20, scale: 1
            });
            gsap.set(getCardContent(active), { opacity: 0 });


            gsap.set(detailsActive, { zIndex: 22, opacity: 1, x: "-50%", display: 'block' });
            gsap.set(detailsInactive, { opacity: 0, zIndex: 12 });
            gsap.set(`${detailsActive} .text`, { y: 0 });
            gsap.set(`${detailsActive} .title-1`, { y: 0 });
            gsap.set(`${detailsActive} .title-2`, { y: 0 });
            gsap.set(`${detailsActive} .desc`, { y: 0 });

            gsap.set(".progress-sub-foreground", { width: (100 / order.length) * (active + 1) + "%" });

            isAnimating = false;
            if (resolve) resolve();
            return;
        }


        gsap.set(detailsActive, { zIndex: 22, display: 'block' });
        gsap.set(detailsInactive, { zIndex: 12 });
        gsap.to(detailsActive, { opacity: 1, x: 0, delay: 0.2, ease });

        animateDetailsEntry(detailsActive);

        gsap.to(detailsInactive, { opacity: 0, x: -50, duration: 0.5 });
        gsap.set(`${detailsInactive} .text`, { y: 100 });
        gsap.set(`${detailsInactive} .title-1`, { y: 100 });
        gsap.set(`${detailsInactive} .title-2`, { y: 100 });
        gsap.set(`${detailsInactive} .desc`, { y: 50 });

        const prv = rest[rest.length - 1];

        gsap.set(getCard(prv), { zIndex: 10 });
        gsap.to(getCard(prv), { scale: 1.5, ease, duration: 0.5 });

        gsap.set(getCard(active), { zIndex: 20, opacity: 1 });
        gsap.to(getCard(active), {
            x: 0, y: 0, ease, width: window.innerWidth, height: containerHeight, borderRadius: 0, duration: 0.5,
            onComplete: () => {
                isAnimating = false;

                const lastIndex = rest.length - 1;
                const xNewPrv = offsetLeft + (lastIndex * (cardWidth + gap));

                gsap.killTweensOf(getCard(prv));

                gsap.set(getCard(prv), {
                    x: xNewPrv, y: offsetTop, width: cardWidth, height: cardHeight,
                    zIndex: 30, borderRadius: 8, scale: 1, opacity: 1
                });
                gsap.set(getCardContent(prv), {
                    x: xNewPrv, y: offsetTop + cardHeight + 15,
                    width: cardWidth, opacity: 1, zIndex: 40
                });

                if (resolve) resolve();
            }
        });
        gsap.to(getCardContent(active), { opacity: 0, duration: 0.3 });

        rest.forEach((i, index) => {
            const xNew = offsetLeft + (index * (cardWidth + gap));

            if (i !== prv) {
                gsap.set(getCard(i), { zIndex: 30 });
                gsap.to(getCard(i), {
                    x: xNew, y: offsetTop, width: cardWidth, height: cardHeight, ease,
                    borderRadius: 8, opacity: 1, scale: 1, duration: 0.5
                });

                gsap.to(getCardContent(i), {
                    x: xNew, y: offsetTop + cardHeight + 15,
                    width: cardWidth, opacity: 1, zIndex: 40, ease, duration: 0.5
                });
            }
        });

        gsap.to(".progress-sub-foreground", { width: (100 / order.length) * (active + 1) + "%", ease });
    }

    let autoPlayTimer;

    function startAutoPlay() {
        clearTimeout(autoPlayTimer);
        autoPlayTimer = setTimeout(() => {
            if (!isAnimating) {
                isAnimating = true;
                step().then(() => {
                    startAutoPlay();
                });
            }
        }, 4000);
    }

    async function loadImage(src) {
        return new Promise((resolve) => {
            let img = new Image();
            img.onload = () => resolve(img);
            img.onerror = () => { console.warn("Erro imagem:", src); resolve(null); };
            img.src = src;
        });
    }

    async function loadImages() {
        const promises = data.map(({ image }) => loadImage(image));
        return Promise.all(promises);
    }

    async function start() {
        await Promise.all(data.map(({ image }) => loadImage(image)));
        init();
        startAutoPlay();
    }

    window.forceStep = async function () {
        if (!isAnimating) {
            clearTimeout(autoPlayTimer);
            isAnimating = true;
            await step();
            isAnimating = false;
            startAutoPlay();
        }
    }

    window.forcePrev = async function () {
        if (!isAnimating) {
            clearTimeout(autoPlayTimer);
            isAnimating = true;
            await stepPrev();
            isAnimating = false;
            startAutoPlay();
        }
    }

    start();
</script>

<script>

    function typeText(element, text, delay = 100) {
        return new Promise(resolve => {
            let i = 0;
            const timer = setInterval(() => {
                if (i < text.length) {
                    element.textContent += text.charAt(i);
                    i++;
                } else {
                    clearInterval(timer);
                    resolve();
                }
            }, delay);
        });
    }


    window.addEventListener('load', async () => {
        const nameEl = document.getElementById('heroName');
        const surnameEl = document.getElementById('heroSurname');

        if (nameEl && surnameEl) {
            await new Promise(r => setTimeout(r, 500));
            await typeText(nameEl, 'Mariana', 120);
            await new Promise(r => setTimeout(r, 200));
            await typeText(surnameEl, 'Queirós', 120);
        }
    });
</script>