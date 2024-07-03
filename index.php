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


    private $prezzo;
    private $peso;
    private $ingredienti;
    private $image;
    private $titolo;

    public function __construct($titolo, $image, $categoria, $prezzo, $peso, $ingredienti)
    {
        parent::__construct($categoria);
        $this->prezzo = $prezzo;
        $this->peso = $peso;
        $this->ingredienti = $ingredienti;
        $this->image = $image;
        $this->titolo = $titolo;
    }
}
class gioco extends prodotto
{
    private $prezzo;
    private $caratteristiche;
    private $dimensioni;
    private $image;
    private $titolo;

    public function __construct($titolo, $image, $categoria, $prezzo, $caratteristiche, $dimensioni)
    {
        parent::__construct($categoria);

        $this->prezzo = $prezzo;
        $this->caratteristiche = $caratteristiche;
        $this->dimensioni = $dimensioni;
        $this->image = $image;
        $this->titolo = $titolo;
    }
}

class accessorio extends prodotto
{
    private $prezzo;
    private $materiale;
    private $dimensioni;
    private $image;
    private $titolo;
    public function __construct($titolo, $image, $categoria, $prezzo, $materiale, $dimensioni)
    {
        parent::__construct($categoria);
        $this->prezzo = $prezzo;
        $this->dimensioni = $dimensioni;
        $this->materiale = $materiale;
        $this->image = $image;
        $this->titolo = $titolo;
    }
}

$cani = new prodotto('cani');

$pesci = new prodotto('Pesci');
$gatti = new prodotto('gatti');
$uccelli = new prodotto('uccelli');


$royal = new cibo('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', $cani, '43,99$', '545g', 'prosciutto,riso');


$almocani = new cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg', $cani, '44,99$', '600g', 'manzo cereali');
$almogatti = new cibo('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $gatti, '34,99$', '400g', 'tonno, pollo, prosciutto');

$guppipesci = new cibo('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $pesci, '2,95$', '30g', 'Pesci e sottoprodotti dei pesci, cereali, alghe,lieviti');

$volierawilma = new accessorio('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $uccelli, '184,99$', 'legno', 'M: L 83 x P 67 x H153cm');

$cartucceEasy = new accessorio('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $pesci, '2,99$', 'materiale espanso', 'N/D');

$kong = new gioco('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $cani, '13,49$', 'galleggia e rimbalza', '8,5cm x 10xm');
$topinitixie = new gioco('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $gatti, '4,99$', 'Morbido con codina in corda', '8,5cm x 10cm');
