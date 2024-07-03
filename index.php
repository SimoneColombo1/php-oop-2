<?php
class prodotto
{

    private $categoria;

    public function __construct($categoria)
    {

        $this->categoria = $categoria;
    }
}


class cibo extends prodotto
{




    public function __construct($categoria)
    {
        parent::__construct($categoria);
    }
}
class gioco extends prodotto
{




    public function __construct($categoria)
    {
        parent::__construct($categoria);
    }
}

class accessorio extends prodotto
{


    public function __construct($categoria)
    {
        parent::__construct($categoria);
    }
}

$cani = new prodotto("cani");

$pesci = new prodotto('Pesci');
$gatti = new prodotto('gatti');
$uccelli = new prodotto('uccelli');
