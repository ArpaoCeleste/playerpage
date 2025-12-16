<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="favicon.png">
    <title><?php echo isset($pageTitle) ? $pageTitle : 'Mariana Queirós'; ?></title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .scroll-enter {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.8s ease-out;
        }

        .scroll-visible {
            opacity: 1;
            transform: translateY(0);
        }

   
        #scrollToTop {
            position: fixed;
            bottom: 30px;
            right: 30px;
            width: 50px;
            height: 50px;
            background: linear-gradient(135deg, #3b82f6, #2563eb);
            color: white;
            border: none;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            box-shadow: 0 4px 15px rgba(37, 99, 235, 0.4);
            transition: all 0.3s ease;
            opacity: 0;
            visibility: hidden;
            z-index: 9999;
        }

        #scrollToTop.show {
            opacity: 1;
            visibility: visible;
            animation: bounce 2s infinite;
        }

        #scrollToTop:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(37, 99, 235, 0.6);
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-10px);
            }

            60% {
                transform: translateY(-5px);
            }
        }
    </style>
</head>

<body class=" font-sans antialiased text-gray-800">

   
    <button id="scrollToTop" aria-label="Voltar ao topo">
        <i class="fas fa-chevron-up"></i>
    </button>

    <header id="main-header"
        class="fixed top-0 left-0 w-full z-[10001] transition-all duration-500 ease-in-out p-3 md:p-4 bg-transparent text-white">
        <div class="container mx-auto flex justify-between items-center relative">

            <a href="/"
                class="text-lg md:text-2xl font-bold tracking-[0.2em] uppercase flex items-center gap-3 group z-50 relative">
                <span class="text-2xl md:text-3xl transform group-hover:scale-110 duration-500 transition-transform">
                    <img src="fotosmariana/FCPortologo.png" class="h-8 md:h-10 w-auto">
                </span>
                <span
                    class="border-b-2 border-transparent group-hover:border-white transition-all duration-300 text-sm md:text-xl">Mariana
                    Queirós</span>
            </a>

            <nav class="hidden md:block">
                <ul class="flex space-x-10 font-bold text-sm tracking-widest">
                    <li><a href="/"
                            class="hover:text-blue-300 transition-colors uppercase relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all hover:after:w-full">Início</a>
                    </li>
                    <li><a href="sobre.php"
                            class="hover:text-blue-300 transition-colors uppercase relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all hover:after:w-full">Sobre</a>
                    </li>
                    <li><a href="media.php"
                            class="hover:text-blue-300 transition-colors uppercase relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all hover:after:w-full">Media</a>
                    </li>
                    <li><a href="index.php#highlights"
                            class="hover:text-blue-300 transition-colors uppercase relative after:content-[''] after:absolute after:-bottom-2 after:left-0 after:w-0 after:h-0.5 after:bg-blue-300 after:transition-all hover:after:w-full">Highlights</a>
                    </li>
                </ul>
            </nav>

            <button id="mobile-menu-btn" class="md:hidden text-2xl focus:outline-none z-50 relative p-2">
                <i class="fas fa-bars"></i>
            </button>
        </div>

       
        <div id="mobile-menu"
            class="hidden absolute top-full left-0 w-full bg-[#0b0216] border-b border-white/10 shadow-2xl flex flex-col items-center py-6 space-y-4 md:hidden z-[9999]">
            <a href="/"
                class="text-lg text-white uppercase tracking-widest hover:text-blue-400 transition-colors mobile-link block w-full text-center py-2">Início</a>
            <a href="sobre.php"
                class="text-lg text-white uppercase tracking-widest hover:text-blue-400 transition-colors mobile-link block w-full text-center py-2">Media</a>
            <a href="#media.php"
                class="text-lg text-white uppercase tracking-widest hover:text-blue-400 transition-colors mobile-link block w-full text-center py-2">Galeria</a>
            <a href="index.php#highlights"
                class="text-lg text-white uppercase tracking-widest hover:text-blue-400 transition-colors mobile-link block w-full text-center py-2">Highlights</a>
        </div>
    </header>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const menuBtn = document.getElementById('mobile-menu-btn');
            const mobileMenu = document.getElementById('mobile-menu');
            const header = document.getElementById('main-header');
            const icon = menuBtn.querySelector('i');
            const mobileLinks = document.querySelectorAll('.mobile-link');

            function updateHeaderBackground() {
                // If menu is open OR we are scrolled down, use solid background
                if (!mobileMenu.classList.contains('hidden') || window.scrollY > 50) {
                    header.style.backgroundColor = '#0b0216';
                    header.classList.add('shadow-lg');
                    header.classList.remove('p-6'); // Reset padding if it was expanded
                } else {
                    // Desktop at top AND menu closed -> Transparent
                    header.style.backgroundColor = 'transparent';
                    header.classList.remove('shadow-lg');
                    header.classList.add('p-6'); // Add padding for spacious look at top
                }
            }

            menuBtn.addEventListener('click', (e) => {
                e.stopPropagation();
                mobileMenu.classList.toggle('hidden');

                // Toggle Icon
                if (mobileMenu.classList.contains('hidden')) {
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                } else {
                    icon.classList.remove('fa-bars');
                    icon.classList.add('fa-times');
                }

                updateHeaderBackground();
            });

            // Close when clicking links
            mobileLinks.forEach(link => {
                link.addEventListener('click', () => {
                    mobileMenu.classList.add('hidden');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    updateHeaderBackground();
                });
            });

            // Close when clicking outside
            document.addEventListener('click', (e) => {
                if (!menuBtn.contains(e.target) && !mobileMenu.contains(e.target)) {
                    mobileMenu.classList.add('hidden');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    updateHeaderBackground();
                }
            });

            // Listen to scroll to update if menu is closed (keep consistency)
            window.addEventListener('scroll', updateHeaderBackground);
            // Listen to resize to handle mobile/desktop switch
            window.addEventListener('resize', updateHeaderBackground);

            // Initial check
            updateHeaderBackground();
        });
    </script>
</body>

</html>