<?php
function form_create()
{
    $title = "Add driver";
    $content = '<div>';
    $content .= '<form method="POST" action="./create">';

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
    $content .= '<input type="date" name="date_naissance" id="date_naissance" value="1989-01-01">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="annee_obt_permis">Année d\'obtention du permis</label>';
    $content .= '<input type="date" name="annee_obt_permis" id="annee_obt_permis" value="2000-01-01">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="annee_adhesion">Année d\'adhesion</label>';
    $content .= '<input type="date" name="annee_adhesion" id="annee_adhesion" value="2000-01-01">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<label for="nbr_acc">Nombre d\'accidents</label>';
    $content .= '<input type="number" min=0 value=0 name="nbr_acc" id="nbr_acc">';
    $content .= '</div>';

    $content .= '<div>';
    $content .= '<input type="reset" value="Recommencer">';
    $content .= '<input type="submit" value="Enregistrer">';
    $content .= '</div>';

    $content .= '</form>';
    $content .= '</div>';

    return [$title, $content];
}

function home_page()
{
    $title = "Add driver";
    $content = '<div>';
    $content .= '<p>Home</p>';
    $content .= '</div>';

    return [$title, $content];
}
