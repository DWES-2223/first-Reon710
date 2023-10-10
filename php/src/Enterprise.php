<?php

class Enterprise {
    private string $nom;
    private string $direccio;
    private array $workers = [];

    public function __construct(string $nom, string $direccio) {
        $this->nom = $nom;
        $this->direccio = $direccio;
    }

    public function getNom(): string {
        return $this->nom;
    }

    public function setNom(string $nom): void {
        $this->nom = $nom;
    }

    public function getDireccio(): string {
        return $this->direccio;
    }

    public function setDireccio(string $direccio): void {
        $this->direccio = $direccio;
    }

    public function addWorker(Worker $worker): void {
        $this->workers[] = $worker;
    }

    public function listWorkersHtml(): string {

    }

    public function getCosteNominas(): float {
        $totalCost = 0.0;
        foreach ($this->workers as $worker) {
            $totalCost += $worker->calcularSueldo();
        }
        return $totalCost;
    }
}
