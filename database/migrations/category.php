<?php

return [
  "CREATE TABLE `categories` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT ,
  `name` varchar(200) COLLATE utf8_persian_ci NOT NULL,
  `parent_id` bigint(20) DEFAULT NULL,
  `status` enum('1','0') COLLATE utf8_persian_ci NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;"
];

