<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    
    <link href="estilo.css" rel="stylesheet" type="text/css"/>
    <title>Registro Clientes</title>
</head>
<div class="container">
<body>
    <header>
        <?php require 'encabezado.php'; ?>
    </header>
    <section>
        <table border="1" width="550" cellspacing="5" cellpadding="0">
            <tr>
                <td>
                    <a href="registro.php">
                        <img src="https://cdn-icons-png.flaticon.com/512/2639/2639669.png" width="60" height="60" alt="">
                    </a>
                </td>
                <td>
                    <a href="registro.php">Registro de clientes</a>
                </td>
            </tr>
            <tr>
                <td>
                    <a href="listado.php">
                        <img src="https://cdn.icon-icons.com/icons2/931/PNG/512/users_group_customers_clients_icon-icons.com_72448.png" alt="" width="60" height="60">
                    </a>
                </td>
                <td><a href="listado.php">Listado de clientes</a></td>
            </tr>
            <tr>
                <td>
                    <a href="javascript:close()">
                        <img src="https://cdn-icons-png.flaticon.com/512/3094/3094700.png" alt="" width="60" height="60">
                    </a>
                </td>
                <td><a href="javascript:close()">Salir</a></td>
            </tr>
        </table>
	</section>
        <footer>
            <?php require 'pie.php'; ?>
        </footer>
    
</body>
</div>
</html>