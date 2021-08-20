
<?php
    // 1er exo
    echo "Exercice 1 <br> <br>";
        $note_maths = 15;
        $note_français = 12;
        $note_histoire_geo = 9;
        $moyenne = ($note_maths+$note_français+$note_histoire_geo)/3;
        echo "La moyenne est de $moyenne / 20 <br><br>";
?>

<?php
    // 2ème exo
    echo "Exercice 2 <br><br>";
    $prix_ht = 50;
    $taux_tva = 20;
     //(prixHT * tauxTVA/100)+ prixHT
     //prixHT * (1 + TVA / 100)
     $prix_ttc = $prix_ht * (1 + $taux_tva / 100);
     echo "La prix TTC est de $prix_ttc € <br><br>"; 
?>

<?php
    //3ème exo
    echo "Exercice 3 <br><br>";

    $test = '42';

    var_dump($test);
    echo "<br><br>";
?>

<?php
    //4ème exo
    echo "Exercice 4 <br><br>";
    $sexe = "male";
    if($sexe == "male")
    {
        echo "Salut gros male !";
    }
    else
    {
        echo "Salut soeurette !";
    }
    echo "<br><br>";
?>

<?php
    //5ème exo
    echo "Exercice 5 <br><br>";
    $budget = 1553.89;
    $achats = 1554.76;
    if($budget < $achats)
    {
        echo "Tu es pauvre";
    }
    else{
        echo "Tu peux te le permettre";
    }
    echo "<br><br>";

?>

<?php
    //6ème exo
    echo "Exercice 6 <br><br>";
    $age = 18;
    if($age >= 18)
    {
        echo "Tu es majeur(e)";
    }
    else
    {
        echo "Tu es mineur(e)";
    }
    echo "<br><br>";
?>

<?php
    //7ème exo
    echo "Exercice 7 <br><br>";
    $heure = 19;
    $heure_soir = 18;
    if($heure < 12)
    {
        echo "C'est le matin";
    }
    else if($heure > 12 AND $heure < 18)
    {
        echo "C'est l'après-midi";
    }
    else if($heure >= 18)
    {
        echo "C'est le soir";
    }
    else
    {
        echo " On est perdu la mon gars";
    }
    echo "<br><br>";
    
?>

<?php
    //8ème exo
    echo "Exercice 8 <br><br>";
    for ($nombre = 0; $nombre <= 100; $nombre +=5)
    {
        echo "On en est à $nombre de la table de 5 <br>";
    }
    echo "<br><br>";
?>

<?php
    //9ème exo
    echo "Exercice 9 <br><br>";
    $nombre = 0;
    while($nombre <=20)
    {
        if($nombre == 10)
        {
            echo "<strong> $nombre </strong> <br>";
        }
        else
        {
            echo "$nombre <br>";
        }
        
         
        $nombre+=2;
    }
    
    
?>