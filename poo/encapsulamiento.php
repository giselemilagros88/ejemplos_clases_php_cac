<?php

/**
 * Encapsulamiento
El encapsulamiento se refiere a la práctica de ocultar los detalles internos de un objeto y exponer solo lo necesario a través de métodos públicos.
 */

class Persona {
    private string $nombre;
    private int $edad;

    public function __construct(string $nombre, int $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    // Métodos públicos para acceder a los atributos privados
    public function getNombre(): string {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void {
        $this->nombre = $nombre;
    }

    public function getEdad(): int {
        return $this->edad;
    }

    public function setEdad(int $edad): void {
        $this->edad = $edad;
    }
}

$persona = new Persona("Juan", 25);
echo $persona->getNombre(); // Juan
$persona->setEdad(26);
echo $persona->getEdad(); // 26


?>
