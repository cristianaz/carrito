

<?php
if(!isset($_REQUEST['id'])){
    header("Location: index.php");
}
?>
<?php include_once "header.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
 
    <title>Orden Completado - PHP Carrito de Compras</title>
    <meta charset="utf-8">
    <style>
    .container{padding: 20px;}
    p{color: #34a853;font-size: 18px;}
    </style>
</head>
</head>
<body>
<div class="container">
<div class="panel panel-default">
<div class="panel-heading"> 





    <h1>Estado de su Orden</h1>
    <p>Su pedido ha sido enviado exitosamente. La ID del pedido es #<?php echo $_GET['id']; ?></p>
           </div>
 
 </div><!--Panek cierra-->
</div>
<?php include_once "footer.php" ?>
</body>
</html>