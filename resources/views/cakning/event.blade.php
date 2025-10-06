@extends('layouts.app')
@section('title', 'Event - Cak Ning Surabaya')
@section('styles')
    <style>
        /* Batik Patterns untuk halaman Event */
        .batik-kawung-event {
            background-image:
                radial-gradient(circle at 25px 25px, rgba(245, 158, 11, 0.1) 8px, transparent 8px),
                radial-gradient(circle at 75px 25px, rgba(245, 158, 11, 0.08) 6px, transparent 6px),
                radial-gradient(circle at 25px 75px, rgba(245, 158, 11, 0.08) 6px, transparent 6px),
                radial-gradient(circle at 75px 75px, rgba(245, 158, 11, 0.1) 8px, transparent 8px);
            background-size: 100px 100px;
        }

        .batik-parang-event {
            background-image:
                repeating-linear-gradient(45deg,
                    rgba(245, 158, 11, 0.08) 0px,
                    rgba(245, 158, 11, 0.08) 8px,
                    transparent 8px,
                    transparent 16px
                ),
                repeating-linear-gradient(-45deg,
                    rgba(245, 158, 11, 0.05) 0px,
                    rgba(245, 158, 11, 0.05) 4px,
                    transparent 4px,
                    transparent 12px
                );
            background-size: 32px 32px, 24px 24px;
        }

        .event-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .event-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .event-badge {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: linear-gradient(135deg, #f59e42, #d69e2e);
            color: white;
            padding: 0.5rem 1rem;
            border-radius: 1rem;
            font-size: 0.875rem;
            font-weight: 600;
        }
    </style>
@endsection
@section('content')
    {{-- -------------------------------------- --}}
    {{-- HERO SECTION --}}
    {{-- -------------------------------------- --}}
    <div class="hero bg-olive-800 min-h-screen batik-kawung-event">
        <div class="hero-content flex-col lg:flex-row lg:gap-20">
            <div class="text-center lg:text-left lg:max-w-2xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-pumpkin-500 mb-6 leading-tight">
                    Event & Kegiatan
                </h1>
                <p class="text-base md:text-xl lg:text-2xl text-merino-100 mb-4">
                    Berbagai kegiatan dan event menarik dari Cak & Ning Surabaya
                </p>
                <p class="text-sm md:text-lg lg:text-xl text-merino-200 mb-8">
                    Mulai dari promosi pariwisata, workshop, hingga kolaborasi dengan berbagai brand dan instansi untuk mengembangkan potensi generasi muda Surabaya.
                </p>
                <a href="#upcoming-events"
                    class="inline-flex items-center px-6 py-3 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition text-base md:text-lg lg:text-xl">
                    Lihat Event Terbaru
                    <span class="iconify ml-2" data-icon="mdi:calendar-star" data-width="28"></span>
                </a>
            </div>

            <div class="relative flex justify-center items-center h-[420px] md:h-[520px] lg:h-[600px] overflow-visible">
                <img src="https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg"
                     alt="Cak Ning Surabaya Events"
                     class="w-[300px] h-[400px] md:w-[400px] md:h-[500px] lg:w-[450px] lg:h-[550px] rounded-xl shadow-lg object-cover">
            </div>
        </div>
    </div>

    {{-- -------------------------------------- --}}
    {{-- UPCOMING EVENTS SECTION --}}
    {{-- -------------------------------------- --}}
    <section id="upcoming-events" class="bg-merino-50 py-16 batik-parang-event">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-4">Event Mendatang</h2>
                <p class="text-lg text-olive-700 max-w-3xl mx-auto">
                    Jangan lewatkan kesempatan untuk berpartisipasi dalam berbagai event menarik yang akan datang
                </p>
            </div>

            @php
                $upcomingEvents = [
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'title' => 'Seleksi Cak & Ning Surabaya 2024',
                        'date' => '15 Maret 2024',
                        'time' => '08:00 - 17:00 WIB',
                        'location' => 'Gedung Siola, Surabaya',
                        'desc' => 'Ajang pemilihan duta pariwisata dan budaya Kota Surabaya tahun 2024. Terbuka untuk pemuda-pemudi usia 18-25 tahun.',
                        'status' => 'Upcoming',
                        'category' => 'Kompetisi'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/c04e16359e858e7eb6f4cca1947bb75c.jpg',
                        'title' => 'Surabaya Heritage Walk',
                        'date' => '22 Maret 2024',
                        'time' => '06:00 - 12:00 WIB',
                        'location' => 'Kota Tua Surabaya',
                        'desc' => 'Jelajahi keindahan dan sejarah Kota Surabaya bersama Cak & Ning. Gratis untuk 100 peserta pertama.',
                        'status' => 'Open Registration',
                        'category' => 'Wisata'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                        'title' => 'Cakningkustik Night',
                        'date' => '5 April 2024',
                        'time' => '19:00 - 22:00 WIB',
                        'location' => 'Taman Bungkul',
                        'desc' => 'Malam musik akustik bersama Cak & Ning Surabaya dan musisi lokal. Bring your own mat!',
                        'status' => 'Coming Soon',
                        'category' => 'Hiburan'
                    ]
                ];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($upcomingEvents as $event)
                <div class="event-card bg-white rounded-xl shadow-md overflow-hidden relative">
                    <div class="event-badge">{{ $event['status'] }}</div>
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center mb-2">
                            <span class="bg-pumpkin-100 text-pumpkin-700 px-2 py-1 rounded-full text-xs font-medium">
                                {{ $event['category'] }}
                            </span>
                        </div>
                        <h3 class="text-xl font-semibold text-olive-800 mb-3">{{ $event['title'] }}</h3>
                        <div class="space-y-2 mb-4">
                            <div class="flex items-center text-olive-600">
                                <span class="iconify mr-2" data-icon="mdi:calendar" data-width="16"></span>
                                <span class="text-sm">{{ $event['date'] }}</span>
                            </div>
                            <div class="flex items-center text-olive-600">
                                <span class="iconify mr-2" data-icon="mdi:clock" data-width="16"></span>
                                <span class="text-sm">{{ $event['time'] }}</span>
                            </div>
                            <div class="flex items-center text-olive-600">
                                <span class="iconify mr-2" data-icon="mdi:map-marker" data-width="16"></span>
                                <span class="text-sm">{{ $event['location'] }}</span>
                            </div>
                        </div>
                        <p class="text-olive-700 text-sm mb-4">{{ $event['desc'] }}</p>
                        <button class="w-full bg-pumpkin-500 text-white py-2 rounded-lg font-semibold hover:bg-pumpkin-600 transition">
                            Daftar Sekarang
                        </button>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- PAST EVENTS SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-pumpkin-500 py-16 batik-kawung-event">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-900 mb-4">Event Sebelumnya</h2>
                <p class="text-lg text-olive-800 max-w-3xl mx-auto">
                    Lihat dokumentasi berbagai event sukses yang telah kami selenggarakan
                </p>
            </div>

            @php
                $pastEvents = [
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                        'title' => 'Festival Rujak Uleg 2023',
                        'date' => 'Desember 2023',
                        'desc' => 'Event kuliner terbesar Surabaya dengan partisipasi 500+ peserta',
                        'participants' => '500+ Peserta'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/a576ecb53e12f12dae5a1e144982771b.jpg',
                        'title' => 'Surabaya Cross Culture Festival 2023',
                        'date' => 'November 2023',
                        'desc' => 'Perayaan keberagaman budaya dengan 20+ komunitas',
                        'participants' => '1000+ Peserta'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/ce350c0a0c6fb0f4f9a412c8a5e8fe3c.jpg',
                        'title' => 'Workshop Public Speaking',
                        'date' => 'Oktober 2023',
                        'desc' => 'Pelatihan kemampuan komunikasi untuk generasi muda',
                        'participants' => '100+ Peserta'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/85f0d1f27b64c891922ce313e5c60c59.jpg',
                        'title' => 'Collaboration with Brand X',
                        'date' => 'September 2023',
                        'desc' => 'Kerjasama promosi brand lokal dengan Cak & Ning',
                        'participants' => 'Brand Partnership'
                    ]
                ];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">
                @foreach($pastEvents as $event)
                <div class="bg-white rounded-xl overflow-hidden shadow-md hover:shadow-lg transition">
                    <img src="{{ $event['image'] }}" alt="{{ $event['title'] }}" class="w-full h-32 object-cover">
                    <div class="p-4">
                        <h3 class="font-semibold text-olive-800 mb-2">{{ $event['title'] }}</h3>
                        <p class="text-sm text-olive-600 mb-2">{{ $event['date'] }}</p>
                        <p class="text-xs text-olive-700 mb-3">{{ $event['desc'] }}</p>
                        <div class="text-xs bg-olive-100 text-olive-800 px-2 py-1 rounded-full inline-block">
                            {{ $event['participants'] }}
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- EVENT CATEGORIES SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-parang-event">
        <div class="container max-w-screen-lg mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-12">Kategori Event</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $categories = [
                        ['icon' => 'mdi:trophy', 'title' => 'Kompetisi', 'desc' => 'Seleksi Cak & Ning dan berbagai lomba'],
                        ['icon' => 'mdi:map', 'title' => 'Wisata', 'desc' => 'Heritage walk dan city tour'],
                        ['icon' => 'mdi:school', 'title' => 'Workshop', 'desc' => 'Pelatihan dan pengembangan skill'],
                        ['icon' => 'mdi:music', 'title' => 'Hiburan', 'desc' => 'Cakningkustik dan acara seni']
                    ];
                @endphp

                @foreach($categories as $cat)
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-pumpkin-500 mb-4">
                        <span class="iconify" data-icon="{{ $cat['icon'] }}" data-width="48"></span>
                    </div>
                    <h3 class="text-xl font-semibold text-olive-800 mb-2">{{ $cat['title'] }}</h3>
                    <p class="text-olive-700">{{ $cat['desc'] }}</p>
                </div>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- CTA SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-olive-950 py-16 batik-kawung-event">
        <div class="container max-w-screen-md mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-merino-50 mb-6">Ingin Berkolaborasi?</h2>
            <p class="text-lg text-merino-200 mb-8 max-w-2xl mx-auto">
                Kami terbuka untuk berbagai bentuk kolaborasi event. Hubungi kami untuk mendiskusikan ide event Anda!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="https://wa.me/6287846115017" target="_blank"
                   class="inline-flex items-center px-8 py-4 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-pumpkin-600 transition">
                    <span class="iconify mr-2" data-icon="mdi:whatsapp" data-width="24"></span>
                    Hubungi Via WhatsApp
                </a>
                <a href="mailto:humascakningsby@gmail.com"
                   class="inline-flex items-center px-8 py-4 bg-transparent border-2 border-merino-50 text-merino-50 rounded-full font-semibold hover:bg-merino-50 hover:text-olive-950 transition">
                    <span class="iconify mr-2" data-icon="mdi:email" data-width="24"></span>
                    Kirim Email
                </a>
            </div>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
