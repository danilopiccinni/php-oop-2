<?php

require_once './Models/Prodotto.php';
require_once './Models/Cibo.php';
require_once './Models/Giocho.php';
require_once './Models/Abbigliamento.php';

$pallina = new Gioco('pallina interattiva', 3, 'https://picsum.photos/seed/picsum/100/100', 'Gioco', 4, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque quaerat inventore, adipisci odio necessitatibus libero quibusdam totam quia itaque nobis expedita perferendis voluptate nostrum, doloribus laudantium autem hic. Expedita!');
$giacca = new Abbigliamento('cookie', 34, 'https://picsum.photos/seed/picsum/100/100', 'abbigliamento', 1, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Laudantium perspiciatis ipsa error, ullam ipsum rem omnis natus, officia voluptatem qui culpa velit repellat minus harum inventore, odio eaque dolore non.');
$josera = new Cibo('josera', 60, 'https://picsum.photos/seed/picsum/100/100', 'cibo', 55, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam quis doloremque placeat laborum. Officia, odio eaque. Ad consequuntur accusantium sint quia nobis! Non, rerum eveniet. Numquam libero nam deserunt cumque!');
$royalCanine = new Cibo('Royal Canine', 55, 'https://picsum.photos/seed/picsum/100/100', 'cibo', 10, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis cumque quaerat inventore, adipisci odio necessitatibus libero quibusdam totam quia itaque nobis expedita perferendis voluptate nostrum, doloribus laudantium autem hic. Expedita!' );




$prodotti = [
    $pallina,
    $giacca,
    $josera,
    $royalCanine,

];