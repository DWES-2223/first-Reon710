<?php

class Empleado extends Persona8 {
    private float $sou;
    private array $telefonos = [];

    public function __construct(
        string $nomPasado,
        string $cognomPasado,
        int $edatPasada,
        float $sou
    ) {
        parent::__construct($nomPasado, $cognomPasado, $edatPasada);
        $this->sou = $sou;
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

    public function debePagarImpuestos(): bool {
        return $this->sou > 3333.0;
    }

    public function __toString(): string {
        return parent::__toString() . ", Sou: {$this->sou}, Telèfons: " . implode(', ', $this->telefonos);
    }
}
