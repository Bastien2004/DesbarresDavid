<!DOCTYPE html>
<html lang="fr" class="scroll-smooth">
<head>
    <link rel="icon" type="image/png" href="{{ asset('images/loup.png') }}">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- SEO Balises Principales -->
    <title>Desbarres David | Les Spécialistes en Toitures & Façades</title>
    <meta name="description" content="Artisans français de père en fils. Nettoyage, démoussage, couverture, ravalement, peinture, traitement, résine, hydrofuge, antimousse. Garantie 7 ans.">
    <meta name="author" content="Desbarres David">
    <meta name="robots" content="index, follow">
    <link class="canonical" href="{{ url()->current() }}">

    <!-- Open Graph / Twitter -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="Desbarres David">
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="Desbarres David">

    <!-- CDNs -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Masquage propre et moderne de la scrollbar du carrousel */
        .no-scrollbar::-webkit-scrollbar {
            display: none;
        }
        .no-scrollbar {
            -ms-overflow-style: none;
            scrollbar-width: none;
        }
    </style>
</head>
<body class="bg-slate-50 text-slate-800 font-sans antialiased">

<!-- TOP BAR INFO -->
<div class="bg-slate-900 text-white py-2.5 px-4 text-xs md:text-sm border-b border-slate-800">
    <div class="max-w-6xl mx-auto flex flex-col sm:flex-row justify-between items-center gap-3">
        <div class="flex flex-wrap justify-center gap-5 font-medium">
            <a href="tel:0642682410" title="Appeler" class="hover:text-orange-500 transition-colors flex items-center gap-2">
                <i class="fa-solid fa-phone text-orange-500"></i> 06 42 68 24 10
            </a>
            <a href="tel:0981833980" title="Appeler" class="hover:text-orange-500 transition-colors flex items-center gap-2">
                <i class="fa-solid fa-phone text-orange-500"></i> 09 81 83 39 80
            </a>
        </div>
        <div class="flex items-center gap-4 text-slate-300 font-medium">
            <span class="flex items-center gap-1.5"><i class="fa-solid fa-shield-halved text-orange-500"></i> Garantie 7 Ans</span>
            <span class="hidden md:inline text-slate-700">|</span>
            <span class="flex items-center gap-1.5"><i class="fa-solid fa-star text-amber-400"></i> Devis & Échantillons Gratuits</span>
        </div>
    </div>
</div>

<!-- HEADER -->
<header class="bg-white/95 backdrop-blur shadow-sm sticky top-0 z-50 border-b border-slate-100">
    <div class="max-w-6xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="#" title="Retour en haut de page" class="group">
            <span class="block text-xl font-black tracking-tight text-slate-900 group-hover:text-orange-500 transition-colors">Desbarres David</span>
            <span class="block text-[10px] uppercase tracking-widest text-orange-500 font-extrabold -mt-0.5">Toitures & Façades</span>
        </a>

        <nav class="hidden md:flex items-center gap-8 font-semibold text-sm text-slate-600">
            <a href="#prestations" class="hover:text-orange-500 transition-colors">Nos Services</a>
            <a href="#realisations" class="hover:text-orange-500 transition-colors">Nos Réalisations</a>
            <a href="#engagements" class="hover:text-orange-500 transition-colors">Nos Engagements</a>
            <a href="#contact" class="bg-slate-900 text-white px-4 py-2 rounded-lg hover:bg-orange-500 transition-all">Contact & Devis</a>
        </nav>
    </div>
</header>

<!-- HERO SECTION -->
<section class="relative bg-gradient-to-br from-white via-orange-50/20 to-slate-50 py-20 lg:py-32 border-b border-slate-100 overflow-hidden">
    <div class="max-w-6xl mx-auto px-4 relative z-10">
        <div class="flex flex-col lg:flex-row items-center justify-between gap-12">
            <!-- CONTENU TEXTE - GAUCHE -->
            <div class="flex-1 text-center lg:text-left space-y-8">
                <div class="inline-flex items-center gap-2 bg-orange-100/80 text-orange-700 font-extrabold px-4 py-1.5 rounded-full text-xs uppercase tracking-wider lg:ml-0 mx-auto">
                    <i class="fa-solid fa-house-chimney"></i> Artisans français de père en fils
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 leading-none tracking-tight">
                    <span class="text-transparent bg-clip-text bg-gradient-to-r from-orange-500 to-amber-600">Desbarres David</span><br>
                    <span class="text-slate-900">Les Spécialistes en</span><br>
                    <span class="text-slate-900/90 text-3xl sm:text-4xl lg:text-5xl font-extrabold">Toitures & Façades</span>
                </h1>

                <p class="text-slate-600 text-base sm:text-lg font-medium leading-relaxed lg:max-w-xl">
                    Rénovation, entretien et protection de votre habitat. Plus de 20 ans de savoir-faire transmis de génération en génération.
                </p>

                <div class="flex flex-col sm:flex-row gap-4 pt-4 lg:justify-start justify-center items-center sm:items-stretch">
                    <a href="#contact" class="flex-1 sm:flex-none bg-orange-500 hover:bg-orange-600 text-white px-8 py-4 rounded-xl font-bold text-center transition-all shadow-md shadow-orange-500/10 hover:shadow-xl hover:shadow-orange-500/20 hover:-translate-y-0.5">
                        Obtenir un Devis Gratuit
                    </a>
                    <a href="tel:0642682410" class="flex-1 sm:flex-none bg-slate-900 hover:bg-slate-800 text-white px-8 py-4 rounded-xl font-bold text-center flex items-center justify-center gap-3 transition-all hover:-translate-y-0.5">
                        <i class="fa-solid fa-phone text-orange-500"></i> 06 42 68 24 10
                    </a>
                </div>
            </div>

            <!-- IMAGE - DROITE -->
            <div class="flex-1 flex justify-center lg:justify-end">
                <div class="relative p-3 bg-white rounded-3xl shadow-2xl border border-slate-100/80 max-w-md w-full overflow-hidden group">
                    <img src="{{ asset('images/loup.png') }}"
                         alt="Mascotte Desbarres David - Artisan en Toitures & Façades"
                         class="w-full h-auto rounded-2xl object-cover transition-transform duration-500 group-hover:scale-105">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- SERVICES SECTION -->
<section id="prestations" class="py-20 bg-slate-50">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-orange-500 font-extrabold uppercase text-xs tracking-widest">Prestations</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900">Nos Solutions Toitures & Façades</h2>
            <div class="w-12 h-1 bg-orange-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
            <!-- Card 1 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-soap"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Nettoyage</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Élimination en profondeur des impuretés et des traces de pollution accumulées au fil du temps.</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-bugs"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Démoussage</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Éradication des mousses, lichens et champignons qui s'attaquent à la solidité de vos matériaux.</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-hammer"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Couverture</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Rénovation, pose et réparation de tuiles pour garantir l'étanchéité parfaite de votre toit.</p>
            </div>
            <!-- Card 4 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-brush"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Ravalement</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Remise en état esthétique et protectrice des murs extérieurs de votre maison.</p>
            </div>
            <!-- Card 5 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-paint-roller"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Peinture</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Application de peintures extérieures haute résistance pour embellir durablement vos façades.</p>
            </div>
            <!-- Card 6 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-shield-virus"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Traitement</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Traitements curatifs et préventifs ciblés selon les faiblesses structurelles détectées.</p>
            </div>
            <!-- Card 7 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-droplet-slash"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Résine & Hydrofuge</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Protection invisible imperméabilisante pour repousser l'eau tout en laissant respirer les matériaux.</p>
            </div>
            <!-- Card 8 -->
            <div class="bg-white rounded-2xl p-6 shadow-sm border border-slate-100 hover:shadow-md hover:border-orange-200 transition-all group">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-xl flex items-center justify-center text-xl mb-4 group-hover:bg-orange-500 group-hover:text-white transition-all"><i class="fa-solid fa-hand-holding-droplet"></i></div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">Antimousse pro</h3>
                <p class="text-slate-500 text-sm leading-relaxed">Application de produits certifiés pour éliminer durablement lichens, algues, mousses et champignons.</p>
            </div>
        </div>
    </div>
</section>

<!-- RÉALISATIONS SECTION -->
<section id="realisations" class="py-20 bg-white border-t border-slate-100">
    <div class="max-w-7xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-orange-500 font-extrabold uppercase text-xs tracking-widest">Galerie</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900">Nos Réalisations Récentes</h2>
            <div class="w-12 h-1 bg-orange-500 mx-auto rounded-full"></div>
        </div>

        <div class="relative group max-w-6xl mx-auto">
            <div class="flex no-scrollbar gap-6 overflow-x-auto scroll-smooth snap-x snap-mandatory pb-4">
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/a.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/b.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/c.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/d.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/e.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/f.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/g.png') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105607.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105608.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105613.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105614.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105615.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105618.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260612_105619.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260616_211858.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260616_211902.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
                <div class="flex-none w-[80%] sm:w-[45%] lg:w-[31%] snap-start rounded-2xl overflow-hidden shadow-sm border border-slate-100 bg-white">
                    <img src="{{ asset('images/IMG_20260616_211906.jpg') }}" alt="Réalisation Toiture & Façade" class="w-full h-64 object-cover hover:scale-105 transition-transform duration-500">
                </div>
            </div>

            <button class="carousel-prev absolute -left-4 top-1/2 -translate-y-1/2 bg-slate-900 hover:bg-orange-500 text-white w-10 h-10 rounded-full shadow-lg hidden md:flex items-center justify-center transition-all z-10">
                <i class="fa-solid fa-chevron-left text-sm"></i>
            </button>
            <button class="carousel-next absolute -right-4 top-1/2 -translate-y-1/2 bg-slate-900 hover:bg-orange-500 text-white w-10 h-10 rounded-full shadow-lg hidden md:flex items-center justify-center transition-all z-10">
                <i class="fa-solid fa-chevron-right text-sm"></i>
            </button>
        </div>
    </div>
</section>

<!-- ENGAGEMENTS SECTION -->
<section id="engagements" class="py-20 bg-slate-50 border-t border-b border-slate-100">
    <div class="max-w-6xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-16 space-y-3">
            <span class="text-orange-500 font-extrabold uppercase text-xs tracking-widest">Garanties</span>
            <h2 class="text-3xl sm:text-4xl font-black text-slate-900">Pourquoi nous faire confiance ?</h2>
            <div class="w-12 h-1 bg-orange-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 gap-6 text-center">
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-leaf"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-800">Biodégradable à 95%</span>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-credit-card"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-800">Paiement échelonné</span>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-shield-halved"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-800">Assurance RC Pro</span>
            </div>
            <div class="bg-white p-6 rounded-2xl border border-slate-100 shadow-sm flex flex-col items-center">
                <div class="w-12 h-12 bg-orange-50 text-orange-500 rounded-full flex items-center justify-center text-xl mb-3"><i class="fa-solid fa-user-shield"></i></div>
                <span class="text-xs font-bold uppercase tracking-wider text-slate-800">Gamme Professionnelle</span>
            </div>
        </div>

        <div class="mt-16 bg-gradient-to-r from-orange-500 to-amber-500 text-white rounded-3xl p-8 md:p-12 text-center max-w-3xl mx-auto shadow-lg shadow-orange-500/10">
            <h4 class="text-xl md:text-2xl font-black uppercase tracking-wider mb-3">Depuis 2005 — Artisans de Père en Fils</h4>
            <p class="text-sm md:text-base text-orange-50/90 max-w-xl mx-auto leading-relaxed">
                Plus de 20 ans d'expérience au service de l'habitat. Déplacement à domicile gratuit pour l'étude de vos travaux et la présentation d'échantillons.
            </p>
        </div>
    </div>
</section>

<!-- CONTACT SECTION -->
<section id="contact" class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4">
        <div class="text-center max-w-2xl mx-auto mb-12 space-y-3">
            <span class="text-orange-500 font-extrabold uppercase text-xs tracking-widest">Contact</span>
            <h2 class="text-3xl font-black text-slate-900">Demandez votre étude gratuite</h2>
            <div class="w-12 h-1 bg-orange-500 mx-auto rounded-full"></div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4 mb-12">
            <a href="tel:0642682410" class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100 hover:border-orange-300 transition-all shadow-sm">
                <span class="w-10 h-10 bg-orange-50 text-orange-500 rounded-lg flex items-center justify-center text-base shrink-0"><i class="fa-solid fa-mobile-screen"></i></span>
                <div>
                    <span class="block text-[10px] text-slate-400 font-bold uppercase tracking-wider">Mobile</span>
                    <span class="text-sm font-bold text-slate-900">06 42 68 24 10</span>
                </div>
            </a>

            <a href="tel:0981833980" class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100 hover:border-orange-300 transition-all shadow-sm">
                <span class="w-10 h-10 bg-orange-50 text-orange-500 rounded-lg flex items-center justify-center text-base shrink-0"><i class="fa-solid fa-phone"></i></span>
                <div>
                    <span class="block text-[10px] text-slate-400 font-bold uppercase tracking-wider">Fixe</span>
                    <span class="text-sm font-bold text-slate-900">09 81 83 39 80</span>
                </div>
            </a>

            <a href="mailto:daviddesbarres@icloud.com" class="flex items-center gap-4 bg-slate-50 p-4 rounded-xl border border-slate-100 hover:border-orange-300 transition-all shadow-sm sm:col-span-2 lg:col-span-1">
                <span class="w-10 h-10 bg-orange-50 text-orange-500 rounded-lg flex items-center justify-center text-base shrink-0"><i class="fa-solid fa-envelope"></i></span>
                <div class="min-w-0 flex-1">
                    <span class="block text-[10px] text-slate-400 font-bold uppercase tracking-wider">E-mail</span>
                    <span class="text-sm font-bold text-slate-900 truncate block">daviddesbarres@icloud.com</span>
                </div>
            </a>
        </div>

        <div class="text-center space-y-4">
            <p class="text-slate-500 font-semibold text-sm tracking-wide">Rejoignez-nous sur les réseaux sociaux</p>
            <div class="flex justify-center gap-5">
                <a href="https://www.tiktok.com/@artisan_desbarres" target="_blank" rel="noopener" class="w-11 h-11 bg-slate-100 hover:bg-slate-900 text-slate-700 hover:text-white rounded-full flex items-center justify-center text-lg transition-all shadow-sm">
                    <i class="fa-brands fa-tiktok"></i>
                </a>
                <a href="https://www.facebook.com/artisandesbarres" target="_blank" rel="noopener" class="w-11 h-11 bg-slate-100 hover:bg-blue-600 text-slate-700 hover:text-white rounded-full flex items-center justify-center text-lg transition-all shadow-sm">
                    <i class="fa-brands fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/artisandesbarres" target="_blank" rel="noopener" class="w-11 h-11 bg-slate-100 hover:bg-pink-600 text-slate-700 hover:text-white rounded-full flex items-center justify-center text-lg transition-all shadow-sm">
                    <i class="fa-brands fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- FOOTER -->
<footer class="bg-slate-900 text-slate-400 pt-12 pb-8 text-xs border-t border-slate-800">
    <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row justify-between items-center gap-8">
        <div class="space-y-1.5 text-center md:text-left">
            <span class="block text-white font-black text-base tracking-tight">Desbarres David</span>
            <p class="text-slate-400 font-medium">Services de confiance aux particuliers depuis 2005</p>
            <p class="text-slate-500">N° SIRET : 487 443 905 00038 | Couverture d'assurance décennale et RC Pro</p>
        </div>

        <div class="flex flex-col items-center md:items-end gap-3 font-medium">
            <p class="text-slate-500">© {{ date('Y') }} Desbarres David. Tous droits réservés.</p>
            <div class="flex gap-4 text-slate-400">
                <a href="{{ route('legal.mentions') }}" class="hover:text-white transition-colors">Mentions légales</a>
                <span class="text-slate-700">•</span>
                <a href="{{ route('legal.confidentialite') }}" class="hover:text-white transition-colors">Confidentialité</a>
            </div>
            <a href="https://guideon.dev" target="_blank" rel="noopener noreferrer" class="text-[11px] hover:text-blue-500 transition-colors mt-1">
                Développé par GuideOn
            </a>
        </div>
    </div>
</footer>

<!-- SCRIPT CARROUSEL -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const carousel = document.querySelector('.no-scrollbar');
        const prevBtn = document.querySelector('.carousel-prev');
        const nextBtn = document.querySelector('.carousel-next');

        if (carousel && prevBtn && nextBtn) {
            const itemWidth = carousel.querySelector('div').offsetWidth;
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
