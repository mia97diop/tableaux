<?php
//tableau 1
$arr = [
    "coucou72",
    "vie_oiseau",
    "test_value50",
    "bonjour",
    "arbitraire",
];

//affichage du tableau
    echo "<h2>Tableau 1 avec for </h2>";
for ($i=0; $i <4 ; $i++) 
{ 
echo h "l' élément du tableau:".$i. "===>".$arr[$i]."<br>";
}

echo "<h2>Tableau 1 avec foreach </h2>";

foreach ($arr as $i) 
{ 
echo "l' élément du tableau: ===>".$i."<br>";
}
echo "<h2>Tableau 1 avec while </h2>";
$i=0;
$a=5;
while($i<$a)
{
    echo "l' élément du tableau: ===>".$arr[$i]."<br>";
    $i++;
}
//tableau 2
echo "<h2>Tableau 2 avec foreach</h2>";
$arr1 = [
    "coucou72" => 10,
    "vie_oiseau" => 15,
    "test_value50" => 25,
    "bonjour" => 20,
    "arbitraire" => 5,
];
//affichage avec valeur
foreach ($arr1 as $indice=>$valeur)
 {   
    echo $indice.":===>".$valeur."<br>";
}
//tableau 3
echo "<h2>Tableau 3 avec foreach</h2>";
$arr2 = [
    "coucou72" => 10,
    "vie_oiseau" => 15,
    "test_value50" => [
        "in_tab" => "in tab",
        "in_tab1" => "dans tableau 1",
    ],
    "bonjour" => 20,
    "arbitraire" => 5,
];
//affichage avec un autre tableau avec foreach
foreach ($arr2 as $indice => $valeur) 
{
    if($indice!= "test_value50"){
        echo "L'element==>".$indice."est ==>".$valeur."<br>";
    }
        else{
            foreach ($valeur as $indice1 => $valeur2) 
            {
                echo $indice1."==>".$valeur2."<br>\n";
            }
        }
}
