<?php
include("conexion.php");

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $actualizar = "SELECT * FROM empleados WHERE id = $id";
    $query = mysqli_query($conexion, $actualizar);
    if (mysqli_num_rows($query) == 1){
       
        $row = mysqli_fetch_array($query);
        $nombre = $row['nombre'];
        $apellido = $row['apellido'];
        $cargo = $row['cargo'];
      
        
    }
    
}

if (isset($_POST['actualizar'])){
    $id = $_GET['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $cargo = $_POST['cargo'];
    $actualizar = "UPDATE empleados SET nombre = '$nombre', apellido = '$apellido', cargo = '$cargo' WHERE id = $id";
    $query = mysqli_query($conexion, $actualizar);
    
    if($query){          
    header("Location: Datos.php");
    
}else{
    header("Location: Datos.php");
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
                        <form action="Editar.php?id=<?php echo $_GET['id']; ?>" method="POST">
                            <div class="form-group">
                                <input type="text" name="nombre" value="<?php echo $nombre; ?>" class="form-control" placeholder="Actualizar Nombre">
                            </div>
                            <div class="form-group">
                                <input type="text" name="apellido" value="<?php echo $apellido; ?>" class="form-control" placeholder="Actualizar Apellido">
                            </div>
                            <div class="form-group">
                                <input type="text" name="cargo" value="<?php echo $cargo; ?>" class="form-control" placeholder="Actualizar Cargo">
                            </div>                          
                                                       
                            <button class="btn btn-info" name="actualizar">
                                Actualizar
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

