<?php
// includi i file delle classi necessarie
require_once './Models/Prodotto.php';
require_once './Models/Cibo.php';
require_once './Models/Giocho.php';
require_once './Models/Abbigliamento.php';

// Crea alcuni prodotti di esempio
$pallina = new Gioco('pallina interattiva','https://picsum.photos/seed/picsum/100/100', 3,  4, 'cane', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque quaerat inventore, adipisci odio necessitatibus libero quibusdam totam quia itaque nobis expedita perferendis voluptate nostrum, doloribus laudantium autem hic. Expedita!','tonda',2);
$giacca = new Abbigliamento('cookie','https://picsum.photos/seed/picsum/100/100', 34,  1, 'cane', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium perspiciatis ipsa error, ullam ipsum rem omnis natus, officia voluptatem qui culpa velit repellat minus harum inventore, odio eaque dolore non.','xl','nylon');
$josera = new Cibo('josera','https://picsum.photos/seed/picsum/100/100', 60,  55, 'gatto', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis doloremque placeat laborum. Officia, odio eaque. Ad consequuntur accusantium sint quia nobis! Non, rerum eveniet. Numquam libero nam deserunt cumque!',50,'adulti');
$royalCanine = new Cibo('Royal Canine','https://picsum.photos/seed/picsum/100/100', 55,  10, 'gatto' , 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque quaerat inventore, adipisci odio necessitatibus libero quibusdam totam quia itaque nobis expedita perferendis voluptate nostrum, doloribus laudantium autem hic. Expedita!',22,'cuccioli');
$corda = new Gioco('corda grande', 'https://picsum.photos/seed/picsum/100/100', 1, 255, 'cane' , 'asdasdaefewfefafsfdsafsdfe fsfsdfsdf efesfsdfs sef sf sdfsfsdf sf sfsfs sfsasdad asd asdasda sdasd asdasd asd asd asda sdasd rqr qr qwr erwe ter ferg ergwr fwerf qwerq rq rqr wer werfewqfr qr qwrqwr wefqe fqf qq efwef wefqe fqe fqef q qfq ','a salsiccia',1);
$gomitolo = new Gioco('gomitolo', 'https://picsum.photos/seed/picsum/100/100', 2 , 233, 'gatto', 'asd sdasdas dasdas dasda dasdad asdad adasda dada dasdasd asdad adadas dasdad asdad asdasd adadas dada sdaas dasd asdad asda dasd adas dasda sdasd asdasd ad asdas dada sdasd adas dadas dasd ada sdasd adasd ada sdasd asda','ovale',3);

// Metti i prodotti in un array
$prodotti = [
    $pallina,
    $giacca,
    $josera,
    $royalCanine,
    $corda,
    $gomitolo,
];
// Inizio della sessione
session_start();
// Se la variabile di sessione "prodotti" non esiste, viene creata
if (!isset($_SESSION['prodotti'])) {
    $_SESSION['prodotti'] = $prodotti;
}

if(isset($_GET['nome']) && isset($_GET['prezzo']) && isset($_GET['disponibilita']) && isset($_GET['descrizione']) && isset($_GET['categoria']) && isset($_GET['tipo'])) {
    // Se il tipo di prodotto è un "cibo", viene creato un nuovo oggetto di tipo Cibo e inserito nella variabile di sessione "prodotti"
    if($_GET['tipo'] == 'cibo') {
        $nuovoProdotto = new Cibo($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['disponibilita'], $_GET['categoria'], $_GET['descrizione'],0,'');
        $_SESSION['prodotti'][] = $nuovoProdotto;
    // Se il tipo di prodotto è un "gioco", viene creato un nuovo oggetto di tipo Gioco e inserito nella variabile di sessione "prodotti"
    } else if ($_GET['tipo'] == 'gioco') {
        $nuovoProdotto = new Gioco($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['disponibilita'], $_GET['categoria'], $_GET['descrizione'],0,'');
        $_SESSION['prodotti'][] = $nuovoProdotto;
    // Se il tipo di prodotto è un "abbigliamento", viene creato un nuovo oggetto di tipo Abbigliamento e inserito nella variabile di sessione "prodotti"
    } else if(($_GET['tipo'] == 'abbigliamento')) {
        $nuovoProdotto = new Abbigliamento($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['disponibilita'], $_GET['categoria'], $_GET['descrizione'],'','');
        $_SESSION['prodotti'][] = $nuovoProdotto;
    // Se il tipo di prodotto è una "cuccia", viene creato un nuovo oggetto di tipo Cuccia e inserito nella variabile di sessione "prodotti"
    } else if ($_GET['tipo'] == 'cuccia') {
        $nuovoProdotto =  new Cuccia($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['disponibilita'], $_GET['categoria'], $_GET['descrizione'],'','','');
        $_SESSION['prodotti'][] = $nuovoProdotto;

    }
}