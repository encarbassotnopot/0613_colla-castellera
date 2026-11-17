<?php

namespace App;

class Tronc extends Casteller implements Castellable
{
    /**
     * Create a new class instance.
     */
    public function __construct(
        private string $nom,
        private int $edat,
        private float $pes,
        private int $pis,
    ) {
        parent::__construct($nom, $edat, $pes);
    }

    public function executarRol(): string
    {
        return 'Rol executat';
    }

    public function __toString(): string
    {
        return parent::__toString().'. Pis: '.$this->pis;
    }
}
