//CON BAJO ACOPLAMIENTO
Ejercicio 1.
Supongamos que estamos construyendo una aplicación de 
carrito de compras en PHP, y tenemos dos clases: Carrito y Producto. 
La clase Carrito maneja los productos agregados al carrito, mientras que 
la clase Producto representa los productos disponibles en la tienda. 
Si la clase Carrito crea instancias de la clase Producto dentro de sus métodos, 
esto aumentará el acoplamiento entre las dos clases.

Cómo evitar el acoplamiento en este ejercicio 
Cree el código del alto acoplamiento y la solución para el bajo acoplamiento.

<?php
class Carrito{
    private $productos = array();
   
    public function AgregarProductos(Producto $producto)
    {
         array_push($this->productos, $producto);
    }

}
class Producto {
    private $nombreproducto;
    private $codigoproducto;
    private $precioproducto;
    public function __construct($nombreproducto,$codigoproducto,$precioproducto)
    {
        $this->nombreproducto = $nombreproducto;
        $this->codigoproducto = $codigoproducto;
        $this->precioproducto = $precioproducto;
    }
}
$producto = new Producto('Agua Members Selection','0123456789',17.40);
$carrito = new Carrito();
$carrito->AgregarProductos($producto);

?>
