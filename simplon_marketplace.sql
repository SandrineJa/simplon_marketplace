-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost
-- Généré le : mar. 17 nov. 2020 à 18:41
-- Version du serveur :  10.4.13-MariaDB
-- Version de PHP : 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `simplon_marketplace`
--

-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `brand_name` varchar(255) NOT NULL DEFAULT 'inconnue'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `brands`
--

INSERT INTO `brands` (`brand_name`) VALUES
('Adidas'),
('Apple'),
('Burberry'),
('Friskies'),
('Kinder'),
('Lenovo'),
('Nike'),
('Zadig');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`category_name`) VALUES
('Chaussures'),
('Croquettes'),
('Informatique'),
('Mode'),
('Nourriture'),
('Sacs à main');

-- --------------------------------------------------------

--
-- Structure de la table `categories_products`
--

CREATE TABLE `categories_products` (
  `category_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `code_ean_13` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Déchargement des données de la table `categories_products`
--

INSERT INTO `categories_products` (`category_name`, `code_ean_13`) VALUES
('Chaussures', 987654321234),
('Chaussures', 1234567890987),
('Chaussures', 4563487564567),
('Croquettes', 6753498653567),
('Informatique', 3908672347652),
('Informatique', 4563458769564),
('Mode', 987654321234),
('Mode', 1094822512345),
('Mode', 1234567890987),
('Mode', 4563487564567),
('Mode', 5647864589123),
('Nourriture', 5050607040302),
('Nourriture', 7658765674598),
('Sacs à main', 1094822512345),
('Sacs à main', 5647864589123);

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `code_ean_13` bigint(11) NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products`
--

INSERT INTO `products` (`code_ean_13`, `product_name`, `short_description`, `long_description`, `brand_name`) VALUES
(987654321234, 'Baskets Gazelle', 'Baskets Gazelle bleues', 'Véritable must-have, la Gazelle est née sur les terrains de football avant de s\'imposer dans l’univers streetwear. ', 'Adidas'),
(1094822512345, 'Sac en bandoulière en cuir', 'Cuir noir', 'Sac bandoulière de la marque BURBERRY, bi-matières (cuir et toile coton ), la doublure est en daim. Il dispose d’une tige en cuir ajustable, vous pouvez ainsi le porter en sac à main, pochette ou bandoulière.', 'Burberry'),
(1234567890987, 'Baskets Stan Smith', 'Stan Smith blanches', 'Lorsque la Stan Smith adidas a fait son entrée sur les courts de tennis dans les années 70, personne ne s\'attendait à un tel impact. Aujourd\'hui, elle est résolument tournée vers l\'avenir avec un design conçu pour réduire le gaspillage de matières. ', 'Adidas'),
(3908672347652, 'MacBook Pro 13\"', 'Core 2 Duo 2,26 GHz - HDD 250 Go - 4 Go AZERTY - Français ', 'Taille écran (pouces) : 13,3\r\nFormat de l\'écran : 16/10\r\nRésolution : 1280x800\r\nCapacité de stockage : 250 Go\r\nMémoire : 4 Go ', 'Apple'),
(4563458769564, 'THINKPAD X250 12', 'Core i5 2,3 GHz - HDD 500 Go - 4 Go AZERTY - Français ', 'Capacité de stockage : 500 Go\r\nMémoire : 4 Go\r\nModèle : THINKPAD X250\r\nMarque du processeur : Intel\r\nType du processeur : Core i5 ', 'Lenovo'),
(4563487564567, 'Nike Air Force 1 07', 'Couleur : blanche ou noire', 'Le basketball dans le parc, le barbecue du dimanche et le soleil. Le charme continue à opérer avec la Nike Air Force 1 \'07. Cette silhouette iconique du basketball revisite ses éléments les plus emblématique.', 'Nike'),
(5050607040302, 'Calendrier Kinder Happy Moments 133G', '4 Kinder Schoko-Bons, 5 Kinder Country mini, 5 Kinder Chocolat mini, 5 Kinder Bueno mini, 5 Kinder Bueno white mini', 'Après le succès de la boîte Kinder Happy Moments, l’assortiment de vos Kinder minis préférés se trouve dans ce calendrier en forme de sapin. Son contenu et ses deux designs élégants plairont à coup sûr aux grands gourmands.', 'Kinder'),
(5647864589123, 'Sac à main ZD', 'Sac à main en cuir', 'Sac Zadig et Voltaire en cuir noir sublime!\r\nModèle Twister.\r\nPlusieurs poches sur le devant et l\'intérieur.', 'Zadig'),
(6753498653567, 'Croquettes Friskies', 'Croquettes Friskies Chat au Bœuf, au Poulet & Légumes ajoutés 2kg', ' La personnalité unique de votre chat apporte quelque chose de vraiment spécial dans votre maison, rendant votre vie encore plus joyeuse.', 'Friskies'),
(7658765674598, 'Calendrier Kinder Pliable 127G', '11 Kinder Chocolat mini eggs, 11 Kinder mini eggs noisettes, 2 Kinder Chocolat.', 'Ce calendrier pratique et pliable vous suivra partout ! Et en plus d\'un assortiment de chocolats Kinder gourmands, découvrez en prime une belle histoire de Noël !', 'Kinder');

-- --------------------------------------------------------

--
-- Structure de la table `products_sellers`
--

CREATE TABLE `products_sellers` (
  `id_seller` int(11) NOT NULL,
  `code_ean_13` bigint(11) NOT NULL,
  `price_ht` float DEFAULT NULL,
  `shipping_ht` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `products_sellers`
--

INSERT INTO `products_sellers` (`id_seller`, `code_ean_13`, `price_ht`, `shipping_ht`, `stock`) VALUES
(1, 5050607040302, 14, 3, 100),
(1, 7658765674598, 12, 3, 35),
(2, 1094822512345, 250, 6, 1),
(2, 5647864589123, 389, 8, 66),
(5, 6753498653567, 9, 4, 500),
(6, 987654321234, 80, 5, 38),
(6, 1234567890987, 60, 8, 22),
(6, 4563487564567, 90, 8, 52),
(7, 3908672347652, 1300, 0, 112),
(7, 4563458769564, 399, 7, 5);

-- --------------------------------------------------------

--
-- Structure de la table `sellers`
--

CREATE TABLE `sellers` (
  `id_seller` int(11) NOT NULL,
  `seller_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `sellers`
--

INSERT INTO `sellers` (`id_seller`, `seller_name`) VALUES
(1, 'Jeff HUN'),
(2, 'SAM ONE'),
(5, 'CatOrDog'),
(6, 'SADIDA'),
(7, 'SIMPLON');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_name`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_name`);

--
-- Index pour la table `categories_products`
--
ALTER TABLE `categories_products`
  ADD PRIMARY KEY (`category_name`,`code_ean_13`),
  ADD KEY `categories_products_ibfk_2` (`code_ean_13`);

--
-- Index pour la table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`code_ean_13`),
  ADD KEY `brand_name` (`brand_name`);

--
-- Index pour la table `products_sellers`
--
ALTER TABLE `products_sellers`
  ADD PRIMARY KEY (`id_seller`,`code_ean_13`),
  ADD KEY `code_ean_13` (`code_ean_13`);

--
-- Index pour la table `sellers`
--
ALTER TABLE `sellers`
  ADD PRIMARY KEY (`id_seller`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `sellers`
--
ALTER TABLE `sellers`
  MODIFY `id_seller` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories_products`
--
ALTER TABLE `categories_products`
  ADD CONSTRAINT `categories_products_ibfk_1` FOREIGN KEY (`category_name`) REFERENCES `categories` (`category_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `categories_products_ibfk_2` FOREIGN KEY (`code_ean_13`) REFERENCES `products` (`code_ean_13`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_name`) REFERENCES `brands` (`brand_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Contraintes pour la table `products_sellers`
--
ALTER TABLE `products_sellers`
  ADD CONSTRAINT `products_sellers_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `sellers` (`id_seller`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `products_sellers_ibfk_2` FOREIGN KEY (`code_ean_13`) REFERENCES `products` (`code_ean_13`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
