<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Absence manager</title>
	<link rel="stylesheet" href="CSS/style.css">
</head>
<body>
    <?php
        echo "<div class='infobox'>
            IVÁN😈
            <form method='get'>
                <input class='button' type='submit' name='ivan' value='ENTER'>
            </form>

        </div>";

        echo "<div class='infobox'>
            AARON🚬
            <form method='get'>
                <input class='button' type='submit' name='aaron' value='ENTER'>
            </form>

        </div>";

        echo "<div class='infoboxa'>
            ADMIN🕵️‍♂️
            <form method='get'>
                <input class='button' type='submit' name='admin' value='ENTER'>
            </form>

        </div>";

        if (isset($_GET['ivan'])) {
            #Redirecciona al tablero
             header("Location: ivan.php");
        }

        if (isset($_GET['aaron'])) {
            #Redirecciona al tablero
             header("Location: aaron.php");
        }

        if (isset($_GET['admin'])) {
            #Redirecciona al tablero
             header("Location: admin.php");
        }
    ?>
</body>