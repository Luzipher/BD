<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("content-type: text/html; charset=UTF-8");

$con = new SQLite3("base.db") or die("problemas para conectar");

$cs = $con -> query("SELECT * FROM nombresBlackDragons");




?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Credenciales</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto my-5">
                <h1 class="bg-primary text-white p-3 rounded text-center">Lista</h1>
                <table class="table">
                    <thead class="bg-primary text-white">
                        <tr>
                            <th>
                                Nombre
                            </th>
                            <th>
                                Apellido Paterno
                            </th>
                            <th>
                                Apellido Materno
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        while ($resul = $cs -> fetchArray()){
                            $nombre = $resul['nombre'];
                            echo '
                            <tr>
                            <td>
                                '.$nombre.'
                            </td>
                            <td>
                                //
                            </td>
                            <td>
                                //
                            </td>
                             </tr>
                            
                            ';
                           }
                           $con -> close();
                        ?>
                    </tbody>
                </table>
            </div>
        </div>

    </div>
    
</body>
</html>