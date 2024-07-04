<?php

/**
 * Herencia
La herencia permite crear nuevas clases basadas en clases existentes. Por ejemplo, podemos tener una clase Alumno y una clase Profesor que heredan de Persona.
 */

class Persona {
    protected string $nombre;
    protected int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    public function descripcion(): string {
        return "$this->nombre, Edad: $this->edad";
    }
}

class Alumno extends Persona {
    private string $grado;

    public function __construct(string $nombre, int $edad, string $grado) {
        parent::__construct($nombre, $edad);
        $this->grado = $grado;
    }

    public function descripcion(): string {
        return "Alumno: " . parent::descripcion() . ", Grado: $this->grado";
    }
}

class Profesor extends Persona {
    private string $materia;

    public function __construct(string $nombre, int $edad, string $materia) {
        parent::__construct($nombre, $edad);
        $this->materia = $materia;
    }

    public function descripcion(): string {
        return "Profesor: " . parent::descripcion() . ", Materia: $this->materia";
    }
}

$alumno = new Alumno("Carlos", 20, "10mo Grado");
$profesor = new Profesor("María", 45, "Matemáticas");

echo $alumno->descripcion(); // Alumno: Carlos, Edad: 20, Grado: 10mo Grado
echo $profesor->descripcion(); // Profesor: María, Edad: 45, Materia: Matemáticas

?>