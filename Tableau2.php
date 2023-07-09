<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau des pays du monde</title>
</head>
<body>
    <h1>Voici la liste des pays et leurs capitales</h1>

    <?php
    
    $pays = array("Afganistan", "Afrique du sud", "Albanie", "Allemagne", "Angola", "Arabie Saoudite", "Australie","Bahamas", "Bangladesh","Benin","Birmanie", "Bolivie","Cameroun","Cap-vert");
    

    echo "Voici la liste des pays";

    echo'<br/>';
    echo'<br/>';
    echo'<br/>';

    foreach($pays as $items){
    
        echo $items."<br/>";
    }
    
    $capitales =array(
        "Afganistan" => "Kaboul", 
        "Afrique du sud"  => "Prétoria", 
        "Albanie"  => "Tirana",
        "Allemagne" => "Berlin",
        "Angola"  =>  "Luanda", 
        "Arabie Saoudite" => "Riad", 
        "Australie"  => "Camberra",
        "Bahamas"  => " Nassau", 
        "Bangladesh"  => "Dacca",
        "Benin"   => "Porto-Novo",
        "Birmanie"  => "Naypyidaw", 
        "Bolivie"  =>  "Sucre",
        "Cameroun"  => "Yaoudé",
        "Cap-vert"  =>  "Praia"
    );

    echo'<br/>';
    echo'<br/>';
    echo'<br/>';
    echo " voici la liste des capitales".'<br/>';

    echo'<br/>';
    echo'<br/>';
    echo'<br/>';
    foreach($capitales as $capitale){
        echo$capitale. '<br/>';
    }

    echo'<br/>';
    echo'<br/>';
    echo'<br/>';
    echo " voici la liste des pays et leurs capitales".'<br/>';
    echo'<br/>';
    echo'<br/>';
    foreach($capitales as $pays => $items){
        echo " La capitale de ". $pays . " est ". $items . '.' .'<br/>';
    }
    ?>

</body>
</html>