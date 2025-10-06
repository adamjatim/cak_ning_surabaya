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

        .timeline-item {
            position: relative;
            padding-left: 2rem;
            border-left: 2px solid #d69e2e;
            margin-bottom: 2rem;
        }

        .timeline-item::before {
            content: '';
            position: absolute;
            left: -6px;
            top: 0;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: #d69e2e;
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

1. Cak Maudah
TB : 169 cm
BB : 72 kg
ig : https://www.instagram.com/maudahrw/

2. Cak Juan
TB : 179 cm
BB : 113 kg
ig : https://www.instagram.com/juanssss_

3. Cak Abel
TB : 171 cm
BB : 69 kg
ig : https://www.instagram.com/abelpratamaaaa_/

4. Cak Hendy
TB : 176 cm
BB : 79 kg
ig :

5. Cak Raynal
TB : 173 cm
BB : 66 kg
ig :

6. Cak Rangga
TB : 178 cm
BB : 115 kg
ig :

7. Cak Adi
TB : 170 cm
BB : 45 kg
ig :

8. Cak Hanif
TB : 186 cm
BB : 73,2 kg
ig :

9. Cak Bagas
TB : 184 cm
BB : 82,5 kg
ig :

10. Cak Arka
TB : 176 cm
BB : 70,4 kg
ig :

11. Cak Zidane
TB : 170 cm
BB : 74 kg
ig :

12. Cak Rofiq
TB : 169 cm
BB : 70 kg
ig :

13. Cak Hilmi
TB : 169 cm
BB : 66 kg
ig :

14. Cak Helmy
TB : 168 cm
BB : 65,5 kg
ig :

15. Cak William
TB : 168 cm
BB : 57 kg
ig :

16. Ning Joana
TB : 164 cm
BB : 53 kg
ig :

17. Ning Deninta
TB : 168 cm
BB : 59 kg
ig :

18. Ning Sasa
TB : 159 cm
BB : 40,6 kg
ig :

19. Ning Michelle
TB : 170 cm
BB : 53,2 kg
ig :

20. Ning Ajeng
TB : 158 cm
BB : 51,6 kg
ig :

21. Ning Elvira
TB : 168 cm
BB : 60 kg
ig :

22. Ning Tiara
TB : 157 cm
BB : 46 kg
ig :

23. Ning Chellyne
TB : 171 cm
BB : 67 kg
ig :

24. Ning Jhea
TB : 167 cm
BB : 61 kg
ig :

25. Ning Indira
TB : 166 cm
BB : 47 kg
ig :

26. Ning Sayla
TB : 167 cm
BB : 46 kg
ig :

27. Ning Roscetta
TB : 162 cm
BB : 45 kg
ig :

28. Ning Khaila
TB : 158,5 cm
BB : 54,3 kg
ig :

29. Ning Farah
TB : 158 cm
BB : 53,8 kg
ig :

30. Ning Tsania
TB : 158 cm
BB : 40 kg
ig :

