<?php
require "./assets/calcul_age.php";
function execut_create_conducteur($conducteur)
{

    // var_dump($conducteur);
    $age = calcul_age($conducteur["date_naissance"]);
    $nbr_acc = $conducteur["nbr_acc"];
    $anciennete_permis =  calcul_age($conducteur["annee_obt_permis"]);
    $anciennete_membre = calcul_age($conducteur["annee_adhesion"]);
    $tarif = 4;

    $message_reffus = "Conducteur non éligible";

    if ($age <= 25) {
        if ($anciennete_permis <= 2) {
            if ($nbr_acc == 0) {
                $tarif = 4;
            }
        } else {
            if ($nbr_acc == 0) {
                $tarif = 3;
            } elseif ($nbr_acc == 1) {
                $tarif = 4;
            }
        }
    } else {
        if ($anciennete_permis <= 2) {
            if ($nbr_acc == 0) {
                $tarif = 3;
            } elseif ($nbr_acc == 1) {
                $tarif = 4;
            }
        } else {
            if ($nbr_acc == 0) {
                $tarif = 2;
            } elseif ($nbr_acc == 1) {
                $tarif = 3;
            } elseif ($nbr_acc == 2) {
                $tarif = 4;
            }
        }
    }

    if ($anciennete_membre > 5) {
        if ($tarif == 4) {
            $tarif = 3;
        }
        if ($tarif == 3) {
            $tarif = 2;
        }
        if ($tarif == 2) {
            $tarif = 1;
        }
    }
}
