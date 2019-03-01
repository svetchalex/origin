<?php
/**
 *
 */
function alterTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS users CASCADE
SQL;
    $sql2 = <<<SQL
        CREATE TABLE users (
        id bigint PRIMARY KEY AUTO_INCREMENT,
        email varchar(255) NOT NULL,
        age integer,
        name varchar(255))
SQL;
    $sql3 = <<<SQL
        INSERT INTO users (email, age, name) VALUES ('noc@mail.com', 44, 'mike')
SQL;
    $sql4 = <<<SQL
        ALTER TABLE users
        ADD UNIQUE (email), 
        DROP COLUMN age, 
        CHANGE COLUMN name first_name VARCHAR (255) NOT NULL,
        ADD created_at TIMESTAMP 
SQL;
    try {
        if (!$mysqli->query($sql1)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql2)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql3)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql4)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
}
