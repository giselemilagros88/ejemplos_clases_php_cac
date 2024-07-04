<?php

/**
 * Polimorfismo
 * El polimorfismo permite que los objetos de diferentes clases sean tratados a través de la misma interfaz. Esto es útil para realizar operaciones en una colección de objetos de diferentes tipos que comparten una clase base o una interfaz.
 */
/* poo definicion */
// La palabra clave abstract se utiliza para definir una clase abstracta. No se pueden crear instancias de una clase abstracta.

abstract class Persona {
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    abstract public function descripcion(): string;
}



class Alumno extends Persona {
    private string $grado;

    public function __construct(string $nombre, int $edad, string $grado) {
        parent::__construct($nombre, $edad);
        $this->grado = $grado;
    }

    public function descripcion(): string {
        return "<h2>Alumno: $this->nombre, Edad: $this->edad, Grado: $this->grado</h2>";
    }
}

class Profesor extends Persona {
    private string $materia;

    public function __construct(string $nombre, int $edad, string $materia) {
        parent::__construct($nombre, $edad);
        $this->materia = $materia;
    }

    public function descripcion(): string {
        return "<h2>Profesor: $this->nombre, Edad: $this->edad, Materia: $this->materia</h2>";
    }   
}
/// TERMINO EL CODIGO DE LAS CLASES


/// ACA TENGO LA IMPLEMENTACION

// Función que acepta un array de objetos de tipo Persona y llama al método descripcion de cada uno
function imprimirDescripciones(array $personas): void {
    foreach ($personas as $persona) {
        // Verificamos si el objeto es de tipo Persona
        if ($persona instanceof Persona) {
            echo $persona->descripcion();
        } else {
            echo "<h2>El objeto no es de tipo Persona</h2>";
        }
    }
}

// Creamos una lista de personas
$personas = [
    new Alumno("Carlos", 20, "10mo Grado"),
    new Profesor("María", 45, "Matemáticas"),
];

// Llamamos a la función imprimirDescripciones pasando la lista de personas
imprimirDescripciones($personas);
// Salida:
// Alumno: Carlos, Edad: 20, Grado: 10mo Grado
// Profesor: María, Edad: 45, Materia: Matemáticas



?>