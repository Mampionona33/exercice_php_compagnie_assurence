<?php
function form_create()
{
    $title = "Add driver";
    $content = '<div>';
    $content .= '<form>';

    $content .= '<div>';
    $content .= '<label for="nom" >Nom</label>';
    $content .= '<input type="text" id="nom" name="nom" required>';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="prenom">Prénom</label>';
    $content .= '<input type="text" id="prenom" name="prenom" required>';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="date_naissance">Date de naissance</label>';
    $content .= '<input type="date" name="date_naissance" id="date_naissance">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="annee_obt_permis">Année d\'obtpention du permis</label>';
    $content .= '<input type="number" min=1970 name="annee_obt_permis" id="annee_obt_permis">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="nbr_acc">Nombre d\'accident</label>';
    $content .= '<input type="number" min=0 name="nbr_acc" id="nbr_acc">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<input type="submit" value="Enregistrer">';
    $content .= '<input type="reset" value="Recommencer">';
    $content .= '</div>';

    $content .= '</form>';
    $content .= '</div>';

    return [$title, $content];
}
