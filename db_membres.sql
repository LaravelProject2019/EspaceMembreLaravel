-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le :  jeu. 22 août 2019 à 17:55
-- Version du serveur :  10.1.32-MariaDB
-- Version de PHP :  7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `db_membres`
--

-- --------------------------------------------------------

--
-- Structure de la table `membre`
--

CREATE TABLE `membre` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prenom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `matricule` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `niveau` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ecole` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `membre`
--

INSERT INTO `membre` (`id`, `nom`, `prenom`, `email`, `matricule`, `niveau`, `ecole`, `password`, `created_at`, `updated_at`) VALUES
(2, 'DEMBELE', 'DAOUDA', 'daouda@gmail.com', 'DEMD2903', 'Licence', 'UVCI', '$2y$10$/eKU6C/7KjsXXMe8Yo8V1.8tfMEtPWhD7LdiiGOCp7dnfPKP.uaie', '2019-08-22 11:56:17', '2019-08-22 11:56:17'),
(3, 'DIAKITE', 'OUSMANE', 'diak@gmail.com', 'DIAK01263', 'Licence', 'UVCI', '$2y$10$RqbWRAoT8oVsApgtVTXNYetkO/BKXZqI9EDF5sXL760wo5ml2JLVe', '2019-08-22 11:59:44', '2019-08-22 11:59:44'),
(4, 'KOUAME', 'PARFAIT', 'kouame@gmail.com', 'KOUM21568', 'Licence', 'UVCI', '$2y$10$m4D0boU7v.DFjAF8JfRy0u1oYc/UpCwgpUfsmQ1DZooNUb5rrge0a', '2019-08-22 12:04:28', '2019-08-22 12:04:28'),
(6, 'David', 'Dem', 'david@gmail.com', 'DAV125', 'Licence', 'UVCI', '$2y$10$Y8ywTs2TnQJo2Kxv/dS3tuLVDgIisXig.4lggWY2p4FmH53YLGA8i', '2019-08-22 14:24:59', '2019-08-22 14:24:59'),
(7, 'Loukou', 'Aristide', 'louk@gmail.com', 'LOUA14536', 'Licence', 'UVCI', '$2y$10$5l4m33X9iXuz7eY0XTcJGuoBMsXpFpXmx801GofITtXakjgXp4Qgy', '2019-08-22 14:26:33', '2019-08-22 14:26:33'),
(8, 'Loukou', 'Aristide', 'louk@gmail.com', 'LOUA14536', 'Licence', 'UVCI', '$2y$10$j1peOUey8yqtu5C5ZSsxr.1.Bh8kDn/0G8I9m/hQVsdTdD.X7aJrC', '2019-08-22 14:27:20', '2019-08-22 14:27:20'),
(9, 'Coulibaly', 'Lagama', 'lagama@gmail', 'CLUM58965', 'Licence', 'UVCI', '$2y$10$LH.fFc5p.ZsSE7KE7WcNxO3I13dnl7Wy6QiIl1PS/jdsbnA2OmKO6', '2019-08-22 14:31:10', '2019-08-22 14:31:10'),
(10, 'Audrey', 'Clotilde', 'audrey@gmail.com', 'CLTD1466', 'Licence', 'UVCI', '$2y$10$2.4enWd3O/zk91sN8vkbD.cSF2q9RmdkVdj9e.nJTmOh3U2cpvi5O', '2019-08-22 14:34:29', '2019-08-22 14:34:29'),
(11, 'audrey', 'Clotildo', 'auu@gmail.com', 'hhhhh85', 'Licence', 'UFHB', '$2y$10$VlFYvT1nztYrkgzeUxbsCuYj6Ei07iH2BpaevKjbmQXwysHh8qxLO', '2019-08-22 14:41:14', '2019-08-22 14:41:14');

-- --------------------------------------------------------

--
-- Structure de la table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Déchargement des données de la table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_20_123344_create_membre_table', 1);

-- --------------------------------------------------------

--
-- Structure de la table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `membre`
--
ALTER TABLE `membre`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `membre`
--
ALTER TABLE `membre`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT pour la table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
