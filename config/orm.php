<?php
/***
* ? L'ORM (OBJECT RELATIONAL MAPPING)
*/

//! Recuperation des donnees du fichier JSON avec la fonction json_to_array(find_data)
function json_to_array(string $key):array{
    // travail de l'ORM
    $dataJson=file_get_contents(PATH_DB);
    $dataArray=json_decode($dataJson,true);
    return $dataArray[$key];
}

//! Enregistrement et Mis à jour des donnees du fichier avec la fonction array_to_json (save_data)
function array_to_json(array $dataArray,string $key){
    

    $dataJson=file_get_contents(PATH_DB);
    $dataArrayDecode=json_decode($dataJson,true);
    $dataArrayDecode[$key][]=$dataArray;
    $dataJson=json_encode($dataArrayDecode);
    file_put_contents(PATH_DB,$dataJson);
}



