<?php
require "./conn.php";

function create_table_conducteur()
{
  $db = connect_db();

  $sql = "CREATE TABLE IF NOT EXISTS conducteurs (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nom VARCHAR(30) NOT NULL,
    prenom VARCHAR(30) NOT NULL,
    date_naissance DATE,
    annee_adhesion DATE,
    annee_obt_permis DATE,
    nbr_acc INT(2) UNSIGNED,
    id_tarif INT(6) UNSIGNED );";

  $db->exec($sql);
}

function create_conducteur()
{
}
