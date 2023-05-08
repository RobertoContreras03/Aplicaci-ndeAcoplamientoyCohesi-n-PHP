/*
Ejercicio 3.

Genere un ejemplo con código donde se muestre la alta cohesión que se mantiene en una clase. 
Cree la documentación del ejercicio junto con el código, 
no es necesario que lo cree completo simplemente mostrar la cohesión.
*/
<?php
class Calculadora {   

    public function SUMA ($numero1, $numero2)
    {                                                                     
        return $numero1 + $numero2;
    }
    public function RESTA( $numero1, $numero2)
    {
        return $numero1 - $numero2;
    }
    public function MULTIPLICACION( $numero1, $numero2)
    {
        return $numero1 - $numero2;
    }
    public function DIVISION( $numero1, $numero2)         
    {
        if($numero2 ==0){
            echo 'No se puede dividir por cero';
        }
        return $numero1 / $numero2;
        
    }
//Cuando separamos cada operacion en metodos independientes , conseguimos un alta cohesion en la clase
}
$calculadora = new Calculadora();   
$numero1 = 20;
$numero2 = 10;
echo "El resultado de la suma es ".$calculadora->SUMA($numero1, $numero2) . "<br>";     
echo "El resultado de la resta es ".$calculadora->RESTA($numero1, $numero2) . "<br>";
echo "El resultado de la multiplicacion es ".$calculadora->MULTIPLICACION($numero1, $numero2) . "<br>";
echo "El resultado de la divison es ".$calculadora->DIVISION($numero1, $numero2) . "<br>";
