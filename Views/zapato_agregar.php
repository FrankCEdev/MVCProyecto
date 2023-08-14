<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>HOME</title>
        <link rel="stylesheet" type="text/css" href="Css/Welcome.css">
    </head>
    <body>
        <h1>Agregar registro al inventario</h1>
        <form id="nuevo" name="nuevo" method="POST" action="index.php?c=inventario&a=guardar" autocomplete="off">

        Id Inventario:<br>
        <input type="text" id="IDZAPATO" name="IDZAPATO"> <br>
        Id Modelo:<br>
        <input type="text" id="IDMODELO" name="IDMODELO"> <br>
        Talla:<br>
        <input type="text" id="ESTILOZAPATO" name="ESTILOZAPATO"> <br>
        Stock:<br>
        <input type="text" id="PRECIOZAPATO" name="PRECIOZAPATO"> <br><br>

        <button type="submit" id="guardar" name="guardar">GUARDAR</button><br>

        </form>
        
    </body>
</html>
