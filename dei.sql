/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

CREATE TABLE `beans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `gambar_bean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_bean` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content_beans` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `manfaats` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `sejarahs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tahun` date NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `beans` (`id`, `gambar_bean`, `nama_bean`, `content_beans`, `created_at`, `updated_at`) VALUES
(1, 'gunung_semarang.jpeg', 'Biji Semarang', 'Walaupun dinamakan kopi semarang kopi ini tidak ditanam di Semarang, melainkan di Kabupaten Garut, kopi ini ditanam di suatu wilayah kecamatan sebelah barat Garut. Lebih tepatna di Desa Ciburial, Kabupaten Garut, kopi ini ditanam di atas gunung yang memiliki ketinggian sekitar 1200 mdpl', NULL, NULL);
INSERT INTO `beans` (`id`, `gambar_bean`, `nama_bean`, `content_beans`, `created_at`, `updated_at`) VALUES
(2, 'gunung_halu.jpeg', 'Biji Halu', 'Kopi Gunung Halu ini tergolong kopi grade A dengan rasa yang nikmat. Kopi ini merupakan jenis kopi Arabika. Kopi ini memiliki cita rasa seperti kebanyakan kopi Java Preanger lainnya, kopi ini memiliki ciri khas rasa yang fruity.\n	Kopi ini berasal dari Gunung Halu lebih tepatnya berasal dari Desa Mekarwangi, Kecamatan Sindangkerta, Kab. Bandung, Jawa Barat. Terkenal dengan kenikmatannya kopi ini sudah banyak diekspor ke Maroko.', NULL, NULL);
INSERT INTO `beans` (`id`, `gambar_bean`, `nama_bean`, `content_beans`, `created_at`, `updated_at`) VALUES
(3, 'gunung_puntang.jpeg', 'Biji Puntang', 'Kopi ini merupakan salah satu kopi yang ditanam di bumi Jawa Barat. Kopi ini pernah menjadi juara dalam ajang Specialty Coffee Association Of Amerika Expo di Atlanta, Amerika Serikat tahun 2016 silam.', NULL, NULL);



INSERT INTO `manfaats` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Manfaat kopi bagi kesehatan', 'Kenikmatan secangkir banyak orang yang mengaguminya, dan dibalik nikmatnya kopi menyimpan beragam manfaat. Berikut manfaat kopi diantaranya Meningkatkan stamina Kopi memiliki kandungan zat kafein yang tinggi.\nAdenosin dalam tubuh bekerja sebagai sel yang menyebabkan rasa ingin tidur terhadap otak.Kafein dalam kopi mempengaruhi kinerja sel dan menjadikan pergerakannya lebih lambat.  Sehingga membuat perasaan segar lebih lama. Kopi juga dapat mencegah kanker, menjaga kesehatan mulut, mengurangi resiko Diabetes mengurangi resiko penyakit Alzheimer dan Demensia mencegah Parkinson dan meningkatkan mood.', NULL, NULL);
INSERT INTO `manfaats` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(2, 'Manfaat kopi bagi kecantikan', 'Selain manfaatnya yang baik bagi kesehatan, kopi kerap digunakan sebagai media perawatan kecantikan. Kopi untuk masker wajah, Perawatan kulit kepala, Menyegarkan kulit tubuh.', NULL, NULL);
INSERT INTO `manfaats` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(3, 'Olahan Kopi', 'Biji kopi dapat di olah menjadi berbagai macam seperti minuman dari biji kopi memiliki banyak varian berbeda tergantung dari bahan yang di gunakan dan bagaimana kita mengolah nya, dan secara umum biji kopi di haluskan menjadi bubuk lalu di seduh dengan air panas, ada makanan yang menggunakan kopi yang lebih banyak digunakan di kue ataupun camilan, dan dari segi kecantikan ada olahan masker yang menggunakan kopi untuk wajah.', NULL, NULL);

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(2, '2014_10_12_100000_create_password_resets_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(3, '2019_08_19_000000_create_failed_jobs_table', 1);
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_01_10_105242_create_sejarahs_table', 2),
(8, '2022_01_10_111745_create_beans_table', 3),
(10, '2022_01_10_114916_create_manfaats_table', 4);





INSERT INTO `sejarahs` (`id`, `tahun`, `title`, `content`, `gambar`, `created_at`, `updated_at`) VALUES
(1, '1707-01-01', 'Sejarah Kopi', 'terjadi kesepakatan permintaan bantuan koffie-Stelsel antara VOC dengan para Bupati Priangan untuk melakukan penanaman kopi di wilayahnya. Di Tahun 1711, Jawa Barat berhasil mengekspor kopi ke Benua Eropa. \nKopi dari perkebunan priangan ditanam di Kabupaten Cianjur. Di tahun 1726 kopi Priangan mendominasi pasar kopi dunia menggeser kopi mocha dari Yaman.\nKopi tersebut kesohor dengan nama “Java Coffee”. Dalam perkembanganya, Java Coffee menjadi merk unik. Di Priangan perkebunan kopi sudah dialihkan ke the akibat serangan hama hemileia vastratix di tahun 1878 merek Java Coffee tetao hidup lebih dari 100 tahun. Bahkan sampai hari ini. Sampai abad 20, kopi-kopi dari Amerika Latin dipasarkan ke Amerika menggunkan 3 nama yaitu, Java, Mocha dan Bourbon. Java adalah kata yang banyak dipakai masyarakat Amerika hingga sekarang untuk menyebut kopi.', 'sejarah.jpeg', NULL, NULL);





/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;