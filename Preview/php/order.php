<?php
session_start();
if (isset($_SESSION['LOGIN']))
{
?>
<?php 
if (!isset($_SESSION['SHOPPING_CART'])){ $_SESSION['SHOPPING_CART'] = array(); }
if (isset($_GET['add']) && isset($_GET['price']) && isset($_GET['qty'])){
    $ITEM = array( //Arreglo que contendrá los valores que se consiguen de la página anterior
           
        'name' => $_GET['add'], 
        
        'price' => $_GET['price'], 

        'qty' => $_GET['qty']       
        );
    $_SESSION['SHOPPING_CART'][] =  $ITEM;
    header('Location: ' . $_SERVER['PHP_SELF']);  //Quita las variables post y  deja la dirección normal
}
else if (isset($_GET['remove'])){
   
    unset($_SESSION['SHOPPING_CART'][$_GET['remove']]);
    header('Location: ' . $_SERVER['PHP_SELF']);

}
else if (isset($_GET['empty'])){
    session_destroy();

    header('Location: ' . $_SERVER['PHP_SELF']);

}
else if (isset($_POST['update'])) {
    //Updates Qty for all items
    foreach ($_POST['items_qty'] as $itemID => $qty) {
        //If the Qty is "0" remove it from the cart
        //if ($qty == 0) {
            //Remove it from the cart
           // unset($_SESSION['SHOPPING_CART'][$itemID]);
        //}
        else if($qty >= 1) {
            //Update to the new Qty
            $_SESSION['SHOPPING_CART'][$itemID]['qty'] = $qty;
        }
    }
    //Clear the POST variables
    header('Location: ' . $_SERVER['PHP_SELF']);
} 

?>


<?php
include 'header_no_active.php';
?>

<br>
<br>
<div class="body-wrapper2">
    <br>
<center><h1>Adquisición de pedido</h1></center>
<br>
<form action="" method="post" name="shoppingcart">
<table class="table table-condensed table-bordered">
    <tr>
 <th scope="col"><h6>Acción</h6></th>
        <th scope="col"><h6>Nombre de Producto</h6></th>
        <th scope="col"><h6>Precio Unitario</h6></th>
        <th scope="col"><h6>Cantidad de Productos a Pedir</h6></th>
        <th scope="col"><h6>Costo ($)</h6></th>
    </tr>
     <?php 
   $total=0;
        foreach ($_SESSION['SHOPPING_CART'] as $itemNumber => $item) {
        ?>
    <tr id="item<?php echo $itemNumber; ?>">  
            <td><a class='btn btn-xs btn-warning'  href="?remove=<?php echo $itemNumber; ?>"><i class="fa fa-minus"></i> Remover</a></td>
            <td><?php echo $item['name']; ?></td>
            <td><?php echo $item['price']; ?></td>
            <td><center><input class="btn btn-contact"name="items_qty[<?php echo $itemNumber; ?>]" type="text" id="item<?php echo $itemNumber; ?>_qty" value="<?php echo $item['qty']; ?>" size="20" maxlength="5" /></center></td>
            <td><?php echo $item['qty'] * $item['price']; ?></td> 

        </tr>
    <?php
      
 $subtotal=($item['qty'] * $item['price']); 
     $total=($total + $subtotal);
      }

      ?>
</table>

<center><small>Total de la compra:</small><b>
$<?php echo $total;?> </b></center>
<center>
    <p>
      <label>
      <input class="btn btn-lg btn-success" type="submit" name="update" id="update" value=" Actualizar su Pedido" />
      </label>
    </p></center>
</form>
<center><p><button class="btn btn-lg btn-default"><a href="shopping_cart.php"><i class="fa fa-shopping-cart"></i> Sigue Comprando</a></button> <br> <br></p></center>
<form method="post" action="finishbuy.php">
 <input type="hidden" name="user" id="user" value="<?php echo $_SESSION['LOGIN'];?>" />
 <input type="hidden" name="total" id="total" value="<?php echo $total;?>" />
<center> <hr width="1000"></center>
 <center> <input class="btn btn-lg btn-primary" type="submit" name="enviar" id="enviar" value="Finalizar su Compra" /></center>

</form>

</div>

<?php
include 'header_footer_home.php';

?>
<?php
}
else
{
    echo '<script>location.href = "loginuser.php";</script>'; 
}
?>
