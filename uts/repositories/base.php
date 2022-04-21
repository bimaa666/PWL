<?php

include "connection.php";

if (!function_exists('get')) {
    function get(string $tableName, string $column = "*", string $condition = '')
    {
        global $connection;
        return mysqli_query($connection, "SELECT $column FROM $tableName $condition");
    }
}

if (!function_exists('find')) {

    function find(string $tableName, string $condition)
    {
        global $connection;
        return mysqli_query($connection, "SELECT * FROM $tableName $condition");
    }
}

if (!function_exists('insertRepo')) {
    function insertRepo(string $tableName, string $input)
    {
        global $connection;
        return mysqli_query($connection, "INSERT INTO $tableName VALUES($input)");
    }
}

if (!function_exists('updateRepo')) {
    function updateRepo(string $tableName, string $input, $condition)
    {
        global $connection;
        return mysqli_query($connection, "UPDATE $tableName SET $input WHERE $condition");
    }
}

if (!function_exists('deleteRepo')) {
    function deleteRepo(string $tableName, $condition)
    {
        global $connection;
        return mysqli_query($connection, "DELETE FROM $tableName WHERE $condition");
    }
}
