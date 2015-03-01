CREATE TABLE `comments` (
	`id` INT(11) NOT NULL,
	`body` VARCHAR(300) NOT NULL,
	`content_id` INT NOT NULL,
	`created` INT NOT NULL,
	`user_name` VARCHAR(100) NOT NULL,
	PRIMARY KEY (`id`)
)
COMMENT='таблица комментариев'
COLLATE='utf8_general_ci'
ENGINE=InnoDB
AUTO_INCREMENT=1
;

