<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
    </head>
    <body>
        <h1>INVENTARIO</h1>
        <a href="index.php?c=inventario&a=agregar" Aregar al inventario></a> <br>

            
        <table border="1px" Style="width:80%">
            <thead>
                <tr>
                    <th>ID ZAPATO</th>
                    <th>ID MODELO</th>
                    <th>ESTILO ZAPATO</th>
                    <th>PRECIO ZAPATO</th>
                </tr>
            </thead>

            <tbody>
                <?php
                    foreach($data["zapatos"] as $data){
                        echo "<tr>";
                            echo "<td>".$data["IDZAPATO"]."</td>";
                            echo "<td>".$data["IDMODELO"]."</td>";
                            echo "<td>".$data["ESTILOZAPATO"]."</td>";
                            echo "<td>".$data["PRECIOZAPATO"]."</td>";
                        echo "</tr>";
                    }
                ?>
            </tbody>

        </table>
    </body>
</html>
