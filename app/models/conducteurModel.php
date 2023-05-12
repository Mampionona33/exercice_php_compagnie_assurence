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

function save_conducteur($conducteur, $tarif)
{
    $conn = connect_db();
    $stmt = $conn->prepare("INSERT INTO conducteurs (nom, prenom, date_naissance, annee_obt_permis, annee_adhesion, nbr_acc, id_tarif) VALUES (:nom, :prenom, :date_naissance, :annee_obt_permis, :annee_adhesion, :nbr_acc, :id_tarif)");
    $stmt->bindParam(':nom', $conducteur['nom']);
    $stmt->bindParam(':prenom', $conducteur['prenom']);
    $stmt->bindParam(':date_naissance', $conducteur['date_naissance']);
    $stmt->bindParam(':annee_obt_permis', $conducteur['annee_obt_permis']);
    $stmt->bindParam(':annee_adhesion', $conducteur['annee_adhesion']);
    $stmt->bindParam(':nbr_acc', $conducteur['nbr_acc']);
    $stmt->bindParam(':id_tarif', $tarif);
    $stmt->execute();
    return true;
}

// Autres fonctions du modèle...
