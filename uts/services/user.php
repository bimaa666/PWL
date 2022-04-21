<?php

include "./repositories/base.php";
include "./config/connection.php";

function createService(array $input)
{
    try {
        $password = password_hash($input['password'], PASSWORD_DEFAULT);
        insertRepo("user", "null,'$input[nama]','$input[email]','$input[telp]', '$password','administrator'");
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}

function updateService(array $input, $id)
{
    try {

        if ($input['password'] != "") {
            $password = password_hash($input['password'], PASSWORD_DEFAULT);
            updateRepo("user", "nama = '$input[nama]',email = '$input[email]',telp = '$input[telp]', password = '$password'", "kode_user = $id");
        } else {
            updateRepo("user", "nama = '$input[nama]',email = '$input[email]',telp = '$input[telp]'", "kode_user = $id");
        }
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}

function deleteService($id)
{
    try {
        deleteRepo("user", "kode_user = " . $id);
        return true;
    } catch (\Throwable $th) {
        return false;
    }
}
