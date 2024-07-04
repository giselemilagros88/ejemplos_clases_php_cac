<?php

/*Plantilla de poo: clase */

    class Persona {
        // atributos del objeto Persona
       private string $nombre;
       private int $edad;

        // constructor de la clase-- es el que me va a permitir crear objetos de la clase
        // para referirse a un objeto --> referencia o instancia de la clase---> instanciar un objeto o referenciar un objeto
       
     
        public function __construct(string $nombre, int $edad) {
            // el this hace referencia al objeto actual, el objeto que estamos creando en este momento
            $this->nombre = $nombre;
            $this->edad = $edad;
        }

        // methods getters y setters
        public function getNombre(): string {
            return $this->nombre;
        }
        // set de nombre
       /* public function setNombre(string $nombre): void {
            $this->nombre = $nombre;
        }*/

        // methods que son propios del objeto, en este caso del objeto Persona
        public function descripcion(): string {
            return "$this->nombre,$this->edad";
        }
       
        // method
        public function saludar(): string {
            return "Hola, mi nombre es $this->nombre y tengo $this->edad años";
        }
    }

?>