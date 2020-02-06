<?php

// gerarchia di prodotti per magazzino

class Prodotto {
    public $nome;
    public $idInterno;
    public $prezzo;

    public function __construct($_name, $_prezzo)
    {
        $this->nome = $_name;
        $this->idInterno = self::generacodice();
        $this->prezzo = $_prezzo;
    }

    public static function generacodice() {
        return random_int(1,100);
    }

}



$chiantiRiserva = new Prodotto ('Le Bocce','532');


echo '<pre>';
var_dump($chiantiRiserva);
echo '</pre>';


