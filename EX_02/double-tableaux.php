<?php

$panier= [
    ['T-shirt rouge', 15.50, 5],
    ['T-shirt vert', 15.50, 6],
    ['T-shirt argent', 15.50, 8],
    ['Short bleu', 16.50, 5],
    ['Short vert', 19.99, 5],
    ['Veste argent', 19.99, 10],
    ['Veste argent', 35, 3],];

function afficher_panier($panier)
{
    foreach ($panier as $elements => $prix)
    {
        echo'
        <ul>
            <li>'.$prix[0]. '</li>
            <li>'.$prix[1]. '</li>
            <li>'.$prix[2]. '</li>
        </ul>';
    };
}
afficher_panier($panier);

function calculer_total_panier($panier){
    $somme=0;
    foreach($panier as $element){
         $somme=$element[1]*$element[2]+$somme;       
            };
    return($somme);
        
};

echo calculer_total_panier($panier);

?>