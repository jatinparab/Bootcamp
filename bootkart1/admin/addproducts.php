<?php include 'templates/header.php'; ?>

<div class="container">
    <h1 class="text-center">Add a product</h1>
    <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp" placeholder="Name">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Price</label>
    <input type="text" class="form-control" id="price" placeholder="Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" id="description" aria-describedby="emailHelp" placeholder="Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Image Link</label>
    <input type="text" class="form-control" id="img" placeholder="Image Link">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Category</label>
    <select class="form-control" id="category">
        <option value="Mobiles">Mobiles</option>
        <option value="TVs">TVs</option>
        <option value="Laptops">Laptops</option>
    </select>
  </div>
  <button onclick="addproduct()" class="btn btn-success">Submit</button>
</div>

<?php include 'templates/footer.php'; ?>