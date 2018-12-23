<?php
  include 'template/header.php';
?>
  

<div class="container">
<h1 class="text-center">Log In</h1>
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Username</label>
    <input type="email" class="form-control" id="username" aria-describedby="emailHelp" placeholder="Enter username">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="password" placeholder="Password">
  </div>
  
  <a  onclick="login()" class="btn btn-primary text-white">Login</a>
</form>
</div>
  
  
<?php 
  include 'template/footer.php';
?>

