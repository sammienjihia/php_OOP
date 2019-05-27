<?php

namespace Acme;


class Human
{
    protected $race;

    public function __construct($inputRace){
        $this->race = $inputRace;
    }
}