CREATE DATABASE ecoconecta;

USE ecoconecta;

CREATE TABLE `users` (
  `id` integer PRIMARY KEY,
  `username` varchar(255),
  `email` varchar(255),
  `password` varchar(255),
  `status` bool
);

CREATE TABLE `forum` (
  `id` integer PRIMARY KEY,
  `user_id` integer NOT NULL,
  `affair` varchar(255),
  `message` text COMMENT 'Content of the post'
);

CREATE TABLE `practical_tips` (
  `id` integer PRIMARY KEY,
  `user_id` integer,
  `title` varchar(255),
  `content` text,
  `image_url` varchar(255),
  `active` bool DEFAULT true
);

CREATE TABLE `sustainability_news` (
  `id` integer PRIMARY KEY,
  `user_id` integer,
  `title` varchar(255),
  `content` text,
  `image_url` varchar(255),
  `published_date` date
);

CREATE TABLE `final_messages` (
  `id` integer PRIMARY KEY,
  `user_id` integer,
  `title` varchar(255),
  `content` text,
  `image_url` varchar(255),
  `active` bool DEFAULT true
);

ALTER TABLE `forum` ADD CONSTRAINT `user_forum` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `practical_tips` ADD CONSTRAINT `user_practical_tips` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `sustainability_news` ADD CONSTRAINT `user_sustainability_news` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

ALTER TABLE `final_messages` ADD CONSTRAINT `user_final_messages` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
