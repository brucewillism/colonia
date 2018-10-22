<?php
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . 'localhost' . ';dbname=' . 'colonia' . ';charset=utf8', 'root', '0301HEX@');

    return $PDO;
}