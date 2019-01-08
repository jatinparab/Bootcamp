function addproduct(){
    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    img = $('#img').val();
    category = $('#category').val();

    $.ajax({
        type: "POST",
        url: "backend/addproduct_ajax.php",
        data: {
            //data goes here
            name,
            price,
            description,
            img,
            category
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Product added!");
               window.location = 'home.php';
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}

function deleteproduct(productid){
    $.ajax({
        type: "POST",
        url: "backend/deleteproduct_ajax.php",
        data: {
            //data goes here
            productid,
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Product deleted!");
               window.location = 'home.php';
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}


function editproduct(id){

    name = $('#name').val();
    price = $('#price').val();
    description = $('#description').val();
    img = $('#img').val();
    category = $('#category').val();

    $.ajax({
        type: "POST",
        url: "backend/editproduct_ajax.php",
        data: {
            //data goes here
            id,
            name,
            price,
            description,
            img,
            category
        },
        success: function (data) {
           //data is returned here
           if(data == 'success'){
               alert("Product edited!");
               window.location = 'home.php';
           }else{
               alert("There was some problem, please try again later");
           }
        }
    });
}



