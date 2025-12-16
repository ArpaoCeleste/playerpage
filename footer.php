<footer class="bg-[#0b0216] text-white relative overflow-hidden">


    <div class="container mx-auto px-6 py-16">
        <div class="grid grid-cols-1 md:grid-cols-3 gap-12 items-center">


            <div class="text-center md:text-left">
                <div class="flex items-center justify-center md:justify-start gap-4 mb-4">
                    <img src="fotosmariana/FCPortologo.png" alt="FC Porto" class="w-14 h-14 object-contain">
                    <div>
                        <h3 class="text-xl font-black uppercase tracking-wider">Mariana</h3>
                        <p class="text-blue-400 text-sm font-semibold tracking-[0.2em]">QUEIRÓS</p>
                    </div>
                </div>
                <p class="text-gray-500 text-sm">Defesa Central | FC Porto Feminino</p>
            </div>


            <div class="text-center">
                <h4 class="text-xs uppercase tracking-[0.3em] text-gray-500 mb-4">Navegação</h4>
                <div class="flex justify-center gap-8">
                    <a href="index.php"
                        class="text-gray-400 hover:text-white transition-colors text-sm uppercase tracking-wider">Início</a>
                    <a href="sobre.php"
                        class="text-gray-400 hover:text-white transition-colors text-sm uppercase tracking-wider">Sobre</a>
                    <a href="media.php"
                        class="text-gray-400 hover:text-white transition-colors text-sm uppercase tracking-wider">Media</a>
                    <a href="index.php#highlights"
                        class="text-gray-400 hover:text-white transition-colors text-sm uppercase tracking-wider">Highlights</a>
                </div>
            </div>


            <div class="text-center md:text-right">
                <h4 class="text-xs uppercase tracking-[0.3em] text-gray-500 mb-4">Redes Sociais</h4>
                <div class="flex justify-center md:justify-end gap-4 mr-0 md:mr-4">
                    <a href="https://www.instagram.com/marianaqueiros03/"
                        class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-blue-700 hover:border-blue-700 transition-all">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="https://www.facebook.com/mariana.queiros.3760430"
                        class="w-10 h-10 rounded-full bg-white/5 border border-white/10 flex items-center justify-center text-gray-400 hover:text-white hover:bg-blue-600 hover:border-blue-600 transition-all">
                        <i class="fab fa-facebook"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="mt-12 pt-8 border-t border-white/5 flex flex-col md:flex-row justify-between items-center gap-4">
            <p class="text-gray-600 text-xs tracking-wider">© 2025 Mariana Queirós. Todos os direitos reservados.</p>
            <div class="flex items-center gap-2">
                <span class="text-gray-600 text-xs">Feito com</span>
                <i class="fas fa-heart text-blue-500 text-xs animate-pulse"></i>
                <span class="text-gray-600 text-xs">para a Mariana Queirós</span>
            </div>
        </div>
    </div>
</footer>

<script>

    const scrollToTopBtn = document.getElementById('scrollToTop');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 300) {
            scrollToTopBtn.classList.add('show');
        } else {
            scrollToTopBtn.classList.remove('show');
        }
    });

    scrollToTopBtn.addEventListener('click', function () {
        window.scrollTo({
            top: 0,
            behavior: 'smooth'
        });
    });
</script>

</body>

</html>