<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/factorial.css" />
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/filterTextField.js"></script>
    <title>Potencia</title>
</head>
<body>
    <header>
        <h1>Obtener Potencia de un número</h1>
    </header>
    <section>
        <article>
            <div class="contenedor">
                <?php
                if (isset($_POST['enviar'])) :
                    $cont = is_numeric($_POST['numero']) ? $_POST['numero'] : null;
                    $msg = isset($cont) || $cont== null ? "<p>No ha ingresado ningún número </p>" : "";

                    $pot = is_numeric($_POST['potencia']) ? $_POST['potencia'] : null;
                    $msg2 = isset($pot) || $pot== null ? "<p>No ha ingresado ningún número </p>" : "";

                    $potoriginal = $pot;
                    $tot = 1;
                    echo "<div class=\"encabezado\">";
                    if ($msg == "" || $msg2 == "") :
                        echo "Algun numero es incorrecto.";
                        echo "<a href=\"". $_SERVER['PHP_SELF'] . "\">Volver a intentarlo</a>";
                        exit(0);
                    endif;

                    if ($cont == 0) :
                        $factorial = 0;
                        echo "La potencia de 0 es = " . $factorial . "<br />";
                        exit(0);
                    endif;

                    while ($pot > 0) {
                        
                        $tot*=$cont;
                        $pot--;
                    }

                    echo "<p style='font-size: 18px; color: black;'> El numero ". $cont . " elevado a la potencia ". $potoriginal . " es : " . $tot . "</p>";
                    echo "<p style='font-size: 20px; margin-top:5%;'><a href=\"potencia.php\" style='color: blue;'>Calcular la potencia de otro numero</a>";
                    echo "</div>";
                else:
                ?>
                <div class="encabezado">
                    Calculo de Potencia
                </div>
                <div class="formulario">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                <input type="text" name="numero" id="numero" placeholder="Número (entero)" />
                <br>
                <span id="numbersOnly">Sólo acepta números y punto decimal</span>
                
                <input type="text" name="potencia" id="potencia" placeholder="Potencia (entero)" />
                <br>
                <span id="numbersOnly">Sólo acepta números y punto decimal</span>
                <div class="divisor"></div>
                <input type="submit" value="Enviar" name="enviar" id="enviar " />
            </form>
                </div>
            </div>
            <?php
            endif;
            ?>
        </article>
    </section>
</body>

</html>