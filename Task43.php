<?php
/**
 *
 */
function changeTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql2 = <<<SQL
        CREATE TABLE users
        first_name varchar(255),
        email varchar(255),
        manager boolean
SQL;
    $sql3 = <<<SQL
        INSERT INTO users (first_name, email) VALUES
        ('Sansa', 'sansa@winter.com'),
        ('Tirion', 'tirion@got.com')
SQL;
    $sql4 = <<<SQL
        DELETE FROM users WHERE first_name = 'Sansa'
SQL;
    $sql5 = <<<SQL
        INSERT INTO users (first_name, email) VALUES
        ('Arya', 'arya@winter.com')
SQL;
    $sql6 = <<<SQL
        UPDATE users SET manager = true WHERE email = 'tirion@got.com'
SQL;

    try {
        if (!$mysqli->query($sql1) || !$mysqli->query($sql2)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql3)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql4)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql5)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql6)) {
            throw new Exception($mysqli->error);
        }
    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
}