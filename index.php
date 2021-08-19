

<?php

include 'Configuracion.php';
?>

<?php include_once "header.php" ?>

<!DOCTYPE html>
<html lang="es">
<head>
    <title>PHP Shopping Cart Tutorial</title>
    <meta charset="utf-8">

    <style>
    .container{padding: 20px;}
    .cart-link{width: 100%;text-align: right;display: block;font-size: 22px;}
    </style>
</head>
</head>
<body>
<div class="container">
<<<<<<< HEAD
    <h1 class="text-center">Mis Productos</h1>
    
=======
<div class="panel panel-default">
<div class="panel-heading"> 

<ul class="nav nav-pills">
  <li role="presentation" class="active"><a href="index.php">Inicio</a></li>
  <li role="presentation"><a href="VerCarta.php">Ver Carta</a></li>
  <li role="presentation"><a href="Pagos.php">Pagos</a></li>
</ul>
</div>



<div class="panel-body">
    <h1>Mis Productos</h1>
    <a href="VerCarta.php" class="cart-link" title="Ver Carta"><i class="glyphicon glyphicon-shopping-cart"></i></a>
>>>>>>> fb4454815601a9ab42e61e87c8425143f8244987
    <div id="products" class="row">
        <?php
        //get rows query
        $query = $db->query("SELECT * FROM mis_productos ORDER BY id ASC LIMIT 10");
        if($query->num_rows > 0){ 
            while($row = $query->fetch_assoc()){
        ?>
        <div class="item col-lg-4">
            <div class="thumbnail">
                <div class="caption">
                    <h4 class="list-group-item-heading"><?php echo $row["name"]; ?></h4>
                    <p class="list-group-item-text"><?php echo $row["description"]; ?></p>
                    <div class="row">
                        <div class="col-sm-6">
                            <p class="lead"><?php echo 'Q'.$row["price"].' GT'; ?></p>
                        </div>
                        <div class="col-sm-6">
                            <a class="btn btn-success" href="AccionCarta.php?action=addToCart&id=<?php echo $row["id"]; ?>">Agregar a la Carta</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } }else{ ?>
        <p>Producto(s) no existe.....</p>
        <?php } ?>
    </div>
        </div>
 <div class="panel-footer">BaulPHP</div>
 </div><!--Panek cierra-->
 
</div>
<?php include_once "footer.php" ?>
</body>
</html>