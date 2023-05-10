<?php
function calcul_age($date)
{
    $date_naissance = strtotime($date);
    // var_dump($date);
    $now = time();
    $diff = $now - $date_naissance;
    $age = floor($diff / (365 * 24 * 60 * 60)); // Conversion en années

    return $age;
}
