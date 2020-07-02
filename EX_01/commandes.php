<?php
$historique_commandes= array('5.49', '9.99', '5.49', '15.99','25');

function afficher_commandes ($historique_commandes) {
    $total='0';
    
foreach ($historique_commandes as $element)
{
$total= $total + $element;
echo "Une commande de  $element  euros a été reçue.</br>";
}  
                   
echo"Le total des commandes est de $total euros.";   
}
afficher_commandes ($historique_commandes);
     
?>