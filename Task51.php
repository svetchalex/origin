<?php
/**
 *
 */
function select_birthday()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql2 = <<<SQL
        CREATE TABLE users (
        first_name varchar(255),
        email varchar(255),
        birthday timestamp
)

SQL;
    $sql3 = <<<SQL
        INSERT INTO users (first_name, email, birthday) VALUES
        ('Sansa', 'sansa@winter.com', '1999-10-23'),
        ('Jon', 'jon@winter.com', '1999-10-07'),
        ('Daenerys', 'daenerys@drakaris.com', '1999-10-23'),
        ('Arya', 'arya@winter.com', '2003-03-29'),
        ('Robb', 'robb@winter.com', '1999-11-23'),
        ('Brienne', 'brienne@tarth.com', '2001-04-04'),
        ('Tirion', 'tirion@got.com', '1975-1-11')
SQL;
    $sql4 = <<<SQL
        SELECT * FROM users WHERE birthday < '2002-10-03' ORDER BY first_name ASC LIMIT 2,3
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
