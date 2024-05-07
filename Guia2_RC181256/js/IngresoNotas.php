<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width,user-escalable=no,initial-scale=1.0,maximum-scale=1.0,minimun-scale=1.0">
    <link rel="stylesheet" href="css/salario.css" />
    <link rel="stylesheet" href="css/links.css" />

    <script src="js/modernizr.custom.lis.js"></script>

    <title>Calcular Salario</title>

</head>

<body>
    <header id="inset">
        <h1>CUM del estudiante</h1>
    </header>
    <section>
        <article>
            <?php
            if (isset($_POST["enviar"])) {
                $estudiante = isset($_POST["estudiante"]) ? $_POST["estudiante"] : "";
                $nota1 = isset($_POST["nota1"]) ? $_POST["nota1"] : "0";
                $nota2 = isset($_POST["nota2"]) ? $_POST["nota2"] : "0";
                $nota3 = isset($_POST["nota3"]) ? $_POST["nota3"] : "0";
                $nota4 = isset($_POST["nota4"]) ? $_POST["nota4"] : "0";
                $nota5 = isset($_POST["nota5"]) ? $_POST["nota5"] : "0";
                $uv1 = isset($_POST["UV1"]) ? $_POST["UV1"] : "0";
                $uv2 = isset($_POST["UV2"]) ? $_POST["UV2"] : "0";
                $uv3 = isset($_POST["UV3"]) ? $_POST["UV3"] : "0";
                $uv4 = isset($_POST["UV4"]) ? $_POST["UV4"] : "0";
                $uv5 = isset($_POST["UV5"]) ? $_POST["UV5"] : "0";


                $cumFinal = (($nota1*$uv1)+($nota2*$uv2)+($nota3*$uv3)+($nota4*$uv4)+($nota5*$uv5))/($uv1+$uv2+$uv3+$uv4+$uv5);
                
                echo "<div>\n\n";
                echo "<table>\n";
                echo "\t<tr>\n\t\t<th colspan=\"2\">\n\t\t\t Resultado \n\t\t</th>\n\t</tr>\n";
                echo "\t<tr>\n\t\t<td>\n\t\t\t Estudiante: \n\t\t</td>\n\t\t<td class=\"detail\">\n\t\t\t", $estudiante, "\n\t\t</td>\n\t\t\t</tr>\n";
                echo "\t<tr>\n\t\t<th>\n\t\t\tEl CUM del estudiante es: \n\t\t</td>\n\t\t<th class=\"number\">\n\t\t\t", $cumFinal, "\n\t\t</th>\n\t\t\t</tr>\n";
                echo "</table>\n </div>\n";
            
            }
            ?>
            <a href="IngresoNotas.html" class="a-btn">
                <span class="a-btn-symbol">i</span>
                <span class="a-btn-text">Ingresar</span>
                <span class="a-btn-slide-text">otro calculo</span>
                <span class="a-btn-slide-icon"></span>
            </a>
        </article>
    </section>

</body>

</html>