<?php

// fw = for who
function ordr_pz($pizzatype, $name) {

$type = $pizzatype;
echo 'Creating new order... <br>';
$toPrint = 'A ';
$toPrint .= $pizzatype;
$p = calc_prix($type);

    $address = 'unknown';
    switch($name){
        case 'koen':
            $address = 'a peniche in Liège';
            break;
        case 'nico':
            $address = 'somewhere in Belgium';
            break;
        case 'students':
            $address = 'BeCode office';
            break;
        }

    $toPrint .=   ' pizza should be sent to ' . $name . ". <br>The address: {$address}.";
    echo $toPrint; echo '<br>';
    echo'The bill is €'.$p.'.<br>';
    echo "Order finished.<br><br>";
}

function calc_prix($p_type){
    $prix = 'unknown';
    switch ($p_type) {
        case 'marguerita':
            $prix = 5;
            break;
        case  'golden':
            $prix = 100;
            break;
        case 'calzone':
            $prix = 10;
            break;
    }
    return $prix;
}

function ordr_piz_all(){
    //$test= 0;
    ordr_pz('calzone', 'nico');
    ordr_pz('marguerita', 'nick');
    ordr_pz('golden', 'students');
}

ordr_piz_all();