<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>editar Marcas</title>
    
</head>
<style>
         body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 0;
        }

        form {
            width: 50%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button[type="submit"] {
            background-color: #4F6F52;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        button[type="submit"]:hover {
            background-color: #1A4D2E;
        }
</style>
<body>
    
    <?php
    include_once 'conectar.php';
    $id = $_POST['id'];

    $sql = "SELECT * FROM marca where id=$id;";

    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);
 
    if ($resultCheck > 0) {
        $row = mysqli_fetch_assoc($result);
        $nombre = $row['nombre'];
        $pais_origen = $row['pais_origen'];
        $descripcion = $row['descripcion'];
    }
    ?>


    <!-- Para actualizar las marcas -->
    <form action="actualizar.php" method="post">
        <input type="text" name="id" value="<?php echo $id ?>">
        <input type="text" name="nombre" value="<?php echo $nombre ?>">
        <input type="text" name="pais_origen" value="<?php echo $pais_origen ?>">
        <input type="text" name="descripcion" value="<?php echo $descripcion ?>">
        <button type="submit" name="update">Editar</button>
    </form>
</body>

</html>