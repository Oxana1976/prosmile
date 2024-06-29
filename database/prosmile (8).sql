-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mer. 26 juin 2024 à 09:35
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
(7, 4, 5, '2024-06-03 10:00:00', 'Complété', 30, NULL, NULL, '', NULL, '2024-06-11 06:44:59'),
(8, 10, 4, '2024-06-15 15:30:00', 'Planifié', 30, '', '', '', NULL, NULL),
(9, 9, 2, '2024-07-03 11:30:00', 'Planifié', 30, '', '', '', NULL, NULL),
(10, 6, 6, '2024-07-15 16:30:00', 'Annulé', 30, NULL, NULL, '', NULL, '2024-06-11 08:42:31'),
(11, 7, 4, '2024-05-03 11:00:00', 'Annulé', 30, '', '', '', NULL, NULL),
(12, 12, 1, '2024-05-15 17:30:00', 'Annulé', 30, '', '', '', NULL, NULL),
(13, 8, 5, '2024-02-03 12:00:00', 'Annulé', 30, '', '', '', NULL, NULL),
(14, 7, 4, '2024-03-15 17:00:00', 'Annulé', 30, '', '', '', NULL, NULL),
(15, 16, 1, '2024-06-17 10:00:00', 'Complété', 30, 'Détartrage et surfaçage radiculaire pour éliminer la plaque et le tartre sous les gencives. Administration locale  d\'antibiotiques pour contrôler l\'infection bactérienne.', 'La parodontite', NULL, '2024-06-11 06:42:48', '2024-06-17 06:48:52'),
(16, 16, 5, '2024-06-12 14:30:00', 'Complété', 30, 'La carie est retirée pour éliminer la source de l\'irritation.\r\n La cavité est soigneusement nettoyée pour éliminer toute infection ou débris.\r\n La dent est restaurée avec un plombage ou une couronne pour protéger la pulpe et éviter toute réinfection.', 'Pulpite', 'image/nRhHofeBLPg1LC1H6i4TtmG0RFfcefrzdvsduDbo.webp', '2024-06-11 06:43:49', '2024-06-11 07:42:32'),
(17, 4, 2, '2024-06-14 14:30:00', 'Complété', 30, 'Élimination de la plaque dentaire et du tartre au-dessus et au-dessous de la ligne gingivale.\r\nLissage des surfaces radiculaires pour éliminer les toxines bactériennes et favoriser la ré-adhésion des gencives à la dent.', 'Gingivite', NULL, '2024-06-11 06:48:34', '2024-06-14 14:54:27'),
(18, 16, 2, '2024-06-13 10:00:00', 'Complété', 30, 'Élimination de la plaque dentaire et du tartre au-dessus et au-dessous de la ligne gingivale .\r\nLissage des surfaces radiculaires pour éliminer les toxines bactériennes et favoriser la ré-adhésion des gencives à la dent.', 'Gingivite', NULL, '2024-06-11 06:55:20', '2024-06-14 16:10:10'),
(19, 5, 5, '2024-06-18 10:00:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-11 07:25:30', '2024-06-11 08:51:49'),
(20, 16, 1, '2024-06-10 10:00:00', 'Complété', 30, 'Réalisation d\'un détartrage pour enlever la plaque et le tartre accumulés autour des appareils orthodontiques, suivi d\'un polissage pour lisser les surfaces dentaires.\r\n Utilisation d\'une solution antiseptique pour irriguer les poches parodontales et réduire la charge bactérienne.', 'Orthodontite', 'image/vekWrSVB8VOwF070sDLgGHq5OFT119rRbjrwnowN.webp', '2024-06-11 08:06:53', '2024-06-11 08:10:41'),
(21, 17, 4, '2024-06-23 14:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-11 08:52:21', '2024-06-11 08:53:15'),
(22, 16, 3, '2024-06-24 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-14 05:23:47', '2024-06-14 05:23:47'),
(23, 16, 2, '2024-06-14 14:30:00', 'Complété', 30, 'Utilisation de plombage en argent pour les zones non visibles et soumises à une forte pression de mastication.', 'Carie Dentaire', NULL, '2024-06-14 16:29:15', '2024-06-14 16:31:23'),
(24, 16, 3, '2024-06-12 13:00:00', 'Complété', 30, 'Élimination des poches parodontales profondes en repositionnant les gencives pour faciliter le nettoyage et réduire les poches.\r\n Transplantation de tissu gingival pour couvrir les racines exposées et renforcer les gencives.\r\n Ajout de matériaux de greffe osseuse pour reconstruire l\'os perdu autour des dents.', 'Parodontite', 'image/gm5O4Xyy9c3FapS5ltSX4L6ZFz8ucHBuAAebhiQ0.webp', '2024-06-14 17:05:12', '2024-06-14 17:08:30'),
(25, 17, 5, '2024-06-18 18:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-14 17:18:10', '2024-06-14 17:18:10'),
(26, 17, 6, '2024-06-16 10:00:00', 'Complété', 30, 'Une incision est faite dans l\'abcès pour permettre au pus de s\'écouler, soulageant immédiatement la pression et la douleur,  un traitement de canal est effectué. La pulpe infectée est retirée, l\'intérieur de la dent est nettoyé et désinfecté, puis scellé avec un matériau de remplissage.', 'Abcès dentaire', 'image/j7Uo4cIj16cVEdnJz6366NFdlBJlaYfmmobj0ZUT.webp', '2024-06-16 07:06:32', '2024-06-16 07:11:56'),
(27, 17, 5, '2024-06-15 13:00:00', 'Complété', 30, 'Plombage', 'Carie dentaire', NULL, '2024-06-16 07:17:55', '2024-06-16 07:18:32'),
(28, 17, 6, '2024-06-16 10:30:00', 'Complété', 30, 'Pulpite', 'Pulpite', NULL, '2024-06-16 07:55:18', '2024-06-16 07:57:47'),
(29, 17, 6, '2024-06-16 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 08:06:25', '2024-06-16 08:06:25'),
(30, 17, 6, '2024-06-16 12:30:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-16 08:07:26', '2024-06-16 09:26:15'),
(31, 16, 6, '2024-06-16 10:30:00', 'Complété', 30, 'Parodontite', 'Parodontite', NULL, '2024-06-16 08:11:41', '2024-06-16 08:15:14'),
(32, 16, 6, '2024-06-15 10:00:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-16 08:20:43', '2024-06-16 08:22:43'),
(33, 17, 6, '2024-06-15 13:00:00', 'Complété', 30, 'Pulpite', 'Pulpite', NULL, '2024-06-16 08:36:13', '2024-06-16 08:41:50'),
(34, 17, 4, '2024-06-16 10:00:00', 'Complété', 30, 'Pulpite', 'Pulpite', NULL, '2024-06-16 08:46:28', '2024-06-16 08:50:14'),
(35, 17, 4, '2024-06-16 10:00:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-16 08:58:05', '2024-06-16 09:00:16'),
(36, 17, 4, '2024-06-16 10:00:00', 'Complété', 30, 'carie', 'carie', NULL, '2024-06-16 09:03:40', '2024-06-16 09:13:52'),
(37, 16, 1, '2024-06-17 10:30:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-16 09:39:26', '2024-06-17 11:46:26'),
(38, 1, 1, '2024-06-17 18:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-16 09:39:58', '2024-06-16 09:44:40'),
(39, 17, 1, '2024-06-17 18:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-16 09:45:05', '2024-06-16 09:48:21'),
(40, 17, 1, '2024-06-17 11:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 09:49:27', '2024-06-16 09:49:27'),
(41, 16, 4, '2024-06-16 11:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 10:05:17', '2024-06-16 10:05:17'),
(42, 16, 4, '2024-06-16 18:30:00', 'Complété', 30, 'Élimination de la plaque et du tartre des surfaces dentaires et sous la ligne gingivale.  Rabotage et suture des gencives pour réduire la profondeur des poches.', 'L\'orthodontite', NULL, '2024-06-16 10:09:28', '2024-06-16 17:23:56'),
(43, 17, 4, '2024-06-14 18:30:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-16 12:35:21', '2024-06-16 12:36:49'),
(44, 17, 4, '2024-06-14 10:00:00', 'Complété', 30, 'pulpite', 'Pulpite', NULL, '2024-06-16 12:50:20', '2024-06-16 12:55:49'),
(45, 1, 4, '2024-06-14 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 12:56:41', '2024-06-16 12:56:41'),
(46, 17, 2, '2024-06-14 18:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-16 16:04:47', '2024-06-16 16:08:35'),
(47, 17, 2, '2024-06-14 18:00:00', 'Complété', 30, 'Pulpite', 'Pulpite', NULL, '2024-06-16 16:18:52', '2024-06-16 16:20:14'),
(48, 16, 2, '2024-06-14 18:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 16:23:12', '2024-06-16 16:23:12'),
(49, 17, 2, '2024-06-14 14:30:00', 'Complété', 30, 'Gengivite', 'Gengivite', NULL, '2024-06-16 16:30:08', '2024-06-16 16:33:07'),
(50, 17, 3, '2024-06-24 10:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 17:45:52', '2024-06-17 06:42:39'),
(51, 1, 3, '2024-06-24 10:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-16 17:49:40', '2024-06-16 17:49:40'),
(52, 17, 4, '2024-06-12 18:30:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-17 11:09:54', '2024-06-17 11:12:05'),
(53, 17, 3, '2024-06-18 10:00:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-17 11:42:09', '2024-06-18 06:18:43'),
(54, 17, 3, '2024-06-18 11:00:00', 'Complété', 30, 'Carie', 'Carie', NULL, '2024-06-17 11:42:36', '2024-06-18 09:49:19'),
(55, 17, 1, '2024-06-22 13:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-17 12:16:55', '2024-06-17 12:19:02'),
(56, 17, 1, '2024-06-22 13:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-17 12:20:39', '2024-06-17 12:20:39'),
(57, 17, 2, '2024-06-23 14:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-18 06:23:24', '2024-06-18 06:24:50'),
(58, 17, 2, '2024-06-23 14:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-18 06:26:26', '2024-06-18 06:27:34'),
(59, 17, 2, '2024-06-23 14:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-18 06:32:25', '2024-06-18 06:33:45'),
(60, 17, 2, '2024-06-23 18:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-18 06:52:56', '2024-06-18 06:54:33'),
(61, 17, 2, '2024-06-23 18:30:00', 'Annulé', 30, NULL, NULL, NULL, '2024-06-18 06:56:42', '2024-06-18 07:01:01'),
(62, 1, 2, '2024-06-23 18:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-18 07:01:21', '2024-06-18 07:01:21'),
(63, 17, 1, '2024-06-19 14:30:00', 'Complété', 30, NULL, NULL, NULL, '2024-06-19 15:12:22', '2024-06-19 15:14:12'),
(64, 17, 1, '2024-06-19 15:00:00', 'Complété', 30, NULL, NULL, NULL, '2024-06-19 15:16:03', '2024-06-19 15:16:58'),
(65, 17, 1, '2024-06-19 17:00:00', 'Complété', 30, NULL, NULL, NULL, '2024-06-19 15:17:27', '2024-06-19 15:17:46'),
(66, 17, 1, '2024-06-19 18:00:00', 'Complété', 30, NULL, NULL, NULL, '2024-06-19 15:20:25', '2024-06-19 15:20:44'),
(67, 19, 1, '2024-06-22 10:00:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-22 19:16:50', '2024-06-22 19:16:50'),
(68, 17, 1, '2024-06-25 10:00:00', 'Complété', 30, 'Parodontite', 'Parodontite', 'image/wq21MD1UTLb22CDkGbSNqaGuW0nyeAfdP6XzhLaE.webp', '2024-06-22 19:22:53', '2024-06-22 19:25:36'),
(69, 16, 1, '2024-06-25 10:30:00', 'Complété', 30, 'Plombage', 'Carie dentaire', NULL, '2024-06-24 17:38:00', '2024-06-24 18:01:04'),
(70, 16, 2, '2024-06-25 10:00:00', 'Complété', 30, 'Orthodontite', 'Orthodontite', 'image/lM4AyzIfYMZgCvN5z4emChvDjxxRlsDVyR3c960r.webp', '2024-06-24 17:59:16', '2024-06-25 06:01:32'),
(71, 16, 1, '2024-06-25 12:30:00', 'Complété', 30, 'Plombage', 'Carie Dentaire', 'image/dZRpqrxMljgEghxLzlLXzfZMedYLzchgIUmhhBeu.webp', '2024-06-25 05:57:58', '2024-06-25 06:23:28'),
(72, 16, 2, '2024-06-27 18:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-25 06:00:13', '2024-06-25 06:00:13'),
(73, 16, 2, '2024-06-27 14:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-25 06:19:35', '2024-06-25 06:19:35'),
(74, 16, 1, '2024-06-26 14:30:00', 'Planifié', 30, NULL, NULL, NULL, '2024-06-25 06:21:33', '2024-06-25 06:21:33');

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
(1, 1, '2024-06-17', '10:00:00', '13:30:00'),
(2, 1, '2024-06-17', '14:30:00', '19:00:00'),
(3, 2, '2024-06-17', '10:00:00', '13:30:00'),
(4, 3, '2024-06-17', '14:30:00', '19:00:00'),
(5, 4, '2024-06-17', '10:00:00', '13:30:00'),
(6, 4, '2024-06-17', '14:30:00', '19:00:00'),
(7, 5, '2024-06-18', '10:00:00', '13:30:00'),
(8, 5, '2024-06-18', '14:30:00', '19:00:00'),
(9, 6, '2024-06-18', '10:00:00', '13:30:00'),
(10, 4, '2024-06-18', '14:30:00', '19:00:00'),
(11, 2, '2024-06-18', '10:00:00', '13:30:00'),
(12, 3, '2024-06-18', '14:30:00', '19:00:00'),
(13, 2, '2024-06-12', '10:00:00', '13:30:00'),
(14, 2, '2024-06-12', '14:30:00', '19:00:00'),
(15, 3, '2024-06-12', '10:00:00', '13:30:00'),
(16, 4, '2024-06-12', '14:30:00', '19:00:00'),
(17, 1, '2024-06-12', '10:00:00', '13:30:00'),
(18, 5, '2024-06-12', '14:30:00', '19:00:00'),
(19, 3, '2024-06-13', '10:00:00', '13:30:00'),
(20, 3, '2024-06-13', '14:30:00', '19:00:00'),
(21, 2, '2024-06-13', '10:00:00', '13:30:00'),
(22, 1, '2024-06-13', '14:30:00', '19:00:00'),
(23, 3, '2024-06-13', '10:00:00', '13:30:00'),
(24, 6, '2024-06-13', '14:30:00', '19:00:00'),
(25, 4, '2024-06-14', '10:00:00', '13:30:00'),
(26, 4, '2024-06-14', '14:30:00', '19:00:00'),
(27, 1, '2024-06-14', '10:00:00', '13:30:00'),
(28, 2, '2024-06-14', '14:30:00', '19:00:00'),
(29, 6, '2024-06-14', '10:00:00', '13:30:00'),
(30, 6, '2024-06-14', '14:30:00', '19:00:00'),
(31, 6, '2024-06-15', '10:00:00', '13:30:00'),
(32, 3, '2024-06-15', '10:00:00', '13:30:00'),
(33, 5, '2024-06-15', '10:00:00', '13:30:00'),
(34, 1, '2024-06-22', '10:00:00', '14:00:00'),
(35, 2, '2024-06-23', '14:30:00', '19:00:00'),
(36, 3, '2024-06-24', '10:00:00', '13:00:00'),
(37, 4, '2024-06-23', '14:30:00', '19:00:00'),
(38, 5, '2024-06-22', '10:00:00', '13:00:00'),
(39, 6, '2024-06-24', '14:30:00', '19:00:00'),
(40, 1, '2024-06-10', '10:00:00', '13:00:00'),
(42, 6, '2024-06-16', '10:00:00', '13:00:00'),
(43, 4, '2024-06-16', '10:00:00', '13:00:00'),
(45, 4, '2024-06-16', '14:30:00', '19:00:00'),
(46, 3, '2024-06-18', '10:00:00', '13:00:00'),
(47, 1, '2024-06-19', '14:30:00', '19:00:00'),
(48, 1, '2024-06-25', '10:00:00', '13:00:00'),
(50, 2, '2024-06-25', '10:00:00', '13:00:00'),
(51, 2, '2024-06-27', '14:30:00', '19:00:00'),
(52, 1, '2024-06-26', '14:30:00', '19:00:00');

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
('maximods@gmail.com|127.0.0.1', 'i:1;', 1718548877),
('maximods@gmail.com|127.0.0.1:timer', 'i:1718548877;', 1718548877);

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
(1, 1, 'Je suis extrêmement satisfait du traitement reçu aujourd\'hui. Le dentiste a été très attentif à mes inquiétudes et a pris le temps de m\'expliquer chaque étape du processus. Je me sens rassuré et ma douleur est complètement partie. Merci pour votre professionnalisme et votre compassion.', '2024-06-11 06:39:58'),
(2, 2, '', '2024-06-11 06:39:58'),
(3, 3, 'La procédure était plus complexe que je ne l\'avais anticipé, et je suis un peu inquiet des douleurs que je ressens maintenant. J\'aurais apprécié plus d\'informations sur ce à quoi m\'attendre après le traitement. ', '2024-06-11 06:39:58'),
(4, 4, '', '2024-06-11 06:39:58'),
(5, 5, 'L\'accueil aujourd\'hui était formidable. La réceptionniste était très aimable et m\'a aidé à me détendre avant ma procédure. C\'est rassurant de voir que tout le personnel prend soin des patients avec tant d\'attention.', '2024-06-11 06:39:58'),
(6, 6, 'Je suis assez déçu par la consultation d\'aujourd\'hui. L\'attente a été beaucoup trop longue et le personnel semblait débordé et peu attentif. Lorsque j\'ai finalement vu le docteur, la consultation a semblé précipitée et mes questions n\'ont pas été pleinement adressées. J\'ai toujours des symptômes et je ne me sens pas rassuré sur le plan de traitement proposé. ', '2024-06-11 06:39:58');

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
(1, 27, 'f', '4', 'Découvrez des soins dentaires de qualité supérieure dans une ambiance chaleureuse et professionnelle. Le Dr. Ericka Dickens, dentiste renommée, est spécialisée dans la chirurgie dentaire et l\'orthodontie, offrant des services personnalisés pour répondre à tous vos besoins dentaires.', '1718096624.webp'),
(2, 28, 'h', '0', 'Pour des soins dentaires de pointe et un sourire éclatant, faites confiance au Dr. Jean Martin. Fort d\'une expertise reconnue en endodontie et parodontologie, le Dr. Auer propose des traitements personnalisés pour préserver et améliorer votre santé bucco-dentaire.', '1718096973.webp'),
(3, 29, 'f', '5', 'Offrez à votre famille des soins dentaires de haute qualité avec le Dr. Sauer. Experte en chirurgie maxillo-faciale et pédodontie, le Dr. Sauer propose des traitements avancés pour les enfants et les adultes dans un environnement rassurant et chaleureux.', '1718097172.webp'),
(4, 30, 'f', '3', 'Obtenez des soins dentaires de qualité supérieure avec le Dr. Anderson, spécialiste reconnue en chirurgie dentaire et endodontie. Nous nous engageons à offrir des traitements précis et efficaces pour préserver et améliorer votre santé bucco-dentaire.', '1718097328.webp'),
(5, 31, 'h', '3', 'Pour des soins dentaires de qualité supérieure adaptés à toute la famille, faites confiance au Dr. Langworth. Expert en chirurgie dentaire et pédodontie, le Dr. Durand propose des traitements personnalisés pour les enfants et les adultes dans un environnement chaleureux et professionnel.', '1718097599.webp'),
(6, 32, 'f', '0', 'Pour des soins dentaires avancés et un sourire éclatant, faites confiance au Dr. Hermann. Experte en chirurgie maxillo-faciale et orthodontie, le Dr. Hermann propose des traitements personnalisés pour répondre aux besoins des patients de tous âges dans un environnement accueillant et professionnel.', '1718097783.webp');

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
(11, 1, 1),
(12, 3, 1);

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
(19, '2024_05_31_170214_create_personal_access_tokens_table', 1);

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
(1, 33, '4479 Schowalter Spur\nMasonfort, VA 44355', '1996-10-26', 'f', 'King had said that day. \'That PROVES his guilt,\' said the voice. \'Fetch me my gloves this moment!\' Then came a little bottle that stood near. The three soldiers wandered about in all directions.', 'Billie Jacobi', '319-865-1569'),
(2, 34, '136 Crona Landing\nDeangeloside, WV 52212-2327', '2001-07-03', 'f', 'Forty-two. ALL PERSONS MORE THAN A MILE HIGH TO LEAVE THE COURT.\' Everybody looked at her, and she heard her sentence three of her age knew the right way of keeping up the chimney, has he?\' said.', 'Chadrick Wuckert', '1-908-289-9775'),
(3, 35, '58002 Kiana Port Apt. 521\nNorth Jimmie, WY 31384-1493', '1998-10-29', 'f', 'And he got up this morning? I almost think I may as well go back, and see that she remained the same when I got up this morning, but I hadn\'t gone down that rabbit-hole--and yet--and yet--it\'s.', 'Bert Jenkins', '+1.443.659.4315'),
(4, 36, '802 Macey Glens Apt. 591\nEvangelineberg, MD 38019', '1998-11-12', 'f', 'White Rabbit cried out, \'Silence in the act of crawling away: besides all this, there was room for this, and she jumped up and to stand on your head-- Do you think you might like to try the patience.', 'Catalina Hyatt', '(864) 882-4110'),
(5, 37, '43322 Brekke Lane\nWest Maybellebury, KY 21002', '1998-08-06', 'h', 'Either the well was very provoking to find that her idea of the Lizard\'s slate-pencil, and the blades of grass, but she felt that it might happen any minute, \'and then,\' thought she, \'what would.', 'Gay Champlin', '760.829.7904'),
(6, 38, '916 Conn Ferry\nOlsonfort, IA 44726-5068', '2001-04-07', 'h', 'There seemed to be done, I wonder?\' Alice guessed who it was, and, as the soldiers did. After these came the guests, mostly Kings and Queens, and among them Alice recognised the White Rabbit, with a.', 'Danika Hudson', '(580) 788-6576'),
(7, 39, '6778 Katarina Streets Suite 020\nZackarymouth, IL 35344-2451', '1997-12-05', 'f', 'Duchess said to herself, \'it would have called him a fish)--and rapped loudly at the Duchess by this time, as it spoke (it was Bill, I fancy--Who\'s to go after that into a tree. \'Did you say pig, or.', 'Lila Howe', '1-580-379-3188'),
(8, 40, '937 Samara Road Suite 989\nSouth Ozellaview, NE 27389', '2004-06-23', 'h', 'The jury all looked puzzled.) \'He must have got altered.\' \'It is wrong from beginning to end,\' said the Gryphon, and the Panther were sharing a pie--\' [later editions continued as follows When the.', 'Xander Upton', '1-608-720-9309'),
(9, 41, '278 Schneider Fords Apt. 130\nPort Muriel, IL 15370', '1996-09-24', 'h', 'I hadn\'t drunk quite so much!\' Alas! it was just possible it had fallen into a tree. \'Did you speak?\' \'Not I!\' said the Cat; and this time it all is! I\'ll try and repeat something now. Tell her to.', 'Adolphus Williamson', '475.278.4489'),
(10, 42, '947 Schuster Garden\nEffieport, ME 02961', '2001-11-25', 'h', 'Queen, \'and take this young lady to see it written down: but I grow at a reasonable pace,\' said the Mock Turtle, \'Drive on, old fellow! Don\'t be all day to day.\' This was quite a chorus of \'There.', 'Janessa Hill', '+1.551.435.2793'),
(11, 43, '267 Jamil Parks Suite 367\nLake Elva, ME 61435-0472', '2000-03-25', 'h', 'It quite makes my forehead ache!\' Alice watched the Queen was silent. The King looked anxiously at the mushroom for a great hurry. \'You did!\' said the Caterpillar. \'Is that all?\' said the Duchess.', 'Keely Durgan', '+1.712.336.2240'),
(12, 44, '159 Mertz Ports Apt. 696\nFlatleystad, SD 80168-1479', '1995-12-05', 'h', 'I can\'t put it more clearly,\' Alice replied very readily: \'but that\'s because it stays the same thing as \"I eat what I used to come yet, please your Majesty,\' said Alice indignantly. \'Let me alone!\'.', 'Andre Howe', '+1-615-454-0967'),
(13, 45, '4379 Wilderman Plains Apt. 951\nNorth Andreannehaven, NH 38975', '1997-01-14', 'f', 'Alice the moment she appeared; but she could do to come down the hall. After a minute or two, they began solemnly dancing round and swam slowly back to the Knave of Hearts, he stole those tarts, And.', 'Wilford Gutmann', '+1-425-221-8793'),
(14, 46, '5961 Mack Motorway\nMoshestad, GA 94842-4902', '2003-04-30', 'h', 'Alice thoughtfully: \'but then--I shouldn\'t be hungry for it, while the Mouse in the air, I\'m afraid, sir\' said Alice, feeling very curious sensation, which puzzled her very much of a feather flock.', 'Pete O\'Conner', '928.897.7072'),
(15, 47, '24581 Leila Forks\nEast Dawn, VT 64235', '2000-02-24', 'f', 'Shark, But, when the tide rises and sharks are around, His voice has a timid voice at her side. She was close behind us, and he\'s treading on her spectacles, and began picking them up again with a.', 'Laury Willms', '+1-773-924-7406'),
(16, 48, 'Rue  de L\'urbanisme 32', NULL, NULL, 'Allergie au pénicilline', 'Tomas Harry', '333666'),
(17, 50, 'Av. de la Liberté 30', '2003-06-12', 'M', 'Aucune problème de santé', 'Ella Emma', '333666'),
(18, 51, NULL, NULL, NULL, NULL, NULL, NULL),
(19, 52, NULL, NULL, NULL, NULL, NULL, NULL),
(20, 53, 'Wurlitzergasse 8/30, PLZ/Wohnort: 1160/Wien', '2013-02-02', 'M', 'Allergie au pénicilline', 'Noa Sull', '9898'),
(21, 54, NULL, NULL, NULL, NULL, NULL, NULL);

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
(1, 2, 1, 123.60, 'completed', 'ch_a3pWwHPdwSNme4UVCxv6exRR', '2024-06-11 06:39:58', '2024-06-11 06:39:58'),
(2, 1, 2, 180.00, 'completed', 'ch_TIBDfzsnujGivnEGVZfy1lAO', '2024-06-11 06:39:58', '2024-06-11 06:39:58'),
(3, 8, 3, 258.50, 'completed', 'ch_2O0heGU8mWyZM5I2wTTursrg', '2024-06-11 06:39:58', '2024-06-11 06:39:58'),
(4, 5, 4, 140.80, 'completed', 'ch_kUjmpDBk8ljzoIHd1GkcUOfp', '2024-06-11 06:39:58', '2024-06-11 06:39:58'),
(5, 11, 5, 320.00, 'completed', 'ch_nVe3myxQQ8dX23PZ2Ek386I1', '2024-06-11 06:39:58', '2024-06-11 06:39:58'),
(6, 3, 6, 135.00, 'completed', 'ch_7dRYNIeMZJzRWHbQN3PUBJNx', '2024-06-11 06:39:58', '2024-06-11 06:39:58'),
(7, 4, 7, 150.00, 'completed', 'pi_3PQQMTP2C9BxUoL51yBSAOPT', '2024-06-11 06:45:19', '2024-06-11 06:47:30'),
(8, 16, 16, 75.00, 'completed', 'pi_3PQRFiP2C9BxUoL50ME3bsD1', '2024-06-11 07:43:12', '2024-06-11 07:44:34'),
(9, 16, 20, 85.00, 'completed', 'pi_3PQRgaP2C9BxUoL50F6SCOW9', '2024-06-11 08:11:03', '2024-06-11 08:12:20'),
(10, 4, 17, 95.00, 'completed', 'pi_3PRdRtP2C9BxUoL50pOzuZXN', '2024-06-14 14:55:40', '2024-06-14 14:58:09'),
(11, 16, 18, 105.00, 'completed', 'pi_3PRee2P2C9BxUoL51IwfE4IL', '2024-06-14 16:11:55', '2024-06-14 16:14:47'),
(12, 16, 23, 150.00, 'completed', 'pi_3PRexxP2C9BxUoL51f8xhgG9', '2024-06-14 16:31:44', '2024-06-14 16:35:21'),
(13, 16, 24, 200.00, 'completed', 'pi_3PRfXiP2C9BxUoL51eZ41UeQ', '2024-06-14 17:09:17', '2024-06-14 17:12:18'),
(14, 17, 26, 99.00, 'completed', 'pi_3PSFB5P2C9BxUoL51v76ZuaU', '2024-06-16 07:13:01', '2024-06-16 07:15:14'),
(15, 17, 27, 85.00, 'completed', 'pi_3PSFFrP2C9BxUoL51zhTFQbB', '2024-06-16 07:18:55', '2024-06-16 07:20:11'),
(16, 17, 28, 87.00, 'completed', 'pi_3PSFryP2C9BxUoL50pGz5CDZ', '2024-06-16 07:58:12', '2024-06-16 07:59:33'),
(17, 16, 31, 49.00, 'completed', 'pi_3PSGAtP2C9BxUoL50L2Uagzz', '2024-06-16 08:15:31', '2024-06-16 08:19:07'),
(18, 16, 32, 65.00, 'completed', 'pi_3PSGG1P2C9BxUoL50vQOCORm', '2024-06-16 08:22:59', '2024-06-16 08:24:25'),
(19, 17, 33, 10.00, 'completed', 'pi_3PSGYeP2C9BxUoL51rklsHji', '2024-06-16 08:42:13', '2024-06-16 08:43:40'),
(20, 17, 34, 100.00, 'completed', 'pi_3PSGhRP2C9BxUoL51eHstumk', '2024-06-16 08:50:38', '2024-06-16 08:52:45'),
(21, 17, 35, 56.00, 'completed', 'pi_3PSGwkP2C9BxUoL50SaYUPab', '2024-06-16 09:00:40', '2024-06-16 09:08:33'),
(22, 17, 36, 53.00, 'completed', 'pi_3PSH3WP2C9BxUoL505vi6zjS', '2024-06-16 09:14:13', '2024-06-16 09:15:34'),
(23, 17, 30, 125.00, 'completed', 'pi_3PSHG5P2C9BxUoL51cZvEl4i', '2024-06-16 09:26:38', '2024-06-16 09:28:33'),
(24, 17, 43, 222.00, 'completed', 'pi_3PSKKSP2C9BxUoL51k6Mr1q9', '2024-06-16 12:43:46', '2024-06-16 12:45:17'),
(25, 17, 44, 65.00, 'completed', 'pi_3PSKX6P2C9BxUoL50DlfMHGg', '2024-06-16 12:57:11', '2024-06-16 12:58:21'),
(26, 17, 47, 59.00, 'completed', 'pi_3PSNnUP2C9BxUoL51niuD0Sf', '2024-06-16 16:25:07', '2024-06-16 16:27:29'),
(27, 17, 49, 49.00, 'completed', 'pi_3PSNvmP2C9BxUoL50lFrKYX1', '2024-06-16 16:34:06', '2024-06-16 16:36:03'),
(28, 16, 42, 135.00, 'completed', 'pi_3PSOjSP2C9BxUoL50dBSLyKe', '2024-06-16 17:24:49', '2024-06-16 17:27:23'),
(29, 16, 15, 98.00, 'completed', 'pi_3PSbHHP2C9BxUoL50unsrmJe', '2024-06-17 06:49:42', '2024-06-17 06:51:09'),
(30, 17, 52, 65.00, 'completed', 'pi_3PSfjKP2C9BxUoL50gAhWxxI', '2024-06-17 11:17:19', '2024-06-17 11:36:24'),
(31, 16, 37, 75.00, 'pending', NULL, '2024-06-17 11:46:57', '2024-06-17 11:46:57'),
(32, 17, 53, 55.00, 'completed', 'pi_3PSxHqP2C9BxUoL50yTApz3U', '2024-06-18 06:19:10', '2024-06-18 06:21:10'),
(33, 17, 54, 50.00, 'pending', NULL, '2024-06-18 09:49:41', '2024-06-18 09:49:41'),
(34, 17, 63, 51.00, 'pending', NULL, '2024-06-19 15:14:32', '2024-06-19 15:14:32'),
(35, 17, 64, 125.00, 'pending', NULL, '2024-06-19 15:18:11', '2024-06-19 15:18:11'),
(36, 17, 65, 65.00, 'pending', NULL, '2024-06-19 15:18:26', '2024-06-19 15:18:26'),
(37, 17, 66, 75.00, 'pending', NULL, '2024-06-19 15:21:04', '2024-06-19 15:21:04'),
(38, 17, 68, 500.00, 'completed', 'pi_3PUbTMP2C9BxUoL50XZH8zae', '2024-06-22 19:26:17', '2024-06-22 19:27:58'),
(39, 16, 69, 125.00, 'pending', NULL, '2024-06-24 18:01:32', '2024-06-24 18:01:32'),
(40, 16, 70, 125.00, 'completed', 'pi_3PVULPP2C9BxUoL51JJ7WNDl', '2024-06-25 06:01:56', '2024-06-25 06:03:20'),
(41, 16, 71, 222.00, 'completed', 'pi_3PVUgdP2C9BxUoL51O7SAmNN', '2024-06-25 06:23:51', '2024-06-25 06:25:16');

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
(1, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', '359344a9f18a0c60dd79c83f18d6c381f0440f2efe7f997466302fbb845963ac', '[\"*\"]', '2024-06-11 07:28:29', NULL, '2024-06-11 07:26:36', '2024-06-11 07:28:29'),
(2, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', '792c4809c68c4e957bf3fbe92493cccd5083d6d3e2b8ec85866a689085ef44d0', '[\"*\"]', NULL, NULL, '2024-06-13 03:48:54', '2024-06-13 03:48:54'),
(3, 'App\\Models\\User', 21, 'API_TOKEN_PERSONNAL_CHIEF', 'e93d14bbf66f1ad22fed5e04f47a41608c7293290b465f2e0fe6089b9e25fa2a', '[\"*\"]', '2024-06-13 03:52:28', NULL, '2024-06-13 03:50:59', '2024-06-13 03:52:28');

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
(5, 26, 'f'),
(6, 49, 'F');

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
('3qt1WACxCgPUXc9OCfcBhvXtZNbZsm5cNGGayMWW', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiOEdHUHNRSG9xY0hxbUlKM2RuWFdFWUtlVkJmWnZ0a3pTd3lucEQ2RyI7czo1OiJlcnJvciI7czoyMDoiRG9jdGV1ciBub24gdHJvdXbDqS4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToxOntpOjA7czo1OiJlcnJvciI7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL21lZGVjaW4vc2l0ZS53ZWJtYW5pZmVzdCI7fX0=', 1719302176),
('CozcVtCkc6MUfIZrcuDCuwoXjbguJMM4qicCwnsF', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiTFkweTY5TDk0c1g3c3FEODN0bDVPRXFMTXlvMHVmMWVSenV3WHk3SiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719302177),
('d2CN4TLl1k9AFxjBadsTASApVN5SgOauLGasuXok', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiakxtendDSjdCblNHcXZTcFVTQW1kQ2lkdlplRWtaek84b1lKTVBtQyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719303560),
('dPisxhN5pTsCTRFyJBMsLcGvcNzDR5tf4z0TVwYH', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWVZieFJoT3VaQlV6TmpCT0xqVVhHWE1ERXZYekFEYU5ROWw0OGdVZSI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2RvY3RvciI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZG9jdG9yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719302264),
('HNJ89IM43eQ8TgUgioBOryH658uWAc7CHIEVhhK1', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWkNtcHhyUGZ0SmlqTFVidHVMdUNtM0tYeG9tZ1YwZG9PMHVVYjlWYiI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2RvY3RvciI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZG9jdG9yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719302177),
('idwzFrSxWAVRTVP6OckbuWq3W841SoqtssUsN4Kp', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUFBUWmNDUHRxV3R0cmtHYzhjM2FTUmNhbmVSNnRnekxOVlBHbVhWNiI7czo1OiJlcnJvciI7czoyMDoiRG9jdGV1ciBub24gdHJvdXbDqS4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToxOntpOjA7czo1OiJlcnJvciI7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL21lZGVjaW4vc2l0ZS53ZWJtYW5pZmVzdCI7fX0=', 1719303559),
('ljyWeFOY44kRsYVFYVFGo45TwTlTsNvKW3wXvDIm', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoib21LVFdUWE15QVpQRVVYVHJSZkVOREp1NUxVdU1hUUU3Z1dwWlFxbCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719303483),
('NyKrba7qX7RnELfp1vhlB8iREWthrM58qHzue4tU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQnFUeHNWcHh1cnVhNDFYb3NOZEE4T3hBSVBvVndFclpqSWV2bnA1SSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9sb2dpbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1719302264),
('OAYOHZncXAnLvQnW15JPlZPm2nsXTElmxI0IFLxy', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiMjU4TEVONlVpb0Q0S3QyNlFDYkNaOVg5SDZTN3J5cFhyU3VkNFNuViI7czo1OiJlcnJvciI7czoyMDoiRG9jdGV1ciBub24gdHJvdXbDqS4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToxOntpOjA7czo1OiJlcnJvciI7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL21lZGVjaW4vc2l0ZS53ZWJtYW5pZmVzdCI7fX0=', 1719302263),
('rDqjDNkroZhTygnF3WGzqFzgmVg1Gde1CbO8PzjP', 21, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUWVab2FEbUtZdWVScjlyWkJsNEhCaTBWbVIzbU5WQWc0djVXYmlvbCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzg6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9zZWNyZXRhcnkvY3JlYXRlIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjE7fQ==', 1719304089),
('XamjFRjW5opR5VGM5vncp2jZrIepsRZwADL1hArV', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiWDg2MmdFUGtQTG1OSTRRU3NnQ0dCbE5DMFo0dlZ0RGlma2MyQmwxciI7czo1OiJlcnJvciI7czoyMDoiRG9jdGV1ciBub24gdHJvdXbDqS4iO3M6NjoiX2ZsYXNoIjthOjI6e3M6MzoibmV3IjthOjA6e31zOjM6Im9sZCI7YToxOntpOjA7czo1OiJlcnJvciI7fX1zOjk6Il9wcmV2aW91cyI7YToxOntzOjM6InVybCI7czo0NjoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL21lZGVjaW4vc2l0ZS53ZWJtYW5pZmVzdCI7fX0=', 1719303481),
('xP3dR62EmmlFfIVqpLwUGglMTck8OxcoXZz1ylvs', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiSU41bzRvclE4djdjNTZhUkFmVTZoTThmYzkwN1drTzNiWmN1cWJlayI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2RvY3RvciI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZG9jdG9yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719303559),
('Z3rWiIEa0bPuJL5JkVrkwb5fi3YycdTMINriKbCo', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiS0U2REZWcWNyelBmSkMwUTNINDlHQUZiTUkyTWZCdTdZZWRCb3B5SCI7czozOiJ1cmwiO2E6MTp7czo4OiJpbnRlbmRlZCI7czoyODoiaHR0cDovL2xvY2FsaG9zdDo4MDAwL2RvY3RvciI7fXM6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjI4OiJodHRwOi8vbG9jYWxob3N0OjgwMDAvZG9jdG9yIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1719303482);

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
(1, 'Freddie', 'lloyd.bergnaum@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'zo7YAALlqx3bYXuDny85y6PzTAQA5iwbmQPM6lO7wIalKRkMFi753ElPmwMO', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Batz', 'id', '(843) 542-0310', 4),
(2, 'Keara', 'qmedhurst@example.net', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'QR5UZiwPud', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Raynor', 'su', '239-813-3917', 4),
(3, 'Beau', 'alayna.maggio@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'VssDmII3dj', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Balistreri', 'bm', '+1 (831) 965-3168', 4),
(4, 'Lindsay', 'vhoeger@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', '0rLe1Zq4LL', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Considine', 'is', '+1-254-995-6995', 4),
(5, 'Bud', 'stokes.lessie@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'DIEDkiK55w', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Pouros', 'ce', '+1-814-828-3206', 4),
(6, 'Charity', 'greenfelder.ila@example.net', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', '8u1ZAPcSoP', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Prosacco', 'ka', '+1-432-644-9601', 4),
(7, 'Baylee', 'kaitlyn.harris@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'BydtwcGxYN', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Gleichner', 'sv', '1-661-642-3722', 4),
(8, 'Carolanne', 'heath.koss@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'H7OwzssgbB', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Wintheiser', 'yo', '551-674-9388', 4),
(9, 'Arne', 'jacynthe.ruecker@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'ATmdfs1dqe', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Strosin', 'af', '+1.360.694.6397', 4),
(10, 'Janelle', 'paucek.leann@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'UWDWusXVjF', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Davis', 'fo', '380-267-7808', 4),
(11, 'Filomena', 'jamil81@example.net', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'ZsbNKUwgLj', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'McDermott', 'ml', '+1-443-850-4945', 4),
(12, 'Tabitha', 'shanel.hegmann@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'hOGcOCKj01', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Zboncak', 'ti', '(732) 259-5139', 4),
(13, 'Alexie', 'seamus59@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'ey8TlkQJ48', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Klocko', 'gn', '(754) 622-0431', 4),
(14, 'Lavern', 'josefa63@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', '5GPqaJOSjt', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Spinka', 'ay', '(743) 308-0566', 4),
(15, 'Myra', 'name.dibbert@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'Gr2xRtWQvg', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Huels', 'am', '+1-445-714-7645', 4),
(16, 'Rae', 'abbott.rupert@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'DB7S8zyttn', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Zieme', 'ko', '754.897.5277', 4),
(17, 'Clarissa', 'telly73@example.net', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'PyR0QwguIE', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Roob', 'sv', '234-749-4844', 4),
(18, 'Jesus', 'zachariah97@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'PkxDAecraU', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Herman', 'ia', '240.661.8818', 4),
(19, 'Mollie', 'littel.carissa@example.org', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'Ig5qEQfj4u', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Williamson', 'be', '+1.828.570.6759', 4),
(20, 'Sylvia', 'oheathcote@example.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'E0lKqK77Vy', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Hand', 'ha', '1-231-675-3904', 4),
(21, 'Roberta', 'chief@mail.com', '2024-06-11 06:39:56', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'ayFhvGRHyEecJscwlCiYJNLygyBwU6oFpjWMyiWQbb0Spu0H0Y4K3qsmbw9v', '2024-06-11 06:39:56', '2024-06-11 06:39:56', 'Hackett', 'ln', '425-470-7072', 1),
(22, 'Kip', 'satterfield.mariano@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'qty5tA9MI7', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Schulist', 'uk', '1-812-234-7227', 3),
(23, 'Jonathon', 'justus.bradtke@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'OGHRl249JZ', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Marvin', 'ka', '+1 (580) 642-9502', 3),
(24, 'Wilson', 'julie15@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'sbGbLH8r6e', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Anderson', 'na', '1-336-870-9094', 3),
(25, 'Eldora', 'maltenwerth@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'NYUe162Qxd', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Ortiz', 'kk', '1-229-960-4520', 3),
(26, 'Shanon', 'jjette@hotmail.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'bW9dOVqRJZszOJ0Sm06d15Vob05w8sNzoiKclbnEJOjKLraNwIVcIlibJ1jo', '2024-06-11 06:39:57', '2024-06-11 06:56:30', 'Gleason', 'sa', '987-654', 3),
(27, 'Ericka', 'andreanne.oberbrunner@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'wSY2uSNNzwGtqUrhWW83LmXlFjY0bEjpcKgOqDZAO5QY4wglpWPhdkvpKMxv', '2024-06-11 06:39:57', '2024-06-22 19:19:37', 'Dickens', 'hr', '+326589', 2),
(28, 'Nadia', 'giovani.crooks@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', '79P0Gc6VdHz2gmheSwO2LmN0U7rErTfPxrhc1m0WzWDg8ntfiFOKsgh1yrev', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Auer', 'nn', '+1-520-468-0576', 2),
(29, 'Mathilde', 'gleason.isobel@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'Aq6tkZjKGNc5UO764b5jiUbminmqQOOvjmvm87ksz2NlOFNOjujrJaLQBmWC', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Sauer', 'sa', '757-686-2679', 2),
(30, 'Sim', 'kkuhn@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'N6Yhq33sMu', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Anderson', 'mi', '+19598604199', 2),
(31, 'Arvilla', 'rogelio48@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', '7kCYrDvQWb', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Langworth', 'ko', '458.740.0804', 2),
(32, 'Ana', 'alejandrin.oconner@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'SHnBC6IbDh', '2024-06-11 06:39:57', '2024-06-24 17:55:32', 'Hermann', 'tr', '8956', 2),
(33, 'Rubie', 'walker.rosemarie@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'k14bjn3OTd', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Pagac', 've', '+1-847-584-7992', 4),
(34, 'Lessie', 'eunice27@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', '9X5Hjinbk1', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Kuvalis', 'da', '539.316.6227', 4),
(35, 'Augustus', 'elenor.konopelski@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'ZrA333WkhB', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Conn', 'tk', '518.873.7511', 4),
(36, 'Albina', 'ashlee07@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'eCMjN67VtgUiiTxcx4X8GIRudKhVGdyo31hNNhm5ELcV9f73qqRDM1uS63xf', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Rippin', 'lg', '743.755.2556', 4),
(37, 'Lexus', 'renee.simonis@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'mlXC1QsN6t', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Lakin', 'kr', '843-695-9781', 4),
(38, 'Kavon', 'rempel.claudie@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'eGzzfP8Tk6', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Ebert', 'dv', '(858) 512-1984', 4),
(39, 'Lowell', 'dalton82@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'BFSmsprApD', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Johnson', 'en', '564-456-2551', 4),
(40, 'Lucious', 'doyle.tanner@example.net', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'yBs2bZbGME', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Ferry', 'be', '1-251-952-5980', 4),
(41, 'Hermina', 'uosinski@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'c61k071isw', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Volkman', 'st', '1-786-697-9969', 4),
(42, 'Joy', 'skreiger@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'fGlkxtefVS', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Breitenberg', 'vo', '478-317-1021', 4),
(43, 'Thelma', 'wilkinson.abe@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'WtimbTS6Fx', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Effertz', 'ro', '(432) 404-6613', 4),
(44, 'Bo', 'shania.simonis@example.org', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'CVcXCIrdT5', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Franecki', 'lb', '+1.458.599.5615', 4),
(45, 'Melany', 'apaucek@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'VzERgKGEWk', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Gutmann', 'ca', '+1.954.654.6089', 4),
(46, 'Michelle', 'natasha.hilpert@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'iFO8QZgqK6', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Rutherford', 'kn', '260.932.4016', 4),
(47, 'Larry', 'ben.konopelski@example.com', '2024-06-11 06:39:57', '$2y$12$FgpgQiyHDUAnsG3RIfBYl.8oueKc4zMGVNgORFKp/F.vkP6fH1c32', 'vFrewpXSCp', '2024-06-11 06:39:57', '2024-06-11 06:39:57', 'Metz', 'ha', '239-343-0126', 4),
(48, 'Maxime', 'maxime@gmail.com', NULL, '$2y$12$8/nq499tolrUNqSTA0BoC.6r.0zgGWKEC4utxJU0s8qTb2J8trp8S', NULL, '2024-06-11 06:41:58', '2024-06-11 06:50:58', 'Santos', 'fr', '222111', 4),
(49, 'Nataly', 'nataly@gmail.ru', NULL, '$2y$12$BIQkCB6K479yljeIfe8i8.esB2lDuhKjIfzlNtaScv1FADVvZufha', NULL, '2024-06-11 06:57:06', '2024-06-11 06:57:06', 'Fisher', 'FR', '555333', 3),
(50, 'Ludovic', 'ludovic@gmail.com', NULL, '$2y$12$eWb7277/W61OaV3Ow6Wjy.xCQwuXIgiLCguyQWze9IxYSZtYqR/Su', NULL, '2024-06-11 08:44:16', '2024-06-11 08:44:16', 'Smit', 'FR', '555666', 4),
(51, 'Fred', 'fred@gmail.com', NULL, '$2y$12$OwecXYQFBFCI4G/LNJbwI.BuCyULgELWBQ4pveNy1M35Jkrdi8QfK', NULL, '2024-06-17 08:15:31', '2024-06-17 08:15:31', 'Veter', 'fr', NULL, 4),
(52, 'Roxane', 'rox@gmail.com', NULL, '$2y$12$tQpOSE2ltQ5N//9sWwEnMul571tlnlnrYT8ZTzJSrBRtNQBoxLmdS', NULL, '2024-06-22 19:15:58', '2024-06-22 19:15:58', 'Canchi', 'fr', NULL, 4),
(53, 'Bob', 'bob@sull.com', NULL, '$2y$12$gFqpYxNDv.rAXispNNHI5OkpKc1/Ahlptx7IbVIzLpO4PaqQ20DWW', NULL, '2024-06-24 16:27:08', '2024-06-24 16:27:08', 'Sull', 'fr', '5689', 4),
(54, 'Killian', 'killian@gmail.com', NULL, '$2y$12$H.sBHk15hBkDgRz/2KamVeamq6OEDXMgHxokZox3y8ubW/.TsCQUy', NULL, '2024-06-24 16:29:44', '2024-06-24 16:29:44', 'Merlin', 'fr', NULL, 4);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT pour la table `availabilities`
--
ALTER TABLE `availabilities`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT pour la table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `secretaries`
--
ALTER TABLE `secretaries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `specialties`
--
ALTER TABLE `specialties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

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
