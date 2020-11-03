-- phpMyAdmin SQL Dump
-- version 4.9.3
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:8889
-- Généré le :  mar. 13 oct. 2020 à 14:24
-- Version du serveur :  5.7.26
-- Version de PHP :  7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE DATABASE simplon_marketplace;
-- --------------------------------------------------------

--
-- Structure de la table `brands`
--

CREATE TABLE `brands` (
  `brand_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `category_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `categories_products`
--

CREATE TABLE `categories_products` (
  `category_name` varchar(255) NOT NULL,
  `code_ean_13` bigint NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

CREATE TABLE `products` (
  `code_ean_13` bigint NOT NULL,
  `product_name` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) DEFAULT NULL,
  `long_description` varchar(255) DEFAULT NULL,
  `brand_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `products_sellers`
--

CREATE TABLE `products_sellers` (
  `id_seller` int(11) NOT NULL,
  `code_ean_13` bigint NOT NULL,
  `price_ht` float DEFAULT NULL,
  `shipping_ht` float DEFAULT NULL,
  `stock` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Structure de la table `sellers`
--

CREATE TABLE `sellers` (
  `id_seller` int(11) NOT NULL,
  `seller_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
  ADD KEY `code_ean_13` (`code_ean_13`);

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
  MODIFY `id_seller` int(11) NOT NULL AUTO_INCREMENT;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `categories_products`
--
ALTER TABLE `categories_products`
  ADD CONSTRAINT `categories_products_ibfk_1` FOREIGN KEY (`category_name`) REFERENCES `categories` (`category_name`),
  ADD CONSTRAINT `categories_products_ibfk_2` FOREIGN KEY (`code_ean_13`) REFERENCES `products` (`code_ean_13`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_name`) REFERENCES `brands` (`brand_name`);

--
-- Contraintes pour la table `products_sellers`
--
ALTER TABLE `products_sellers`
  ADD CONSTRAINT `products_sellers_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `sellers` (`id_seller`),
  ADD CONSTRAINT `products_sellers_ibfk_2` FOREIGN KEY (`code_ean_13`) REFERENCES `products` (`code_ean_13`);
