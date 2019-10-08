<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Registro Usuario</title>
        <script src="./js/modernizr-custom.js"></script>
        <link rel="stylesheet" href="./css/normalize.css">
        <link rel="stylesheet" href="./css/font.css">
        <link rel="stylesheet" href="./css/header.css">
        <link rel="stylesheet" href="./css/style.css">
        <link rel="stylesheet" href="./css/registro.css">
    </head>
    <body>
        <?php include "./assets/header.php";?>
        <section id="registro">
            <header>
                    Registro Usuario
            </header>
            <article>
                <form class="registroUser" action="registroUser.php" method="post">
                <label for="Nombre"><strong>Nombre: </strong></label><input type="text" name="Nombre"><br></br>
                <label for="Apellidos"><strong>Apellidos </strong></label><input type="text" name="Apellidos"><br></br>
                <label for="Pais"><strong>País: </strong></label><input type="text" name="Pais"><br></br>
                <label for="Email"><strong>Email: </strong></label><input type="text" name="Email"><br></br>
                <label for="Password"><strong>Contraseña: </strong></label><input type="text" name="Password"><br></br>
                <label for="Password2"><strong>Repite la Contraseña: </strong></label><input type="text" name="Password"><br></br>
                <p id="condicionesP">
                    <input name="Condiciones" id="Condiciones" type="checkbox" required/>
                    Aceptas las <a href="condiciones.html">condiciones</a> de servicio.
                </p>
                <div>
                    <input type="submit" value="ENVIAR">
                </div>
                </form>
            </article>
        </section>
    </body>
</html>