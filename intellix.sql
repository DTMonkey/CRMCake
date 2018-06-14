-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1:3306
-- Généré le :  jeu. 14 juin 2018 à 03:37
-- Version du serveur :  5.7.19
-- Version de PHP :  7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `intellix`
--

-- --------------------------------------------------------

--
-- Structure de la table `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_account` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `effective` varchar(255) DEFAULT NULL,
  `other_email` varchar(255) DEFAULT NULL,
  `email_opt_out` tinyint(4) DEFAULT NULL,
  `web_site` varchar(255) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `other_phone` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `owner` varchar(255) DEFAULT NULL,
  `code_ape` varchar(255) DEFAULT NULL,
  `annual_revenue` int(11) DEFAULT NULL,
  `notify_owner` tinyint(4) DEFAULT NULL,
  `billing_addres` varchar(255) DEFAULT NULL,
  `delivery_address` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `note_id` int(11) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `lead_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `secteur_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_account_account` (`account_id`),
  KEY `fk_account_lead` (`lead_id`),
  KEY `fk_account_contact` (`contact_id`),
  KEY `fk_account_user` (`user_id`),
  KEY `fk_account_note` (`note_id`),
  KEY `fk_account_secteur` (`secteur_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `campaigns`
--

DROP TABLE IF EXISTS `campaigns`;
CREATE TABLE IF NOT EXISTS `campaigns` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_campaign` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_campaign_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `contacts`
--

DROP TABLE IF EXISTS `contacts`;
CREATE TABLE IF NOT EXISTS `contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `phone` varchar(25) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `other_phone` int(11) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `do_not_call` tinyint(4) DEFAULT NULL,
  `interested_in` varchar(255) DEFAULT NULL,
  `notify_owner` tinyint(4) DEFAULT NULL,
  `referent` tinyint(4) DEFAULT NULL,
  `first_name` varchar(25) DEFAULT NULL,
  `entreprise` varchar(255) DEFAULT NULL,
  `fonction` varchar(25) DEFAULT NULL,
  `email` varchar(25) DEFAULT NULL,
  `assistant` varchar(25) DEFAULT NULL,
  `email_opt_out` tinyint(4) DEFAULT NULL,
  `client` tinyint(4) DEFAULT NULL,
  `service_portal_access` tinyint(4) DEFAULT NULL,
  `support_start_date` datetime DEFAULT NULL,
  `end_date_support` datetime DEFAULT NULL,
  `wilaya` varchar(25) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contact_type_id` int(11) DEFAULT NULL,
  `lead_id` int(11) DEFAULT NULL,
  `source_prospect_id` int(11) DEFAULT NULL,
  `account_id` int(11) DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL,
  `secteur_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_contact_account` (`account_id`),
  KEY `fk_contact_user` (`user_id`),
  KEY `fk_contact_contact` (`contact_type_id`),
  KEY `fk_contact_lead` (`lead_id`),
  KEY `fk_contact_product` (`product_id`),
  KEY `fk_contact_secteur` (`secteur_id`),
  KEY `fk_contact_source_prospect` (`source_prospect_id`),
  KEY `fk_contact_statut` (`statut_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `event_type_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `details` text COLLATE utf8_unicode_ci NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL,
  `all_day` tinyint(1) NOT NULL DEFAULT '1',
  `status` varchar(20) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'Scheduled',
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `created` date DEFAULT NULL,
  `modified` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `events`
--

INSERT INTO `events` (`id`, `event_type_id`, `title`, `details`, `start`, `end`, `all_day`, `status`, `active`, `created`, `modified`) VALUES
(1, 1, 'vrojfjro', 'fofjrjfr', '2018-06-13 14:02:00', '2018-06-13 14:02:00', 1, 'Scheduled', 1, '2018-06-13', '2018-06-13');

-- --------------------------------------------------------

--
-- Structure de la table `event_types`
--

DROP TABLE IF EXISTS `event_types`;
CREATE TABLE IF NOT EXISTS `event_types` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Déchargement des données de la table `event_types`
--

INSERT INTO `event_types` (`id`, `name`, `color`) VALUES
(1, 'test', 'Red');

-- --------------------------------------------------------

--
-- Structure de la table `leads`
--

DROP TABLE IF EXISTS `leads`;
CREATE TABLE IF NOT EXISTS `leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_lead` varchar(255) NOT NULL,
  `forcecast_amount` int(11) NOT NULL,
  `term` date NOT NULL,
  `next` varchar(255) NOT NULL,
  `probability` float NOT NULL,
  `description` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `sale_phase_id` int(11) NOT NULL,
  `campaign_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `contact_id` int(11) NOT NULL,
  `paid_to_id` int(11) NOT NULL,
  `secteur_id` int(11) NOT NULL,
  `lead_type_id` int(11) NOT NULL,
  `source_prospect_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_lead_account` (`account_id`),
  KEY `fk_lead_campaign` (`campaign_id`),
  KEY `fk_lead_contact` (`contact_id`),
  KEY `fk_lead_lead_type` (`lead_type_id`),
  KEY `fk_lead_paid_to` (`paid_to_id`),
  KEY `fk_lead_sale_phase` (`sale_phase_id`),
  KEY `fk_lead_secteur` (`secteur_id`),
  KEY `fk_lead_source_prospect` (`source_prospect_id`),
  KEY `fk_lead_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `notes`
--

DROP TABLE IF EXISTS `notes`;
CREATE TABLE IF NOT EXISTS `notes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_notes` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_note_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `paid_to`
--

DROP TABLE IF EXISTS `paid_to`;
CREATE TABLE IF NOT EXISTS `paid_to` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `percentage` float DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_paid_to_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_product` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `contacts_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_products_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `prospects`
--

DROP TABLE IF EXISTS `prospects`;
CREATE TABLE IF NOT EXISTS `prospects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `society` varchar(255) DEFAULT NULL,
  `mobile` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `web_site` varchar(255) DEFAULT NULL,
  `city` varchar(25) DEFAULT NULL,
  `fax` int(11) DEFAULT NULL,
  `email_opt_out` tinyint(4) DEFAULT NULL,
  `title` varchar(25) DEFAULT NULL,
  `other_sector` varchar(255) DEFAULT NULL,
  `effective` varchar(25) DEFAULT NULL,
  `secondary_email` varchar(255) DEFAULT NULL,
  `pobox` varchar(255) DEFAULT NULL,
  `wilaya` varchar(25) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `comments` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `source_prospect_id` int(11) DEFAULT NULL,
  `statut_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_prospect_user` (`user_id`),
  KEY `fk_prospect_source_prospect` (`source_prospect_id`),
  KEY `fk_prospect_status` (`statut_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `prospects`
--

INSERT INTO `prospects` (`id`, `name`, `first_name`, `phone`, `society`, `mobile`, `email`, `web_site`, `city`, `fax`, `email_opt_out`, `title`, `other_sector`, `effective`, `secondary_email`, `pobox`, `wilaya`, `description`, `comments`, `created`, `modified`, `user_id`, `source_prospect_id`, `statut_id`) VALUES
(1, 'ben', 'zak', NULL, '', NULL, '', '', '', NULL, NULL, '', '', '', '', '', '', '', '', '2018-05-28 04:31:57', '2018-06-13 13:05:16', NULL, NULL, NULL),
(5, 'zz', 'ala', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2018-05-28 05:12:13', '2018-05-28 05:12:13', NULL, NULL, NULL),
(6, 'Ishak Benaissa', 'Ishak', 620653470, '', NULL, 'zakblackleseul@live.fr', '', 'Brétigny sur orge', NULL, NULL, '', '', '', '', '', '', '', '', '2018-05-29 09:18:24', '2018-05-29 09:18:24', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure de la table `sale_phases`
--

DROP TABLE IF EXISTS `sale_phases`;
CREATE TABLE IF NOT EXISTS `sale_phases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_phase` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_sale_phase_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `secteurs`
--

DROP TABLE IF EXISTS `secteurs`;
CREATE TABLE IF NOT EXISTS `secteurs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_secteur` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_secteur_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `source_prospects`
--

DROP TABLE IF EXISTS `source_prospects`;
CREATE TABLE IF NOT EXISTS `source_prospects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_prospect` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_source_prospect_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_statut` varchar(25) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_status_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `types_contacts`
--

DROP TABLE IF EXISTS `types_contacts`;
CREATE TABLE IF NOT EXISTS `types_contacts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_types_contact_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `types_leads`
--

DROP TABLE IF EXISTS `types_leads`;
CREATE TABLE IF NOT EXISTS `types_leads` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name_type` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_type_lead_user` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  `username` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `created`, `modified`, `username`) VALUES
(19, 'zak ben', 'zakblack@viacesi.fr', '$2y$10$Dd/UX1VtvIMzVNMR7OJZBuozcC0X/CrY8QkWWWdggBaSD2ihjrct6', '2018-06-01 05:47:40', '2018-06-13 13:13:12', 'zakblacki'),
(23, 'fjeoej', 'fefejo@live.fr', '$2y$10$UkPp7YlxI1A1rM9es9MKJ.DQaW/Nnv8FUehFxqYbuerpt9Vx.L49i', '2018-06-13 12:32:41', '2018-06-13 12:32:41', 'ejojfe'),
(24, 'rjorj', 'fjoeofj@live.fr', '$2y$10$yzQ.xKBaE/vBhzoqJICjkujOBgAXBw4TjrGcSULbmOpa4c7sc0LNO', '2018-06-13 12:56:22', '2018-06-13 12:56:22', 'rjojvrojr');

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `accounts`
--
ALTER TABLE `accounts`
  ADD CONSTRAINT `fk_account_account` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `fk_account_contact` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `fk_account_lead` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`),
  ADD CONSTRAINT `fk_account_note` FOREIGN KEY (`note_id`) REFERENCES `notes` (`id`),
  ADD CONSTRAINT `fk_account_secteur` FOREIGN KEY (`secteur_id`) REFERENCES `secteurs` (`id`),
  ADD CONSTRAINT `fk_account_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `campaigns`
--
ALTER TABLE `campaigns`
  ADD CONSTRAINT `fk_campaign_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `contacts`
--
ALTER TABLE `contacts`
  ADD CONSTRAINT `fk_contact_account` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `fk_contact_contact` FOREIGN KEY (`contact_type_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `fk_contact_lead` FOREIGN KEY (`lead_id`) REFERENCES `leads` (`id`),
  ADD CONSTRAINT `fk_contact_product` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`),
  ADD CONSTRAINT `fk_contact_secteur` FOREIGN KEY (`secteur_id`) REFERENCES `secteurs` (`id`),
  ADD CONSTRAINT `fk_contact_source_prospect` FOREIGN KEY (`source_prospect_id`) REFERENCES `source_prospects` (`id`),
  ADD CONSTRAINT `fk_contact_statut` FOREIGN KEY (`statut_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `fk_contact_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `leads`
--
ALTER TABLE `leads`
  ADD CONSTRAINT `fk_lead_account` FOREIGN KEY (`account_id`) REFERENCES `accounts` (`id`),
  ADD CONSTRAINT `fk_lead_campaign` FOREIGN KEY (`campaign_id`) REFERENCES `campaigns` (`id`),
  ADD CONSTRAINT `fk_lead_contact` FOREIGN KEY (`contact_id`) REFERENCES `contacts` (`id`),
  ADD CONSTRAINT `fk_lead_lead_type` FOREIGN KEY (`lead_type_id`) REFERENCES `leads` (`id`),
  ADD CONSTRAINT `fk_lead_paid_to` FOREIGN KEY (`paid_to_id`) REFERENCES `paid_to` (`id`),
  ADD CONSTRAINT `fk_lead_sale_phase` FOREIGN KEY (`sale_phase_id`) REFERENCES `sale_phases` (`id`),
  ADD CONSTRAINT `fk_lead_secteur` FOREIGN KEY (`secteur_id`) REFERENCES `secteurs` (`id`),
  ADD CONSTRAINT `fk_lead_source_prospect` FOREIGN KEY (`source_prospect_id`) REFERENCES `source_prospects` (`id`),
  ADD CONSTRAINT `fk_lead_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `notes`
--
ALTER TABLE `notes`
  ADD CONSTRAINT `fk_note_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `paid_to`
--
ALTER TABLE `paid_to`
  ADD CONSTRAINT `fk_paid_to_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `fk_products_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `prospects`
--
ALTER TABLE `prospects`
  ADD CONSTRAINT `fk_prospect_source_prospect` FOREIGN KEY (`source_prospect_id`) REFERENCES `source_prospects` (`id`),
  ADD CONSTRAINT `fk_prospect_status` FOREIGN KEY (`statut_id`) REFERENCES `status` (`id`),
  ADD CONSTRAINT `fk_prospect_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `sale_phases`
--
ALTER TABLE `sale_phases`
  ADD CONSTRAINT `fk_sale_phase_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `secteurs`
--
ALTER TABLE `secteurs`
  ADD CONSTRAINT `fk_secteur_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `source_prospects`
--
ALTER TABLE `source_prospects`
  ADD CONSTRAINT `fk_source_prospect_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `status`
--
ALTER TABLE `status`
  ADD CONSTRAINT `fk_status_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `types_contacts`
--
ALTER TABLE `types_contacts`
  ADD CONSTRAINT `fk_types_contact_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Contraintes pour la table `types_leads`
--
ALTER TABLE `types_leads`
  ADD CONSTRAINT `fk_type_lead_user` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
