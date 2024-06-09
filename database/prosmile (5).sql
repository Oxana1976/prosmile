-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : dim. 09 juin 2024 à 15:05
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `prosmile`
--

-- --------------------------------------------------------

--
-- Structure de la table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `date_time` datetime NOT NULL,
  `status` varchar(10) NOT NULL,
  `duration` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `diagnostic` varchar(60) DEFAULT NULL,
  `rx_image_url` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `appointments`
--

INSERT INTO `appointments` (`id`, `patient_id`, `doctor_id`, `date_time`, `status`, `duration`, `description`, `diagnostic`, `rx_image_url`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '2024-02-03 10:30:00', 'Complété', 30, 'Un abcès dentaire a été diagnostiqué sur la racine de la troisième molaire inférieure droite. Un traitement endodontique est nécessaire pour enlever le tissu infecté et préserver la dent, suivi d\'une couronne pour restaurer sa structure et sa fonction.', 'Abcès Dentaire', 'patient_2.jpg', NULL, NULL),
(2, 1, 3, '2024-02-05 12:30:00', 'Complété', 30, 'Des signes d\'usure dentaire sévère attribuables au bruxisme nocturne ont été constatés. Un protège-dents sur mesure pour la nuit a été conçu pour protéger les dents contre une usure supplémentaire et pour réduire la tension au niveau de la mâchoire.', 'Bruxisme et Usure Dentaire', '', NULL, NULL),
(3, 8, 6, '2024-02-03 10:30:00', 'Complété', 30, 'Des érosions prononcées de l\'émail ont été observées sur les canines et les prémolaires, probablement dues à un régime alimentaire acide et à un brossage trop vigoureux.Un traitement de fluorure et l\'utilisation d\'un dentifrice désensibilisant ont été prescrits, ainsi que des recommandations pour des techniques de brossage douces.', 'Erosion Dentaire et Sensibilité', '', NULL, NULL),
(4, 5, 4, '2024-01-28 18:30:00', 'Complété', 30, 'Après un traumatisme subi lors d\'une activité sportive,le patient a perdu la première prémolaire supérieure gauche. La zone affectée a été nettoyée et préparée pour une prothèse temporaire avant la mise en place  d\'un implant dentaire pour une solution à long terme.', 'Perte Dentaire Traumatique', 'patient_5.jpg', NULL, NULL),
(5, 11, 3, '2024-03-03 10:00:00', 'Complété', 30, 'Le patient présente des signes de gingivite avec inflammation et saignement des gencives, surtout autour des incisives inférieures. Un nettoyage en profondeur par détartrage et surfaçage radiculaire est conseillé pour éliminer la plaque et le tartre accumulés et aider à la régression de l\'inflammation.', 'Maladie Parodontale', '', NULL, NULL),
(6, 3, 3, '2024-01-15 15:30:00', 'Complété', 30, 'À la suite d\'une radiographie et d\'un examen clinique approfondi, un début de carie dentaire a été identifié sur la surface occlusale de la deuxième molaire supérieure droite. Un traitement conservateur par obturation composite est recommandé pour restaurer la fonction et prévenir toute progression de la carie.', 'Caries Dentaire', 'patient_3.jpg', NULL, NULL),
(7, 4, 5, '2024-06-03 10:00:00', 'Planifié', 30, '', '', '', NULL, NULL),
(8, 10, 4, '2024-06-15 15:30:00', 'Planifié', 30, '', '', '', NULL, NULL),
(9, 9, 2, '2024-07-03 11:30:00', 'Planifié', 30, '', '', '', NULL, NULL),
(10, 6, 6, '2024-07-15 16:30:00', 'Planifié', 30, '', '', '', NULL, NULL),
(11, 7, 4, '2024-05-03 11:00:00', 'Annulé', 30, '', '', '', NULL, NULL),
(12, 12, 1, '2024-05-15 17:30:00', 'Annulé', 30, '', '', '', NULL, NULL),
(13, 8, 5, '2024-02-03 12:00:00', 'Annulé', 30, '', '', '', NULL, NULL),
(14, 7, 4, '2024-03-15 17:00:00', 'Annulé', 30, '', '', '', NULL, NULL),
(15, 1, 1, '2024-06-03 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-05-31 16:27:03', '2024-05-31 16:27:03'),
(16, 1, 1, '2024-05-18 10:00:00', 'Complété', 30, 'Un traitement antibiotique de 7 jours à base d\'amoxicilline a été prescrit pour contrôler l\'infection. Pour les patients allergiques à la pénicilline, la clindamycine est généralement utilisée.\r\nSous anesthésie locale, une incision a été faite dans la zone gonflée pour permettre au pus de s\'écouler, réduisant ainsi immédiatement la pression et la douleur ressenties par le patient.\r\nAprès le drainage de l\'abcès, un traitement de canal a été effectué sur la dent affectée. Les canaux radiculaires ont été nettoyés et désinfectés, puis scellés pour prévenir toute réinfection', 'Abcès dentaires', 'image/GAkUwgKZcAD9rmnYpUUdeUzGt4j24cAzcLcjq7hL.webp', '2024-05-31 19:13:43', '2024-05-31 19:20:37'),
(17, 1, 2, '2024-05-05 14:30:00', 'Complété', 30, 'Les tissus cariés ont été retirés pour empêcher l\'infection d\'atteindre la pulpe.  La cavité résultante a été remplie avec un matériau composite pour protéger la pulpe. Des médicaments anti-inflammatoires ont été appliqués pour apaiser la pulpe.', 'Pulpite', 'image/tRvkJaP7Zth4vJRjgYP7NtjN8iUc0RoDLEB2hBHA.webp', '2024-05-31 19:14:04', '2024-05-31 19:25:52'),
(18, 1, 1, '2024-06-07 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-05-31 19:27:13', '2024-05-31 19:27:13'),
(19, 16, 3, '2024-06-04 14:30:00', 'Complété', 30, 'Carie dentaire', 'Carie dentaire', NULL, '2024-05-31 19:33:39', '2024-06-06 15:36:18'),
(20, 16, 5, '2024-06-05 14:30:00', 'Complété', 30, 'Nettoyage en profondeur des racines des dents pour éliminer la plaque et le tartre.', 'Parodontite', NULL, '2024-05-31 21:50:55', '2024-06-06 15:37:58'),
(21, 16, 3, '2024-06-06 10:00:00', 'Complété', 30, 'Enlèvement de la partie cariée de la dent et remplissage de la cavité avec des matériaux tels que la résine composite,', 'Carie dentaire', 'image/5CPrf4EzC1EzoFL7SZVAhj3ShMjkSDT6lggxk2sE.webp', '2024-06-02 19:46:08', '2024-06-06 15:41:02'),
(22, 16, 1, '2024-06-23 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-06 15:35:24', '2024-06-06 15:35:24');

-- --------------------------------------------------------

--
-- Structure de la table `availabilities`
--

CREATE TABLE `availabilities` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` date NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `availabilities`
--

INSERT INTO `availabilities` (`id`, `doctor_id`, `day`, `start_time`, `end_time`) VALUES
(1, 1, '2024-06-03', '10:00:00', '13:30:00'),
(2, 1, '2024-06-03', '14:30:00', '19:00:00'),
(3, 2, '2024-06-03', '10:00:00', '13:30:00'),
(4, 3, '2024-06-03', '14:30:00', '19:00:00'),
(5, 4, '2024-06-03', '10:00:00', '13:30:00'),
(6, 4, '2024-06-03', '14:30:00', '19:00:00'),
(7, 5, '2024-06-04', '10:00:00', '13:30:00'),
(8, 5, '2024-06-04', '14:30:00', '19:00:00'),
(9, 6, '2024-06-04', '10:00:00', '13:30:00'),
(10, 4, '2024-06-04', '14:30:00', '19:00:00'),
(11, 2, '2024-06-04', '10:00:00', '13:30:00'),
(12, 3, '2024-06-04', '14:30:00', '19:00:00'),
(13, 2, '2024-06-05', '10:00:00', '13:30:00'),
(14, 2, '2024-06-05', '14:30:00', '19:00:00'),
(15, 3, '2024-06-05', '10:00:00', '13:30:00'),
(16, 4, '2024-06-05', '14:30:00', '19:00:00'),
(17, 1, '2024-06-05', '10:00:00', '13:30:00'),
(18, 5, '2024-06-05', '14:30:00', '19:00:00'),
(19, 3, '2024-06-06', '10:00:00', '13:30:00'),
(20, 3, '2024-06-06', '14:30:00', '19:00:00'),
(21, 2, '2024-06-06', '10:00:00', '13:30:00'),
(22, 1, '2024-06-06', '14:30:00', '19:00:00'),
(23, 3, '2024-06-06', '10:00:00', '13:30:00'),
(24, 6, '2024-06-06', '14:30:00', '19:00:00'),
(25, 4, '2024-06-07', '10:00:00', '13:30:00'),
(26, 4, '2024-06-07', '14:30:00', '19:00:00'),
(27, 1, '2024-06-07', '10:00:00', '13:30:00'),
(28, 2, '2024-06-07', '14:30:00', '19:00:00'),
(29, 6, '2024-06-07', '10:00:00', '13:30:00'),
(30, 6, '2024-06-07', '14:30:00', '19:00:00'),
(31, 6, '2024-06-01', '10:00:00', '13:30:00'),
(32, 3, '2024-06-01', '10:00:00', '13:30:00'),
(33, 5, '2024-06-01', '10:00:00', '13:30:00'),
(34, 1, '2024-05-18', '10:00:00', '13:00:00'),
(35, 2, '2024-05-05', '14:30:00', '19:00:00'),
(36, 1, '2024-06-23', '10:00:00', '13:00:00'),
(37, 1, '2024-06-24', '14:30:00', '19:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('maximods@gmail.com|127.0.0.1', 'i:1;', 1717520328),
('maximods@gmail.com|127.0.0.1:timer', 'i:1717520328;', 1717520328);

-- --------------------------------------------------------

--
-- Structure de la table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `comment` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `comments`
--

INSERT INTO `comments` (`id`, `appointment_id`, `comment`, `created_at`) VALUES
(1, 1, 'Je suis extrêmement satisfait du traitement reçu aujourd\'hui. Le dentiste a été très attentif à mes inquiétudes et a pris le temps de m\'expliquer chaque étape du processus. Je me sens rassuré et ma douleur est complètement partie. Merci pour votre professionnalisme et votre compassion.', '2024-05-31 14:16:53'),
(2, 2, '', '2024-05-31 14:16:53'),
(3, 3, 'La procédure était plus complexe que je ne l\'avais anticipé, et je suis un peu inquiet des douleurs que je ressens maintenant. J\'aurais apprécié plus d\'informations sur ce à quoi m\'attendre après le traitement. ', '2024-05-31 14:16:53'),
(4, 4, '', '2024-05-31 14:16:53'),
(5, 5, 'L\'accueil aujourd\'hui était formidable. La réceptionniste était très aimable et m\'a aidé à me détendre avant ma procédure. C\'est rassurant de voir que tout le personnel prend soin des patients avec tant d\'attention.', '2024-05-31 14:16:53'),
(6, 6, 'Je suis assez déçu par la consultation d\'aujourd\'hui. L\'attente a été beaucoup trop longue et le personnel semblait débordé et peu attentif. Lorsque j\'ai finalement vu le docteur, la consultation a semblé précipitée et mes questions n\'ont pas été pleinement adressées. J\'ai toujours des symptômes et je ne me sens pas rassuré sur le plan de traitement proposé. ', '2024-05-31 14:16:53');

-- --------------------------------------------------------

--
-- Structure de la table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(1) NOT NULL,
  `inami` char(20) NOT NULL,
  `description` text NOT NULL,
  `photo_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `doctors`
--

INSERT INTO `doctors` (`id`, `user_id`, `gender`, `inami`, `description`, `photo_url`) VALUES
(1, 27, 'h', '1', 'Confiez votre sourire à notre spécialiste en chirurgie dentaire, expert en interventions complexes pour des résultats impeccables. Grâce à des techniques avancées et une expertise inégalée, nous vous assurons des soins précis et sécurisés. Redécouvrez la confiance d\'un sourire parfait.', '1717189390.webp'),
(2, 28, 'f', '3', 'Prenez soin de votre sourire avec notre spécialiste en parodontologie et endodontie. Expert en prévention et traitement des maladies des gencives ainsi qu\'en soins de canal radiculaire, il vous offre des solutions complètes pour une santé bucco-dentaire optimale. Faites confiance à son expertise pour préserver vos dents et maintenir vos gencives en pleine santé. Avec des traitements avancés et précis, profitez d\'un sourire durable et sans douleur.', '1717189452.webp'),
(3, 29, 'h', '0', 'Confiez votre sourire à notre spécialiste en chirurgie maxillo-faciale et pédodontie. Expert en interventions complexes  et en soins dentaires pour enfants, il offre des traitements complets pour toute la famille. Que ce soit pour des chirurgies faciales précises ou des soins doux et adaptés aux plus jeunes, vous pouvez compter sur son expertise pour un sourire sain et radieux. Profitez de soins avancés et personnalisés pour chaque étape de la vie.', '1717189521.webp'),
(4, 30, 'f', '4', 'Offrez à votre sourire les meilleurs soins avec notre spécialiste en chirurgie dentaire et endodontie. Grâce à son expertise en interventions chirurgicales et en traitements de canal radiculaire, il vous garantit des soins complets et efficaces. Qu\'il s\'agisse d\'extractions complexes ou de sauver vos dents grâce à des traitements endodontiques avancés, notre spécialiste est là pour vous offrir un sourire sans douleur et en pleine santé. Faites confiance à notre savoir-faire pour des résultats durables et un confort optimal.', '1717189641.webp'),
(5, 31, 'h', '4', 'Confiez votre sourire à notre spécialiste en chirurgie dentaire et pédodontie. Expert en interventions chirurgicales précises et en soins dentaires adaptés aux enfants, il offre des solutions complètes pour toute la famille. Que ce soit pour des extractions complexes ou des traitements doux et efficaces pour les plus jeunes, vous pouvez compter sur son expertise pour assurer la santé et le bien-être bucco-dentaires de chacun. Profitez de soins professionnels et personnalisés pour un sourire durable et en pleine santé.', '1717189702.webp'),
(6, 32, 'f', '8', 'Confiez votre sourire à notre spécialiste en chirurgie maxillo-faciale et orthodontie. Expert en interventions chirurgicales complexes et en alignement dentaire, il offre des solutions complètes pour une santé bucco-dentaire optimale. Que ce soit pour des chirurgies faciales précises ou des traitements orthodontiques avancés, vous pouvez compter sur son expertise pour améliorer l\'esthétique et la fonctionnalité de votre sourire. Profitez de soins professionnels et personnalisés pour un résultat durable et harmonieux.', '1717189761.webp');

-- --------------------------------------------------------

--
-- Structure de la table `doctor_specialty`
--

CREATE TABLE `doctor_specialty` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialty_id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `doctor_specialty`
--

INSERT INTO `doctor_specialty` (`id`, `specialty_id`, `doctor_id`) VALUES
(1, 4, 6),
(2, 3, 6),
(3, 1, 5),
(4, 6, 5),
(5, 1, 4),
(6, 2, 4),
(7, 4, 3),
(8, 6, 3),
(9, 5, 2),
(10, 2, 2),
(11, 1, 1);

-- --------------------------------------------------------

--
-- Structure de la table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_04_13_234023_update_users_table', 1),
(5, '2024_04_14_160259_create_roles_table', 1),
(6, '2024_04_14_162524_create_role_user_table', 1),
(7, '2024_04_14_185934_create_secretaries_table', 1),
(8, '2024_04_16_102546_create_doctors_table', 1),
(9, '2024_04_16_151640_create_specialties_table', 1),
(10, '2024_04_16_153831_create_doctor_specialty_table', 1),
(11, '2024_04_16_191902_create_availabilities_table', 1),
(12, '2024_04_17_100656_create_patients_table', 1),
(13, '2024_04_17_155032_create_appointments_table', 1),
(14, '2024_04_18_170552_create_comments_table', 1),
(15, '2024_04_19_185257_create_payments_table', 1),
(16, '2024_04_19_211539_create_notifications_table', 1),
(17, '2024_05_08_094455_update_role_table', 1),
(18, '2024_05_28_184352_update_user_table', 1),
(19, '2024_05_31_170214_create_personal_access_tokens_table', 2);

-- --------------------------------------------------------

--
-- Structure de la table `notifications`
--

CREATE TABLE `notifications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `email_sent` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `notifications`
--

INSERT INTO `notifications` (`id`, `patient_id`, `appointment_id`, `type`, `message`, `created_at`, `email_sent`) VALUES
(1, 2, 1, 'email_pre_appointment', '  Votre prochain rendez-vous chez ProSmile le 2024-02-03 à 10:30 ', '2024-02-02 09:30:00', 1),
(2, 2, 1, 'after_appointment', '  Votre dossier médical a été mis à jour. ', '2024-02-03 10:30:00', 0),
(3, 1, 2, 'email_pre_appointment', '  Votre prochain rendez-vous chez ProSmile le 2024-02-05 à 12:30 ', '2024-02-04 11:30:00', 1),
(4, 1, 2, 'after_appointment', '  Votre dossier médical a été mis à jour. ', '2024-02-05 12:30:00', 0),
(5, 8, 3, 'email_pre_appointment', '  Votre prochain rendez-vous chez ProSmile le 2024-02-03 à 10:30 ', '2024-02-02 09:30:00', 1),
(6, 8, 3, 'after_appointment', '  Votre dossier médical a été mis à jour. ', '2024-02-03 10:00:00', 0),
(7, 5, 4, 'email_pre_appointment', '  Votre prochain rendez-vous chez ProSmile le 2024-01-28 à 18:30 ', '2024-01-27 17:30:00', 1),
(8, 5, 4, 'after_appointment', '  Votre dossier médical a été mis à jour. ', '2024-01-28 18:00:00', 0),
(9, 11, 5, 'email_pre_appointment', '  Votre prochain rendez-vous chez ProSmile le 2024-03-03 à 10:00 ', '2024-03-02 09:00:00', 1),
(10, 11, 5, 'after_appointment', '  Votre dossier médical a été mis à jour. ', '2024-03-03 10:00:00', 0),
(11, 3, 6, 'email_pre_appointment', '  Votre prochain rendez-vous chez ProSmile le 2024-01-15 à 15:30 ', '2024-01-14 14:30:00', 1),
(12, 3, 6, 'after_appointment', '  Votre dossier médical a été mis à jour. ', '2024-01-15 15:30:00', 0);

-- --------------------------------------------------------

--
-- Structure de la table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `patients`
--

CREATE TABLE `patients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `birthdate` date DEFAULT NULL,
  `gender` varchar(1) DEFAULT NULL,
  `about` text DEFAULT NULL,
  `emergency_contact_name` varchar(60) DEFAULT NULL,
  `emergency_contact_phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `patients`
--

INSERT INTO `patients` (`id`, `user_id`, `address`, `birthdate`, `gender`, `about`, `emergency_contact_name`, `emergency_contact_phone`) VALUES
(1, 33, '56398 Waelchi Meadow\nRashadburgh, MO 52826', '1999-04-04', 'f', 'THIS witness.\' \'Well, if I shall only look up and walking off to trouble myself about you: you must manage the best of educations--in fact, we went to school in the distance, and she had to fall a.', 'Raheem Pfannerstill', '1-817-743-1025'),
(2, 34, '76773 Rebeka Cape Suite 369\nWest Brielle, SC 38601-5376', '2002-11-18', 'h', 'However, this bottle was a table, with a kind of sob, \'I\'ve tried every way, and nothing seems to suit them!\' \'I haven\'t the least idea what you\'re at!\" You know the song, she kept fanning herself.', 'Raleigh Reichel', '+1-940-270-9110'),
(3, 35, '7812 Rowland Inlet\nGorczanymouth, MO 60010-7874', '2003-08-01', 'h', 'Queen, \'and he shall tell you my history, and you\'ll understand why it is I hate cats and dogs.\' It was opened by another footman in livery came running out of the e--e--evening, Beautiful.', 'Santina Predovic', '+13414466822'),
(4, 36, '903 Jerde Neck\nEast Karianne, CA 23412', '2003-08-30', 'h', 'PROVES his guilt,\' said the Gryphon. \'Well, I shan\'t go, at any rate a book of rules for shutting people up like a sky-rocket!\' \'So you think I must have a prize herself, you know,\' said Alice.', 'Kiana Gorczany', '1-856-916-9042'),
(5, 37, '765 Cassin Villages\nPort Gayview, HI 77900', '2002-05-23', 'f', 'Pat, what\'s that in some book, but I hadn\'t to bring tears into her head. \'If I eat one of the miserable Mock Turtle. \'Seals, turtles, salmon, and so on.\' \'What a curious plan!\' exclaimed Alice.', 'Tressa Schuster', '+1-281-639-3979'),
(6, 38, '91110 Lesch Ford Suite 735\nEast Miguel, SD 56673', '1998-02-09', 'h', 'Alice. \'Well, I should understand that better,\' Alice said to herself, and nibbled a little faster?\" said a timid and tremulous sound.] \'That\'s different from what I could show you our cat Dinah: I.', 'Alexandrine Effertz', '+19107799769'),
(7, 39, '56016 Feeney Ford Suite 561\nStammville, MS 63436-5194', '2000-09-04', 'h', 'NOT marked \'poison,\' it is you hate--C and D,\' she added in an undertone to the Hatter. \'It isn\'t mine,\' said the King had said that day. \'A likely story indeed!\' said the Mouse was bristling all.', 'Jodie Borer', '848-322-4487'),
(8, 40, '3487 Stanford Turnpike Suite 464\nManuelberg, RI 16978-2013', '2003-06-09', 'f', 'Some of the goldfish kept running in her hand, and Alice was not a mile high,\' said Alice. \'Of course twinkling begins with an air of great dismay, and began bowing to the dance. Would not, could.', 'Natasha Swaniawski', '+1-517-335-9538'),
(9, 41, '887 Gleason Route Suite 007\nChadtown, MD 25532', '2000-01-15', 'f', 'Knave of Hearts, she made some tarts, All on a three-legged stool in the pool of tears which she found she had got its neck nicely straightened out, and was a table set out under a tree a few.', 'Kevon Johnson', '+1-917-879-7281'),
(10, 42, '1847 Delta Port Apt. 519\nStromanshire, SC 30029', '2002-12-24', 'f', 'Mock Turtle went on. \'Would you tell me,\' said Alice, and tried to curtsey as she swam lazily about in the other. \'I beg your acceptance of this rope--Will the roof of the other end of half an hour.', 'Blake Mayert', '+1-864-641-0004'),
(11, 43, '853 Noemie Path Suite 779\nNew Reeceport, OK 31044-4734', '1999-10-09', 'h', 'I can\'t understand it myself to begin again, it was all dark overhead; before her was another long passage, and the Hatter added as an explanation; \'I\'ve none of them bowed low. \'Would you like to.', 'Stella Zulauf', '+1 (838) 840-9062'),
(12, 44, '420 Tremblay Light\nSouth Terence, MA 66988', '1999-10-11', 'f', 'I could let you out, you know.\' He was an old Turtle--we used to come out among the branches, and every now and then the Rabbit\'s voice along--\'Catch him, you by the White Rabbit, who said in a deep.', 'Camryn Becker', '(703) 603-7228'),
(13, 45, '505 Gibson Parkway\nAdamsmouth, MS 38258-4214', '1998-10-11', 'h', 'Pigeon, raising its voice to a mouse, you know. But do cats eat bats?\' and sometimes, \'Do bats eat cats?\' for, you see, so many out-of-the-way things had happened lately, that Alice had begun to.', 'Litzy Mann', '(936) 999-6729'),
(14, 46, '668 Carmella Wells Apt. 670\nKundehaven, TX 62818-8813', '1996-12-06', 'h', 'I can go back by railway,\' she said aloud. \'I must be getting somewhere near the house before she found to be beheaded!\' \'What for?\' said the Duchess: you\'d better finish the story for yourself.\'.', 'Verner Greenholt', '+1-320-853-5023'),
(15, 47, '9304 Terrance Drive Apt. 040\nJeremyville, KY 16638', '2000-10-11', 'h', 'Alice, as the jury had a large one, but the wise little Alice was so full of smoke from one minute to another! However, I\'ve got to go from here?\' \'That depends a good many voices all talking at.', 'Corine Wintheiser', '+1.971.225.0630'),
(16, 48, 'Chausse d\'Ixelles 50', NULL, NULL, 'Aucune problème de santé', 'Ella Emma', '222111');

-- --------------------------------------------------------

--
-- Structure de la table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `patient_id` bigint(20) UNSIGNED NOT NULL,
  `appointment_id` bigint(20) UNSIGNED NOT NULL,
  `amount` decimal(10,2) DEFAULT NULL,
  `status` varchar(30) NOT NULL,
  `stripe_charge_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `payments`
--

INSERT INTO `payments` (`id`, `patient_id`, `appointment_id`, `amount`, `status`, `stripe_charge_id`, `created_at`, `updated_at`) VALUES
(1, 2, 1, 123.60, 'Réussi', 'ch_a3pWwHPdwSNme4UVCxv6exRR', '2024-05-31 14:16:53', '2024-05-31 14:16:53'),
(2, 1, 2, 180.00, 'Réussi', 'ch_TIBDfzsnujGivnEGVZfy1lAO', '2024-05-31 14:16:53', '2024-05-31 14:16:53'),
(3, 8, 3, 258.50, 'Réussi', 'ch_2O0heGU8mWyZM5I2wTTursrg', '2024-05-31 14:16:53', '2024-05-31 14:16:53'),
(4, 5, 4, 140.80, 'Réussi', 'ch_kUjmpDBk8ljzoIHd1GkcUOfp', '2024-05-31 14:16:53', '2024-05-31 14:16:53'),
(5, 11, 5, 320.00, 'Réussi', 'ch_nVe3myxQQ8dX23PZ2Ek386I1', '2024-05-31 14:16:53', '2024-05-31 14:16:53'),
(6, 3, 6, 135.00, 'Réussi', 'ch_7dRYNIeMZJzRWHbQN3PUBJNx', '2024-05-31 14:16:53', '2024-05-31 14:16:53');

-- --------------------------------------------------------

--
-- Structure de la table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `personal_access_tokens`
--

INSERT INTO `personal_access_tokens` (`id`, `tokenable_type`, `tokenable_id`, `name`, `token`, `abilities`, `last_used_at`, `expires_at`, `created_at`, `updated_at`) VALUES
(1, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', 'e4c27db129604e712100d40064c72df8cc0ff0b4131f100d9e8e5d55b6fd641b', '[\"*\"]', NULL, NULL, '2024-05-31 21:03:42', '2024-05-31 21:03:42'),
(2, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', '5f68d11549ec77d89aef191acf7c874447ee0f5ce1da0a00d3cbfb1b33fd124d', '[\"*\"]', NULL, NULL, '2024-05-31 21:15:53', '2024-05-31 21:15:53'),
(3, 'App\\Models\\User', 25, 'API_TOKEN_PERSONNAL_CHIEF', '83036f6181d3b2dc9775bbc4a980dc544a3f0b74c2a9e548f583fafd1b5241c4', '[\"*\"]', NULL, NULL, '2024-05-31 21:36:02', '2024-05-31 21:36:02'),
(4, 'App\\Models\\User', 27, 'API_TOKEN_PERSONNAL_CHIEF', '0e6507ee165f57009bbb2c8b5ebb90cd5c9091a3444ec8720f027b99ba98c05b', '[\"*\"]', NULL, NULL, '2024-05-31 21:39:47', '2024-05-31 21:39:47'),
(5, 'App\\Models\\User', 48, 'API_TOKEN_PERSONNAL_CHIEF', '80f493056eb65485a6dd64687638eba2aa32b667521147dd9492627d7f8524c7', '[\"*\"]', NULL, NULL, '2024-05-31 21:42:46', '2024-05-31 21:42:46'),
(6, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', 'f06fff15ff858d24c2993c950b0f0ffd2bc8338e60f55ae08504105e4e9a9e97', '[\"*\"]', NULL, NULL, '2024-05-31 21:56:52', '2024-05-31 21:56:52'),
(7, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', '71e1f341d9fe04c42178c6fd19b6224301d24e4495776a73f7c0a15051d49c54', '[\"*\"]', NULL, NULL, '2024-06-01 08:08:16', '2024-06-01 08:08:16'),
(8, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', 'bac7898d934ff7806e3647c33ca92823e679beacb9f44132ca4ec5ebb9ead159', '[\"*\"]', '2024-06-01 11:58:28', NULL, '2024-06-01 08:20:02', '2024-06-01 11:58:28'),
(9, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', 'dc2eec8b82e6282d806a3eba72d21f6a69458f5a25c503728722ff3626cb0f7a', '[\"*\"]', NULL, NULL, '2024-06-01 09:10:52', '2024-06-01 09:10:52'),
(10, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', '3c0816bfc3bbc90d8145b38adbb5491b4d2922fc3995dc7022645391c8d27d1a', '[\"*\"]', NULL, NULL, '2024-06-07 05:36:16', '2024-06-07 05:36:16');

-- --------------------------------------------------------

--
-- Structure de la table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` enum('chef_cabinet','medecin','secrétaire','patient') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `roles`
--

INSERT INTO `roles` (`id`, `role`) VALUES
(1, 'chef_cabinet'),
(2, 'medecin'),
(3, 'secrétaire'),
(4, 'patient');

-- --------------------------------------------------------

--
-- Structure de la table `secretaries`
--

CREATE TABLE `secretaries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `gender` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `secretaries`
--

INSERT INTO `secretaries` (`id`, `user_id`, `gender`) VALUES
(1, 22, 'f'),
(2, 23, 'h'),
(3, 24, 'f'),
(4, 25, 'h'),
(5, 26, 'f');

-- --------------------------------------------------------

--
-- Structure de la table `sessions`
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
-- Déchargement des données de la table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('lNKYa9Ix5XUHXdQkYhCWmVhVG1rZy6EdBgcEFVWX', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUHFUTWJIV1FVRUhyOE4yVnpPdW5sTHZiTHJHTU5wM1V3VXRSekI1YSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDE6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9hcHBvaW50bWVudC9lZGl0LzIyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7fQ==', 1717778632),
('QpDn86vFel1MajcXtqqVpyYZlcSx73EVbjMylzni', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiMU11UHJLNE5NOWlXOGN4T1NpS2pyRUVSaUxyQkZ5Z1ZOZ01sdUgyRCI7czozOiJ1cmwiO2E6MDp7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI5OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvcGF5bWVudCI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjIxO30=', 1717749190);

-- --------------------------------------------------------

--
-- Structure de la table `specialties`
--

CREATE TABLE `specialties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `specialty` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `specialties`
--

INSERT INTO `specialties` (`id`, `specialty`) VALUES
(1, 'La chirurgie dentaire'),
(2, 'L\'endodontie'),
(3, 'L\'orthodontie'),
(4, 'La chirurgie maxillo-facial'),
(5, 'La parodontologie'),
(6, 'La pédodontie');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` varchar(60) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lastname` varchar(60) NOT NULL,
  `language` varchar(2) NOT NULL,
  `phone_number` varchar(30) DEFAULT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `lastname`, `language`, `phone_number`, `role_id`) VALUES
(1, 'Trystan', 'jrolfson@example.com', '2024-05-31 14:16:52', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'IKrqDs6Lvx', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Schaden', 'iu', '+17176529581', 4),
(2, 'Vince', 'hosea.torp@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'lM4KmOmgV5', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Koelpin', 'nn', '+18432101508', 4),
(3, 'Clemmie', 'lupe.dickinson@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', '7bq8fbMLdH', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Bernier', 'zu', '(240) 792-8065', 4),
(4, 'Tristian', 'ovon@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'gQCCtrfA30', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Cronin', 'ur', '+16622304715', 4),
(5, 'Shanie', 'kilback.billie@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'peeV2vCxMD', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Bernhard', 'oc', '541-207-2937', 4),
(6, 'Vivien', 'tod27@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'ORHeCO3z17', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Spinka', 'zh', '+16209806389', 4),
(7, 'Leif', 'reanna26@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 's3iAaeo6vU', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Christiansen', 'sm', '1-405-962-2635', 4),
(8, 'Ahmad', 'robel.domenic@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'xKTKiR8SF7', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Fisher', 'se', '1-386-615-3344', 4),
(9, 'Tyrese', 'lea.vandervort@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'J08WP9aTTz', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Reynolds', 'uk', '706.881.9408', 4),
(10, 'Easter', 'myrtis05@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', '8fq86mr8Ey', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Prosacco', 'ts', '1-504-206-8678', 4),
(11, 'Lennie', 'rolfson.adrien@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'rfuQdclArk', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Harvey', 'sn', '(680) 913-2318', 4),
(12, 'Claud', 'harrison88@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'Eb98vhHgYV', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Bogisich', 'an', '(573) 710-3948', 4),
(13, 'Martin', 'corine82@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'EEMrQY1wvO', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Runolfsdottir', 'ug', '(520) 632-5280', 4),
(14, 'Rylan', 'cklein@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'ggVNFgNvKb', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Altenwerth', 'bg', '+1-283-700-0634', 4),
(15, 'Iliana', 'bbeatty@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'rX5gRHuNkU', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Wisoky', 'so', '(470) 415-8283', 4),
(16, 'Dulce', 'gail.kreiger@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'wJLYcxEBLx', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Swaniawski', 'rw', '712.228.5194', 4),
(17, 'Eriberto', 'qkunze@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'L1M07xnhka', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Berge', 'sw', '1-430-441-5883', 4),
(18, 'Izaiah', 'sven.grimes@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'JrhtOsnXTa', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Heller', 'no', '1-743-720-2288', 4),
(19, 'Gladys', 'amiya15@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'QefqR3ID2m', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Hane', 'ku', '+1 (930) 874-0571', 4),
(20, 'Easton', 'cordie62@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'aunIu69bAi', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Skiles', 'so', '559.324.1780', 4),
(21, 'Joe', 'chief@mail.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'YEmDzloSysv9GtKcI9mYjtlVroLzLdZ77c5SxcZYI350s7wSUD8l2qOyz9ka', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Hansen', 'gu', '1-913-621-8523', 1),
(22, 'Silas', 'marcelina87@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'w5J6dJuP6eVwfHCMoOxx22VyD1sPJ8dMJQ9tyRQ2a9bRRhNvmH9liB2w1ZsH', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Daniel', 'tr', '+1.351.870.6636', 3),
(23, 'Noble', 'rodger.kihn@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', '78TJI9POc2', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Zulauf', 'so', '+1-478-936-6182', 3),
(24, 'Jackson', 'yking@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'wCECY83NMH', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Marquardt', 'ko', '1-986-556-8093', 3),
(25, 'Alexandro', 'faustino.stiedemann@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', '8SYSbeXqwgKVBD6M255f5Jlek7UyGg0cPwxDGZW2eIQdzCPRIUWv7ay87ly5', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Rohan', 'cy', '+1-351-864-6364', 3),
(26, 'Luther', 'reilly.shaina@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'QBUuGBCisV', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Bogan', 'fj', '+1.425.463.7413', 3),
(27, 'Americo', 'justyn94@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', '3JfDb6KxjVHODgMIzH9lLohvWoz8yDU5RTxX6w6hC9FxalUz0vetDio6FUqM', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Ruecker', 'bo', '1-803-712-9719', 2),
(28, 'Selena', 'ferry.porter@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'kqdQtPAeRqmutqmJYgrSNj7Qxi7HeQv8hB0dcYIvECmvxYhwprzeAhn3bajO', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Morar', 'mt', '256-844-4738', 2),
(29, 'Fletcher', 'streich.herta@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'Wnffh48ofw', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Nolan', 'mn', '+19544865344', 2),
(30, 'Tyrell', 'raynor.noemie@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'rLtxixCMZL', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Heller', 'lb', '(248) 743-0983', 2),
(31, 'Charlene', 'zakary.dickens@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'leL6fOfueJ', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Renner', 'oc', '207-435-8683', 2),
(32, 'Brando', 'eileen.conn@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'gWt2OsLOYZ', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Ledner', 'si', '+1.254.213.5413', 2),
(33, 'Lupe', 'gnitzsche@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'EkvKotpsatxE27nIrpqsu6rUqdFvGeD9oJ3lgAc69ZLcvWnBPe3fKfOp3Anp', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Bartell', 'nd', '1-941-488-8875', 4),
(34, 'Lupe', 'mkoss@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'RNFO8wB7cj', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Becker', 'sr', '1-504-392-1218', 4),
(35, 'Cecilia', 'kenneth.goyette@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'grFSXvIKP8', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'McGlynn', 'ti', '1-267-826-9938', 4),
(36, 'Trevion', 'yadira.ledner@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'N4UrSBINoT', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Dibbert', 'ug', '(864) 991-2260', 4),
(37, 'Don', 'antonia86@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'Aud1nMqiHS', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Renner', 'ug', '(779) 531-7980', 4),
(38, 'Marcos', 'gene58@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'xnnwdm5kXP', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Miller', 'sq', '+1 (276) 213-4861', 4),
(39, 'Reba', 'mcclure.renee@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'rGjJIu88Ve', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Kunze', 'nd', '1-772-424-4612', 4),
(40, 'Eileen', 'ddaugherty@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'YbTbgI4o4R', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Von', 'lv', '346.718.5763', 4),
(41, 'Henry', 'thelma.bailey@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'SOMOim483h', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Wisoky', 'hi', '(361) 743-4792', 4),
(42, 'Grayce', 'braun.ruby@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'h4DXs6Fcrm', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Sporer', 'ku', '828-389-7985', 4),
(43, 'Hershel', 'christ.gerhold@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'r8jhkRSyBv', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'D\'Amore', 'uk', '+1.475.682.4624', 4),
(44, 'Trenton', 'judy.herman@example.net', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'fdYWOOgD7s', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Brakus', 'he', '+1-601-670-1979', 4),
(45, 'Wilber', 'yvonrueden@example.org', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'IrAKXjuB6g', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Howe', 'ur', '1-248-694-7706', 4),
(46, 'Josie', 'carolina.wilderman@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'NPFpbJoXIw', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Brakus', 'xh', '1-430-360-0127', 4),
(47, 'Jessica', 'bethel.koepp@example.com', '2024-05-31 14:16:53', '$2y$12$hXeZk8nkr6WAg2NdOiA7Wu7bFv9LjdOetlxED338NjmhspcdAtVba', 'Iy0OMaRmiZ', '2024-05-31 14:16:53', '2024-05-31 14:16:53', 'Sporer', 'sw', '1-949-683-5101', 4),
(48, 'Maxime', 'maxime@gmail.com', NULL, '$2y$12$biktuL8TrFnEqcWb9yafJ.WtYOq8MsDKS6Z8rO0o.KoZEGpkFdri6', NULL, '2024-05-31 19:29:49', '2024-05-31 19:31:45', 'Santos', 'fr', '555333', 4);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`),
  ADD KEY `appointments_patient_id_foreign` (`patient_id`);

--
-- Index pour la table `availabilities`
--
ALTER TABLE `availabilities`
  ADD PRIMARY KEY (`id`),
  ADD KEY `availabilities_doctor_id_foreign` (`doctor_id`);

--
-- Index pour la table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_appointment_id_foreign` (`appointment_id`);

--
-- Index pour la table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_user_id_foreign` (`user_id`);

--
-- Index pour la table `doctor_specialty`
--
ALTER TABLE `doctor_specialty`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_specialty_specialty_id_foreign` (`specialty_id`),
  ADD KEY `doctor_specialty_doctor_id_foreign` (`doctor_id`);

--
-- Index pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Index pour la table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Index pour la table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `notifications_patient_id_foreign` (`patient_id`),
  ADD KEY `notifications_appointment_id_foreign` (`appointment_id`);

--
-- Index pour la table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Index pour la table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `patients_user_id_foreign` (`user_id`);

--
-- Index pour la table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `payments_patient_id_foreign` (`patient_id`),
  ADD KEY `payments_appointment_id_foreign` (`appointment_id`);

--
-- Index pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Index pour la table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `secretaries`
--
ALTER TABLE `secretaries`
  ADD PRIMARY KEY (`id`),
  ADD KEY `secretaries_user_id_foreign` (`user_id`);

--
-- Index pour la table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Index pour la table `specialties`
--
ALTER TABLE `specialties`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT pour la table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `doctor_specialty`
--
ALTER TABLE `doctor_specialty`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT pour la table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT pour la table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `appointments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `availabilities`
--
ALTER TABLE `availabilities`
  ADD CONSTRAINT `availabilities_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `doctor_specialty`
--
ALTER TABLE `doctor_specialty`
  ADD CONSTRAINT `doctor_specialty_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `doctor_specialty_specialty_id_foreign` FOREIGN KEY (`specialty_id`) REFERENCES `specialties` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `notifications_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `patients`
--
ALTER TABLE `patients`
  ADD CONSTRAINT `patients_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `payments`
--
ALTER TABLE `payments`
  ADD CONSTRAINT `payments_appointment_id_foreign` FOREIGN KEY (`appointment_id`) REFERENCES `appointments` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `payments_patient_id_foreign` FOREIGN KEY (`patient_id`) REFERENCES `patients` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `secretaries`
--
ALTER TABLE `secretaries`
  ADD CONSTRAINT `secretaries_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE;

--
-- Contraintes pour la table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
