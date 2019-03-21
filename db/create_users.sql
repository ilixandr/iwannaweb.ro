CREATE TABLE `users` (
    `id` int(11) AUTO_INCREMENT PRIMARY KEY NOT NULL,
    `username` varchar(255) NOT NULL UNIQUE,
    `email` varchar(255) NOT NULL UNIQUE,
    `role` enum('Admin', 'Contributor') DEFAULT NULL,
    `password` varchar(255) NOT NULL,
    `created` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=INNODB DEFAULT CHARSET=utf8;
