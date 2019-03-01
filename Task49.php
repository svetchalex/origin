<?php
/**
 *
 */
function first_name()
{
    $today = date("Y-m-d H:i:s");
    $f_name = [];
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
        ('Daenerys', 'daenerys@drakaris.com', NULL),
        ('Arya', 'arya@winter.com', '2003-03-29'),
        ('Robb', 'robb@winter.com', '1999-11-23'),
        ('Brienne', 'brienne@tarth.com', '2001-04-04'),
        ('Tirion', 'tirion@got.com', '1975-1-11')
SQL;
    $sql4 = <<<SQL
        SELECT first_name, birthday FROM users ORDER BY  birthday DESC
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
    foreach ($row as $key1 => $item1) {
        if ($item1[1] > $today) {
            $hold = $row[$key1];
            unset($row[$key1]);
            $row[] = $hold;
            $f_name = array_column($row, 0);
        }
    }

    return $f_name;
}
