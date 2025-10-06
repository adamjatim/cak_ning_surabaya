@extends('layouts.app')
@section('title', 'Kontak - Cak Ning Surabaya')
@section('styles')
    <style>
        /* Batik Truntum pattern untuk halaman Contact */
        .batik-truntum-contact {
            background-image:
                radial-gradient(circle at 25px 25px, rgba(245, 158, 11, 0.1) 3px, transparent 3px),
                radial-gradient(circle at 75px 25px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(circle at 25px 75px, rgba(245, 158, 11, 0.08) 2px, transparent 2px),
                radial-gradient(circle at 75px 75px, rgba(245, 158, 11, 0.1) 3px, transparent 3px),
                radial-gradient(circle at 50px 50px, rgba(245, 158, 11, 0.06) 1px, transparent 1px);
            background-size: 100px 100px;
        }

        .batik-udan-liris {
            background-image:
                repeating-linear-gradient(0deg, rgba(245, 158, 11, 0.06) 0px, rgba(245, 158, 11, 0.06) 2px, transparent 2px, transparent 8px),
                repeating-linear-gradient(45deg, rgba(245, 158, 11, 0.04) 0px, rgba(245, 158, 11, 0.04) 1px, transparent 1px, transparent 6px),
                repeating-linear-gradient(-45deg, rgba(245, 158, 11, 0.04) 0px, rgba(245, 158, 11, 0.04) 1px, transparent 1px, transparent 6px),
                radial-gradient(circle at 30px 30px, rgba(245, 158, 11, 0.08) 2px, transparent 2px);
            background-size: 16px 16px, 12px 12px, 12px 12px, 60px 60px;
        }

        .contact-card {
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .contact-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }
        .contact-form {
            background: linear-gradient(135deg, rgba(245, 158, 66, 0.1), rgba(214, 158, 46, 0.1));
        }
        .map-container {
            position: relative;
            overflow: hidden;
            border-radius: 1rem;
        }
    </style>
@endsection
@section('content')
    {{-- -------------------------------------- --}}
    {{-- HERO SECTION --}}
    {{-- -------------------------------------- --}}
    <div class="hero bg-olive-800 min-h-screen batik-truntum-contact">
        <div class="hero-content flex-col lg:flex-row lg:gap-20">
            <div class="text-center lg:text-left lg:max-w-2xl">
                <h1 class="text-3xl md:text-5xl lg:text-6xl font-bold text-pumpkin-500 mb-6 leading-tight">
                    Hubungi Kami
                </h1>
                <p class="text-base md:text-xl lg:text-2xl text-merino-100 mb-4">
                    Mari berkolaborasi untuk mempromosikan keindahan Kota Surabaya
                </p>
                <p class="text-sm md:text-lg lg:text-xl text-merino-200 mb-8">
                    Kami siap membantu kebutuhan event, promosi, workshop, dan berbagai bentuk kerjasama lainnya. Hubungi tim Cak & Ning Surabaya sekarang juga!
                </p>
                <a href="#contact-form"
                    class="inline-flex items-center px-6 py-3 bg-pumpkin-500 text-white rounded-full font-semibold shadow hover:bg-olive-700 transition text-base md:text-lg lg:text-xl">
                    Kirim Pesan
                    <span class="iconify ml-2" data-icon="mdi:send" data-width="28"></span>
                </a>
            </div>

            <div class="relative flex justify-center items-center h-[420px] md:h-[520px] lg:h-[600px] overflow-visible">
                <img src="https://zepage.my.canva.site/cnm-home/_assets/media/8a671f9e2c9124a84ecd8aca85de3e10.png"
                     alt="Cak Ning Surabaya Team Contact"
                     class="w-[300px] h-[400px] md:w-[400px] md:h-[500px] lg:w-[450px] lg:h-[550px] rounded-xl shadow-lg object-cover">
            </div>
        </div>
    </div>

    {{-- -------------------------------------- --}}
    {{-- CONTACT INFO SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-udan-liris">
        <div class="container max-w-screen-xl mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-4">Informasi Kontak</h2>
                <p class="text-lg text-olive-700 max-w-3xl mx-auto">
                    Berbagai cara untuk menghubungi tim Cak & Ning Surabaya
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
                @php
                    $contactInfo = [
                        [
                            'icon' => 'mdi:phone',
                            'title' => 'Telepon & WhatsApp',
                            'details' => [
                                '0878-4611-5017 (Chellyne)',
                                '0822-3456-8268 (Avisa)'
                            ],
                            'action' => 'Call/Chat',
                            'link' => 'https://wa.me/6287846115017'
                        ],
                        [
                            'icon' => 'mdi:email',
                            'title' => 'Email',
                            'details' => [
                                'humascakningsby@gmail.com',
                                'info@cakningsurabaya.id'
                            ],
                            'action' => 'Send Email',
                            'link' => 'mailto:humascakningsby@gmail.com'
                        ],
                        [
                            'icon' => 'mdi:map-marker',
                            'title' => 'Alamat Kantor',
                            'details' => [
                                'Gedung Siola Lantai 2',
                                'Jl. Tunjungan No.2, Genteng',
                                'Surabaya, Jawa Timur 60275'
                            ],
                            'action' => 'Lihat Maps',
                            'link' => 'https://maps.app.goo.gl/ttbgQpCReCwkQc778'
                        ],
                        [
                            'icon' => 'mdi:clock',
                            'title' => 'Jam Operasional',
                            'details' => [
                                'Senin - Jumat: 08:00 - 17:00',
                                'Sabtu: 08:00 - 14:00',
                                'Minggu: Tutup (Emergency Only)'
                            ],
                            'action' => 'Info Lebih',
                            'link' => '#'
                        ]
                    ];
                @endphp

                @foreach($contactInfo as $info)
                <div class="contact-card bg-white rounded-xl shadow-md p-6 text-center">
                    <div class="text-pumpkin-500 mb-4">
                        <span class="iconify" data-icon="{{ $info['icon'] }}" data-width="48"></span>
                    </div>
                    <h3 class="text-xl font-semibold text-olive-800 mb-4">{{ $info['title'] }}</h3>
                    <div class="space-y-2 mb-6">
                        @foreach($info['details'] as $detail)
                        <p class="text-olive-700 text-sm break-words">{{ $detail }}</p>
                        @endforeach
                    </div>
                    <a href="{{ $info['link'] }}" target="_blank"
                       class="inline-flex items-center px-4 py-2 bg-pumpkin-500 text-white rounded-full text-sm font-semibold hover:bg-pumpkin-600 transition">
                        {{ $info['action'] }}
                        <span class="iconify ml-2" data-icon="mdi:arrow-right" data-width="16"></span>
                    </a>
                </div>
                @endforeach
            </div>

            {{-- -------------------------------------- --}}
            {{-- MAP SECTION --}}
            {{-- -------------------------------------- --}}
            <div class="grid lg:grid-cols-2 gap-12 items-center">
                <div>
                    <h3 class="text-2xl font-bold text-olive-800 mb-4">Lokasi Kami</h3>
                    <p class="text-olive-700 mb-6 leading-relaxed">
                        Kantor Paguyuban Cak & Ning Surabaya berlokasi strategis di Gedung Siola, pusat kota Surabaya.
                        Mudah dijangkau dengan berbagai transportasi umum dan dekat dengan landmark ikonik Tugu Pahlawan.
                    </p>
                    <div class="space-y-4">
                        <div class="flex items-start space-x-3">
                            <span class="iconify text-pumpkin-500 mt-1" data-icon="mdi:train" data-width="20"></span>
                            <div>
                                <p class="font-medium text-olive-800">Transportasi Umum</p>
                                <p class="text-olive-700 text-sm">5 menit jalan kaki dari Stasiun Gubeng</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="iconify text-pumpkin-500 mt-1" data-icon="mdi:car" data-width="20"></span>
                            <div>
                                <p class="font-medium text-olive-800">Parkir Kendaraan</p>
                                <p class="text-olive-700 text-sm">Tersedia area parkir di basement gedung</p>
                            </div>
                        </div>
                        <div class="flex items-start space-x-3">
                            <span class="iconify text-pumpkin-500 mt-1" data-icon="mdi:map-marker-multiple" data-width="20"></span>
                            <div>
                                <p class="font-medium text-olive-800">Landmark Terdekat</p>
                                <p class="text-olive-700 text-sm">Tugu Pahlawan, Plaza Surabaya, Hotel Majapahit</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="map-container">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2429.190820930797!2d112.73595690576458!3d-7.256415500854163!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f942c31ae813%3A0xdc57195a289524c0!2sCak%20Dan%20Ning%20Surabaya!5e0!3m2!1sen!2sid!4v1759413768715!5m2!1sen!2sid"
                        width="100%"
                        height="350"
                        style="border:0; border-radius: 1rem;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe>
                    {{-- <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.6449471833194!2d112.73826731477394!3d-7.263772794735956!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f96c8e3f8b5d%3A0x2e0e0e0e0e0e0e0e!2sGedung%20Siola!5e0!3m2!1sid!2sid!4v1234567890123"
                        width="100%"
                        height="350"
                        style="border:0; border-radius: 1rem;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade">
                    </iframe> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- CONTACT FORM SECTION --}}
    {{-- -------------------------------------- --}}
    <section id="contact-form" class="bg-pumpkin-500 py-16 batik-truntum-contact">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-900 mb-4">Kirim Pesan</h2>
                <p class="text-lg text-olive-800 max-w-3xl mx-auto">
                    Ada pertanyaan atau ingin berkolaborasi? Kirimkan pesan kepada kami dan tim akan merespon dalam 24 jam
                </p>
            </div>

            <div class="grid lg:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-olive-900 mb-6">Apa yang Bisa Kami Bantu?</h3>
                    <div class="space-y-6">
                        @php
                            $services = [
                                [
                                    'icon' => 'mdi:microphone',
                                    'title' => 'MC & Moderator',
                                    'desc' => 'Pembawa acara profesional untuk event formal maupun non-formal'
                                ],
                                [
                                    'icon' => 'mdi:map',
                                    'title' => 'Tour Guide',
                                    'desc' => 'Pemandu wisata berpengalaman untuk keliling Surabaya'
                                ],
                                [
                                    'icon' => 'mdi:camera',
                                    'title' => 'Content Creator',
                                    'desc' => 'Pembuatan konten kreatif untuk media sosial dan promosi'
                                ],
                                [
                                    'icon' => 'mdi:account-group',
                                    'title' => 'Event Collaboration',
                                    'desc' => 'Kerjasama untuk berbagai acara dan aktivitas komunitas'
                                ]
                            ];
                        @endphp

                        @foreach($services as $service)
                        <div class="flex items-start space-x-4 bg-white bg-opacity-20 p-4 rounded-lg">
                            <span class="iconify text-olive-900 mt-1" data-icon="{{ $service['icon'] }}" data-width="24"></span>
                            <div>
                                <h4 class="font-semibold text-olive-900 mb-1">{{ $service['title'] }}</h4>
                                <p class="text-olive-800 text-sm">{{ $service['desc'] }}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="contact-form bg-white rounded-xl p-8 shadow-lg">
                    <form action="#" method="POST" class="space-y-6">
                        @csrf
                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="name" class="block text-sm font-medium text-olive-800 mb-2">Nama Lengkap *</label>
                                <input type="text" id="name" name="name" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pumpkin-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="email" class="block text-sm font-medium text-olive-800 mb-2">Email *</label>
                                <input type="email" id="email" name="email" required
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pumpkin-500 focus:border-transparent">
                            </div>
                        </div>

                        <div class="grid md:grid-cols-2 gap-6">
                            <div>
                                <label for="phone" class="block text-sm font-medium text-olive-800 mb-2">Nomor Telepon</label>
                                <input type="tel" id="phone" name="phone"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pumpkin-500 focus:border-transparent">
                            </div>
                            <div>
                                <label for="organization" class="block text-sm font-medium text-olive-800 mb-2">Organisasi/Perusahaan</label>
                                <input type="text" id="organization" name="organization"
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pumpkin-500 focus:border-transparent">
                            </div>
                        </div>

                        <div>
                            <label for="subject" class="block text-sm font-medium text-olive-800 mb-2">Subjek *</label>
                            <select id="subject" name="subject" required
                                    class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pumpkin-500 focus:border-transparent">
                                <option value="">Pilih jenis layanan</option>
                                <option value="mc-moderator">MC & Moderator</option>
                                <option value="tour-guide">Tour Guide</option>
                                <option value="content-creator">Content Creator & Model</option>
                                <option value="collaboration">Event Collaboration</option>
                                <option value="workshop">Workshop & Training</option>
                                <option value="other">Lainnya</option>
                            </select>
                        </div>

                        <div>
                            <label for="message" class="block text-sm font-medium text-olive-800 mb-2">Pesan *</label>
                            <textarea id="message" name="message" rows="5" required
                                      placeholder="Deskripsikan kebutuhan Anda, tanggal acara, budget, dan informasi lain yang diperlukan..."
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-pumpkin-500 focus:border-transparent resize-none"></textarea>
                        </div>

                        <div class="flex items-start">
                            <input type="checkbox" id="privacy" name="privacy" required
                                   class="mt-1 h-4 w-4 text-pumpkin-500 focus:ring-pumpkin-500 border-gray-300 rounded">
                            <label for="privacy" class="ml-2 text-sm text-olive-700">
                                Saya menyetujui <a href="#" class="text-pumpkin-600 hover:underline">kebijakan privasi</a> dan penggunaan data untuk keperluan komunikasi. *
                            </label>
                        </div>

                        <button type="submit"
                                class="w-full bg-pumpkin-500 text-white py-4 rounded-lg font-semibold hover:bg-pumpkin-600 transition flex items-center justify-center">
                            <span class="iconify mr-2" data-icon="mdi:send" data-width="20"></span>
                            Kirim Pesan
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- SOCIAL MEDIA SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-olive-950 py-16 batik-truntum-contact">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-merino-50 mb-4">Follow Media Sosial Kami</h2>
                <p class="text-lg text-merino-200 max-w-3xl mx-auto">
                    Ikuti update terbaru, behind the scenes, dan konten menarik lainnya di media sosial kami
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
                @php
                    $socialMedia = [
                        [
                            'icon' => 'mdi:instagram',
                            'platform' => 'Instagram',
                            'handle' => '@cakningsurabaya',
                            'followers' => '25.5K Followers',
                            'description' => 'Foto & video terbaru dari kegiatan Cak & Ning',
                            'url' => 'https://www.instagram.com/cakningsurabaya',
                            'color' => 'bg-gradient-to-br from-purple-500 to-pink-500'
                        ],
                        [
                            'icon' => 'mdi:youtube',
                            'platform' => 'YouTube',
                            'handle' => 'Cak Ning Surabaya',
                            'followers' => '8.2K Subscribers',
                            'description' => 'Video dokumenter dan highlight event',
                            'url' => 'https://www.youtube.com/@cakningsurabaya',
                            'color' => 'bg-red-600'
                        ],
                        [
                            'icon' => 'ic:baseline-tiktok',
                            'platform' => 'TikTok',
                            'handle' => '@cakningsurabaya',
                            'followers' => '15.8K Followers',
                            'description' => 'Konten viral dan tips menarik',
                            'url' => 'https://www.tiktok.com/@cakningsurabaya',
                            'color' => 'bg-gradient-to-br from-black to-red-500'
                        ],
                        [
                            'icon' => 'mdi:whatsapp',
                            'platform' => 'WhatsApp',
                            'handle' => 'Broadcast Channel',
                            'followers' => '1.5K Members',
                            'description' => 'Info event dan pengumuman penting',
                            'url' => 'https://wa.me/6287846115017',
                            'color' => 'bg-green-500'
                        ]
                    ];
                @endphp

                @foreach($socialMedia as $social)
                <a href="{{ $social['url'] }}" target="_blank"
                   class="group bg-olive-900 rounded-xl p-6 hover:bg-opacity-80 transition text-center">
                    <div class="{{ $social['color'] }} w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4 group-hover:scale-110 transition-transform">
                        <span class="iconify text-white" data-icon="{{ $social['icon'] }}" data-width="32"></span>
                    </div>
                    <h3 class="text-lg font-semibold text-merino-50 mb-1">{{ $social['platform'] }}</h3>
                    <p class="text-pumpkin-400 font-medium mb-2">{{ $social['handle'] }}</p>
                    <p class="text-merino-300 text-sm mb-3">{{ $social['followers'] }}</p>
                    <p class="text-merino-400 text-xs">{{ $social['description'] }}</p>
                </a>
                @endforeach
            </div>
        </div>
    </section>

    {{-- -------------------------------------- --}}
    {{-- FAQ SECTION --}}
    {{-- -------------------------------------- --}}
    <section class="bg-merino-50 py-16 batik-udan-liris">
        <div class="container max-w-screen-lg mx-auto px-6">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-olive-800 mb-4">Pertanyaan yang Sering Diajukan</h2>
                <p class="text-lg text-olive-700 max-w-3xl mx-auto">
                    Temukan jawaban untuk pertanyaan umum tentang kolaborasi dengan Cak & Ning Surabaya
                </p>
            </div>

            <div class="space-y-4">
                @php
                    $faqs = [
                        [
                            'question' => 'Berapa biaya untuk menggunakan jasa Cak & Ning Surabaya?',
                            'answer' => 'Biaya bervariasi tergantung jenis layanan, durasi, dan kompleksitas acara. Kami menawarkan paket yang fleksibel dan kompetitif. Silakan hubungi kami untuk konsultasi dan penawaran khusus.'
                        ],
                        [
                            'question' => 'Berapa lama sebelum acara harus melakukan booking?',
                            'answer' => 'Kami menyarankan booking minimal 2 minggu sebelum acara untuk memastikan ketersediaan. Untuk acara besar atau pada musim tinggi, disarankan booking 1-2 bulan sebelumnya.'
                        ],
                        [
                            'question' => 'Apakah Cak & Ning bisa bekerja di luar kota Surabaya?',
                            'answer' => 'Ya, kami melayani acara di luar kota Surabaya dengan tambahan biaya transportasi dan akomodasi. Area cakupan meliputi Jawa Timur dan kota-kota besar di Indonesia.'
                        ],
                        [
                            'question' => 'Apa saja yang termasuk dalam layanan MC dan moderator?',
                            'answer' => 'Layanan MC mencakup: pembukaan acara, memandu jalannya acara, interaksi dengan audience, penutupan acara, dan koordinasi dengan tim event organizer. Briefing sebelum acara juga termasuk.'
                        ],
                        [
                            'question' => 'Bagaimana cara bergabung menjadi Cak atau Ning Surabaya?',
                            'answer' => 'Setiap tahun diadakan seleksi terbuka untuk menjadi Cak & Ning Surabaya. Persyaratan umum: usia 18-25 tahun, WNI, minimal SMA, berdomisili di Surabaya. Info lengkap akan diumumkan di media sosial kami.'
                        ]
                    ];
                @endphp

                @foreach($faqs as $index => $faq)
                <div class="bg-white rounded-lg shadow-md">
                    <button class="w-full px-6 py-4 text-left flex justify-between items-center focus:outline-none"
                            onclick="toggleFAQ({{ $index }})">
                        <h3 class="font-semibold text-olive-800 pr-4">{{ $faq['question'] }}</h3>
                        <span class="iconify text-olive-600 transition-transform duration-200"
                              data-icon="mdi:chevron-down" data-width="24" id="faq-icon-{{ $index }}"></span>
                    </button>
                    <div class="px-6 pb-4 hidden" id="faq-content-{{ $index }}">
                        <p class="text-olive-700 leading-relaxed">{{ $faq['answer'] }}</p>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
@section('scripts')
<script>
    function toggleFAQ(index) {
        const content = document.getElementById(`faq-content-${index}`);
        const icon = document.getElementById(`faq-icon-${index}`);

        if (content.classList.contains('hidden')) {
            content.classList.remove('hidden');
            icon.style.transform = 'rotate(180deg)';
        } else {
            content.classList.add('hidden');
            icon.style.transform = 'rotate(0deg)';
        }
    }

    // Form submission handling
    document.querySelector('form').addEventListener('submit', function(e) {
        e.preventDefault();

        // Get form data
        const formData = new FormData(this);
        const name = formData.get('name');
        const email = formData.get('email');
        const phone = formData.get('phone') || '-';
        const organization = formData.get('organization') || '-';
        const subject = formData.get('subject');
        const message = formData.get('message');

        // Create WhatsApp message
        const whatsappMessage = `Halo Cak Ning Surabaya!

Saya ingin menanyakan tentang layanan Anda:

*Nama:* ${name}
*Email:* ${email}
*Telepon:* ${phone}
*Organisasi:* ${organization}
*Layanan:* ${subject}

*Pesan:*
${message}

Terima kasih!`;

        // Open WhatsApp
        const whatsappURL = `https://wa.me/6287846115017?text=${encodeURIComponent(whatsappMessage)}`;
        window.open(whatsappURL, '_blank');

        // Reset form
        this.reset();

        // Show success message
        alert('Terima kasih! Anda akan diarahkan ke WhatsApp untuk melanjutkan percakapan.');
    });
</script>
@endsection
