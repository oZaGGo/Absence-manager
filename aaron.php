<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Absence manager - Aaron Díaz Miragaya</title>
	<link rel="stylesheet" href="CSS/style2.css">
</head>
<body>
    
    <?php
        include 'dataaron.php';
        #---------------------Variables------------------------------
        #horas totales de cada módulo
        $ASO=17;
        $EIE=5;
        $IAW=14;
        $SXBD=8;
        $SR=16;
        $SA=12;

        #Recuperamos la info de los archivos de guardado
        $fASO=file_get_contents('aaron/ASOi.txt');
        $fEIE=file_get_contents('aaron/EIEi.txt');
        $fIAW=file_get_contents('aaron/IAWi.txt');
        $fSXBD=file_get_contents('aaron/SXBDi.txt');
        $fSR=file_get_contents('aaron/SRi.txt');
        $fSA=file_get_contents('aaron/SAi.txt');


        #Porcentaje de faltas cubiertas
        $pASO=$fASO*100/$ASO;
        $pASO=number_format($pASO, 1);
        $pEIE=$fEIE*100/$EIE;
        $pEIE=number_format($pEIE, 1);
        $pIAW=$fIAW*100/$IAW;
        $pIAW=number_format($pIAW, 1);
        $pSXBD=$fSXBD*100/$SXBD;
        $pSXBD=number_format($pSXBD, 1);
        $pSR=$fSR*100/$SR;
        $pSR=number_format($pSR, 1);
        $pSA=$fSA*100/$SA;
        $pSA=number_format($pSA, 1);

        
        #Le cambiamos el color a los porcentaje segun e valor
        if ($pASO < 20) {
            $colorASO = "blue";
        } elseif ($pASO >= 20 && $pASO <= 50) {
            $colorASO = "yellow";
        } elseif ($pASO > 50 && $pASO <= 60) {
            $colorASO = "orange";
        } else {
            $colorASO = "red";
        }

        if ($pEIE < 20) {
            $colorEIE = "blue";
        } elseif ($pEIE >= 20 && $pEIE <= 50) {
            $colorEIE = "yellow";
        } elseif ($pEIE > 50 && $pEIE <= 60) {
            $colorEIE = "orange";
        } else {
            $colorEIE = "red";
        }

        if ($pIAW < 20) {
            $colorIAW = "blue";
        } elseif ($pIAW >= 20 && $pIAW <= 50) {
            $colorIAW = "yellow";
        } elseif ($pIAW > 50 && $pIAW <= 60) {
            $colorIAW = "orange";
        } else {
            $colorIAW = "red";
        }

        if ($pSXBD < 20) {
            $colorSXBD = "blue";
        } elseif ($pSXBD >= 20 && $pSXBD <= 50) {
            $colorSXBD = "yellow";
        } elseif ($pSXBD > 50 && $pSXBD <= 60) {
            $colorEIE = "orange";
        } else {
            $colorSXBD = "red";
        }

        if ($pSR < 20) {
            $colorSR = "blue";
        } elseif ($pSR >= 20 && $pSR <= 50) {
            $colorSR = "yellow";
        } elseif ($pSR > 50 && $pSR <= 60) {
            $colorSR = "orange";
        } else {
            $colorSR = "red";
        }

        if ($pSA < 20) {
            $colorSA = "blue";
        } elseif ($pSA >= 20 && $pSA <= 50) {
            $colorSA = "yellow";
        } elseif ($pSA > 50 && $pSA <= 60) {
            $colorSA = "orange";
        } else {
            $colorSA = "red";
        }

        echo "<style>
        
        .ASO{
            color:$colorASO;
        }

        .EIE{
            color:$colorEIE;
        }

        .IAW{
            color:$colorIAW;
        }

        .SXBD{
            color:$colorSXBD;
        }

        .SR{
            color:$colorSR;
        }

        .SA{
            color:$colorSA;
        }
        
        
        
        
        
        </style>";
        
        #Visualización del contenido

        echo "<div class='infobox'>
            ASO💻
            <p class='percentaje ASO'>$pASO%</p>
            <form method='get'>
                <input class='button' type='submit' name='ASO' value='NEW'>
            </form>

        </div>";

        

        echo "<div class='infobox'>
            IAW🌐
            <p class='percentaje IAW'>$pIAW%</p>
            <form method='get'>
                <input class='button' type='submit' name='IAW' value='NEW'>
            </form>

        </div>";

        echo "<div class='infobox'>
            EIE🧑‍💼
            <p class='percentaje EIE'>$pEIE%</p>
            <form method='get'>
                <input class='button' type='submit' name='EIE' value='NEW'>
            </form>

        </div>";

        echo "<div class='infobox'>
            SXBD🧊
            <p class='percentaje SXBD'>$pSXBD%</p>
            <form method='get'>
                <input class='button' type='submit' name='SXBD' value='NEW'>
            </form>

        </div>";

        echo "<div class='infobox'>
            SR🕸️
            <p class='percentaje SR'>$pSR%</p>
            <form method='get'>
                <input class='button' type='submit' name='SR' value='NEW'>
            </form>

        </div>";

        echo "<div class='infobox'>
            SA🔒
            <p class='percentaje SA'>$pSA%</p>
            <form method='get'>
                <input class='button' type='submit' name='SA' value='NEW'>
            </form>

        </div>";
        
        #Compueba que se pulso el boton de ASO
           if (isset($_GET['ASO'])) {
               $fASO++;
               file_put_contents('aaron/ASOi.txt', $fASO);
               #recarga pagina
                header("Location: aaron.php");
            }
   
           #Compueba que se pulso el boton de ASO
           if (isset($_GET['EIE'])) {
               $fEIE++;
               file_put_contents('aaron/EIEi.txt', $fEIE);
               #recarga pagina
                header("Location: aaron.php");
            }
   
           #Compueba que se pulso el boton de ASO
           if (isset($_GET['IAW'])) {
               $fIAW++;
               file_put_contents('aaron/IAWi.txt', $fIAW);
               #recarga pagina
                header("Location: aaron.php");
            }
   
           #Compueba que se pulso el boton de ASO
           if (isset($_GET['SXBD'])) {
               $fSXBD++;
               file_put_contents('aaron/SXBDi.txt', $fSXBD);
               #recarga pagina
                header("Location: aaron.php");
            }
   
           #Compueba que se pulso el boton de ASO
           if (isset($_GET['SR'])) {
               $fSR++;
               file_put_contents('aaron/SRi.txt', $fSR);
               #recarga pagina
                header("Location: aaron.php");
            }
   
           #Compueba que se pulso el boton de ASO
           if (isset($_GET['SA'])) {
               $fSA++;
               file_put_contents('aaron/SAi.txt', $fSA);
               #recarga pagina
                header("Location: aaron.php");
            }


    ?>
</body>