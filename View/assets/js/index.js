function saveProduct() {
    var data = $('#form-product').serialize();

    $.ajax({
        url: "../../Controller/ProductController.php",
        method: "POST",
        data: data,
        dataType: 'json'
    }).done(function (data) {
      console.log(data);

        $(".display-error").html("<ul>"+data+"</ul>");
        $(".display-error").css("display","block");
    })
}

