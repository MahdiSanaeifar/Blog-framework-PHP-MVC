<?php

return [
  "CREATE TABLE `posts-tags` (
  `post_id` bigint(20)  NOT NULL,
  `tag_id` bigint(20) NOT NULL,
  FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`),
  FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_persian_ci;"
];