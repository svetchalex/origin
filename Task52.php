<?php
/**
 *
 */
function select_house()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql2 = <<<SQL
        CREATE TABLE users (
        first_name varchar(255),
        email varchar(255),
        house varchar(255),
        birthday timestamp)
SQL;
    $sql3 = <<<SQL
        INSERT INTO users (first_name, email, birthday, house) VALUES
        ('Sansa', 'sansa@winter.com', '1999-10-23', 'stark'),
        ('Jon', 'jon@winter.com', '1999-10-07', 'stark'),
        ('Daenerys', 'daenerys@drakaris.com', '1999-10-23', 'targarien'),
        ('Arya', 'arya@winter.com', '2003-03-29', 'stark'),
        ('Robb', 'robb@winter.com', '1999-11-23', 'stark'),
        ('Brienne', 'brienne@tarth.com', '2001-04-04', 'tart'),
        ('Tirion', 'tirion@got.com', '1975-1-11', 'lannister')
SQL;
    $sql4 = <<<SQL
        SELECT DISTINCT (house) AS house FROM users ORDER BY house ASC 
SQL;

    try {
        if (!$mysqli->query($sql1) || !$mysqli->query($sql2)) {
            throw new Exception($mysqli->error);
        }
        if (!$mysqli->query($sql3)) {
            throw new Exception($mysqli->error);
        }
        if (!$res = $mysqli->query($sql4)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
    $row = $res->fetch_all();
    return $row;
}

