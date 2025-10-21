@extends('layouts.app')
@section('title', 'Tentang - Cak Ning Surabaya')
@section('styles')
    <style>
        /* Batik Pattern untuk halaman About */
        .batik-pattern-about-1 {
            background-image:
                radial-gradient(circle at 20px 30px, rgba(245, 158, 11, 0.1) 2px, transparent 2px),
                radial-gradient(circle at 40px 70px, rgba(245, 158, 11, 0.08) 1px, transparent 1px),
                linear-gradient(45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%),
                linear-gradient(-45deg, rgba(245, 158, 11, 0.02) 25%, transparent 25%);
            background-size: 60px 60px, 80px 80px, 40px 40px, 40px 40px;
        }

        .batik-pattern-about-2 {
            background-image:
                radial-gradient(circle at 25px 25px, rgba(245, 158, 11, 0.12) 3px, transparent 3px),
                radial-gradient(circle at 50px 0px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                repeating-linear-gradient(45deg, rgba(245, 158, 11, 0.03) 0px, rgba(245, 158, 11, 0.03) 2px, transparent 2px, transparent 10px);
            background-size: 50px 50px, 100px 50px, 20px 20px;
        }

        .batik-pattern-about-3 {
            background-image:
                conic-gradient(from 45deg at 40px 40px, rgba(245, 158, 11, 0.08) 0deg, transparent 90deg, rgba(245, 158, 11, 0.05) 180deg, transparent 270deg),
                radial-gradient(circle at 20px 60px, rgba(245, 158, 11, 0.06) 2px, transparent 2px),
                linear-gradient(90deg, rgba(245, 158, 11, 0.02) 50%, transparent 50%);
            background-size: 80px 80px, 40px 40px, 30px 30px;
        }
    </style>
@endsection
@section('content')
    {{-- -------------------------------------- --}}
    {{-- HERO SECTION --}}
    {{-- -------------------------------------- --}}
    <div class="hero bg-olive-800 min-h-screen batik-pattern-about-1">
        <div class="hero-content flex-col lg:flex-row lg:gap-20">
            <div class="text-center lg:max-w-2xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-pumpkin-500 mb-6 leading-tight">
                    Tentang Kami
                </h1>
                <p class="text-sm md:text-lg lg:text-xl text-merino-200 mb-8">
                    Paguyuban Cak & Ning Surabaya adalah organisasi yang berperan sebagai wadah bagi
                    para finalis ajang pemilihan duta wisata Cak & Ning Surabaya sejak 31 Mei 1981,
                    paguyuban ini berada di bawah naungan Dinas Kebudayaan, Kepemudaan, dan Olahraga
                    serta Pariwisata (Disbudporapar) Kota Surabaya. Tujuan utamanya adalah
                    mempromosikan pariwisata dan budaya lokal serta memperkuat identitas Kota Pahlawan
                    melalui peran aktif generasi muda.
                </p>
                <a href="#sejarah"
                    class="inline-flex items-center px-6 py-3 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition text-base md:text-lg lg:text-xl"
                    onclick="event.preventDefault(); document.querySelector('#sejarah').scrollIntoView({ behavior: 'smooth' });">
                    Pelajari Sejarah
                    <span class="iconify ml-2" data-icon="mdi:arrow-down" data-width="28"></span>
                </a>
            </div>
        </div>
    </div>

    {{-- -------------------------------------- --}}
    {{-- SEJARAH SECTION --}}
    {{-- -------------------------------------- --}}
    <section id="sejarah" class="bg-merino-50 py-20 batik-pattern-about-2">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-4">Sejarah Paguyuban</h2>
                <p class="text-lg text-olive-700 max-w-3xl mx-auto">
                    Perjalanan panjang Paguyuban Cak & Ning Surabaya dalam melestarikan budaya dan pariwisata Kota Pahlawan
                </p>
            </div>

            @php
                $timeline = [
                    [
                        'year' => '31 Mei 1981',
                        'title' => 'Berdirinya Paguyuban',
                        'desc' =>
                            'Paguyuban Cak & Ning Surabaya didirikan sebagai wadah bagi para finalis ajang pemilihan duta wisata Surabaya. Organisasi ini berada di bawah naungan Dinas Kebudayaan, Kepemudaan, dan Olahraga serta Pariwisata (Disbudporapar) Kota Surabaya.',
                    ],
                    [
                        'year' => '1985 - 2000',
                        'title' => 'Era Pengembangan',
                        'desc' =>
                            'Periode ekspansi peran Cak & Ning dalam berbagai event pariwisata dan budaya. Mulai aktif dalam promosi wisata lokal dan menjadi brand ambassador Kota Surabaya di berbagai acara regional dan nasional.',
                    ],
                    [
                        'year' => '2001 - 2010',
                        'title' => 'Modernisasi & Profesionalisasi',
                        'desc' =>
                            'Transformasi menuju organisasi yang lebih profesional dengan sistem manajemen modern. Pengembangan program pelatihan untuk meningkatkan kompetensi anggota dalam berbagai bidang seperti MC, tour guide, dan content creation.',
                    ],
                    [
                        'year' => '2011 - Sekarang',
                        'title' => 'Era Digital & Kolaborasi',
                        'desc' =>
                            'Adaptasi dengan era digital melalui media sosial dan platform online. Ekspansi kerjasama dengan berbagai brand, instansi pemerintah, dan komunitas untuk memperkuat posisi sebagai duta pariwisata dan budaya Surabaya yang terdepan.',
                    ],
                ];
            @endphp

            <ul class="container timeline timeline-snap-icon max-md:timeline-compact timeline-vertical">
                @foreach ($timeline as $i => $item)
                    <li class="" style="--timeline-row-start: 0rem;">
                        <div class="timeline-middle">
                            <svg class="h-5 w-5 fill-pumpkin-500" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <rect width="16" height="16" rx="8" fill="" />
                            </svg>
                        </div>
                        @if ($i % 2 == 0)
                            <div class="timeline-start mb-10 md:text-end">
                            @else
                                <div class="timeline-end md:mb-10">
                        @endif
                        <time class="font-mono italic text-pumpkin-500">{{ $item['year'] }}</time>
                        <div class="text-lg text-olive-800">{{ $item['title'] }}</div>
                        <div class="text-olive-700">{{ $item['desc'] }}</div>
        </div>
        @if ($i++ < count($timeline) - 1)
            {{-- Handling timeline separator --}}
            <hr class="bg-pumpkin-300" />
        @endif
        </li>
        @endforeach
        </ul>

        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- VISI MISI SECTION --}}
    {{-- -------------------------------------- --}}
    {{-- <section class="bg-pumpkin-500 py-16">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="grid md:grid-cols-2 gap-12 items-center">
                <div class="text-center md:text-left">
                    <h2 class="text-3xl md:text-4xl font-bold text-olive-900 mb-8">Visi & Misi</h2>

                    <div class="mb-8">
                        <h3 class="text-2xl font-semibold text-olive-900 mb-4 flex items-center">
                            <span class="iconify mr-3" data-icon="mdi:eye-outline" data-width="32"></span>
                            Visi
                        </h3>
                        <p class="text-olive-800 text-lg leading-relaxed">
                            Menjadi organisasi duta pariwisata dan budaya terdepan yang menginspirasi generasi muda
                            dalam mempromosikan keunggulan Kota Surabaya di tingkat nasional dan internasional.
                        </p>
                    </div>

                    <div>
                        <h3 class="text-2xl font-semibold text-olive-900 mb-4 flex items-center">
                            <span class="iconify mr-3" data-icon="mdi:target" data-width="32"></span>
                            Misi
                        </h3>
                        <ul class="text-olive-800 text-lg space-y-3">
                            <li class="flex items-start">
                                <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle" data-width="20"></span>
                                Mengembangkan potensi generasi muda sebagai duta pariwisata dan budaya
                            </li>
                            <li class="flex items-start">
                                <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle" data-width="20"></span>
                                Mempromosikan kekayaan wisata dan budaya Kota Surabaya
                            </li>
                            <li class="flex items-start">
                                <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle" data-width="20"></span>
                                Membangun kolaborasi strategis dengan berbagai pihak
                            </li>
                            <li class="flex items-start">
                                <span class="iconify mr-2 mt-1" data-icon="mdi:check-circle" data-width="20"></span>
                                Melestarikan dan memperkuat identitas Kota Pahlawan
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="flex justify-center">
                    <img src="https://zepage.my.canva.site/cnm-home/_assets/media/532ba152dff99704a4f0ac48353c1b5d.jpg"
                        alt="Visi Misi Cak Ning Surabaya"
                        class="w-full max-w-md lg:max-w-lg rounded-xl shadow-lg object-cover">
                </div>
            </div>
        </div>
    </section> --}}

    {{-- -------------------------------------- --}}
    {{-- STRUKTUR ORGANISASI SECTION --}}
    {{-- -------------------------------------- --}}

    @php
        $executives = [
            [
                'img' => asset('images/executives/ning_zerlin.jpg'),
                'shortName' => 'Ning Zerlin',
                'name' => 'Yazerlin Nadila Balqis, S.Bns.',
                'division' => null,
                'position' => 'head',
                'tittle' => 'Ketua Umum',
            ],
            [
                'img' => asset('images/executives/ning_nia.jpg'),
                'shortName' => 'Ning Nia',
                'name' => 'Nakita Millenia Putri, S.H.',
                'division' => 'bendahara',
                'position' => 'head',
                'tittle' => 'Bendahara Umum',
            ],
            [
                'img' => asset('images/executives/cak_bryan.jpg'),
                'shortName' => 'Cak Bryan',
                'name' => 'Bryan Benjamin Gondowardoyo',
                'division' => 'bendahara',
                'position' => 'member',
                'tittle' => 'Bendahara 1',
            ],
            [
                'img' => asset('images/executives/cak_fide.jpg'),
                'shortName' => 'Cak Fide',
                'name' => 'Fide Abraham, S. Ikom',
                'division' => 'sekretaris',
                'position' => 'head',
                'tittle' => 'Sekretaris Umum',
            ],
            [
                'img' => asset('images/executives/ning_olda.jpg'),
                'shortName' => 'Ning Olda',
                'name' => 'Rizky Olda Putri Salsabila, S.Ars.',
                'division' => 'sekretaris',
                'position' => 'member',
                'tittle' => 'Sekretaris 1',
            ],
            [
                'img' => asset('images/executives/ning_sasa.jpg'),
                'shortName' => 'Ning Sasa',
                'name' => 'Sabrina Christellia',
                'division' => 'sekretaris',
                'position' => 'member',
                'tittle' => 'Sekretaris 2',
            ],
            [
                'img' => asset('images/executives/cak_alvin.jpg'),
                'shortName' => 'Cak Alvin',
                'name' => 'Alvin Ananda Siregar, S.M.',
                'division' => 'internal',
                'position' => 'head',
                'tittle' => 'Ketua Bidang Internal',
            ],
            [
                'img' => asset('images/executives/cak_rama.jpg'),
                'shortName' => 'Cak Rama',
                'name' => 'Hartawan Anugerah Ramadhan H',
                'division' => 'external',
                'position' => 'head',
                'tittle' => 'Ketua Bidang External',
            ],
        ];
    @endphp

    <section class="bg-white">
        <div class="container py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-6">
            <div class="mx-auto mb-8 max-w-screen-sm lg:mb-16">
                <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-olive-800 text-center">Badan Pengurus Harian
                </h2>
                <p class="font-light text-olive-700 sm:text-xl ">Paguyuban Cak & Ning 2025-2028</p>
            </div>

            <div id="executive-cards" class="grid gap-8 lg:gap-16 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4">
                @foreach ($executives as $idx => $ex)
                    <div class="relative text-center text-gray-500 dark:text-gray-400 hover:bg-olive-100 hover:cursor-pointer p-4 rounded-lg transition-all duration-300 ease-in-out executive-card"
                        data-idx="{{ $idx }}" style="min-height: 160px;">
                        <div class="w-1/2">
                            <div
                                class="h-36 w-36 flex items-center justify-center mx-auto mb-4 overflow-hidden executive-img transition-all duration-300 ease-in-out">
                                <img class="w-full h-full object-cover rounded-full" style="object-position: top;"
                                    src="{{ $ex['img'] }}" alt="{{ $ex['shortName'] }}">
                            </div>
                        </div>
                        <div class="w-1/2">
                            <div class="executive-info transition-all duration-300 ease-in-out">
                                <h3 class="mb-1 text-2xl font-bold tracking-tight text-olive-800">{{ $ex['shortName'] }}
                                </h3>
                                <p class="text-pumpkin-500 font-medium">{{ $ex['tittle'] }}</p>
                                @if (isset($ex['name']))
                                    <p class="mt-2 text-olive-700 text-base executive-desc transition-all duration-300 ease-in-out"
                                        style="display:none;">{{ $ex['name'] }}</p>
                                @endif
                            </div>
                            <button
                                class=" absolute top-2 right-2 text-olive-800 bg-white rounded-full p-1 shadow hover:bg-olive-200 executive-close transition-all duration-200"
                                style="display:none;" aria-label="Tutup">
                                <span class="iconify" data-icon="mdi:close" data-width="24"></span>
                            </button>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@section('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cards = document.querySelectorAll('.executive-card');
            let activeIdx = null;

            function resetCard(card) {
                card.classList.remove('active', 'bg-olive-100');
                card.style.gridColumn = '';
                card.style.display = '';
                card.style.textAlign = '';
                card.style.alignItems = '';
                card.querySelector('.executive-desc')?.style.setProperty('opacity', '0');
                setTimeout(() => {
                    card.querySelector('.executive-desc')?.style.setProperty('display', 'none');
                }, 250);
                card.querySelector('.executive-img')?.style.setProperty('margin-bottom', '1rem');
                card.querySelector('.executive-info')?.style.setProperty('margin-left', '');
                card.querySelector('.executive-close')?.style.setProperty('opacity', '0');
                setTimeout(() => {
                    card.querySelector('.executive-close')?.style.setProperty('display', 'none');
                }, 200);
            }

            cards.forEach(card => {
                card.addEventListener('click', function(e) {
                    if (e.target.closest('.executive-close')) return;

                    if (activeIdx !== null && activeIdx !== card.dataset.idx) {
                        const activeCard = document.querySelector('.executive-card.active');
                        if (activeCard) resetCard(activeCard);
                        activeIdx = null;
                    }

                    if (card.classList.contains('active')) return;

                    cards.forEach(c => {
                        if (c !== card) resetCard(c);
                    });

                    activeIdx = card.dataset.idx;
                    card.classList.add('active', 'bg-olive-100');
                    card.style.gridColumn = 'span 4';
                    card.style.display = 'flex';
                    card.style.alignItems = 'center';
                    card.style.textAlign = 'left';

                    const desc = card.querySelector('.executive-desc');
                    if (desc) {
                        desc.style.setProperty('display', 'block');
                        setTimeout(() => {
                            desc.style.setProperty('opacity', '1');
                        }, 10);
                    }
                    card.querySelector('.executive-img')?.style.setProperty('margin-bottom', '0');
                    card.querySelector('.executive-info')?.style.setProperty('margin-left', '2rem');
                    const closeBtn = card.querySelector('.executive-close');
                    if (closeBtn) {
                        closeBtn.style.setProperty('display', 'block');
                        setTimeout(() => {
                            closeBtn.style.setProperty('opacity', '1');
                        }, 10);
                    }

                    // Scroll the active card into view smoothly after layout changes.
                    // Use a slight delay so the expansion has settled for accurate scroll position.
                    setTimeout(() => {
                        // Prefer centering the card in the viewport.
                        card.scrollIntoView({
                            behavior: 'smooth',
                            block: 'center'
                        });
                    }, 120);
                });

                const closeBtn = card.querySelector('.executive-close');
                if (closeBtn) {
                    closeBtn.addEventListener('click', function(e) {
                        e.stopPropagation();
                        resetCard(card);
                        activeIdx = null;

                        // After collapsing, ensure the card remains visible (scroll to it).
                        setTimeout(() => {
                            card.scrollIntoView({
                                behavior: 'smooth',
                                block: 'nearest'
                            });
                        }, 150);
                    });
                }
            });
        });
    </script>
@endsection



{{-- -------------------------------------- --}}
{{-- STRUKTUR ORGANISASI SECTION --}}
{{-- -------------------------------------- --}}

<section class="bg-merino-50 py-16 batik-pattern-about-3">
    <div class="container max-w-screen-lg mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-4">Struktur Organisasi</h2>
        <p class="text-lg text-olive-700 mb-12 max-w-3xl mx-auto">
            Paguyuban dipimpin oleh pengurus yang berpengalaman dan didukung oleh anggota yang terdiri dari para finalis
            Cak & Ning Surabaya dari berbagai angkatan
        </p>

        <div class="grid md:grid-cols-3 gap-8 mt-12">
            @php
                $strukturOrganisasi = [
                    [
                        'jabatan' => 'Ketua Paguyuban',
                        'nama' => 'Alumni Cak/Ning Senior',
                        'desc' => 'Memimpin dan mengkoordinasi seluruh kegiatan paguyuban',
                        'icon' => 'mdi:account-tie',
                    ],
                    [
                        'jabatan' => 'Sekretaris',
                        'nama' => 'Alumni Cak/Ning',
                        'desc' => 'Mengelola administrasi dan dokumentasi organisasi',
                        'icon' => 'mdi:file-document-outline',
                    ],
                    [
                        'jabatan' => 'Bendahara',
                        'nama' => 'Alumni Cak/Ning',
                        'desc' => 'Mengelola keuangan dan pelaporan finansial paguyuban',
                        'icon' => 'mdi:cash',
                    ],
                    [
                        'jabatan' => 'Koordinator Event',
                        'nama' => 'Cak/Ning Aktif',
                        'desc' => 'Mengkoordinasi dan mengelola berbagai acara dan kolaborasi',
                        'icon' => 'mdi:calendar-star',
                    ],
                    [
                        'jabatan' => 'Humas & Media',
                        'nama' => 'Cak/Ning Aktif',
                        'desc' => 'Mengelola komunikasi publik dan media sosial paguyuban',
                        'icon' => 'mdi:bullhorn',
                    ],
                    [
                        'jabatan' => 'Anggota',
                        'nama' => 'Seluruh Finalis',
                        'desc' => 'Para finalis dari berbagai angkatan yang aktif berpartisipasi',
                        'icon' => 'mdi:account-group',
                    ],
                ];
            @endphp

            @foreach ($strukturOrganisasi as $struktur)
                <div class="bg-white p-6 rounded-xl shadow-md hover:shadow-lg transition">
                    <div class="text-pumpkin-500 mb-4">
                        <span class="iconify" data-icon="{{ $struktur['icon'] }}" data-width="48"></span>
                    </div>
                    <h3 class="text-xl font-semibold text-olive-800 mb-2">{{ $struktur['jabatan'] }}</h3>
                    <h4 class="text-lg text-pumpkin-500 mb-3">{{ $struktur['nama'] }}</h4>
                    <p class="text-olive-700 text-sm">{{ $struktur['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- -------------------------------------- --}}
{{-- PENCAPAIAN SECTION --}}
{{-- -------------------------------------- --}}
<section class="bg-olive-950 py-16 batik-pattern-about-1">
    <div class="container max-w-screen-lg mx-auto px-6">
        <div class="text-center mb-12">
            <h2 class="text-3xl md:text-4xl font-bold text-merino-50 mb-4">Pencapaian & Prestasi</h2>
            <p class="text-lg text-merino-200 max-w-3xl mx-auto">
                Berbagai pencapaian yang telah diraih Paguyuban Cak & Ning Surabaya dalam mempromosikan pariwisata dan
                budaya Kota Pahlawan
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
            @php
                $pencapaian = [
                    ['angka' => '40+', 'desc' => 'Tahun Berpengalaman', 'icon' => 'mdi:calendar-clock'],
                    ['angka' => '200+', 'desc' => 'Alumni Cak & Ning', 'icon' => 'mdi:account-multiple'],
                    ['angka' => '500+', 'desc' => 'Event Berpartisipasi', 'icon' => 'mdi:star'],
                    ['angka' => '50+', 'desc' => 'Partnership Aktif', 'icon' => 'mdi:handshake'],
                ];
            @endphp

            @foreach ($pencapaian as $item)
                <div class="text-center bg-olive-900 p-6 rounded-xl">
                    <div class="text-pumpkin-500 mb-4">
                        <span class="iconify" data-icon="{{ $item['icon'] }}" data-width="48"></span>
                    </div>
                    <h3 class="text-3xl font-bold text-merino-50 mb-2">{{ $item['angka'] }}</h3>
                    <p class="text-merino-200">{{ $item['desc'] }}</p>
                </div>
            @endforeach
        </div>
    </div>
</section>

{{-- -------------------------------------- --}}
{{-- CTA SECTION --}}
{{-- -------------------------------------- --}}
<section class="bg-pumpkin-500 py-16 batik-pattern-about-2">
    <div class="container max-w-screen-md mx-auto px-6 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-olive-900 mb-6">Bergabung Dengan Kami</h2>
        <p class="text-lg text-olive-800 mb-8 max-w-2xl mx-auto">
            Apakah Anda tertarik menjadi bagian dari Cak & Ning Surabaya? Atau ingin berkolaborasi dengan kami?
            Hubungi kami dan mari bersama mempromosikan keindahan Kota Pahlawan!
        </p>
        <div class="flex flex-col sm:flex-row gap-4 justify-center">
            <a href="#contact"
                class="inline-flex items-center px-8 py-4 bg-olive-800 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition">
                <span class="iconify mr-2" data-icon="mdi:phone" data-width="24"></span>
                Hubungi Kami
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

@endsection
@php
    $talents = [
        [
            'name' => 'Cak Maudah',
            'tb' => '169 cm',
            'bb' => '72 kg',
            'ig' => 'https://www.instagram.com/maudahrw/',
            'images' => [
                asset('images/talents/cak_maudah_1.jpg'),
                asset('images/talents/cak_maudah_2.jpg'),
                asset('images/talents/cak_maudah_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Juan',
            'tb' => '179 cm',
            'bb' => '113 kg',
            'ig' => 'https://www.instagram.com/juanssss_/',
            'images' => [
                asset('images/talents/cak_juan_1.jpg'),
                asset('images/talents/cak_juan_2.jpg'),
                asset('images/talents/cak_juan_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Abel',
            'tb' => '171 cm',
            'bb' => '69 kg',
            'ig' => 'https://www.instagram.com/abelpratamaaaa_/',
            'images' => [
                asset('images/talents/cak_abel_1.jpg'),
                asset('images/talents/cak_abel_2.jpg'),
                asset('images/talents/cak_abel_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Hendy',
            'tb' => '176 cm',
            'bb' => '79 kg',
            'ig' => 'https://www.instagram.com/hendytk_/',
            'images' => [
                asset('images/talents/cak_hendy_1.jpg'),
                asset('images/talents/cak_hendy_2.jpg'),
                asset('images/talents/cak_hendy_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Raynal',
            'tb' => '173 cm',
            'bb' => '66 kg',
            'ig' => 'https://www.instagram.com/muhammad_xaviero/',
            'images' => [
                asset('images/talents/cak_raynal_1.jpg'),
                asset('images/talents/cak_raynal_2.jpg'),
                asset('images/talents/cak_raynal_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Rangga',
            'tb' => '178 cm',
            'bb' => '115 kg',
            'ig' => 'https://www.instagram.com/axlrd_/',
            'images' => [
                asset('images/talents/cak_rangga_1.jpg'),
                asset('images/talents/cak_rangga_2.jpg'),
                asset('images/talents/cak_rangga_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Adi',
            'tb' => '170 cm',
            'bb' => '45 kg',
            'ig' => 'https://www.instagram.com/adiferryx/',
            'images' => [
                asset('images/talents/cak_adi_1.jpg'),
                asset('images/talents/cak_adi_2.jpg'),
                asset('images/talents/cak_adi_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Hanif',
            'tb' => '186 cm',
            'bb' => '73,2 kg',
            'ig' => 'https://www.instagram.com/hanif13_/',
            'images' => [
                asset('images/talents/cak_hanif_1.jpg'),
                asset('images/talents/cak_hanif_2.jpg'),
                asset('images/talents/cak_hanif_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Bagas',
            'tb' => '184 cm',
            'bb' => '82,5 kg',
            'ig' => 'https://www.instagram.com/bagasstl/',
            'images' => [
                asset('images/talents/cak_bagas_1.jpg'),
                asset('images/talents/cak_bagas_2.jpg'),
                asset('images/talents/cak_bagas_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Arka',
            'tb' => '176 cm',
            'bb' => '70,4 kg',
            'ig' => 'https://www.instagram.com/arkadewaa_/',
            'images' => [
                asset('images/talents/cak_arka_1.jpg'),
                asset('images/talents/cak_arka_2.jpg'),
                asset('images/talents/cak_arka_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Zidane',
            'tb' => '170 cm',
            'bb' => '74 kg',
            'ig' => 'https://www.instagram.com/zidannnr_/',
            'images' => [
                asset('images/talents/cak_zidane_1.jpg'),
                asset('images/talents/cak_zidane_2.jpg'),
                asset('images/talents/cak_zidane_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Rofiq',
            'tb' => '169 cm',
            'bb' => '70 kg',
            'ig' => 'https://www.instagram.com/achmadrofiiq/',
            'images' => [
                asset('images/talents/cak_rofiq_1.jpg'),
                asset('images/talents/cak_rofiq_2.jpg'),
                asset('images/talents/cak_rofiq_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Hilmi',
            'tb' => '169 cm',
            'bb' => '66 kg',
            'ig' => 'https://www.instagram.com/ryvaldihilmi_/',
            'images' => [
                asset('images/talents/cak_hilmi_1.jpg'),
                asset('images/talents/cak_hilmi_2.jpg'),
                asset('images/talents/cak_hilmi_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak Helmy',
            'tb' => '168 cm',
            'bb' => '65,5 kg',
            'ig' => 'https://www.instagram.com/helmy_fe/',
            'images' => [
                asset('images/talents/cak_helmy_1.jpg'),
                asset('images/talents/cak_helmy_2.jpg'),
                asset('images/talents/cak_helmy_3.jpg'),
            ],
        ],
        [
            'name' => 'Cak William',
            'tb' => '168 cm',
            'bb' => '57 kg',
            'ig' => 'https://www.instagram.com/grtwilli_/',
            'images' => [
                asset('images/talents/cak_william_1.jpg'),
                asset('images/talents/cak_william_2.jpg'),
                asset('images/talents/cak_william_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Joana',
            'tb' => '164 cm',
            'bb' => '53 kg',
            'ig' => 'https://www.instagram.com/joanaa_sohilait/',
            'images' => [
                asset('images/talents/ning_joana_1.jpg'),
                asset('images/talents/ning_joana_2.jpg'),
                asset('images/talents/ning_joana_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Deninta',
            'tb' => '168 cm',
            'bb' => '59 kg',
            'ig' => 'https://www.instagram.com/denintavasthy/',
            'images' => [
                asset('images/talents/ning_deninta_1.jpg'),
                asset('images/talents/ning_deninta_2.jpg'),
                asset('images/talents/ning_deninta_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Sasa',
            'tb' => '159 cm',
            'bb' => '40,6 kg',
            'ig' => 'https://www.instagram.com/sabrinachristellia/',
            'images' => [
                asset('images/talents/ning_sasa_1.jpg'),
                asset('images/talents/ning_sasa_2.jpg'),
                asset('images/talents/ning_sasa_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Michelle',
            'tb' => '170 cm',
            'bb' => '53,2 kg',
            'ig' => 'https://www.instagram.com/mischgav/',
            'images' => [
                asset('images/talents/ning_michelle_1.jpg'),
                asset('images/talents/ning_michelle_2.jpg'),
                asset('images/talents/ning_michelle_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Ajeng',
            'tb' => '158 cm',
            'bb' => '51,6 kg',
            'ig' => 'https://www.instagram.com/deajeng.ramadin/',
            'images' => [
                asset('images/talents/ning_ajeng_1.jpg'),
                asset('images/talents/ning_ajeng_2.jpg'),
                asset('images/talents/ning_ajeng_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Elvira',
            'tb' => '168 cm',
            'bb' => '60 kg',
            'ig' => 'https://www.instagram.com/elvira.da/',
            'images' => [
                asset('images/talents/ning_elvira_1.jpg'),
                asset('images/talents/ning_elvira_2.jpg'),
                asset('images/talents/ning_elvira_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Tiara',
            'tb' => '157 cm',
            'bb' => '46 kg',
            'ig' => 'https://www.instagram.com/amandatiara_/',
            'images' => [
                asset('images/talents/ning_tiara_1.jpg'),
                asset('images/talents/ning_tiara_2.jpg'),
                asset('images/talents/ning_tiara_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Chellyne',
            'tb' => '171 cm',
            'bb' => '67 kg',
            'ig' => 'https://www.instagram.com/chellynesalsabila/',
            'images' => [
                asset('images/talents/ning_chellyne_1.jpg'),
                asset('images/talents/ning_chellyne_2.jpg'),
                asset('images/talents/ning_chellyne_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Jhea',
            'tb' => '167 cm',
            'bb' => '61 kg',
            'ig' => 'https://www.instagram.com/jaquestera/',
            'images' => [
                asset('images/talents/ning_jhea_1.jpg'),
                asset('images/talents/ning_jhea_2.jpg'),
                asset('images/talents/ning_jhea_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Indira',
            'tb' => '166 cm',
            'bb' => '47 kg',
            'ig' => 'https://www.instagram.com/indiraaparamita/',
            'images' => [
                asset('images/talents/ning_indira_1.jpg'),
                asset('images/talents/ning_indira_2.jpg'),
                asset('images/talents/ning_indira_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Sayla',
            'tb' => '167 cm',
            'bb' => '46 kg',
            'ig' => 'https://www.instagram.com/saylakartika/',
            'images' => [
                asset('images/talents/ning_sayla_1.jpg'),
                asset('images/talents/ning_sayla_2.jpg'),
                asset('images/talents/ning_sayla_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Roscetta',
            'tb' => '162 cm',
            'bb' => '45 kg',
            'ig' => 'https://www.instagram.com/rosceyi/',
            'images' => [
                asset('images/talents/ning_roscetta_1.jpg'),
                asset('images/talents/ning_roscetta_2.jpg'),
                asset('images/talents/ning_roscetta_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Khaila',
            'tb' => '158,5 cm',
            'bb' => '54,3 kg',
            'ig' => 'https://www.instagram.com/khailaar/',
            'images' => [
                asset('images/talents/ning_khaila_1.jpg'),
                asset('images/talents/ning_khaila_2.jpg'),
                asset('images/talents/ning_khaila_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Farah',
            'tb' => '158 cm',
            'bb' => '53,8 kg',
            'ig' => 'https://www.instagram.com/farahfaridaaa/',
            'images' => [
                asset('images/talents/ning_farah_1.jpg'),
                asset('images/talents/ning_farah_2.jpg'),
                asset('images/talents/ning_farah_3.jpg'),
            ],
        ],
        [
            'name' => 'Ning Tsania',
            'tb' => '158 cm',
            'bb' => '40 kg',
            'ig' => 'https://www.instagram.com/shafyratm/',
            'images' => [
                asset('images/talents/ning_tsania_1.jpg'),
                asset('images/talents/ning_tsania_2.jpg'),
                asset('images/talents/ning_tsania_3.jpg'),
            ],
        ],
    ];
@endphp
