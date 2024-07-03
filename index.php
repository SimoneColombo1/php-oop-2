<?php


class prodotti
{
    private $cibo;
    private $accessori;
    private $giochi;

    public function __construct($cibo, $accessori, $giochi)
    {


        $this->cibo = $cibo;
        $this->accessori = $accessori;
        $this->giochi = $giochi;
    }
}

class categorie extends prodotti
{
    private $cane;
    private $uccelli;
    private $gatto;
    private $pesci;

    public function __construct($cibo, $accessori, $giochi, $cane, $uccelli, $gatto, $pesci)
    {
        parent::__construct($cibo, $accessori, $giochi);
        $this->cane = $cane;
        $this->cane = $uccelli;
        $this->cane = $gatto;
        $this->cane = $pesci;
    }
}
