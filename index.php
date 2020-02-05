<?php

// gerarchia di prodotti per magazzino

class Prodotto {
    public $nome;
    public $idInterno;
    public $prezzo;
}

$chiantiRiserva = new Prodotto ();
$chiantiRiserva->nome = 'le bocce';
$chiantiRiserva->idInterno = 5;
$chiantiRiserva->prezzo = 20;

echo '<pre>';
var_dump($chiantiRiserva);
echo '</pre>';

