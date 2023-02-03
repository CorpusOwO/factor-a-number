<?php
class Factorial{
    // funcion que recibe un numero y devuelve su factorial
    public static function factorizar(int $n){ // n = Al numero que querramos factorizar :3
        $temp = 1; //aquí se irán almacenando el valor de las operaciones realizadas
        for($i=1 ; $i<=$n ; $i++){
            $temp = $temp * $i;
        }
        return $temp;
    }
}
//Si te funcionó, dale a la estrellita uwu
?>