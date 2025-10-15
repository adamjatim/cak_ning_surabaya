@extends('layouts.app')
@section('title', 'Galeri - Cak Ning Surabaya')
@section('styles')
    <style>
        /* Batik Mega Mendung pattern untuk halaman Gallery */
        .batik-mega-mendung {
            background-image:
                repeating-conic-gradient(from 45deg at 50px 50px,
                    rgba(245, 158, 11, 0.08) 0deg 90deg,
                    transparent 90deg 180deg,
                    rgba(245, 158, 11, 0.05) 180deg 270deg,
                    transparent 270deg 360deg),
                radial-gradient(circle at 25px 25px, rgba(245, 158, 11, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 75px 75px, rgba(245, 158, 11, 0.06) 1px, transparent 1px);
            background-size: 100px 100px, 50px 50px, 50px 50px;
        }

        .batik-sekar-jagad {
            background-image:
                radial-gradient(circle at 30px 30px, rgba(245, 158, 11, 0.1) 4px, transparent 4px),
                radial-gradient(circle at 70px 30px, rgba(245, 158, 11, 0.08) 3px, transparent 3px),
                radial-gradient(circle at 50px 60px, rgba(245, 158, 11, 0.06) 2px, transparent 2px),
                linear-gradient(45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%);
            background-size: 100px 100px, 100px 100px, 100px 100px, 20px 20px, 20px 20px;
        }

        .gallery-item {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            overflow: hidden;
        }
        .gallery-item:hover {
            transform: scale(1.05);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .gallery-item img {
            transition: transform 0.3s ease;
        }
        .gallery-item:hover img {
            transform: scale(1.1);
        }
        .masonry-grid {
            column-count: 1;
            column-gap: 1rem;
            margin: 0;
        }
        @media (min-width: 768px) {
            .masonry-grid {
                column-count: 2;
            }
        }
        @media (min-width: 1024px) {
            .masonry-grid {
                column-count: 3;
            }
        }
        @media (min-width: 1280px) {
            .masonry-grid {
                column-count: 4;
            }
        }
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 1rem;
            display: inline-block;
            width: 100%;
        }
        .filter-btn {
            transition: all 0.3s ease;
        }
        .filter-btn.active {
            background: linear-gradient(135deg, #f59e42, #d69e2e);
            color: white;
        }
    </style>
@endsection
@section('content')
    {{-- -------------------------------------- --}}
    {{-- HERO SECTION --}}
    {{-- -------------------------------------- --}}
    <div class="hero bg-olive-800 min-h-screen batik-mega-mendung">
        <div class="hero-content flex-col lg:flex-row lg:gap-20">
            <div class="text-center lg:text-left lg:max-w-2xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-pumpkin-500 mb-6 leading-tight">
                    Galeri Foto & Video
                </h1>
                <p class="text-base md:text-xl lg:text-2xl text-merino-100 mb-4">
                    Dokumentasi momen berharga dari berbagai kegiatan Cak & Ning Surabaya
                </p>
                <p class="text-sm md:text-lg lg:text-xl text-merino-200 mb-8">
                    Lihat koleksi foto dan video terbaik dari event, workshop, kolaborasi, dan kegiatan lainnya yang menampilkan pesona Kota Surabaya.
                </p>
                <a href="#gallery-content"
                    class="inline-flex items-center px-6 py-3 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition text-base md:text-lg lg:text-xl">
                    Lihat Galeri
                    <span class="iconify ml-2" data-icon="mdi:image-multiple" data-width="28"></span>
                </a>
            </div>

            <div class="relative flex justify-center items-center h-[420px] md:h-[520px] lg:h-[600px] overflow-visible">
                <img src="https://zepage.my.canva.site/cnm-home/_assets/media/cb4ee8e99dc861f180a50cf9f4793f10.jpg"
                     alt="Cak Ning Surabaya Gallery"
                     class="w-[300px] h-[400px] md:w-[400px] md:h-[500px] lg:w-[450px] lg:h-[550px] rounded-xl shadow-lg object-cover">
            </div>
        </div>
    </div>

    {{-- -------------------------------------- --}}
    {{-- FILTER SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-8 batik-sekar-jagad">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="flex flex-wrap justify-center gap-4">
                <button class="filter-btn active px-6 py-2 rounded-full border border-pumpkin-500 text-pumpkin-500 font-medium hover:bg-pumpkin-500 hover:text-white" data-filter="all">
                    Semua
                </button>
                <button class="filter-btn px-6 py-2 rounded-full border border-pumpkin-500 text-pumpkin-500 font-medium hover:bg-pumpkin-500 hover:text-white" data-filter="event">
                    Event
                </button>
                <button class="filter-btn px-6 py-2 rounded-full border border-pumpkin-500 text-pumpkin-500 font-medium hover:bg-pumpkin-500 hover:text-white" data-filter="workshop">
                    Workshop
                </button>
                <button class="filter-btn px-6 py-2 rounded-full border border-pumpkin-500 text-pumpkin-500 font-medium hover:bg-pumpkin-500 hover:text-white" data-filter="collaboration">
                    Kolaborasi
                </button>
                <button class="filter-btn px-6 py-2 rounded-full border border-pumpkin-500 text-pumpkin-500 font-medium hover:bg-pumpkin-500 hover:text-white" data-filter="tourism">
                    Wisata
                </button>
                <button class="filter-btn px-6 py-2 rounded-full border border-pumpkin-500 text-pumpkin-500 font-medium hover:bg-pumpkin-500 hover:text-white" data-filter="behind-scenes">
                    Behind The Scenes
                </button>
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- GALLERY CONTENT SECTION --}}
    {{-- -------------------------------------- --}}
    <section id="gallery-content" class="bg-merino-50 py-16 batik-sekar-jagad">
        <div class="container max-w-screen-xl mx-auto px-6">
            @php
                $galleryItems = [
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                        'title' => 'Seleksi Cak & Ning 2023',
                        'category' => 'event',
                        'description' => 'Momen bersejarah pemilihan duta pariwisata Surabaya',
                        'type' => 'image',
                        'height' => 'h-64'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'title' => 'Heritage Walk Surabaya',
                        'category' => 'tourism',
                        'description' => 'Jelajah wisata sejarah bersama peserta',
                        'type' => 'image',
                        'height' => 'h-80'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg',
                        'title' => 'Workshop Public Speaking',
                        'category' => 'workshop',
                        'description' => 'Pelatihan kemampuan komunikasi publik',
                        'type' => 'image',
                        'height' => 'h-72'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/c04e16359e858e7eb6f4cca1947bb75c.jpg',
                        'title' => 'Kolaborasi Brand Lokal',
                        'category' => 'collaboration',
                        'description' => 'Kerjasama dengan produk UMKM Surabaya',
                        'type' => 'image',
                        'height' => 'h-60'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/a576ecb53e12f12dae5a1e144982771b.jpg',
                        'title' => 'Festival Rujak Uleg',
                        'category' => 'event',
                        'description' => 'Event kuliner terbesar Surabaya',
                        'type' => 'image',
                        'height' => 'h-96'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/ce350c0a0c6fb0f4f9a412c8a5e8fe3c.jpg',
                        'title' => 'Persiapan Event',
                        'category' => 'behind-scenes',
                        'description' => 'Di balik layar persiapan acara besar',
                        'type' => 'image',
                        'height' => 'h-56'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/85f0d1f27b64c891922ce313e5c60c59.jpg',
                        'title' => 'Photoshoot Produk',
                        'category' => 'collaboration',
                        'description' => 'Sesi foto untuk brand partner',
                        'type' => 'image',
                        'height' => 'h-64'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/cb4ee8e99dc861f180a50cf9f4793f10.jpg',
                        'title' => 'Content Creation Session',
                        'category' => 'behind-scenes',
                        'description' => 'Proses pembuatan konten media sosial',
                        'type' => 'image',
                        'height' => 'h-72'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                        'title' => 'Cakningkustik Performance',
                        'category' => 'event',
                        'description' => 'Penampilan musik akustik di Taman Bungkul',
                        'type' => 'image',
                        'height' => 'h-80'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                        'title' => 'Workshop Fotografi',
                        'category' => 'workshop',
                        'description' => 'Belajar teknik fotografi untuk content creator',
                        'type' => 'image',
                        'height' => 'h-68'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'title' => 'City Tour Keliling Surabaya',
                        'category' => 'tourism',
                        'description' => 'Mengelilingi landmark ikonik Kota Pahlawan',
                        'type' => 'image',
                        'height' => 'h-76'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg',
                        'title' => 'Meeting Preparation',
                        'category' => 'behind-scenes',
                        'description' => 'Rapat koordinasi tim sebelum event',
                        'type' => 'image',
                        'height' => 'h-60'
                    ]
                ];
            @endphp

            <div class="masonry-grid" id="gallery-grid">
                @foreach($galleryItems as $item)
                <div class="masonry-item gallery-filter-item" data-category="{{ $item['category'] }}">
                    <div class="gallery-item bg-white rounded-xl shadow-md overflow-hidden cursor-pointer">
                        <div class="relative {{ $item['height'] }}">
                            <img src="{{ $item['image'] }}" alt="{{ $item['title'] }}" class="w-full h-full object-cover">
                            <div class="absolute inset-0 bg-black opacity-0 hover:opacity-70 transition-all duration-300 flex items-center justify-center">
                                <div class="opacity-0 hover:opacity-100 transition-opacity duration-300 text-center text-white p-4">
                                    <span class="iconify mb-2" data-icon="mdi:eye" data-width="32"></span>
                                    <h3 class="font-semibold mb-1">{{ $item['title'] }}</h3>
                                    <p class="text-sm">{{ $item['description'] }}</p>
                                </div>
                            </div>
                        </div>
                        <div class="p-4">
                            <div class="flex items-center justify-between">
                                <h3 class="font-semibold text-olive-800 text-sm">{{ $item['title'] }}</h3>
                                <span class="bg-pumpkin-100 text-pumpkin-700 px-2 py-1 rounded-full text-xs">
                                    {{ ucfirst(str_replace('-', ' ', $item['category'])) }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- VIDEO GALLERY SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-pumpkin-500 py-16 batik-mega-mendung">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-900 mb-4">Video Highlight</h2>
                <p class="text-lg text-olive-800 max-w-3xl mx-auto">
                    Koleksi video terbaik dari berbagai kegiatan dan momen berharga Cak & Ning Surabaya
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $videoItems = [
                        [
                            'thumbnail' => 'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                            'title' => 'Seleksi Cak & Ning 2023 - Highlight',
                            'duration' => '5:24',
                            'description' => 'Kompilasi momen terbaik dari ajang pemilihan duta pariwisata Surabaya',
                            'views' => '12.5K'
                        ],
                        [
                            'thumbnail' => 'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                            'title' => 'Cakningkustik - Lagu Surabaya',
                            'duration' => '3:45',
                            'description' => 'Performance musik akustik dengan lagu cinta untuk Kota Surabaya',
                            'views' => '8.7K'
                        ],
                        [
                            'thumbnail' => 'https://zepage.my.canva.site/cnm-home/_assets/media/c04e16359e858e7eb6f4cca1947bb75c.jpg',
                            'title' => 'Heritage Walk - Kota Tua Surabaya',
                            'duration' => '8:12',
                            'description' => 'Jelajah sejarah dan budaya di kawasan heritage Surabaya',
                            'views' => '15.2K'
                        ]
                    ];
                @endphp

                @foreach($videoItems as $video)
                <div class="bg-white rounded-xl shadow-md overflow-hidden hover:shadow-lg transition cursor-pointer">
                    <div class="relative">
                        <img src="{{ $video['thumbnail'] }}" alt="{{ $video['title'] }}" class="w-full h-48 object-cover">
                        <div class="absolute inset-0 bg-black bg-opacity-40 flex items-center justify-center hover:bg-opacity-60 transition">
                            <div class="bg-white bg-opacity-20 rounded-full p-4 hover:bg-opacity-30 transition">
                                <span class="iconify text-white" data-icon="mdi:play" data-width="32"></span>
                            </div>
                        </div>
                        <div class="absolute bottom-2 right-2 bg-black bg-opacity-80 text-white px-2 py-1 rounded text-xs">
                            {{ $video['duration'] }}
                        </div>
                    </div>
                    <div class="p-4">
                        <h3 class="font-semibold text-olive-800 mb-2">{{ $video['title'] }}</h3>
                        <p class="text-olive-700 text-sm mb-3">{{ $video['description'] }}</p>
                        <div class="flex items-center justify-between text-xs text-olive-600">
                            <div class="flex items-center">
                                <span class="iconify mr-1" data-icon="mdi:eye" data-width="14"></span>
                                <span>{{ $video['views'] }} views</span>
                            </div>
                            <div class="flex items-center">
                                <span class="iconify mr-1" data-icon="mdi:video" data-width="14"></span>
                                <span>Video</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- STATISTICS SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-olive-950 py-16 batik-mega-mendung">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-merino-50 mb-4">Galeri Dalam Angka</h2>
            </div>

            <div class="grid md:grid-cols-4 gap-8">
                @php
                    $stats = [
                        ['icon' => 'mdi:camera', 'number' => '2,500+', 'label' => 'Total Foto'],
                        ['icon' => 'mdi:video', 'number' => '150+', 'label' => 'Video Koleksi'],
                        ['icon' => 'mdi:calendar-star', 'number' => '50+', 'label' => 'Event Terdokumentasi'],
                        ['icon' => 'mdi:eye', 'number' => '100K+', 'label' => 'Total Views']
                    ];
                @endphp

                @foreach($stats as $stat)
                <div class="text-center bg-olive-900 p-6 rounded-xl">
                    <div class="text-pumpkin-500 mb-4">
                        <span class="iconify" data-icon="{{ $stat['icon'] }}" data-width="48"></span>
                    </div>
                    <h3 class="text-3xl font-bold text-merino-50 mb-2">{{ $stat['number'] }}</h3>
                    <p class="text-merino-200">{{ $stat['label'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- CTA SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-sekar-jagad">
        <div class="container max-w-screen-md mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-6">Ingin Dokumentasi Event Anda?</h2>
            <p class="text-lg text-olive-700 mb-8 max-w-2xl mx-auto">
                Tim Cak & Ning Surabaya siap membantu mendokumentasikan event atau kegiatan Anda dengan profesional dan kreatif.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6287846115017" target="_blank"
                   class="inline-flex items-center px-8 py-4 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-pumpkin-600 transition">
                    <span class="iconify mr-2" data-icon="mdi:whatsapp" data-width="24"></span>
                    Hubungi Untuk Kolaborasi
                </a>
                <a href="https://instagram.com/cakningsurabaya" target="_blank"
                   class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-olive-800 text-olive-800 rounded-full font-semibold hover:bg-olive-800 hover:text-white transition">
                    <span class="iconify mr-2" data-icon="mdi:instagram" data-width="24"></span>
                    Follow Instagram
                </a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const filterButtons = document.querySelectorAll('.filter-btn');
        const galleryItems = document.querySelectorAll('.gallery-filter-item');

        filterButtons.forEach(button => {
            button.addEventListener('click', function() {
                const filter = this.getAttribute('data-filter');

                // Update active button
                filterButtons.forEach(btn => btn.classList.remove('active'));
                this.classList.add('active');

                // Filter gallery items
                galleryItems.forEach(item => {
                    const category = item.getAttribute('data-category');

                    if (filter === 'all' || category === filter) {
                        item.style.display = 'inline-block';
                        setTimeout(() => {
                            item.style.opacity = '1';
                            item.style.transform = 'translateY(0)';
                        }, 100);
                    } else {
                        item.style.opacity = '0';
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 300);
                    }
                });
            });
        });
    });
</script>
@endsection
