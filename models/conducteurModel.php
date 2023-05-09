<?php
require "./conn.php";

function create_table_conducteur()
{
    $db = connect_db();

    $sql = "CREATE TABLE conducteurs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    date_naissance DATE,
    annee_obt_permis INT(4) UNSIGNED,
    nbr_acc INT(2) UNSIGNED
  )";

    $db->exec($sql);
}
