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
        DROP TABLE IF EXISTS cars
SQL;
    $sql3 = <<<SQL
       CREATE TABLE users (
       first_name varchar(255),
       last_name varchar(255),
       created_at timestamp)
SQL;
    $sql4 = <<<SQL
        CREATE TABLE cars(
        user_first_name varchar(255),
        brand varchar(255), 
        model varchar(255))
SQL;
    $sql5 = <<<SQL
       INSERT INTO users (first_name, last_name, created_at) VALUES
       ('Voinov', 'Viktor', '2003-03-29'),
       ('Smernov', 'Oleg', '2006-11-18')
SQL;
    $sql6 = <<<SQL
       INSERT INTO cars (user_first_name, brand, model) VALUES
       ('Voinov', 'Bentley', 'Azure'),
       ('Smernov', 'Alfa Romeo', 'Stelvio Ti (949)'),
       ('Smernov', 'Chevrolet', 'Silverado 2500 HD Custom Crew Cab'),
       ('Smernov', 'Ferrari', 'SF90 (670)'),
       ('Voinov', 'Ford', 'Focus ST')
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
