<?php

abstract class Persona {
    protected string $nom;
    protected string $cognom;
    protected int $edat;

    public function __construct(string $nom, string $cognom, int $edat) {
        $this->nom = $nom;
        $this->cognom = $cognom;
        $this->edat = $edat;
    }

    abstract public function calcularSueldo(): float;

    abstract public function toHtml(): string;
}