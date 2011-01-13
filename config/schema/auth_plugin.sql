#auth sql generated on: 2011-01-13 14:57:20 : 1294927040

DROP TABLE IF EXISTS `tokens`;
DROP TABLE IF EXISTS `users`;


CREATE TABLE `tokens` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `created` datetime DEFAULT NULL,
        `modified` datetime DEFAULT NULL,
        `token` varchar(32) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `data` text CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,    PRIMARY KEY  (`id`),
        UNIQUE KEY `token` (`token`))   DEFAULT CHARSET=utf8,
        COLLATE=utf8_general_ci,
        ENGINE=MyISAM;

CREATE TABLE `users` (
        `id` int(11) NOT NULL AUTO_INCREMENT,
        `created` datetime DEFAULT NULL,
        `modified` datetime DEFAULT NULL,
        `lastlogin` datetime DEFAULT NULL,
        `name` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `email` varchar(200) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `username` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
        `password` varchar(42) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL, PRIMARY KEY  (`id`),
        UNIQUE KEY `email` (`email`))   DEFAULT CHARSET=utf8,
        COLLATE=utf8_general_ci,
        ENGINE=MyISAM;