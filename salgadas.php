<!DOCTYPE html>
<html lang="en">

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
                        <h2>PIZZAS SALGADAS</h2>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>
                            <h4>ATUM..........R$ 38,00</h4>
                            <strong>Atum e cebola </strong>
                            <br><br>
                            <h4>BAURU..........R$ 40,00</h4>
                            <strong>Presunto, tomate e mussarela</strong>
                            <br><br>
                            <h4>BROCÓLIS..........R$ 42,00</h4>
                            <strong>Brócolis, cebola, mussarela e bacon</strong>
                            <br><br>
                            <h4>CALABRESA..........R$ 40,00</h4>
                            <strong>Calabresa fatiada</strong>
                            <br><br>
                            <h4>CARNE MOÍDA..........R$ 41,00</h4>
                            <strong>Carne moída, mussarela, parmesão e batata palha</strong>
                            <br><br>
                        </td>
                        <td>
                            <h4>ESCAROLA..........R$ 40,00</h4>
                            <strong>Escarola, cebola, bacon e mussarela</strong>
                            <br><br>
                            <h4>MARGUERITA..........R$ 40,00</h4>
                            <strong>Mussarela, manjericão e rodelas de tomate</strong>
                            <br><br>
                            <h4>MILHO..........R$ 40,00</h4>
                            <strong>Milho com mussarela</strong>
                            <br><br>
                            <h4>MUSSARELA..........R$ 40,00</h4>
                            <strong>Mussarela com rodelas de tomate</strong>
                            <br><br>
                            <h4>NAPOLITANA..........R$ 40,00</h4>
                            <strong>Mussarela, tomate, parmesão e molho gratinado</strong>
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