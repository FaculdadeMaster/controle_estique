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
            <div class="panel-heading">Ordem de serviço aberta</div>
            <div class="panel-body">
              
  <form action="../controler/control.php" method="post">

<div class="col-md-9 col-md-offset-2">
  <table class="table table-hover">

  <tr>
    <th>Nome Cliente</th>
    <th>Telefone 1</th>
    <th>Telefone 2</th>
    <th>Data do serviço</th>
    <th>Finalizar</th>
    <th>Imprimir</th>
  </tr>

    <?php
    include "../model/crud_classes.php";
    $ex=new Vizualiza();
    $aux=$ex->select("funcionarios");
    $aux->execute();


    while($linha=$aux->fetch(PDO::FETCH_ASSOC)){
      //$date= new DateTime("");
        print "  
      <tr >
        <td>".$linha['nome']."</td>
        <td>".$linha['nome']."</td>
        <td>".$linha['nome']."</td>
        <td>".$linha['nome']."</td>
        <td><button type=\"button\" class=\"btn btn-danger\">Fechar</button></td>
        <td><button type=\"button\" class=\"btn btn-primary\">Imprimir</button></td>
      </tr>";



    }
    ?>

 </table>


</div><!--fim do col-12-->



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