CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `author_id` int(11) DEFAULT NULL,
  `language` enum("ro", "en", "fr") DEFAULT "ro",
  `keywords` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `cathegory` enum("other", "software", "hardware", "security", "programming") DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL UNIQUE,
  `image` varchar(255) NOT NULL,
  `image_alt` varchar(255) NOT NULL,
  `short_text` text NOT NULL,
  `body` text NOT NULL,
  `published` tinyint(1) NOT NULL,
  `created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE = INNODB DEFAULT CHARSET = utf8;
