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

function home_page($conducteurs)
{
    $title = "Home";
    $content = '<div>';
    $content .= '<h1>Liste des conducteurs</h1>';
    $content .= '<div class="table_container" >';
    $content .= '<div >';

    if (empty($conducteurs)) {
        $content .= '<table>';
        $content .= '<tr>';
        $content .= '<td colspan="7">No data</td>';
        $content .= '</tr>';
        $content .= '</table>';
    } else {
        $content .= '<table>';
        $content .= '<thead>';
        $content .= '<tr>';
        $content .= '<th>Nom</th>';
        $content .= '<th>Prénom</th>';
        $content .= '<th>Date de naissance</th>';
        $content .= '<th>Année d\'obtention du permis</th>';
        $content .= '<th>Année d\'adhésion</th>';
        $content .= '<th>Nombre d\'accidents</th>';
        $content .= '<th>Tarif</th>';
        $content .= '</tr>';
        $content .= '</thead>';
        $content .= '<tbody>';

        foreach ($conducteurs as $conducteur) {
            $content .= '<tr>';
            $content .= '<td>' . $conducteur['nom'] . '</td>';
            $content .= '<td>' . $conducteur['prenom'] . '</td>';
            $content .= '<td>' . $conducteur['date_naissance'] . '</td>';
            $content .= '<td>' . $conducteur['annee_obt_permis'] . '</td>';
            $content .= '<td>' . $conducteur['annee_adhesion'] . '</td>';
            $content .= '<td>' . $conducteur['nbr_acc'] . '</td>';
            $content .= '<td>' . $conducteur['couleur_tarif'] . '</td>';
            $content .= '</tr>';
        }

        $content .= '</tbody>';
        $content .= '</table>';
    }

    $content .= '</div>';
    $content .= '</div>';
    $content .= '</div>';

    return [$title, $content];
}
