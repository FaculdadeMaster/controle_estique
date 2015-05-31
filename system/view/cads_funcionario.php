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
      <label for="disabledTextInput">Número do Funcionário</label>
      <input class="form-control" id="disabledInput" type="text" placeholder="Número do funcionário" disabled>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Nome: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome funcionário">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CPF: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF do funcionário" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">RG: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="RG do funcionário" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cidade: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cidade">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Bairro: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bairro">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 1" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Telefone 2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 2" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Celular</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 2" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
  </div>



</div><!--fim do col-6-->
<div class="col-md-6">
  



<div class="form-group">
  <label for="exampleInputEmail1">Cargo: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cargo na empresa">
  </div>

 <div class="form-group">
  <label for="exampleInputEmail1">Departamento: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Departamento">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Banco: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Banco para depósito de salário">
  </div>

 <div class="form-group">
    <label for="exampleInputEmail1">Agencia: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Agência">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Conta Bancária: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Conta bancária">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Data Nascimento </label>
    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Cargo na empresa">
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">Número Carteira de Trabalho</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Carteira de trabalho" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
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
    <label for="exampleInputEmail1">CEP </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CEP do funcionário" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
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