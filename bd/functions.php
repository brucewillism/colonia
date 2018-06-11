<?php
/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . localhost . ';dbname=' . id2891328_s . ';charset=utf8', root, 123);

    return $PDO;
}