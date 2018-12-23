<?php 
include 'template/header.php';
?>

<div class="container">
<h1 class="text-center">Insert Products</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Enter product name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Price</label>
    <input type="text" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Enter product price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Description</label>
    <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Enter product description">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Product Image Link</label>
    <input type="text" class="form-control" id="img" aria-describedby="emailHelp" placeholder="Enter link">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Select Category</label>
    <select class="form-control" id="category">
    <option value="Mobiles">Mobiles</option>
    <option value="TVs">TVs</option>
    <option value="Laptops">Laptops</option>
  </select>
  </div>
  
  <a  onclick="insertproduct()" class="btn btn-primary text-white">Add Product</a>
</form>

</div>

<?php 
include 'template/footer.php';
?>