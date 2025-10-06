@extends('layouts.app')
@section('title', 'Blog - Cak Ning Surabaya')
@section('styles')
    <style>
        /* Batik Sido Mukti pattern untuk halaman Blog */
        .batik-sido-mukti-blog {
            background-image:
                radial-gradient(ellipse at 30px 20px, rgba(245, 158, 11, 0.12) 3px, transparent 3px),
                radial-gradient(ellipse at 70px 20px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(ellipse at 50px 50px, rgba(245, 158, 11, 0.1) 4px, transparent 4px),
                radial-gradient(ellipse at 30px 80px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(ellipse at 70px 80px, rgba(245, 158, 11, 0.12) 3px, transparent 3px);
            background-size: 100px 100px;
        }

        .batik-floral-blog {
            background-image:
                radial-gradient(circle at 20px 20px, rgba(245, 158, 11, 0.08) 3px, transparent 3px),
                radial-gradient(circle at 60px 20px, rgba(245, 158, 11, 0.06) 2px, transparent 2px),
                radial-gradient(circle at 40px 40px, rgba(245, 158, 11, 0.1) 1px, transparent 1px),
                radial-gradient(circle at 20px 60px, rgba(245, 158, 11, 0.06) 2px, transparent 2px),
                radial-gradient(circle at 60px 60px, rgba(245, 158, 11, 0.08) 3px, transparent 3px);
            background-size: 80px 80px;
        }

        .blog-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .blog-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .blog-meta {
            font-size: 0.875rem;
            color: #6b7280;
        }
        .blog-excerpt {
            display: -webkit-box;
            -webkit-line-clamp: 3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
    </style>
@endsection
@section('content')
    {{-- -------------------------------------- --}}
    {{-- HERO SECTION --}}
    {{-- -------------------------------------- --}}
    <div class="hero bg-olive-800 min-h-screen batik-sido-mukti-blog">
        <div class="hero-content flex-col lg:flex-row lg:gap-20">
            <div class="text-center lg:text-left lg:max-w-2xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-pumpkin-500 mb-6 leading-tight">
                    Blog & Artikel
                </h1>
                <p class="text-base md:text-xl lg:text-2xl text-merino-100 mb-4">
                    Cerita, tips, dan informasi menarik dari Cak & Ning Surabaya
                </p>
                <p class="text-sm md:text-lg lg:text-xl text-merino-200 mb-8">
                    Temukan berbagai artikel tentang pariwisata Surabaya, budaya lokal, tips menjadi duta wisata, dan pengalaman menarik dari para Cak & Ning.
                </p>
                <a href="#latest-posts"
                    class="inline-flex items-center px-6 py-3 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition text-base md:text-lg lg:text-xl">
                    Baca Artikel Terbaru
                    <span class="iconify ml-2" data-icon="mdi:book-open" data-width="28"></span>
                </a>
            </div>

            <div class="relative flex justify-center items-center h-[420px] md:h-[520px] lg:h-[600px] overflow-visible">
                <img src="https://zepage.my.canva.site/cnm-home/_assets/media/ce350c0a0c6fb0f4f9a412c8a5e8fe3c.jpg"
                     alt="Cak Ning Surabaya Blog"
                     class="w-[300px] h-[400px] md:w-[400px] md:h-[500px] lg:w-[450px] lg:h-[550px] rounded-xl shadow-lg object-cover">
            </div>
        </div>
    </div>

    {{-- -------------------------------------- --}}
    {{-- FEATURED POST SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-floral-blog">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-4">Artikel Pilihan</h2>
            </div>

            @php
                $featuredPost = [
                    'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/1f2acd1da39cb8b18f034842268e3c57.jpg',
                    'category' => 'Pariwisata',
                    'title' => '10 Hidden Gems Surabaya yang Wajib Dikunjungi Bersama Cak & Ning',
                    'excerpt' => 'Surabaya tidak hanya terkenal dengan Tugu Pahlawan dan Jembatan Suramadu. Bersama Cak & Ning, mari eksplorasi tempat-tempat tersembunyi yang tidak kalah menarik dan Instagram-able di Kota Pahlawan ini.',
                    'author' => 'Cak Budi & Ning Sari',
                    'date' => '15 Februari 2024',
                    'read_time' => '8 min read',
                    'link' => '#'
                ];
            @endphp

            <div class="bg-white rounded-xl shadow-lg overflow-hidden lg:flex">
                <div class="lg:w-1/2">
                    <img src="{{ $featuredPost['image'] }}" alt="{{ $featuredPost['title'] }}" class="w-full h-64 lg:h-full object-cover">
                </div>
                <div class="lg:w-1/2 p-8 flex flex-col justify-center">
                    <div class="flex items-center mb-4">
                        <span class="bg-pumpkin-100 text-pumpkin-700 px-3 py-1 rounded-full text-sm font-medium mr-3">
                            {{ $featuredPost['category'] }}
                        </span>
                        <span class="bg-olive-100 text-olive-700 px-2 py-1 rounded-full text-xs">Featured</span>
                    </div>
                    <h3 class="text-2xl lg:text-3xl font-bold text-olive-800 mb-4">{{ $featuredPost['title'] }}</h3>
                    <p class="text-olive-700 mb-6 leading-relaxed">{{ $featuredPost['excerpt'] }}</p>
                    <div class="flex items-center justify-between">
                        <div class="blog-meta">
                            <div class="flex items-center mb-2">
                                <span class="iconify mr-1" data-icon="mdi:account" data-width="16"></span>
                                <span>{{ $featuredPost['author'] }}</span>
                            </div>
                            <div class="flex items-center space-x-4">
                                <div class="flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:calendar" data-width="16"></span>
                                    <span>{{ $featuredPost['date'] }}</span>
                                </div>
                                <div class="flex items-center">
                                    <span class="iconify mr-1" data-icon="mdi:clock" data-width="16"></span>
                                    <span>{{ $featuredPost['read_time'] }}</span>
                                </div>
                            </div>
                        </div>
                        <a href="{{ $featuredPost['link'] }}" class="bg-pumpkin-500 text-white px-6 py-2 rounded-full font-semibold hover:bg-pumpkin-600 transition">
                            Baca Selengkapnya
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- LATEST POSTS SECTION --}}
    {{-- -------------------------------------- --}}
    <section id="latest-posts" class="bg-pumpkin-500 py-16 batik-sido-mukti-blog">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-900 mb-4">Artikel Terbaru</h2>
                <p class="text-lg text-olive-800 max-w-3xl mx-auto">
                    Update terbaru dari dunia Cak & Ning Surabaya dan pariwisata Kota Pahlawan
                </p>
            </div>

            @php
                $latestPosts = [
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg',
                        'category' => 'Tips & Trick',
                        'title' => 'Cara Menjadi Cak & Ning Surabaya yang Sukses',
                        'excerpt' => 'Rahasia di balik kesuksesan para finalis Cak & Ning dalam mengemban peran sebagai duta pariwisata dan budaya Kota Surabaya.',
                        'author' => 'Ning Putri',
                        'date' => '12 Februari 2024',
                        'read_time' => '5 min'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/4cafb3ca8af6453a81fe665697b7c02e.jpg',
                        'category' => 'Event',
                        'title' => 'Recap: Seleksi Cak & Ning Surabaya 2023',
                        'excerpt' => 'Momen-momen berkesan dari ajang pemilihan duta pariwisata Surabaya tahun 2023 yang penuh dengan talenta muda berbakat.',
                        'author' => 'Cak Andi',
                        'date' => '8 Februari 2024',
                        'read_time' => '7 min'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/c04e16359e858e7eb6f4cca1947bb75c.jpg',
                        'category' => 'Kuliner',
                        'title' => 'Food Tour Surabaya: Mencicipi Kelezatan Kota Pahlawan',
                        'excerpt' => 'Jelajahi cita rasa autentik Surabaya mulai dari rawon hingga rujak cingur bersama Cak & Ning sebagai guide kuliner terpercaya.',
                        'author' => 'Ning Maya',
                        'date' => '5 Februari 2024',
                        'read_time' => '6 min'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/a576ecb53e12f12dae5a1e144982771b.jpg',
                        'category' => 'Budaya',
                        'title' => 'Mengenal Lebih Dekat Budaya Arek Suroboyo',
                        'excerpt' => 'Eksplorasi mendalam tentang kearifan lokal dan karakteristik unik masyarakat Surabaya yang tercermin dalam kehidupan sehari-hari.',
                        'author' => 'Cak Rio',
                        'date' => '2 Februari 2024',
                        'read_time' => '9 min'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/85f0d1f27b64c891922ce313e5c60c59.jpg',
                        'category' => 'Kolaborasi',
                        'title' => 'Brand Partnership: Kolaborasi Cak & Ning dengan Brand Lokal',
                        'excerpt' => 'Kisah sukses kerjasama Cak & Ning dengan berbagai brand lokal Surabaya dalam mempromosikan produk dan jasa berkualitas.',
                        'author' => 'Ning Dea',
                        'date' => '28 Januari 2024',
                        'read_time' => '4 min'
                    ],
                    [
                        'image' => 'https://zepage.my.canva.site/cnm-home/_assets/media/e24a22b1a0e3c9652fec212ad945f8a3.jpg',
                        'category' => 'Musik',
                        'title' => 'Cakningkustik: Menyatukan Musik dan Pariwisata',
                        'excerpt' => 'Bagaimana musik akustik menjadi medium unik dalam mempromosikan keindahan dan keberagaman budaya Kota Surabaya.',
                        'author' => 'Cak Dimas',
                        'date' => '25 Januari 2024',
                        'read_time' => '5 min'
                    ]
                ];
            @endphp

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @foreach($latestPosts as $post)
                <article class="blog-card bg-white rounded-xl shadow-md overflow-hidden">
                    <img src="{{ $post['image'] }}" alt="{{ $post['title'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <div class="flex items-center justify-between mb-3">
                            <span class="bg-olive-100 text-olive-700 px-2 py-1 rounded-full text-xs font-medium">
                                {{ $post['category'] }}
                            </span>
                            <span class="text-xs text-olive-600">{{ $post['read_time'] }} read</span>
                        </div>
                        <h3 class="text-lg font-semibold text-olive-800 mb-3 line-clamp-2">{{ $post['title'] }}</h3>
                        <p class="text-olive-700 text-sm mb-4 blog-excerpt">{{ $post['excerpt'] }}</p>
                        <div class="flex items-center justify-between">
                            <div class="blog-meta">
                                <div class="flex items-center text-xs">
                                    <span class="iconify mr-1" data-icon="mdi:account" data-width="14"></span>
                                    <span>{{ $post['author'] }}</span>
                                </div>
                                <div class="flex items-center text-xs mt-1">
                                    <span class="iconify mr-1" data-icon="mdi:calendar" data-width="14"></span>
                                    <span>{{ $post['date'] }}</span>
                                </div>
                            </div>
                            <a href="#" class="text-pumpkin-600 font-semibold hover:underline text-sm">
                                Baca →
                            </a>
                        </div>
                    </div>
                </article>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- CATEGORIES SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-floral-blog">
        <div class="container max-w-screen-lg mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-12">Kategori Artikel</h2>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                @php
                    $categories = [
                        ['icon' => 'mdi:map-marker', 'title' => 'Pariwisata', 'count' => '25 Artikel', 'desc' => 'Destinasi wisata menarik di Surabaya'],
                        ['icon' => 'mdi:school', 'title' => 'Tips & Trick', 'count' => '18 Artikel', 'desc' => 'Panduan menjadi duta wisata sukses'],
                        ['icon' => 'mdi:calendar-star', 'title' => 'Event', 'count' => '22 Artikel', 'desc' => 'Liputan kegiatan dan acara terbaru'],
                        ['icon' => 'mdi:food', 'title' => 'Kuliner', 'count' => '20 Artikel', 'desc' => 'Kuliner khas dan rekomendasi makanan'],
                        ['icon' => 'mdi:theater', 'title' => 'Budaya', 'count' => '15 Artikel', 'desc' => 'Kearifan lokal dan tradisi Surabaya'],
                        ['icon' => 'mdi:handshake', 'title' => 'Kolaborasi', 'count' => '12 Artikel', 'desc' => 'Kerjasama dengan brand dan komunitas']
                    ];
                @endphp

                @foreach($categories as $cat)
                <a href="#" class="group bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-pumpkin-500 mb-4 group-hover:scale-110 transition-transform">
                        <span class="iconify" data-icon="{{ $cat['icon'] }}" data-width="48"></span>
                    </div>
                    <h3 class="text-xl font-semibold text-olive-800 mb-2">{{ $cat['title'] }}</h3>
                    <p class="text-pumpkin-600 font-medium mb-2">{{ $cat['count'] }}</p>
                    <p class="text-olive-700 text-sm">{{ $cat['desc'] }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- NEWSLETTER SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-olive-950 py-16 batik-sido-mukti-blog">
        <div class="container max-w-screen-md mx-auto px-6 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-merino-50 mb-6">Berlangganan Newsletter</h2>
            <p class="text-lg text-merino-200 mb-8 max-w-2xl mx-auto">
                Dapatkan update artikel terbaru, info event, dan tips menarik langsung ke email Anda!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center max-w-lg mx-auto">
                <input type="email" placeholder="Masukkan email Anda"
                       class="flex-1 px-6 py-3 rounded-full border-0 focus:outline-none focus:ring-2 focus:ring-pumpkin-500">
                <button class="bg-pumpkin-500 text-white px-8 py-3 rounded-full font-semibold hover:bg-pumpkin-600 transition">
                    Subscribe
                </button>
            </div>
            <p class="text-merino-300 text-sm mt-4">Kami menghormati privasi Anda. Unsubscribe kapan saja.</p>
        </div>
    </section>
@endsection
@section('scripts')

@endsection
