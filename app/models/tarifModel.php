<?php

function create_table_tarif()
{
    $db = connect_db();
    $sql = "CREATE TABLE IF NOT EXISTS tarifs(
    id_tarif INT(6) UNSIGNED UNIQUE,
    code_couleur VARCHAR(30) DEFAULT 'bleu' NOT NULL,
    prix INT(10) DEFAULT 100
    );";
    $db->exec($sql);
}

function populate_tarif()
{
    $db = connect_db();
    $sql = 'INSERT INTO tarifs (id_tarif, code_couleur, prix)
  VALUES 
  (1, \'bleu\', 100),
  (2, \'vert\', 200),
  (3, \'orange\', 300),
  (4, \'rouge\', 400)
  ON DUPLICATE KEY UPDATE id_tarif = id_tarif
  ';
    $db->exec($sql);
}
