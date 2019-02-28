<?php
/**
 *
 */
function createTable()
{
    $mysqli = new mysqli('localhost', 'stud03', 'password', 'data');
    try {
        if (!$mysqli->query(
                "CREATE TABLE courses(name VARCHAR (255), body TEXT, created_at TIMESTAMP)") ||
            !$mysqli->query(
                "CREATE TABLE users(first_name VARCHAR (255), email VARCHAR (255), manager  BOOLEAN)") ||
            !$mysqli->query(
                "CREATE TABLE course_members(user_id INTEGER, course_id INTEGER , created_at  TIMESTAMP )")) {
            throw new Exception($mysqli->error);
        }

    } catch (Exception $e) {
        echo 'Error: ', $e->getMessage(), "\n";
    }
}

createTable();