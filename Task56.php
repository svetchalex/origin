<?php
/**
 *
 */
function createTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS friendship
SQL;
    $sql2 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql3 = <<<SQL
        CREATE TABLE users (
        id bigint PRIMARY KEY,
        first_name varchar(255),
        email varchar(255),
        birthday timestamp)
SQL;
    $sql4 = <<<SQL
        CREATE TABLE friendship (
        id bigint PRIMARY KEY  AUTO_INCREMENT,
        user1_id bigint REFERENCES users(id),
        user2_id bigint REFERENCES users(id))
SQL;
    $sql5 = <<<SQL
        INSERT INTO users (id, first_name, email, birthday) VALUES
        (1, 'Sansa', 'sansa@winter.com', '1999-10-23'),
        (2, 'Jon', 'jon@winter.com', '1999-10-07'),
        (3, 'Daenerys', 'daenerys@drakaris.com', '1999-10-23'),
        (4, 'Arya', 'arya@winter.com', '2003-03-29'),
        (5, 'Robb', 'robb@winter.com', '1999-11-23'),
        (6, 'Brienne', 'brienne@tarth.com', '2001-04-04'),
        (7, 'Tirion', 'tirion@got.com', '1975-1-11')
SQL;
    $sql6 = <<<SQL
         INSERT INTO friendship (id, user1_id, user2_id) VALUES
         (null, 2, 7),
         (null, 7, 2)
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
