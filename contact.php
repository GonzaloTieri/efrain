<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Efrain Construcciones</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/business-casual.css" rel="stylesheet">
    
    
        <style type="text/css">
	body {
		background: url("efrain Lisandro/Brick_wall_close-up_view.jpg") no-repeat center center fixed;
	}
	
	
	.navbar.navbar-default{
		background-color: #ffffff;
		border: none;
		opacity: 0.9;
	
	}

	.nav>li>a{
		padding:27px;
	}

	.nav.navbar-nav{
		/*float:right;*/
	}


	footer p{
            	padding:25px 0;
		color:#666;
	}
        .box {
            margin-bottom: 9%;
        }
	
	.brand{
		float: left;
		margin: 0;
		padding: 0;
		margin-top: -14px;
	}
        
        .item .active {
            width:800px;
            height: 600px;
        }       
	</style>
  </head>

  <body>


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Efrain Construcciones</h4>
      </div>
      <div class="modal-body">
        Su consulta ha sido enviada con exito, en breve le responderemos. Muchas gracias por hacernos llegar su
        inquietud
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <!--<button type="button" class="btn btn-primary">Save changes</button>-->
      </div>
    </div>
  </div>
</div>
<!-- Modal -->
      

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
            <div style="width:40%; float: left">
                <img class="img-responsive img-full" src="efrain Lisandro/logo-efra.png"   >  
            </div>
            
<!--          <a class="navbar-brand" href="index.html">EFRAIN Con</a>-->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
        </div>
		
		<div class="brand"> 
        
            <img src="efrain Lisandro/cuchara.png" height="73px" > 
            <img src="efrain Lisandro/efrain2.png"  >
		</div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
              <li><a href="index.php">Inicio</a></li>
              <li><a href="about.php">Quienes Somos</a></li>
              <li><a href="galery.php">Galeria</a></li>
              <li><a href="contact.php">Contacto</a></li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
<!--    
    <div class="brand">Business Casual</div>
    <div class="address-bar">The Plaza | 5483 Start Bootstrap Ave. | Beverly Hills, California 26892 | 555.519.2013</div>

    <nav class="navbar navbar-default" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.html">Business Casual</a>
        </div>

         Collect the nav links, forms, and other content for toggling 
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Home</a></li>
            <li><a href="about.html">About</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
          </ul>
        </div> /.navbar-collapse 
      </div> /.container 
    </nav>-->

    <div class="container">

      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Contacto <strong>Efrain Construcciones</strong></h2>
            <hr>
          </div>
          <div class="col-md-8">
            <!-- Embedded Google Map using an iframe - to select your location find it on Google maps and paste the link as the iframe src. If you want to use the Google Maps API instead then have at it! -->
            <!--<iframe width="100%" height="400px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed"></iframe>-->
            <form role="form" action="" method="POST">
                  <div class="row">
                    <div class="form-group col-lg-4">
                      <label>Nombre</label>
                      <input type="text" class="form-control" name="nombre">
                    </div>
                    <div class="form-group col-lg-4">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="input3">Telefono</label>
                      <input type="phone" class="form-control" name="telefono">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                      <label>Mensaje</label>
                      <textarea class="form-control" rows="6" name="body"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="hidden" name="save" value="contact">
                      <button type="submit" class="btn btn-default">Consultar</button>
                    </div>
                </div>
              </form>
          </div>
          <div class="col-md-4">
            <p>Telefono: <strong>(0341) 155-374109</strong></p>
            <p>Email: <strong>contacto@efrainconstrucciones.com</strong></p>
            <p>Direccion: <strong>Vieytes 1372<br>Funes <br>Santa Fe, Argentina</strong></p>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>

<!--      <div class="row">
        <div class="box">
          <div class="col-lg-12">
            <hr>
            <h2 class="intro-text text-center">Contact <strong>form</strong></h2>
            <hr>
            <p>This contact form is just the form elements, it is not a working form. You will have to make the form work by yourself, or take it out if you can't figure out how to make it work.</p>
                <form role="form">
                  <div class="row">
                    <div class="form-group col-lg-4">
                      <label>Name</label>
                      <input type="text" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                      <label>Email Address</label>
                      <input type="email" class="form-control">
                    </div>
                    <div class="form-group col-lg-4">
                      <label for="input3">Phone Number</label>
                      <input type="phone" class="form-control">
                    </div>
                    <div class="clearfix"></div>
                    <div class="form-group col-lg-12">
                      <label>Message</label>
                      <textarea class="form-control" rows="6"></textarea>
                    </div>
                    <div class="form-group col-lg-12">
                      <input type="hidden" name="save" value="contact">
                      <button type="submit" class="btn btn-default">Submit</button>
                    </div>
                </div>
              </form>
          </div>
        </div>
      </div>-->

    </div><!-- /.container -->
    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <p>Copyright &copy; Efrain Construcciones</p>
          </div>
        </div>
      </div>
    </footer>

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>
    
    <?php
    if ($_POST) {
//            print_r($_POST);
//            die('hoce el post');
$to      = 'contacto@efrainconstrucciones.com';
$subject = 'Consulta de ' . $_POST['nombre'];
$message = $_POST['body'];
$from = $_POST['nombre'] . 'Tel: ' . $_POST['telefono'];
$email = $_POST['email'];
$headers = 'From: ' .$email . "\r\n" .
    'Reply-To: '. $email . "\r\n" ;
    //'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message ."\r\n" . $from, $headers);
        ?>
        <script> $('#myModal').modal('show'); </script>
        <?php
    }
    ?>
  </body>
</html>
