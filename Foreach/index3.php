<?php

//----------------------------------------
//Afficher toutes les informations de la vidéothèque
$videotheque = [
    ['nom' => 'Independance day',
        'date' => 1996,
        'realisateur' => 'Roland Emmerich',
        'acteurs' => 'Will Smith', 'Bill Pullman', 'Jeff Goldblum', 'Mary McDonnell'],

    ['nom' => 'Bienvenue a Gattaca',
        'date' => 1998,
        'realisateur' => 'Andrew Niccol',
        'acteurs' => 'Ethan Hawke', 'Uma Thurman', 'Jude Law'],

    ['nom' => 'Forrest Gump',
        'date' => 1994,
        'realisateur' => 'Robert Zemeckis',
        'acteurs' => 'Tom Hanks', 'Gary Sinise'],

    ['nom' => '12 hommes en colere',
        'date' => 1957,
        'realisateur' => 'Sidney Lumet',
        'acteurs' => 'Henry Fonda', 'Martin Balsam', 'John Fiedler', 'Lee J. Cobb', 'E.G. Marshall'],
];

echo '12.Mes films : <br>';
//ajoutez votre code ici

foreach ($videotheque as $value) {
    foreach ($value as $name) {
        echo $name. '<br>';
    }
}
//----------------------------------------
//Afficher toutes les informations de la vidéothèque
//reprenez le tableau ci-dessus, ajoutez-y 3 de vos films préférés avec les mêmes
//informations (nom, date, realisateur, acteurs) et en plus de ces informations
//rajoutez un synopsis

echo '13.Mes films : <br>';
//ajoutez votre code ici
