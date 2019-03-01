<?php
/**
 *
 */
function createTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS topics
SQL;
    $sql2 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql3 = <<<SQL
        CREATE TABLE users(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        username VARCHAR(255) NOT NULL UNIQUE, 
        email VARCHAR(255) NOT NULL, 
        created_at TIMESTAMP NOT NULL)
SQL;
    $sql4 = <<<SQL
        CREATE TABLE topics(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        user_id INT NOT NULL,
        body VARCHAR(255) NOT NULL, 
        created_at TIMESTAMP NOT NULL,
        FOREIGN KEY (user_id) REFERENCES users(id))
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
