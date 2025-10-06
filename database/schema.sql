DROP DATABASE IF EXISTS cak_ning_surabaya;
CREATE DATABASE cak_ning_surabaya;
USE cak_ning_surabaya;

-- =========================
-- Tabel Users (Laravel compatible)
-- =========================
CREATE TABLE users (
    id BIGINT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL UNIQUE,
    email_verified_at TIMESTAMP NULL,
    password VARCHAR(255) NOT NULL,
    remember_token VARCHAR(100) NULL,
    created_at TIMESTAMP NULL,
    updated_at TIMESTAMP NULL,
    INDEX idx_email (email)
);

-- =========================
-- Tabel Password Reset Tokens
-- =========================
CREATE TABLE password_reset_tokens (
    email VARCHAR(255) PRIMARY KEY,
    token VARCHAR(255) NOT NULL,
    created_at TIMESTAMP NULL
);

-- =========================
-- Tabel Sessions
-- =========================
CREATE TABLE sessions (
    id VARCHAR(255) PRIMARY KEY,
    user_id BIGINT UNSIGNED NULL,
    ip_address VARCHAR(45) NULL,
    user_agent TEXT NULL,
    payload LONGTEXT NOT NULL,
    last_activity INT NOT NULL,
    INDEX idx_user_id (user_id),
    INDEX idx_last_activity (last_activity),
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE SET NULL
);

-- =========================
-- Data Dummy untuk Users
-- =========================
INSERT INTO users (name, email, email_verified_at, password, remember_token, created_at, updated_at) VALUES
('Admin Cak Ning', 'admin@cakning.surabaya.go.id', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Eko Prasetyo', 'eko.prasetyo@surabaya.go.id', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Sari Dewi', 'sari.dewi@surabaya.go.id', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Budi Santoso', 'budi.santoso@surabaya.go.id', NULL, '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Nina Rahayu', 'nina.rahayu@surabaya.go.id', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Agus Wibowo', 'agus.wibowo@surabaya.go.id', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Fitri Handayani', 'fitri.handayani@gmail.com', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Rudi Hermawan', 'rudi.hermawan@gmail.com', NULL, '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Indah Permata', 'indah.permata@yahoo.com', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW()),
('Ahmad Fauzi', 'ahmad.fauzi@outlook.com', NOW(), '$2y$12$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, NOW(), NOW());


-- =========================
-- Tabel untuk Tags (Simplified)
-- =========================
CREATE TABLE tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name_tags VARCHAR(100) NOT NULL UNIQUE,
    INDEX idx_name_tags (name_tags)
);

-- =========================
-- Tabel Posts (Simplified - removed tags column)
-- =========================
CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    slug VARCHAR(255) UNIQUE NOT NULL,
    content TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_title (title),
    FULLTEXT KEY ft_content (title, content)
);

-- =========================
-- Tabel Pivot Post-Tags (Many-to-Many)
-- =========================
CREATE TABLE post_tags (
    id INT AUTO_INCREMENT PRIMARY KEY,
    post_id INT NOT NULL,
    tag_id INT NOT NULL,
    FOREIGN KEY (post_id) REFERENCES posts(id) ON DELETE CASCADE,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE CASCADE,
    UNIQUE KEY unique_post_tag (post_id, tag_id),
    INDEX idx_post_id (post_id),
    INDEX idx_tag_id (tag_id)
);

-- =========================
-- Tabel FAQ (Updated - only tag_id reference)
-- =========================
CREATE TABLE faqs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    question VARCHAR(255) NOT NULL,
    answer TEXT NOT NULL,
    tag_id INT,
    FOREIGN KEY (tag_id) REFERENCES tags(id) ON DELETE SET NULL,
    INDEX idx_question (question),
    FULLTEXT KEY ft_faq (question, answer)
);

-- =========================
-- Tabel Logs untuk Chat
-- =========================
CREATE TABLE chat_logs (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_message TEXT NOT NULL,
    bot_response TEXT NOT NULL,
    matched_source ENUM('faq','blog','internet','fallback') NOT NULL,
    confidence_score DECIMAL(5,2) DEFAULT 0.0,
    intent VARCHAR(50) DEFAULT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    INDEX idx_created_at (created_at),
    INDEX idx_source (matched_source)
);

-- =========================
-- Data untuk Tags
-- =========================
INSERT INTO tags (name_tags) VALUES
('Cak Ning Surabaya'),
('Sejarah Kota Surabaya'),
('Wisata Surabaya'),
('Budaya & Tradisi'),
('Event & Kegiatan Kota'),
('Pemerintahan & Informasi Kota'),
('Kuliner Surabaya'),
('Tokoh & Figur Penting'),
('Pendidikan & Pemuda'),
('Lain-lain'),
('Wisata'),
('Religi'),
('Sejarah'),
('Pahlawan'),
('Makanan Khas'),
('Kuliner Malam'),
('Persyaratan Pendaftaran'),
('Sejarah Cak Ning'),
('Asal-usul nama Surabaya'),
('Perang 10 November'),
('Wisata Kuliner'),
('Sapaan'),
('Tentang Chatbot'),
('Museum'),
('Kompetisi'),
('Duta Pariwisata'),
('Tradisional'),
('Heritage'),
('Edukasi'),
('Arsitektur'),
('Festival');

-- =========================
-- Sample Posts Data
-- =========================
INSERT INTO posts (title, slug, content) VALUES
('Wisata Religi Sunan Ampel', 'wisata-religi-sunan-ampel', 'Kompleks makam Sunan Ampel menawarkan wisata religi sekaligus pembelajaran sejarah penyebaran Islam di Jawa Timur. Tempat ini menjadi tujuan ziarah dan wisata yang memadukan nilai spiritual dengan nilai edukasi.'),
('Sejarah Perang 10 November', 'sejarah-perang-10-november', 'Rekam jejak pertempuran heroik 10 November 1945 yang menjadikan Surabaya sebagai kota pahlawan dengan semangat arek Suroboyo yang tak pernah surut melawan penjajah.'),
('Rawon: Kebanggaan Kuliner Surabaya', 'rawon-kebanggaan-kuliner-surabaya', 'Rawon dengan kuah hitam pekat menjadi ikon kuliner Surabaya yang tak tergantikan. Sejarah, resep, dan tempat terbaik menyantapnya di kota pahlawan.'),
('Tips Sukses Lolos Seleksi Cak Ning Surabaya', 'tips-sukses-lolos-seleksi-cak-ning', 'Panduan lengkap persiapan mengikuti seleksi Cak dan Ning Surabaya, mulai dari persyaratan, tahapan seleksi, hingga tips tampil percaya diri sebagai duta pariwisata.'),
('Tugu Pahlawan: Monumen Kebanggaan Surabaya', 'tugu-pahlawan-monumen-kebanggaan', 'Tugu Pahlawan berdiri megah sebagai simbol perjuangan rakyat Surabaya. Sejarah pembangunan dan makna simbolis yang terkandung di dalamnya.'),
('Ludruk: Seni Pertunjukan Khas Surabaya', 'ludruk-seni-pertunjukan-khas', 'Ludruk sebagai seni pertunjukan tradisional Surabaya yang sarat humor dan kritik sosial dengan dialog bahasa Jawa Suroboyoan yang khas.'),
('House of Sampoerna: Museum Rokok Bersejarah', 'house-sampoerna-museum-rokok', 'House of Sampoerna menghadirkan perjalanan sejarah industri rokok kretek Indonesia dalam kemasan museum yang menarik dan edukatif.'),
('Festival Rujak Uleg: Tradisi Kuliner Rakyat', 'festival-rujak-uleg-tradisi-kuliner', 'Festival Rujak Uleg yang memecahkan rekor dunia sebagai ajang memperkenalkan kuliner tradisional Surabaya kepada dunia.'),
('Surabaya Marathon: Lari Menembus Sejarah', 'surabaya-marathon-lari-sejarah', 'Surabaya Marathon mengajak peserta berlari menelusuri rute bersejarah kota pahlawan sambil menikmati landmark ikonik yang tersebar di kota.'),
('Universitas Airlangga: Kebanggaan Surabaya', 'universitas-airlangga-kebanggaan', 'Universitas Airlangga sebagai perguruan tinggi terkemuka yang menjadi kebanggaan kota Surabaya dengan berbagai prestasi akademik dan penelitian.');

-- =========================
-- Relasi Post <-> Tags menggunakan post_tags
-- =========================
INSERT INTO post_tags (post_id, tag_id) VALUES
-- Post 1: Wisata Religi Sunan Ampel
(1, 11), -- Wisata
(1, 12), -- Religi
(1, 13), -- Sejarah
(1, 29), -- Edukasi

-- Post 2: Sejarah Perang 10 November
(2, 13), -- Sejarah
(2, 14), -- Pahlawan
(2, 20), -- Perang 10 November
(2, 2),  -- Sejarah Kota Surabaya

-- Post 3: Rawon Kuliner
(3, 7),  -- Kuliner Surabaya
(3, 15), -- Makanan Khas
(3, 21), -- Wisata Kuliner

-- Post 4: Tips Cak Ning
(4, 1),  -- Cak Ning Surabaya
(4, 17), -- Persyaratan Pendaftaran
(4, 25), -- Kompetisi
(4, 26), -- Duta Pariwisata

-- Post 5: Tugu Pahlawan
(5, 13), -- Sejarah
(5, 14), -- Pahlawan
(5, 24), -- Museum
(5, 2),  -- Sejarah Kota Surabaya

-- Post 6: Ludruk
(6, 4),  -- Budaya & Tradisi
(6, 27), -- Tradisional
(6, 8),  -- Tokoh & Figur Penting

-- Post 7: House of Sampoerna
(7, 3),  -- Wisata Surabaya
(7, 24), -- Museum
(7, 13), -- Sejarah
(7, 29), -- Edukasi

-- Post 8: Festival Rujak Uleg
(8, 5),  -- Event & Kegiatan Kota
(8, 31), -- Festival
(8, 7),  -- Kuliner Surabaya
(8, 27), -- Tradisional

-- Post 9: Surabaya Marathon
(9, 5),  -- Event & Kegiatan Kota
(9, 13), -- Sejarah
(9, 3),  -- Wisata Surabaya

-- Post 10: Universitas Airlangga
(10, 9), -- Pendidikan & Pemuda
(10, 29), -- Edukasi
(10, 8); -- Tokoh & Figur Penting

-- =========================
-- Data FAQ
-- =========================
INSERT INTO faqs (question, answer, tag_id) VALUES
-- Cak Ning Surabaya
('Apa itu Cak dan Ning Surabaya?', 'Cak dan Ning Surabaya adalah duta pariwisata dan budaya kota Surabaya yang dipilih melalui kompetisi tahunan untuk mempromosikan kota Surabaya.', 1),
('Bagaimana cara mendaftar Cak Ning?', 'Pendaftaran Cak Ning dilakukan secara online melalui website resmi Pemkot Surabaya. Syarat umum: WNI, usia 18-25 tahun, pendidikan minimal SMA.', 1),
('Kapan jadwal seleksi Cak Ning?', 'Seleksi Cak Ning biasanya dimulai bulan Maret dengan pendaftaran, audisi April-Mei, dan pengumuman pemenang Juni.', 1),

-- Sejarah Surabaya
('Mengapa Surabaya disebut kota pahlawan?', 'Surabaya disebut kota pahlawan karena peristiwa heroik 10 November 1945 ketika arek-arek Suroboyo melawan penjajah Belanda dan Sekutu.', 2),
('Apa arti lambang kota Surabaya?', 'Lambang Surabaya menggambarkan Sura (hiu) dan Baya (buaya) yang melambangkan keberanian dan kekuatan dalam menghadapi tantangan.', 2),
('Siapa tokoh penting dalam sejarah Surabaya?', 'Tokoh penting antara lain Bung Tomo (pahlawan 10 November), WR Supratman (pencipta Indonesia Raya), dan Sunan Ampel (wali penyebar Islam).', 2),

-- Wisata Surabaya
('Tempat wisata religi terbaik di Surabaya?', 'Wisata religi terbaik: Masjid Sunan Ampel, Masjid Al Akbar, Masjid Cheng Ho, dan Gereja Kelahiran Santa Perawan Maria.', 3),
('Rekomendasi wisata keluarga di Surabaya?', 'Wisata keluarga: Kebun Bibit Wonorejo, Taman Bungkul, Ciputra Waterpark, House of Sampoerna, dan Surabaya Zoo.', 3),
('Museum apa saja yang ada di Surabaya?', 'Museum di Surabaya: House of Sampoerna, Museum 10 November, Museum Pendidikan, Museum Bank Indonesia, dan Museum Mpu Tantular.', 3),

-- Budaya & Tradisi
('Apa itu ludruk?', 'Ludruk adalah seni pertunjukan tradisional Jawa Timur yang menampilkan cerita rakyat dengan dialog humor dalam bahasa Jawa Suroboyoan.', 4),
('Bagaimana ciri khas bahasa Surabaya?', 'Bahasa Surabaya memiliki logat khas dengan penggunaan kata "rek", intonasi yang tegas, dan ungkapan-ungkapan unik seperti "koncone dewe".', 4),
('Festival budaya apa yang terkenal di Surabaya?', 'Festival terkenal: Festival Rujak Uleg, Surabaya Cross Culture Festival, dan Parade Budaya Hari Jadi Kota Surabaya.', 4),

-- Event & Kegiatan
('Kapan peringatan Hari Pahlawan di Surabaya?', 'Hari Pahlawan diperingati setiap 10 November dengan upacara di Tugu Pahlawan dan berbagai kegiatan budaya di seluruh kota.', 5),
('Event tahunan apa yang wajib dikunjungi?', 'Event wajib: Peringatan Hari Pahlawan (10 Nov), Hari Jadi Kota (31 Mei), Festival Rujak Uleg, dan Surabaya Marathon.', 5),

-- Pemerintahan
('Siapa walikota Surabaya saat ini?', 'Walikota Surabaya saat ini adalah Eri Cahyadi dengan wakil walikota Armuji, melanjutkan program-program Tri Rismaharini.', 6),
('Bagaimana cara mengurus KTP di Surabaya?', 'Pengurusan KTP dapat dilakukan di kantor kecamatan atau kelurahan terdekat dengan membawa dokumen persyaratan dan mengisi formulir.', 6),
('Apa itu Suroboyo Bus?', 'Suroboyo Bus adalah transportasi umum gratis dengan pembayaran menggunakan botol plastik bekas, bagian dari program lingkungan kota.', 6),

-- Kuliner
('Makanan khas Surabaya yang wajib dicoba?', 'Makanan khas wajib: rawon, rujak cingur, lontong balap, sate klopo, tahu tek, dan pecel semanggi.', 7),
('Dimana tempat makan rawon terenak?', 'Rawon terenak di: Rawon Setan, Rawon Pak Pangat, Rawon Bu Kari, dan Rawon Nguling yang sudah legendaris.', 7),
('Minuman khas Surabaya apa saja?', 'Minuman khas: es degan, es podeng, wedang ronde, dan es dawet ireng yang menyegarkan di cuaca panas.', 7),

-- Tokoh & Figur
('Siapa Bung Tomo?', 'Sutomo alias Bung Tomo adalah pahlawan nasional yang memimpin perlawanan rakyat Surabaya pada 10 November 1945 melawan Sekutu.', 8),
('Apa kontribusi WR Supratman untuk Indonesia?', 'WR Supratman menciptakan lagu kebangsaan Indonesia Raya dan lahir di Surabaya. Beliau adalah komponis dan wartawan terkenal.', 8),

-- Pendidikan & Pemuda
('Universitas terbaik di Surabaya?', 'Universitas terbaik: Universitas Airlangga, ITS, UPN Veteran, Universitas Surabaya (UBAYA), dan Universitas Negeri Surabaya.', 9),
('Program beasiswa apa yang tersedia?', 'Program beasiswa: Bidikmisi, KIP Kuliah, beasiswa prestasi daerah, dan beasiswa dari universitas masing-masing.', 9),

-- Lain-lain
('Halo, apa kabar?', 'Halo! Kabar baik. Saya siap membantu Anda mengenal lebih dalam tentang Surabaya dan Cak Ning. Ada yang ingin ditanyakan?', 10),
('Kamu siapa?', 'Saya adalah chatbot pemandu informasi tentang Cak Ning Surabaya dan kota Surabaya. Saya dibuat untuk membantu menjawab pertanyaan seputar kota pahlawan ini.', 10),
('Bagaimana cuaca di Surabaya?', 'Surabaya memiliki iklim tropis dengan suhu rata-rata 26-32°C. Musim hujan November-April, musim kemarau Mei-Oktober.', 10),
('Gimana cara ke Surabaya?', 'Ke Surabaya bisa melalui Bandara Juanda, Stasiun Gubeng/Pasar Turi, Terminal Bungurasih, atau Pelabuhan Tanjung Perak. Transportasi umum tersedia lengkap.', 10);
