CREATE TABLE `indicators` (
    `id` INT NOT NULL AUTO_INCREMENT , 
    `temperature` FLOAT NOT NULL , 
    `humidity` FLOAT NOT NULL , 
    `light` FLOAT NOT NULL , 
    `created_at` TIMESTAMP NOT NULL , PRIMARY KEY (`id`)
) ENGINE = InnoDB CHARSET=utf8mb4 COLLATE utf8mb4_general_ci;