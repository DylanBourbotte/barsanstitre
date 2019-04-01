-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le :  lun. 01 avr. 2019 à 18:33
-- Version du serveur :  5.7.25
-- Version de PHP :  7.2.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `bar-sans-titre`
--

-- --------------------------------------------------------

--
-- Structure de la table `config`
--

CREATE TABLE `config` (
  `clef` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `valeur` text COLLATE utf8_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `nom` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sujet` text COLLATE utf8_unicode_ci,
  `messages` text COLLATE utf8_unicode_ci,
  `date` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `contacts`
--

INSERT INTO `contacts` (`id`, `nom`, `email`, `sujet`, `messages`, `date`) VALUES
(5, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(6, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(7, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(8, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(9, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(10, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(11, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(12, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(13, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(14, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(15, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(16, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(17, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(18, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(19, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(20, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(21, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(22, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(23, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(24, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(25, '', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(26, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(27, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(28, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(29, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(30, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(31, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(32, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(33, 'lamorski', 'parshimipopeli@sfr.fr', 'azerty', 'kkkkk', '2019-03-28 08:59:08'),
(34, 'dylan', 'azert@jsjskjsefklefk.fr', 'jhbuy', 'dgertyertyerterteteztzert', '2019-03-28 13:32:18'),
(35, 'colin', 'colinjp@test.com', 'jhbuy', 'sfsdfvsdfsdvdfs', '2019-03-28 13:32:39'),
(36, 'ALEX DOUCHET', 'ALEXDOUCHET@GMAIL.FR', 'azerty', 'ERGFJHTYUJGBFGNKUYTUYGDFVBGNHJ,KIIUÈYTRFEDCVBGHNJKI_UÈYTGRFDCVFGBHJUI_UÈY-', '2019-03-29 08:42:12'),
(37, 'roro', 'r.robertpro@gmail.com', 'rom1', 'coucou', '2019-04-01 10:52:49');

-- --------------------------------------------------------

--
-- Structure de la table `medias`
--

CREATE TABLE `medias` (
  `id` int(11) NOT NULL,
  `url` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `alt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `image` blob NOT NULL,
  `video` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `produits`
--

CREATE TABLE `produits` (
  `id` int(11) NOT NULL,
  `titre` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `date de debut` datetime DEFAULT NULL,
  `date de fin` datetime DEFAULT NULL,
  `nbre de personnes` int(11) NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medias`
--
ALTER TABLE `medias`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `produits`
--
ALTER TABLE `produits`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT pour la table `medias`
--
ALTER TABLE `medias`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `produits`
--
ALTER TABLE `produits`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;

