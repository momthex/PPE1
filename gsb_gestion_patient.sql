-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  Dim 15 mars 2020 à 14:18
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
-- Base de données :  `gsb_gestion_patient`
--

-- --------------------------------------------------------

--
-- Structure de la table `docteur`
--

DROP TABLE IF EXISTS `docteur`;
CREATE TABLE IF NOT EXISTS `docteur` (
  `id_personne` int(100) NOT NULL,
  KEY `fk_id_personne` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `docteur`
--

INSERT INTO `docteur` (`id_personne`) VALUES
(1),
(2);

-- --------------------------------------------------------

--
-- Structure de la table `patient`
--

DROP TABLE IF EXISTS `patient`;
CREATE TABLE IF NOT EXISTS `patient` (
  `id_personne` int(100) NOT NULL,
  KEY `fk_id_personne_patient` (`id_personne`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `patient`
--

INSERT INTO `patient` (`id_personne`) VALUES
(3),
(4),
(5),
(6);

-- --------------------------------------------------------

--
-- Structure de la table `personne`
--

DROP TABLE IF EXISTS `personne`;
CREATE TABLE IF NOT EXISTS `personne` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `login` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `prenom` varchar(50) NOT NULL,
  `nom` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `personne`
--

INSERT INTO `personne` (`id`, `login`, `password`, `prenom`, `nom`) VALUES
(1, 'doc1', 'd66d38d32522d83a27b5e1a3f16b4eda167fbaa3b1c91d85e9daa767289fc00aaa370f73a2b169dfea28908fac253dd5341eed8801eaa599aa03051d8031dcbd', 'Gregory', 'House'),
(2, 'doc2', '833f65c943b42ffd4af7cf3b51941c1ab8a114ff58f293d9acb084f16d95ed1680e1eda25c3a27b3fa569fdac820af040d840eb595c355df67a02924b43767e7', 'Shaun', 'Murphy'),
(3, 'pat1', '22282e8477594d09118da9d25c7e0e9e8c7986174f7969adfc016618a5863abcad13d8bc822b24e5bec28968876186aaa9fb5ce522c8e3993210e798f805abac', 'Walter', 'Withe'),
(4, 'pat2', '384312bcf8773821e32ceabd1675475cb32e3c9dc5b4eed6b3c99523c500899506b14adb7a2b79182df9612ecd736ea19b0ab0a347f2c36cb4675e6f9df6ec2f', 'Olivier', 'Dubois'),
(5, 'pat3', '06c2274a62816a8dfe3303a92564c49780dcc39853736edc6be0c9e46a9b942151051561d493748f892269e43f03f25a6c3bd47e8093ca400c3e6f53b727e16c', 'Norman', 'Bates'),
(6, 'pat4', '035fcc3f5f6faf2b8a2e8adaf2587b052a52fd45f534ba8b21310a00d242bdebe44b67271c9ce1388346c23fa1cc77d1c905fd8b49d4a66e85c9ee1b96ae990c', 'Teddy', 'Daniels');

-- --------------------------------------------------------

--
-- Structure de la table `rendez_vous`
--

DROP TABLE IF EXISTS `rendez_vous`;
CREATE TABLE IF NOT EXISTS `rendez_vous` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` datetime NOT NULL,
  `commentaire` varchar(200) NOT NULL,
  `id_docteur` int(100) NOT NULL,
  `id_patient` int(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_id_personne_patient_rdv` (`id_patient`),
  KEY `fk_id_personne_docteur_rdv` (`id_docteur`)
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `rendez_vous`
--

INSERT INTO `rendez_vous` (`id`, `date`, `commentaire`, `id_docteur`, `id_patient`) VALUES
(1, '2020-10-16 15:30:00', 'Plâtre au bras', 2, 4),
(2, '2020-05-28 09:15:00', 'Suivi chimiothérapie', 1, 3),
(37, '2020-06-10 10:30:00', 'Contrôle', 1, 4),
(38, '2020-08-04 13:20:00', 'Thérapie', 2, 5),
(39, '2020-07-23 10:00:00', 'Thérapie', 1, 6);

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `docteur`
--
ALTER TABLE `docteur`
  ADD CONSTRAINT `fk_id_personne` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `patient`
--
ALTER TABLE `patient`
  ADD CONSTRAINT `fk_id_personne_patient` FOREIGN KEY (`id_personne`) REFERENCES `personne` (`id`);

--
-- Contraintes pour la table `rendez_vous`
--
ALTER TABLE `rendez_vous`
  ADD CONSTRAINT `fk_id_personne_docteur_rdv` FOREIGN KEY (`id_docteur`) REFERENCES `docteur` (`id_personne`),
  ADD CONSTRAINT `fk_id_personne_patient_rdv` FOREIGN KEY (`id_patient`) REFERENCES `patient` (`id_personne`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
