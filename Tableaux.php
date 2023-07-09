





<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes exos tableaux</title>
</head>
<body>
    <h1>Afficher la listes des étudiants et leurs ages</h1>


<?php

$nomsEtudiants =array ('Kady',' Safae', 'Chafia', 'Sanae', 'Miny', 'Fauve', 'Fatma','Chantal','Nisrine', 'Nina', 'Yousra');
    

//  Boucles for
    // for ($i=0; $i <= 10 ; $i++) { 
    //     echo $nomsEtudiants[$i]. '<br/>';
    // }

// la boucle foreach

foreach ($nomsEtudiants as  $items) {
    echo $items. '<br/>';
}

$ageEtudiants = array(
    'Kady'    => 32, 
    'Safae'   => 26, 
    'Chafia'  => 25,  
    'Sanae'   => 32,  
    'Miny'    => " Non renseigné", 
    'Fauve'   => 18, 
    'Fatma'   => ' Non renseigné', 
    'chantal' => 29, 
    'Nisrine' => 21, 
    'Nina'    => ' Non renseigné',
    'Yousra'  => ' Non renseigné'

 
);


// echo " L'étudiant à l'index 0 est : ". $nomsEtudiants[0].  '<br/>';
// echo'<br/>';
// echo " L'étudiant à l'index 1 est : ". $nomsEtudiants[1].   '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 2 est : ". $nomsEtudiants [2]. '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 3 est : ".$nomsEtudiants[3].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 4 est : ".$nomsEtudiants[4].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 5 est : ".$nomsEtudiants[5].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 6 est : ".$nomsEtudiants[6].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 7 est : ".$nomsEtudiants[7].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 8 est : ".$nomsEtudiants[8].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 9 est : ".$nomsEtudiants[9].  '<br>';
// echo'<br/>';
// echo " L'étudiant à l'index 10 est : ".$nomsEtudiants[10].  '<br>';
// echo'<br/>';




$estMmaman = array(
    " Kady " => ' est maman',
    " Safae " => ' n\'est pas encore maman',
    " Chafia " => ' n\'est n\' pas encore maman',
    " Sanae " => ' n\'est pas encore  maman',
    " Miny " => ' est maman',
    " Fauve " => ' n\'est pas  encore maman',
    " Fatma " => ' est maman',
    " Chantal " => ' est maman',
    " Nisrine " => ' n\'est pas encore maman',
    " Nina " => ' Non renseigné',
    " Yousra " => ' Non renseigné'
    

);

echo $ageEtudiants ["Kady"]. '<br/>'


// Afficher les tableau  et leurs valeurs 




?>
</body>
</html>