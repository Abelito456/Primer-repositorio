<?php
include("conexion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $actualizar = "SELECT * FROM empleados WHERE id = $id";
    $query = mysqli_query($conexion, $actualizar);
    if (mysqli_num_rows($query) == 1){
       
        $row = mysqli_fetch_array($query);
        $fecha = $row['fecha'];
        $tipo = $row['tipo'];
        $caso = $row['caso'];
      
        
    }
    
}

if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $fecha = $_POST['fecha'];
    $tipo = $_POST['tipo'];
    $caso = $_POST['caso'];
    $actualizar = "UPDATE empleados SET fecha = '$fecha', tipo = '$tipo', caso = '$caso' WHERE id = $id";
    $query = mysqli_query($conexion, $actualizar);
    
    if($query){          
    header("Location: Ver.php");
    
}else{
    header("Location: Ver.php");
    } 
}

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
        <a class="navbar-brand">DATOS</a>
      </div>
    </nav>
        
        <div class="container p-4">
            <div class="row">
                <div class="col-md-4 mx-auto">
                    <div class="card card-body">
                        <form action="Fecha.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="fecha" value="<?php echo $fecha; ?>" class="form-control" placeholder="Fecha (AAAA-MM-DD)">
                            </div>
                            <div class="form-group">
                                <input type="text" name="tipo" value="<?php echo $tipo; ?>" class="form-control" placeholder="Tipo de Servicio">
                            </div>
                            <div class="form-group">
                                <input type="text" name="caso" value="<?php echo $caso; ?>" class="form-control" placeholder="Caso">
                            </div>                          
                                                       
                            <button class="btn btn-info" name="actualizar">
                                Solicitar
                            </button>
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