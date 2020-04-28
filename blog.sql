-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  mar. 28 avr. 2020 à 22:24
-- Version du serveur :  10.4.10-MariaDB
-- Version de PHP :  7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `blog`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

DROP TABLE IF EXISTS `articles`;
CREATE TABLE IF NOT EXISTS `articles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `titre` varchar(255) NOT NULL,
  `article` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_categorie` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`id`, `titre`, `article`, `image`, `id_utilisateur`, `id_categorie`, `date`) VALUES
(10, 'cambiasso', 'Actuellement en train dâ€™Ã©tudier pour obtenir sa licence UEFA dâ€™entraÃ®neur, Esteban Cambiasso dÃ©clarait il y a peu dans un live Instagram organisÃ© avec Javier Zanetti : Â« jâ€™ai toujours eu envie dâ€™entraÃ®ner, mÃªme sur le terrain. Â» Un dÃ©sir qui nâ€™avait pas Ã©chappÃ© au portier de Leicester, Kasper Schmeichel, lors du passage de lâ€™Argentin chez les Foxes durant lâ€™exercice 2014-2015.', 'om.jpg', 3, 2, '2020-04-27 01:29:05'),
(18, 'Coronavirus en France : le plan de dÃ©confinement ', 'Les dÃ©putÃ©s ont votÃ© dans la soirÃ©e le plan de dÃ©confinement prÃ©sentÃ© mardi 28 avril par le premier ministre, Edouard Philippe, Ã  368 voix pour, 100 contre et 103 abstentions. \r\n\r\n', 'blog.jpg', 8, 1, '2020-04-28 21:50:17'),
(19, 'AprÃ¨s une vague de violences, le prÃ©sident du Salvador autorise la police Ã  utiliser Â« la force lÃ©tale Â»', 'Â« Les cellules sÃ©parÃ©es pour les dÃ©tenus dâ€™un mÃªme gang, câ€™est terminÃ©, nous mÃ©langeons dÃ©sormais tous les groupes terroristes dans la mÃªme cellule, dans tous les centres de dÃ©tention. Lâ€™Etat, Ã§a se respecte ! Â» Câ€™est par ce tweet rageur que le vice-ministre de la justice salvadorien, Osiris Luna Meza, a annoncÃ©, lundi 27 avril, la fin de la politique carcÃ©rale en vigueur depuis 2002 au Salvador, qui consistait Ã  emprisonner sÃ©parÃ©ment les membres des Â« maras Â» rivales, ces gangs qui sÃ¨ment la terreur dans le pays, afin dâ€™Ã©viter les meurtres en prison.\r\nUne dÃ©cision qui intervient alors que les activitÃ©s criminelles ont repris de plus belle au Salvador, qui a vÃ©cu son week-end le plus sanglant depuis lâ€™arrivÃ©e au pouvoir du prÃ©sident Nayib Bukele, en juin 2019 : une soixantaine de personnes ont Ã©tÃ© tuÃ©es entre vendredi 24 et dimanche 26 avril. Cette vague dâ€™assassinats rompt avec le coup de frein constatÃ© ces derniers mois, notamment Ã  la faveur des mesures de confinement prises contre lâ€™Ã©pidÃ©mie due au coronavirus.', 'blog.jpg', 8, 1, '2020-04-28 21:58:09'),
(20, 'Robert Herbin, entraÃ®neur lÃ©gendaire de Saint-Etienne, est mort', 'Â« HospitalisÃ© depuis plusieurs jours, il sâ€™est Ã©teint ce 27 avril (â€¦) lÃ¢chÃ© par son cÅ“ur Â», a rapportÃ© le journal rÃ©gional Le ProgrÃ¨s, sur son site internet. Robert Herbin Ã©tait hospitalisÃ© depuis mardi dernier au CHU de Saint-Ã‰tienne pour de sÃ©rieuses insuffisances cardiaques et pulmonaires, sans lien avec lâ€™Ã©pidÃ©mie de coronavirus.\r\nHerbin a remportÃ© cinq titres de champion de France comme joueur et quatre autres en tant quâ€™entraÃ®neur. Soit neuf sur les dix sacres du club, ainsi que six Coupes de France. Il a Ã©galement disputÃ© la Coupe du monde 1966 en Angleterre avec lâ€™Ã©quipe de France (23 sÃ©lections, 3 buts).\r\nLâ€™affaire de la fameuse Â« caisse noire Â» des Verts durant la saison 1982-1983, pendant laquelle il est en conflit avec le prÃ©sident Roger Rocher, a provoquÃ© la fin de sa collaboration avec lâ€™ASSE. Par la suite, son parcours a Ã©tÃ© moins glorieux.\r\n', 'blog.jpg', 8, 2, '2020-04-28 22:01:35'),
(21, 'Ligue 1 : Canal+ et BeIN vont payer les matchs dÃ©jÃ  diffusÃ©s', 'Câ€™est la fin dâ€™un feuilleton qui a animÃ© un football franÃ§ais Ã  lâ€™arrÃªt pendant le confinement. Les quatre prÃ©sidents de clubs mandatÃ©s par le bureau de la Ligue de football professionnel (LFP), Nasser al-KhelaÃ¯fi (PSG), Jacques-Henri Eyraud (OM), Olivier Sadran (Toulouse) et Jean-Pierre RivÃ¨re (Nice), sont parvenus Ã  sâ€™entendre avec Canal+ et BeIN Sports, ce vendredi.\r\nLa LFP et Canal+ ont annoncÃ© dans un communiquÃ© avoir trouvÃ© un accord sur le versement des droits TV pour les matches dÃ©jÃ  diffusÃ©s de Ligue 1 et de Ligue 2, estimÃ©s Ã  43 millions dâ€™euros.\r\nCette annonce intervient alors que la Ligue 1 espÃ¨re reprendre lâ€™entraÃ®nement lors de la semaine du 11 mai, suite Ã  la levÃ©e progressive du confinement, avant un Ã©ventuel redÃ©marrage de la compÃ©tition mi-juin. Lâ€™objectif Ã©tant de terminer la saison (arrÃªtÃ©e Ã  la 28e journÃ©e) afin de percevoir les droits TV restant dus. La prochaine traite, dâ€™un total de 140 millions dâ€™euros (rÃ©partie entre Canal+ et BeIN Sports), est attendue le 5 juin.', 'blog.jpg', 8, 2, '2020-04-28 22:06:36');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `nom`) VALUES
(1, 'news'),
(2, 'foot');

-- --------------------------------------------------------

--
-- Structure de la table `commentaires`
--

DROP TABLE IF EXISTS `commentaires`;
CREATE TABLE IF NOT EXISTS `commentaires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `commentaires` varchar(1024) NOT NULL,
  `id_utilisateur` int(11) NOT NULL,
  `id_article` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `commentaires`
--

INSERT INTO `commentaires` (`id`, `commentaires`, `id_utilisateur`, `id_article`, `date`) VALUES
(13, 'cambiasso on taime', 7, 10, '2020-04-27 23:47:20'),
(14, 'vien a lom', 7, 10, '2020-04-27 23:50:48'),
(16, 'BB', 7, 10, '2020-04-27 23:57:05'),
(20, 'esteban', 8, 10, '2020-04-28 22:07:30');

-- --------------------------------------------------------

--
-- Structure de la table `droits`
--

DROP TABLE IF EXISTS `droits`;
CREATE TABLE IF NOT EXISTS `droits` (
  `id` int(11) NOT NULL,
  `nom` varchar(80) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `droits`
--

INSERT INTO `droits` (`id`, `nom`) VALUES
(1, 'utilisateur'),
(42, 'modérateur'),
(1337, 'administrateur');

-- --------------------------------------------------------

--
-- Structure de la table `utilisateurs`
--

DROP TABLE IF EXISTS `utilisateurs`;
CREATE TABLE IF NOT EXISTS `utilisateurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `id_droits` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`id`, `login`, `password`, `email`, `id_droits`) VALUES
(3, 'thomas', '7b964cd933b2cc9106deabd4641111826cfbc094', 'thomasberto21@gmail.com', 42),
(2, 'el loco', 'e2d75b01c33ae9e173fc5668b6312bb25367f304', 'tonymontan@gmail.com', 1),
(4, 'messi', 'e9db499e13ac90573163837d2fb1fc9f85402d6d', 'thomasberto21@gmail.com', 1),
(8, 'ines', '8585746e657f20beb49af25498340112be82aa9c', 'ines@gmail.com', 1337),
(9, 'lolo', '8aa40001b9b39cb257fe646a561a80840c806c55', '', 1),
(7, 'pape', '54cf1edf1143872699c8b24cfc4bf05ead9e0365', '', 42);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
