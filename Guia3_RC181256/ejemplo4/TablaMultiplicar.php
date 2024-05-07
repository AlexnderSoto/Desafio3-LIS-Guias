<!DOCTYPE html>
<html lang="es">

<head>
    <title>Tabla de multiplicar</title>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="css/fonts.css" />
    <link rel="stylesheet" href="css/factorial.css" />
    <script src="js/modernizr.custom.lis.js"></script>
    <script src="js/filterTextField.js"></script>
</head>

<body>
    <header>
        <h1>Tabla de Multiplicar de un número</h1>
    </header>
    <section>
        <article>
            <div class="contenedor">
                <?php
                if (isset($_POST['enviar'])):
                    $cont = is_numeric($_POST['factorial']) ? $_POST['factorial'] : null;
                    $msg = isset($cont) || $cont == null ? "<p>No ha ingresado ningún número</p>" : "";

                    echo "<div class=\"encabezado\">";
                    if ($msg == ""):
                        echo "No ha ingresado un número entero.";
                        echo "<a href=\"" . $_SERVER['PHP_SELF'] . "\">Volver a intentarlo</a>";
                        exit(0);
                    endif;
                    if (!is_numeric($cont)):
                        echo "No ha ingresado un número entero.";
                        echo "<a href=\"" . $_SERVER['PHP_SELF'] . "\">Volver a intentarlo</a>";
                        exit(0);
                    endif;
                    


                    echo "<h3>Tabla de Multiplicar del $cont</h3>";
                    echo "</div>";
                    echo "<br />";

                    echo "<center><table class='table table-striped table-bordered border-primary' ></center>";
                    
                    $i = 1;
                    while ($i <= 10):

                        $res = $cont * $i;

                        echo "<tr><td>$cont x $i = </td><td>$res</td></tr>";

                        $i++;
                    endwhile;
                    echo "</table>";
                    echo "<br />";
                    echo "<p><a href=\"TablaMultiplicar.php\">Realizar de nuevo</a>";
                    


                else:
                    ?>
               
                
                <div class="encabezado">
                    Ingrese el número
                </div>
                <div class="formulario">
                    <form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
                        <input type="text" name="factorial" id="factorial" placeholder="Número (entero)" />
                        <br>
                        <span id="numbersOnly">Sólo acepta números y punto decimal</span>
                        <div class="divisor"></div>
                        <input type="submit" value="Enviar" name="enviar" id="enviar" />
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