<!DOCTYPE html>
<html lang="pt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="bootstrap/css/style_own.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
           <div class="col-md-12">

                <div class="panel panel-default">
            <div class="panel-heading">Cadastro de Cliente</div>
            <div class="panel-body">
              
  <form>

<div class="col-md-6">

  <div class="form-group">
    <label for="exampleInputEmail1">Nome do cliente: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do cliente">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Endereço: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Endereço">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Bairro: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bairro">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cidade: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cidade">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone 1: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 1">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone 2: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 2">
  </div>




</div><!--fim do col-6-->
<div class="col-md-6">

   <div class="form-group">
    <label for="exampleInputEmail1">Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CEP: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CEP">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">UF: </label>
    <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">FAX: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Fax">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CPF/CNPJ: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF/CNPJ" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Tipo de Pessoa </label>
    <select class="form-control">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
    </select>
  </div>

  <button type="submit" class="btn btn-default">Salvar</button>
</form>

            </div>
          </div>

        </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/butom.js"></script>
  </body>
</html>