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
   
   <div class="container">
      <div class="row">
        <div class="col-md-12 ">

          <nav class="navbar navbar-inverse">
           
           <a class="navbar-brand" href="#">Home</a>
       

        
          <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false">Cadastro <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Cliente</a></li>
            <li><a href="#">Funcionário</a></li>
          </ul>
   

       
          <a href="#" class="dropdown-toggle navbar-brand" data-toggle="dropdown" role="button" aria-expanded="false">Ordem de Serviço <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">
            <li><a href="#">Criar Ordem de Serviço</a></li>
            <li class="divider"></li>
            <li><a href="#">Ordem de serviço abertas</a></li>
            <li><a href="#">Ordem de serviço concluidas</a></li>
          </ul>
              <button type="button" class="btn btn-danger top">Sair</button>

        </nav>

</div>


        <div class="col-md-12 content_own">

          <div class="panel panel-primary">
            <div class="panel-heading"><p align="center"><strong>Home</strong></p></div>
             <div class="panel-body">
             <h3 align="center" class="content_date">  <?php 
                   $date = new DateTime();
                  print $date->format('d/m/Y');
    

               ?><br />
                Usuário: Admin
             </h3>
                  </div>
             </div>

        </div>


      </div><!--end row-->

   </div><!--end conteiner




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>