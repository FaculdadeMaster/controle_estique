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
              
  <form action="../controler/control.php" method="post">

<div class="col-md-6">
<!--
  <div class="form-group">
      <label for="disabledTextInput">Número do Funcionário</label>
      <input class="form-control" id="disabledInput" type="text" placeholder="Número do funcionário" disabled>
  </div>
-->
  <div class="form-group">
    <label for="exampleInputEmail1">Nome: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome funcionário" name="formNome">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CPF: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF do funcionário" name="formCpf" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">RG: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="RG do funcionário" name="formRg" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cidade: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cidade" name="formCidade">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Bairro: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bairro" name="formBairro">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone 1</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 1" name="formTelefone1" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

   <div class="form-group">
    <label for="exampleInputEmail1">Telefone 2</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 2" name="formTelefone2" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Celular</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Celular" name="formCelular" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="formEmail">
  </div>



</div><!--fim do col-6-->
<div class="col-md-6">
  



<div class="form-group">
  <label for="exampleInputEmail1">Cargo: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cargo na empresa" name="formCargo">
  </div>

 <div class="form-group">
  <label for="exampleInputEmail1">Departamento: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Departamento" name="formDepartamento">
  </div>

  
   <div class="form-group">
    <label for="exampleInputEmail1">Data Nascimento </label>
    <input type="date" class="form-control" id="exampleInputEmail1" placeholder="Cargo na empresa" name="formDataNascimento">
  </div>


   <div class="form-group">
    <label for="exampleInputEmail1">Número Carteira de Trabalho</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Carteira de trabalho" name="formCartTrab" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">UF: </label>
    <select class="form-control" name="formUf">
           <option>AC</option>
        <option>AL</option>
        <option>AP</option>
        <option>AM</option>
        <option>BA</option>
        <option>CE</option>
        <option>DF</option>
        <option>ES</option>
        <option>GO</option>
        <option>MA</option>
        <option>MT</option>
        <option>MS</option>
        <option>MG</option>
        <option>PA</option>
        <option>PB</option>
        <option>PR</option>
        <option>PE</option>
        <option>PI</option>
        <option>RN</option>
        <option>RS</option>
        <option>RO</option>
        <option>RR</option>
        <option>SC</option>
        <option>SP</option>
        <option>SE</option>
        <option>TO</option>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CEP </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CEP do funcionário" name="formCep" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <input name="cadsFuncionario" type="hidden" value="yes"  />
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