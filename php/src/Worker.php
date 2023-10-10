<?php

abstract class Worker extends Persona {
    protected array $telefonos = [];

    public function __construct(string $nom, string $cognom, int $edat, array $telefonos) {
        parent::__construct($nom, $cognom, $edat);
        $this->telefonos = $telefonos;
    }

    public function anyadirTelefono(int $telefono): void {
        $this->telefonos[] = $telefono;
    }

    public function listarTelefonos(): string {
        return implode(', ', $this->telefonos);
    }

    public function vaciarTelefonos(): void {
        $this->telefonos = [];
    }
}