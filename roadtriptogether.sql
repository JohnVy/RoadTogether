-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 21 nov. 2019 à 17:43
-- Version du serveur :  10.4.8-MariaDB
-- Version de PHP :  7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `roadtriptogether`
--

-- --------------------------------------------------------

--
-- Structure de la table `annonces`
--

CREATE TABLE `annonces` (
  `id` int(6) NOT NULL,
  `image_url` varchar(255) NOT NULL,
  `text_article` text NOT NULL,
  `categorie_article` varchar(255) NOT NULL,
  `active` int(1) NOT NULL,
  `start_date_article` date DEFAULT NULL,
  `end_date_article` date DEFAULT NULL,
  `publish_date_article` timestamp NOT NULL DEFAULT current_timestamp(),
  `available_article` int(2) NOT NULL,
  `price_article` int(3) NOT NULL,
  `start_travel_article` text NOT NULL,
  `end_travel_article` text NOT NULL,
  `city_article` text NOT NULL,
  `country_article` text NOT NULL,
  `author_article` int(11) NOT NULL,
  `road_article` text NOT NULL,
  `location_article` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `annonces`
--

INSERT INTO `annonces` (`id`, `image_url`, `text_article`, `categorie_article`, `active`, `start_date_article`, `end_date_article`, `publish_date_article`, `available_article`, `price_article`, `start_travel_article`, `end_travel_article`, `city_article`, `country_article`, `author_article`, `road_article`, `location_article`) VALUES
(3, 'images/image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 2, '2019-11-29', '2019-12-14', '2019-02-09 11:20:29', 3, 45, 'Paris', 'Varsovie', 'Varsovie', 'Pologne', 37, 'Bus', 'Airbnb'),
(4, 'images/image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-06-12', '2019-07-25', '2018-11-09 11:20:29', 1, 65, 'Dortmund', 'Hambourg', 'Düsseldorf', 'Allemagne', 27, 'Bus', 'Hotel'),
(5, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-11-28', '2019-11-29', '2019-03-03 11:20:29', 1, 79, 'Bordeaux (Gare St-Jean)', 'Paris (Gare Montparnasse)', 'Paris', 'France', 27, 'Train', 'Hotel'),
(6, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 3, '2019-05-23', '2019-07-18', '2019-04-09 10:20:29', 1, 129, 'Naples', 'Capri', 'Rome', 'Italie', 27, 'Pedestre', 'Camping'),
(7, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-09-23', '2019-10-25', '2019-04-09 10:20:29', 1, 129, 'Londres', 'Dublin', 'Dublin', 'Irlande', 27, '', ''),
(8, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-11-23', '2019-11-25', '2019-01-09 11:20:29', 1, 129, 'Strasbourg', 'Rotterdam', 'Amsterdam', 'Pays-Bas', 27, 'Bus', 'Hotel'),
(9, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 2, '2020-01-23', '2020-01-25', '2019-04-09 10:20:29', 1, 129, '3', '', 'Turin', 'Italie', 27, '', ''),
(10, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 4, '2019-11-10', '2019-11-20', '2018-11-09 11:20:29', 0, 129, 'Bordeaux', 'Prague', 'Bucarest', 'Roumanie', 27, 'Voiture', 'Airbnb'),
(11, 'images/image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-08-13', '2019-08-15', '2019-04-05 08:17:35', 1, 379, 'Paris', 'Montenegro', 'Podgorica', 'Montenegro', 27, 'Avion', 'Hotel'),
(12, 'images/image4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-09-12', '2019-09-18', '2018-11-09 11:20:29', 3, 230, '3', '', 'Stuttgart', 'Allemagne', 27, '', ''),
(13, 'images/image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2019-11-29', '2019-11-29', '2019-01-09 11:20:29', 4, 450, '3', '', 'Kiev', 'Ukraine', 27, '', ''),
(14, 'images/image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2019-11-17', '2019-11-21', '2019-03-09 11:20:29', 2, 1065, '3', '', 'Tokyo', 'Japon', 27, '', ''),
(15, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2019-05-28', '2019-06-29', '2019-04-09 10:20:29', 1, 1279, '3', '', 'Téhéran', 'Iran', 27, '', ''),
(16, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2019-11-10', '2019-10-15', '2019-04-09 15:20:29', 1, 829, 'Paris', 'Singapour', 'Pékin', 'Chine', 27, 'Avion', 'Hotel'),
(21, 'images/image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2020-09-30', '2020-10-25', '2018-11-05 09:17:35', 1, 1279, '3', '', 'Hanoï', 'Viet-Nam', 27, '', ''),
(22, 'images/image4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Amériques', 1, '2019-06-22', '2019-07-08', '2019-03-09 09:10:29', 0, 780, 'New-York', 'Buenos-Aire', 'Buenos-Aire', 'Argentine', 27, 'Avion', 'Hotel'),
(23, 'images/image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2019-08-09', '2019-08-19', '2019-01-09 17:20:29', 0, 450, '3', '', 'Osaka', 'Japon', 27, '', ''),
(24, 'images/image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Amériques', 4, '2019-08-17', '2019-08-29', '2019-01-09 18:20:29', 0, 765, '3', '', 'New-York', 'Etats-Unis', 27, '', ''),
(25, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Amériques', 2, '2019-11-28', '2019-12-19', '2018-11-09 11:20:29', 2, 79, '3', '', 'Sao Paulo', 'Brésil', 27, '', ''),
(26, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Océanie', 2, '2018-11-23', '2018-11-25', '2018-11-09 11:20:29', 0, 1200, '3', '', 'Sydney', 'Australie', 27, '', ''),
(31, 'images/image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Océanie', 1, '2019-06-23', '2019-06-30', '2018-10-05 08:17:35', 1, 700, '3', '', 'Perth', 'Australie', 27, '', ''),
(32, 'images/image4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2019-06-02', '2019-06-08', '2018-11-09 11:20:29', 3, 560, '3', '', 'Qatar', 'Doha', 27, '', ''),
(33, 'images/image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Océanie', 1, '2020-01-15', '2020-01-20', '2019-02-20 17:10:00', 4, 1450, '3', '', 'Apia', 'Samoa', 27, '', ''),
(34, 'images/image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Amériques', 1, '2019-09-14', '2018-09-21', '2019-03-23 01:20:45', 2, 65, '3', '', 'Chicago', 'Etats-Unis', 27, '', ''),
(35, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Océanie', 1, '2020-01-20', '2020-01-30', '2019-02-15 11:20:29', 6, 770, '3', '', 'Auckland', 'Nouvelle-Zélande', 27, '', ''),
(36, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Océanie', 2, '2018-11-23', '2018-11-25', '2018-11-09 11:20:29', 4, 840, '3', '', 'Nouméa', 'Nouvelle-Calédonie', 27, '', ''),
(41, 'images/image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Amériques', 1, '2020-02-12', '2020-02-25', '2019-04-15 08:17:35', 1, 860, '3', '', 'Santiago', 'Chili', 27, '', ''),
(42, 'images/image4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Afrique', 2, '2019-06-22', '2018-07-08', '2019-02-17 17:20:29', 3, 900, '3', '', 'Adis Abeba', 'Kenya', 27, '', ''),
(43, 'images/image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Afrique', 1, '2019-06-19', '2019-06-28', '2019-04-10 10:20:29', 4, 440, 'Le Caire', 'Yaoundé', 'Yaoundé', 'Cameroun', 27, 'Bus', 'Airbnb'),
(44, 'images/image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Afrique', 1, '2020-11-17', '2020-11-21', '2018-12-09 11:20:29', 2, 565, '3', '', 'Casablanca', 'Maroc', 27, '', ''),
(45, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Amériques', 1, '2019-09-28', '2019-10-19', '2019-01-10 11:20:29', 1, 180, '3', '', 'Tijuana', 'Mexique', 27, '', ''),
(46, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2020-01-10', '2020-01-25', '2019-04-09 10:20:29', 1, 620, '3', '', 'Luang Prasbang', 'Laos', 27, '', ''),
(51, 'images/image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2019-10-23', '2019-10-25', '2018-11-05 09:17:35', 1, 270, '3', '', 'Pekin', 'Chine', 27, '', ''),
(52, 'images/image4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-22', '2018-11-08', '2018-11-09 11:20:29', 3, 23, '3', '', 'France', 'Brest', 27, '', ''),
(53, 'images/image5.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Afrique', 1, '2018-11-29', '2018-11-29', '2018-11-09 11:20:29', 4, 45, '3', '', 'Antananarivo', 'Madagascar', 27, '', ''),
(54, 'images/image1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-17', '2018-11-21', '2018-11-09 11:20:29', 2, 65, '3', '', 'Rekjavik', 'Islande', 27, '', ''),
(55, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-28', '2018-11-29', '2018-11-09 11:20:29', 1, 79, '3', '', 'Reschensee', 'Italie', 27, '', ''),
(56, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-23', '2018-11-25', '2018-11-09 11:20:29', 1, 250, '3', '', 'Madrid', 'Espagne', 27, '', ''),
(61, 'images/image2.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-23', '2018-11-25', '2018-11-05 09:17:35', 1, 279, '3', '', 'Berne', 'Suisse', 27, '', ''),
(62, 'images/image4.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Océanie', 1, '2018-11-22', '2018-11-08', '2018-11-09 11:20:29', 3, 1023, '3', '', 'Darwin', 'Australie', 27, '', ''),
(95, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-28', '2018-11-29', '2018-11-09 11:20:29', 1, 79, '3', '', 'Barcelone', 'Espagne', 27, '', ''),
(96, 'images/image7.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Asie', 1, '2018-11-23', '2018-11-25', '2018-11-09 11:20:29', 1, 429, '3', '', 'Mumbai', 'Inde', 27, '', ''),
(97, 'images/image3.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ratione quo vel aut ab qui quas!', 'Europe', 1, '2018-11-03', '2018-11-04', '2018-11-20 14:33:33', 0, 123, '1', '', 'Londres', 'Angleterre', 27, '', '');

-- --------------------------------------------------------

--
-- Structure de la table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `titre_categorie` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `categories`
--

INSERT INTO `categories` (`id`, `titre_categorie`) VALUES
(1, 'Chambre'),
(2, 'Logement Entier - T1'),
(3, 'Logement Entier - T2'),
(4, 'Logement Entier - T3'),
(5, 'Logement Entier - Maison'),
(6, 'Logement Entier - Chalet'),
(7, 'Place de MobilHome'),
(8, 'Chambre - Auberge de Jeunesse');

-- --------------------------------------------------------

--
-- Structure de la table `reservations`
--

CREATE TABLE `reservations` (
  `id` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nbr_places` int(11) NOT NULL,
  `id_annonce` int(11) NOT NULL,
  `qr_code` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `reservations`
--

INSERT INTO `reservations` (`id`, `id_user`, `nbr_places`, `id_annonce`, `qr_code`) VALUES
(10, 27, 3, 3, ''),
(11, 27, 2, 3, ''),
(12, 27, 3, 22, ''),
(13, 27, 1, 23, ''),
(14, 27, 1, 23, ''),
(15, 27, 1, 23, ''),
(16, 27, 1, 23, ''),
(17, 27, 1, 24, ''),
(18, 27, 1, 24, ''),
(19, 27, 1, 26, ''),
(20, 27, 1, 1, ''),
(21, 27, 1, 2, ''),
(22, 27, 1, 2, ''),
(23, 27, 1, 2, ''),
(24, 27, 1, 1, ''),
(25, 27, 1, 1, ''),
(26, 27, 1, 1, ''),
(27, 27, 1, 1, ''),
(28, 27, 1, 1, ''),
(29, 27, 1, 1, ''),
(30, 27, 1, 1, ''),
(31, 27, 1, 1, ''),
(32, 27, 1, 1, ''),
(33, 27, 1, 1, ''),
(34, 27, 1, 1, ''),
(35, 27, 1, 1, ''),
(36, 27, 1, 1, ''),
(37, 27, 1, 1, ''),
(38, 27, 1, 1, ''),
(39, 27, 1, 1, ''),
(40, 27, 1, 1, ''),
(41, 27, 1, 1, ''),
(42, 27, 1, 1, ''),
(43, 27, 1, 1, ''),
(44, 27, 1, 1, ''),
(45, 27, 1, 1, ''),
(46, 27, 1, 1, ''),
(47, 27, 1, 97, ''),
(48, 27, 3, 1, ''),
(49, 27, 3, 1, ''),
(50, 27, 3, 1, ''),
(51, 27, 3, 1, ''),
(52, 27, 3, 1, ''),
(53, 27, 1, 1, ''),
(54, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est94a65ba13d3560a20261e1dc6be8113f.png'),
(55, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est94a65ba13d3560a20261e1dc6be8113f.png'),
(56, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est94a65ba13d3560a20261e1dc6be8113f.png'),
(57, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est94a65ba13d3560a20261e1dc6be8113f.png'),
(58, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est94a65ba13d3560a20261e1dc6be8113f.png'),
(59, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	estc0a73a31266a0ac0ef0d980fe12263b8.png'),
(60, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	estdf5750a4c4abab9513f86bc7e54c49f6.png'),
(61, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	estb3f986d7174332cdf5b0e49a69baed9c.png'),
(62, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est45bb5e761827b276ff5e28a4a058e574.png'),
(63, 27, 1, 1, 'C:xampphtdocsprojectsmyblogappinc	emp	est45bb5e761827b276ff5e28a4a058e574.png'),
(64, 0, 1, 81, 'C:xampphtdocsprojectsDevLogicielmyblogappinc	emp	est6d90b8496ada7a8dcedef7f67b68a6db.png'),
(65, 0, 2, 64, 'C:xampphtdocsprojectsDevLogicielmyblogappinc	emp	est6d90b8496ada7a8dcedef7f67b68a6db.png'),
(66, 27, 1, 10, 'C:xampphtdocsprojectsDevLogicielmyblogappinc	emp	estfc153a0ba37af422bbf02c41b942083e.png'),
(67, 37, 0, 25, ''),
(68, 37, 1, 25, ''),
(69, 37, 1, 25, ''),
(70, 37, 1, 25, ''),
(71, 37, 1, 25, ''),
(72, 37, 1, 25, ''),
(73, 37, 1, 25, ''),
(74, 37, 1, 25, ''),
(75, 37, 1, 25, ''),
(76, 37, 1, 25, ''),
(77, 37, 1, 25, ''),
(78, 37, 1, 25, ''),
(79, 37, 1, 25, ''),
(80, 37, 1, 25, ''),
(81, 37, 1, 25, ''),
(82, 37, 2, 4, ''),
(83, 37, 2, 4, '');

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname_user` text NOT NULL,
  `lastname_user` text NOT NULL,
  `email_user` varchar(255) NOT NULL,
  `password_user` varchar(255) NOT NULL,
  `image_user` varchar(255) NOT NULL,
  `adress_user` text NOT NULL,
  `number_articles_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstname_user`, `lastname_user`, `email_user`, `password_user`, `image_user`, `adress_user`, `number_articles_user`) VALUES
(37, '', '', 'ccc@ccc.fr', 'lFgwMCns4nl7g', '', '', 12);

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `annonces`
--
ALTER TABLE `annonces`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `reservations`
--
ALTER TABLE `reservations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `annonces`
--
ALTER TABLE `annonces`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=98;

--
-- AUTO_INCREMENT pour la table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reservations`
--
ALTER TABLE `reservations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
