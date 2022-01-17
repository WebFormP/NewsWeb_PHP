-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le : lun. 17 jan. 2022 à 09:45
-- Version du serveur : 8.0.27
-- Version de PHP : 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Base de données : `newsweb`
--

--
-- Déchargement des données de la table `articles`
--

INSERT INTO `articles` (`art_id`, `art_titre`, `art_date`, `art_resume`, `art_texte`, `utilisateurs_util_id`) VALUES
(2, 'Suspendisse Enim Elit Tempor Acer', '2022-01-17 10:19:32', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis. Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis. Mauris sed lectus dui. ', 1),
(3, 'Mauris Sed Lectus Duieleifend Quis Sem', '2022-01-17 10:20:34', NULL, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis. Mauris sed lectus dui. Suspendisse enim elit, tempor ac ullamcorper et, eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis. Mauris sed lectus dui. Eleifend quis sem. Sed euismod sagittis ligula, a imperdiet sapien molestie nec. Curabitur ut eros a justo fermentum vulputate ac sit amet metus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut tempor, tortor at vulputate blandit, magna risus posuere turpis, nec cursus ipsum arcu nec felis. Mauris sed lectus dui. ', 1);

--
-- Déchargement des données de la table `utilisateurs`
--

INSERT INTO `utilisateurs` (`util_id`, `util_nom`, `util_login`, `util_motdepasse`) VALUES
(1, 'Pierre', 'pierre', 'pierre');
COMMIT;