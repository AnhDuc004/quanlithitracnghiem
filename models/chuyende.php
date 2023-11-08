<?php

require_once "pdo.php";

function load_all_chuyende()
{
    $sql = "SELECT * FROM chuyende ORDER BY id DESC";
    return pdo_query($sql);
}

function load_one_chuyende($id)
{
    $sql = "SELECT * FROM chuyende WHERE id=?";
    return pdo_query_one($sql, $id);
}

function insert_chuyende($tenchuyende)
{
    $sql = "INSERT INTO chuyende(tenchuyende) VALUES(?)";
    pdo_execute($sql, $tenchuyende);
}

function update_chuyende($id, $tenchuyende)
{
    $sql = "UPDATE chuyende SET tenchuyende=? WHERE id=?";
    pdo_execute($sql, $tenchuyende, $id);
}

function delete_chuyende($id)
{
    $sql = "DELETE FROM chuyende WHERE id=?";
    pdo_execute($sql, $id);
}
