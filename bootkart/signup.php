<?php 
  include 'template/header.php';

?>
  

<div class="container">
<h1 class="text-center">Sign Up</h1>
<form >
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input  type="text" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  
  <a onclick="signup()" class="btn btn-primary text-white">Sign Up</a>
</form>
</div>
  
  


<?php 
  include 'template/footer.php';

?>