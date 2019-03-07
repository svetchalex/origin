<?php
function select()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');

    $sql21 = <<<SQL
        SELECT * FROM result ORDER BY name ASC 
SQL;
    try {
        if (!$res = $mysqli->query($sql21)) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }

    return $row = $res->fetch_all();
}

var_dump(select());