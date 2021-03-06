<?php

$_ENV = include __DIR__ . '/../../.env.php';
require_once '../db_connect.php';

$dbc->exec('DROP TABLE IF EXISTS ads');

$query = 'CREATE TABLE ads (
    id INT UNSIGNED NOT NULL AUTO_INCREMENT,
    title VARCHAR(240) NOT NULL,
    description VARCHAR(240) NOT NULL,
    username VARCHAR(100) NOT NULL,
    date_create DATETIME NOT NULL,
    img VARCHAR(255) NOT NULL,
    categories VARCHAR(250) NOT NULL,
    click_count INT NOT NULL,
    price DECIMAL NOT NULL,
    PRIMARY KEY (id)
)';

$dbc->exec($query);