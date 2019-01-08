<?php include 'templates/header.php'; 
include 'backend/getproducts.php';
$id = $_GET['id'];
$product = getsingleproduct($id);
?>

<div class="container">
    <h1 class="text-center">Edit Product</h1>
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" value="<?=$product['name']?>" id="name" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" value="<?=$product['price']?>" id="price" aria-describedby="emailHelp" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" value="<?=$product['description']?>" id="description" aria-describedby="emailHelp" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="text" class="form-control" id="img" value="<?=$product['img']?>" aria-describedby="emailHelp" placeholder="Image">
  </div>
  <select class="form-control" id="category">
    <option <?php if($product['category'] == 'Mobiles'){ echo 'selected'; } ?> value="Mobiles">Mobiles</option>
    <option <?php if($product['category'] == 'TVs'){ echo 'selected'; } ?> value="TVs">TVs</option>
    <option <?php if($product['category'] == 'Laptops'){ echo 'selected'; } ?> value="Laptops">Laptops</option>
  </select>
  <button onclick="editproduct('<?=$id?>')" class="btn btn-success">Submit</button>
</div>

<?php include 'templates/footer.php'; ?>