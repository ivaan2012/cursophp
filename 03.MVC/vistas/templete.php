<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Templete</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <style>
    .centrar{
        text-align:center;
        padding:20px 0;
    }
    </style>
</head>

<body>
<h1 class="centrar">
LOGOTIPO</h1>
<header>


<?php
    include "modulos/navegacion.php";
?>
</header>

<section class="centrar">
<?php
$mvc = new MvcController();
$mvc ->enlacesPaginasController();

?>
</section>





</body>
</html>