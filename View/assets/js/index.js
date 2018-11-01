function saveProduct() {
    var data = $('#form-product').serialize();

    $.ajax({
        url: "../../Controller/ProductController.php",
        method: "POST",
        data: data,
        dataType: 'json'
    }).done(function (data) {
        console.log(data);

        if (data == "") {
            $(".display-success").html("<ul>Cadastrado!</ul>");
            $(".display-success").css("display", "block");
            $("#form-product").trigger('reset');
            $('.display-error').hide();

        } else {
            $(".display-error").html("<ul>" + data + "</ul>");
            $(".display-error").css("display", "block");
            $('.display-success').hide();
        }

    })
}

