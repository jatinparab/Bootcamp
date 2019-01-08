<?php include 'templates/header.php'; ?>
<?php include 'backend/getproducts.php'; ?>
<?php

$orders = getorders(); 

?>

<div class="container">
    <h1 class="text-center">Orders</h1>
    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Product Name</th>
                <th scope="col">Username</th>
                <th scope="col">Product Price</th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($orders as $order){
            $id = $order['productid'];
            $product = getsingleproduct($id);
            $userid = $order['userid'];
            $user = getuserinfo($userid);
            ?>
            <tr>
                <th scope="row"><?=$order['id']?></th>
                <td><?=$product['name']?></td>
                <td><?=$user['username'];?></td>
                <td><?=$product['price']?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>


<?php include 'templates/footer.php'; ?>

https://m.do.co/c/1d9c6302a930