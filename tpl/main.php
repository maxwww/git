<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="favicon.ico">

    <title>Арифметические операции</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    

    <!-- Custom styles for this template -->
    <link href="css/offcanvas.css" rel="stylesheet">

   
  </head>

  <body>
    <nav class="navbar navbar-fixed-top navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Арифметические операции</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="/">Home</a></li>           
          </ul>
        </div><!-- /.nav-collapse -->
      </div><!-- /.container -->
    </nav><!-- /.navbar -->

    <div class="container">

      <div class="row row-offcanvas row-offcanvas-right">

        <div class="col-xs-12 col-sm-9">
          <p class="pull-right visible-xs">
            <button type="button" class="btn btn-primary btn-xs" data-toggle="offcanvas">Toggle nav</button>
          </p>
          <div class="jumbotron">
            <h1>Арифметические операции</h1>
            <p>На этом сайте вы можете произвести самые базовые арифметические операции, такие как сложение, вычитание...</p>
          </div>
          
          
          <div class="row">
              <div class="col-xs-12 col-lg-12">
                  <?php if(isset($_SESSION['result']) && $_SESSION['result'] !== null): ?>
                    <div class="alert alert-info">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                        </button>                       
                      <?= $_SESSION['result']?>
                        <?php $_SESSION['result'] = null;?>
                    </div>                  
                  <?php endif;?>
              </div>
              
            <div class="col-xs-6 col-lg-4">
              <h2>Сложение</h2>
              <form method="POST" action="">
                    <div class="form-group">
                        <label for="additionN1">Первое число</label>
                        <input type="text" name="num1" class="form-control" id="additionN1" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="additionN2">Второе число</label>
                        <input type="text" name="num2" class="form-control" id="additionN2" placeholder="0">
                    </div>
                    <input name="addition" type="hidden" value="1"/>
                    <button type="submit" class="btn btn-default">Сложить</button>
                </form>
            </div><!--/.col-xs-6.col-lg-4-->
              
            <div class="col-xs-6 col-lg-4">
              <h2>Вычитание</h2>
              <form method="POST" action="">
                    <div class="form-group">
                        <label for="additionN1">Первое число</label>
                        <input type="text" name="num1" class="form-control" id="additionN1" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="additionN2">Второе число</label>
                        <input type="text" name="num2" class="form-control" id="additionN2" placeholder="0">
                    </div>
                    <input name="subtraction" type="hidden" value="1"/>
                    <button type="submit" class="btn btn-default">Сложить</button>
                </form>
            </div><!--/.col-xs-6.col-lg-4-->
            
            
            <div class="col-xs-6 col-lg-4">
              <h2>Степень</h2>
              <form method="POST" action="">
                    <div class="form-group">
                        <label for="additionN1">Первое число</label>
                        <input type="text" name="num1" class="form-control" id="additionN1" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="additionN2">Второе число</label>
                        <input type="text" name="num2" class="form-control" id="additionN2" placeholder="0">
                    </div>
                    <input name="exponentiation" type="hidden" value="1"/>
                    <button type="submit" class="btn btn-default">Возвести в степень</button>
                </form>
            </div><!--/.col-xs-6.col-lg-4-->


	    <div class="col-xs-6 col-lg-4">



              <h2>Умножение</h2>
              <form method="POST" action="">
                    <div class="form-group">
                        <label for="additionN1">Первое число</label>
                        <input type="text" name="num1" class="form-control" id="additionN1" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="additionN2">Второе число</label>
                        <input type="text" name="num2" class="form-control" id="additionN2" placeholder="0">
                    </div>
                    <input name="multiply" type="hidden" value="1"/>
                    <button type="submit" class="btn btn-default">Умножить</button>



              <h2>Деление</h2>
              <form method="POST" action="">
                    <div class="form-group">
                        <label for="additionN1">Делимое</label>
                        <input type="text" name="num1" class="form-control" id="additionN1" placeholder="0">
                    </div>
                    <div class="form-group">
                        <label for="additionN2">Делитель</label>
                        <input type="text" name="num2" class="form-control" id="additionN2" placeholder="0">
                    </div>
                    <input name="division" type="hidden" value="1"/>
                    <button type="submit" class="btn btn-default">Поделить</button>



                </form>
            </div><!--/.col-xs-6.col-lg-4-->

            
          
          </div><!--/row-->
        
        
        
        
        </div><!--/.col-xs-12.col-sm-9-->

        <div class="col-xs-6 col-sm-3 sidebar-offcanvas" id="sidebar">
          <div class="list-group">
            <a href="https://trello.com/b/Ot4spi6B/basic-functionality" class="list-group-item">Trello</a>
            <a href="#" class="list-group-item">Design</a>
          </div>
        </div><!--/.sidebar-offcanvas-->
      </div><!--/row-->

      <hr>

      <footer>
        <p>&copy; :)...</p>
      </footer>

    </div><!--/.container-->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
    <script src="js/bootstrap.min.js"></script>
    <script src="js/offcanvas.js"></script>
  </body>
</html>
