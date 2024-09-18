<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="estilo.css" rel="stylesheet" type="text/css"/>
    <title>LISTADO DE CLIENTES</title>
</head>
<div class="container">
<body>
    <header>
        <?php require 'encabezado.php'; ?>
        <h2 id="centrado">LISTADO DE CLIENTES</h2>
    </header>
    <section>
        <table border="1" width="550" cellspacing="0" cellpadding="0">
            <tr>
                <td>CODIGO</td>
                <td>NOMBRE DEL CLIENTE</td>
                <td>DIRECCION</td>
                <td>TELEFONO</td>
                <td>FECHA DE NACIMIENTO</td>
            </tr>
            <?php
            $clientes = fopen('clientes.txt', 'r');
            if (filesize('clientes.txt') == 0) {
                echo '<tr><td colspan="5" id="centrado"> No hay registros..</td></tr>';
            } else {
                $leer = fread($clientes, filesize('clientes.txt'));
                $lineas = explode(PHP_EOL, $leer);
                foreach ($lineas as $linea) {
                    $palabras = explode('|', $linea);
                    echo "<tr>";
                    foreach ($palabras as $palabra) {
                        echo "<td>$palabra</td>";
                    }
                    echo "</tr>";
                }
                fclose($clientes);
            }
            ?>
        </table>
    </section>
    <footer>
        <?php require 'pie.php'; ?>
    </footer>
</body>
</div>
</html>
