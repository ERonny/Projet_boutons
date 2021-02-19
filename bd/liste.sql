-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 01 fév. 2021 à 21:09
-- Version du serveur :  10.4.17-MariaDB
-- Version de PHP : 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `liste`
--

-- --------------------------------------------------------

--
-- Structure de la table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `userpass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `admins`
--

INSERT INTO `admins` (`id`, `firstname`, `lastname`, `email`, `username`, `userpass`) VALUES
(9, 'Victorien', 'Ouedraogo', 'ouedgv@hotmail.fr', 'ouevic', '$2y$10$bm4y1AfRArjcCLXPQY4Dbubxj4/jWkBVRsGxcfQlV5QWNSHezu7eG');

-- --------------------------------------------------------

--
-- Structure de la table `apprenants`
--

CREATE TABLE `apprenants` (
  `mail` varchar(60) NOT NULL,
  `nom` varchar(60) NOT NULL,
  `prenom` varchar(60) NOT NULL,
  `naissance` date NOT NULL,
  `sexe` varchar(5) NOT NULL,
  `formation` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `apprenants`
--

INSERT INTO `apprenants` (`mail`, `nom`, `prenom`, `naissance`, `sexe`, `formation`) VALUES
('ouedgv@hotmail.fr', 'Ouedraogo', 'Victrorien', '2021-01-16', 'Homme', 'DEV'),
('quel@quel.com', 'Sofia', 'Mony', '2021-01-17', 'Femme', 'DEV'),
('quelquechose@gmail.fr', 'Ouedraogo', 'Norbert', '2021-01-02', 'Femme', 'DEV'),
('scsrgf@gmailcom', 'Sofia', 'szdfegr', '2021-01-05', 'Homme', 'DEV'),
('sidmaig@gmailcom', 'MAIGA', 'S', '2021-12-29', 'Homme', 'DEV'),
('sitedeoued@gmail.com', 'Ouedraogo', 'Sita', '2021-01-29', 'Femme', 'REF'),
('zalsa@hotmail.fr', 'Zalissa', 'Sawadogo', '2021-01-02', 'Femme', 'REF');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `apprenants`
--
ALTER TABLE `apprenants`
  ADD PRIMARY KEY (`mail`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
