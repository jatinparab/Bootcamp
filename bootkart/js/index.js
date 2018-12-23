function signup(){
    username = $('#username').val();
    password = $('#password').val();
    
    $.ajax({
        type: "POST",
        url: "backend/signup_ajax.php",
        data: {
            username,
            password
        },
        success: function (data) {
           data = data.trim();
            if(data == 'success'){
                console.log('here');
                alert('User successfully registered');
                window.location = 'login.php';
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
            username,
            password
        },
        success: function (data) {
           data = data.trim();
            if(data == 'success'){
               // console.log('here');
                alert('User successfully logged in');
                window.location = 'index.php';
            }else{
                alert('Wrong username password combination');
                window.location = '';
            }
        }
    });
}

function addtocart(userid,productid){
    $.ajax({
        type: "POST",
        url: "backend/addtocart_ajax.php",
        data: {
            userid,
            productid
        },
        success: function (data) {
           data = data.trim();
            if(data == 'success'){
                alert('Product successfully added to cart!');
                window.location = 'cart.php';
            }else{
                alert('Some error occured, please try again later');
                window.location = '';
            }
        }
    });
}

function placeorder(userid,productid){
    $.ajax({
        type: "POST",
        url: "backend/placeorder_ajax.php",
        data: {
            userid,
            productid
        },
        success: function (data) {
           data = data.trim();
            if(data == 'success'){
                alert('Product successfully ordered!');
                window.location = '';
            }else{
                alert('Some error occured, please try again later');
                window.location = '';
            }
        }
    });
}

function insertproduct(){
    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    category = $('#category').val();
    img = $('#img').val();
    
    $.ajax({
        type: "POST",
        url: "backend/addproduct_ajax.php",
        data: {
            name,
            price,
            description,
            category,
            img
        },
        success: function (data) {
           data = data.trim();
            if(data == 'success'){
               // console.log('here');
                alert('Product added successfully');
                window.location = 'index.php';
            }else{
                alert('Some error occured try again later.');
              //  window.location = '';
            }
        }
    });
}