<?php

include "./repositories/base.php";
include "./config/connection.php";

function createService(array $input)
{
    global $connection;
    try {
        $password = password_hash($input['password'], PASSWORD_DEFAULT);
        insertRepo("user", "null,'$input[nama]','$input[email]','$input[telp]', '$password','pelanggan'");
        $userId = mysqli_insert_id($connection);
        insertRepo("pelanggan", "null, '$input[nama]', '$input[alamat]', '$input[telp]', '$userId'");
        mysqli_commit($connection);
        return true;
    } catch (\Throwable $th) {
        mysqli_rollback($connection);
        return false;
    }
}

function updateService(array $input, $id)
{
    global $connection;

    try {
        $response = updateRepo("pelanggan", "nama = '$input[nama]',telp = '$input[telp]', alamat = '$input[alamat]'", "kode_pelanggan = '$id'");

        $user = find("pelanggan", "WHERE kode_pelanggan = '$id'");

        $user = mysqli_fetch_assoc($user);
        if ($input['password'] != "") {
            $password = password_hash($input['password'], PASSWORD_DEFAULT);
            $response =            updateRepo("user", "nama = '$input[nama]',email = '$input[email]',telp = '$input[telp]', password = '$password'", "kode_user = '$user[kode_user]'");
        } else {
            $response = updateRepo("user", "nama = '$input[nama]',email = '$input[email]',telp = '$input[telp]'", "kode_user = '$user[kode_user]'");
        }
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}

function deleteService($id)
{
    try {
        deleteRepo("pelanggan", "kode_pelanggan = $id");
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}
