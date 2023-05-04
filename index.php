<?php

    require_once './db.php'

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>
    <!-- boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- css -->
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>
<!-- Form per inserire un nuovo prodotto -->
    <div class="container p-5">
        <h3>inserisci un nuovo prodotto nel database</h3>
        <form action="index.php" method="GET">
            <input type="text" placeholder="nome" name="nome">
            <input type="number" placeholder="prezzo" name="prezzo">
            <input type="number" placeholder="diponibilita" name="disponibilita">
            <input type="text" placeholder="descrizione" name="descrizione">
            <select name="categoria" id="">
                <option value="">Scegli categoria</option>
                <option value="cane">cane</option>
                <option value="gatto">gatto</option>
            </select>
            <select name="tipo" id="">
                <option value="">Scegli tipologia</option>
                <option value="cibo">cibo</option>
                <option value="gioco">gioco</option>
                <option value="abbigliamento">abbigliamento</option>
                <option value="cuccia">cuccia</option>
            </select>
            <input type="submit">
        </form>
    </div>

<!-- Elenco di tutti i prodotti nel database -->
    <div class="container d-flex gap-3 flex-wrap">
        <?php foreach($_SESSION['prodotti'] as $prodotto) {
        ?>
        <div class="card col-3" style="width: 18rem;">
            <img src="<?php echo $prodotto->getImage() ?>" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title"><?php echo $prodotto->getName() ?></h5>
                <p class="card-text"><?php echo $prodotto->descrizione ?></p>
                <h3><?php echo 'Euro ' . $prodotto->getPrice()?></h3>
                <h6><?php echo $prodotto::$tipo ?></h6>
                <h6><?php echo 'categoria: ' . $prodotto->getCategoria() ?></h6>
                <a href="#" class="btn btn-primary">Compra</a>
            </div>
         </div>
        <?php
        }
        ?>
    </div>
 


<!-- bootstrap -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>

</body>
</html>