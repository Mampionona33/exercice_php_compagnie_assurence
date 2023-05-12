<?php
require "./assets/calcul_age.php";
require_once "./models/conducteurModel.php";

function execut_create_conducteur($conducteur)
{
    $age = calcul_age($conducteur["date_naissance"]);
    $nbr_acc = $conducteur["nbr_acc"];
    $annee_obt_permis = strtotime($conducteur["annee_obt_permis"]);
    $annee_adhesion = strtotime($conducteur["annee_adhesion"]);

    // Vérification de la validité des dates
    if ($annee_obt_permis > $annee_adhesion) {
        return "La date d'obtention du permis ne peut pas être postérieure à la date d'adhésion.";
    }

    // Vérification de l'éligibilité du conducteur
    if ($age < 25 && $annee_obt_permis < 2) {
        if ($nbr_acc == 0) {
            $tarif = 4;
        } else {
            return "Conducteur non éligible";
        }
    } elseif (($age < 25 && $annee_obt_permis >= 2) || ($age >= 25 && $annee_obt_permis < 2)) {
        if ($nbr_acc == 0) {
            $tarif = 3;
        } elseif ($nbr_acc == 1) {
            $tarif = 4;
        } else {
            return "Conducteur non éligible";
        }
    } else {
        if ($nbr_acc == 0) {
            $tarif = 2;
        } elseif ($nbr_acc == 1) {
            $tarif = 3;
        } elseif ($nbr_acc == 2) {
            $tarif = 4;
        } else {
            return "Conducteur non éligible";
        }
    }

    // Vérification de la fidélité du client
    if (calcul_age($conducteur["annee_adhesion"]) > 5) {
        if ($tarif == 2) {
            $tarif = 1;
        } elseif ($tarif == 3) {
            $tarif = 2;
        } elseif ($tarif == 4) {
            $tarif = 3;
        }
    }

    // Enregistrement du conducteur dans la base de données
    if (save_conducteur($conducteur, $tarif)) {
        return "Conducteur éligible. Tarif : " . $tarif;
    } else {
        return "Erreur lors de l'enregistrement du conducteur.";
    }
}




function home_controller()
{
    // Récupérer la liste des conducteurs depuis le modèle
    $conducteurs = get_conducteurs();

    // Vérifier si la liste des conducteurs est vide
    if (empty($conducteurs)) {
        $view_data = home_page([]);
    } else {
        $view_data = home_page($conducteurs);
    }

    return $view_data;
}
