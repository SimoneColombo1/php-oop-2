<?php
class prodotto
{

    public $categoria;

    public function __construct($categoria)
    {

        $this->categoria = $categoria;
    }
}


class cibo extends prodotto
{


    public $prezzo;
    public $peso;
    public $ingredienti;
    public $image;
    public $titolo;

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
    public $prezzo;
    public $caratteristiche;
    public $dimensioni;
    public $image;
    public $titolo;

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
    public $prezzo;
    public $materiale;
    public $dimensioni;
    public $image;
    public $titolo;
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


$royal = new cibo('Royal Canin Mini Adult', 'https://arcaplanet.vtexassets.com/arquivos/ids/300306/Royal-Canin-Mini-Adult-Alimento-Completo-per-Cani-Adulti-di-Piccola-Taglia-10120604-1.jpg', $cani->categoria, '43,99$', '545g', 'prosciutto,riso');


$almocani = new cibo('Almo Nature Holistic Maintenance Medium Large Tonno e Riso', 'https://arcaplanet.vtexassets.com/arquivos/ids/300514/Almo-Nature-Holistic-Maintenance-Medium-Large-Tonno-e-Riso-10118806.jpg', $cani->categoria, '44,99$', '600g', 'manzo cereali');
$almogatti = new cibo('Almo Nature Cat Daily Lattina', 'https://arcaplanet.vtexassets.com/arquivos/ids/245336/almo-daily-menu-cat-400-gr-vitello.jpg', $gatti->categoria, '34,99$', '400g', 'tonno, pollo, prosciutto');

$guppipesci = new cibo('Mangime per Pesci Guppy in Fiocchi', 'https://arcaplanet.vtexassets.com/arquivos/ids/272714/tetra-guppy-mini-flakes.jpg', $pesci->categoria, '2,95$', '30g', 'Pesci e sottoprodotti dei pesci, cereali, alghe,lieviti');

$volierawilma = new accessorio('Voliera Wilma in Legno', 'https://arcaplanet.vtexassets.com/arquivos/ids/258384/voliera-wilma1.jpg', $uccelli->categoria, '184,99$', 'legno', 'M: L 83 x P 67 x H153cm');

$cartucceEasy = new accessorio('Cartucce Filtranti per Filtro EasyCrystal', 'https://arcaplanet.vtexassets.com/arquivos/ids/272741/tetra-easycrystal-filterpack-250-300.jpg', $pesci->categoria, '2,99$', 'materiale espanso', 'N/D');

$kong = new gioco('Kong Classic', 'https://arcaplanet.vtexassets.com/arquivos/ids/256599/kong-classic1.jpg', $cani->categoria, '13,49$', 'galleggia e rimbalza', '8,5cm x 10xm');
$topinitixie = new gioco('Topini di peluche Trixie', 'https://arcaplanet.vtexassets.com/arquivos/ids/223852/trixie-gatto-gioco-active-mouse-peluche.jpg', $gatti->categoria, '4,99$', 'Morbido con codina in corda', '8,5cm x 10cm');






?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Boolshop</title>


</head>

<body>
    <header>
        <h1>Boolshop</h1>
    </header>


    <main>
        <section class="card-container">
            <div class="single-card">
                <span>
                    <img src="<?php echo $royal->image; ?>">


                    <h3>

                        <?php
                        echo $royal->titolo ?>

                    </h3>
                </span>
                <span><i class="fa-solid fa-dog"></i> <?php echo $royal->categoria; ?></span>
                <span> Prezzo: <?php echo $royal->prezzo;  ?></span>
                <span>Peso netto: <?php echo $royal->peso; ?> </span>
                <span>ingredienti:<?php echo $royal->ingredienti; ?> </span>

            </div>
            <div class="single-card">
                <span>
                    <img src="<?php echo $almocani->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $almocani->titolo;
                    ?>
                </h3>
                <span><i class="fa-solid fa-dog"></i> <?php echo $almocani->categoria; ?></span>
                <span> Prezzo: <?php echo $almocani->prezzo; ?></span>
                <span>Peso netto: <?php echo $almocani->peso; ?> </span>
                <span>ingredienti:<?php echo $almocani->ingredienti; ?> </span>
            </div>
            <div class="single-card">

                <span>
                    <img src="<?php echo $almogatti->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $almogatti->titolo;
                    ?>
                </h3>
                <span><i class="fa-solid fa-cat"></i> <?php echo $almogatti->categoria; ?></span>
                <span> Prezzo: <?php echo $almogatti->prezzo;  ?></span>
                <span>Peso netto: <?php echo $almogatti->peso; ?> </span>
                <span>ingredienti:<?php echo $almogatti->ingredienti; ?> </span>



            </div>
            <div class="single-card">
                <span>
                    <img src="<?php echo $guppipesci->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $guppipesci->titolo;
                    ?>
                </h3>
                <span> <i class="fa-solid fa-fish"></i><?php echo $guppipesci->categoria; ?></span>
                <span> Prezzo: <?php echo $guppipesci->prezzo;  ?></span>
                <span>Peso netto: <?php echo $guppipesci->peso; ?> </span>
                <span>ingredienti:<?php echo $guppipesci->ingredienti; ?> </span>



            </div>
            <div class="single-card">

                <span>
                    <img src="<?php echo $volierawilma->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $volierawilma->titolo;
                    ?>
                </h3>
                <span><i class="fa-solid fa-kiwi-bird"></i> <?php echo $volierawilma->categoria; ?></span>
                <span> Prezzo: <?php echo $volierawilma->prezzo;  ?></span>
                <span>Peso netto: <?php echo $volierawilma->materiale; ?> </span>
                <span>ingredienti:<?php echo $volierawilma->dimensioni; ?> </span>

            </div>
            <div class="single-card">

                <span>
                    <img src="<?php echo $cartucceEasy->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $cartucceEasy->titolo;
                    ?>
                </h3>
                <span> <i class="fa-solid fa-fish"></i><?php echo $cartucceEasy->categoria; ?></span>
                <span> Prezzo: <?php echo $cartucceEasy->prezzo;  ?></span>
                <span>Peso netto: <?php echo $cartucceEasy->materiale; ?> </span>
                <span>ingredienti:<?php echo $cartucceEasy->dimensioni; ?> </span>




            </div>

            <div class="single-card">

                <span>
                    <img src="<?php echo $kong->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $kong->titolo;
                    ?>
                </h3>
                <span><i class="fa-solid fa-dog"></i> <?php echo $kong->categoria; ?></span>
                <span> Prezzo: <?php echo $kong->prezzo;  ?></span>
                <span>Peso netto: <?php echo $kong->caratteristiche; ?> </span>
                <span>ingredienti:<?php echo $kong->dimensioni; ?> </span>



            </div>


            <div class="single-card">

                <span>
                    <img src="<?php echo $topinitixie->image; ?>">

                </span>
                <h3>

                    <?php
                    echo $topinitixie->titolo;
                    ?>
                </h3>
                <span><i class="fa-solid fa-cat"></i> <?php echo $topinitixie->categoria; ?></span>
                <span> Prezzo: <?php echo $topinitixie->prezzo;  ?></span>
                <span>Peso netto: <?php echo $topinitixie->caratteristiche; ?> </span>
                <span>ingredienti:<?php echo $topinitixie->dimensioni; ?> </span>


            </div>
        </section>
    </main>


</body>

</html>