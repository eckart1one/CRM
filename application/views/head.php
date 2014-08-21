<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRM</title>
  
  
    

    <!-- Bootstrap -->

<!--     <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.min.css"> 

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Static navbar -->
      <div class="navbar navbar-default" role="navigation">
        <div class="container">
        <div class="container-fluid">
          <div class="navbar-header">
            <!-- boton para mobiles contraido -->
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Project name (CRM)</a>
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
              <!-- usar como migas de pan -->
              <li class="active"><a href="#">Lead</a></li>
              <li><a href="#">Cuentas</a></li>
              <li><a href="#">Oportunidades</a></li>
              <li><a href="#">Seguimiento</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
              <!-- poner menu desplegable con todas las notificaciones con la clase Dropdowns -->
              <li><a href=""><span class="glyphicon glyphicon-phone-alt"></span></a></li>
              <li><a href="">usuario</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
      </div>
      </div>


    <div class="container">
      <ol class="breadcrumb">
        <li><a href="#">Inicio</a></li>
        <li><a href="#">Libros</a></li>
        <li class="active">Bootstrap 3</li>
      </ol>

      <!-- en esta parte se debera llama la vista centra que sera mostrada -->
      <?php $this->load->view('listado'); ?>
    </div> <!-- /container -->

  <div class="footer well">
    <div class="container">
      <div class="row">
             <div class="pull-left">company</div>
             <div class="pull-right">politicas</div>
      </div>
    </div>
  </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.min.js" ></script>
  </body>
</html>