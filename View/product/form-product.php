<?php
require_once('../../Model/Category.php')
?>

<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
          integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <script src="../assets/js/index.js"></script>
</head>
<body>
<nav class="navbar navbar-default">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                    data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Brand</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="../product/form-product.php">Cadastrar Item <span class="sr-only">(current)</span></a></li>
                <li><a href="../product/list-products.php">Visulizar Itens</a></li>
                <li><a href="../budget/form-budget.php">Cadastrar Orçamento</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">One more separated link</a></li>
                    </ul>
                </li>
            </ul>

            <ul class="nav navbar-nav navbar-right">
                <li><a href="#">Link</a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                       aria-expanded="false">Dropdown <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#">Action</a></li>
                        <li><a href="#">Another action</a></li>
                        <li><a href="#">Something else here</a></li>
                        <li role="separator" class="divider"></li>
                        <li><a href="#">Separated link</a></li>
                    </ul>
                </li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">

    <div class="alert alert-danger print-error-msg" style="display:none">
        <ul></ul>
    </div>

    <div class="alert alert-danger display-error" style="display: none">
    </div>

    <div class="alert alert-success display-success" style="display: none">
    </div>

    <form class="form-horizontal" id="form-product">
        <fieldset>

            <!-- Form Name -->
            <legend>Cadastrar produtos</legend>

            <!-- Text input-->
            <input type="hidden" name="method" value="store">

            <div class="form-group">
                <label class="col-md-4 control-label" for="name">Nome:</label>
                <div class="col-md-5">
                    <input id="name" name="name" type="text" placeholder="" class="form-control input-md" required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="description">Descrição:</label>
                <div class="col-md-5">
                    <input id="description" name="description" type="text" placeholder="" class="form-control input-md"
                           required="">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="price">Preço:</label>
                <div class="col-md-5">
                    <input id="price" name="price" type="number" step="0.1" min="0" placeholder=""
                           class="form-control input-md" required="" value="0">

                </div>
            </div>


            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="categories">Categorias: </label>
                <div class="col-md-4">
                    <select id="categories" name="categories" class="form-control">
                       <?php
                       $category = new Category();
                       foreach ($category->all() as $c){
                       ?>
                        <option value="<?php echo $c['id']?>"><?php echo $c['name']?></option>
                        <?php }?>
                    </select>
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="save"></label>
                <div class="col-md-4">
                    <button type="button" id="btn-add-product" name="btn-add-product" class="btn btn-success"
                            onclick="saveProduct()">Salvar
                    </button>
                </div>
            </div>



        </fieldset>
    </form>

</div>

<!-- Bootstrap core JavaScript -->
<script src="../assets/jquery/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>



