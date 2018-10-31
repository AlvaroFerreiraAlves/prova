function saveProduct() {
    var data = $('#form-product').serialize();

    $.ajax({
        url: "../../Controller/ProductController.php",
        method: "POST",
        data: data,
    }).done(function (data) {
        console.log(data);
    })
}