<?php
/**
 * Created by PhpStorm.
 * User: nouse
 * Date: 22/03/19
 * Time: 11:19
 */


//Fonction de nettoyage d'une valeur
function cleanInput($data) : string
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = strip_tags($data);
    return $data;
}


function cleanArray(array $inputArray) : array
{
    $dataArray=[];

    foreach ($inputArray as $keyArray => $valueArray) {
        $dataArray[$keyArray] = cleanInput($valueArray);
    }

    return $dataArray;
}
