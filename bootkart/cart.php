<?php 
  include 'template/header.php';
  include 'backend/getcartproducts.php';
  include 'backend/getdetails.php';
  $products = getcart($_SESSION['id']);
//print_r($products);
?>

<div class="container">
<br>
<h1 class="text-center">Your cart</h1>

<ul class="list-unstyled">
<?php foreach($products as $product){
  $product = get_details($product['productid']);
?>
  <li class="media my-5">
    <img class="mr-3 img-responsive cart-img"  src="<?=$product['img']?>"  alt="Generic placeholder image">
    <div class="media-body">
      <h5 class="mt-0 mb-1"><?=$product['name']?> - Rs.<?=$product['price']?></h5>
<?=$product['description']?>      
      <a  onclick="placeorder('<?=$_SESSION['id']?>','<?=$product['id']?>')" class="btn btn-large btn-block btn-success text-white">Place order</a>
      
    </div>
  </li>
<?php 
}
?>
</ul>
</div>

<?php 
  include 'template/footer.php';

?>