-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Sam 18 Mars 2017 à 05:13
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `projets6`
--

-- --------------------------------------------------------

--
-- Structure de la table `abonnement`
--

DROP TABLE IF EXISTS `abonnement`;
CREATE TABLE `abonnement` (
  `id` int(11) NOT NULL,
  `bouquet_id` int(11) NOT NULL,
  `entreprise_id` int(11) NOT NULL,
  `dureeAbo` int(11) NOT NULL,
  `dateDebut` datetime NOT NULL,
  `dateFin` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `abonnement`
--

INSERT INTO `abonnement` (`id`, `bouquet_id`, `entreprise_id`, `dureeAbo`, `dateDebut`, `dateFin`) VALUES
(1, 1, 1, 8, '2017-03-17 00:00:00', '2017-11-17 00:00:00'),
(2, 2, 1, 18, '2017-03-17 00:00:00', '2018-09-17 00:00:00'),
(3, 3, 1, 3, '2017-03-17 00:00:00', '2017-06-17 00:00:00'),
(4, 4, 1, 15, '2017-03-17 00:00:00', '2018-06-17 00:00:00'),
(5, 6, 1, 7, '2017-03-17 00:00:00', '2017-10-17 00:00:00'),
(6, 5, 2, 2, '2017-03-17 00:00:00', '2017-05-17 00:00:00'),
(7, 7, 2, 4, '2017-03-17 00:00:00', '2017-07-17 00:00:00'),
(8, 6, 3, 5, '2017-03-17 00:00:00', '2017-08-17 00:00:00'),
(9, 8, 3, 9, '2017-03-17 00:00:00', '2017-12-17 00:00:00'),
(10, 10, 4, 8, '2017-03-17 00:00:00', '2017-11-17 00:00:00'),
(11, 2, 5, 7, '2017-03-17 00:00:00', '2017-10-17 00:00:00'),
(12, 4, 5, 6, '2017-03-17 00:00:00', '2017-09-17 00:00:00');

-- --------------------------------------------------------

--
-- Structure de la table `adresse`
--

DROP TABLE IF EXISTS `adresse`;
CREATE TABLE `adresse` (
  `id` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `rue` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ville` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `codePostal` int(11) NOT NULL,
  `numAppart` int(11) DEFAULT NULL,
  `etage` int(11) DEFAULT NULL,
  `complements` longtext COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `adresse`
--

INSERT INTO `adresse` (`id`, `num`, `rue`, `ville`, `codePostal`, `numAppart`, `etage`, `complements`) VALUES
(1, 645, 'avenue de Joubert', 'Henry', 21200, NULL, NULL, NULL),
(2, 344, 'place de Leveque', 'Guilbert', 86500, NULL, NULL, NULL),
(3, 302, 'boulevard de Aubry', 'Weiss-sur-Aubert', 85800, NULL, NULL, NULL),
(4, 28, 'boulevard de Marin', 'Colletboeuf', 92200, NULL, NULL, NULL),
(5, 254, 'place de Ferrand', 'Payetboeuf', 70100, NULL, NULL, NULL),
(6, 678, 'rue Jeannine Ramos', 'Hardy', 39700, NULL, NULL, NULL),
(7, 719, 'place Pereira', 'Mercier', 53500, NULL, NULL, NULL),
(8, 264, 'rue Maury', 'Paul', 78900, NULL, NULL, NULL),
(9, 417, 'boulevard de Maury', 'Dijoux', 68300, NULL, NULL, NULL),
(10, 254, 'rue Gallet', 'Bazin', 30400, NULL, NULL, NULL),
(11, 567, 'rue Lefebvre', 'Dos Santosdan', 5800, NULL, NULL, NULL),
(12, 617, 'boulevard de Schneider', 'Dijoux', 44200, NULL, NULL, NULL),
(13, 886, 'chemin de Vallet', 'Riou-la-Forêt', 86400, NULL, NULL, NULL),
(14, 822, 'place de Nguyen', 'Lebonboeuf', 35000, NULL, NULL, NULL),
(15, 594, 'boulevard Gérard Marchand', 'Rodriguez-sur-Mer', 13200, NULL, NULL, NULL),
(16, 838, 'avenue de David', 'Leblanc', 58800, NULL, NULL, NULL),
(17, 409, 'place Tanguy', 'Vallee', 6700, NULL, NULL, NULL),
(18, 132, 'chemin Léon Rey', 'RocherBourg', 30200, NULL, NULL, NULL),
(19, 551, 'chemin Schneider', 'Marquesboeuf', 52300, NULL, NULL, NULL),
(20, 675, 'chemin de Clerc', 'Barthelemy-sur-Gaudin', 5000, NULL, NULL, NULL),
(21, 737, 'avenue de Guillet', 'Gilles-sur-Vidal', 88000, NULL, NULL, NULL),
(22, 935, 'boulevard de Fabre', 'LecomteVille', 86300, NULL, NULL, NULL),
(23, 187, 'chemin Mahe', 'OllivierVille', 5300, NULL, NULL, NULL),
(24, 880, 'boulevard de Faure', 'Hamondan', 47500, NULL, NULL, NULL),
(25, 620, 'chemin Dumont', 'JacobBourg', 24500, NULL, NULL, NULL),
(26, 980, 'impasse Dufour', 'WeissBourg', 85800, NULL, NULL, NULL),
(27, 253, 'impasse Joséphine Weber', 'Louisnec', 36900, NULL, NULL, NULL),
(28, 202, 'impasse Eugène Pottier', 'David', 68700, NULL, NULL, NULL),
(29, 807, 'boulevard de Rey', 'Coulon', 74900, NULL, NULL, NULL),
(30, 17, 'rue Grondin', 'Clement', 5200, NULL, NULL, NULL),
(31, 499, 'rue Pierre', 'Da Silva-la-Forêt', 29700, NULL, NULL, NULL),
(32, 391, 'impasse Foucher', 'Charriernec', 45100, NULL, NULL, NULL),
(33, 49, 'boulevard Raymond', 'Leroy-sur-Mer', 27600, NULL, NULL, NULL),
(34, 796, 'chemin Virginie Guillou', 'Lagarde', 9100, NULL, NULL, NULL),
(35, 675, 'rue Julien Denis', 'Mary-sur-Teixeira', 54000, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `bouquet`
--

DROP TABLE IF EXISTS `bouquet`;
CREATE TABLE `bouquet` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tarif` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `bouquet`
--

INSERT INTO `bouquet` (`id`, `libelle`, `tarif`) VALUES
(1, 'Basique Livraison', 40),
(2, 'Basique Coiffure', 90),
(3, 'Basique Soins du corps', 130),
(4, 'Basique Aide à domicile', 180),
(5, 'Basique Entretien Maison', 250),
(6, 'Basique Gardiennage', 300),
(7, 'Détente', 120),
(8, 'Confort', 230),
(9, 'Premium', 390),
(10, 'All In', 670);

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

DROP TABLE IF EXISTS `commande`;
CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `etat_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `salarie_id` int(11) NOT NULL,
  `date` datetime NOT NULL,
  `complements` longtext COLLATE utf8_unicode_ci,
  `payed` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `commande`
--

INSERT INTO `commande` (`id`, `etat_id`, `service_id`, `salarie_id`, `date`, `complements`, `payed`) VALUES
(1, 1, 28, 7, '2017-04-02 10:18:14', NULL, 0),
(2, 3, 30, 5, '2017-03-27 04:52:20', NULL, 1),
(3, 4, 26, 10, '2017-04-03 23:57:37', NULL, 1),
(4, 3, 12, 16, '2017-03-30 21:02:04', NULL, 1),
(5, 5, 21, 4, '2017-04-02 12:32:34', NULL, 1),
(6, 1, 14, 6, '2017-03-31 12:07:00', NULL, 0),
(7, 5, 2, 3, '2017-04-01 20:42:59', NULL, 1),
(8, 4, 23, 6, '2017-04-02 21:53:33', NULL, 1),
(9, 3, 29, 5, '2017-03-29 07:21:01', NULL, 1),
(10, 1, 19, 10, '2017-04-02 10:10:14', NULL, 0),
(11, 3, 4, 12, '2017-03-31 11:10:42', NULL, 1),
(12, 3, 15, 13, '2017-04-02 11:56:52', NULL, 1),
(13, 4, 9, 20, '2017-03-27 19:22:49', NULL, 1),
(14, 3, 6, 1, '2017-03-30 19:22:26', NULL, 1),
(15, 5, 13, 1, '2017-04-03 02:26:40', NULL, 1),
(16, 3, 4, 13, '2017-03-30 11:33:43', NULL, 1),
(17, 4, 27, 10, '2017-03-30 15:35:45', NULL, 1),
(18, 2, 16, 11, '2017-03-31 06:34:40', NULL, 0),
(19, 1, 27, 7, '2017-03-29 12:04:44', NULL, 0),
(20, 4, 21, 17, '2017-04-03 08:10:27', NULL, 1),
(21, 2, 13, 5, '2017-03-30 09:00:44', NULL, 0),
(22, 5, 10, 4, '2017-04-01 07:47:00', NULL, 1),
(23, 1, 27, 15, '2017-04-01 01:20:21', NULL, 0),
(24, 2, 22, 20, '2017-04-03 10:46:26', NULL, 0),
(25, 5, 2, 7, '2017-03-30 16:51:52', NULL, 1),
(26, 2, 28, 13, '2017-03-29 15:48:42', NULL, 0),
(27, 2, 12, 20, '2017-03-29 04:32:53', NULL, 0),
(28, 2, 7, 13, '2017-04-02 09:51:21', NULL, 0),
(29, 2, 12, 5, '2017-04-03 18:28:46', NULL, 0),
(30, 5, 4, 1, '2017-03-29 00:31:45', NULL, 1),
(31, 5, 23, 8, '2017-04-01 17:36:54', NULL, 1),
(32, 2, 23, 12, '2017-04-01 06:52:42', NULL, 0),
(33, 1, 19, 20, '2017-04-02 23:24:16', NULL, 0),
(34, 4, 4, 1, '2017-03-27 17:03:08', NULL, 1),
(35, 4, 27, 16, '2017-03-28 18:16:10', NULL, 1),
(36, 1, 10, 6, '2017-03-27 16:15:24', NULL, 0),
(37, 5, 12, 3, '2017-04-03 23:43:38', NULL, 1),
(38, 2, 24, 16, '2017-03-30 23:42:11', NULL, 0),
(39, 2, 7, 8, '2017-04-01 09:48:55', NULL, 0),
(40, 2, 15, 14, '2017-04-02 23:13:44', NULL, 0),
(41, 3, 26, 15, '2017-03-27 06:04:17', NULL, 1),
(42, 3, 11, 20, '2017-04-01 21:17:19', NULL, 1),
(43, 4, 19, 20, '2017-04-01 21:27:16', NULL, 1),
(44, 5, 9, 2, '2017-03-27 23:16:14', NULL, 1),
(45, 3, 21, 6, '2017-04-04 23:13:15', NULL, 1),
(46, 3, 19, 15, '2017-04-03 01:52:21', NULL, 1),
(47, 1, 17, 17, '2017-03-30 20:47:54', NULL, 0),
(48, 4, 7, 10, '2017-03-30 02:38:56', NULL, 1),
(49, 3, 2, 17, '2017-03-28 23:11:23', NULL, 1),
(50, 2, 26, 15, '2017-04-01 11:26:39', NULL, 0),
(51, 3, 26, 16, '2017-03-30 11:51:09', NULL, 1),
(52, 3, 10, 5, '2017-04-01 00:05:43', NULL, 1),
(53, 3, 17, 18, '2017-03-29 17:06:22', NULL, 1),
(54, 4, 25, 3, '2017-03-28 18:16:54', NULL, 1),
(55, 3, 30, 3, '2017-03-28 22:53:02', NULL, 1),
(56, 4, 5, 6, '2017-04-03 11:40:29', NULL, 1),
(57, 3, 13, 11, '2017-03-27 19:20:54', NULL, 1),
(58, 3, 26, 12, '2017-04-04 13:17:19', NULL, 1),
(59, 1, 25, 11, '2017-03-30 06:03:19', NULL, 0),
(60, 5, 21, 1, '2017-04-02 04:52:13', NULL, 1),
(61, 1, 2, 4, '2017-03-17 03:05:37', '', 0),
(62, 1, 5, 4, '2017-03-17 03:05:43', '', 0),
(63, 2, 16, 4, '2017-03-17 03:05:49', '', 0),
(64, 1, 17, 4, '2017-03-17 03:05:56', '', 0),
(65, 1, 14, 1, '2017-03-17 03:22:31', '', 0),
(66, 1, 19, 1, '2017-03-17 03:22:38', '', 0),
(67, 1, 1, 2, '2017-03-17 03:23:12', '', 0),
(68, 1, 2, 2, '2017-03-17 03:23:16', '', 0);

-- --------------------------------------------------------

--
-- Structure de la table `commentaire`
--

DROP TABLE IF EXISTS `commentaire`;
CREATE TABLE `commentaire` (
  `id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `salarie_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `contenu` longtext COLLATE utf8_unicode_ci NOT NULL,
  `published` tinyint(1) NOT NULL,
  `date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `commentaire`
--

INSERT INTO `commentaire` (`id`, `service_id`, `salarie_id`, `titre`, `contenu`, `published`, `date`) VALUES
(1, 4, 1, 'Splendide', 'Un service tout simplement splendide, merci pour l\'effort !', 0, '2017-03-17 02:34:48'),
(2, 13, 1, 'Passable', 'Il n\'a même pas fait les poussières des meubles !', 1, '2017-03-17 02:38:42'),
(3, 21, 1, 'Un mulet digne de ce nom !', 'Je n\'ai même pas eu besoin de préciser ce que je voulais... Ce virtuose des ciseaux m\'a taillé en 5 minutes chrono un mulet comme je n\'en avais jamais vu ! Merci pour le verre d\'eau dans la salle d\'attente. Je recommande.', 0, '2017-03-17 02:41:07'),
(4, 21, 4, 'Coiffeur hors du commun', 'Merci pour la coupe c\'était parfait, mais la musique dans la salle d\'attente laisse à désirer, faites un effort !', 0, '2017-03-17 03:01:32'),
(5, 12, 3, 'Au top!', 'Pelouse tondue parfaitement rien à dire', 1, '2017-03-17 03:09:34'),
(6, 2, 3, 'Très rapide !', 'Livraison des pépitos que j\'avais commandé directement dans mon bureau, juste parfait !', 1, '2017-03-17 03:11:13'),
(7, 10, 4, 'Piètre massage', 'à vrai dire je m\'attendais à mieux, au vu des différents avis... L\'huile de moteur pour pratiquer les massages laisse un peu à désirer, mais je me suis surtout posé des questions lorsque vous avez commencé à me marcher sur le dos. \r\nNe recommande pas vraiment...', 0, '2017-03-17 03:16:44'),
(8, 2, 7, 'Livraison avec des pincettes', 'Prestataire efficace qui est allé me chercher le pain à la boulangerie pour le ramener chez moi. \r\nIl est cependant regrettable que vous ayez prélevé une commission sur l\'un des croutons de la baguette.', 0, '2017-03-17 03:19:22'),
(9, 23, 8, 'Fuite d\'eau réparée', 'Merci au plombier qui est venu changer mon mitigeur suite à une fuite d\'eau ! Rapide, efficace, pas cher', 1, '2017-03-17 03:21:36'),
(10, 9, 2, 'Rapidité s\'il vous plait ?', 'Il aura finalement fallu 3 jours pour que ce livreur me ramène le journal au bureau. L\'intention était là, mais la vitesse peut être améliorée. Puis-je vous suggérer de changer les piles de votre 4x4 ?', 0, '2017-03-17 03:25:07');

-- --------------------------------------------------------

--
-- Structure de la table `contenu_bouquet`
--

DROP TABLE IF EXISTS `contenu_bouquet`;
CREATE TABLE `contenu_bouquet` (
  `type_service_id` int(11) NOT NULL,
  `bouquet_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `contenu_bouquet`
--

INSERT INTO `contenu_bouquet` (`type_service_id`, `bouquet_id`) VALUES
(1, 1),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(2, 2),
(2, 7),
(2, 8),
(2, 9),
(2, 10),
(3, 3),
(3, 8),
(3, 9),
(3, 10),
(4, 4),
(4, 9),
(4, 10),
(5, 5),
(5, 10),
(6, 6),
(6, 10);

-- --------------------------------------------------------

--
-- Structure de la table `entreprise`
--

DROP TABLE IF EXISTS `entreprise`;
CREATE TABLE `entreprise` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  `Siret` bigint(20) NOT NULL,
  `Responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `NbAbo` int(11) NOT NULL,
  `NbSal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `entreprise`
--

INSERT INTO `entreprise` (`id`, `user_id`, `adresse_id`, `Siret`, `Responsable`, `Telephone`, `Site`, `NbAbo`, `NbSal`) VALUES
(1, 3, 1, 1061507308, 'Susan Masson', 662939453, 'gallet.fr', 5, 3),
(2, 4, 2, 1116644887, 'Alphonse Pinto', 356646728, 'gautier.net', 2, 5),
(3, 5, 3, 1152360423, 'Joséphine Bailly', 111535644, 'bonneau.org', 2, 2),
(4, 6, 4, 1096572105, 'Madeleine Brunel', 515496826, 'ollivier.com', 1, 8),
(5, 7, 5, 1171932636, 'Bernadette Menard', 297045898, 'jacques.com', 2, 2);

-- --------------------------------------------------------

--
-- Structure de la table `etat_commande`
--

DROP TABLE IF EXISTS `etat_commande`;
CREATE TABLE `etat_commande` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `etat_commande`
--

INSERT INTO `etat_commande` (`id`, `libelle`) VALUES
(1, 'En attente de confirmation du prestataire'),
(2, 'En attente de règlement du salarié'),
(3, 'En attente de livraison du prestataire'),
(4, 'Commande validée et livrée mais non commentée'),
(5, 'Commande validée, livrée et commentée');

-- --------------------------------------------------------

--
-- Structure de la table `fos_user`
--

DROP TABLE IF EXISTS `fos_user`;
CREATE TABLE `fos_user` (
  `id` int(11) NOT NULL,
  `entreprise_id` int(11) DEFAULT NULL,
  `prestataire_id` int(11) DEFAULT NULL,
  `salarie_id` int(11) DEFAULT NULL,
  `username` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `username_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `email_canonical` varchar(180) COLLATE utf8_unicode_ci NOT NULL,
  `enabled` tinyint(1) NOT NULL,
  `salt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `last_login` datetime DEFAULT NULL,
  `confirmation_token` varchar(180) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password_requested_at` datetime DEFAULT NULL,
  `roles` longtext COLLATE utf8_unicode_ci NOT NULL COMMENT '(DC2Type:array)'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `fos_user`
--

INSERT INTO `fos_user` (`id`, `entreprise_id`, `prestataire_id`, `salarie_id`, `username`, `username_canonical`, `email`, `email_canonical`, `enabled`, `salt`, `password`, `last_login`, `confirmation_token`, `password_requested_at`, `roles`) VALUES
(1, NULL, NULL, NULL, 'admin1', 'admin1', 'admin1@google.com', 'admin1@google.com', 1, NULL, '$2y$13$nnl1qiI64d6iEpTVtuRLIeiR6te71O6JL.770Na8N66BG5uzlEPCC', '2017-03-18 01:39:27', NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(2, NULL, NULL, NULL, 'admin2', 'admin2', 'admin2@google.com', 'admin2@google.com', 1, NULL, '$2y$13$YcVglIRMobSt0hnlBOmKa.6elg0P6jS8R6NcnH2cW62kNzkJfPdOy', NULL, NULL, NULL, 'a:1:{i:0;s:10:"ROLE_ADMIN";}'),
(3, 1, NULL, NULL, 'Entreprise1', 'entreprise1', 'entreprise1@free.fr', 'entreprise1@free.fr', 1, NULL, '$2y$13$fltX60Pht4HHDApVLuGPaOmU66db5IRRSe7eF0ClhyXHTYOR4Bkz2', '2017-03-17 02:22:49', NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ENTREPRISE";}'),
(4, 2, NULL, NULL, 'Entreprise2', 'entreprise2', 'entreprise2@voila.fr', 'entreprise2@voila.fr', 1, NULL, '$2y$13$BSzHeR9cxMWL7P9MS1cl6OPvmU2MItJmXxGNuQ3F6/uRTZknZ2z4m', '2017-03-17 00:56:00', NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ENTREPRISE";}'),
(5, 3, NULL, NULL, 'Entreprise3', 'entreprise3', 'entreprise3@noos.fr', 'entreprise3@noos.fr', 1, NULL, '$2y$13$YHobfCEhhCSlin/Rckl7k.P8/cGVcoTLFFP9C6kMMUKF5/Z5qzrT.', '2017-03-17 00:58:07', NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ENTREPRISE";}'),
(6, 4, NULL, NULL, 'Entreprise4', 'entreprise4', 'entreprise4@tiscali.fr', 'entreprise4@tiscali.fr', 1, NULL, '$2y$13$JgekW9Y0pfp4NVppcPhcWO0BHwJYOYwTjEyN07NLu/bBbAPJPkhVS', '2017-03-17 00:59:41', NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ENTREPRISE";}'),
(7, 5, NULL, NULL, 'Entreprise5', 'entreprise5', 'entreprise5@club-internet.fr', 'entreprise5@club-internet.fr', 1, NULL, '$2y$13$ghTuNhVfOxM535WtQd8gGeozLZMmU/2Yp3vEkkRgJLG0MIQEU8Kgi', '2017-03-18 01:20:16', NULL, NULL, 'a:1:{i:0;s:15:"ROLE_ENTREPRISE";}'),
(8, NULL, 1, NULL, 'Prestataire1', 'prestataire1', 'prestataire1@dbmail.com', 'prestataire1@dbmail.com', 1, NULL, '$2y$13$WXyOduU9SUsK9BU9rYSllOzFsJrgZmbUbG4pCBJEpvGv4XYCR93w2', '2017-03-17 03:07:20', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(9, NULL, 2, NULL, 'Prestataire2', 'prestataire2', 'prestataire2@live.com', 'prestataire2@live.com', 1, NULL, '$2y$13$LhQ1CoRPpPYEnwE/9swmVeMoDzcHk9k0WeyyKzc/GRdIxkpsBqWW2', NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(10, NULL, 3, NULL, 'Prestataire3', 'prestataire3', 'prestataire3@hotmail.fr', 'prestataire3@hotmail.fr', 1, NULL, '$2y$13$MBvVYJojGVMib.CAoTw3auUs8KhSj9NnZA8W9xtrrT/djQktkzotG', '2017-03-17 02:44:03', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(11, NULL, 4, NULL, 'Prestataire4', 'prestataire4', 'prestataire4@ifrance.com', 'prestataire4@ifrance.com', 1, NULL, '$2y$13$X88x8fii/sTRsAsSLxDANO8SgxaYO4BB9j7atd0QMjyrjTsXfdEV.', NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(12, NULL, 5, NULL, 'Prestataire5', 'prestataire5', 'prestataire5@laposte.net', 'prestataire5@laposte.net', 1, NULL, '$2y$13$yJO8Jp9No8kx9yZxJ8gs1.16LdsjIyWIBuS.v7MLCNFIrEdzg2rze', NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(13, NULL, 6, NULL, 'Prestataire6', 'prestataire6', 'prestataire6@laposte.net', 'prestataire6@laposte.net', 1, NULL, '$2y$13$hJgartvioKKbLaWtnDklWO7OKX.MNDwR49AvB1cFh9XVa4zehhZtW', '2017-03-17 03:12:45', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(14, NULL, 7, NULL, 'Prestataire7', 'prestataire7', 'prestataire7@laposte.net', 'prestataire7@laposte.net', 1, NULL, '$2y$13$ZqFdF9xG.HambcQ9AlKdZumobNsvoYItKkGj6tfr6Vbjad2SF7QcS', NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(15, NULL, 8, NULL, 'Prestataire8', 'prestataire8', 'prestataire8@tiscali.fr', 'prestataire8@tiscali.fr', 1, NULL, '$2y$13$FBl6xcH.rNVPK57HSz5ZAeeEjbIt/Eey8akEfWw20vWg/ymYfCCvm', '2017-03-17 03:19:46', NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(16, NULL, 9, NULL, 'Prestataire9', 'prestataire9', 'prestataire9@noos.fr', 'prestataire9@noos.fr', 1, NULL, '$2y$13$Jp.QRAUNeMrc04F5xIS98eQzG5mwd/rOaM6OcC3xR7SRxUJ3mkpQC', NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(17, NULL, 10, NULL, 'Prestataire10', 'prestataire10', 'prestataire10@wanadoo.fr', 'prestataire10@wanadoo.fr', 1, NULL, '$2y$13$B6nswFX5QlaSZqCgVx3PBuTFItpzW/RFYD24Z4GZ4TGUuMKlQSVuW', NULL, NULL, NULL, 'a:1:{i:0;s:16:"ROLE_PRESTATAIRE";}'),
(18, NULL, NULL, 1, 'Salarie1', 'salarie1', 'laetitia.traore@tele2.fr', 'laetitia.traore@tele2.fr', 1, NULL, '$2y$13$Ucx6TNm.rAjlzWXYNkzRUuYZkhtrEUP0zZBRjtq6KIamuAoMCitpK', '2017-03-18 02:36:06', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(19, NULL, NULL, 2, 'Salarie2', 'salarie2', 'eleonore.julien@live.com', 'eleonore.julien@live.com', 1, NULL, '$2y$13$qw1cyDT3njrmtLtrIvEigOQALme7kLr4Z4ufH3S59U.xOuzM3WDNG', '2017-03-17 03:23:01', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(20, NULL, NULL, 3, 'Salarie3', 'salarie3', 'michel.besnard@tele2.fr', 'michel.besnard@tele2.fr', 1, NULL, '$2y$13$yfYxPYxT6kryLCQNEPLeaeFC1Ycsraxk2W8az01ijmnNxsk/wJjf6', '2017-03-17 03:08:50', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(21, NULL, NULL, 4, 'Salarie4', 'salarie4', 'bernard.albert@noos.fr', 'bernard.albert@noos.fr', 1, NULL, '$2y$13$sH/zAz.xGlQ5tPpOsa2utOObVDJWii3p8f2K2fb2IuIPVNOztzTcW', '2017-03-17 03:13:34', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(22, NULL, NULL, 5, 'Salarie5', 'salarie5', 'louise.lombard@tiscali.fr', 'louise.lombard@tiscali.fr', 1, NULL, '$2y$13$0BcG.IrJMYOBSphnC.AFz./ew6MKNyz7MXDn77PMPZA8AULGxwODu', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(23, NULL, NULL, 6, 'Salarie6', 'salarie6', 'thibault.marty@free.fr', 'thibault.marty@free.fr', 1, NULL, '$2y$13$TKp.ib6VaajxGi.XwazeVuhjsp1VxZgnytlJ7s5Ljw3X3lNeLWi1e', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(24, NULL, NULL, 7, 'Salarie7', 'salarie7', 'agathe.renard@ifrance.com', 'agathe.renard@ifrance.com', 1, NULL, '$2y$13$w28bCqgSXXDTX1lsoPxicOxXYWgLG98VhUw/tl/YfS42RMYfrFXZq', '2017-03-17 03:17:13', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(25, NULL, NULL, 8, 'Salarie8', 'salarie8', 'victor.navarro@club-internet.fr', 'victor.navarro@club-internet.fr', 1, NULL, '$2y$13$iuWTsqbUUuJJ1CBIPGmHtuK0.Z3wskOOWeixAVg4GW8UxjoNAARZq', '2017-03-17 03:20:14', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(26, NULL, NULL, 9, 'Salarie9', 'salarie9', 'hugues.lemoine@gmail.com', 'hugues.lemoine@gmail.com', 1, NULL, '$2y$13$v0tguHAx0bOiREM3FEHBY.OSd3i8zTtc/kObyEUL2tlu/ShbF9NEm', '2017-03-17 03:22:03', NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(27, NULL, NULL, 10, 'Salarie10', 'salarie10', 'eugene.lesage@voila.fr', 'eugene.lesage@voila.fr', 1, NULL, '$2y$13$Yh7W8eNwD0Wb6mmzBmaLYeCCBMmi2JzkhHu9fJyd3.43AvqMhMizW', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(28, NULL, NULL, 11, 'Salarie11', 'salarie11', 'michelle.blanc@voila.fr', 'michelle.blanc@voila.fr', 1, NULL, '$2y$13$LsVcEGNu/FKFRt9YA6B8CuSJ9MfLspFa3YT53MFxLAPf3TRbkaLcG', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(29, NULL, NULL, 12, 'Salarie12', 'salarie12', 'theodore.weber@yahoo.fr', 'theodore.weber@yahoo.fr', 1, NULL, '$2y$13$UL2cvfP65rb1xTvI5JH3x.hmu7csQ2k9yBuQMuHjoX8DSspivRdB6', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(30, NULL, NULL, 13, 'Salarie13', 'salarie13', 'jean.mercier@laposte.net', 'jean.mercier@laposte.net', 1, NULL, '$2y$13$bfyzezcGmFDkdOD9jrT3NeoNHZ.bpIWdnCgNmqWO4hOR7NcEhJg7m', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(31, NULL, NULL, 14, 'Salarie14', 'salarie14', 'celine.adam@wanadoo.fr', 'celine.adam@wanadoo.fr', 1, NULL, '$2y$13$.0uqmvgkwWC87RtfGonMjOM7CZAAlY3B1txZ0RQMurTG5UPJXetcy', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(32, NULL, NULL, 15, 'Salarie15', 'salarie15', 'chantal.chauveau@yahoo.fr', 'chantal.chauveau@yahoo.fr', 1, NULL, '$2y$13$Oih/gn2JEOgwWnlxa2IYWe1SJPMUQzTl7He/Ly6y86UtuDLbh4h.C', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(33, NULL, NULL, 16, 'Salarie16', 'salarie16', 'adele.legrand@live.com', 'adele.legrand@live.com', 1, NULL, '$2y$13$5.yiqceS1mzLwdauThKZzuFPYivNVHiyOnr1bHZI5nXid3Rzzh8ci', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(34, NULL, NULL, 17, 'Salarie17', 'salarie17', 'capucine.gros@orange.fr', 'capucine.gros@orange.fr', 1, NULL, '$2y$13$SnrAPh59svS5w..q50CM..2nV1LWPHZCIaQRznZYdWRUjDJHrZArO', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(35, NULL, NULL, 18, 'Salarie18', 'salarie18', 'antoine.camus@gmail.com', 'antoine.camus@gmail.com', 1, NULL, '$2y$13$39BSMGi3ErKI/9W6eBB1muiNXi0WTsriQN2leT0ddFuU14nYUHZMO', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(36, NULL, NULL, 19, 'Salarie19', 'salarie19', 'stephane.vallet@voila.fr', 'stephane.vallet@voila.fr', 1, NULL, '$2y$13$0XArEbyMfydl8xIhR6WnIe7nFRPNOorZKS0.b5j43vcwaY9jvp//2', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}'),
(37, NULL, NULL, 20, 'Salarie20', 'salarie20', 'cecile.legrand@tele2.fr', 'cecile.legrand@tele2.fr', 1, NULL, '$2y$13$ISHlZvKB0yp9hcMQfxTneOi8ZCExUmDPIsy8dIn/5OYvzirI8bPY.', NULL, NULL, NULL, 'a:1:{i:0;s:12:"ROLE_SALARIE";}');

-- --------------------------------------------------------

--
-- Structure de la table `prestataire`
--

DROP TABLE IF EXISTS `prestataire`;
CREATE TABLE `prestataire` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  `Siret` bigint(20) NOT NULL,
  `Responsable` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` int(11) NOT NULL,
  `Site` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `prestataire`
--

INSERT INTO `prestataire` (`id`, `user_id`, `adresse_id`, `Siret`, `Responsable`, `Telephone`, `Site`) VALUES
(1, 8, 6, 1060094307, 'Henri Simon', 451794433, 'pruvost.com'),
(2, 9, 7, 1074145063, 'Jacques Guilbert', 105169677, 'joubert.fr'),
(3, 10, 8, 1140342955, 'Dominique Charrier', 175195312, 'chevalier.fr'),
(4, 11, 9, 1018495114, 'Dominique Brunel', 418511962, 'thibault.com'),
(5, 12, 10, 1162861037, 'Marianne Martin', 482385253, 'desousa.com'),
(6, 13, 11, 1157949198, 'Suzanne Pasquier', 429705810, 'faivre.com'),
(7, 14, 12, 1174844343, 'Anne Faivre', 563989257, 'menard.fr'),
(8, 15, 13, 1054260675, 'René Bourdon', 554376220, 'jourdan.com'),
(9, 16, 14, 1115612571, 'Yves Schneider', 660632324, 'gilles.com'),
(10, 17, 15, 1024315577, 'Antoinette Charpentier', 158148193, 'laporte.net');

-- --------------------------------------------------------

--
-- Structure de la table `salarie`
--

DROP TABLE IF EXISTS `salarie`;
CREATE TABLE `salarie` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `adresse_id` int(11) DEFAULT NULL,
  `entreprise_id` int(11) DEFAULT NULL,
  `Nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Sexe` varchar(1) COLLATE utf8_unicode_ci NOT NULL,
  `Telephone` int(11) NOT NULL,
  `DateNaissance` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `salarie`
--

INSERT INTO `salarie` (`id`, `user_id`, `adresse_id`, `entreprise_id`, `Nom`, `Prenom`, `Sexe`, `Telephone`, `DateNaissance`) VALUES
(1, 18, 16, 1, 'Traore', 'Laetitia', 'f', 671520996, '1964-03-05'),
(2, 19, 17, 4, 'Julien', 'Éléonore', 'f', 770098876, '1980-12-23'),
(3, 20, 18, 5, 'Besnard', 'Michel', 'h', 768945312, '1957-08-17'),
(4, 21, 19, 2, 'Albert', 'Bernard', 'h', 641400146, '1941-06-03'),
(5, 22, 20, 4, 'Lombard', 'Louise', 'f', 661975097, '1946-10-12'),
(6, 23, 21, 1, 'Marty', 'Thibault', 'h', 617291259, '1987-05-01'),
(7, 24, 22, 3, 'Renard', 'Agathe', 'f', 785766601, '1946-10-09'),
(8, 25, 23, 2, 'Navarro', 'Victor', 'h', 661053466, '1946-03-11'),
(9, 26, 24, 2, 'Lemoine', 'Hugues', 'h', 694226074, '1973-10-31'),
(10, 27, 25, 4, 'Lesage', 'Eugène', 'h', 629718017, '1974-02-25'),
(11, 28, 26, 4, 'Blanc', 'Michelle', 'f', 710009765, '1941-03-19'),
(12, 29, 27, 4, 'Weber', 'Théodore', 'h', 724066162, '1991-08-07'),
(13, 30, 28, 5, 'Mercier', 'Jean', 'h', 774523925, '1981-06-09'),
(14, 31, 29, 4, 'Adam', 'Céline', 'f', 738629150, '1965-07-24'),
(15, 32, 30, 3, 'Chauveau', 'Chantal', 'f', 697924804, '1980-01-22'),
(16, 33, 31, 1, 'Legrand', 'Adèle', 'f', 711688232, '1969-01-17'),
(17, 34, 32, 4, 'Gros', 'Capucine', 'f', 609118652, '1947-11-14'),
(18, 35, 33, 2, 'Camus', 'Antoine', 'h', 775274658, '1972-01-31'),
(19, 36, 34, 4, 'Vallet', 'Stéphane', 'h', 605761718, '1970-11-18'),
(20, 37, 35, 2, 'Legrand', 'Cécile', 'f', 605169677, '1972-04-05');

-- --------------------------------------------------------

--
-- Structure de la table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE `service` (
  `id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `prestataire_id` int(11) NOT NULL,
  `libelle` varchar(500) COLLATE utf8_unicode_ci NOT NULL,
  `tarif` double NOT NULL,
  `description` longtext COLLATE utf8_unicode_ci,
  `nbCommentaires` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `service`
--

INSERT INTO `service` (`id`, `type_id`, `prestataire_id`, `libelle`, `tarif`, `description`, `nbCommentaires`) VALUES
(1, 1, 1, 'Livraison1', 17, NULL, 0),
(2, 1, 2, 'Livraison2', 48, NULL, 2),
(3, 3, 4, 'Soins du corps3', 28, NULL, 0),
(4, 5, 4, 'Entretien Maison4', 10, NULL, 1),
(5, 2, 2, 'Coiffure5', 31, NULL, 0),
(6, 5, 4, 'Entretien Maison6', 22, NULL, 0),
(7, 2, 1, 'Coiffure7', 18, NULL, 0),
(8, 4, 9, 'Aide à domicile8', 32, NULL, 0),
(9, 1, 8, 'Livraison9', 18, NULL, 1),
(10, 3, 6, 'Soins du corps10', 31, NULL, 1),
(11, 5, 3, 'Entretien Maison11', 22, NULL, 0),
(12, 5, 4, 'Entretien Maison12', 48, NULL, 1),
(13, 5, 1, 'Entretien Maison13', 19, NULL, 1),
(14, 3, 10, 'Soins du corps14', 33, NULL, 0),
(15, 1, 1, 'Livraison15', 40, NULL, 0),
(16, 2, 1, 'Coiffure16', 16, NULL, 0),
(17, 1, 10, 'Livraison17', 34, NULL, 0),
(18, 5, 5, 'Entretien Maison18', 28, NULL, 0),
(19, 6, 5, 'Gardiennage19', 32, NULL, 0),
(20, 5, 8, 'Entretien Maison20', 18, NULL, 0),
(21, 2, 5, 'Coiffure21', 23, NULL, 2),
(22, 1, 10, 'Livraison22', 17, NULL, 0),
(23, 5, 5, 'Entretien Maison23', 37, NULL, 1),
(24, 4, 7, 'Aide à domicile24', 15, NULL, 0),
(25, 1, 5, 'Livraison25', 25, NULL, 0),
(26, 5, 6, 'Entretien Maison26', 41, NULL, 0),
(27, 1, 2, 'Livraison27', 16, NULL, 0),
(28, 4, 6, 'Aide à domicile28', 45, NULL, 0),
(29, 4, 2, 'Aide à domicile29', 41, NULL, 0),
(30, 5, 4, 'Entretien Maison30', 17, NULL, 0);

-- --------------------------------------------------------

--
-- Structure de la table `type_service`
--

DROP TABLE IF EXISTS `type_service`;
CREATE TABLE `type_service` (
  `id` int(11) NOT NULL,
  `libelle` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Contenu de la table `type_service`
--

INSERT INTO `type_service` (`id`, `libelle`) VALUES
(1, 'Livraison'),
(2, 'Coiffure'),
(3, 'Soins du corps'),
(4, 'Aide à domicile'),
(5, 'Entretien Maison'),
(6, 'Gardiennage');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_351268BB6C8DF983` (`bouquet_id`),
  ADD KEY `IDX_351268BBA4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `adresse`
--
ALTER TABLE `adresse`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `bouquet`
--
ALTER TABLE `bouquet`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_6EEAA67DD5E86FF` (`etat_id`),
  ADD KEY `IDX_6EEAA67DED5CA9E6` (`service_id`),
  ADD KEY `IDX_6EEAA67D5859934A` (`salarie_id`);

--
-- Index pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_67F068BCED5CA9E6` (`service_id`),
  ADD KEY `IDX_67F068BC5859934A` (`salarie_id`);

--
-- Index pour la table `contenu_bouquet`
--
ALTER TABLE `contenu_bouquet`
  ADD PRIMARY KEY (`type_service_id`,`bouquet_id`),
  ADD KEY `IDX_C738E469F05F7FC3` (`type_service_id`),
  ADD KEY `IDX_C738E4696C8DF983` (`bouquet_id`);

--
-- Index pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_D19FA60A76ED395` (`user_id`),
  ADD UNIQUE KEY `UNIQ_D19FA604DE7DC5C` (`adresse_id`);

--
-- Index pour la table `etat_commande`
--
ALTER TABLE `etat_commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_957A647992FC23A8` (`username_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479A0D96FBF` (`email_canonical`),
  ADD UNIQUE KEY `UNIQ_957A6479C05FB297` (`confirmation_token`),
  ADD UNIQUE KEY `UNIQ_957A6479A4AEAFEA` (`entreprise_id`),
  ADD UNIQUE KEY `UNIQ_957A6479BE3DB2B7` (`prestataire_id`),
  ADD UNIQUE KEY `UNIQ_957A64795859934A` (`salarie_id`);

--
-- Index pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_60A26480A76ED395` (`user_id`),
  ADD UNIQUE KEY `UNIQ_60A264804DE7DC5C` (`adresse_id`);

--
-- Index pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_828E3A1AA76ED395` (`user_id`),
  ADD UNIQUE KEY `UNIQ_828E3A1A4DE7DC5C` (`adresse_id`),
  ADD KEY `IDX_828E3A1AA4AEAFEA` (`entreprise_id`);

--
-- Index pour la table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_E19D9AD2C54C8C93` (`type_id`),
  ADD KEY `IDX_E19D9AD2BE3DB2B7` (`prestataire_id`);

--
-- Index pour la table `type_service`
--
ALTER TABLE `type_service`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `abonnement`
--
ALTER TABLE `abonnement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT pour la table `adresse`
--
ALTER TABLE `adresse`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT pour la table `bouquet`
--
ALTER TABLE `bouquet`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT pour la table `commentaire`
--
ALTER TABLE `commentaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `entreprise`
--
ALTER TABLE `entreprise`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `etat_commande`
--
ALTER TABLE `etat_commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT pour la table `fos_user`
--
ALTER TABLE `fos_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT pour la table `prestataire`
--
ALTER TABLE `prestataire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `salarie`
--
ALTER TABLE `salarie`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT pour la table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
--
-- AUTO_INCREMENT pour la table `type_service`
--
ALTER TABLE `type_service`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `abonnement`
--
ALTER TABLE `abonnement`
  ADD CONSTRAINT `FK_351268BB6C8DF983` FOREIGN KEY (`bouquet_id`) REFERENCES `bouquet` (`id`),
  ADD CONSTRAINT `FK_351268BBA4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`);

--
-- Contraintes pour la table `commande`
--
ALTER TABLE `commande`
  ADD CONSTRAINT `FK_6EEAA67D5859934A` FOREIGN KEY (`salarie_id`) REFERENCES `salarie` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DD5E86FF` FOREIGN KEY (`etat_id`) REFERENCES `etat_commande` (`id`),
  ADD CONSTRAINT `FK_6EEAA67DED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);

--
-- Contraintes pour la table `commentaire`
--
ALTER TABLE `commentaire`
  ADD CONSTRAINT `FK_67F068BC5859934A` FOREIGN KEY (`salarie_id`) REFERENCES `salarie` (`id`),
  ADD CONSTRAINT `FK_67F068BCED5CA9E6` FOREIGN KEY (`service_id`) REFERENCES `service` (`id`);

--
-- Contraintes pour la table `contenu_bouquet`
--
ALTER TABLE `contenu_bouquet`
  ADD CONSTRAINT `FK_C738E4696C8DF983` FOREIGN KEY (`bouquet_id`) REFERENCES `bouquet` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_C738E469F05F7FC3` FOREIGN KEY (`type_service_id`) REFERENCES `type_service` (`id`) ON DELETE CASCADE;

--
-- Contraintes pour la table `entreprise`
--
ALTER TABLE `entreprise`
  ADD CONSTRAINT `FK_D19FA604DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `adresse` (`id`),
  ADD CONSTRAINT `FK_D19FA60A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `fos_user`
--
ALTER TABLE `fos_user`
  ADD CONSTRAINT `FK_957A64795859934A` FOREIGN KEY (`salarie_id`) REFERENCES `salarie` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_957A6479A4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `FK_957A6479BE3DB2B7` FOREIGN KEY (`prestataire_id`) REFERENCES `prestataire` (`id`) ON DELETE SET NULL;

--
-- Contraintes pour la table `prestataire`
--
ALTER TABLE `prestataire`
  ADD CONSTRAINT `FK_60A264804DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `adresse` (`id`),
  ADD CONSTRAINT `FK_60A26480A76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `salarie`
--
ALTER TABLE `salarie`
  ADD CONSTRAINT `FK_828E3A1A4DE7DC5C` FOREIGN KEY (`adresse_id`) REFERENCES `adresse` (`id`),
  ADD CONSTRAINT `FK_828E3A1AA4AEAFEA` FOREIGN KEY (`entreprise_id`) REFERENCES `entreprise` (`id`),
  ADD CONSTRAINT `FK_828E3A1AA76ED395` FOREIGN KEY (`user_id`) REFERENCES `fos_user` (`id`);

--
-- Contraintes pour la table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `FK_E19D9AD2BE3DB2B7` FOREIGN KEY (`prestataire_id`) REFERENCES `prestataire` (`id`),
  ADD CONSTRAINT `FK_E19D9AD2C54C8C93` FOREIGN KEY (`type_id`) REFERENCES `type_service` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
