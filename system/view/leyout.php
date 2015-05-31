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
        <div class="container-fluid">
           <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav">

            <li>
              <a href="#" id="button1"><strong>HOME</strong></a>
            </li>


            <li>
                <a href="#" class="btn btn-inverse dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true"> 
                  Cadastro <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="button2">Clientes</a></li>  
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="button3">Funcionários</a></li>  
              </ul>
            </li>

            <li>
                <a href="#" class="btn btn-inverse dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-expanded="true"> 
                  Ordem de Serviço <span class="caret"></span></a>
                    <ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1">
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="button1">Criar Ordem de Serviço</a></li> 
              <li role="presentation" class="divider"></li> 
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="button1">Ordem de Serviço Aberta</a></li>  
              <li role="presentation"><a role="menuitem" tabindex="-1" href="#" id="button1">Ordem de Serviço Fechada</a></li>  
              </ul>
            </li>
            
            <li>
              <a href="#" id="button1">Relatório</a>
            </li>


              <li>
               <button type="button" class="top btn btn-danger">Sair</button>
              </li>




         



            </ul>

          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </nav><!--End menu principal -->

</div>

<!--
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
-->

 <main id="mainContent">
                              <object type='text/html' data='home.php' width='1170' height='1000'></object>
                </main>  

      </div><!--end row-->

   </div><!--end conteiner




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/butom.js"></script>
  </body>
</html>