<?php

class Manager extends Worker {
    private float $salarPercent;

    public function __construct(string $nom, string $cognom, int $edat, array $telefonos, float $salarPercent) {
        parent::__construct($nom, $cognom, $edat, $telefonos);
        $this->salarPercent = $salarPercent;
    }

    public function calcularSueldo(): float {
        // Calcular el sueldo del gerente basado en el salario base y el incremento percentual
        // Implementa tu lógica aquí
    }

    public function toHtml(): string {
        // Generar representación HTML de Manager
        // Implementa tu lógica aquí
    }
}