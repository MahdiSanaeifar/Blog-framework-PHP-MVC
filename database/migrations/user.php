<?php

return [
  "CREATE TABLE `users` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `email` varchar(191) COLLATE utf8_persian_ci NOT NULL,
  `username` varchar(191) COLLATE utf8_persian_ci NOT NULL,
  `avatar` varchar(200) COLLATE utf8_persian_ci,
  `password` varchar(191) NOT NULL,
  `status` enum('1','0') COLLATE utf8_persian_ci NOT NULL DEFAULT '1',
  `is_active` enum('1','0') COLLATE utf8_persian_ci NOT NULL DEFAULT '0',
  `verify_token` varchar(191) DEFAULT NULL,
  `user_type` enum('user','admin') COLLATE utf8_persian_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(191) DEFAULT NULL,
  `remember_token_expire` datetime DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;"

  
];