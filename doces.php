<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap" rel="stylesheet">
    <link href="./css/estilo_pizzaria.css" rel="styleheet">


    <!-- JS / CSS -->
    <?php include_once('inc/css.php'); ?>
    <?php include_once('inc/js.php'); ?>
    <!-- / JS / CSS -->


    <title>Tudo Acaba em Pizza</title>
</head>

<body>
    <div class="container">
        <?php include_once('inc/menu.php'); ?>
        <div class="row col-md-12 text-center titupizza">
            <h1 class="titulo1">CARDÁPIO</h1>
        </div>

        <div class="col-md-12 table-responsive text-center">
            <table class="table align-top table-borderless">
                <thead>
                    <tr>
                        <h2>PIZZAS DOCES</h2>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4>ABACAXI..........R$ 40,00</h4>
                            <strong>Abacaxi e leite condensado </strong>
                            <br><br>
                            <h4>BANANA..........R$ 40,00</h4>
                            <strong>Banana, canela em pó e leite condensado</strong>
                            <br><br>
                            <h4>BRIGADEIRO..........R$ 40,00</h4>
                            <strong>Chocolate e granulado</strong>
                            <br><br>
                            <h4>M&M'S..........R$ 39,00</h4>
                            <strong>M&m's, chocolate e leite condensado</strong>
                            <br><br>
                            <h4>OURO BRANCO..........R$ 39,00</h4>
                            <strong>Ouro branco e chocolate</strong>
                        </td>
                        <td>
                            <h4>PRESTÍGIO..........R$ 39,00</h4>
                            <strong>Chocolate Cremoso, coco ralado, leite condensado</strong>
                            <br><br>
                            <h4>ROMEU & JULIETA..........R$ 40,00</h4>
                            <strong>Mussarela e goiabada</strong>
                            <br><br>
                            <h4>SEDUÇÃO..........R$ 39,00</h4>
                            <strong>Morango, leite condensado e chocolate ao leite</strong>
                            <br><br>
                            <h4>SONHO DE VALSA..........R$ 39,00</h4>
                            <strong>Sonho de valsa, chocolate e leite condensado</strong>
                        </td>
                    </tr>
                </tbody>
            </table>            
        </div>
        <div class="patrocinios">
            <img src="img/border.png" class="img-fluid mt-4" alt="borda">
            <?php
            include_once('inc/rodape.php'); ?>
        </div>
    </div>

    
</body>

</html>