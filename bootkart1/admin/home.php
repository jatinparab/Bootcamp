<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; ?>

<?php 
    $products = getallproducts();
?>

<div class="container">
    <h1 class="text-center">All Products</h1>
    <div class="row">
    <?php foreach($products as $product){ ?>
        <div class="col-sm-4">
            <div class="card" style="width: 18rem; margin-top:20px; ">
            
                <img class="card-img-top" src="<?=$product['img']?>" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title"> <?=$product['name']?> - Rs. <?=$product['price']?></h5>
                    <p class="card-text"><?=$product['description']?></p>
                     <a href="editproducts.php?id=<?=$product['id']?>"><button class="btn btn-info">Edit</button></a>
                    <button onclick="deleteproduct('<?=$product['id']?>')" class="btn btn-danger">Delete</button>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>

</div>

<?php include 'templates/footer.php'; ?>