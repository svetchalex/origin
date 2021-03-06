<?php
/**
 *
 */
function createTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    $sql1 = <<<SQL
        DROP TABLE IF EXISTS courses
SQL;
    $sql2 = <<<SQL
        DROP TABLE IF EXISTS users
SQL;
    $sql3 = <<<SQL
        DROP TABLE IF EXISTS course_members
SQL;
    $sql4 = <<<SQL
        CREATE TABLE courses(
        name VARCHAR (255), 
        body TEXT, 
        created_at TIMESTAMP)
SQL;
    $sql5 = <<<SQL
        CREATE TABLE users(
        first_name VARCHAR (255), 
        email VARCHAR (255), 
        manager  BOOLEAN)
SQL;
    $sql6 = <<<SQL
        CREATE TABLE course_members(
        user_id INTEGER, 
        course_id INTEGER , 
        created_at  TIMESTAMP)
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

