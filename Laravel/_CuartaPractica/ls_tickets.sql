-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Temps de generació: 28-03-2023 a les 16:58:19
-- Versió del servidor: 10.4.27-MariaDB
-- Versió de PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de dades: `ls_tickets`
--

-- --------------------------------------------------------

--
-- Estructura de la taula `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_15_144200_tickets', 1);

-- --------------------------------------------------------

--
-- Estructura de la taula `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estructura de la taula `ticket`
--

CREATE TABLE `ticket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Bolcament de dades per a la taula `ticket`
--

INSERT INTO `ticket` (`id`, `title`, `description`, `photo`, `author`, `priority`, `created_at`, `updated_at`) VALUES
(1, 'Aperiam architecto in fuga rerum eligendi alias dolor iure.', 'Sed consequuntur tempore corporis.', 'https://via.placeholder.com/640x480.png/000033?text=doloremque', 'Ciara Johns', 'ALTA', '2023-03-28 12:43:14', '2023-03-28 12:43:14'),
(2, 'Laudantium voluptatem voluptates assumenda quo.', 'Natus vero eos molestias magnam assumenda earum.', 'https://via.placeholder.com/640x480.png/005555?text=velit', 'Efren Altenwerth Jr.', 'BAJA', '2023-03-28 12:43:14', '2023-03-28 12:43:14'),
(3, 'Et eveniet praesentium aut maxime quidem.', 'Beatae est enim eius iusto provident eaque nisi.', 'https://via.placeholder.com/640x480.png/00bb55?text=et', 'Prof. Ellsworth Wolff', 'BAJA', '2023-03-28 12:43:14', '2023-03-28 12:43:14'),
(4, 'Architecto odit dolores non et.', 'Aperiam qui ab ut ipsam qui in.', 'https://via.placeholder.com/640x480.png/0088bb?text=iure', 'Arno Ebert Sr.', 'ALTA', '2023-03-28 12:43:14', '2023-03-28 12:43:14'),
(5, 'Aut culpa omnis consequatur dolores doloremque.', 'Cupiditate magnam non aut id qui deleniti harum.', 'https://via.placeholder.com/640x480.png/0077dd?text=ut', 'Eryn Bode', 'ALTA', '2023-03-28 12:43:14', '2023-03-28 12:43:14'),
(6, 'Aspernatur labore voluptatem perferendis vero et.', 'Sit voluptas blanditiis velit provident.', 'https://via.placeholder.com/640x480.png/0088aa?text=iure', 'Miss Evalyn Gleichner', 'ALTA', '2023-03-28 12:43:14', '2023-03-28 12:43:14'),
(8, 'Vitae ullam consequatur sed aspernatur.', 'Ea quia et libero omnis libero magni nemo.', 'https://via.placeholder.com/640x480.png/0099bb?text=omnis', 'Myrtis Sanford', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(9, 'Molestiae laborum inventore voluptatem distinctio quo dicta vel.', 'Et quod amet odio sunt mollitia.', 'https://via.placeholder.com/640x480.png/0000bb?text=temporibus', 'Eulalia Metz I', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(10, 'Dicta cum nisi sit ipsam dolorem aut ea.', 'Dolor magni nam vitae dolorum tempore.', 'https://via.placeholder.com/640x480.png/00ee77?text=ea', 'Emma Padberg', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(11, 'Dolor aperiam debitis consectetur.', 'Distinctio deleniti nulla aut reiciendis.', 'https://via.placeholder.com/640x480.png/001122?text=natus', 'Mrs. Odie Durgan', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(12, 'Illum et omnis ad animi incidunt aut sapiente sunt.', 'Eos quos possimus harum et.', 'https://via.placeholder.com/640x480.png/00ddaa?text=cumque', 'Arno Barrows', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(13, 'Nihil consequatur dolorem quo modi nostrum.', 'Necessitatibus eum et et nihil.', 'https://via.placeholder.com/640x480.png/002277?text=blanditiis', 'Bertrand Windler', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(14, 'Dolor quod quaerat voluptas rerum natus.', 'Odit quas nobis eligendi.', 'https://via.placeholder.com/640x480.png/002244?text=minus', 'Friedrich Reichel PhD', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(15, 'Autem quia iure facere praesentium.', 'Voluptatem nostrum ad et omnis.', 'https://via.placeholder.com/640x480.png/006633?text=quia', 'Jettie White IV', 'MEDIA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(16, 'Sit enim deserunt est similique eum adipisci dolores.', 'Ut cumque vitae totam provident.', 'https://via.placeholder.com/640x480.png/003333?text=ut', 'Evans Johnston', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(17, 'Reiciendis omnis voluptas enim.', 'Veritatis autem eum soluta nihil.', 'https://via.placeholder.com/640x480.png/002277?text=voluptas', 'Jessika Daniel Jr.', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(18, 'Et repellendus consequatur fuga et asperiores magni.', 'Odit corrupti expedita placeat autem asperiores.', 'https://via.placeholder.com/640x480.png/004444?text=voluptates', 'Barrett Lemke', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(19, 'Eum debitis non rerum placeat reiciendis.', 'Nisi in dolorem excepturi impedit fugiat itaque.', 'https://via.placeholder.com/640x480.png/0022ee?text=cumque', 'Mrs. Bria Sipes', 'MEDIA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(20, 'Est culpa expedita eum odit necessitatibus quod quas.', 'Autem molestias perspiciatis modi qui at quam.', 'https://via.placeholder.com/640x480.png/009955?text=id', 'Mr. Brice Flatley III', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(21, 'Dignissimos voluptas sunt libero atque.', 'Error cum aperiam explicabo quasi omnis.', 'https://via.placeholder.com/640x480.png/00dd99?text=labore', 'Christine Toy', 'ALTA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(22, 'Vitae ut commodi modi.', 'Labore sunt commodi placeat recusandae dolor aut.', 'https://via.placeholder.com/640x480.png/00aa44?text=neque', 'Prof. Shawn Goldner Sr.', 'MEDIA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(23, 'Dolorem quis molestiae consequatur unde deleniti autem.', 'Quia quia nesciunt et commodi.', 'https://via.placeholder.com/640x480.png/00cc55?text=quisquam', 'Eldora Little', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(24, 'Ullam et perferendis qui in voluptatem.', 'Cum odio molestias sequi quos id repellendus.', 'https://via.placeholder.com/640x480.png/0066ff?text=dolores', 'Herminio McClure', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(25, 'Quae veritatis quo aperiam culpa magni ipsum.', 'Fugiat ad dolores mollitia aut.', 'https://via.placeholder.com/640x480.png/00bb11?text=in', 'Gay Champlin Jr.', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(26, 'Illo et impedit est nemo exercitationem.', 'Facere officiis magni exercitationem.', 'https://via.placeholder.com/640x480.png/003366?text=vero', 'Emmy Purdy IV', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(27, 'Odit corrupti rem iusto consequatur dolores voluptate consequatur.', 'Sed in modi minima.', 'https://via.placeholder.com/640x480.png/0044cc?text=repellendus', 'Miss Leatha Heaney', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(28, 'Ut deleniti dolor et officiis fuga.', 'Voluptatibus hic fuga ut sit est.', 'https://via.placeholder.com/640x480.png/0088ee?text=est', 'Ms. Esmeralda Stiedemann', 'BAJA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(29, 'Ut distinctio assumenda qui rem optio aut doloremque rerum.', 'Doloremque id porro corrupti ipsam cupiditate.', 'https://via.placeholder.com/640x480.png/000099?text=earum', 'Dr. Retta Feeney', 'MEDIA', '2023-03-28 12:43:15', '2023-03-28 12:43:15'),
(30, 'Eos voluptas ut beatae occaecati et id.', 'Est quisquam qui quo.', 'https://via.placeholder.com/640x480.png/0077dd?text=maxime', 'Dr. Rosella Zboncak', 'MEDIA', '2023-03-28 12:43:15', '2023-03-28 12:43:15');

--
-- Índexs per a les taules bolcades
--

--
-- Índexs per a la taula `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índexs per a la taula `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índexs per a la taula `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per les taules bolcades
--

--
-- AUTO_INCREMENT per la taula `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la taula `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT per la taula `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
