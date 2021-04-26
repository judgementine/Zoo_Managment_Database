{source}<?php
session_start();
$servername = "team9-zoo-database-57.c3gzznnyeksn.us-east-2.rds.amazonaws.com";
$username = "admin";
$password = "T3Am9Pasw0rd$";
$dbname = "zoodb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
if(isset($_POST["add_to_cart"])) {
if(isset($_SESSION["shopping_cart"])) {

$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if(!in_array($_GET["ID"], $item_array_id)) {
$count = count($_SESSION["shopping_cart"]);
$item_array = array(
 'item_id' => $_GET["ID"],
 'item_name' => $_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
 'stock' => $_POST["hidden_stock"],
'quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][$count] = $item_array;
 echo '<script>alert("Item has been added to your cart.")</script>';
} else {

echo '<script>alert("Item is already added.")</script>';
echo '<script>window.location="index.php/shop"</script>';

}


} else {

$item_array = array(
 'item_id' => $_GET["ID"],
 'item_name' => $_POST["hidden_name"],
 'item_price' => $_POST["hidden_price"],
 'stock' => $_POST["hidden_stock"],
'quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][0] = $item_array;
echo '<script>alert("Item has been added to your cart.")</script>';

}
}

if(isset($_GET["action"])) {

if($_GET["action"] == "delete") {

foreach($_SESSION["shopping_cart"] as $keys => $values) {

if($values["item_id"] == $_GET["ID"]) {

unset($_SESSION["shopping_cart"][$keys]);
echo '<script>alert("Item Removed")</script>';
echo '<script>window.location="index.php/shop"</script>';

}
}
}
}

?>
<!DOCTYPE html>
<html>
<body>

<br />
<div class ="container" style="width:700px;">
<h3 align="center">The Zoo Shop</h3><br />
<?php
$query = " SELECT ID, item_name, item_price, stock FROM Items";
$result = $conn->query($query);
if ($result->num_rows > 0) {
while($row = $result->fetch_assoc()) {
?>
<div class="col-md-4">
<form method="post" action="index.php/shop">
<div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:16px;" align="center">
<h4 class="text-info"><?php echo $row["item_name"]; ?></h4>
<h4 class="text-danger">$ <?php echo $row["item_price"]; ?></h4>
<h4 class="text-info">Stock: <?php echo $row["stock"]; ?></h4>
<input type="hidden" name="hidden_stock" value="<?php echo $row["stock"]; ?>" />
<input type="number" name="quantity" value = 1 class="form-control" min="1" max="<?php echo $row["stock"];?>" step="1" pattern="\d+" required/>
<input type="hidden" name="hidden_name" value="<?php echo $row["item_name"]; ?>" />
<input type="hidden" name="hidden_price" value="<?php echo $row["item_price"]; ?>">
<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
</div>
</form>
</div>
<?php
}
}
?>
</div>
<br />
</body>
</html>{/source}
