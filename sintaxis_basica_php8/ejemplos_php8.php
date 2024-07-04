<?php
    // Declaración de variables
    $pais;
    $nombre = "Juan";
    $apellido = "Pérez";
    $edad = 25;
    $altura = 1.75;
    $es_estudiante = true;/* true (1), false(0)  */
    $lenguaje = "PHP NO MURIO!";
    echo "<h1>". $lenguaje ."</h1><br>";
    echo "-----------------------------------------------------------------<br>";
    echo '$nombre<br>';
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";


    echo gettype($nombre); // string
    echo '<br>';
    echo gettype($edad); // integer
    echo '<br>';
    echo gettype($altura); // double
    echo '<br>';
    echo gettype($es_estudiante); // boolean
    echo '<br>';

    // También se puede usar var_dump() para obtener el tipo y el valor
    var_dump($nombre); // string(4) "Juan"
    echo '<br>';
    var_dump($edad); // int(25)
    echo '<br>';
    var_dump($altura); // float(1.75)
    echo '<br>';
    var_dump($es_estudiante); // bool(true)
    echo '<br>';

    // ejemplo con instanceof
    class MyClass {}
    $a = new MyClass;
    var_dump($a instanceof MyClass); // bool(true)
    echo '<br>';

  
    // Concatenación de variables
    $nombre_completo = $nombre . " " . $apellido; // "Juan Pérez"
    $presentacion = "Hola, mi nombre es " . $nombre_completo . " y tengo " . $edad . " años."; 
    // "Hola, mi nombre es Juan Pérez y tengo 25 años."

    echo $presentacion;
    echo '<br>';

    $query = "SELECT * FROM peliculas";
?>

<?php
    #operaciones
    $numero1 = 10;
    $numero2 = 20;

    // Operaciones aritméticas
    $suma = $numero1 + $numero2; // 30
    $resta = $numero1 - $numero2; // -10
    $multiplicacion = $numero1 * $numero2; // 200
    $division = $numero1 / $numero2; // 0.5

    // Operaciones lógicas
    $es_mayor = $numero1 > $numero2; // false
    $es_igual = $numero1 == $numero2; // false
    $y_logico = $es_mayor && $es_igual; // false
    $o_logico = $es_mayor || $es_igual; // false
?>

<?php
    /*
    Interpolación de Variables en Cadenas
    PHP permite la interpolación de variables dentro de cadenas definidas con comillas dobles. */
    $nombre = "Juan";
    $apellido = "Pérez";
    $edad = 25;

    $presentacion = "Hola, mi nombre es $nombre $apellido y tengo $edad años.";
    echo $presentacion;
    echo '<br>';
    // "Hola, mi nombre es Juan Pérez y tengo 25 años."
?>

<?php
    /*Operadores Aritméticos
    Estos operadores se utilizan para realizar operaciones matemáticas.  */
    $a = 10;
    $b = 20;

    $suma = $a + $b; // 30
    $resta = $a - $b; // -10
    $multiplicacion = $a * $b; // 200
    $division = $a / $b; // 0.5
    $modulo = $a % $b; // 10
    $exponenciacion = $a ** 2; // 100

    echo "Suma: $suma";
    echo '<br>';
    echo "Resta: $resta";
    echo '<br>';
    echo "Multiplicación: $multiplicacion";
    echo '<br>';
    echo "División: $division";
    echo '<br>';
    echo "Módulo: $modulo";
    echo '<br>';
    echo "Exponenciación: $exponenciacion";
    echo '<br>';
?>
<?php
    /*Operadores de Asignación
    Estos operadores se utilizan para asignar valores a las variables.*/
    $a = 10;
    $b = 20;

    $a += $b; // $a = $a + $b; => 30
    $a -= $b; // $a = $a - $b; => 10
    $a *= $b; // $a = $a * $b; => 200
    $a /= $b; // $a = $a / $b; => 10
    $a %= $b; // $a = $a % $b; => 10
    $a **= 2; // $a = $a ** 2; => 100

    echo "Valor de a: $a";
    echo '<br>';
?>
<?php
    /*Operadores de Comparación*/
    $a = 10;
    $b = 20;

    $igual = $a == $b; // false
    $identico = $a === $b; // false
    $diferente = $a != $b; // true
    $no_identico = $a !== $b; // true
    $menor_que = $a < $b; // true
    $mayor_que = $a > $b; // false
    $menor_igual_que = $a <= $b; // true
    $mayor_igual_que = $a >= $b; // false
    $nave_espacial = $a <=> $b; // -1 (porque $a es menor que $b)

    echo "Igual: " . ($igual ? 'true' : 'false') ;
    echo '<br>';
    echo "Idéntico: " . ($identico ? 'true' : 'false') ;
    echo '<br>';
    echo "Diferente: " . ($diferente ? 'true' : 'false') ;
    echo '<br>';
    echo "No idéntico: " . ($no_identico ? 'true' : 'false') ;
    echo '<br>';
    echo "Menor que: " . ($menor_que ? 'true' : 'false') ;
    echo '<br>';
    echo "Mayor que: " . ($mayor_que ? 'true' : 'false') ;
    echo '<br>';
    echo "Menor o igual que: " . ($menor_igual_que ? 'true' : 'false') ;
    echo '<br>';
    echo "Mayor o igual que: " . ($mayor_igual_que ? 'true' : 'false') ;
    echo '<br>';
    echo "Nave espacial: $nave_espacial";
    echo '<br>';
?>

<?php
    /*Operadores Lógicos*/
    $a = true;
    $b = false;

    $y = $a && $b; // false
    $o = $a || $b; // true
    $no = !$a; // false
   

    echo "AND: " . ($y ? 'true' : 'false') ;
    echo '<br>';
    echo "OR: " . ($o ? 'true' : 'false') ;
    echo '<br>';
    echo "NOT: " . ($no ? 'true' : 'false') ;
    echo '<br>';
   
?>

<?php
    /*Operadores de Incremento y Decremento*/
    $a = 10;

    $pre_incremento = ++$a; // 11
    $pre_decremento = --$a; // 10
    $post_incremento = $a++; // 10, pero $a es ahora 11
    $post_decremento = $a--; // 11, pero $a es ahora 10

    echo "Pre-incremento: $pre_incremento";
    echo '<br>';
    echo "Pre-decremento: $pre_decremento";
    echo '<br>';
    echo "Post-incremento: $post_incremento";
    echo '<br>';
    echo "Post-decremento: $post_decremento";
    echo '<br>';
    echo "Valor final de a: $a";
    echo '<br>';
?>

<?php
    /*Operadores de Cadenas*/
    $a = "Hola";
    $b = " Mundo";

    $concatenacion = $a . $b; // "Hola Mundo"
    $concatenacion_asignacion = $a .= $b; // $a = $a . $b; => "Hola Mundo"

    echo "Concatenación: $concatenacion";
    echo '<br>';
    echo "Concatenación con asignación: $concatenacion_asignacion";
    echo '<br>';
?>
<?php
    /*Operador Ternario*/
    $a = 10;
    $b = 20;

    $mayor = ($a > $b) ? $a : $b; // 20

    echo "Mayor: $mayor";
?>
<?php
    /*Operador de fusión de null*/
    $a = null;
    $b = "valor por defecto";
    echo '<br>';

    $resultado = $a ?? $b; // "valor por defecto"

    echo "Resultado: $resultado";
    echo '<br>';
?>

<?php
    /*Estructuras de Control condicional simple if*/
    $edad = 20;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
        echo '<br>';
    } else {
        echo "Eres menor de edad.";
        echo '<br>';
    }
?>

<?php
    /*Estructuras de Control condicional if-else anidadas*/
    $edad = 16;

    if ($edad >= 18) {
        echo "Eres mayor de edad.";
        echo '<br>';
    } else {
        echo "Eres menor de edad.";
        echo '<br>';
    }
?>
<?php
    /*Estructuras de Control condicional if-elseif-else*/
    $nota = 85;

    if ($nota >= 90) {
        echo "Tienes una A.";
        echo '<br>';
    } elseif ($nota >= 80) {
        echo "Tienes una B.";
        echo '<br>';
    } elseif ($nota >= 70) {
        echo "Tienes una C.";
        echo '<br>';
    } elseif ($nota >= 60) {
        echo "Tienes una D.";
        echo '<br>';
    } else {
        echo "Tienes una F.";
        echo '<br>';
    }
?>
<?php
    /*Condicionales anidados*/
    $edad = 25;
    $es_estudiante = true;

    if ($edad >= 18) {
        if ($es_estudiante) {
            echo "Eres un estudiante adulto.";
            echo '<br>';
        } else {
            echo "Eres un adulto.";
            echo '<br>';
        }
    } else {
        if ($es_estudiante) {
            echo "Eres un estudiante menor de edad.";
            echo '<br>';
        } else {
            echo "Eres menor de edad.";
            echo '<br>';
        }
    }
?>

<?php
    /*Estructuras de Control condicional switch*/
    $dia = "miércoles";

    switch ($dia) {
        case "lunes":
            echo "Hoy es lunes.";
            echo '<br>';
            break;
        case "martes":
            echo "Hoy es martes.";
            echo '<br>';
            break;
        case "miércoles":
            echo "Hoy es miércoles.";
            echo '<br>';
            break;
        case "jueves":
            echo "Hoy es jueves.";
            echo '<br>';
            break;
        case "viernes":
            echo "Hoy es viernes.";
            echo '<br>';
            break;
        case "sábado":
            echo "Hoy es sábado.";
            echo '<br>';
            break;
        case "domingo":
            echo "Hoy es domingo.";
            echo '<br>';
            break;
        default:
            echo "No es un día válido.";
            echo '<br>';
    }
?>
<?php
    /*Condicional terneario*/
    $edad = 20;
    $mensaje = ($edad >= 18) ? "Eres mayor de edad." : "Eres menor de edad.";
    
    echo $mensaje;
    echo '<br>';
?>
<?php
    /*Condicional terneario anidado*/
    $nota = 85;
    $mensaje = ($nota >= 90) ? "Tienes una A." :
            (($nota >= 80) ? "Tienes una B." :
            (($nota >= 70) ? "Tienes una C." :
            (($nota >= 60) ? "Tienes una D." : "Tienes una F.")));

    echo $mensaje;
    echo '<br>';
?>

<?php
    /*Uso de match (PHP 8)
    El operador match es una versión mejorada del switch que devuelve un valor basado en la primera condición que coincide.*/
    $dia = "miércoles";

    $resultado = match ($dia) {
        "lunes" => "Hoy es lunes.",
        "martes" => "Hoy es martes.",
        "miércoles" => "Hoy es miércoles.",
        "jueves" => "Hoy es jueves.",
        "viernes" => "Hoy es viernes.",
        "sábado" => "Hoy es sábado.",
        "domingo" => "Hoy es domingo.",
        default => "No es un día válido.",
    };

    echo $resultado;
    echo '<br>';
?>

<?php
    // Array indexado
    $frutas = ["manzana", "banana", "naranja"];

    // Array asociativo
    $persona = [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid"
    ];

    // Array multidimensional
    $matriz = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];
?>
<?php
    /*AGREGAR ELEMENTOS A UN ARRAY */
    $frutas = ["manzana", "banana"];

    // Agregar un elemento al final
    $frutas[] = "naranja"; // ["manzana", "banana", "naranja"]

    // Agregar un elemento con array_push
    array_push($frutas, "fresa"); // ["manzana", "banana", "naranja", "fresa"]

    // Agregar un elemento al inicio
    array_unshift($frutas, "mango"); // ["mango", "manzana", "banana", "naranja", "fresa"]

    print_r($frutas);
    echo '<br>';
?>
<?php
    /*QUITAR ELEMENTOS DE UN ARRAY */
    $frutas = ["manzana", "banana", "naranja", "fresa"];

    // Quitar el último elemento
    $ultima_fruta = array_pop($frutas); // "fresa", $frutas ahora es ["manzana", "banana", "naranja"]

    // Quitar el primer elemento
    $primera_fruta = array_shift($frutas); // "manzana", $frutas ahora es ["banana", "naranja"]

    print_r($frutas);
    echo '<br>';
?>

<?php
    /*RECORRER UN ARRAY CON FOR */
    $frutas = ["manzana", "banana", "naranja"];

    for ($i = 0; $i < count($frutas); $i++) {
        echo $frutas[$i];
        echo '<br>';
    }
?>
<?php
    /*RECORRER UN ARRAY CON FOREACH */
    $frutas = ["manzana", "banana", "naranja"];

    foreach ($frutas as $fruta) {
        echo $fruta ;
        echo '<br>';
    }
?>
<?php
    /*RECORRER UN ARRAY ASOCIATIVO CON FOREACH */
    $persona = [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid"
    ];

    foreach ($persona as $clave => $valor) {
        echo "$clave: $valor";
        echo '<br>';
    }
?>

<?php
    /*metodos funciones utiles para arrays*/
    #Contar Elementos de un Array
    $frutas = ["manzana", "banana", "naranja"];
    $cantidad = count($frutas); // 3

    echo "Cantidad de frutas: $cantidad";
    echo '<br>';
?>
<?php
    #Buscar un Elemento en un Array
    $frutas = ["manzana", "banana", "naranja"];
    $posicion = array_search("banana", $frutas); // 1

    echo "Posición de banana: $posicion";
    echo '<br>';
?>
<?php
    #comprobar si un elemento existe en un array
    $frutas = ["manzana", "banana", "naranja"];
    $existe = in_array("naranja", $frutas); // true

    echo $existe ? "La naranja está en el array" : "La naranja no está en el array";
    echo '<br>';
?>
<?php
    #Ordenar un Array
    $frutas = ["manzana", "banana", "naranja"];
    sort($frutas); // ["banana", "manzana", "naranja"]

    print_r($frutas);
    echo '<br>';
?>
<?php
    #invertir un array
    $frutas = ["manzana", "banana", "naranja"];
    $frutas_invertidas = array_reverse($frutas); // ["naranja", "banana", "manzana"]

    print_r($frutas_invertidas);
    echo '<br>';
?>
<?php
     # recorrer un array multidimensional
    $matriz = [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ];

    // Recorrer un array multidimensional
    foreach ($matriz as $fila) {
        foreach ($fila as $valor) {
            echo $valor . " ";
            echo '<br>';
        }
        echo "\n";
        echo '<br>';
    }
?>
<?php
     # codificar un array en un json
    $persona = [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid",
        "lenguajes" => ["PHP", "JavaScript", "Python"]
    ];

    $json_persona = json_encode($persona);

    echo $json_persona;
    // {"nombre":"Juan","edad":25,"ciudad":"Madrid","lenguajes":["PHP","JavaScript","Python"]}
?>
<?php
        # decodificar un json en un array
    $json_persona = '{"nombre":"Juan","edad":25,"ciudad":"Madrid","lenguajes":["PHP","JavaScript","Python"]}';

    $persona = json_decode($json_persona, true);

    print_r($persona);
    /*
    Array
    (
        [nombre] => Juan
        [edad] => 25
        [ciudad] => Madrid
        [lenguajes] => Array
            (
                [0] => PHP
                [1] => JavaScript
                [2] => Python
            )
    )
    */
?>

<?php
    # decodificar un json en un objeto
    $json_persona = '{"nombre":"Juan","edad":25,"ciudad":"Madrid","lenguajes":["PHP","JavaScript","Python"]}';

    $persona_obj = json_decode($json_persona);

    echo $persona_obj->nombre; // Juan
    echo $persona_obj->edad; // 25
    echo $persona_obj->ciudad; // Madrid
    print_r($persona_obj->lenguajes); // Array ( [0] => PHP [1] => JavaScript [2] => Python )
?>
<?php
    # manejo de errores al decodificar un json
    $json_mal_formateado = '{"nombre":"Juan","edad":25,"ciudad":"Madrid","lenguajes":["PHP","JavaScript","Python"}';

    $persona = json_decode($json_mal_formateado);

    if (json_last_error() !== JSON_ERROR_NONE) {
        echo "Error al decodificar JSON: " . json_last_error_msg();
    } else {
        print_r($persona);
    }
?>
<?php
    #convertir datos de la base a json
    // Supongamos que ya tienes una conexión a la base de datos establecida
    $conexion = new mysqli("localhost", "usuario", "contraseña", "base_de_datos");

    if ($conexion->connect_error) {
        die("Conexión fallida: " . $conexion->connect_error);
    }

    $sql = "SELECT nombre, edad, ciudad FROM personas";
    $resultado = $conexion->query($sql);

    $personas = [];

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            $personas[] = $fila;
        }
    }

    $json_personas = json_encode($personas);

    echo $json_personas;
    // [{"nombre":"Juan","edad":25,"ciudad":"Madrid"},{"nombre":"Ana","edad":30,"ciudad":"Barcelona"},...]
?>



<?php
    #Enviar y Recibir JSON en una API REST
    #Enviar JSON (Respuesta de una API)
    header('Content-Type: application/json');

    $persona = [
        "nombre" => "Juan",
        "edad" => 25,
        "ciudad" => "Madrid",
        "lenguajes" => ["PHP", "JavaScript", "Python"]
    ];

    echo json_encode($persona);
?>

<?php
    #Recibir JSON (Solicitud de una API)
    $input_json = file_get_contents('php://input');
    $datos = json_decode($input_json, true);

    if (json_last_error() === JSON_ERROR_NONE) {
        // Procesar los datos
        $nombre = $datos['nombre'];
        $edad = $datos['edad'];
        $ciudad = $datos['ciudad'];
        
        echo "Nombre: $nombre\n";
        echo "Edad: $edad\n";
        echo "Ciudad: $ciudad\n";
    } else {
        echo "Error al decodificar JSON: " . json_last_error_msg();
    }
?>

<?php
/*supongamos que tenemos este json
        {
            "nombre": "Juan",
            "edad": 25,
            "ciudad": "Madrid",
            "lenguajes": ["PHP", "JavaScript", "Python"],
            "experiencia": [
                {
                    "empresa": "Empresa A",
                    "puesto": "Desarrollador",
                    "años": 2
                },
                {
                    "empresa": "Empresa B",
                    "puesto": "Ingeniero de Software",
                    "años": 3
                }
            ]
        }

        */

        /*Decodificar y Recorrer JSON

        Decodificar JSON a un Array Asociativo */

        $json = '{
            "nombre": "Juan",
            "edad": 25,
            "ciudad": "Madrid",
            "lenguajes": ["PHP", "JavaScript", "Python"],
            "experiencia": [
                {
                    "empresa": "Empresa A",
                    "puesto": "Desarrollador",
                    "años": 2
                },
                {
                    "empresa": "Empresa B",
                    "puesto": "Ingeniero de Software",
                    "años": 3
                }
            ]
        }';

        $data = json_decode($json, true);

        // Recorrer el array asociativo
        foreach ($data as $clave => $valor) {
            if (is_array($valor)) {
                echo "$clave:\n";
                foreach ($valor as $subclave => $subvalor) {
                    if (is_array($subvalor)) {
                        echo "  $subclave:\n";
                        foreach ($subvalor as $subsubclave => $subsubvalor) {
                            echo "    $subsubclave: $subsubvalor\n";
                        }
                    } else {
                        echo "  $subclave: $subvalor\n";
                    }
                }
            } else {
                echo "$clave: $valor\n";
            }
        }



?>

<?php
#Decodificar JSON a un Objeto
    $json = '{
        "nombre": "Juan",
        "edad": 25,
        "ciudad": "Madrid",
        "lenguajes": ["PHP", "JavaScript", "Python"],
        "experiencia": [
            {
                "empresa": "Empresa A",
                "puesto": "Desarrollador",
                "años": 2
            },
            {
                "empresa": "Empresa B",
                "puesto": "Ingeniero de Software",
                "años": 3
            }
        ]
    }';

    $data = json_decode($json);

    // Recorrer el objeto
    foreach ($data as $clave => $valor) {
        if (is_array($valor) || is_object($valor)) {
            echo "$clave:\n";
            foreach ($valor as $subclave => $subvalor) {
                if (is_array($subvalor) || is_object($subvalor)) {
                    echo "  $subclave:\n";
                    foreach ($subvalor as $subsubclave => $subsubvalor) {
                        echo "    $subsubclave: $subsubvalor\n";
                    }
                } else {
                    echo "  $subclave: $subvalor\n";
                }
            }
        } else {
            echo "$clave: $valor\n";
        }
    }
?>

<?php
 # recorrer un json anidado
    $json = '{
        "nombre": "Juan",
        "edad": 25,
        "ciudad": "Madrid",
        "lenguajes": ["PHP", "JavaScript", "Python"],
        "experiencia": [
            {
                "empresa": "Empresa A",
                "puesto": "Desarrollador",
                "años": 2
            },
            {
                "empresa": "Empresa B",
                "puesto": "Ingeniero de Software",
                "años": 3
            }
        ]
    }';

    $data = json_decode($json, true);

    function recorrerArray($array, $nivel = 0) {
        foreach ($array as $clave => $valor) {
            if (is_array($valor)) {
                echo str_repeat("  ", $nivel) . "$clave:\n";
                recorrerArray($valor, $nivel + 1);
            } else {
                echo str_repeat("  ", $nivel) . "$clave: $valor\n";
            }
        }
    }

    recorrerArray($data);
?>




































