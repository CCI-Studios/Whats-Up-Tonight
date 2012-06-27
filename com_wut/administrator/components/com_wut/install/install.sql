CREATE TABLE IF NOT EXISTS `#__wut_locations` (
	`wut_location_id` SERIAL,

	`title` VARCHAR(250) NOT NULL,
	`logo` VARCHAR(250) NOT NULL,
	`address` VARCHAR(50) NOT NULL,
	`city` VARCHAR(20) NOT NULL,
	`province` VARCHAR(20) NOT NULL,
	`postal` VARCHAR(10) NOT NULL,
	`phone` VARCHAR(20) NOT NULL,
	`website` VARCHAR(250) NOT NULL,
	`reviews` VARCHAR(250) NOT NULL,
	`map` VARCHAR(250) NOT NULL,

	`enabled` TINYINT(1) NOT NULL DEFAULT 0

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__wut_ups` (
	`wut_up_id` SERIAL,

	`title` VARCHAR(250) NOT NULL,
	`subtitle` VARCHAR(250) NOT NULL,
	`intro` VARCHAR(100) NOT NULL,
	`short` VARCHAR(100) NOT NULL,
	`description` TEXT NOT NULL COMMENT "@Filter('html')",
	`date` DATETIME NOT NULL,

	`enabled` TINYINT(1) NOT NULL DEFAULT 0,
	`wut_location_id` BIGINT(20) NOT NULL

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__wut_categories` (
	`wut_category_id` SERIAL,

	`title` VARCHAR(250) NOT NULL,
	`logo` VARCHAR(250) NOT NULL,

	`enabled` TINYINT(1) NOT NULL

) ENGINE=MyISAM DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS `#__wut_category_up` (
	`wut_category_id` BIGINT(20) NOT NULL,
	`wut_up_id` BIGINT(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;