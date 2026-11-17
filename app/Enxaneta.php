<?php

namespace App;

class Enxaneta extends Casteller implements Castellable
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private string $nom,
        private int $edat,
        private float $pes,
        private bool $cascRevisat,
    ) {
        parent::__construct($nom, $edat, $pes);
    }

    public function executarRol(): string
    {
        return 'Rol executat';
    }

    public function ferAleta() {}

    public function __toString(): string
    {
        return parent::__toString().'. Casc revisat? '.$this->cascRevisat;
    }
}
