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
