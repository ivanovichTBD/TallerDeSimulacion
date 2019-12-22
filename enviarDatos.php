<?php 
$jsonString = file_get_contents('ProcesadorDatosSimulacion.json'); 
$data = json_decode($jsonString, true);
$data=[];
$arreglo=json_decode($_POST['arreglo']);


array_push($data,$arreglo);
   // $data['Matriz_Variables'];
$data=$arreglo;
$newJsonString = json_encode($data); 
//MODIFICAR EL ARCHIVO JSON PARA QUE OTROS LO USEN 
file_put_contents('ProcesadorDatosSimulacion.json', $newJsonString);

//var_dump($data[0]);
?>