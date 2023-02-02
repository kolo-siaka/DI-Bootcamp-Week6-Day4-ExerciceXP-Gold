<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Exercice XP Gold</title>
</head>
<body>
    <h3>Exercice 1</h3>
	<?php 
      function extraireMotsDUnePhrase($phrase){    
/* caractères que l'on va remplacer (tout ce qui sépare les mots, en fait) */
    $aremplacer = array(",",";"," ");
 
  /* ... on va les remplacer par un espace, il n'y aura donc plus dans $phrase 
que des mots et des espaces */
 
    $enremplacement = " ";
 
      
/* on fait le remplacement (comme dit ci-avant), puis on supprime les espaces de
// début et de fin de chaîne (trim) */
    $sansponctuation = trim(str_replace($aremplacer, $enremplacement, $phrase));
   
  
   
/* on coupe la chaîne en fonction d'un séparateur, et chaque élément est une
// valeur d'un tableau */
    $separateur = "#[ ]+#"; // 1 ou plusieurs espaces
    $mots = preg_split($separateur, $sansponctuation);
      
    return $mots;
}
    $month_temp = "78, 60, 62, 68, 71, 68, 73, 85, 66, 64, 76, 63, 81, 76, 73,68, 72, 73, 75, 65, 74, 63, 67, 65, 64, 68, 73, 75, 79, 73";

    $temp = extraireMotsDUnePhrase($month_temp);

    $moyen = 0;
   for ($i=0; $i < count($temp) ; $i++) { 
   	   $moyen = $moyen + $temp[$i];
   }
     echo "La moyenne de temperature est : " .(int)($moyen/count($temp)) .'<br>';
     $i =0;
     echo" five highest temperatures :";
      while ($i<5) {
          $ma = max($temp);
          echo $ma .',';
          $temp = array_diff($temp,array($ma));
        $i++;

      }
        $i= 0;
        echo"<br> five lowest temperatures  :";
      while ($i<5) {
          $min = min($temp);
          echo $min .',';
          $temp = array_diff($temp,array($min));

        $i++;
      }
	 ?>

     <h3>Exercice 2</h3>

<?php
$str = 'Techstudy - the Debugging Solution website';
$str = str_replace('the','Best',$str);
echo $str;
?>
<h3>Exercice 3</h3>
<?php 
$my_array = array("bmw","jeep","dastun","ferrari","Honda");
$taille = array();
foreach ($my_array as $key => $value) {
    $var = min(array(strlen($value)));
    array_push($taille, $var);
}
echo 'the shortest string length  : ';
print_r(min($taille));
echo '<br> the longest string length  : ';
print_r(max($taille));

 ?>

</body>
</html>