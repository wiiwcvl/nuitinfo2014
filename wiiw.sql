-- phpMyAdmin SQL Dump
-- version 4.2.13.1
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Ven 05 Décembre 2014 à 01:59
-- Version du serveur :  10.0.15-MariaDB-log
-- Version de PHP :  5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Base de données :  `wiiw`
--

-- --------------------------------------------------------

--
-- Structure de la table `acteurs`
--

CREATE TABLE IF NOT EXISTS `acteurs` (
`id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `type` enum('ONG','Pouvoir Public') NOT NULL,
  `mail` varchar(255) NOT NULL,
  `presentation` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `acteurs_crises`
--

CREATE TABLE IF NOT EXISTS `acteurs_crises` (
`id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL,
  `crise_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `crises`
--

CREATE TABLE IF NOT EXISTS `crises` (
`id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `gravite` int(11) NOT NULL,
  `verifie` enum('0','1') NOT NULL,
  `centrex` float NOT NULL,
  `centrey` float NOT NULL,
  `rayon` int(11) NOT NULL,
  `nbpings` int(11) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'New crisis'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
`id` int(11) NOT NULL,
  `acteur_id` int(11) NOT NULL,
  `crise_id` int(11) NOT NULL,
  `created` date NOT NULL,
  `titre` varchar(255) NOT NULL,
  `contenu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `typecrises`
--

CREATE TABLE IF NOT EXISTS `typecrises` (
`id` int(11) NOT NULL,
  `intitule` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `acteurs`
--
ALTER TABLE `acteurs`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `login` (`username`);

--
-- Index pour la table `acteurs_crises`
--
ALTER TABLE `acteurs_crises`
 ADD PRIMARY KEY (`id`), ADD KEY `acteur_id` (`acteur_id`), ADD KEY `crise_id` (`crise_id`);

--
-- Index pour la table `crises`
--
ALTER TABLE `crises`
 ADD PRIMARY KEY (`id`), ADD KEY `type` (`type`);

--
-- Index pour la table `news`
--
ALTER TABLE `news`
 ADD PRIMARY KEY (`id`), ADD KEY `acteur_id` (`acteur_id`), ADD KEY `crise_id` (`crise_id`);

--
-- Index pour la table `typecrises`
--
ALTER TABLE `typecrises`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `acteurs`
--
ALTER TABLE `acteurs`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `acteurs_crises`
--
ALTER TABLE `acteurs_crises`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `crises`
--
ALTER TABLE `crises`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `news`
--
ALTER TABLE `news`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `typecrises`
--
ALTER TABLE `typecrises`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `crises`
--
ALTER TABLE `crises`
ADD CONSTRAINT `crises_ibfk_1` FOREIGN KEY (`type`) REFERENCES `typecrises` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `news`
--
ALTER TABLE `news`
ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`acteur_id`) REFERENCES `acteurs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `news_ibfk_2` FOREIGN KEY (`crise_id`) REFERENCES `crises` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
