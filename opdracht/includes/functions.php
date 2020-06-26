<?php
$product = array("1"=>['1: appels', 'prijs'=> 0.25], "2"=>['2: peren', 'prijs'=> 0.30],
"3"=>['3: bananen', 'prijs'=> 0.30], "4"=>[ '4: kersen', 'prijs'=> 0.40],
"5"=>['5: mango', 'prijs'=> 0.40], "6" => ['6: kiwis', 'prijs'=> 0.35],
"7"=>['7: watermeloen', 'prijs'=> 1.7], "8" =>['8: mandarijnen', 'prijs'=> 0.30],
"9"=>['9: aardbijen', 'prijs'=> 0.25], "10"=>['10: ananas', 'prijs'=> 0.40]);

function getInput()
{
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo $input;
}


function getProductNr()
{
    $productnummer = $_GET['productnummer'] ?? 'vul een productnummer in!';
    echo $productnummer;
}

function getAmount()
{
    $aantalProd = $_GET['aantal'] ?? 'vul een aantal in!';
    echo $aantalProd;
}

function getAge()
{
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';
    echo $leeftijd;
    
}

function getvalue(){
    $input = $_GET['input'] ?? 'vul een waarde in hierboven en klik op [check]';
    echo var_dump($input);
}

function totaalBedrag(){
   global $product;
     
    if (isset($_GET['productnummer']) && isset ($_GET['aantal'])){
        if(isset($product[$_GET['productnummer']])){
            echo $product[$_GET['productnummer']]['prijs']*$_GET['aantal'] . " euro";
        }
    }

}

function korting(){
    $leeftijd = $_GET['leeftijd'] ?? 'vul een leeftijd in!';

    switch ($leeftijd){
        case 19:
            echo '0.19 euro';
        break;
        case 18:
            echo "0.18 euro";
        break;
        case 17:
            echo "0.17 euro";
        break;
        case 16:
            echo "0.16 euro";
        break;
        default:
            echo "1 euro";
    }
}
?>