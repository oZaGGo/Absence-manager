<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ADMIN</title>
	<link rel="stylesheet" href="CSS/style3.css">
</head>
<body>
    <?php
        echo "<div class='infoboxa'>
            ERASE DATA OF Iván
            <form method='get'>
                <input class='button' type='submit' name='ivanDelete' value='ENTER'>
            </form>

        </div>";

        echo "<div class='infoboxa'>
            ERASE DATA OF Aaron
            <form method='get'>
                <input class='button' type='submit' name='aaronDelete' value='ENTER'>
            </form>

        </div>";
            #Variables de visualización
            $ivan1=file_get_contents('ivan/ASOi.txt');
            $ivan2=file_get_contents('ivan/EIEi.txt');
            $ivan3=file_get_contents('ivan/IAWi.txt');
            $ivan4=file_get_contents('ivan/SXBDi.txt');
            $ivan5=file_get_contents('ivan/SRi.txt');
            $ivan6=file_get_contents('ivan/SAi.txt');
        echo "<div class='infoboxb'>
            Info faltas Iván:
            <p>ASO:$ivan1</p>
            <p>EIE:$ivan2</p>
            <p>IAW:$ivan3</p>
            <p>SXBD:$ivan4</p>
            <p>SR:$ivan5</p>
            <p>SA:$ivan6</p>

        </div>";

        #Variables de visualización
        $aaron1 = file_get_contents('aaron/ASOi.txt');
        $aaron2 = file_get_contents('aaron/EIEi.txt');
        $aaron3 = file_get_contents('aaron/IAWi.txt');
        $aaron4 = file_get_contents('aaron/SXBDi.txt');
        $aaron5 = file_get_contents('aaron/SRi.txt');
        $aaron6 = file_get_contents('aaron/SAi.txt');

        echo "<div class='infoboxb'>
            Info faltas Aaron:
            <p>ASO:$aaron1</p>
            <p>EIE:$aaron2</p>
            <p>IAW:$aaron3</p>
            <p>SXBD:$aaron4</p>
            <p>SR:$aaron5</p>
            <p>SA:$aaron6</p>
        </div>";


        if (isset($_GET['ivanDelete'])) {
            file_put_contents('ivan/ASOi.txt', 0);
            file_put_contents('ivan/EIEi.txt', 0);
            file_put_contents('ivan/IAWi.txt', 0);
            file_put_contents('ivan/SXBDi.txt', 0);
            file_put_contents('ivan/SRi.txt', 0);
            file_put_contents('ivan/SAi.txt', 0);

            #Redirecciona al tablero
             header("Location: ivan.php");
        }

        if (isset($_GET['aaronDelete'])) {
            file_put_contents('aaron/ASOi.txt', 0);
            file_put_contents('aaron/EIEi.txt', 0);
            file_put_contents('aaron/IAWi.txt', 0);
            file_put_contents('aaron/SXBDi.txt', 0);
            file_put_contents('aaron/SRi.txt', 0);
            file_put_contents('aaron/SAi.txt', 0);

            #Redirecciona al tablero
             header("Location: aaron.php");
        }
    ?>
</body>