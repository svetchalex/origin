<?php
/**
 *
 */
function select_created()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql2 = <<<SQL
        CREATE TABLE users (
        first_name varchar(255),
        email VARCHAR(255),
        house VARCHAR(255),
        birthday TIMESTAMP,
        created_at DATE)

SQL;
    // created_at тип изменен на DATE из-за ошибки Invalid default value for 'created_at'
    $sql3 = <<<SQL
        INSERT INTO users (first_name, email, house, birthday, created_at) VALUES
        ('Sansa', 'sansa@winter.com', 'stark', '1999-10-23', '2018-11-03'),
        ('Jon', 'jon@winter.com', 'stark', '1999-10-07', '2018-10-23'),
        ('Daenerys', 'daenerys@drakaris.com', 'targarien',  '1999-10-23', '2018-12-23'),
        ('Arya', 'arya@winter.com', 'stark', '2003-03-29', '2018-11-18'),
        ('Robb', 'robb@winter.com', 'stark', '1999-11-23', '2018-11-10'),
        ('Brienne', 'brienne@tarth.com', 'ne pomnu', '2001-04-04', '2018-11-28'),
        ('Tirion', 'tirion@got.com', 'lannister', '1975-1-11', '2018-11-23')
SQL;
    $sql4 = <<<SQL
        SELECT * FROM users WHERE 
        created_at BETWEEN '2018-11-23' AND '2018-12-12' 
        OR  house = 'stark' 
        ORDER BY created_at DESC 
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
}
