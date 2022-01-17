<?php

return [
    "CREATE TABLE `system` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `section` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `content` text COLLATE utf8_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;"
];