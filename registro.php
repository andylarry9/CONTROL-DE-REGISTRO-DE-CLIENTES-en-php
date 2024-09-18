<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <title>Registro</title>
    <link href="estilo.css" rel="stylesheet" type="text/css"/>
</head>
<div class="container">
<body>
    <header>
        <?php require 'encabezado.php' ?>
        <h2 id="centrado">REGISTRO DEL NUEVO CLIENTE</h2>
    </header>
    <section>
        <form name="frmRegistro" method="post">
            <table border="1" width="550" cellspacing="5" cellpadding="0">
                <tr>
                    <td>No. REGISTRO</td>
                    <td>
                        <?php
                        error_reporting(0);
                        require 'generarCodigo.php';
                        $clientes = 'clientes.txt';
                        $numero = contador($clientes);
                        echo $numero;
                        ?>
                    </td>
                </tr>
                <tr>
                    <td>CLIENTE</td>
                    <td>
                        <input type="text" name="txtCliente" size="60">
                    </td>
                </tr>
                <tr>
                    <td>DIRECCION</td>
                    <td>
                        <input type="text" name="txtDireccion" size="60">
                    </td>
                </tr>
                <tr>
                    <td>TELEFONO</td>
                    <td>
                        <input type="text" name="txtFono" size="20">
                    </td>
                </tr>
                <tr>
                    <td>FECHA NAC.</td>
                    <td>
                        <input type="text" name="txtFecha" size="20">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input type="submit" value="REGISTRAR CLIENTE" name="btnRegistrar">
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <?php
                        if (isset($_POST["btnRegistrar"])) {
                            include('captura.php');
                            include('grabar.php');
                            registra($numero, getCliente(), getDireccion(), getTelefono(), getFecha());
                            header('location:index.php');
                        }
                        ?>
                    </td>
                </tr>
            </table>
        </form>
    </section>
    <footer>
        <?php require 'pie.php' ?>
    </footer>
</body>
</div>
</html>
