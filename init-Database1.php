<?php

require_once __DIR__ . '/Database1.php';

$sql = '
    CREATE TABLE IF NOT EXISTS `Articles`(
    `id` INT AUTO_INCREMENT NOT NULL PRIMARY KEY,
    `Nom` VARCHAR(255) NOT NULL,
    `Prix` VARCHAR(255) NOT NULL
    );
';

$pdo->query($sql);