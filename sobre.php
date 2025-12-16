<?php
$pageTitle = "Sobre Mim - Mariana Queirós";
include 'header.php';
?>

<script src="https://cdn.tailwindcss.com"></script>
<style>
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes fadeInLeft {
        from {
            opacity: 0;
            transform: translateX(-30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    @keyframes fadeInRight {
        from {
            opacity: 0;
            transform: translateX(30px);
        }

        to {
            opacity: 1;
            transform: translateX(0);
        }
    }

    .animate-fadeInUp {
        animation: fadeInUp 0.8s ease-out forwards;
    }

    .animate-fadeInLeft {
        animation: fadeInLeft 0.8s ease-out forwards;
    }

    .animate-fadeInRight {
        animation: fadeInRight 0.8s ease-out forwards;
    }

    .delay-100 {
        animation-delay: 0.1s;
    }

    .delay-200 {
        animation-delay: 0.2s;
    }

    .delay-300 {
        animation-delay: 0.3s;
    }

    .delay-400 {
        animation-delay: 0.4s;
    }

    .delay-500 {
        animation-delay: 0.5s;
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

    .photo-glow {
        position: relative;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .photo-glow::before {
        content: '';
        position: absolute;
        inset: -20px;
        background: radial-gradient(circle, rgba(12, 52, 117, 0.7) 0%, rgba(12, 52, 117, 0.7) 40%, transparent 70%);
        border-radius: 2rem;
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: -1;
        filter: blur(10px);
    }

    .photo-glow:hover {
        transform: scale(1.03);
        box-shadow: 0 0 40px rgba(12, 52, 117, 0.7), 0 0 80px rgba(12, 52, 117, 0.7);
    }

    .photo-glow:hover::before {
        opacity: 1;
    }


    .info-card-container {
        background: rgba(11, 2, 22, 0.8);
        backdrop-filter: blur(20px);
        border: 1px solid rgba(255, 255, 255, 0.1);
        border-radius: 1.5rem;
        padding: 2rem;
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
    <div class="container mx-auto px-6 py-8">

        <div class="flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-12 max-w-5xl mx-auto">


            <div class="lg:w-auto flex justify-center reveal from-left">
                <img src="fotosmariana/fotosobre.jpg"
                    class="photo-glow w-[350px] md:w-[450px] lg:w-[500px] h-auto object-contain rounded-2xl shadow-2xl">
                </img>
            </div>


            <div class="info-card-container flex flex-col gap-5 max-w-md w-full lg:w-auto reveal from-right">


                <div class="animate-fadeInRight delay-100">
                    <p class="text-blue-400 text-xs uppercase tracking-[0.3em] mb-2 text-center">FC Porto Feminino</p>
                    <h1 class="text-4xl md:text-3xl md:text-center font-black uppercase leading-none text-center">
                        <span class="text-white">Mariana</span>
                        <span class="text-blue-400">Queirós</span>
                    </h1>
                </div>


                <div class="grid grid-cols-3 gap-3 animate-fadeInRight delay-200">
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                        <p class="text-2xl font-black text-blue-400">17</p>
                        <p class="text-[10px] text-gray-400 uppercase">Anos</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                        <p class="text-2xl font-black text-blue-400">1.70</p>
                        <p class="text-[10px] text-gray-400 uppercase">Altura</p>
                    </div>
                    <div class="bg-white/5 border border-white/10 rounded-xl p-3 text-center">
                        <p class="text-2xl font-black text-blue-400">2</p>
                        <p class="text-[10px] text-gray-400 uppercase">Int.</p>
                    </div>
                </div>


                <div class="space-y-2 animate-fadeInRight delay-300">
                    <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-4 py-2">
                        <i class="fas fa-user text-blue-400 w-4 text-sm"></i>
                        <div>
                            <p class="text-[9px] text-gray-500 uppercase">Nome</p>
                            <p class="text-sm font-bold text-white">Mariana Rodrigues Queirós</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-4 py-2">
                        <i class="fas fa-calendar text-blue-400 w-4 text-sm"></i>
                        <div>
                            <p class="text-[9px] text-gray-500 uppercase">Nascimento</p>
                            <p class="text-sm font-bold text-white">25/11/2008</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-4 py-2">
                        <i class="fas fa-map-marker-alt text-blue-400 w-4 text-sm"></i>
                        <div>
                            <p class="text-[9px] text-gray-500 uppercase">Naturalidade</p>
                            <p class="text-sm font-bold text-white">Santo Tirso, Portugal</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-4 py-2">
                        <i class="fas fa-shield-alt text-blue-400 w-4 text-sm"></i>
                        <div>
                            <p class="text-[9px] text-gray-500 uppercase">Posição</p>
                            <p class="text-sm font-bold text-white">Defesa Central</p>
                        </div>
                    </div>
                    <div class="flex items-center gap-3 bg-white/5 border border-white/10 rounded-xl px-4 py-2">
                        <i class="fas fa-shoe-prints text-blue-400 w-4 text-sm"></i>
                        <div>
                            <p class="text-[9px] text-gray-500 uppercase">Pé Preferencial</p>
                            <p class="text-sm font-bold text-white">Direito</p>
                        </div>
                    </div>
                </div>


                <div class="flex flex-wrap gap-2 animate-fadeInRight delay-400">
                    <span
                        class="px-3 py-1 bg-blue-600/20 text-blue-300 rounded-full text-xs font-semibold border border-blue-500/30">
                        Defesa Central
                    </span>
                    <span
                        class="px-3 py-1 bg-blue-600/20 text-blue-300 rounded-full text-xs font-semibold border border-blue-500/30">
                        No Ativo
                    </span>
                    <span
                        class="px-3 py-1 bg-blue-600/20 text-blue-300 rounded-full text-xs font-semibold border border-blue-500/30">
                        Internacional
                    </span>
                </div>

            </div>
        </div>
    </div>


    <div class="container mx-auto px-6 py-12">


        <div class="grid grid-cols-2 md:grid-cols-4 gap-4 mb-12 reveal from-bottom">
            <div class="info-card-container text-center">
                <p class="text-4xl font-black text-blue-400 counter" data-target="46">0</p>
                <p class="text-xs text-gray-400 uppercase">Jogos Seniores</p>
            </div>
            <div class="info-card-container text-center">
                <p class="text-4xl font-black text-blue-400 counter" data-target="3">0</p>
                <p class="text-xs text-gray-400 uppercase">Golos Seniores</p>
            </div>
            <div class="info-card-container text-center">
                <p class="text-4xl font-black text-blue-400 counter" data-target="125">0</p>
                <p class="text-xs text-gray-400 uppercase">Jogos Formação</p>
            </div>
            <div class="info-card-container text-center">
                <p class="text-4xl font-black text-blue-400 counter" data-target="2">0</p>
                <p class="text-xs text-gray-400 uppercase">Int. Sub-18</p>
            </div>
        </div>


        <div class="info-card-container mb-8 reveal from-left">
            <h3 class="text-xl font-black text-white mb-4 flex items-center gap-2">
                <i class="fas fa-futbol text-blue-400"></i> Estatísticas Seniores
            </h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-gray-400 text-xs uppercase border-b border-white/10">
                            <th class="text-left py-2">Época</th>
                            <th class="text-left py-2">Clube</th>
                            <th class="text-center py-2">J</th>
                            <th class="text-center py-2">G</th>
                            <th class="text-center py-2">A</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        <tr class="border-b border-white/5">
                            <td class="py-2">2025/26</td>
                            <td class="py-2 flex items-center gap-2">
                                <img src="fotosmariana/FCPortologo.png" class="h-5 w-auto"> FC Porto Fem. B
                            </td>
                            <td class="text-center py-2">2</td>
                            <td class="text-center py-2">-</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2025/26</td>
                            <td class="py-2 flex items-center gap-2">
                                <img src="fotosmariana/FCPortologo.png" class="h-5 w-auto"> FC Porto Fem.
                            </td>
                            <td class="text-center py-2">5</td>
                            <td class="text-center py-2">-</td>
                            <td class="text-center py-2">2</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2024/25</td>
                            <td class="py-2 flex items-center gap-2">
                                <img src="fotosmariana/FCPortologo.png" class="h-5 w-auto"> FC Porto Fem.
                            </td>
                            <td class="text-center py-2">22</td>
                            <td class="text-center py-2">2</td>
                            <td class="text-center py-2">1</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2023/24</td>
                            <td class="py-2 flex items-center gap-2">
                                <img src="fotosmariana/riotinto.png" class="w-5 h-5"> SC Rio Tinto Fem.
                            </td>
                            <td class="text-center py-2">17</td>
                            <td class="text-center py-2">1</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="font-bold text-blue-400 border-t border-blue-500/30">
                            <td class="py-2" colspan="2">Total</td>
                            <td class="text-center py-2">46</td>
                            <td class="text-center py-2">3</td>
                            <td class="text-center py-2">3</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>


        <div class="info-card-container mb-8 reveal from-right" style="transition-delay: 100ms;">
            <h3 class="text-xl font-black text-white mb-4 flex items-center gap-2">
                <i class="fas fa-flag text-blue-400"></i> Seleção Nacional
            </h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-gray-400 text-xs uppercase border-b border-white/10">
                            <th class="text-left py-2">Seleção</th>
                            <th class="text-center py-2">J</th>
                            <th class="text-center py-2">G</th>
                            <th class="text-center py-2">A</th>
                        </tr>
                    </thead>
                    <tbody class="text-white">
                        <tr class="border-b border-white/5">
                            <td class="py-2 flex items-center gap-2">
                                <img src="https://flagcdn.com/w20/pt.png" class="w-5 h-3 rounded"> Portugal Sub-18
                                Fem.
                            </td>
                            <td class="text-center py-2">2</td>
                            <td class="text-center py-2">-</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <div class="info-card-container reveal from-bottom" style="transition-delay: 200ms;">
            <h3 class="text-xl font-black text-white mb-4 flex items-center gap-2">
                <i class="fas fa-graduation-cap text-blue-400"></i> Formação (125 Jogos)
            </h3>
            <div class="overflow-x-auto">
                <table class="w-full text-sm">
                    <thead>
                        <tr class="text-gray-400 text-xs uppercase border-b border-white/10">
                            <th class="text-left py-2">Época</th>
                            <th class="text-left py-2">Clube</th>
                            <th class="text-center py-2">J</th>
                            <th class="text-center py-2">G</th>
                        </tr>
                    </thead>
                    <tbody class="text-white text-xs">
                        <tr class="border-b border-white/5">
                            <td class="py-2">2024/25</td>
                            <td class="py-2">FC Porto Jun.B S17</td>
                            <td class="text-center py-2">3</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2023/24</td>
                            <td class="py-2">SC Rio Tinto Jun.A S19</td>
                            <td class="text-center py-2">14</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2022/23</td>
                            <td class="py-2">SC Rio Tinto Jun.A S19</td>
                            <td class="text-center py-2">14</td>
                            <td class="text-center py-2">4</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2022/23</td>
                            <td class="py-2">SC Rio Tinto Jun.C S15</td>
                            <td class="text-center py-2">24</td>
                            <td class="text-center py-2">2</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2021/22</td>
                            <td class="py-2">Tirsense Jun.C S15</td>
                            <td class="text-center py-2">24</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2019/20</td>
                            <td class="py-2">Tirsense Jun.D S13</td>
                            <td class="text-center py-2">14</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="border-b border-white/5">
                            <td class="py-2">2018/19</td>
                            <td class="py-2">Tirsense Fut.7 Jun.E S11</td>
                            <td class="text-center py-2">19</td>
                            <td class="text-center py-2">-</td>
                        </tr>
                        <tr class="font-bold text-blue-400 border-t border-blue-500/30">
                            <td class="py-2" colspan="2">Total</td>
                            <td class="text-center py-2">125</td>
                            <td class="text-center py-2">7</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>

        function animateCounter(element) {
            const target = parseInt(element.getAttribute('data-target'));
            const duration = 5000;
            const increment = target / (duration / 16);
            let current = 0;

            const updateCounter = () => {
                current += increment;
                if (current < target) {
                    element.textContent = Math.floor(current);
                    requestAnimationFrame(updateCounter);
                } else {
                    element.textContent = target;
                }
            };

            updateCounter();
        }


        const counters = document.querySelectorAll('.counter');
        const counterObserver = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting && entry.target.textContent === '0') {
                    animateCounter(entry.target);
                }
            });
        }, { threshold: 0.5 });

        counters.forEach(counter => counterObserver.observe(counter));
    </script>

</main>

<?php include 'footer.php'; ?>

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
            ctx.fillStyle = s.color.replace(')', `, ${s.alpha})`).replace('rgb', 'rgba').replace('#', '');


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

</body>

</html>