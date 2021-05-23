-- MariaDB dump 10.18  Distrib 10.4.17-MariaDB, for Win64 (AMD64)
--
-- Host: localhost    Database: libri
-- ------------------------------------------------------
-- Server version	10.4.17-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `autore`
--

DROP TABLE IF EXISTS `autore`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autore` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `nome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cognome` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `autore_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `autore_autore_id_index` (`autore_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autore`
--

LOCK TABLES `autore` WRITE;
/*!40000 ALTER TABLE `autore` DISABLE KEYS */;
INSERT INTO `autore` VALUES (1,'Sophia Johns','Cassin','1','2021-02-07 09:26:00','2021-02-07 09:26:00'),(2,'Jeanette Denesik','Kautzer','2','2021-02-07 09:26:00','2021-02-07 09:26:00'),(3,'Jermey DuBuque','Ziemann','3','2021-02-07 09:26:00','2021-02-07 09:26:00'),(4,'Makayla Feil','Weissnat','4','2021-02-07 09:26:00','2021-02-07 09:26:00'),(5,'Dr. Foster Ortiz Sr.','Padberg','5','2021-02-07 09:26:00','2021-02-07 09:26:00'),(6,'Alice Mraz Sr.','Anderson','6','2021-02-07 09:26:00','2021-02-07 09:26:00'),(7,'Petra Becker','Berge','7','2021-02-07 09:26:00','2021-02-07 09:26:00'),(8,'Brendan Hudson','Prosacco','8','2021-02-07 09:26:00','2021-02-07 09:26:00'),(9,'Melba Deckow','Greenholt','9','2021-02-07 09:26:00','2021-02-07 09:26:00'),(10,'Mrs. Barbara Gerlach DDS','Grant','10','2021-02-07 09:26:00','2021-02-07 09:26:00'),(11,'pippo','gfdfgfdgfdgfdg','11','2021-04-02 13:24:56','2021-04-02 13:24:56');
/*!40000 ALTER TABLE `autore` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `autore_books`
--

DROP TABLE IF EXISTS `autore_books`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `autore_books` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `autore_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `autore_books_book_id_foreign` (`book_id`),
  KEY `autore_books_autore_id_foreign` (`autore_id`),
  CONSTRAINT `autore_books_autore_id_foreign` FOREIGN KEY (`autore_id`) REFERENCES `autore` (`autore_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `autore_books_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `book` (`book_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `autore_books`
--

LOCK TABLES `autore_books` WRITE;
/*!40000 ALTER TABLE `autore_books` DISABLE KEYS */;
/*!40000 ALTER TABLE `autore_books` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `book`
--

DROP TABLE IF EXISTS `book`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `book` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `titolo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `book_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `book_book_id_foreign` (`book_id`),
  CONSTRAINT `book_book_id_foreign` FOREIGN KEY (`book_id`) REFERENCES `autore` (`autore_id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `book`
--

LOCK TABLES `book` WRITE;
/*!40000 ALTER TABLE `book` DISABLE KEYS */;
INSERT INTO `book` VALUES (1,'Repellat qui dolores voluptatem quo illum et.oo','1','2021-02-07 09:26:00','2021-02-07 10:09:07'),(2,'Recusandae ratione.','2','2021-02-07 09:26:00','2021-02-07 09:26:00'),(3,'Consequatur officiis sed odit quae ut.','3','2021-02-07 09:26:01','2021-02-07 09:26:01'),(4,'Est dolor.','4','2021-02-07 09:26:01','2021-02-07 09:26:01'),(5,'Ut sint enim.','5','2021-02-07 09:26:01','2021-02-07 09:26:01'),(6,'Perspiciatis dolore qui ex.','6','2021-02-07 09:26:01','2021-02-07 09:26:01'),(7,'Labore iste dolorum atque nemo.','7','2021-02-07 09:26:01','2021-02-07 09:26:01'),(8,'Quis corporis quisquam rerum.','8','2021-02-07 09:26:01','2021-02-07 09:26:01'),(9,'Sed perferendis id.','9','2021-02-07 09:26:01','2021-02-07 09:26:01'),(10,'Laboriosam dolores.','10','2021-02-07 09:26:01','2021-02-07 09:26:01'),(11,'segnaposto titolo','1','2021-02-07 09:26:35','2021-02-07 09:26:35'),(12,'segnaposto titolo','1','2021-02-07 09:27:03','2021-02-07 09:27:03'),(13,'segnaposto titolo','2','2021-02-07 09:27:11','2021-02-07 09:27:11');
/*!40000 ALTER TABLE `book` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `failed_jobs`
--

LOCK TABLES `failed_jobs` WRITE;
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_08_19_000000_create_failed_jobs_table',1),(4,'2021_01_29_164317_create_autore_table',1),(5,'2021_01_29_164452_create_book_table',1),(6,'2021_01_29_165911_create_autore_books_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Dr. Keith Glover','ylarson@example.org','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','9k5HyPOWkW','2021-02-07 09:25:59','2021-02-07 09:25:59'),(2,'Prof. Constantin D\'Amore','yschoen@example.org','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','8MomTOatld','2021-02-07 09:25:59','2021-02-07 09:25:59'),(3,'Ruby Huels','gokon@example.com','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','fUb29DYwgW','2021-02-07 09:25:59','2021-02-07 09:25:59'),(4,'Prof. Karolann Effertz MD','abshire.caleigh@example.com','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','p1bffu4TOx','2021-02-07 09:25:59','2021-02-07 09:25:59'),(5,'Sonny Hermann','donny44@example.org','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','0Sc3fULsk3','2021-02-07 09:26:00','2021-02-07 09:26:00'),(6,'Madeline Steuber I','kory82@example.com','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','1VD27Wqv53','2021-02-07 09:26:00','2021-02-07 09:26:00'),(7,'Roberto Kozey','gerald03@example.net','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','hEcER3claR','2021-02-07 09:26:00','2021-02-07 09:26:00'),(8,'Destiney Leffler','burley.kohler@example.com','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','g9eYQn5SHN','2021-02-07 09:26:00','2021-02-07 09:26:00'),(9,'Briana Haag','felipa22@example.org','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','YOAqEjFkXQ','2021-02-07 09:26:00','2021-02-07 09:26:00'),(10,'Ms. Anissa Ferry Sr.','saul67@example.org','2021-02-07 09:25:59','$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi','HapZdpCEzL','2021-02-07 09:26:00','2021-02-07 09:26:00');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-04-02 13:30:10
