@extends('layouts.app')
@section('title', 'Cak Ning Surabaya')
@section('styles')
    <style>
        /* Batik Pattern Backgrounds */
        .batik-pattern-1 {
            background-image:
                radial-gradient(circle at 20px 30px, rgba(245, 158, 11, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 40px 70px, rgba(245, 158, 11, 0.08) 1px, transparent 1px),
                linear-gradient(45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%);
            background-size: 60px 60px, 80px 80px, 40px 40px, 40px 40px;
        }

        .batik-pattern-2 {
            background-image:
                radial-gradient(circle at 25px 25px, rgba(245, 158, 11, 0.15) 3px, transparent 3px),
                radial-gradient(circle at 50px 0px, rgba(245, 158, 11, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 0px 50px, rgba(245, 158, 11, 0.08) 1px, transparent 1px);
            background-size: 50px 50px, 100px 50px, 50px 100px;
        }

        .batik-pattern-3 {
            background-image:
                repeating-linear-gradient(45deg, rgba(245, 158, 11, 0.03) 0px, rgba(245, 158, 11, 0.03) 2px, transparent 2px, transparent 10px),
                repeating-linear-gradient(-45deg, rgba(245, 158, 11, 0.05) 0px, rgba(245, 158, 11, 0.05) 1px, transparent 1px, transparent 8px),
                radial-gradient(circle at 30px 30px, rgba(245, 158, 11, 0.1) 2px, transparent 2px);
            background-size: 20px 20px, 16px 16px, 60px 60px;
        }

        .batik-pattern-4 {
            background-image:
                radial-gradient(ellipse at 40px 40px, rgba(245, 158, 11, 0.12) 4px, transparent 4px),
                radial-gradient(ellipse at 80px 0px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(ellipse at 0px 80px, rgba(245, 158, 11, 0.06) 3px, transparent 3px),
                linear-gradient(90deg, rgba(245, 158, 11, 0.02) 50%, transparent 50%);
            background-size: 80px 80px, 120px 60px, 60px 120px, 40px 40px;
        }

        .batik-pattern-5 {
            background-image:
                conic-gradient(from 45deg at 50px 50px, rgba(245, 158, 11, 0.1) 0deg, transparent 90deg, rgba(245, 158, 11, 0.05) 180deg, transparent 270deg),
                radial-gradient(circle at 25px 75px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(circle at 75px 25px, rgba(245, 158, 11, 0.06) 1px, transparent 1px);
            background-size: 100px 100px, 50px 50px, 50px 50px;
        }

        .batik-overlay {
            position: relative;
        }

        .batik-overlay::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-image:
                radial-gradient(circle at 30px 30px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(circle at 60px 60px, rgba(245, 158, 11, 0.05) 1px, transparent 1px),
                linear-gradient(45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%);
            background-size: 60px 60px, 90px 90px, 30px 30px;
            pointer-events: none;
            z-index: 1;
        }

        .batik-overlay > * {
            position: relative;
            z-index: 2;
        }
    </style>
@endsection
@section('content')
    {{-- -------------------------------------- --}}
    {{-- HERO SECTION --}}
    {{-- -------------------------------------- --}}
    <div class="hero bg-olive-800 min-h-screen batik-pattern-1">
        <div class="hero-content flex-col lg:flex-row-reverse lg:gap-40">
            <div class="text-center lg:text-left lg:max-w-lg">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-pumpkin-500 mb-6 leading-tight">
                    Paguyuban Cak & Ning Surabaya
                </h1>
                <p class="text-base md:text-xl lg:text-2xl text-merino-100 mb-4">
                    Get a collaboration with Official Tourism Ambassadors of Surabaya!
                </p>
                <p class="text-sm md:text-lg lg:text-xl text-merino-200 mb-8">
                    Find the best talent & collaboration opportunity that matches your brand, valued as Talented &
                    Professional Youth Representative of Surabaya.
                </p>
                <a href="https://instagram.com/cakningsurabaya" target="_blank"
                    class="inline-flex items-center px-6 py-3 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition text-base md:text-lg lg:text-xl">
                    Check out our social media
                    <span class="iconify ml-2" data-icon="mdi:instagram" data-width="28"></span>
                </a>
            </div>

            @php
                $HeroImages = [
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                        'desc' => 'Cak Ning Surabaya - Ilustrasi 1',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'desc' => 'Cak Ning Surabaya - Ilustrasi 2',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-talents/_assets/media/2906cc398a5e9d1023853825ec8548ba.png',
                        'desc' => 'Cak Ning Surabaya - Ilustrasi 3',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-talents/_assets/media/0ce940547d8e70a5151aab8549377746.jpg',
                        'desc' => 'Cak Ning Surabaya - Ilustrasi 4',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-talents/_assets/media/52dbd615c854f1c65624ff805bc7a10f.jpg',
                        'desc' => 'Cak Ning Surabaya - Ilustrasi 5',
                    ],
                ];
            @endphp

            <div class="relative flex justify-center items-center h-[420px] md:h-[520px] lg:h-[600px] overflow-visible">
                <div id="heroStack"
                    class="relative w-[200px] h-[320px] lg:w-[240px] lg:h-[360px] md:w-[320px] md:h-[480px] cursor-pointer overflow-visible select-none">
                    @foreach ($HeroImages as $index => $image)
                        <img src="{{ $image['src'] }}" alt="{{ $image['desc'] }}"
                            class="absolute top-0 left-0 w-full h-full rounded-xl shadow-lg transition-all duration-500 ease-in-out object-cover bg-black"
                            style="
                            transform:
                                translateX({{ ($index - 1) * 32 }}px)
                                translateY({{ abs($index - 1) * 12 }}px)
                                scale({{ 1 - $index * 0.05 }})
                                rotate({{ ($index - 1) * 5 }}deg);
                            z-index: {{ count($HeroImages) - $index }};
                        ">
                    @endforeach
                </div>
            </div>
        </div>
    </div>

    {{-- -------------------------------------- --}}
    {{-- ABOUT SECTION --}}
    {{-- -------------------------------------- --}}

    <div class="carousel w-full max-h-9/10 overflow-hidden">
        <div id="cakning-carousel" class="relative w-full h-96 overflow-hidden">

            @php
                $carouselImages = [
                    [
                        'src' => 'https://upload.wikimedia.org/wikipedia/commons/b/bc/Suramadu_3_%28cropped%29.jpg',
                        'tittle' => 'Jembatan Suramadu',
                        'desc' =>
                            'Penghubung antara Pulau Jawa dan Pulau Madura di Indonesia, dinamai dari akronim Surabaya dan Madura.',
                        'position' => 'object-[0%_30%]',
                    ],
                    [
                        'src' => 'https://upload.wikimedia.org/wikipedia/commons/d/da/Jembatan_suroboyo_dusk.jpg',
                        'tittle' => 'Jembatan Suroboyo',
                        'desc' =>
                            'Ikon wisata Kota Surabaya yang diresmikan tahun 2016, membentang sepanjang 800 meter di atas laut dekat Pantai Kenjeran.',
                        'position' => 'object-[0%_60%]',
                    ],
                    [
                        'src' => 'https://upload.wikimedia.org/wikipedia/commons/1/13/Tugu_pahlawan.jpg',
                        'tittle' => 'Tugu Pahlawan',
                        'desc' =>
                            'Monumen ikonik di Surabaya, berbentuk paku terbalik setinggi 41,15 meter, yang dibangun untuk mengenang Pertempuran 10 November 1945 antara pejuang Indonesia melawan pasukan sekutu dan Belanda.',
                        'position' => 'object-[0%_40%]',
                    ],
                    [
                        'src' => 'https://upload.wikimedia.org/wikipedia/commons/a/af/Alun_alun_Surabaya.jpg',
                        'tittle' => 'Alun Alun Surabaya',
                        'desc' =>
                            'Ruang publik yang terletak di pusat Kota Surabaya, di Jalan Gubernur Suryo, Embong Kaliasin, Kecamatan Genteng.',
                        'position' => 'object-[0%_30%]',
                    ],
                    [
                        'src' =>
                            'https://upload.wikimedia.org/wikipedia/commons/0/0f/Surabaya_City_Hall_by_Yamin_Nathaniel.jpg',
                        'tittle' => 'Balai Kota Surabaya',
                        'desc' =>
                            'Pusat administrasi Pemerintah Kota Surabaya dan kantor bagi Wali Kota serta Wakil Wali Kota, berfungsi sebagai pusat pemerintahan dan cagar budaya.',
                        'position' => 'object-[0%_70%]',
                    ],
                ];
            @endphp
            @foreach ($carouselImages as $idx => $img)
                <div class="absolute inset-0 w-full h-full transition-opacity duration-700 {{ $idx === 0 ? 'opacity-100 z-10' : 'opacity-0 z-0' }}"
                    id="carousel-slide-{{ $idx + 1 }}">
                    <img src="{{ $img['src'] }}" alt="Carousel {{ $idx + 1 }}"
                        class="w-full h-full object-cover {{ $img['position'] }}" />
                    <div class="absolute left-0 top-0 w-full h-full flex items-end pointer-events-none">
                        <div
                            class="left-0 bottom-0 p-6 text-merino-50 text-left px-10 bg-gradient-to-b from-transparent from-20% to-black to-80% flex-grow">
                            <span class="text-lg font-semibold">{{ $img['tittle'] }}</span>
                            <p class="mt-2 text-base">{{ $img['desc'] }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
            <div class="absolute left-5 right-5 top-1/2 flex -translate-y-1/2 transform justify-between z-20">
                <button id="carousel-prev"
                    class="btn btn-circle bg-olive-800/80 text-merino-500 hover:bg-pumpkin-500 transition">❮</button>
                <button id="carousel-next"
                    class="btn btn-circle bg-olive-800/80 text-merino-500 hover:bg-pumpkin-500 transition">❯</button>
            </div>
        </div>
    </div>
    <section id="about" class="bg-pumpkin-500 py-16 batik-pattern-2">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="text-center mb-8">
                <h2 class="text-3xl md:text-4xl font-bold text-merino-50 mb-4">
                    Siapa Cak & Ning Surabaya?
                </h2>
            </div>
            <div class=" gap-12 items-center">
                <div>
                    <p class="text-lg text-merino-50 mb-6 leading-relaxed  text-center">
                        Paguyuban Cak & Ning Surabaya adalah organisasi yang mewadahi para duta pariwisata dan budaya Kota
                        Surabaya sejak 31 Mei 1981.
                        Kami berperan aktif dalam mempromosikan keindahan, sejarah, dan tradisi Kota Pahlawan.
                    </p>
                    <div class="grid grid-cols-3 gap-4 text-center">
                        <div class="bg-olive-900 text-white p-4 rounded-lg">
                            <h3 class="text-2xl font-bold text-pumpkin-500">40+</h3>
                            <p class="text-sm">Tahun Berpengalaman</p>
                        </div>
                        <div class="bg-olive-900 text-white p-4 rounded-lg">
                            <h3 class="text-2xl font-bold text-pumpkin-500">200+</h3>
                            <p class="text-sm">Alumni Cak & Ning</p>
                        </div>
                        <div class="bg-olive-900 text-white p-4 rounded-lg">
                            <h3 class="text-2xl font-bold text-pumpkin-500">500+</h3>
                            <p class="text-sm">Event Berpartisipasi</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- <div id="about" class="hero bg-pumpkin-500 min-h-[50vh]">
        <div class="hero-content text-center container max-w-screen-md flex flex-col items-center px-4 py-12 mx-auto">
            <h2 class="max-w-2xl mx-auto text-2xl font-semibold text-olive-800 xl:text-3xl">
                Tentang Kami
            </h2>
            <p class="max-w-4xl text-center text-merino-100 font-medium text-lg">
                Paguyuban Cak & Ning Surabaya adalah organisasi yang berperan sebagai wadah bagi
                para finalis ajang pemilihan duta wisata Cak & Ning Surabaya sejak 31 Mei 1981,
                paguyuban ini berada di bawah naungan Dinas Kebudayaan, Kepemudaan, dan Olahraga
                serta Pariwisata (Disbudporapar) Kota Surabaya. Tujuan utamanya adalah
                mempromosikan pariwisata dan budaya lokal serta memperkuat identitas Kota Pahlawan
                melalui peran aktif generasi muda.
            </p>
        </div>
    </div> --}}

    {{-- -------------------------------------- --}}
    {{-- ACTIVITIES & EVENTS SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-pattern-3">
        <div class="container max-w-screen-lg mx-auto px-6">
            <h2 class="text-3xl font-bold text-olive-800 mb-12 text-center">Kegiatan Terbaru</h2>
            @php
                $latestActivities = [
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg',
                        'title' => 'Cak Ning Goes to School',
                        'desc' => 'Kunjungan ke sekolah-sekolah Surabaya untuk edukasi budaya dan pariwisata.',
                        'date' => '20 Juni 2024',
                        'link' => '#',
                    ],
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                        'title' => 'Cakningkustik di Taman Bungkul',
                        'desc' => 'Penampilan musik akustik oleh Cak & Ning Surabaya di ruang publik.',
                        'date' => '15 Juni 2024',
                        'type' => 'Offline Event',
                        'price' => 'Gratis',
                        'link' => '#',
                    ],
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'title' => 'Workshop Public Speaking',
                        'desc' => 'Pelatihan komunikasi untuk generasi muda bersama alumni Cak & Ning.',
                        'date' => '10 Juni 2024',
                        'type' => 'Offline Event',
                        'price' => 'Gratis',
                        'link' => '#',
                    ],
                ];
            @endphp
            <div class="flex flex-col gap-8 md:grid md:grid-cols-1">
                @foreach ($latestActivities as $activity)
                    <div class="relative mb-8 flex flex-col items-center rounded bg-merino-100 shadow-xl md:flex-row md:items-start">
                        <div class="basis-2/5 md:h-72 w-full">
                            <img alt="{{ $activity['title'] }}" loading="lazy"
                                class="mb-6 h-full rounded object-cover w-full md:mb-0 md:mr-6"
                                src="{{ $activity['img'] }}" style="object-fit: cover; height: 100%;">
                        </div>
                        <div class="basis-3/5 p-4 md:text-left w-full">
                            <h4 class="mb-0 mt-3 text-xl font-bold leading-snug tracking-tight">{{ $activity['title'] }}</h4>
                            <h4 class="mb-3 text-sm leading-snug tracking-tight text-gray-400">{{ $activity['date'] }}</h4>
                            <p class="text-olive-800">{{ $activity['desc'] }}</p>
                            <a target="_blank" class="btn md:mt-15 mt-5 rounded-full bg-pumpkin-500 px-6 py-2 text-sm text-white hover:bg-pumpkin-700"
                                href="{{ $activity['link'] }}">Detail Event</a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-8 text-center">
                <a href="/event" class="text-pumpkin-500 font-semibold hover:underline">
                    Lihat Semua Kegiatan →
                </a>
            </div>
        </div>
    </section>

    {{-- <section id="activities" class="bg-merino-100 py-12">
        <div class="container max-w-screen-md mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-pumpkin-500 mb-4">Kegiatan & Event Cak Ning Surabaya</h2>
            <p class="text-olive-800 mb-8">
                Cak & Ning Surabaya aktif dalam berbagai kegiatan dan event yang mendukung pariwisata, budaya, serta pengembangan generasi muda Surabaya.
            </p>
            @php
                $activities = [
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'title' => 'Pemilihan Cak & Ning Surabaya',
                        'desc' => 'Ajang tahunan untuk memilih duta wisata Surabaya yang berprestasi dan inspiratif.',
                        'date' => 'Mei 2024',
                    ],
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                        'title' => 'Surabaya Heritage Walk',
                        'desc' => 'Tur keliling kota bersama Cak & Ning untuk mengenal sejarah dan budaya Surabaya.',
                        'date' => 'Juni 2024',
                    ],
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg',
                        'title' => 'Workshop Public Speaking',
                        'desc' => 'Pelatihan keterampilan komunikasi untuk generasi muda bersama Cak & Ning.',
                        'date' => 'Juli 2024',
                    ],
                    [
                        'img' => 'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                        'title' => 'Cakningkustik',
                        'desc' => 'Penampilan musik akustik oleh Cak & Ning Surabaya di berbagai event komunitas.',
                        'date' => 'Agustus 2024',
                    ],
                ];
            @endphp

            <div class="flex flex-wrap justify-center gap-8 mt-8 xl:mt-12 lg:gap-10 xl:gap-16">
                @foreach ($activities as $activity)
                    <div class="flex flex-col items-center text-center space-y-3 bg-merino-50 rounded-xl shadow p-6 w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg"
                        style="flex-basis: 320px; max-width: 360px;">
                        <img src="{{ $activity['img'] }}" alt="{{ $activity['title'] }}"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h2 class="text-xl font-semibold text-pumpkin-500">{{ $activity['title'] }}</h2>
                        <p class="text-olive-800">{{ $activity['desc'] }}</p>
                        <span class="text-olive-600 text-sm">{{ $activity['date'] }}</span>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex justify-center">
                <a href="#" class="inline-flex items-center text-pumpkin-500 font-semibold hover:text-olive-700 hover:underline transition text-base md:text-lg">
                    Lihat Event Lainnya
                </a>
            </div>
        </div>
    </section> --}}

    {{-- -------------------------------------- --}}
    {{-- SERVICE SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 dark:bg-gray-900 batik-pattern-4">
        <div class="container max-w-screen-lg px-6 py-10 mx-auto">
            <h1 class="text-2xl font-semibold text-center text-olive-800 capitalize lg:text-3xl dark:text-merino-100">
                Explore Our
                Services</h1>
            @php
                $OurServices = [
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/c04e16359e858e7eb6f4cca1947bb75c.jpg',
                        'service' => 'Tour Guide',
                        'desc' => 'Berkeliling kota Surabaya ditemani Cak & Ning Surabaya!',
                        'link' => '/',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/a576ecb53e12f12dae5a1e144982771b.jpg',
                        'service' => 'MC/Moderator',
                        'desc' => 'Pilihan MC terbaik untuk acara formal, semiformal dan nonformal',
                        'link' => '/',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/ce350c0a0c6fb0f4f9a412c8a5e8fe3c.jpg',
                        'service' => 'Narasumber',
                        'desc' => 'Cak & Ning dengan berbagai latar belakang untuk Narasumber acaramu!',
                        'link' => '/',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg',
                        'service' => 'Juri',
                        'desc' => 'Mengundang Cak & Ning Surabaya sebagai Juri untuk berbagai perlombaan yang diadakan',
                        'link' => '/',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/85f0d1f27b64c891922ce313e5c60c59.jpg',
                        'service' => 'Usher',
                        'desc' => 'Cak & Ning Surabaya untuk melengkapi kebutuhan SDM di eventmu!',
                        'link' => '/',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/cb4ee8e99dc861f180a50cf9f4793f10.jpg',
                        'service' => 'Model & Content Creator',
                        'desc' => 'Content Creator, Model Photoshoot, Commercial Video & Catwalk untuk brandmu!',
                        'link' => '/',
                    ],
                    [
                        'src' =>
                            'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                        'service' => 'Cakningkustik',
                        'desc' => 'Lengkapi acaramu dengan penampilan musik dari Cak & Ning Surabaya!',
                        'link' => '/',
                    ],
                ];
            @endphp

            <div class="flex flex-wrap justify-center gap-8 mt-8 xl:mt-12 lg:gap-10 xl:gap-16">
                @foreach ($OurServices as $service)
                    <div
                        class="flex flex-col items-center text-center space-y-3 bg-merino-100 rounded-xl shadow p-6 w-full max-w-xs md:max-w-sm lg:max-w-md">
                        <img src="{{ $service['src'] }}" alt="{{ $service['service'] }}"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h2 class="text-xl font-semibold text-pumpkin-500">{{ $service['service'] }}</h2>
                        <p class="text-olive-800">{{ $service['desc'] }}</p>
                        <a href="{{ $service['link'] }}"
                            class="inline-flex items-center text-sm text-pumpkin-500 hover:underline hover:text-olive-700 font-semibold transition">
                            <span>Selengkapnya</span>
                            <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd"
                                    d="M12.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-2.293-2.293a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- COMMUNITY PARTNERSHIP SECTION --}}
    {{-- -------------------------------------- --}}
    <section id="community-partnership" class="bg-pumpkin-500 py-12 batik-pattern-5">
        <div class="container max-w-screen-md flex flex-col px-4 py-12 mx-auto justify-center">
            <div class="w-full flex flex-col lg:items-start mx-auto">
                <div class="flex flex-col lg:flex-row justify-center gap-8 w-full">
                    <div
                        class="flex flex-col items-start max-w-full lg:max-w-lg flex-basis-full lg:flex-basis-1/2 lg:w-fit">
                        <h2 class="text-olive-900 text-xl md:text-2xl font-extrabold mb-4 text-start flex-basis-full">
                            All of the option is good
                        </h2>
                        <p class="text-olive-900 text-3xl md:text-5xl lg:text-6xl mb-2">But sometimes,</p>
                        <p class="text-olive-900 text-3xl md:text-5xl lg:text-6xl mb-4">all you need is a</p>
                        <p class="text-olive-900 text-3xl md:text-5xl lg:text-6xl font-extrabold mb-4">Community
                            Partnership.</p>
                    </div>
                    <div
                        class="flex flex-col h-fit my-auto max-w-full lg:max-w-md gap-6 md:gap-8 mt-6 lg:mt-auto flex-basis-full lg:flex-basis-1/2 lg:w-fit">
                        <div class="flex items-center gap-2 text-merino-100">
                            <span class="iconify" data-icon="mdi:arrow-right" data-width="24"></span>
                            <span class="text-base md:text-lg lg:text-xl">Brand Campaign with Cak Ning</span>
                        </div>
                        <div class="flex items-center gap-2 text-merino-100">
                            <span class="iconify" data-icon="mdi:arrow-right" data-width="24"></span>
                            <span class="text-base md:text-lg lg:text-xl">Event Activation with Cak Ning</span>
                        </div>
                        <div class="flex items-center gap-2 text-merino-100">
                            <span class="iconify" data-icon="mdi:arrow-right" data-width="24"></span>
                            <span class="text-base md:text-lg lg:text-xl">Boost Exposure with Cak Ning</span>
                        </div>
                        <div class="flex items-center gap-2 text-merino-100">
                            <span class="iconify" data-icon="mdi:arrow-right" data-width="24"></span>
                            <span class="text-base md:text-lg lg:text-xl">Strolling Around Surabaya with Cak Ning</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- SPONSORSHIP SECTION --}}
    {{-- -------------------------------------- --}}
    @php
        $Sponsors = [
            [
                'src' => 'https://upload.wikimedia.org/wikipedia/commons/b/ba/City_of_Surabaya_Logo.svg',
                'alt' => 'Pemkot Surabaya',
            ],
            [
                'src' =>
                    'https://upload.wikimedia.org/wikipedia/commons/5/56/Logo_PT_Kereta_Api_Indonesia_%28Persero%29_2020.svg',
                'alt' => 'Kereta Api Indonesia',
            ],
            [
                'src' => 'https://upload.wikimedia.org/wikipedia/commons/c/c1/RRI_Logo_2007-2023.svg',
                'alt' => 'Radio Republik Indonesia',
            ],
            [
                'src' => asset('images/sponsorship/emina.svg'),
                'alt' => 'Emina',
            ],
            [
                'src' => 'https://upload.wikimedia.org/wikipedia/en/a/af/Cita_Hati_Christian_School_Logo.jpeg',
                'alt' => 'Cita Hati Christian School',
            ],
            [
                'src' => asset('images/sponsorship/unair.svg'),
                'alt' => 'Universitas Airlangga',
            ],
            [
                'src' => asset('images/sponsorship/dishub.svg'),
                'alt' => 'Dinas Perhubungan',
            ],
            [
                'src' => asset('images/sponsorship/pelindo.svg'),
                'alt' => 'Pelindo',
            ],
            [
                'src' => asset('images/sponsorship/sucofindo.svg'),
                'alt' => 'Sucofindo',
            ],
            [
                'src' => asset('images/sponsorship/bank_jatim.svg'),
                'alt' => 'Bank Jatim',
            ],
            [
                'src' => 'https://upload.wikimedia.org/wikipedia/commons/1/17/Logo_Telkom_Indonesia_2013.png',
                'alt' => 'Telkom Indonesia',
            ],
            [
                'src' => 'https://upload.wikimedia.org/wikipedia/commons/5/5c/Bank_Central_Asia.svg',
                'alt' => 'BCA',
            ],
        ];
    @endphp
    <section id="sponsorship" class="bg-merino-50 py-12 batik-overlay">
        <div class="container  mx-auto px-10 text-center">
            <h2 class="text-2xl font-bold text-pumpkin-500 mb-4">Our Sponsorship & Partnership</h2>
            <p class="text-olive-800 mb-8">Kami bekerja sama dengan berbagai brand, instansi, dan komunitas untuk mendukung
                pariwisata dan budaya Surabaya.</p>
            <div class="container flex flex-wrap justify-center items-center gap-8">
                @foreach ($Sponsors as $sponsor)
                    <div class="flex items-center justify-center h-28 w-32 bg-transparent">
                        <img src="{{ $sponsor['src'] }}" alt="{{ $sponsor['alt'] }}"
                            class="max-h-20 max-w-[120px] grayscale hover:grayscale-0 transition object-contain mx-auto" />
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- TALENT SECTION --}}
    {{-- -------------------------------------- --}}
    {{-- <section id="talent" class="bg-merino-100 py-12">
        <div class="container max-w-screen-md mx-auto px-4 text-center">
            <h2 class="text-2xl font-bold text-pumpkin-500 mb-4">Our Talent</h2>
            <p class="text-olive-800 mb-8">Cak & Ning Surabaya terdiri dari individu berbakat yang siap berkolaborasi
                untuk berbagai kebutuhan event, promosi, dan aktivitas komunitas.</p>
            @php
                $TalentCards = [
                    [
                        'img' => 'https://randomuser.me/api/portraits/men/32.jpg',
                        'name' => 'Cak Adam',
                        'year' => 'Finalis 2023',
                        'desc' => 'MC, Tour Guide, Content Creator',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/women/44.jpg',
                        'name' => 'Ning Sari',
                        'year' => 'Finalis 2022',
                        'desc' => 'Model, Usher, Event Activation',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/men/65.jpg',
                        'name' => 'Cak Budi',
                        'year' => 'Finalis 2021',
                        'desc' => 'Juri, Narasumber, Brand Ambassador',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/men/32.jpg',
                        'name' => 'Cak Adam',
                        'year' => 'Finalis 2023',
                        'desc' => 'MC, Tour Guide, Content Creator',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/women/44.jpg',
                        'name' => 'Ning Sari',
                        'year' => 'Finalis 2022',
                        'desc' => 'Model, Usher, Event Activation',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/men/65.jpg',
                        'name' => 'Cak Budi',
                        'year' => 'Finalis 2021',
                        'desc' => 'Juri, Narasumber, Brand Ambassador',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/men/32.jpg',
                        'name' => 'Cak Adam',
                        'year' => 'Finalis 2023',
                        'desc' => 'MC, Tour Guide, Content Creator',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/women/44.jpg',
                        'name' => 'Ning Sari',
                        'year' => 'Finalis 2022',
                        'desc' => 'Model, Usher, Event Activation',
                    ],
                    [
                        'img' => 'https://randomuser.me/api/portraits/men/65.jpg',
                        'name' => 'Cak Budi',
                        'year' => 'Finalis 2021',
                        'desc' => 'Juri, Narasumber, Brand Ambassador',
                    ],
                ];
            @endphp

            <div class="flex flex-wrap justify-center gap-8 mt-8 xl:mt-12 lg:gap-10 xl:gap-16">
                @foreach ($TalentCards as $talent)
                    <div class="flex flex-col items-center text-center space-y-3 bg-merino-50 rounded-xl shadow p-6 w-full max-w-xs sm:max-w-sm md:max-w-md lg:max-w-lg"
                        style="flex-basis: 320px; max-width: 360px;">
                        <img src="{{ $talent['img'] }}" alt="{{ $talent['name'] }}"
                            class="w-full h-40 object-cover rounded-lg mb-4">
                        <h2 class="text-xl font-semibold text-pumpkin-500">{{ $talent['name'] }}</h2>
                        <p class="text-olive-800">{{ $talent['year'] }}</p>
                        <p class="text-olive-600 text-sm">{{ $talent['desc'] }}</p>
                    </div>
                @endforeach
            </div>

            <div class="mt-8 flex justify-center">
                <a href="{{ route('talent.index') }}"
                    class="inline-flex items-center text-pumpkin-500 font-semibold hover:text-olive-700 hover:underline hover:cursor-pointer transition text-base md:text-lg">
                    Talent Lainnya (30+)
                </a>
            </div>
        </div>
    </section> --}}


    {{-- -------------------------------------- --}}
    {{-- CONTACT SECTION --}}
    {{-- -------------------------------------- --}}

    <!-- filepath: /home/adam/Documents/cak_ning_surabaya/resources/views/cakning/home.blade.php -->
    <section id="contact" class="bg-olive-950 py-12 batik-pattern-1">
        <div class="container mx-auto px-4 md:px-6">
            <!-- Main wrapper: 2 bagian dengan justify-center -->
            <div class="flex flex-col lg:flex-row items-center justify-center gap-8 lg:gap-12 max-w-6xl mx-auto">

                <!-- Bagian 1: Image & Social Media -->
                <div class="basis-2/5 w-full lg:w-fit flex flex-col items-center lg:items-start">
                    <h1 class="text-3xl lg:text-4xl font-semibold text-merino-50 mb-8 text-center lg:text-left">
                        Contact Us
                    </h1>

                    <!-- Image - tidak mengecil di mobile -->
                    <div class="w-full max-w-md lg:max-w-lg mb-8">
                        <img class="w-full h-auto rounded-xl object-cover"
                            src="https://zepage.my.canva.site/cnm-home/_assets/media/8a671f9e2c9124a84ecd8aca85de3e10.png"
                            alt="Cak Ning Surabaya Team - Friendly & Open">
                    </div>

                    <!-- Social Media -->
                    <div class="w-full lg:w-fit">
                        <h2 class="text-lg lg:text-2xl font-medium text-white mb-4 text-center">
                            Connect with us
                        </h2>
                        <div class="flex justify-center lg:justify-start space-x-6">
                            @php
                                $socialLinks = [
                                    [
                                        'url' => 'https://www.youtube.com/@cakningsurabaya',
                                        'class' => 'text-white hover:text-red-400 transition-colors',
                                        'icon' => 'mdi:youtube',
                                    ],
                                    [
                                        'url' => 'https://www.instagram.com/cakningsurabaya',
                                        'class' => 'text-white hover:text-pink-400 transition-colors',
                                        'icon' => 'mdi:instagram',
                                    ],
                                    [
                                        'url' => 'https://www.tiktok.com/@cakningsurabaya',
                                        'class' => 'text-white hover:text-black transition-colors',
                                        'icon' => 'ic:baseline-tiktok',
                                    ],
                                    [
                                        'url' => 'https://wa.me/6287846115017',
                                        'class' => 'text-white hover:text-green-400 transition-colors',
                                        'icon' => 'mdi:whatsapp',
                                    ],
                                ];
                            @endphp

                            @foreach ($socialLinks as $link)
                                <a href="{{ $link['url'] }}" target="_blank" class="{{ $link['class'] }}">
                                    <span class="iconify" data-icon="{{ $link['icon'] }}" data-width="32"
                                        data-height="32"></span>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>

                <!-- Bagian 2: Contact Information -->
                <div class="basis-1/5 w-full lg:w-fit flex flex-col items-center lg:items-start">
                    <div class="w-full max-w-lg space-y-8">
                        @php
                            $contactInfo = [
                                [
                                    'title' => 'Address',
                                    'details' => [
                                        [
                                            'text' =>
                                                'Gedung Siola Lantai 2   Jl. Tunjungan No.2, Genteng, Kec. Genteng, Surabaya, Jawa Timur 60275',
                                            'url' => 'https://maps.app.goo.gl/ttbgQpCReCwkQc778',
                                        ],
                                    ],
                                ],
                                [
                                    'title' => 'Phone Number',
                                    'details' => [
                                        [
                                            'text' => '0878-4611-5017 (Chellyne)',
                                            'url' => 'https://wa.me/6287846115017',
                                        ],
                                        [
                                            'text' => '0822-3456-8268 (Avisa)',
                                            'url' => 'https://wa.me/6282234568268',
                                        ],
                                    ],
                                ],
                                [
                                    'title' => 'E-mail',
                                    'details' => [
                                        [
                                            'text' => 'humascakningsby@gmail.com',
                                            'url' => 'mailto:humascakningsby@gmail.com',
                                        ],
                                    ],
                                ],
                            ];
                        @endphp

                        @foreach ($contactInfo as $info)
                            <div class="w-fit flex-nowrap lg:text-left">
                                <h3 class="w-fit flex-nowrap text-xl lg:text-2xl font-semibold text-merino-50 mb-3">
                                    {{ $info['title'] }}
                                </h3>
                                @foreach ($info['details'] as $detail)
                                    <p class="w-fit flex-nowrap text-merino-200 mb-1 text-base lg:text-lg">
                                        <a href="{{ $detail['url'] }}" target="_blank"
                                            class="hover:underline hover:text-pumpkin-500 transition">
                                            {{ $detail['text'] }}
                                        </a>
                                    </p>
                                @endforeach
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
@section('scripts')
    {{-- HERO CARD --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const stack = document.getElementById('heroStack');

            stack.addEventListener('click', () => {
                const images = Array.from(stack.children);
                if (images.length < 2) return;

                const first = images[0];

                // Slide the top card to the right and fade out slightly
                first.style.transition = "transform 0.5s cubic-bezier(.4,2,.3,1), opacity 0.3s";
                first.style.transform = " translateX(120px) rotate(12deg) scale(0.95)";

                setTimeout(() => {
                    // Move the card to the back
                    stack.appendChild(first);

                    // Reset all cards to their new positions
                    Array.from(stack.children).forEach((img, i) => {
                        img.style.transition =
                            "transform 0.5s cubic-bezier(.4,2,.3,1), opacity 0.3s";
                        img.style.transform =
                            `translateX(${(i - 1) * 32}px) translateY(${Math.abs(i - 1) * 12}px) scale(${1 - i * 0.05}) rotate(${(i - 1) * 5}deg)`;
                        img.style.zIndex = stack.children.length - i;
                    });
                }, 500);
            });
        });
    </script>

    {{-- CAROUSEL --}}
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const totalSlides = {{ count($carouselImages) }};
            let current = 1;
            let intervalId;
            let paused = false;

            function showSlide(idx) {
                for (let i = 1; i <= totalSlides; i++) {
                    document.getElementById('carousel-slide-' + i).classList.remove('opacity-100', 'z-10');
                    document.getElementById('carousel-slide-' + i).classList.add('opacity-0', 'z-0');
                }
                document.getElementById('carousel-slide-' + idx).classList.remove('opacity-0', 'z-0');
                document.getElementById('carousel-slide-' + idx).classList.add('opacity-100', 'z-10');
                current = idx;
            }

            function nextSlide() {
                let next = current + 1 > totalSlides ? 1 : current + 1;
                showSlide(next);
            }

            function prevSlide() {
                let prev = current - 1 < 1 ? totalSlides : current - 1;
                showSlide(prev);
            }

            function startAutoSlide() {
                if (!intervalId) {
                    intervalId = setInterval(() => {
                        if (!paused) nextSlide();
                    }, 5000);
                }
            }

            function stopAutoSlide() {
                if (intervalId) {
                    clearInterval(intervalId);
                    intervalId = null;
                }
            }

            // Pause auto-slide on mouse enter, resume on mouse leave
            const carousel = document.getElementById('cakning-carousel');
            const nextBtn = document.getElementById('carousel-next');
            const prevBtn = document.getElementById('carousel-prev');

            [carousel, nextBtn, prevBtn].forEach(el => {
                el.addEventListener('mouseenter', () => {
                    paused = true;
                });
                el.addEventListener('mouseleave', () => {
                    paused = false;
                });
            });

            nextBtn.addEventListener('click', function() {
                nextSlide();
            });
            prevBtn.addEventListener('click', function() {
                prevSlide();
            });

            showSlide(current);
            startAutoSlide();
        });
    </script>
@endsection
