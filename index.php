<?php
include("conexion.php");

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        
        <link rel="stylesheet" href="https://bootswatch.com/4/yeti/bootstrap.min.css">
    </head>
    <body>
        <nav class="navbar navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand">Inicie Sesion</a>
      </div>
    </nav>
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4">
                                    
                    
                    <div class="card card-body">
                        <form action="Ver.php" method="POST">                            
                        <input type="submit" class="btn btn-block btn-info" name="cliente" value="Cliente">                        
                        </form>
                        <form action="Datos.php" method="POST">   
                        <input type="submit" class="btn btn-block btn-Primary" name="empleado" value="Empleado">
                        </form>
                    </div>
                    
                    
                </div>
                
            </div>
            
        </div>        
        
    
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
 </body>
</html>
</html>
