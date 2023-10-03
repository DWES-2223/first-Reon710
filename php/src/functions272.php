<?php

function vell($records): string {
    $pruebaMasAntigua = '';
    $fechaMasAntigua = '9999/12/31';
    foreach ($records as $prueba => $datos) {
        $fechaTurno = fecha_inglesa($datos['data']);
        if ($fechaTurno != 'Formato de fecha no válido') {
            if ($fechaTurno < $fechaMasAntigua) {
                $fechaMasAntigua = $fechaTurno;
                $pruebaMasAntigua = $prueba;
            }
        }
    }
    return $pruebaMasAntigua;
}

function fecha_inglesa($fecha): string {
    $anio = any($fecha);
    if ($anio) {
        $fecha_array = explode('.', $fecha);
        return $anio . '/' . $fecha_array[1] . '/' . $fecha_array[0];
    } else {
        return 'Formato de fecha no válido';
    }
}

function laureado($records): array {
    $clubCount = [];
    $atletaCount = [];
    $llocCount = [];
    foreach ($records as $datos) {
        $club = $datos['club'];
        $atleta = $datos['atleta'];
        $lloc = $datos['lloc'];
        if (!empty($club)) {
            $clubCount[$club] = isset($clubCount[$club]) ? $clubCount[$club] + 1 : 1;
        }
        if (!empty($atleta)) {
            $atletaCount[$atleta] = isset($atletaCount[$atleta]) ? $atletaCount[$atleta] + 1 : 1;
        }
        if (!empty($lloc)) {
            $llocCount[$lloc] = isset($llocCount[$lloc]) ? $llocCount[$lloc] + 1 : 1;
        }
    }
    $clubMasLaureado = array_search(max($clubCount), $clubCount);
    $atletaMasLaureado = array_search(max($atletaCount), $atletaCount);
    $llocMasLaureado = array_search(max($llocCount), $llocCount);
    return [
        'club' => $clubMasLaureado,
        'atleta' => $atletaMasLaureado,
        'lloc' => $llocMasLaureado,
    ];
}

function jove($records): array {
    $atletaMasJoven = null;
    $edadMasJoven = PHP_INT_MAX;
    foreach ($records as $record) {
        $fechaNacimiento = $record['natalici'];
        if ($fechaNacimiento) {
            $anioRecord = any($record['data']);
            if ($anioRecord) {
                $edadEnRecord = $anioRecord - $fechaNacimiento;
                if ($edadEnRecord < $edadMasJoven) {
                    $edadMasJoven = $edadEnRecord;
                    $atletaMasJoven = $record['atleta'];
                }
            }
        }
    }
    return [
        'atleta' => $atletaMasJoven,
        'edad' => $edadMasJoven
    ];
}

function any($fecha) {
    $fechaPartes = explode('.', $fecha);
    if (count($fechaPartes) === 3) {
        return $fechaPartes[2];
    }
    return false;
}
