<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="http://localhost/proyectoMVC/resources/Css/Delete.css">
    <title>Delete</title>
</head>
<body>
    <div class="container">
        <div class="tabs">
            <h3 class="active">Eliminar un zapato</h3>
            <h3>Eliminar un modelo</h3>
            <h3>Eliminar una marca</h3>
        </div>
    
        <div class="tab-content">
            <div class="active">         
                <table class="table1">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MODELO</th>
                            <th>ESTILO</th>
                            <th>COLOR</th>
                            <th>MARCA</th>
                            <th>TALLA</th>
                            <th>PRECIO</th>
                            <th>STOCK</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php
                            foreach($data["zapatos"] as $data){
                                echo "<tr>";
                                    echo "<td>".$data["id"]."</td>";
                                    echo "<td>".$data["model"]."</td>";
                                    echo "<td>".$data["style"]."</td>";
                                    echo "<td>".$data["color"]."</td>";
                                    echo "<td>".$data["marca"]."</td>";
                                    echo "<td>".$data["talla"]."</td>";
                                    echo "<td>".$data["prec"]."</td>";
                                    echo "<td>".$data["inv"]."</td>";
                                    echo "<td><a href='index.php?c=Zapato&a=delete&id=".$data["id"]."'>Eliminar</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>
                </table>
            </div>
            <div>           
                <table class="table2">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>MODELO</th>
                            <th>COLOR</th>
                            <th>MARCA</th>
                            <th>ELIMINAR</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach($data["zapatos"] as $data){
                                echo "<tr>";
                                    echo "<td>".$data["id"]."</td>";
                                    echo "<td>".$data["model"]."</td>";
                                    echo "<td>".$data["color"]."</td>";
                                    echo "<td>".$data["marca"]."</td>";
                                    echo "<td><a href='index.php?c=Modelo&a=delete&id=".$data["id"]."'>Eliminar</a></td>";
                                echo "</tr>";
                            }
                        ?>
                    </tbody>  
                </div>
            <div>
                <h4>Eliminar una marca</h4>
                <p>aqui estara la tabla marca</p>
            </div>
        </div>
    </div>
    <script src="http://localhost/proyectoMVC/resources/Js/Delete.js"></script>    
</body>
</html>