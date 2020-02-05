<?php

require_once 'index.php';

class allocazione extends prodotto {
    public $sezioneMagazzino;
    public $sezioneArea;
    public $sezioneGabbia;

    public function __construct($_magazzino, $_area, $_gabbia)
    {
        $this->sezioneMagazzino = $_magazzino;
        $this->sezioneArea = $_area;
        $this->sezioneGabbia = $_gabbia;
    }
}

$chiantiRiserva = new allocazione(25,'A12',57);

echo '<pre>';
var_dump($chiantiRiserva);
echo '</pre>';
