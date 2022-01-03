<?php

return [
  "CREATE TABLE `galleries` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `image` varchar(200) NOT NULL,
  `post_id` bigint(20)  NOT NULL,
  `status` enum('1','0') COLLATE utf8_persian_ci NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
  -- FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;"

];