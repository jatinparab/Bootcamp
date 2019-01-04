function signup(){
    username = $('#username').val();
    password = $('#password').val();
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Successfully Registered!");
               window.location = 'login.php';
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function addtocart(userid, productid){
    $.ajax({
        type: "POST",
        url: "backend/addtocart_ajax.php",
        data: {
            //data goes here
            userid,
            productid
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Product added to cart!");
               window.location = 'cart.php';
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function placeorder(userid, productid){
    $.ajax({
        type: "POST",
        url: "backend/placeorder_ajax.php",
        data: {
            //data goes here
            userid,
            productid
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Order placed!");
               window.location = 'cart.php';
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}





function login(){
    username = $('#username').val();
    password = $('#password').val();
    $.ajax({
        type: "POST",
        url: "backend/login_ajax.php",
        data: {
            //data goes here
            username,
            password
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Successfully logged in!");
               window.location = 'index.php';
           }else{
               alert("Wrong username, password combination");
               window.location = '';
           }
        }
    });
    
}