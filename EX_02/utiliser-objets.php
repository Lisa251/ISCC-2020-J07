<?php
date_default_timezone_set('Europe/Paris');
$date1 = new DateTime();
echo '<p>' . $date1->format('Y-m-d à H:i:s'). '</p>';

$date = '22-06-2020 9:00';
$date2 = new DateTime($date);
echo '<p>' . $date2->format('Y-m-d à H:i:s'). "</p>";

$diff = $date2->diff($date1);
echo '<p>' . $diff->format('%d jours')
    . $diff->format(' %H heures')
    . $diff->format(' %i minutes depuis le début de la piscine. </p>')

?>

