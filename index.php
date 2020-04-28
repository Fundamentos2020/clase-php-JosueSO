<?php 

//Declaración de variables
$a = "Hola mundo";
$b = 3;
$c = 2.5;

//Funcion
function miFuncion(){
    global $a, $b;

    $a = "Cambiar texto";
}

miFuncion();
//echo $a;

//Arreglos
$array_1 = array();
$alumno = array();

$array_1[] = 1; 
$array_1[] = 2; 
$array_1[] = "Hola";

//var_dump($array_1);

$alumno['cve_unica'] = "241584";
$alumno['nombre'] = "Josue";
$alumno['apellidos'] = "Sanchez";

//Json
$json = '{"cve_unica":"241584","nombre":"Josue","apellidos":"Sanchez"}';

$alumno_aux = json_decode($json);

//var_dump($alumno_aux);

//echo $alumno_aux->cve_unica;

//Clases
class Aux {
    public $x;
    public $y;
}

$aux = new Aux();

$aux->x = "Valor X";

var_dump($aux);
?>