<?php

class Persona8 {
    protected static int $limite_edat = 66;

    public function __construct(
        protected string $nomPasado,
        protected string $cognomPasado,
        protected int $edatPasada
    ) {}

    public function getNom(): string {
        return $this->nom;
    }

    public function getCognom(): string {
        return $this->cognom;
    }

    public function getEdat(): int {
        return $this->edat;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function setCognom(string $cognom): void {
        $this->cognom = $cognom;
    }

    public function setEdat(int $edat): void {
        $this->edat = $edat;
    }

    public function getNombreCompleto(): string {
        return $this->nom . " " . $this->cognom;
    }

    public function estaJubilado(): bool {
        return $this->edat > self::$limite_edat;
    }

    public static function modificaLimite(int $nuevoLimite): void {
        self::$limite_edat = $nuevoLimite;
    }

    public function __toString(): string {
        return "Nom: {$this->nom}, Cognom: {$this->cognom}, Edat: {$this->edat}, Límite Edat: " . self::$limite_edat;
    }
}