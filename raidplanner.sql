-- --------------------------------------------------------
-- Hôte :                        localhost
-- Version du serveur:           5.7.19 - MySQL Community Server (GPL)
-- SE du serveur:                Win64
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Export de données de la table raidplanner.users : ~7 rows (environ)
DELETE FROM `users`;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Enmi', 'emilien.meissonnier@gmail.com', '$2y$10$KlXWMw9KanRYRbxb/bOzx.hi7obAvEbEcuTVwujNi89TIf/r7gj8q', NULL, '9cVPbfEJueqZQ3qWCBG4DZhq0yZIx72DhzhczVQ92hAE2HRrNzSRkR9i1DBM', '2018-05-31 08:15:17', '2018-05-31 08:15:17'),
	(2, 'Grumpy', 'emilfeca@hotmail.fr', '$2y$10$tN3ksHsZB90bCL60MLmiKubqffIN.N/4QpZ05gOUHYcXu6qCBtSwW', NULL, 'CmOl2QwlZEgQPkf83sgiDAnFvSin2heN2GoDyCUR3yX85HYHrufiE2HoxnHY', '2018-05-31 08:17:20', '2018-05-31 08:17:20'),
	(3, 'Salma', 'dsfgsdfg@hotmail.fr', '$2y$10$ju3sid9/8l1wop1kEDCcC.3zptcAccCTrq2otJPOYZVGAmQzd1zPG', NULL, 'Oi13RJ6L0EYxQNg8DUPff0cP2fyAzHHK8IZeMgu90nOaBIO7vOX6AIVZPBAZ', '2018-06-01 07:48:16', '2018-06-01 07:48:16'),
	(4, 'Neo', 'dfjtyju@hotmail.fr', '$2y$10$o/R2415TEfCe.hU/UOVYc.fjSZdBJA78vh3gkza3RkOgsMsgsCksS', NULL, '2iADbyFOklvdn4zIpheBERnjdroysouP825FmbpQEf7Bp4FIyPsgv5txnmN5', '2018-06-01 08:03:05', '2018-06-01 08:03:05'),
	(5, 'Arga', 'sgrrth@hotmail.fr', '$2y$10$fDfQYoamJ3IAqJXmido1fu.tzlHp40tANy6.kmsQYj.EQRzoEGbJG', NULL, 'VyIhmcfyRgBhbBZ4bpHx36IOKU4mizJP4dXflgKeptFL4RXgwYLAAmG9QgC2', '2018-06-01 08:03:49', '2018-06-01 08:03:49'),
	(6, 'Slena', 'eqrghr@hotmail.fr', '$2y$10$JaqnVpgJcHOjZjYXSPxR8OfgZiWqqU7A80XiUs09h6EbIIxXY2PCK', NULL, 'Es4WtkQq61Iwuh9SVQWA9ppt0GTK7psB84qXS945x0wb0C4QZdEKP1RFu2dL', '2018-06-01 08:06:23', '2018-06-01 08:06:23'),
	(7, 'test', 'test@test.com', '$2y$10$z5aLgskbvKiMzJn/WtZFN.hbf8j0IPrLrdSo6W1LA7MgqTyNKAhBm', NULL, 's2JbMzqdbddWrBVHPig2E7Y9fK4WeiGvrjPQ2FJJc4QeRlyHQZZHeq15jZP1', '2018-06-01 08:09:34', '2018-06-01 08:09:34');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
-- Export de données de la table raidplanner.blogs : ~0 rows (environ)
DELETE FROM `blogs`;
/*!40000 ALTER TABLE `blogs` DISABLE KEYS */;
/*!40000 ALTER TABLE `blogs` ENABLE KEYS */;

-- Export de données de la table raidplanner.categories : ~6 rows (environ)
DELETE FROM `categories`;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` (`id_categories`, `libelle_categorie`, `arme`, `auxiliaire`, `tete`, `torse`, `main`, `ceinture`, `jambe`, `pied`, `boucle_oreille`, `collier`, `bracelet`, `bague_1`, `bague_2`, `created_at`, `updated_at`) VALUES
	(1, 'script+', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-06-01 10:18:34', NULL),
	(2, 'craft', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '2018-06-01 10:18:34', NULL),
	(3, 'T1', 0, 0, 0, 0, 0, 1, 0, 0, 1, 1, 1, 1, 1, '2018-06-01 10:18:34', NULL),
	(4, 'T2', 0, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, '2018-06-01 10:18:34', NULL),
	(5, 'T3', 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, '2018-06-01 10:18:34', NULL),
	(6, 'T4', 1, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, '2018-06-01 10:18:34', NULL);
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;

-- Export de données de la table raidplanner.events : ~4 rows (environ)
DELETE FROM `events`;
/*!40000 ALTER TABLE `events` DISABLE KEYS */;
INSERT INTO `events` (`id`, `nom_raid`, `start_date`, `end_date`, `created_at`, `updated_at`) VALUES
	(14, 'Kefka Savage', '2018-06-05', '2018-06-05', '2018-06-05 09:27:06', '2018-06-05 09:27:06'),
	(16, 'Kefka Savage 2', '2018-06-07', '2018-06-07', '2018-06-05 09:28:45', '2018-06-05 09:28:45'),
	(17, 'test', '2018-06-05', '2018-06-11', '2018-06-05 09:52:37', '2018-06-05 09:52:37'),
	(18, 'dhfjhjkhkj', '2018-06-21', '2018-06-21', '2018-06-05 10:47:52', '2018-06-05 10:47:52');
/*!40000 ALTER TABLE `events` ENABLE KEYS */;

-- Export de données de la table raidplanner.inscriptions : ~0 rows (environ)
DELETE FROM `inscriptions`;
/*!40000 ALTER TABLE `inscriptions` DISABLE KEYS */;
INSERT INTO `inscriptions` (`id_inscription`, `date_inscription`, `message`, `id_event`, `id_user`, `created_at`, `updated_at`) VALUES
	(1, '2018-06-05', 'Salut c\'est un test', 16, 1, NULL, NULL),
	(2, '2018-06-05', 'test', 16, 1, '2018-06-05 14:46:24', '2018-06-05 14:46:24');
/*!40000 ALTER TABLE `inscriptions` ENABLE KEYS */;

-- Export de données de la table raidplanner.migrations : ~9 rows (environ)
DELETE FROM `migrations`;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2018_05_29_102428_create_events_table', 1),
	(4, '2018_05_29_102616_create_inscriptions_table', 1),
	(5, '2018_05_29_102703_create_blogs_table', 1),
	(6, '2018_05_29_102954_create_web_agency_fails_table', 1),
	(7, '2018_05_29_103053_create_categories_table', 1),
	(8, '2018_05_29_103133_create_personnages_table', 1),
	(9, '2018_05_29_105849_create_foreign_key', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Export de données de la table raidplanner.password_resets : ~0 rows (environ)
DELETE FROM `password_resets`;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Export de données de la table raidplanner.personnages : ~7 rows (environ)
DELETE FROM `personnages`;
/*!40000 ALTER TABLE `personnages` DISABLE KEYS */;
INSERT INTO `personnages` (`id_personnage`, `nom`, `id_lodestone`, `job`, `arme_bis`, `auxiliaire_bis`, `tete_bis`, `torse_bis`, `main_bis`, `ceinture_bis`, `jambe_bis`, `pied_bis`, `boucle_oreille_bis`, `collier_bis`, `bracelet_bis`, `bague_1_bis`, `bague_2_bis`, `id_user`, `created_at`, `updated_at`) VALUES
	(1, NULL, '15417776', 'DRG', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '2018-05-31 08:15:17', '2018-05-31 08:15:17'),
	(2, NULL, '2819541', 'SAM', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2018-05-31 08:17:20', '2018-05-31 08:17:20'),
	(3, NULL, '1262359', 'PLD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2018-06-01 07:48:16', '2018-06-01 07:48:16'),
	(4, NULL, '5064661', 'AST', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 4, '2018-06-01 08:03:05', '2018-06-01 08:03:05'),
	(5, NULL, '1575244', 'WAR', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 5, '2018-06-01 08:03:49', '2018-06-01 08:03:49'),
	(6, NULL, '1551964', 'BRD', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 6, '2018-06-01 08:06:23', '2018-06-01 08:06:23'),
	(7, NULL, '2908790', 'SCH', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 7, '2018-06-01 08:09:34', '2018-06-01 08:09:34');
/*!40000 ALTER TABLE `personnages` ENABLE KEYS */;

-- Export de données de la table raidplanner.web_agency_fails : ~0 rows (environ)
DELETE FROM `web_agency_fails`;
/*!40000 ALTER TABLE `web_agency_fails` DISABLE KEYS */;
/*!40000 ALTER TABLE `web_agency_fails` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
