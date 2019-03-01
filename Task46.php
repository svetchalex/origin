<?php
/**
 *
 */
function createTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS article_categories
SQL;
    $sql2 = <<<SQL
        CREATE TABLE article_categories(
        id INT NOT NULL PRIMARY KEY AUTO_INCREMENT, 
        name TEXT)
SQL;
    $sql3 = <<<SQL
        INSERT INTO article_categories (id, name) VALUES
        (null, 'First'),
        (null, 'Second')
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
    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
}
