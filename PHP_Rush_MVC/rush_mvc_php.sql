-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Client :  localhost
-- Généré le :  Jeu 30 Novembre 2017 à 12:00
-- Version du serveur :  5.7.19-0ubuntu0.16.04.1
-- Version de PHP :  7.0.22-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `rush_mvc_php`
--

-- --------------------------------------------------------

--
-- Structure de la table `articles`
--

CREATE TABLE `articles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `article_Title` varchar(255) NOT NULL,
  `article_Description` text,
  `article_AuthorID` bigint(20) NOT NULL,
  `article_CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_ModificationDate` date NOT NULL,
  `article_Tags` text NOT NULL,
  `article_CategoryID` bigint(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `articles`
--

INSERT INTO `articles` (`id`, `article_Title`, `article_Description`, `article_AuthorID`, `article_CreationDate`, `article_ModificationDate`, `article_Tags`, `article_CategoryID`) VALUES
(1, 'ARTICLE 1', 'ceci est un article', 1, '2017-11-30 11:51:01', '2017-11-30', '#article #blog', 1);

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_Name` varchar(255) NOT NULL,
  `category_ParentID` bigint(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `categories`
--

INSERT INTO `categories` (`id`, `category_Name`, `category_ParentID`) VALUES
(1, 'CATEGORY 1', NULL);

-- --------------------------------------------------------

--
-- Structure de la table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comment_Content` text NOT NULL,
  `comment_Article ID` bigint(20) NOT NULL,
  `comment_AuthorID` bigint(20) NOT NULL,
  `comment_CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `comment_ModificationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `comments`
--

INSERT INTO `comments` (`id`, `comment_Content`, `comment_Article ID`, `comment_AuthorID`, `comment_CreationDate`, `comment_ModificationDate`) VALUES
(1, 'ceci est un commentaire', 1, 1, '2017-11-30 11:54:28', '2017-11-30');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_Name` varchar(255) NOT NULL,
  `user_Email` varchar(255) NOT NULL,
  `user_Password` varchar(255) NOT NULL,
  `user_Group` varchar(255) NOT NULL DEFAULT 'guest',
  `user_Status` varchar(255) NOT NULL DEFAULT 'allowed',
  `user_CreationDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `user_ModificationDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Contenu de la table `users`
--

INSERT INTO `users` (`id`, `user_Name`, `user_Email`, `user_Password`, `user_Group`, `user_Status`, `user_CreationDate`, `user_ModificationDate`) VALUES
(1, 'coco', 'coco@coco.com', 'coco', 'admin', 'allowed', '2017-11-30 11:38:00', '2017-11-30'),
(2, 'titi', 'titi@titi.com', 'titi', 'user', 'allowed', '2017-11-30 11:55:23', '2017-11-30'),
(3, 'papa', 'papa@papa.com', 'papa', 'writer', 'allowed', '2017-11-30 11:56:04', '2017-11-30'),
(4, 'toto', 'toto@toto.com', 'toto', 'visitor', 'allowed', '2017-11-30 11:56:56', '2017-11-30'),
(5, 'pitou', 'pitou@pitou.com', 'pitou', 'user', 'banished', '2017-11-30 11:57:58', '2017-11-30');

--
-- Index pour les tables exportées
--

--
-- Index pour la table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
