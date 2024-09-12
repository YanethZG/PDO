<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="registro.php">Nuevo Registro</a>
    <?php
    include_once("./conf/conf.php");
    $objeto =  new Conexion();
    $conexion = $objeto->Conectar();
    
    $consulta= "SELECT * FROM cliente";
    $preparacion = $conexion->prepare($consulta);
    $preparacion->execute();

    $clientes= $preparacion->fetchAll(PDO::FETCH_ASSOC);

    echo "<table border='1'>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>NOMBRE</th>";
    echo "<th>TELEFONO</th>";
    echo "<th>DUI</th>";
    echo "<th>CORREO</th>";
    echo "<th>DIRECCION</th>";
    echo "<th>OPCIONES</th>";
    echo "</tr>";

    foreach($clientes as $cliente){
        echo "<tr>";
        echo "<td>".$cliente['id']."</td>";
        echo "<td>".$cliente['nombre']."</td>";
        echo "<td>".$cliente['tel']."</td>";
        echo "<td>".$cliente['dui']."</td>";
        echo"<td>".$cliente['correo']."</td>";
        echo "<td>".$cliente['direccion']."</td>";
        echo "<td><a href='modificar.php?id=".$cliente['id']."'>Modificar</a> <a href='procesos.php?id=".$cliente['id']."'>Eliminar</a></td>";
        echo "</tr>";
       }

    ?>
</body>
</html>