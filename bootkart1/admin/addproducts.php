<?php include 'templates/header.php'; ?>

<div class="container">
    <h1 class="text-center">Add a Product</h1>
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Price</label>
    <input type="text" class="form-control" id="price" aria-describedby="emailHelp" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Image</label>
    <input type="text" class="form-control" id="img" aria-describedby="emailHelp" placeholder="Image">
  </div>
  <select class="form-control" id="category">
    <option value="Mobiles">Mobiles</option>
    <option value="TVs">TVs</option>
    <option value="Laptops">Laptops</option>
  </select>
  <button onclick="addproduct()" class="btn btn-success">Submit</button>
</div>

<?php include 'templates/footer.php'; ?>