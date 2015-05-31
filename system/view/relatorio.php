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
            <div class="panel-heading">Gerar Relatório</div>
            <div class="panel-body">
              
  <form action="../controler/control.php" method="post">

<div class="col-md-6 col-md-offset-3">

  <div class="form-group"  >
    <label for="exampleInputEmail1">Data do serviço </label>
    <input type="date" class="form-control" id="exampleInputEmail1"  name="formDate">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Valor</label>
    <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Valor" name="formValor" onkeypress="return SomenteNumero(event);">
  </div>

    <div class="form-group">
    <label for="exampleInputEmail1">Descrição</label>
    <textarea class="form-control" rows="4" cols="50"placeholder="Descrição do serviço" name="Descrição do serviço"> </textarea>
  </div>





  <input name="cadsCliente" type="hidden" value="yes"  />
  <button type="submit" class="btn btn-default">Salvar</button>
</div><!--fim do col-12-->

</form>

            </div>
          </div>

        </div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/butom.js"></script>


    <script language='JavaScript'>
function SomenteNumero(e){
 var tecla=(window.event)?event.keyCode:e.which;
 if((tecla>47 && tecla<58)) return true;
 else{
 if (tecla==8 || tecla==0 || tecla==44) return true;
 else  return false;
 }
}
</script>
  </body>
</html>