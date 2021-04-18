-- Adminer 4.7.7 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `nickname` (`nickname`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

DROP TABLE IF EXISTS `table`;
CREATE TABLE `table` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `week_start` varchar(10) DEFAULT NULL,
  `week_end` varchar(10) DEFAULT NULL,
  `monday_morning_start` varchar(10) DEFAULT NULL,
  `monday_morning_end` varchar(10) DEFAULT NULL,
  `monday_afternoon_start` varchar(10) DEFAULT NULL,
  `monday_afternoon_end` varchar(10) DEFAULT NULL,
  `monday_start` varchar(10) DEFAULT NULL,
  `monday_end` varchar(10) DEFAULT NULL,
  `monday_result_standard` varchar(10) DEFAULT NULL,
  `monday_result_hundredths` varchar(10) DEFAULT NULL,
  `tuesday_morning_start` varchar(10) DEFAULT NULL,
  `tuesday_morning_end` varchar(10) DEFAULT NULL,
  `tuesday_afternoon_start` varchar(10) DEFAULT NULL,
  `tuesday_afternoon_end` varchar(10) DEFAULT NULL,
  `tuesday_start` varchar(10) DEFAULT NULL,
  `tuesday_end` varchar(10) DEFAULT NULL,
  `tuesday_result_standard` varchar(10) DEFAULT NULL,
  `tuesday_result_hundredths` varchar(10) DEFAULT NULL,
  `wednesday_morning_start` varchar(10) DEFAULT NULL,
  `wednesday_morning_end` varchar(10) DEFAULT NULL,
  `wednesday_afternoon_start` varchar(10) DEFAULT NULL,
  `wednesday_afternoon_end` varchar(10) DEFAULT NULL,
  `wednesday_start` varchar(10) DEFAULT NULL,
  `wednesday_end` varchar(10) DEFAULT NULL,
  `wednesday_result_standard` varchar(10) DEFAULT NULL,
  `wednesday_result_hundredths` varchar(10) DEFAULT NULL,
  `thursday_morning_start` varchar(10) DEFAULT NULL,
  `thursday_morning_end` varchar(10) DEFAULT NULL,
  `thursday_afternoon_start` varchar(10) DEFAULT NULL,
  `thursday_afternoon_end` varchar(10) DEFAULT NULL,
  `thursday_start` varchar(10) DEFAULT NULL,
  `thursday_end` varchar(10) DEFAULT NULL,
  `thursday_result_standard` varchar(10) DEFAULT NULL,
  `thursday_result_hundredths` varchar(10) DEFAULT NULL,
  `friday_morning_start` varchar(10) DEFAULT NULL,
  `friday_morning_end` varchar(10) DEFAULT NULL,
  `friday_afternoon_start` varchar(10) DEFAULT NULL,
  `friday_afternoon_end` varchar(10) DEFAULT NULL,
  `friday_start` varchar(10) DEFAULT NULL,
  `friday_end` varchar(10) DEFAULT NULL,
  `friday_result_standard` varchar(10) DEFAULT NULL,
  `friday_result_hundredths` varchar(10) DEFAULT NULL,
  `saturday_morning_start` varchar(10) DEFAULT NULL,
  `saturday_morning_end` varchar(10) DEFAULT NULL,
  `saturday_afternoon_start` varchar(10) DEFAULT NULL,
  `saturday_afternoon_end` varchar(10) DEFAULT NULL,
  `saturday_start` varchar(10) DEFAULT NULL,
  `saturday_end` varchar(10) DEFAULT NULL,
  `saturday_result_standard` varchar(10) DEFAULT NULL,
  `saturday_result_hundredths` varchar(10) DEFAULT NULL,
  `final_standard_result` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `final_hundredths_result` varchar(10) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `user_id` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`),
  CONSTRAINT `table_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;



-- 2021-04-18 08:15:48