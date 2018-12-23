<?php 
 // session_start();
  //print_r($_SESSION);
  include 'template/header.php';
  include 'backend/getproducts.php';
  if(isset($_GET['product'])){
    $products = test($products,$_GET['product']);
  }
  //print_r($products);
?>


  <div class="jumbotron">
<h1 class="display-4">Hello, <?php if(isset($_SESSION['username'])){ echo $_SESSION['username']."!"; }else{ ?> user! <?php } ?></h1>
    <p class="lead">Find the best products online right here right now!</p>
    <hr class="my-4">
    <?php if(!isset($_SESSION['username'])){ ?>
    <p>Sign up, to start ordering now!</p>
    <p class="lead">
      <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
    </p>
    <?php } ?>
  </div>
  <div class="container">
  <?php
    if(isset($_GET['product'])){
      ?>
      <h1 class="text-center"><?=ucfirst($_GET['product'])?></h1>
      <?php
    }else{
  ?>
    <h1 class="text-center">Our Products</h1>
   <?php } ?>

   
    <div class="row product-row">
    <?php
    $i=0;
   foreach($products as $product){
     $i++;
   ?>
      <div class="col-sm-4">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="<?=$product['img']?>" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"><?=$product['name']?> - Rs. <?=$product['price']?></h5>
              <p class="card-text"><?=$product['description'];?></p>
                <a href="detail.php?id=<?=$product['id']?>" class="btn btn-primary">View Details</a>
                <?php if(isset($_SESSION['username'])){ ?>
              <a onclick="addtocart('<?=$_SESSION['id']?>','<?=$product['id']?>')" class="btn btn-success text-white">Add to cart</a>
                <?php } ?>
            </div>
          </div>
        </div>
   <?php 
  if($i%3==0){
    ?>
    </div><div class="row product-row">
    <?php 
  }
  } ?>
        
          
    </div>
    
    
  </div>

  <?php 
  include 'template/footer.php';

?>

