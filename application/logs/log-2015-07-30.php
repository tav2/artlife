<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2015-07-30 08:20:12 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at Z:\home\test_mr_web.dev\www\application\models\Install.php:68) Z:\home\test_mr_web.dev\www\system\core\Common.php 569
ERROR - 2015-07-30 08:20:12 --> Severity: Runtime Notice --> date() [<a href='function.date'>function.date</a>]: It is not safe to rely on the system's timezone settings. Please use the date.timezone setting, the TZ environment variable or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'UTC' for '6.0/no DST' instead Z:\home\test_mr_web.dev\www\system\core\Log.php 176
ERROR - 2015-07-30 08:20:12 --> Severity: Runtime Notice --> date() [<a href='function.date'>function.date</a>]: It is not safe to rely on the system's timezone settings. Please use the date.timezone setting, the TZ environment variable or the date_default_timezone_set() function. In case you used any of those methods and you are still getting this warning, you most likely misspelled the timezone identifier. We selected 'UTC' for '6.0/no DST' instead Z:\home\test_mr_web.dev\www\system\core\Log.php 204
ERROR - 2015-07-30 08:20:12 --> Severity: Error --> Call to undefined function  password_hash() Z:\home\test_mr_web.dev\www\application\models\Install.php 68
ERROR - 2015-07-30 09:15:37 --> 404 Page Not Found: Faviconico/action_index
ERROR - 2015-07-30 09:15:37 --> 404 Page Not Found: Faviconico/action_index
ERROR - 2015-07-30 09:15:41 --> Query error: No database selected - Invalid query: CREATE TABLE IF NOT EXISTS `users` (
	`user_id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(255) NOT NULL,
	`user_password` VARCHAR(64) NOT NULL,
	CONSTRAINT `pk_users` PRIMARY KEY(`user_id`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-07-30 09:15:41 --> Query error: No database selected - Invalid query: CREATE TABLE IF NOT EXISTS `components` (
	`component_id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`component_name` VARCHAR(100) NOT NULL,
	`component_version` VARCHAR(5) NOT NULL,
	CONSTRAINT `pk_components` PRIMARY KEY(`component_id`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-07-30 09:15:41 --> Query error: No database selected - Invalid query: INSERT INTO `users` (`user_name`, `user_password`) VALUES ('admin', '$2y$10$oYfhn1NIAapTQpFUKMJQQuD0ZVEFXKjKILkedUtgLDS3ozVQrOWlW')
ERROR - 2015-07-30 09:15:41 --> Query error: No database selected - Invalid query: CREATE TABLE IF NOT EXISTS `users` (
	`user_id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`user_name` VARCHAR(255) NOT NULL,
	`user_password` VARCHAR(64) NOT NULL,
	CONSTRAINT `pk_users` PRIMARY KEY(`user_id`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-07-30 09:15:41 --> Query error: No database selected - Invalid query: CREATE TABLE IF NOT EXISTS `components` (
	`component_id` INT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
	`component_name` VARCHAR(100) NOT NULL,
	`component_version` VARCHAR(5) NOT NULL,
	CONSTRAINT `pk_components` PRIMARY KEY(`component_id`)
) ENGINE = InnoDB DEFAULT CHARACTER SET = utf8 COLLATE = utf8_general_ci
ERROR - 2015-07-30 09:15:41 --> Query error: No database selected - Invalid query: INSERT INTO `users` (`user_name`, `user_password`) VALUES ('admin', '$2y$10$bqlkLOxYYb1awgQRuGeJju8pFImc9n85Ohmn7SteTmXVK48tVDuoi')
