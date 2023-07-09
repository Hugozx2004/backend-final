<?php
    require("database.php");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preload" href="https://.googleapifontss.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap"  crossorigin="crossorigin" as="font">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&family=PT+Sans:wght@400;700&display=swap" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    
<?php require("Componentes/header.php");?>

    <main class="contenedor">
        <h3 class="centrar-texto">Sobre Nosotros</h3>

        <div class="sobre-nosotros">
            <div class="sobre-nosotros__imagen">
                <img src="img/nosotros.jpg" alt="imagen nosotros">
            </div>

            <div class="sobre-nosotros__texto">
                <p>Pellentesque lacus orci, mattis cursus est in, finibus sagittis mi. Sed iaculis elit et porta luctus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Maecenas lacinia est vitae eros posuere, non commodo justo viverra. Sed finibus id elit sit amet egestas. Nullam ac urna odio. Fusce vestibulum venenatis quam in scelerisque. Maecenas ultricies ultricies velit, non suscipit enim. Vivamus massa velit, lobortis fringilla laoreet in, suscipit vitae velit. Etiam at orci euismod magna rhoncus luctus. Curabitur viverra est ut elit gravida rutrum. Nullam eget viverra enim. Quisque vitae varius urna.</p>

                <p>Maecenas commodo erat ac elit elementum, ac eleifend arcu gravida. Donec commodo auctor augue, eget tempor dui fermentum in. Duis non enim vitae metus accumsan vehicula. Pellentesque egestas diam ut ante aliquet, sit amet fringilla odio interdum. In nec odio nec turpis faucibus sagittis. Sed quis tellus nec ante luctus aliquam sit amet vel mauris. Nunc vitae facilisis mauris, posuere tristique arcu. Praesent nisi urna, venenatis non laoreet</p>
            </div>
        </div>
    </main>
    <?php require("Componentes/footer.php"); ?>
</body>
</html>
