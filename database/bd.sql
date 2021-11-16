-- --------------------------------------------------------
-- Servidor:                     localhost
-- Versão do servidor:           5.7.24 - MySQL Community Server (GPL)
-- OS do Servidor:               Win64
-- HeidiSQL Versão:              10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Copiando estrutura do banco de dados para db_trab_tai_03
CREATE DATABASE IF NOT EXISTS `db_trab_tai_03` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_bin */;
USE `db_trab_tai_03`;

-- Copiando estrutura para tabela db_trab_tai_03.carro
CREATE TABLE IF NOT EXISTS `carro` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `placa_id` bigint(20) DEFAULT NULL,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `km` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `placa_id` (`placa_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.carro: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `carro` DISABLE KEYS */;
INSERT INTO `carro` (`id`, `placa_id`, `nome`, `marca`, `km`, `created_at`, `updated_at`) VALUES
	(2, 1, 'Joao Curtatelli', 'FORD', '158.600', '2021-06-24 20:45:58', '2021-07-21 13:53:35'),
	(4, 3, 'Jonas', 'Tesla', '0', '2021-07-21 14:08:28', '2021-07-21 14:08:28'),
	(5, 4, 'bg', 'ggggggg', 'gggg', '2021-08-02 13:09:42', '2021-08-02 13:09:42');
/*!40000 ALTER TABLE `carro` ENABLE KEYS */;

-- Copiando estrutura para tabela db_trab_tai_03.fabrica
CREATE TABLE IF NOT EXISTS `fabrica` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dono` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `CNPJ` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.fabrica: ~3 rows (aproximadamente)
/*!40000 ALTER TABLE `fabrica` DISABLE KEYS */;
INSERT INTO `fabrica` (`id`, `nome`, `cidade`, `dono`, `CNPJ`, `created_at`, `updated_at`) VALUES
	(1, 'Placas Xaxim', 'Xaxim', 'João', '11.111.111/0001-01', '2021-07-21 13:52:22', '2021-07-21 13:52:22'),
	(2, 'Placas Xanxere', 'Xanxere', 'Jackson', '99.999.999/9999-99', '2021-07-21 13:52:44', '2021-07-21 13:52:44'),
	(6, 'Placas Chapéco', 'Chapeco', 'Joana', '99.944.814/9499-99', '2021-07-21 14:05:56', '2021-07-21 14:06:31');
/*!40000 ALTER TABLE `fabrica` ENABLE KEYS */;

-- Copiando estrutura para tabela db_trab_tai_03.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.failed_jobs: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Copiando estrutura para tabela db_trab_tai_03.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.migrations: ~7 rows (aproximadamente)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(4, '2021_06_02_222727_create_carro', 1),
	(5, '2021_06_20_153542_create_professor_disciplinas_table', 1),
	(6, '2021_06_22_232303_create_placa', 1),
	(7, '2021_06_23_011501_create_fabrica', 1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Copiando estrutura para tabela db_trab_tai_03.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.password_resets: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Copiando estrutura para tabela db_trab_tai_03.placa
CREATE TABLE IF NOT EXISTS `placa` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `numero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fabri_id` bigint(20) DEFAULT NULL,
  `resp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contato` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fabri_id` (`fabri_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.placa: ~2 rows (aproximadamente)
/*!40000 ALTER TABLE `placa` DISABLE KEYS */;
INSERT INTO `placa` (`id`, `numero`, `fabri_id`, `resp`, `contato`, `tipo`, `data`, `created_at`, `updated_at`) VALUES
	(1, 'QUA-8625', 1, 'João', '49 99939-2522', 'Colecionador', '2021-06-16', '2021-06-24 20:36:46', '2021-07-21 13:54:30'),
	(2, 'ASD-8462', 2, 'Carlos', '49 99930-0152', 'Mercosul', '2021-06-03', '2021-06-24 20:37:42', '2021-07-21 13:49:05'),
	(3, 'QVU-5255', 6, 'Joana', '(47) 99999-9999', 'vermelha', '2021-07-05', '2021-07-21 14:07:59', '2021-07-21 14:07:59'),
	(4, 'AAA-5523', 2, 'JOA', '(45) 51515-1515', 'vermelha', '2021-08-10', '2021-08-02 12:52:35', '2021-08-02 12:52:35');
/*!40000 ALTER TABLE `placa` ENABLE KEYS */;

-- Copiando estrutura para tabela db_trab_tai_03.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Copiando dados para a tabela db_trab_tai_03.users: ~0 rows (aproximadamente)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'João Curtarelli', 'beninijoaovitor@gmail.com', NULL, '$2y$10$LdFqXSgneo/K1eRI0PsBo.b.0gGp89t9UiGcYT2GmSMk3XFd.fxlO', 'l8PXgCBvIQ6WyUmOnJE5WqoYlgUZPAgp07xtavQP27qEHYsn27hEOX3XfE7k', '2021-06-24 20:35:37', '2021-06-24 20:35:37'),
	(2, 'Joao', 'joao@gmail.com', NULL, '$2y$10$vzCYaQl4TSvCcapl69eYYeJ/2PEZLcUlCC8ZHQEvMVQvbN.GFzXvq', NULL, '2021-08-02 12:28:26', '2021-08-02 12:28:26'),
	(3, 'admin', 'admin@admin.com', NULL, '$2y$10$SaSHy2KPWTrNzxJ9blTEQuGzJKcbunhIrX3KyOkNbPymSKZ0u3k0a', 'gl42wDn8NcbljFFyeDtqZkIAWW5XTKxUrIUoEdKwp3gegpioVtu3dV82yHjK', '2021-08-04 19:17:59', '2021-08-04 19:17:59');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
