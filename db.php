<?php

require_once './Models/Prodotto.php';
require_once './Models/Cibo.php';
require_once './Models/Giocho.php';
require_once './Models/Abbigliamento.php';

$pallina = new Gioco('pallina interattiva','https://picsum.photos/seed/picsum/100/100', 3,  4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque quaerat inventore, adipisci odio necessitatibus libero quibusdam totam quia itaque nobis expedita perferendis voluptate nostrum, doloribus laudantium autem hic. Expedita!', 'cane');
$giacca = new Abbigliamento('cookie','https://picsum.photos/seed/picsum/100/100', 34,  1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium perspiciatis ipsa error, ullam ipsum rem omnis natus, officia voluptatem qui culpa velit repellat minus harum inventore, odio eaque dolore non.', 'cane');
$josera = new Cibo('josera','https://picsum.photos/seed/picsum/100/100', 60,  55, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis doloremque placeat laborum. Officia, odio eaque. Ad consequuntur accusantium sint quia nobis! Non, rerum eveniet. Numquam libero nam deserunt cumque!', 'gatto');
$royalCanine = new Cibo('Royal Canine','https://picsum.photos/seed/picsum/100/100', 55,  10, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque quaerat inventore, adipisci odio necessitatibus libero quibusdam totam quia itaque nobis expedita perferendis voluptate nostrum, doloribus laudantium autem hic. Expedita!', 'gatto' );
$corda = new Gioco('corda grande', 'https://picsum.photos/seed/picsum/100/100', 1, 255, 'asdasdaefewfefafsfdsafsdfe fsfsdfsdf efesfsdfs sef sf sdfsfsdf sf sfsfs sfsasdad asd asdasda sdasd asdasd asd asd asda sdasd rqr qr qwr erwe ter ferg ergwr fwerf qwerq rq rqr wer werfewqfr qr qwrqwr wefqe fqf qq efwef wefqe fqe fqef q qfq ', 'cane' );
$gomitolo = new Gioco('gomitolo', 'https://picsum.photos/seed/picsum/100/100', 2 , 233, 'asd sdasdas dasdas dasda dasdad asdad adasda dada dasdasd asdad adadas dasdad asdad asdasd adadas dada sdaas dasd asdad asda dasd adas dasda sdasd asdasd ad asdas dada sdasd adas dadas dasd ada sdasd adasd ada sdasd asda', 'gatto');


$prodotti = [
    $pallina,
    $giacca,
    $josera,
    $royalCanine,
    $corda,
    $gomitolo,

];