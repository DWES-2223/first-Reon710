<?php

function vell($records) : string {
    $pruebaMasAntigua = '';
    $fechaMasAntigua = DateTime::createFromFormat('d.m.Y',$records[0]['data']);
    foreach ($records as $prueba => $datos) {
        $fechaTurno = DateTime::createFromFormat('d.m.Y', $datos['data']);
        if ($fechaTurno < $fechaMasAntigua) {
            $fechaMasAntigua = $fechaTurno;
            $pruebaMasAntigua = $prueba;
        }
    }
    $fechaMasAntigua = fecha_inglesa($fechaMasAntigua);
    return "La prova més vella es la ${pruebaMasAntigua}, el $fechaMasAntigua";
}

function fecha_inglesa($fecha) : string {
    $fecha_array = explode('.', $fecha);
    if (count($fecha_array) == 3) {
        return $fecha_array[2] . '/' . $fecha_array[1] . '/' . $fecha_array[0];
    } else {
        return 'Formato de fecha no válido';
    }
}