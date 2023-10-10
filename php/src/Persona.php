<?php

class Persona {
    public function __construct(string $nomPasado, string $cognomPasado, int $edatPasada = 25) {
        $this->nom = $nomPasado;
        $this->cognom = $cognomPasado;
        $this->edat = $edatPasada;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function getCognom(): string{
        return $this->cognom;
    }

    public function getEdat(): int{
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

    public function getNombreCompleto() : string {
        return $this->nom." ".$this->cognom;
    }

    public function estaJubilado() : bool {
        return $this->edat > 66;
    }
}