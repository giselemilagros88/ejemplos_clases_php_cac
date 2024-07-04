<?php

/**
 * Abstracción
La abstracción se refiere a la capacidad de crear una clase que solo define una interfaz para los objetos derivados, sin implementar la funcionalidad completa.
 */

abstract class Persona {
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Método abstracto
    abstract public function descripcion(): string;

   // abstract public function saludar(): string;
}

class Empleado extends Persona {
    // nombre y edad son heredados de Persona y me los permite usar porque son protected
    // eso quiere decir que son public para la clase hija
    private string $puesto;

    public function __construct(string $nombre, int $edad, string $puesto) {
        parent::__construct($nombre, $edad);
        $this->puesto = $puesto;
    }

    public function descripcion(): string {
        return "Empleado: $this->nombre, Edad: $this->edad, Puesto: $this->puesto";
    }
}

$empleado = new Empleado("Ana", 30, "Desarrollador");
echo $empleado->descripcion(); // Empleado: Ana, Edad: 30, Puesto: Desarrollador

?>