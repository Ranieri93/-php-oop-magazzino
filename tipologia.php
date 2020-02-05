<?php
include_once 'index.php';

class tipologia extends prodotto {
    public $uvaggio;
    public $vinificazione;
    public $affinamento;

    public function __construct($_uvaggio, $_vinificazione, $_affinamento , $_nome, $_idInterno = null, $_prezzo)
    {
        $this->uvaggio = $_uvaggio;
        $this->vinificazione = $_vinificazione;
        $this->affinamento = $_affinamento;
        $this->nome = $_nome;
        $this->idInterno = $_idInterno;
        $this->prezzo = $_prezzo;
    }

    public function getMyWine() {
        echo 'nome vino: ' . $this->nome . '<br>' . 'prezzo vino: ' . $this->prezzo . '<br>' . 'uvaggio: ' . $this->uvaggio . '<br>' . 'vinificazione: ' . $this->vinificazione . '<br>' . 'affinamento: ' . $this->affinamento . '<br>';
    }
}

$masseto = new tipologia('merlot','acciaio','legno', 'Masseto', 25,500);

$sassicaia = new tipologia('CabFranc', 'acciaio','legno','Sassicaia',26, 150);
//echo '<pre>';
//var_dump($masseto);
//echo '</pre>';

echo $masseto->getMyWine();
echo $sassicaia->getMyWine();
