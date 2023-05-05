<?php
// includi i file delle classi necessarie
require_once './Models/Prodotto.php';
require_once './Models/Cibo.php';
require_once './Models/Giocho.php';
require_once './Models/Abbigliamento.php';

// Crea alcuni prodotti di esempio
$pallina = new Gioco('pallina interattiva','https://picsum.photos/seed/picsum/100/100', 3, 'cane','tonda',2);
$giacca = new Abbigliamento('cookie','https://picsum.photos/seed/picsum/100/100', 34, 'gatto' ,'xl','nylon');
$josera = new Cibo('josera','https://picsum.photos/seed/picsum/100/100', 60, 'gatto',50,'adulti');
$royalCanine = new Cibo('Royal Canine','https://picsum.photos/seed/picsum/100/100', 55, 'gatto' ,22,'cuccioli');
$corda = new Gioco('corda grande', 'https://picsum.photos/seed/picsum/100/100', 1, 'cane' ,'a salsiccia',1);
$gomitolo = new Gioco('gomitolo', 'https://picsum.photos/seed/picsum/100/100', 2 , 'gatto','ovale',3);

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

if(isset($_GET['nome']) && isset($_GET['prezzo']) && isset($_GET['categoria']) && isset($_GET['tipo'])) {
    // Se il tipo di prodotto è un "cibo", viene creato un nuovo oggetto di tipo Cibo e inserito nella variabile di sessione "prodotti"
    if($_GET['tipo'] == 'cibo') {
        $nuovoProdotto = new Cibo($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['categoria'], 0,'');
        $_SESSION['prodotti'][] = $nuovoProdotto;
    // Se il tipo di prodotto è un "gioco", viene creato un nuovo oggetto di tipo Gioco e inserito nella variabile di sessione "prodotti"
    } else if ($_GET['tipo'] == 'gioco') {
        $nuovoProdotto = new Gioco($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['categoria'], 0,'');
        $_SESSION['prodotti'][] = $nuovoProdotto;
    // Se il tipo di prodotto è un "abbigliamento", viene creato un nuovo oggetto di tipo Abbigliamento e inserito nella variabile di sessione "prodotti"
    } else if(($_GET['tipo'] == 'abbigliamento')) {
        $nuovoProdotto = new Abbigliamento($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['categoria'], '','');
        $_SESSION['prodotti'][] = $nuovoProdotto;
    // Se il tipo di prodotto è una "cuccia", viene creato un nuovo oggetto di tipo Cuccia e inserito nella variabile di sessione "prodotti"
    } else if ($_GET['tipo'] == 'cuccia') {
        $nuovoProdotto =  new Cuccia($_GET['nome'], 'https://picsum.photos/seed/picsum/100/100', $_GET['prezzo'], $_GET['categoria'], '','','');
        $_SESSION['prodotti'][] = $nuovoProdotto;

    }
}

if(isset($_GET['compra'])) {

        $_SESSION['prodotti'][$_GET['compra']]->setContatore(1);
        
}