<?php

return [
  "CREATE TABLE `widget3` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `cat_id` bigint(20)  NOT NULL,
  `status` enum('1','0') COLLATE utf8_persian_ci NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;"
];
