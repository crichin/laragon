-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : mar. 02 juil. 2024 à 01:32
-- Version du serveur : 10.4.28-MariaDB
-- Version de PHP : 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `laragon`
--

-- --------------------------------------------------------

--
-- Structure de la table `lara`
--

CREATE TABLE `lara` (
  `id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `lara`
--

INSERT INTO `lara` (`id`, `full_name`, `email`, `phone`, `message`) VALUES
(1, 'fabioola', 'fabiola@gmail.com', '+229 95967196', 'jhygtrezaqwsxdcfghjkoiuytredsxcvghjk'),
(2, 'nadiath', 'nadiaacodji@gmail.com', '+229 95967178', 'bonjour tpout le monde '),
(3, 'fabilath', 'crichinaayeboa@gmail.com', '+229 95967025', 'bonjour le monde '),
(4, 'nadiath', 'nadiaacodji@gmail.com', '+229 95967554', 'hophop pi'),
(5, 'fabioolall', 'crichinaayeboa@gmail.com', '+229 95967554', 'bonsoir la famille');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `lara`
--
ALTER TABLE `lara`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `lara`
--
ALTER TABLE `lara`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
