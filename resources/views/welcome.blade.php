<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TierraStone</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(28px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes slideRight {
            from {
                opacity: 0;
                transform: translateX(-24px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes scaleIn {
            from {
                opacity: 0;
                transform: scale(0.93);
            }

            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        @keyframes navDrop {
            from {
                opacity: 0;
                transform: translateY(-100%);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }


        .anim {
            opacity: 0;
        }

        /* Variants */
        .anim-nav {
            animation: navDrop .5s cubic-bezier(.4, 0, .2, 1) forwards;
        }

        .anim-fade-up {
            animation: fadeUp .6s cubic-bezier(.4, 0, .2, 1) forwards;
        }

        .anim-fade {
            animation: fadeIn .7s ease forwards;
        }

        .anim-slide-r {
            animation: slideRight .6s cubic-bezier(.4, 0, .2, 1) forwards;
        }

        .anim-scale {
            animation: scaleIn .65s cubic-bezier(.34, 1.3, .64, 1) forwards;
        }

        /* Stagger delays */
        .d-1 {
            animation-delay: 80ms;
        }

        .d-2 {
            animation-delay: 160ms;
        }

        .d-3 {
            animation-delay: 240ms;
        }

        .d-4 {
            animation-delay: 320ms;
        }

        .d-5 {
            animation-delay: 400ms;
        }

        .d-6 {
            animation-delay: 480ms;
        }

        .d-7 {
            animation-delay: 560ms;
        }

        /* Product cards — scroll reveal */
        .card-reveal {
            opacity: 0;
            transform: translateY(32px);
            transition: opacity .5s ease, transform .5s ease;
        }

        .card-reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        /* Image hover zoom */
        .hero-img-wrap {
            overflow: hidden;
            border-radius: 1.5rem;
        }

        .hero-img-wrap img {
            transition: transform 6s ease;
        }

        .hero-img-wrap:hover img {
            transform: scale(1.04);
        }

        /* Nav link underline slide */
        nav a.nav-link {
            position: relative;
        }

        nav a.nav-link::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 0;
            height: 2px;
            background: #2563eb;
            transition: width .25s ease;
        }

        nav a.nav-link:hover::after {
            width: 100%;
        }

        /* Pulse ring on Order Now */
        .order-btn {
            position: relative;
        }

        .order-btn::before {
            content: '';
            position: absolute;
            inset: -3px;
            border-radius: 999px;
            border: 2px solid rgba(37, 99, 235, .4);
            animation: pulseRing 2.2s ease infinite;
            pointer-events: none;
        }

        @keyframes pulseRing {
            0% {
                transform: scale(1);
                opacity: .6;
            }

            60% {
                transform: scale(1.12);
                opacity: 0;
            }

            100% {
                transform: scale(1.12);
                opacity: 0;
            }
        }
    </style>
</head>

<body class="bg-slate-50 font-sans text-slate-900">

    <!-- NAV -->
    <nav class="anim anim-nav sticky top-0 z-50 bg-white/80 backdrop-blur-md border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold tracking-tight text-slate-800">TIERRA<span class="text-blue-600">STONE</span></h1>
            <div class="space-x-6 hidden md:flex items-center font-medium">
                <a href="#about" class="nav-link hover:text-blue-600 transition">About</a>
                <a href="#products" class="nav-link hover:text-blue-600 transition">Products</a>
                <a href="{{ route('orders.track') }}" class="nav-link hover:text-blue-600 transition flex items-center gap-1.5">
                    <i class="fa-solid fa-magnifying-glass text-sm"></i> Lacak Pesanan
                </a>
                <a href="{{ route('order') }}" class="order-btn bg-blue-600 text-white px-6 py-2 rounded-full hover:bg-blue-700 transition shadow-lg shadow-blue-200">
                    Order Now
                </a>
            </div>
            <div class="md:hidden flex items-center gap-3">
                <a href="{{ route('orders.track') }}" class="text-slate-600 hover:text-blue-600 transition text-sm">
                    <i class="fa-solid fa-magnifying-glass"></i>
                </a>
                <a href="{{ route('order') }}" class="bg-blue-600 text-white px-4 py-2 rounded-full text-sm hover:bg-blue-700 transition">Order Now</a>
            </div>
        </div>
    </nav>

    <!-- HERO -->
    <header class="relative py-24 overflow-hidden">
        <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

            <div>
                <span class="anim anim-slide-r d-1 inline-block text-blue-600 font-semibold tracking-wider uppercase text-sm">
                    Premium Stone Supplier
                </span>
                <h2 class="anim anim-fade-up d-2 text-5xl md:text-6xl font-extrabold mt-4 leading-tight">
                    Membangun Estetika dengan <span class="text-blue-600">Batu Alam</span> Pilihan.
                </h2>
                <p class="anim anim-fade-up d-3 text-lg text-slate-600 mt-6 leading-relaxed">
                    Penyedia batu alam berkualitas tinggi untuk proyek konstruksi, landscape, dan desain interior Anda. Kuat, elegan, dan tahan lama.
                </p>
                <div class="anim anim-fade-up d-4 mt-10 flex gap-4 flex-wrap">
                    <a href="#products" class="bg-slate-800 text-white px-8 py-4 rounded-xl font-bold hover:bg-slate-900 transition flex items-center gap-2">
                        Lihat Produk <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    <a href="{{ route('orders.track') }}" class="border border-slate-300 text-slate-700 px-8 py-4 rounded-xl font-bold hover:border-blue-500 hover:text-blue-600 transition flex items-center gap-2">
                        <i class="fa-solid fa-magnifying-glass"></i> Lacak Pesanan
                    </a>
                </div>
            </div>

            <div class="relative">
                <div class="anim anim-scale d-5 hero-img-wrap w-full h-[400px] bg-slate-200 shadow-2xl border-8 border-white">
                    <img src="https://static.wixstatic.com/media/ef7d36_c13fa813c9cc4cceb1e5acbda44759a4~mv2.png/v1/fill/w_600,h_600,al_c,lg_1,q_85,enc_avif,quality_auto/Icon.png"
                        alt="Stone Texture" class="w-full h-full object-cover">
                </div>
                <!-- Floating badge -->
                <div class="anim anim-fade d-7 absolute -bottom-4 -left-4 bg-white rounded-2xl shadow-xl px-4 py-3 flex items-center gap-3 border border-slate-100">
                    <div class="w-9 h-9 rounded-xl bg-blue-50 grid place-items-center text-blue-600 flex-shrink-0">
                        <i class="fa-solid fa-shield-halved text-sm"></i>
                    </div>
                    <div>
                        <p class="text-xs font-bold text-slate-700">Kualitas Terjamin</p>
                        <p class="text-xs text-slate-400">100% Batu Alam Asli</p>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <!-- PRODUCTS -->
    <section id="products" class="py-24 bg-white">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <h3 class="text-3xl font-bold">Produk Unggulan</h3>
            <div class="grid md:grid-cols-3 gap-8 mt-12">

                <div class="card-reveal group p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:border-blue-500 hover:shadow-xl transition-all duration-300" style="transition-delay:0ms">
                    <div class="h-48 bg-slate-200 rounded-xl mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1590065582372-df56824f9231?auto=format&fit=crop&q=80&w=400" alt="Marble" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h4 class="text-xl font-bold">Marmer Premium</h4>
                    <p class="text-slate-500 mt-2">Koleksi marmer dengan motif eksklusif untuk lantai dan dinding.</p>
                    <a href="{{ route('order') }}?product=Marmer+Premium" class="mt-4 inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:underline">
                        Pesan Sekarang <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

                <div class="card-reveal group p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:border-blue-500 hover:shadow-xl transition-all duration-300" style="transition-delay:120ms">
                    <div class="h-48 bg-slate-200 rounded-xl mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1533003057134-297c4f74f762?auto=format&fit=crop&q=80&w=400" alt="Granite" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h4 class="text-xl font-bold">Granit Alam</h4>
                    <p class="text-slate-500 mt-2">Daya tahan luar biasa untuk area outdoor dan dapur.</p>
                    <a href="{{ route('order') }}?product=Granit+Alam" class="mt-4 inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:underline">
                        Pesan Sekarang <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

                <div class="card-reveal group p-6 bg-slate-50 rounded-2xl border border-slate-100 hover:border-blue-500 hover:shadow-xl transition-all duration-300" style="transition-delay:240ms">
                    <div class="h-48 bg-slate-200 rounded-xl mb-6 overflow-hidden">
                        <img src="https://images.unsplash.com/photo-1504148455328-c376907d081c?auto=format&fit=crop&q=80&w=400" alt="Landscape" class="w-full h-full object-cover group-hover:scale-110 transition duration-500">
                    </div>
                    <h4 class="text-xl font-bold">Batu Landscape</h4>
                    <p class="text-slate-500 mt-2">Mempercantik taman dan kolam dengan nuansa alami.</p>
                    <a href="{{ route('order') }}?product=Batu+Landscape" class="mt-4 inline-flex items-center gap-2 text-blue-600 font-semibold text-sm hover:underline">
                        Pesan Sekarang <i class="fa-solid fa-arrow-right text-xs"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

    <!-- CTA -->
    <section class="py-20 bg-blue-600">
        <div class="max-w-4xl mx-auto px-6 text-center text-white">
            <h2 class="text-4xl font-bold">Siap Memulai Proyek Anda?</h2>
            <p class="mt-4 text-blue-100 text-lg">Konsultasikan kebutuhan batu alam Anda secara gratis dengan tim ahli kami.</p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center mt-8">
                <a href="{{ route('order') }}"
                    class="inline-flex items-center justify-center gap-2 bg-white text-blue-600 px-10 py-4 rounded-xl font-bold text-xl hover:bg-slate-100 transition shadow-2xl"
                    style="transition: transform .15s ease, background .2s;"
                    onmouseover="this.style.transform='scale(1.04)'"
                    onmouseout="this.style.transform='scale(1)'">
                    <i class="fa-solid fa-pen-to-square"></i> Buat Pesanan
                </a>
                <a href="{{ route('orders.track') }}"
                    class="inline-flex items-center justify-center gap-2 bg-blue-500 text-white border border-blue-400 px-8 py-4 rounded-xl font-semibold text-lg hover:bg-blue-400 transition"
                    style="transition: transform .15s ease, background .2s;"
                    onmouseover="this.style.transform='scale(1.04)'"
                    onmouseout="this.style.transform='scale(1)'">
                    <i class="fa-solid fa-magnifying-glass"></i> Lacak Pesanan
                </a>
            </div>
        </div>
    </section>

    <footer class="py-12 bg-slate-900 text-slate-400">
        <div class="max-w-7xl mx-auto px-6 text-center">
            <p>&copy; 2026 OMS TierraStone. All rights reserved.</p>
        </div>
    </footer>

    <script>
        // Scroll reveal — IntersectionObserver, fire once per card
        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('visible');
                    observer.unobserve(entry.target);
                }
            });
        }, {
            threshold: 0.15
        });

        document.querySelectorAll('.card-reveal').forEach(el => observer.observe(el));
    </script>

</body>

</html>