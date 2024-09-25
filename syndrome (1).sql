-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : lun. 16 mai 2022 à 20:41
-- Version du serveur : 10.4.21-MariaDB
-- Version de PHP : 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `syndrome`
--

-- --------------------------------------------------------

--
-- Structure de la table `analyse`
--

CREATE TABLE `analyse` (
  `id_a` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `date` date NOT NULL,
  `protinierie` varchar(30) NOT NULL,
  `creatine` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `analyse`
--

INSERT INTO `analyse` (`id_a`, `id_c`, `date`, `protinierie`, `creatine`) VALUES
(4, 4, '0022-05-14', 'bas', 'normale');

-- --------------------------------------------------------

--
-- Structure de la table `consultation`
--

CREATE TABLE `consultation` (
  `id_c` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `id_e` int(11) NOT NULL,
  `date` date NOT NULL,
  `age_e` int(11) NOT NULL,
  `poids` int(11) NOT NULL,
  `observation` varchar(200) NOT NULL,
  `rdv` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `consultation`
--

INSERT INTO `consultation` (`id_c`, `id`, `id_e`, `date`, `age_e`, `poids`, `observation`, `rdv`) VALUES
(4, 6, 2, '2022-05-14', 10, 30, 'bien', '2022-05-29');

-- --------------------------------------------------------

--
-- Structure de la table `desiction`
--

CREATE TABLE `desiction` (
  `id_de` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `desiction`
--

INSERT INTO `desiction` (`id_de`, `id_c`, `nom`, `description`) VALUES
(10, 4, 'bechiri', 'G');

-- --------------------------------------------------------

--
-- Structure de la table `diagnostic`
--

CREATE TABLE `diagnostic` (
  `id_d` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `date` date NOT NULL,
  `oedeme` varchar(30) NOT NULL,
  `ta` int(11) NOT NULL,
  `protenierie` int(11) NOT NULL,
  `creatine` int(11) NOT NULL,
  `douleur` varchar(30) NOT NULL,
  `diverse` varchar(30) NOT NULL,
  `cu` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE `enfant` (
  `id_e` int(11) NOT NULL,
  `id_p` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `date_n` date NOT NULL,
  `sexe` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `enfant`
--

INSERT INTO `enfant` (`id_e`, `id_p`, `nom`, `Prenom`, `date_n`, `sexe`) VALUES
(2, 9, 'bechiri', 'yacine', '2000-02-05', 'homme');

-- --------------------------------------------------------

--
-- Structure de la table `medecin`
--

CREATE TABLE `medecin` (
  `id` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `specialite` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medecin`
--

INSERT INTO `medecin` (`id`, `nom`, `Prenom`, `specialite`, `telephone`, `email`, `password`) VALUES
(5, 'taref', 'bilel', '', 676689900, 'biloub999@gmail.com', '123456'),
(6, 'bechiri', 'yacine', '', 750232130, 'bechiri@hotmail.fr', '147');

-- --------------------------------------------------------

--
-- Structure de la table `medicament`
--

CREATE TABLE `medicament` (
  `id_med` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `type` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `medicament`
--

INSERT INTO `medicament` (`id_med`, `id_c`, `nom`, `type`) VALUES
(1, 4, 'doliprane', 'corticoide');

-- --------------------------------------------------------

--
-- Structure de la table `parent`
--

CREATE TABLE `parent` (
  `id_p` int(11) NOT NULL,
  `nom` varchar(30) NOT NULL,
  `Prenom` varchar(30) NOT NULL,
  `lien_P` varchar(30) NOT NULL,
  `telephone` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `parent`
--

INSERT INTO `parent` (`id_p`, `nom`, `Prenom`, `lien_P`, `telephone`, `email`, `password`) VALUES
(9, 'boumaza', 'ahmed', 'pere', 655646454, 'hmed@hotmail.fr', '123');

-- --------------------------------------------------------

--
-- Structure de la table `psologie`
--

CREATE TABLE `psologie` (
  `id_p` int(11) NOT NULL,
  `id_med` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `dose` int(11) NOT NULL,
  `repitition` varchar(30) NOT NULL,
  `date_d` date NOT NULL,
  `date_f` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `recomendation`
--

CREATE TABLE `recomendation` (
  `id_r` int(11) NOT NULL,
  `id_c` int(11) NOT NULL,
  `description` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Structure de la table `suivi_quotiidien`
--

CREATE TABLE `suivi_quotiidien` (
  `id_s` int(11) NOT NULL,
  `id_e` int(11) NOT NULL,
  `date` date NOT NULL,
  `ta` int(11) NOT NULL,
  `temperature` int(11) NOT NULL,
  `cu` varchar(30) NOT NULL,
  `prise_med` varchar(30) NOT NULL,
  `diverse` varchar(30) NOT NULL,
  `oedeme` varchar(30) NOT NULL,
  `douleur` varchar(30) NOT NULL,
  `poids` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `analyse`
--
ALTER TABLE `analyse`
  ADD PRIMARY KEY (`id_a`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD PRIMARY KEY (`id_c`),
  ADD KEY `id` (`id`),
  ADD KEY `id_e` (`id_e`);

--
-- Index pour la table `desiction`
--
ALTER TABLE `desiction`
  ADD PRIMARY KEY (`id_de`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `diagnostic`
--
ALTER TABLE `diagnostic`
  ADD PRIMARY KEY (`id_d`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD PRIMARY KEY (`id_e`),
  ADD KEY `id_p` (`id_p`);

--
-- Index pour la table `medecin`
--
ALTER TABLE `medecin`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD PRIMARY KEY (`id_med`),
  ADD KEY `id_c` (`id_c`) USING BTREE;

--
-- Index pour la table `parent`
--
ALTER TABLE `parent`
  ADD PRIMARY KEY (`id_p`);

--
-- Index pour la table `psologie`
--
ALTER TABLE `psologie`
  ADD PRIMARY KEY (`id_p`),
  ADD KEY `id_c` (`id_c`),
  ADD KEY `id_med` (`id_med`);

--
-- Index pour la table `recomendation`
--
ALTER TABLE `recomendation`
  ADD PRIMARY KEY (`id_r`),
  ADD KEY `id_c` (`id_c`);

--
-- Index pour la table `suivi_quotiidien`
--
ALTER TABLE `suivi_quotiidien`
  ADD PRIMARY KEY (`id_s`),
  ADD KEY `id_e` (`id_e`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `analyse`
--
ALTER TABLE `analyse`
  MODIFY `id_a` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `consultation`
--
ALTER TABLE `consultation`
  MODIFY `id_c` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT pour la table `desiction`
--
ALTER TABLE `desiction`
  MODIFY `id_de` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT pour la table `diagnostic`
--
ALTER TABLE `diagnostic`
  MODIFY `id_d` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `enfant`
--
ALTER TABLE `enfant`
  MODIFY `id_e` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `medecin`
--
ALTER TABLE `medecin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT pour la table `medicament`
--
ALTER TABLE `medicament`
  MODIFY `id_med` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT pour la table `parent`
--
ALTER TABLE `parent`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `psologie`
--
ALTER TABLE `psologie`
  MODIFY `id_p` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `recomendation`
--
ALTER TABLE `recomendation`
  MODIFY `id_r` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `suivi_quotiidien`
--
ALTER TABLE `suivi_quotiidien`
  MODIFY `id_s` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `analyse`
--
ALTER TABLE `analyse`
  ADD CONSTRAINT `analyse_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `consultation` (`id_c`);

--
-- Contraintes pour la table `consultation`
--
ALTER TABLE `consultation`
  ADD CONSTRAINT `consultation_ibfk_1` FOREIGN KEY (`id`) REFERENCES `medecin` (`id`),
  ADD CONSTRAINT `consultation_ibfk_2` FOREIGN KEY (`id_e`) REFERENCES `enfant` (`id_e`);

--
-- Contraintes pour la table `desiction`
--
ALTER TABLE `desiction`
  ADD CONSTRAINT `desiction_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `consultation` (`id_c`);

--
-- Contraintes pour la table `diagnostic`
--
ALTER TABLE `diagnostic`
  ADD CONSTRAINT `diagnostic_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `consultation` (`id_c`);

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `enfant_ibfk_1` FOREIGN KEY (`id_p`) REFERENCES `parent` (`id_p`);

--
-- Contraintes pour la table `medicament`
--
ALTER TABLE `medicament`
  ADD CONSTRAINT `medicament_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `consultation` (`id_c`);

--
-- Contraintes pour la table `psologie`
--
ALTER TABLE `psologie`
  ADD CONSTRAINT `psologie_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `consultation` (`id_c`),
  ADD CONSTRAINT `psologie_ibfk_2` FOREIGN KEY (`id_med`) REFERENCES `medicament` (`id_med`);

--
-- Contraintes pour la table `recomendation`
--
ALTER TABLE `recomendation`
  ADD CONSTRAINT `recomendation_ibfk_1` FOREIGN KEY (`id_c`) REFERENCES `consultation` (`id_c`);

--
-- Contraintes pour la table `suivi_quotiidien`
--
ALTER TABLE `suivi_quotiidien`
  ADD CONSTRAINT `suivi_quotiidien_ibfk_1` FOREIGN KEY (`id_e`) REFERENCES `enfant` (`id_e`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
