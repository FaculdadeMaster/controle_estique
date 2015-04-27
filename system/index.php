<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Login System</title>

    <!-- Bootstrap -->
    <link href="view/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="view/bootstrap/css/style_own.css" rel="stylesheet">


  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
          <div class="col-md-6 col-md-offset-3">
              <div class="panel panel-primary top">
                 <div class="panel-heading text_center">Login</div>
                  <div class="panel-body">
                    <form action="" method="post">
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email usuário</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter usuário">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Senha</label>
                          <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Senha">
                        </div>
                                     
                        <button type="submit" class="btn btn-default">Enviar</button>
                      </form>
                  </div>
              </div>
          </div>
      </div>

      <div class="row">
        <div class="col-md-6 col-md-offset-3">
         <p class="text_center footer_own">Copyright <span class="glyphicon glyphicon glyphicon-copyright-mark" aria-hidden="true"></span> 2012 - <?php echo date('Y'); ?> Ciências da Conputação - Estácio/Ceut </p>
        </div>

      </div>

    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="view/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>