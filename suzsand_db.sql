-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le :  Dim 21 juil. 2019 à 20:01
-- Version du serveur :  5.7.24
-- Version de PHP :  7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `suzsand_db`
--

-- --------------------------------------------------------

--
-- Structure de la table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `nom` varchar(10) NOT NULL,
  `prenom` varchar(20) NOT NULL,
  `email` varchar(25) NOT NULL,
  `passwords` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `admin`
--

INSERT INTO `admin` (`id`, `nom`, `prenom`, `email`, `passwords`) VALUES
(1, 'KONE', 'Kevin', 'kevinkone19@gmail.com', '4b3c9c9d887f09a792af9f041463d4c8'),
(2, 'Dylan', 'kevin', 'konekevin19@gmail.com', '4b3c9c9d887f09a792af9f041463d4c8'),
(3, 'Morel', 'Jean', 'jeanMorel19@glail.com', '*00A51F3F48415C7D4E8908980D443C29C69B60C9');

-- --------------------------------------------------------

--
-- Structure de la table `clientnewsletter`
--

CREATE TABLE `clientnewsletter` (
  `id` int(11) NOT NULL,
  `email` varchar(25) NOT NULL,
  `status` varchar(5) NOT NULL DEFAULT 'new'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `clientnewsletter`
--

INSERT INTO `clientnewsletter` (`id`, `email`, `status`) VALUES
(1, 'kevinkone19@gmail.com', 'old'),
(3, 'dylan7729@gmail.com', '0'),
(4, 'tatouyves@gmail.com', '0');

-- --------------------------------------------------------

--
-- Structure de la table `commande`
--

CREATE TABLE `commande` (
  `id` int(11) NOT NULL,
  `nomPrenom` varchar(50) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `articleCommande` varchar(50) NOT NULL,
  `nombrePlats` int(11) NOT NULL,
  `lieuLivraison` varchar(250) NOT NULL,
  `totalCommande` bigint(20) NOT NULL,
  `prixArticle` bigint(20) NOT NULL,
  `dateCommande` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `etatCommande` varchar(25) NOT NULL DEFAULT 'En attente de traitement'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `commande`
--

INSERT INTO `commande` (`id`, `nomPrenom`, `contact`, `articleCommande`, `nombrePlats`, `lieuLivraison`, `totalCommande`, `prixArticle`, `dateCommande`, `etatCommande`) VALUES
(1, 'Kone Kevin', '77298466', 'Sandwich au poulet', 2, 'Yopougon - Lokoa', 7500, 3000, '2019-06-02 20:43:07', 'commande traité'),
(2, 'Kone Kevin', '09000900', 'sandwich a la salade', 1, 'Angré - Nouveau CHU', 7000, 6000, '2019-06-03 18:29:04', 'commande annulée'),
(3, 'Kone Kevin', '77298466', 'Sandwich', 3, 'Riviera - Faya', 11500, 3500, '2019-06-14 00:33:41', 'commande annulée');

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `commandeliste`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `commandeliste` (
`id` int(11)
,`nomPrenom` varchar(50)
,`contact` varchar(15)
,`articleCommande` varchar(50)
,`prixArticle` bigint(20)
,`dateCommande` datetime
);

-- --------------------------------------------------------

--
-- Structure de la table `contacter`
--

CREATE TABLE `contacter` (
  `id` int(11) NOT NULL,
  `nom` varchar(20) NOT NULL,
  `prenom` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `sujet` text NOT NULL,
  `messages` text NOT NULL,
  `date_jour` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status_msg` varchar(10) NOT NULL DEFAULT 'non vue'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `contacter`
--

INSERT INTO `contacter` (`id`, `nom`, `prenom`, `email`, `sujet`, `messages`, `date_jour`, `status_msg`) VALUES
(1, 'KONE', 'Kevin', 'kevinkone19@gmai.com', 'Commentaire', 'La fonction PHP suivante peut.\r\n\r\n', '2019-05-14 09:45:24', 'vue'),
(2, 'Toubene', 'Morel', 'morel@gmaail.com', 'Commentaire', 'Nous allons tres bien et chez vous ?', '2019-05-14 09:45:24', 'vue'),
(3, 'Jean', 'Olivier', 'oliverjean14@gmail.com', 'Demande d\'information', 'comment vous allez', '2019-05-14 09:50:10', 'vue'),
(4, 'Yves', 'Roland', 'rolandyves90@gmail.com', 'Commentaire', 'Votre sandwich a la salde est tres delicieux. Merci pour cette rectte.', '2019-05-14 11:42:48', 'vue'),
(5, 'Tatou', 'Yves', 'tatouyves@gmail.com', 'Commentaire', 'Comment vous allez messieurs ?', '2019-05-17 14:57:46', 'vue'),
(6, 'Charle', 'Marie', 'mariecharle@gmail.com', 'Commentaire', 'je viens d\'arrivée au bureau\r\n', '2019-05-18 10:55:28', 'vue'),
(7, 'KONE', 'Dylan', 'kevinkone19@gmail.com', 'Compliments', 'Utilisez les styles de boutons personnalisés de Bootstrap pour les actions de formulaires, de boîtes de dialogue et autres, avec la prise en charge de plusieurs tailles, états, etc.', '2019-05-25 15:25:11', 'vue'),
(8, 'KONE', 'Kevin', 'kevinkone19@gmail.com', 'Commentaire', 'Bonjour Madame, Merci pour le repas d\'hier.', '2019-06-01 10:32:41', 'vue'),
(9, 'Morel', 'Jean', 'jeanmorel@gmail.com', 'Information', 'BlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBlaBla', '2019-06-01 10:44:29', 'vue'),
(10, 'TATOU', 'Guillaume', 'guillaumetatou@gmail.com', 'Félicitation', 'Bonjour Madame je viens par ce message vous dire merci pour vos délicieux Sandwich que vous nous faites dégusté a chaque jours.\r\nTout mes encouragement a vous.\r\nJe tenais a vous informé aussi que je vous suis sur tout les réseaux sociaux.\r\nMerci et Merci encore. ', '2019-06-01 11:08:45', 'non vue'),
(11, 'JAMES', 'Dylan', 'jamesdylan77@gmail.com', 'Commentaire', 'A Boolean indicating whether to place the animation in the effects queue. If false, the animation will begin immediately. As of jQuery 1.7, the queue option can also accept a string, in which case the animation is added to the queue represented by that string. When a custom queue name is used the ', '2019-06-05 11:46:58', 'vue'),
(12, 'Yao', 'Helene', 'yaohelene20@gmail.com', 'Encourragement', 'A function to be called for each animated property of each animated element. This function provides an opportunity to modify the Tween object to change the value of the property before it is set.', '2019-06-05 12:02:48', 'vue'),
(13, 'Yves', 'Jean', 'jeanyves19@gmail.com', 'Encourragement', 'vhrejjfkkf', '2019-07-20 16:22:49', 'non vue');

-- --------------------------------------------------------

--
-- Structure de la table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `codeMenu` varchar(20) NOT NULL,
  `libelleMenu` varchar(200) NOT NULL,
  `descriptionMenu` text NOT NULL,
  `prix` bigint(20) NOT NULL,
  `photoMenu` text NOT NULL,
  `upDate_date` date NOT NULL DEFAULT '2019-05-27'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `menu`
--

INSERT INTO `menu` (`id`, `codeMenu`, `libelleMenu`, `descriptionMenu`, `prix`, `photoMenu`, `upDate_date`) VALUES
(14, 'sand1', 'Sandwich au poulet', 'Du bon Sandwich au poulet près a être mangé', 5500, '5.jpg', '2019-06-09'),
(17, 'Sand2', 'Sandwich', 'Votre sandwich bien fait', 3500, '1.jpg', '2019-06-09'),
(18, 'kfc1', 'Zinger', 'Du bon Zinger fait par le célèbre restaurant KFC', 5000, 'zinger.jpg', '2019-06-04'),
(19, 'kfc2', 'Sandwich Krunchy', 'Sandwich Krunchy très délicieux ', 2500, 'krunchy_sandwich.jpg', '2019-06-04'),
(20, ' kfc3', 'Kentucki Friend Chicken', 'Du très bon poulet de KFC', 15000, 'kfc1_kentucky_frien_chicken.jpg', '2019-06-04');

-- --------------------------------------------------------

--
-- Structure de la table `region_livraison`
--

CREATE TABLE `region_livraison` (
  `id` int(11) NOT NULL,
  `region` varchar(255) NOT NULL,
  `montant_livraison` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `region_livraison`
--

INSERT INTO `region_livraison` (`id`, `region`, `montant_livraison`) VALUES
(1, '2 Plateaux - 7ème Tranche', 1000),
(2, '2 Plateaux - Agban', 1000),
(3, '2 Plateaux - Aghien', 1000),
(4, '2 Plateaux - Latrille', 1000),
(5, '2 Plateaux - Vallon', 1000),
(6, 'Adjamé - 220 Logement', 1500),
(7, 'Adjamé - Fraternité Matin', 1500),
(8, 'Adjamé - Mairie - Forum', 1500),
(9, 'Adjamé - Williamsville', 1500),
(10, 'Adjamé - Fraternité Martin', 1000),
(11, 'Angré - 8ème Tranche', 1000),
(12, 'Angré - Chateau', 1000),
(13, 'Angré - CNPS', 1000),
(14, 'Angré - Nouveau CHU', 1000),
(15, 'Angré - Plateau Dokui', 1000),
(16, 'Angré - SICOGI', 1000),
(17, 'Cocody - Blockauss/Hotel Ivoire', 1000),
(18, 'Cocody - Danga', 1000),
(19, 'Cocody - Mermoz', 1000),
(20, 'Cocody - Université FHB', 1000),
(21, 'Koumassi - Campement', 1500),
(22, 'Koumassi - Grand-Marché', 1500),
(23, 'Koumassi - Mairie/Grande Mosquée', 1500),
(24, 'Koumassi - Nord-Est', 1500),
(25, 'Koumassi - Remblais', 1500),
(26, 'Koumassi - SICOGI', 1500),
(27, 'Koumassi - SOPIM', 1500),
(28, 'Koumassi - Zone Industrielle', 1500),
(29, 'Marcory - Anoumabo', 1500),
(30, 'Marcory - Centre Commercial / GFCI', 1500),
(31, 'Marcory - Champroux', 1500),
(32, 'Marcory - Marcory Résidentiel', 1500),
(33, 'Marcory - SICOGI / Remblais', 1500),
(34, 'Plateau Centre - Sorbon / Tiama', 1500),
(35, 'Plateau Nord - Cathédrale / Indenié', 1500),
(36, 'Plateau Sud - Commerce', 1500),
(37, 'Port-Bouet - Abattoire / BIMA', 2000),
(38, 'Port-Bouet - Aéroport FHB', 2000),
(39, 'Port-Bouet - Cité Universitaire', 2000),
(40, 'Port-Bouet - ZI de Vridi / SIR', 2000),
(41, 'Riviera - Akouédo', 1000),
(42, 'Riviera - Attoban', 1000),
(43, 'Riviera - Bonoumin', 1000),
(44, 'Riviera - Faya', 1000),
(45, 'Riviera - Bonoumin', 1000),
(46, 'Riviera - Golf', 1000),
(47, 'Riviera - M\'Badon', 1000),
(48, 'Riviera - Nouveau Camp', 1000),
(49, 'Riviera - Palmeraie SIPIM 1,2,3', 1000),
(50, 'Riviera - Riviera 2', 1000),
(51, 'Riviera - Riviera 3', 1000),
(52, 'Riviera - Riviera 4', 1000),
(53, 'Riviera Faya -Cité Laurier', 1000),
(54, 'Riviera - M\'Pouto Sol Benie', 1000),
(55, 'Riviera Palmeraie - Rosier 1,2,3,4,5,6', 1000),
(56, 'Riviera - Riviera 2', 1000),
(57, 'Riviera Palmeraie SIPIM 4 - Complexe', 1000),
(58, 'Treichville - Terminal de Vridi', 1500),
(59, 'Treichville - CHU / Gare de Bassam', 1500),
(60, 'Treichville - Marchés', 1500),
(61, 'Treichville - Zone Portuaire', 1500),
(62, 'Yopougon - 1er Pont', 1500),
(63, 'Yopougon - Academie', 1500),
(64, 'Yopougon - Ananeraie', 1500),
(65, 'Yopougon - Azito', 1500),
(66, 'Yopougon - Cité Abdoulaye Diallo', 1500),
(67, 'Yopougon - Cité Verte', 1500),
(68, 'Yopougon - Ficgayo', 1500),
(69, 'Yopougon - Lièvre Rouge', 1500),
(70, 'Yopougon - Lokoa', 1500),
(71, 'Yopougon - Mamie Adjoua Batim', 1500),
(72, 'Yopougon - Maroc', 1500),
(73, 'Yopougon - Millionnaire', 1500),
(74, 'Yopougon - Niangon', 1500),
(75, 'Yopougon - Nouveau Quartier', 1500),
(76, 'Yopougon - Oasis', 1500),
(77, 'Yopougon - Port-Bouet 2', 1500),
(78, 'Yopougon - Selmer', 1500),
(79, 'Yopougon - Sicogi', 1500),
(80, 'Yopougon - Sideci', 1500),
(81, 'Yopougon - Sogephia', 1500),
(82, 'Yopougon - Toit Rouge', 1500),
(83, 'Yopougon - Zone industrielle - Sotra', 1500),
(84, 'Yopougon - Zone industrielle Feu', 1500),
(85, 'Yopougon - Zone industrielle MACA', 1500),
(86, 'Yopougon - Zone industrielle - MICAO', 1500),
(87, 'Yopougon - Zone industrielle IDC', 1500),
(88, 'Zone - Abobo', 1500),
(89, 'Zone 4 - Bietry', 1500),
(90, 'Zone 4 - Cap Sud / Mairie', 1500),
(91, 'Zone 4 - Paul Langevin', 1500);

-- --------------------------------------------------------

--
-- Structure de la vue `commandeliste`
--
DROP TABLE IF EXISTS `commandeliste`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `commandeliste`  AS  select `commande`.`id` AS `id`,`commande`.`nomPrenom` AS `nomPrenom`,`commande`.`contact` AS `contact`,`commande`.`articleCommande` AS `articleCommande`,`commande`.`prixArticle` AS `prixArticle`,`commande`.`dateCommande` AS `dateCommande` from `commande` where (`commande`.`etatCommande` = 'En attente de traitement') ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `clientnewsletter`
--
ALTER TABLE `clientnewsletter`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Index pour la table `commande`
--
ALTER TABLE `commande`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `contacter`
--
ALTER TABLE `contacter`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `codeMenu` (`codeMenu`);

--
-- Index pour la table `region_livraison`
--
ALTER TABLE `region_livraison`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `clientnewsletter`
--
ALTER TABLE `clientnewsletter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `commande`
--
ALTER TABLE `commande`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT pour la table `contacter`
--
ALTER TABLE `contacter`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT pour la table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT pour la table `region_livraison`
--
ALTER TABLE `region_livraison`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=92;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
