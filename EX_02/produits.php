<?php

$produits= array (
    'T-shirt rouge'=>15.50, 
    'T-shirt vert'=>15.50, 
    'T-shirt argent'=>16.50,
    'Short bleu'=>19.99,
    'Short vert'=>19.99, 
    'Veste argent'=>35);

function afficher_produits($produits)
{
echo '<table>  <tr> <th> "Produits" "Prix" </th> </tr></table>';
foreach ($produits as $intitulé => $détails)
{        echo '<p>' .$intitulé . ':' . $détails .'</p>';
}
}
afficher_produits($produits)
?>