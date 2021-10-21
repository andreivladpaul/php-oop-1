<?php 
/* Definita una classe 'Movie'
- all'interno della classe sono dichiarate delle variabili d'istanza
- all'interno della classe è definito un costruttore
- all'interno della classe è definito almeno un metodo
-- vengono istanziati almeno due oggetti 'Movie' e stampati a schermo i valori delle relative proprietà */ 


class Movie {
    public $regista;
    public $nazione;
    public $titolo;
    public $anno;

    function __construct($_regista, $_nazione, $_titolo , $_anno)
    {
        $this->regista=$_regista;
        $this->nazione=$_nazione;
        $this->titolo=$_titolo;
        $this->anno=$_anno;
        
    }

    function getRegista(){
        return $this->regista;
    }

    function setRegista($_regista){
        $this->regista = $_regista;
    }

}
$film1 = new Movie('Trentin Quarantino', 'USA', 'Pulp Fiction', 1994 );
$film2 = new Movie('Chris Columbus', 'USA', 'Harry Potter e la pieta filosofale', 2011);
var_dump($film1, $film2);

$film1->setRegista('Quentin Tarantino');
echo $film1->getRegista();

