<?php
// Création d'un shortcode WordPress appelé [instrument_inscription]
// Quand ce shortcode est utilisé dans une page ou un article, la fonction simplon_instrument_inscription() sera exécutée
add_shortcode('activities_adventure', 'activities_adventure_shortcode');

// Définition de la fonction liée au shortcode
function activities_adventure_shortcode()
{
    // Récupère la valeur du champ personnalisé "nom_de_linstrument" (via ACF)
    $name = get_field('nom_de_lactivite');

    // Récupère la valeur du champ personnalisé "description" (via ACF)
    $description = get_field('description');

    // Récupère la valeur du champ personnalisé "prix_par_an" (via ACF)
    $image = get_field('image_activite');
   // Debug: Affiche la valeur de l'image dans le tableau de débogage
    $difficulty = get_field('difficulte');
 // Debug: Affiche la valeur de la difficulté dans le tableau de débogage
    $duration = get_field('duree');



    // Retourne un paragraphe contenant toutes les valeurs récupérées
    // ⚠️ Les variables sont simplement collées, sans espace ni balises HTML supplémentaires.
    return "<p><strong>Activité :</strong>$name<br><strong>
    Description :</strong>$description<br><strong>    
    Difficulté:</strong>$difficulty[0]<br><strong>
    Durée :</strong>$duration</p>";
    "<img src=" . $image .">";
}