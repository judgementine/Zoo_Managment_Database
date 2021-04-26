{source}<?php
session_start();
 if(isset($_GET['remove']))
{
unset($_SESSION['shopping_cart'][$_GET['item']]);
echo '<script>window.location="index.php/cart"</script>';
}
 if(isset($_GET['update']))
{
$update = $_SESSION['shopping_cart'][$_GET['item']];
$update['quantity']= $_GET['quantity'];
echo '<script>window.location="index.php/cart"</script>';
}
?>
<html>
<body>
<div class="row">
<div class="col-md-12">
<?php if(empty($_SESSION['shopping_cart'])){?>
<table class="table">
<tr>
<td>
<p>Your cart is empty</p>
</td>
</tr>
</table>
<?php }?>
<?php if(isset($_SESSION['shopping_cart']) && count($_SESSION['shopping_cart']) > 0){?>
<table class="table">
<thead>
<tr>
<th>Product</th>
<th>stock</th>
<th>Price</th>
<th>Qantity</th>
<th>Total</th>
 <th>Action</th>
</tr>
</thead>
<tbody>
<?php
$totalCounter = 0;
$itemCounter = 0;
foreach($_SESSION['shopping_cart'] as $key => $item)
{
$total = $item['item_price'] * $item['quantity'];
$totalCounter+= $total;
$itemCounter+=$item['quantity'];?>
<tr>
<td>
 <?php echo $item['item_name'];?>
</td>
<td>
<?php echo $item['stock'];?>
</td>
<td>
<?php echo $item['item_price'];?>
</td>
<td>
<input type="number" name="" value="<?php echo $item['quantity'];?>" class="cart-qty-single" data-item-id="<?php echo $key?>" min="1" max="<?php echo $item['stock'];?>" step="1" pattern="\d+" required/>
</td>
<td>
<?php echo $total;?>
</td>
 <td>

<div class="col-md-4">
<form method="get" action="index.php/cart">
<input type="hidden" name="item" value="<?php echo $key; ?>">
<input type="submit" name="remove" style="margin-top:5px;" class="btn btn-success" value="remove" />
</form>
 </div>
</td>
</tr>
<?php }?>
<tr class="border-top border-bottom">
<td><button class="btn btn-danger btn-sm" value = empty id="emptyCart">Clear Cart</button></td>
<td></td>
<td>
<strong>
<?php
echo ($itemCounter==1)?$itemCounter.' item':$itemCounter.' items'; ?>
</strong>
</td>
<td><strong>$<?php echo $totalCounter;?></strong></td>
</tr>
</tr>
</tbody>
</table>
<div class="row">
<div class="col-md-11"><a href="index.php/checkout"><button class="btn btn-primary btn-lg float-right">Checkout</button></a>
</div>
</div>
<?php }?>
</div></div>

</body>

</html>{/source}
