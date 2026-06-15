<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>

    <link rel="icon" type="image/png" href="{{ asset('images/favicon-desbarres.png') }}">

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Balises Principales -->
    <title>Artisan Desbarres David | Les Spécialistes en Toitures & Façades</title>
    <meta name="description" content="Artisans français de père en fils. Nettoyage, démoussage, couverture, ravalément, peinture, traitement, résine, hydrofuge, antimousse. Garantie 7 ans.">
    <meta name="author" content="Artisan Desbarres David">
    <meta name="robots" content="index, follow">
    <link class="canonical" href="{{ url()->current() }}">

    <!-- Open Graph -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Artisan Desbarres David">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Artisan Desbarres David">

    <!-- 1. FontAwesome (Icônes) -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- 2. Tailwind CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- 3. Votre style personnalisé -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="bg-gray-50 text-slate-800 font-sans antialiased">

<!-- TOP BAR INFO -->
<div class="bg-slate-900 text-white py-2 px-4 text-xs md:text-sm">
    <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-2">
        <div class="flex flex-wrap justify-center gap-4">
            <a href="tel:0642682410" title="Appeler" class="hover:text-orange-500 transition-colors">
                <i class="fa-solid fa-phone text-orange-500 mr-1"></i> 06 42 68 24 10
            </a>
            <a href="tel:0981833980" title="Appeler" class="hover:text-orange-500 transition-colors">
                <i class="fa-solid fa-phone text-orange-500 mr-1"></i> 09 81 83 39 80
            </a>
        </div>
        <div class="flex items-center gap-4 text-gray-300">
            <span><i class="fa-solid fa-shield-halved text-orange-500 mr-1"></i> Garantie 7 Ans</span>
            <span class="hidden md:inline">|</span>
            <span><i class="fa-solid fa-star text-yellow-400 mr-1"></i> Devis & Échantillons Gratuits</span>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="bg-white shadow-sm sticky top-0 z-50">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" title="Retour en haut de page" class="flex items-center gap-3">
            <div>
                <span class="block text-xl font-extrabold tracking-tight text-slate-900">Desbarres David</span>
                <span class="block text-[10px] uppercase tracking-widest text-orange-500 font-bold -mt-1">Toitures & Façades</span>
            </div>
        </a>

        <nav class="hidden md:flex items-center gap-6 font-semibold text-sm">
            <a href="#prestations" title="Voir nos services" class="hover:text-orange-500 transition-colors">Nos Services</a>
            <a href="#realisations" title="Voir nos réalisations" class="hover:text-orange-500 transition-colors">Nos Réalisations</a>
            <a href="#engagements" title="Voir nos engagements" class="hover:text-orange-500 transition-colors">Nos Engagements</a>
            <a href="#contact" title="Nous contacter" class="hover:text-orange-500 transition-colors">Contact & Devis</a>
        </nav>
    </div>
</header>

<!-- HERO SECTION -->
<section class="bg-gradient-to-b from-white to-orange-50/40 py-12 md:py-20 border-b border-gray-100 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 grid md:grid-cols-2 gap-10 items-center">

        <div class="space-y-6 z-10">
            <div class="inline-block bg-orange-100 text-orange-600 font-bold px-3 py-1 rounded-full text-xs uppercase tracking-wide">
                Artisans français de père en fils
            </div>
            <h1 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 leading-tight">
                <span class="text-orange-500">Desbarres David</span><br>
                Les Spécialistes en<br>Toitures & Façades
            </h1>

            <div class="flex flex-col sm:flex-row gap-3 pt-2">
                <a href="#contact" class="bg-orange-500 hover:bg-orange-600 text-white px-6 py-3 rounded-lg font-bold text-center transition-all hover:shadow-lg hover:shadow-orange-500/20">
                    Devis & Échantillons Gratuits
                </a>
                <a href="tel:0642682410" class="bg-slate-900 hover:bg-slate-800 text-white px-6 py-3 rounded-lg font-bold text-center transition-colors flex items-center justify-center gap-2">
                    <i class="fa-solid fa-phone"></i> 06 42 68 24 10
                </a>
            </div>
        </div>

        <div class="relative flex justify-center items-center">
            <div class="absolute w-72 h-72 bg-orange-200/60 rounded-full blur-3xl -z-10 animate-pulse"></div>
            <div class="absolute w-48 h-48 bg-slate-200/50 rounded-full blur-2xl translate-x-12 translate-y-12 -z-10"></div>

            <div class="relative p-3 bg-white rounded-3xl shadow-2xl border border-slate-100/80 max-w-md w-full overflow-hidden group">
                <img src="{{ asset('images/desbarres-hero.png') }}"
                     alt="Artisan Desbarres David"
                     class="w-full h-auto rounded-2xl object-cover transition-transform duration-500 group-hover:scale-102">
            </div>

            <div class="absolute -top-4 -right-3 bg-gradient-to-br from-orange-500 to-red-600 text-white w-20 h-20 rounded-full flex flex-col items-center justify-center text-center shadow-xl shadow-orange-500/30 font-bold text-xs p-1 transform rotate-12 transition-transform hover:scale-110 z-20">
                <span>Garantie</span>
                <span class="text-lg font-extrabold">7 Ans</span>
            </div>
        </div>

    </div>
</section>

<!-- SERVICES SECTION -->
<section id="prestations" class="py-16 bg-gray-50">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Service de Nettoyage</h2>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Nettoyage</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Démoussage</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Couverture</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Ravalement</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Peinture</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Traitement</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Résine</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Hydrofuge</h3>
            </div>

            <div class="bg-white rounded-2xl p-8 shadow-sm border border-gray-100 hover:shadow-md transition-shadow text-center">
                <h3 class="text-2xl font-extrabold text-slate-900 mb-2">Antimousse</h3>
            </div>

        </div>
    </div>
</section>

<!-- RÉALISATIONS SECTION -->
<section id="realisations" class="py-16 bg-white border-t border-gray-100 overflow-hidden">
    <div class="max-w-7xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Nos Réalisations</h2>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="realisations-carousel-wrapper relative group">

            <div class="flex realisations-carousel gap-6 overflow-x-auto pb-4 scroll-smooth snap-x snap-mandatory">

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/a.png') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/b.png') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/c.png') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/d.png') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105607.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105608.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105613.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105614.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105615.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105618.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

                <div class="carousel-item flex-none w-[85%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-gray-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105619.jpg') }}" alt="Réalisation toiture façade" class="w-full h-72 object-cover object-center hover:scale-105 transition-transform duration-300">
                </div>

            </div>

            <!-- Boutons Flèches -->
            <button class="carousel-prev absolute left-2 top-1/2 -translate-y-1/2 bg-white hover:bg-orange-500 hover:text-white text-slate-800 w-10 h-10 rounded-full shadow-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all z-10">
                <i class="fa-solid fa-chevron-left text-base"></i>
            </button>
            <button class="carousel-next absolute right-2 top-1/2 -translate-y-1/2 bg-white hover:bg-orange-500 hover:text-white text-slate-800 w-10 h-10 rounded-full shadow-lg flex items-center justify-center opacity-0 group-hover:opacity-100 transition-all z-10">
                <i class="fa-solid fa-chevron-right text-base"></i>
            </button>

        </div>
    </div>
</section>

<!-- ENGAGEMENTS SECTION -->
<section id="engagements" class="py-16 bg-white border-t border-b border-gray-100">
    <div class="max-w-6xl mx-auto px-4">

        <div class="text-center max-w-2xl mx-auto mb-12">
            <h2 class="text-3xl font-black text-slate-900">Pourquoi nous faire confiance ?</h2>
            <p class="text-gray-600 mt-2">Nos valeurs et notre engagement envers la qualité et l'excellence.</p>
            <div class="w-16 h-1 bg-orange-500 mx-auto mt-4 rounded-full"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-leaf"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Biodégradable à 95%</span>
            </div>
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-credit-card"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Paiement en plusieurs fois</span>
            </div>
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-shield-halved"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Assurance RC Pro</span>
            </div>
            <div class="p-4 flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-100 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-user-shield"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-700">Produits Professionnels</span>
            </div>
        </div>

        <div class="mt-12 bg-orange-500 text-white rounded-2xl p-6 md:p-8 text-center max-w-3xl mx-auto">
            <h4 class="text-xl md:text-2xl font-black uppercase tracking-wider">Depuis 2005 - Artisans de Père en Fils</h4>
            <p class="text-sm md:text-base text-orange-100 mt-2">Plus de 20 ans d'expérience au service des particuliers. Nous nous déplaçons pour vous montrer des échantillons et estimer gratuitement vos travaux.</p>
        </div>

    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-16 bg-gray-50">
    <div class="max-w-5xl mx-auto px-4">

        <div class="space-y-6 text-center">
            <div>
                <h2 class="text-3xl font-black text-slate-900">Contactez-nous</h2>
                <p class="text-gray-600 mt-2">Nous vous répondons rapidement pour un devis gratuit ou pour répondre à vos questions.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4 max-w-4xl mx-auto">
                <a href="tel:0642682410" title="Appeler le mobile de Desbarres David" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg shrink-0"><i class="fa-solid fa-mobile-screen"></i></span>
                    <div class="text-left">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">Mobile</span>
                        <span class="text-base xl:text-lg font-bold text-slate-950 whitespace-nowrap">06 42 68 24 10</span>
                    </div>
                </a>

                <a href="tel:0981833980" title="Appeler le téléphone fixe" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg shrink-0"><i class="fa-solid fa-phone"></i></span>
                    <div class="text-left">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">Téléphone fixe</span>
                        <span class="text-base xl:text-lg font-bold text-slate-950 whitespace-nowrap">09 81 83 39 80</span>
                    </div>
                </a>

                <a href="mailto:daviddesbarres@icloud.com" title="Envoyer un email à Desbarres David" class="contact-item flex items-center gap-4 bg-white p-4 rounded-xl shadow-sm hover:shadow-md transition-shadow">
                    <span class="w-10 h-10 bg-orange-100 text-orange-500 rounded-lg flex items-center justify-center text-lg shrink-0"><i class="fa-solid fa-envelope"></i></span>
                    <div class="text-left min-w-0 flex-1">
                        <span class="block text-xs text-gray-400 font-bold uppercase tracking-wide">E-mail</span>
                        <span class="text-xs sm:text-sm xl:text-base font-bold text-slate-950 block truncate">daviddesbarres@icloud.com</span>
                    </div>
                </a>
            </div>

            <div class="pt-4">
                <p class="text-gray-600 font-semibold mb-3">Visitez notre site et suivez-nous</p>
                <div class="flex justify-center gap-6">
                    <a href="https://www.tiktok.com/@artisan_desbarres" target="_blank" rel="noopener" title="Visiter notre site web" class="text-orange-500 hover:text-orange-600 transition-colors">
                        <i class="fa-brands fa-tiktok text-2xl"></i>
                    </a>
                    <a href="https://www.facebook.com/artisandesbarres" target="_blank" rel="noopener" title="Suivre sur Facebook" class="text-blue-600 hover:text-blue-700 transition-colors">
                        <i class="fa-brands fa-facebook text-2xl"></i>
                    </a>
                    <a href="https://www.instagram.com/artisandesbarres" target="_blank" rel="noopener" title="Suivre sur Instagram" class="text-pink-600 hover:text-pink-700 transition-colors">
                        <i class="fa-brands fa-instagram text-2xl"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>

<!-- FOOTER -->
<footer class="bg-slate-900 text-gray-400 pt-10 pb-6 text-xs border-t border-slate-800">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-6">

        <div class="flex flex-col sm:flex-row items-center gap-5 text-center sm:text-left">
            <div class="space-y-1">
                <span class="block text-white font-extrabold text-base">Artisan Desbarres David</span>
                <p>Services aux particuliers depuis 2005</p>
                <p>N° SIRET: 487 443 905 00038</p>
                <p>Assurance RC Pro</p>
            </div>
        </div>

        <div class="flex flex-col items-center md:items-end gap-2">
            <p>© {{ date('Y') }} Artisan Desbarres David. Tous droits réservés.</p>
            <div class="flex gap-4">
                <a href="{{ route('legal.mentions') }}" title="Mentions légales" class="hover:text-white transition-colors">Mentions légales</a>
                <span>•</span>
                <a href="{{ route('legal.confidentialite') }}" title="Politique de confidentialité" class="hover:text-white transition-colors">Confidentialité</a>
            </div>
        </div>

    </div>
</footer>

<!-- SCRIPT CARROUSEL -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.querySelector('.realisations-carousel');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');

        if (carousel && prevBtn && nextBtn) {
            const itemWidth = carousel.querySelector('.carousel-item').offsetWidth;
            const scrollAmount = itemWidth + 24; // 24 = gap-6

            prevBtn.addEventListener('click', () => {
                carousel.scrollBy({ left: -scrollAmount, behavior: 'smooth' });
            });

            nextBtn.addEventListener('click', () => {
                carousel.scrollBy({ left: scrollAmount, behavior: 'smooth' });
            });
        }
    });
</script>

</body>
</html>
