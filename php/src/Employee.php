<?php

class Employee extends Worker {
    private float $horaCobro;

    public function __construct(string $nom, string $cognom, int $edat, array $telefonos, float $horaCobro) {
        parent::__construct($nom, $cognom, $edat, $telefonos);
        $this->horaCobro = $horaCobro;
    }

    public function calcularSueldo(): float {
        // Calcular el sueldo basado en las horas trabajadas y la tarifa por hora
        // Implementa tu lógica aquí
    }

    public function toHtml(): string {
        // Generar representación HTML de Employee
        // Implementa tu lógica aquí
    }
}