-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 28 Jul 2025 pada 17.48
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_si_dpd_pertuni_sumut`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `artikels`
--

CREATE TABLE `artikels` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `slug` varchar(255) NOT NULL,
  `media` varchar(255) DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `artikels`
--

INSERT INTO `artikels` (`id`, `title`, `content`, `slug`, `media`, `published_at`, `created_at`, `updated_at`) VALUES
(16, 'Kegiatan Rutin Mengaji DPD Pertuni Sumatera Utara', 'Setiap hari kamis, di aula DPD Pertuni Sumatera Utara penuh oleh suara lantunan ayat-ayat suci Al-Qur’an yang damai dan tenang. Kegiatan rutin mengaji ini menjadi agenda yang dinantikan oleh banyak anggota DPD PERTUNI Sumatera Utara yang antusias mengikuti kegiatan ini. \n\nPara tunanetra peserta mengaji, menunjukkan semangat dan ketekunan yang luar biasa. Dengan panduan dari para ustadz dan ustadzah yang berpengalaman, mereka belajar mengaji dengan tekun dan penuh keikhlasan. Antusiasme peserta terlihat dari kehadiran mereka yang selalu tepat waktu dan semangat mereka dalam mempelajari dan memahami bacaan Al-Qur’an.\n\nSelain meningkatkan kemampuan membaca Al-Qur’an, kegiatan ini juga memberikan manfaat spiritual bagi para peserta. Melalui kegiatan mengaji yang dilakukan setiap hari kamis ini, mereka merasa lebih dekat dengan Sang Pencipta dan merasakan ketenangan batin yang luar biasa. Tidak hanya itu, kegiatan mengaji ini juga menjadi ajang untuk mempererat tali silaturahmi antar anggota Pertuni, sehingga tercipta rasa kebersamaan dan saling peduli yang lebih mendalam di antara mereka.\n\nDPD Pertuni Sumatera Utara memberikan dukungan penuh terhadap kegiatan mengaji ini. Dengan menyediakan fasilitas aula yang nyaman dan berbagai perlengkapan yang dibutuhkan, mereka memastikan bahwa kegiatan mengaji dapat berjalan dengan lancer dan khidmat. Dukungan ini sangat berarti bagi para tunanetra, karena memberikan mereka kesempatan untuk terus belajar dan berkembang dalam lingkungan yang mendukung.\n\nKegiatan rutin mengaji ini diharapkan dapat terus berlangsung dan semakin banyak diikuti oleh anggota Pertuni yang lain. DPD Pertuni Sumatera Utara berkomitmen untuk terus memberikan dukungan terbaiknya, sehingga kegiatan ini dapat memberikan manfaat bagi seluruh peserta. Dengan semangat kebersamaan dan ketekunan, mereka percaya bahwa kegiatan ini akan membawa kebaikan dan berkah bagi semua yang terlibat.', 'Kegiatan Rutin', '01JTDEFH2Y6XKQFF858WV05TVR.png', '2024-04-25 02:46:26', '2025-05-04 03:46:42', '2025-06-17 01:10:47'),
(17, 'Uji Coba Website Peduli Pertuni Oleh Tim Innovillage Mahasiswa Fisip Umsu', 'Mahasiswa Program Studi Ilmu Komunikasi Fakultas Ilmu Sosial dan Ilmu Politik Universitas Muhammadiyah Sumatera Utara (Prodi IKO FISIP UMSU) yang tergabung dalam Team PEDULI program Hibah Innovilage Telkom Tahun 2024 melaksanakan kegiatan pendampingan dan uji coba website PEDULI (Partnership E-commerce dan Usaha Lokal Perempuan Disabilitas). Kegiatan uji coba website yang ditujukan untuk penyandang disabilitas tunanetra (gangguan panca indera penglihatan) tersebut digelar di Aula DPD Pertuni Jalan Sampul No 30 Medan, Jumat (21/2)\n\nAcara ini langsung dihadiri Syaiful Bakti Daulay, SH selaku Ketua DPD PERTUNI Sumut (Persatuan Tunanetra Indonesia Sumatera Utara), Wakil Dekan III FISIP UMSU Dr. Dra. Yurisna, M.AP, Ketua SRCC UMSU Dr. Fatimah Sari Siregar, M.Hum, Sekretaris SRCC UMSU Linzzy Pratami Putri, SE, MM, dan Dosen Pendamping Dr. Sigit Hardiyanto, M.I.Kom.\n\nSelain itu, ikut juga secara aktif mahasiswa Pelaksana Kegiatan yang tergabung dalam Team PEDULI, yakni Gita Elisa Kurnianti Br. Ginting, Nazwa Ayu Syahputri, Rahma Atika Sari, dan beberapa mahasiswa dari Pimpinan Komisariat Ikatan Mahasiswa Muhammadiyah (PK IMM) FISIP UMSU. Tiga mahasiswa pelaksana kegiatan ini masih duduk di semester 3 dan masuk di Kelas Internasional Prodi IKO FISIP UMSU. Kegiatan ini akah diikutkan dalam program Hibah Innovilage Telkom Tahun 2024.\n\nWakil Dekan III FISIP UMSU, Yurisna Tanjung mengatakan kegiatan FISIP UMSU yang bekerja sama dengan Pertuni Sumut ini untuk yang ketiga kalinya. Pertama kegiatan Aplikasi Mata Kita. Kedua Aplikasi Kata Kita. Sekarang ini, membuat website PEDULI.\n\nWebsite ini, Lanjut Yurisna, akan memberikan kontribusi dalam mengenalkan beberapa usaha yang selama ini menjadi aktivitas anggota DPD Pertuni Sumut. Beberapa usaha tersebut di antaranya panti pijat tunanetra dan pemasaran berbagai jenis kerupuk.\n\nDalam aktivitasnya, Team mahasiswa membuat merek atau label Pertuni di bungkusan kerupuk dan membuat website guna mempromosikan sekaligus media pemesanan untuk pemanfaatan keterampilan pijat dan berbagai jenis kerupuk.\n\n“Ini wujud kepedulian dan dukungan dari mahasiswa kami kepada saudara penyandang tunanetra. Mudah-mudahan ini bermanfaat dan bisa memudahkan kita semua dalam menjalani aktivitas kehidupan,” katanya.\n\nSementara itu, ketua DPD Pertuni Sumut Syaiful Bakti Daulay mengucapkan terima kasih yang sebesar-besarnya kepada FISIP UMSU.\n\n“Kami ucapkan terima kasih yang telah memberikan kontribusi pemikiran yang nyata sekaligus memfasilitasi kegiatan ini. . Semoga ini bermanfaat untuk kita semua,” ujarnya.\n\nSigit Hardiyanto selaku Dsoen Pendamping menyampaikan kegiatan ini dilakukan sebagai wujud upaya digitalisasi melalui pembuatan website untuk mempromosikan kegiatan Pertuni Sumut, yang pada akhirnya nanti dapat meningkatkan kesejahteraan bagi penyandang disabilitas.\n\n“Program ini menitikberatkan pada pembuatan website yang tidak hanya menarik secara visual, tetapi juga informatif dan mudah diakses oleh masyarakat luas dan dapat dipergunakan penyandang tunanetra,” tambahnya.\n\nPada aspek teknis, tim juga fokus pada pelatihan pengelolaan website kepada warga disabilitas sebagai langkah penting untuk memastikan keberlanjutan informasi pada website tersebut.', 'Umsu', '01JTDEKV7NV5Z4RBKNVF15J2B6.jpg', '2025-02-27 10:48:43', '2025-05-04 03:49:04', '2025-05-04 03:49:04'),
(18, 'HUT ke-57 Pertuni, Edy Rahmayadi Terus Berupaya Penuhi Hak Penyandang Disabilitas dan Fasilitasi Pelayanan Kesehatan', 'Gubernur Sumatera Utara (Sumut) Edy Rahmayadi menyampaikan akan terus berupaya memenuhi hak-hak penyandang disabilitas. Salah satunya dengan mempersiapkan Peraturan Daerah (Perda) mengenai pemenuhan hak disabilitas di Sumut, yang saat ini sedang dikaji.\n\n\"Sedang dikaji oleh DPRD, ada beberapa yang harus ditambahkan, di sinkronisasikan karena Perda ini kan berhubungan dengan dana, ini yang dikaji, \" kata Edy Rahmayadi pada Peringatan HUT ke-57 Persatuan Tunanetra Indonesia (Pertuni) di Aula Tengku Rizal Nurdin, Rumah Dinas Gubernur, Jalan Sudirman Nomor 41, Medan, Selasa (24/1).\n\nSelain Perda, Edy Rahmayadi  juga berjanji akan memfasilitasi pelayanan kesehatan para tunanetra. Hal itu disampaikannya langsung kepada kurag lebih 250-an tunanetra yang hadir pada HUT Pertuni itu. Bahkan Edy memberikan nomor kontak telepon Kepala Dinas Kesehatan Sumut dan Direktur Rumah Sakit Umum Haji.', 'HUT 57 Pertuni', '01JTDETGR2XHRNC8YMB1HAG42X.jpg', '2023-01-24 07:52:23', '2025-05-04 03:52:42', '2025-05-04 03:52:42'),
(19, 'Gubsu Edy Akan Benahi Fasilitas Sekretariat Pertuni Sumut', 'Setelah mewujudkan janjinya merenovasi gedung aula Dewan Perwakilan Daerah (DPD) Persatuan Tuna Netra Indonesia (Pertuni) Sumatera Utara (Sumut), Gubernur Sumut Edy Rahmayadi berencana memperbaiki beberapa fasilitas yang ada di Kantor Sekretariat Pertuni Sumut.\n\nAdapun fasilitas yang akan dibenahi antara lain tempat peristirahatan atau tempat tidur hingga kamar mandi. Hal tersebut disampaikan Gubernur Edy Rahmayadi pada acara perayaan HUT ke-56 Pertuni di Kantor Sekretariat Pertuni Sumut di Jalan Sampul, Medan, Rabu (26/1).\n\nEdy Rahmayadi mengatakan, apa yang dilakukannya tersebut tidak bermaksud apapun, kecuali niat membantu karena Allah SWT. Kemudian, kewajibannya sebagai Gubernur Sumut juga sudah seharusnya memperhatikan masyarakatnya keseluruhan.\n\nâ€œLillahi Ta\'ala, ini kewajiban saya sebagai Gubernur, untuk itu ke depan, fasilitas harus diperhatikan untuk mereka,â€ kata Edy.\n\nPada kesempatan itu, Edy memberi movitasi kepada penyandang disabilitas agar senantiasa bersemangat dan melakukan yang terbaik. Menurutnya hal itu juga merupakan bentuk tanda syukur kepada Tuhan.\n\nâ€œItulah rasa syukur, finish-nya nanti di sisi Allah SWT, yang dinilai siapa yang terbaik akhlaknya, bukan siapa yang paling sempurna organnya (tubuh),â€ ujar Edy.\n\nDi akhir sambutannya, Edy mendekati seorang tuna netra yang sudah bersiap di belakang alat musik keyboard. Lantas menanyakan apakah bisa mengiringinya menyanyikan lagu \"Tuhan dari Bimbo\". Edy pun takjub melihat kemampuan pemain keyboard penyandang disabilitas yang mengirinya bernyanyi tersebut.\n\nKetua DPD Pertuni Sumut Syaiful Bakti Daulay berterima kasih kepada Gubernur Edy Rahmayadi, karena telah memberikan banyak bantuan dan perhatian kepada Pertuni Sumut. Terutama saat Edy memenuhi janjinya memperbaiki fasilitas yang ada di Sekretariat Pertuni Sumut.\n\nKami DPD Pertuni Sumut mengucapkan ribuan terima kasih yang sebesar-besarnya, atas prakarsa bapak atas gagasan bapak sehingga gedung kami dapat dibangun dengan megah dan kami bisa melaksanakan berbagai kegiatan di gedung ini, ungkap Syaiful.', 'Gubsu Edy Akan Benahi DPD Pertuni', '01JTDEZCX8RBZ35YGMKCRQNPMM.webp', '2022-01-26 06:55:09', '2025-05-04 03:55:22', '2025-05-04 03:55:22'),
(20, 'PD Pujakesuma Kota Medan Salurkan Bansos untuk Tuna Netra', 'Perhimpunan Putra Jawa Kelahiran Sumatera (Pujakesuma) Kota Medan menyalurkan bantuan sosial (bansos) kepada Persatuan Tuna Netra Indonesia Sumatra Utara (Pertuni Sumut).\n\nPenyerahan bantuan berupa beras itu merupakan rangkaian kegiatan menuju pelantikan kepengurusan PD Pujakesuma Kota Medan. Penyerahan dilakukan di Kantor Sekretariat Pertuni Sumut, Jalan Sampul, No 30 Medan, pada Selasa malam, 12 November 2024,  \n\nKetua Pujakesuma Kota Medan, Erwin Bumi, mengatakan, kegiatan seperti ini nantinya bisa lebih sering dilaksanakan. Karena itu, Erwin berharap agar ke depannya kegiatan-kegiatan yang dilaksanakan DPD Pertuni bisa disampaikan juga ke Pujakesuma Medan.\n\n\"Barangkali ada dukungan yang bisa diberikan dalam setiap kegiatan yang diadakan oleh Pertuni ke depannya,\" kata Erwin dalam keterangan persnya, dikutip Rabu, 13 November 2024.\n\nErwin juga berharap, dengan adanya kegiatan ini, bisa memperkuat hubungan antar komunitas dan meningkatkan kesadaran masyarakat akan pentingnya saling mendukung antar warga, khususnya bagi mereka yang berkebutuhan khusus.\n\n\"Pujakesuma adalah organisasi yang menaungi warga keturunan Jawa di Sumatera. Selain menjalankan berbagai kegiatan sosial budaya, Pujakesuma juga aktif dalam kegiatan sosial sebagai bentuk kontribusi bagi kesejahteraan masyarakat Sumatera Utara,\" tutur Erwin.\n\nErwin menginginkan Pujakesuma Kota Medan dan Pertuni Sumatera Utara dapat terus bersinergi dalam menciptakan masyarakat yang inklusif dan peduli terhadap keberagaman kebutuhan warga.\n\nSementara itu, Sekretaris Pertuni Sumut, John Tanjung, menyambut baik dan berterima kasih atas perhatian serta bantuan yang diberikan Pujakesuma Kota Medan.\n\n“Bantuan ini sangat berarti bagi kami, karena menunjukkan bahwa masyarakat luas, termasuk Pujakesuma, peduli terhadap nasib penyandang disabilitas khususnya tuna netra. Dengan adanya dukungan seperti ini, semoga menjadi berkah untuk kita semua,\" ungkapnya.\n\nPertuni Sumut jelas John Tanjung, adalah organisasi yang mewadahi para penyandang disabilitas yakni kelompok tuna netra di Sumatera Utara.\n\n\"Organisasi ini bertujuan meningkatkan kesejahteraan dan memperjuangkan hak-hak tuna netra agar dapat hidup mandiri dan berpartisipasi aktif dalam masyarakat,\" pungkasnya.', 'Bansos PD Pujakesuma', '01JTDF94K75HQJ2WX9SN7WT1JQ.jpg', '2024-11-12 11:00:26', '2025-05-04 04:00:41', '2025-05-04 04:00:41'),
(21, 'DPD PDI Perjuangan Sumut Gelar Bakti Sosial Bersama PERTUNI', 'PDI Perjuangan terus membuktikan komitmennya membantu dan memperjuangkan rakyat kecil tak terkecuali rakyat yang berkebutuhan khusus seperti para tuna netra.\n\nHal tersebut disampaikan oleh Bendahara DPD PDI Perjuangan Sumut dan Sekretaris Komisi E DPRD Sumut dr. Meriahta Sitepu saat memberikan sambutan pembukaan acara bakti sosial kerjasama antara DPD PDI Perjuangan Sumut dan DPD Persatuan Tuna Netra Indonesia (PERTUNI) di Sekretariat DPD PERTUNI Sumut Jalan Sampul No. 30 Medan, Selasa (26/1).\n\n\"Ibu Ketua Umum selalu mengingatkan kepada seluruh kader PDI Perjuangan agar selalu berbuat kebaikan di tengah-tengah masyarakat, seperti menjaga lingkungan dengan menanam pohon dan berbagai kegiatan sosial seperti yang dilakukan saat ini antar Partai dan PERTUNI,\" ujar perempuan yang akrab dipanggil Mbak Tutut.\n\nKegiatan bakti sosial yang dilakukan DPD PDI Perjuangan dan PERTUNI Sumut ini dalam rangka HUT PDI Perjuangan yang ke 48 dan HUT PERTUNI yang ke 55 tahun.\n\nBerbagai kegiatan sosial yang dilakukan diantaranya pengobatan gratis, cek kolesterol, gula darah dan asam urat, juga dilakukan pembagian masker dan pangkas gratis. Semua itu dikhususkan untuk seluruh anggota masyarakat Tuna Netra yang ada di bawah naungan PERTUNI.\n\n\"Hubungan PDI Perjuangan, terkhusus keluarga besar saya dengan PERTUNI sudah lama terjalin, saya selalu ingatkan kepada tenaga medis di RS Bandung apabila ada pasien dari Tuna Netra dan atau masyarakat berkebutuhan khusus lainnya harus segera dilayani dan ditempatkan khusus di rumah sakit,\" ungkap Meriahta yang juga Direktur RS Bandung tersebut.\n\nLebih lanjut, dr Meriahta Sitepu mengatakan bahwa saat dirinya terpilih sebagai anggota DPRD Sumut dari Dapil Binjai Langkat maka lebih banyak yang bisa dilakukan, tidak hanya pelayanan kesehatan tetapi juga memperjuangkan anggaran untuk perbaikan berbagai fasilitas panti yang hingga saat ini kondisinya masih tidak manusiawi.\n\n\"Saya minta gedung PERTUNI ini untuk dibangun agar lebih layak huni karena sdh lama kondisinya sudah tidak layak lagi, Alhamdulillah tahun ini mudah-mudahan bisa dibangun dengan anggaran APBD, saya juga ngomong kepada Wagub Sumut bahwa banyak panti yang sudah tidak manusiawi, kami Fraksi PDI Perjuangan memperjuangkan itu dan Alhamdulillah di setujuinya,\" kata Meriahta.\n\ndr. Meriahta berpesan kepada anggota PERTUNI untuk tidak usah berkecil hati saat kita memiliki kekurangan karena ini semua recana Allah, terus saja berbuat kebaikan dan berusaha pasti Allah memberikan yang terbaik\n\nSelain itu PDI Perjuangan melalui Fraksinya memperjuangan agar masyarakat yang berkebutuhan berkebutuhan khusus mendapat bantuan BPJS PBI yang selama ini tidak ditampung oleh pemerintah. \n\n\"Syukur Alhamdulillah sekarang ini walau secara bertahap masyarakat yang berkebutuhan khusus akan ditampung di BPJS PBI, karena itu PERTUNI segera mendaftarkan anggotanya menjadi peserta di Dinkes atau Dinsos,\" kata Mbak Tutut.\n\nSementara itu, Ketua DPD PERTUNI Khairul Batubara dalam sambutannya menyatakan terimakasih kepada PDI Perjuangan yang ikut berpartisipasi dalam HUT PERTUNI dan berharap terua membantu masyarakat berkebutuhan khusus untuk mendapatkan kehidupan yang layak.\n\n\"Kami terus melalukan edukasi kepada anak-anak yang tuna netra, karena banyak orang tua yang menyembunyikan anaknya dirumah karena malu bahwa anaknya tuna netra, sehingga tidak mendapatkan hak-hak sebagai manusia seharusnya,\" ujar Khairul.\n\nDalam acara bakti sosial tersebut beberapa Wakil Ketua DPD Partai turut hadir seperti Aswan Jaya dan Meinarty Bangun serta Mawarni dan Syarifah Fifi dari Badan Partai.', 'Bakti Sosial', '01JTF2MKYS4TDP9H0C3RYJD30Z.jpg', '2021-01-27 01:58:03', '2025-05-04 18:58:15', '2025-05-04 18:58:15'),
(22, 'DPD Gerindra Sumut Sumbang 8 Kipas Angin untuk Pertuni', 'Wujud kepedulian terhadap penyandang disabilitas kembali ditunjukkan oleh Dewan Pimpinan Daerah (DPD) Partai Gerindra Sumatera Utara (Sumut) menghadiri kegiatan Arisan Silaturahmi Tuna Netra Islam (ASTI) yang digelar oleh Persatuan Tunanetra Indonesia (Pertuni) Kota Medan di Aula Pertuni DPD Sumut, Sabtu (03/05/2025).\n\nDalam kegiatan yang menjadi agenda rutin setiap bulan ini, DPD Gerindra Sumut memberikan bantuan berupa 8 unit kipas angin untuk mendukung kenyamanan para anggota Pertuni dalam beraktivitas.\n\nPantauan wartawan, hadir mewakili DPD Gerindra Sumut yakni Bendahara DPD Gerindra Sumut Ayin MAP dan Wakil Ketua Ikrimah Hamidy, Ari Wibowo dan Bobby O Zulkarnain. Mereka menyerahkan langsung bantuan tersebut.', 'DPD Gerindra Sumut Sumbang 8 Kipas ', '01JTF2T61HS5ZNXZY2KPZCRWVE.jpeg', '2025-05-05 02:00:45', '2025-05-04 19:01:17', '2025-05-04 19:01:17'),
(24, 'Pengajian bersama HWDI', 'Kegiatan Pengajian Tausiyah rutin hari ini di PERTUNI bersama Himpunan Wanita Disabilitas Indonesia (HWDI)', 'pengajian hwdi', '01JXWMPK18XVX9X00VF1BCFQ2S.png', '2025-04-16 15:09:59', '2025-06-16 08:11:07', '2025-06-16 08:11:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('356a192b7913b04c54574d18c28d46e6395428ab', 'i:1;', 1750152588),
('356a192b7913b04c54574d18c28d46e6395428ab:timer', 'i:1750152588;', 1750152588),
('a17961fa74e9275d529f489537f179c05d50c2f3', 'i:1;', 1753717357),
('a17961fa74e9275d529f489537f179c05d50c2f3:timer', 'i:1753717357;', 1753717357);

-- --------------------------------------------------------

--
-- Struktur dari tabel `galeris`
--

CREATE TABLE `galeris` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `galeris`
--

INSERT INTO `galeris` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(7, 'DPD PERTUNI Sumatera Utara', 'Gedung dpd pertuni sumuatera utara Jalan Sampul, Ayahanda', '01JTDFBCYTNQP6V4AXATC3R8Y8.png', '2025-05-04 04:01:55', '2025-06-17 02:37:44'),
(8, 'Relawan DPD PERTUNI SUMUT', 'Relawan Pertuni Sumut untuk membantu Para Tunanetra', '01JTDMYWJJD6N2QBRE5BXS50AT.jpg', '2025-05-04 05:39:57', '2025-06-17 02:36:15'),
(9, 'Kegiatan Rutin Mengaji DPD Pertuni Sumatera Utara', 'Kegiatan Rutin Mengaji dpd Pertuni Sumatera Utara yang diikuti Para Anggota', '01JTDN0ASX6W15MYFHSEX5KMA3.png', '2025-05-04 05:40:44', '2025-06-17 02:36:39'),
(13, 'Gedung DPD PERTUNI SUMUT (Tampak Depan)', 'Gedung dpd pertuni sumut (Tampak Depan)', '01JXYJPTSXFVBZYP3AADXWY1N7.jpg', '2025-06-17 02:14:46', '2025-06-17 02:39:04'),
(14, 'Gedung DPD PERTUNI SUMUT (Tampak Belakang)', 'Gedung dpd pertuni sumut (Tampak Belakang)', '01JXYKC0Z57Y6A780J26WHCKXB.jpg', '2025-06-17 02:26:21', '2025-06-17 02:39:23'),
(15, 'Agenda bersama Gubernur Edy Rahmayadi ', 'Agenda bersama Gubernur Edy Rahmayadi di dpd pertuni sumut', '01JXYKNPC7D69EW0XV2Z87X6R0.webp', '2025-06-17 02:31:38', '2025-06-17 02:41:20');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kontaks`
--

CREATE TABLE `kontaks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `whatsapp_url` varchar(255) DEFAULT NULL,
  `instagram_url` varchar(255) DEFAULT NULL,
  `youtube_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `kontaks`
--

INSERT INTO `kontaks` (`id`, `address`, `phone`, `email`, `whatsapp_url`, `instagram_url`, `youtube_url`, `created_at`, `updated_at`) VALUES
(1, 'Jalan Sampul No.30, Sei Putih Barat, Kec. Medan Petisah, Kota Medan, Sumatera Utara 20118', '083875642370', 'pertunisumut@gmail.com', 'wa.me/+6283875642370', 'instagram.com/dpdpertunisumut', 'youtube.com/@dpdpertunisumut257', '2024-11-14 02:27:47', '2025-06-17 08:20:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(4, '2024_11_13_173735_create_profils_table', 2),
(5, '2024_11_14_073556_create_artikels_table', 2),
(6, '2024_11_14_073957_create_galeris_table', 2),
(7, '2024_11_14_074218_create_strukturs_table', 2),
(8, '2024_11_14_074454_create_kontaks_table', 2);

-- --------------------------------------------------------

--
-- Struktur dari tabel `profils`
--

CREATE TABLE `profils` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `profils`
--

INSERT INTO `profils` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'PERTUNI SUMUT', 'Persatuan Tunanetra Indonesia (Pertuni) adalah organisasi kemasyarakatan tunanetra tingkat Nasional yang didirikan pada tanggal 26 Januari 1966 di Surakarta oleh 4 orang tokoh tunanetra. Pertuni bertujuan “Mewujudkan keadaan yang kondusif bagi tunanetra untuk menjalankan kehidupannya sebagai individu dan warga negara yang cerdas, mandiri dan produktif tanpa diskriminasi dalam segenap aspek kehidupan dan penghidupan. Hingga saat ini, Pertuni telah memiliki Dewan Pengurus Daerah (DPD di 34 Propinsi dan Dewan Pengurus Cabang (DPC) di 221 Kabupaten/Kota di seluruh Indonesia.', '2025-05-02 00:09:54', '2025-05-02 00:12:38'),
(3, 'Panti Pijat', 'Panti pijat yang dikelola oleh organisasi tunanetra ini menawarkan layanan pijat yang beragam, meliputi pijat untuk laki-laki, perempuan, dan spesialis anak-anak. Sebagai bentuk pemberdayaan bagi penyandang disabilitas, seluruh tenaga pijat yang bekerja di panti ini merupakan individu tunanetra yang terlatih secara profesional dalam memberikan perawatan pijat yang berkualitas. Layanan yang disediakan dirancang untuk memberikan kenyamanan dan relaksasi bagi pelanggan dari berbagai kalangan, dengan perhatian khusus terhadap kebutuhan dan kenyamanan masing-masing, baik itu bagi orang dewasa maupun anak-anak. Panti pijat ini tidak hanya memberikan manfaat terapi fisik, tetapi juga memberikan kesempatan kerja yang bermartabat bagi para tunanetra, serta mendukung kesadaran masyarakat tentang pentingnya inklusi sosial dan pemberdayaan disabilitas.\n\nPanti pijat ini juga menawarkan kemudahan layanan pijat di tempat dengan tarif sebesar Rp70.000, yang memungkinkan pelanggan menikmati perawatan relaksasi langsung di lokasi yang mereka inginkan. Bagi pelanggan yang lebih memilih kenyamanan pijat di rumah atau tempat pribadi lainnya, tersedia layanan panggilan dengan tarif Rp100.000. Dengan kedua pilihan tarif ini, pelanggan dapat menyesuaikan layanan sesuai dengan kebutuhan dan preferensi pelanggan, sambil tetap menikmati kualitas pijat yang diberikan oleh tenaga profesional tunanetra yang terlatih. Layanan ini bertujuan untuk memberikan kemudahan akses bagi masyarakat yang membutuhkan perawatan pijat berkualitas tanpa harus meninggalkan kenyamanan rumah atau tempat kerja.', '2025-05-04 06:17:03', '2025-05-04 06:17:03');

-- --------------------------------------------------------

--
-- Struktur dari tabel `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('1kNLyR1L5Opm7rENeG3rSj7PnXrwcPzf9hDNu6Y9', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVTB1T2ZLNWlEaHRSdllqRzVYMHJtUVhzamVocmExOVlPYU5saHRLTSI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJG9Hb25nbXRYcVJ0MHk0OFpaVDNXa09mUGxVaWNqQWgzaEJzZFlrVUVaYmpTNnpOTWRncjNxIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czoyMToiaHR0cDovLzEyNy4wLjAuMTo4MDAwIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1752899221),
('3vSbQbaJSv684MYJRlj5Hc2W3lBR6ydgGYESYQY6', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMjIyVm0wQmtVQUQzMXREVXJFakJkYzVlaGpacjMxcWdESURsbUtMaSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1752898578),
('aNXw1NNnJcWI8aWU3aZNjLHkbnzEzCwJQgZa5gf3', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoialhqWnpSSzVjcTdYN2xOQUxSV1JhWWtiRW92UHlXT1k5bERpTjlCcSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9hcnRpa2VscyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRvR29uZ210WHFSdDB5NDhaWlQzV2tPZlBsVWljakFoM2hCc2RZa1VFWmJqUzZ6Tk1kZ3IzcSI7fQ==', 1753717404),
('lfdBWaPk40hHeaZuzgxHbhyH3cHIhNnJ9OlH750v', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/138.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoidGU5QUY3Y0tpVkJ4bWhsNWJkWGJ0OFU5cnlOYW45NUQwVTNoc2dUOSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7czoxNzoicGFzc3dvcmRfaGFzaF93ZWIiO3M6NjA6IiQyeSQxMiRvR29uZ210WHFSdDB5NDhaWlQzV2tPZlBsVWljakFoM2hCc2RZa1VFWmJqUzZ6Tk1kZ3IzcSI7fQ==', 1752857189),
('o3lpAHtGhHFpq0LGDhWqUIoLdQ7x0u74BSYzxsb3', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/137.0.0.0 Safari/537.36', 'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiMTVjOWtWS3JLQmwyQTFSdEluaFpDbnl6dlB0bTUxdFFFNFJjaGVJRyI7czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MTtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEyJG9Hb25nbXRYcVJ0MHk0OFpaVDNXa09mUGxVaWNqQWgzaEJzZFlrVUVaYmpTNnpOTWRncjNxIjtzOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czozNjoiaHR0cDovLzEyNy4wLjAuMTo4MDAwL1RlbnRhbmclMjBLYW1pIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo4OiJmaWxhbWVudCI7YTowOnt9fQ==', 1750177129);

-- --------------------------------------------------------

--
-- Struktur dari tabel `strukturs`
--

CREATE TABLE `strukturs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `strukturs`
--

INSERT INTO `strukturs` (`id`, `name`, `position`, `photo`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Saiful Bakti Daulay, S.H', 'Ketua Umum', '01JXYGFCAC7EJQYF5AYF2JGD44.jpeg', 'Ketua Umum DPD PERTUNI SUMUT', '2025-05-12 03:01:37', '2025-06-17 01:35:45'),
(4, 'Mardizon Tanjung', 'Sekretaris', '01JXHHT9B06GSY0KD0BBFJ9J25.jpeg', 'Sekretaris DPD PERTUNI SUMUT', '2025-06-12 00:47:03', '2025-06-12 00:49:03'),
(5, 'Edy Syahputra', 'Bendara', '01JXHS4CQCWN11JMZTTYXKR4X2.jpeg', 'Bendara DPD PERTUNI SUMUT', '2025-06-12 02:56:55', '2025-06-12 02:56:55'),
(6, 'Linda Wati S.Pd', 'Ketua 1', '01JXP48EK2NPAKH7PFWC278C8W.jpeg', 'Ketua Bidang Keorganisasian, Kemitraan dan Advokasi', '2025-06-13 19:28:20', '2025-06-13 19:28:20'),
(7, 'Khairul Batu Bara', 'Ketua 2', '01JXP4BRH27Y02QKVY960ZVRM9.jpeg', 'Ketua Bidang Kesejahteraan', '2025-06-13 19:30:08', '2025-06-13 19:30:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$12$oGongmtXqRt0y48ZZT3WkOfPlUicjAh3hBsdYkUEZbjS6zNMdgr3q', 'gCtKMffRcbE6cRkxFhqupPU26goD0DUajtRIWEhXwnncyWdCfsozcKtfkGWM', '2024-11-13 10:25:24', '2024-11-13 10:25:24');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `artikels_slug_unique` (`slug`);

--
-- Indeks untuk tabel `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indeks untuk tabel `galeris`
--
ALTER TABLE `galeris`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `kontaks`
--
ALTER TABLE `kontaks`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indeks untuk tabel `strukturs`
--
ALTER TABLE `strukturs`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `artikels`
--
ALTER TABLE `artikels`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT untuk tabel `galeris`
--
ALTER TABLE `galeris`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT untuk tabel `kontaks`
--
ALTER TABLE `kontaks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT untuk tabel `profils`
--
ALTER TABLE `profils`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `strukturs`
--
ALTER TABLE `strukturs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
