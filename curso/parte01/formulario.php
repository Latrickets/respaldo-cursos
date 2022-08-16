<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos por GET y POST</title>
</head>
<body>
    <hgroup>
        <h1>Formulario por GET</h1>
    </hgroup>
    <form name="envia-get_frm" action="envia-datos.php" method="GET" enctype="application/x-www-form-urlencoded">
        <label for="nombre_txt">
            Ingresa tu nombre: 
        </label>
        <input type="text" name="nombre_txt">
        <br><br>
        <label for="password_txt">
            Ingresa tu password: 
        </label>
        <input type="password" name="password_txt">
        <br><br>
        <input type="submit" name="enviar_btn" value="Envia-GET">
    </form>

    <form name="envia-post_frm" action="envia-datos.php" method="post" enctype="application/x-www-form-urlencoded">
        <label for="nombre_txt">
            Ingresa tu nombre: 
        </label>
        <input type="text" name="nombre_txt">
        <br><br>
        <label for="password_txt">
            Ingresa tu password: 
        </label>
        <input type="password" name="password_txt">
        <br><br>
        <input type="submit" name="enviar_btn" value="Envia-POST">
    </form>
</body>
</html>