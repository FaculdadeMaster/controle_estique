<!DOCTYPE html>
<html lang="pt">
  <head>
  
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />


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

  <div class="form-group"  >
    <label for="exampleInputEmail1">Nome do cliente: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome do cliente" name="formNome">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Endereço: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Endereço" name="formEndereco">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Bairro: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Bairro" name="formBairro">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Cidade: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Cidade" name="formCidade">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone 1: * </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 1" name="formTele1" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Telefone 2: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Telefone 2" name="formTele2" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>




</div><!--fim do col-6-->
<div class="col-md-6">

   <div class="form-group">
    <label for="exampleInputEmail1">Email: </label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="formEmail">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CEP: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CEP" name="formCep" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
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
    <label for="exampleInputEmail1">FAX: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Fax" name="formFax" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">CPF/CNPJ: </label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="CPF/CNPJ" name="formCnpjCpf" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Tipo de Pessoa </label>
    <select class="form-control" name="formTipoPessoa">
        <option>FISICA</option>
        <option>JURIDICA</option>
        
    </select>
  </div>
  <input name="cadsCliente" type="hidden" value="yes"  />
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