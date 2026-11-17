<?php

namespace App;

abstract class Casteller
{
    public function __construct(
        private string $nom,
        private int $edat,
        private float $pes,
    ) {}

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): Casteller
    {
        $this->nom = $nom;
        return $this;
    }

    public function getEdat(): int
    {
        return $this->edat;
    }

    public function setEdat(int $edat): Casteller
    {
        $this->edat = $edat;
        return $this;
    }

    public function getPes(): float
    {
        return $this->pes;
    }

    public function setPes(float $pes): Casteller
    {
        $this->pes = $pes;
        return $this;
    }

    public function __toString(): string
    {
        return "Nom: ".$this->nom.", Edat: ".$this->edat.", Pes: ".$this->pes;
    }
}
