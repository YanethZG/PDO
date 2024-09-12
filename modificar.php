<?php

include_once("./conf/conf.php");
    $objeto =  new Conexion();
    $conexion = $objeto->Conectar();

    $id = $_GET['id'];
    $consulta = "SELECT * FROM cliente WHERE id=" .$id;
    $preparacion = $conexion->prepare($consulta);
    $preparacion->execute();
    $cliente = $preparacion->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="procesos.php" method="POST">
   
        <input type="text" value="2" name="bandera" hidden>
        <input type="text" value="<?php echo $cliente['id']; ?>" name="id" hidden>
        <label for="">Nombre:</label> <br>
        <input type="text" value="<?php echo $cliente['nombre'];?>" name="nombre" require><br><br>

        <label for="">Tel</label> <br>
        <input type="text"  value="<?php echo $cliente['tel'];?>"  name="tel" require><br><br>

        <label for="">DUI</label> <br>
        <input type="text"  value="<?php echo $cliente['dui'];?>"  name="dui" require><br><br>

        <label for="">CORREO</label> <br>
        <input type="text"  value="<?php echo $cliente['correo'];?>" name="correo" require><br><br>

        <label for="">DIRECCION</label> <br>
        <input type="text"  value="<?php echo $cliente['direccion'];?>" name="direccion" require><br><br>

        <input type="submit" value="Guardar">

        
</form>
</body>
</html>