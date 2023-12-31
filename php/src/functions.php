<?php

function esParell(int $num): bool {
    return $num % 2 === 0;
}

function arrayAleatori (int $tam, int $min, int $max) : array {
    $arrayAleatori = array();
    for ($i = 0; $i < $tam; $i++) {
        $arrayAleatori[] = rand($min,$max);
    }
    return $arrayAleatori;
}

function countParells(array $array): int {
    $numeroDeParells = 0;
    foreach ($array as $numero) {
        if(esParell($numero)) {
            $numeroDeParells++;
        }
    }
    return $numeroDeParells;
}

function major(...$numeros): int {
    $mayor = PHP_INT_MIN;
    foreach ($numeros as $numero) {
        $mayor = ($mayor < $numero) ? $numero : $mayor;
    }
    return $mayor;
}

function concatenar(...$paraules) : string {
    //Con el método implode se puede hacer igual
    $cadena = "";
    foreach ($paraules as $paraula) {
        $cadena .= $paraula." ";
    }
    return $cadena;
}

function digits(int $num) : int {
    $numeroCadena = "$num";
    return strlen($numeroCadena);
}

function digitsN(int $num, int $post): int {
    $numeroCadena = "$num";
    $numeroSueltoCadena = "$post";
    for ($i = 0; $i < strlen($numeroCadena); $i++) {
        if ($numeroCadena[$i] === $numeroSueltoCadena) {
            return $i+1;
        }
    }
    return -1;
}

function llevaDarrere(int $num, int $cant): int {
    $numeroCadena = "$num";
    $cadenaResultante = "";
    for ($i = 0; $i < strlen($numeroCadena); $i++) {
        $cadenaResultante .= $numeroCadena[$i];
        if ($i + 1 === strlen($numeroCadena) - $cant) {
            break;
        }
    }
    return $cadenaResultante;
}

function llevaDavant(int $num, int $cant): int {
    $numeroCadena = "$num";
    $cadenaResultante = "";
    for ($i = 0; $i < strlen($numeroCadena); $i++) {
        if ($i + 1 >= $cant) {
            $cadenaResultante .= $numeroCadena[$i];
        }
    }
    return $cadenaResultante;
}

function peseta2euros(int $pesetas, $cotizacion = 0.0060) {
    return $pesetas * $cotizacion;
}

function euro2pesetes(int $euros, $cotizacion = 166.3860) {
    return $euros * $cotizacion;
}

