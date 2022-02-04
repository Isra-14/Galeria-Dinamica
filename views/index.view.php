<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">



    <!-- // ! FONTS -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Slabo+27px&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- // ! CSS -->
    <link rel="stylesheet" href="css/estilos.css">

    <title>Galeria</title>
</head>
<body>
    <header>
        <div class="contenedor">
            <h1 class="titulo">Mi increible galeria en PHP y MySQL</h1>
        </div>
    </header>

    <section class="fotos">
        <div class="contenedor">
            <!-- <div class="thumb">
                <a href="#">
                    <img src="img/1.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/2.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/3.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/4.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/5.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/6.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/7.jpg" alt="imagen1">
                </a>
            </div>
            <div class="thumb">
                <a href="#">
                    <img src="img/8.jpg" alt="imagen1">
                </a>
            </div> -->

            
            <?php foreach($fotos as $foto):?>
                <div class="thumb">
                    <a href="foto.php?id=<?php echo $foto['id']; ?>">
                        <img src="fotos/<?php echo $foto['imagen']; ?>" alt="">
                    </a>
                </div>
            <?php endforeach ?>

            <div class="paginacion">
                <!-- <a href="#" class = "izquierda"><i class = "fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <a href="#" class = "derecha">Pagina Siguiente <i class = "fa fa-long-arrow-right"></i></a> -->
                <?php if ($pagina_actual > 1): ?>
                    <a href="index.php?p=<?php echo $pagina_actual - 1; ?>" class="izquierda"><i class="fa fa-long-arrow-left"></i> Pagina Anterior</a>
                <?php endif ?>
                <?php if ($total_paginas != $pagina_actual): ?>
                    <a href="index.php?p=<?php echo $pagina_actual + 1; ?>" class="derecha">Pagina Siguiente <i class="fa fa-long-arrow-right"></i></a>
                <?php endif ?>
            </div>
        </div>
    </section>

    <footer>
        <p class="copyright">
            Galeria creada por Israel Sanchez 2022
        </p>
    </footer>


</body>
</html>