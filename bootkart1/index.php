<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; ?>

<?php
    $products = getallproducts();
    //print_r($products);
    session_start();
    echo $_SESSION['username'];
?>



<div class="jumbotron">
  <h1 class="display-4">Hello, user!</h1>
  <p class="lead">Find the best products online right now!</p>
  <hr class="my-4">
  <p>Sign up, to start ordering now!</p>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="signup.php" role="button">Sign Up</a>
  </p>
</div>

<h1 class="text-center">Our Products</h1>
<br>
<div class="container">
    <div class="row">
        <div class="col-sm-4">
            <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://via.placeholder.com/640x480" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Oneplus 6 - Rs. 14,000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View Product</a>
    <a href="#" class="btn btn-success">Add To Cart</a>
  </div>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://via.placeholder.com/640x480" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Oneplus 6T - Rs. 37,0000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">View Product</a>
    <a href="#" class="btn btn-success">Add To Cart</a>
  </div>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://via.placeholder.com/640x480" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">iPhone X - Rs. 1,20,000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"> View Product</a>
    <a href="#" class="btn btn-success">Add To Cart</a>
  </div>
</div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://via.placeholder.com/640x480" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">iPhone X - Rs. 1,20,000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"> View Product</a>
    <a href="#" class="btn btn-success">Add To Cart</a>
  </div>
  </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="https://via.placeholder.com/640x480" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">iPhone X - Rs. 1,20,000</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary"> View Product</a>
    <a href="#" class="btn btn-success">Add To Cart</a>
  </div>
  </div>
        </div>
        <div class="col-sm-4">
        <div class="card" style="width: 18rem;">
  <img class="card-img-top" src="..." alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title">Card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <a href="#" class="btn btn-primary">Go somewhere</a>
  </div>
</div>
        </div>
    </div>
</div>

<?php include 'templates/footer.php'; ?>






