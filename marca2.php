<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marcas</title>
    <link rel="stylesheet" href="estilos.css">
</head>

<body>
    <div class="container">
        <h1>Registro de Marcas</h1>
        <form action="insertar.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="pais_origen">País de origen</label>
                <select name="pais_origen" required>
                    <option value="">Seleccione un país</option>
                    <option value="Republica Dominicana">Republica Dominicana</option>
                    <option value="Estados Unidos">Estados Unidos</option>
                    <option value="Mexico">Mexico</option>
                    <option value="Colombia">Colombia</option>
                    <option value="Pamana">Pamana</option>
                </select>
            </div>

            <div class="form-group">
                <label for="descripcion">Descripcion</label>
                <textarea id="texto" name="descripcion" rows="5" required></textarea>
            </div>

            <div class="form-group submit-btn">
                <button type="submit">Subir</button>
            </div>

        </form>

        <!-- editar -->
        </form>

        <!-- editar -->
        <form action="update.php" method="post">
            <div class="form-group">
                <label for="buscar">Editar:</label>
                <input type="text" name="id" placeholder="id">
            </div>
            <div class="form-group submit-btn">
                <button type="submit">editar</button>
            </div>
        </form>
        <!-- fin -->

        <!-- tabla para visualizar los datos -->
        <table border="2">
            <tr>
                <th>id</th>
                <th>Nombre</th>
                <th>Pais de origen</th>
                <th>Descripción</th>
                <th></th>
            </tr>
            <?php
            include_once 'conectar.php';
            $query = "SELECT * FROM marca";
            $data = mysqli_query($mysqli, $query);
            $total = mysqli_num_rows($data);

            if ($total != 0) {
                while ($row = mysqli_fetch_assoc($data)) {
                    echo "<tr> <td>" . $row['id'] . "</td> <td>" . $row['nombre'] .
                        "</td> <td>" . $row['pais_origen'] .  "</td> <td>" . $row['descripcion'] .
                        "</td> <td> <a href='delete.php?rn=$row[id]'>Eliminar</a></td></tr>";
                }
            }
            ?>
        </table>

        <!-- fin -->
    </div>

</body>

</html>