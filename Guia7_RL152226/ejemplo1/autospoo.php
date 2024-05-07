<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximumscale=1">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Venta de autos</title>
    <!--[if lt IE 9]>
 <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
 <![endif]-->
</head>

<body>
    <div class="container">
        <header style="margin-bottom: 5%;">
            <h1>Autos disponibles</h1>
            <form>
                <select id="selectMarca" name="marca">
                    <option value="">Seleccione una marca</option>
                    <option value="Peugeot">Peugeot</option>
                    <option value="Renault">Renault</option>
                    <option value="BMW">BMW</option>
                    <option value="Toyota">Toyota</option>
                </select>
            </form>
        </header>

        <div class="row">
            <?php
            //Incluyendo el archivo de clase
            Spl_autoload_register(function ($classname) {
                //function __autoload($classname) {
                include_once("class/" . $classname . ".class.php");
            });
            //Creando los objetos para cada tipo de auto. Notar que se están
            //asignando a elementos de una matriz que tendrá por nombre $movil
            $movil[0] = new auto("Peugeot", "307", "Gris", "img/peugeot.jpg");
            $movil[1] = new auto("Renault", "Clio", "Rojo", "img/renaultclio.jpg");
            $movil[2] = new auto("BMW", "X3", "Negro", "img/bmwserie6.jpg");
            $movil[3] = new auto("Toyota", "Avalon", "Blanco", "img/toyota.jpg");
            //Esta llamada mostrará los valores por defecto en los argumentos
            //del método constructor.
            $movil[4] = new auto();
            //Mostrando la tabla con los autos disponibles
            foreach ($movil as $auto) {
            
                echo "<div class='auto col-4'>";
                $auto->mostrar();
                echo "</div>";
               
            }
            ?>
        </div>
    </div>

    <script>
        // Espera hasta que el DOM esté completamente cargado
        document.addEventListener('DOMContentLoaded', function() {
            // Función para mostrar los autos correspondientes a la marca seleccionada
            function mostrarAutosPorMarca() {
                var marcaSeleccionada = document.getElementById('selectMarca').value;
                // Obtener todos los elementos con la clase 'col-4' dentro del contenedor de autos
                var autos = document.querySelectorAll('.auto');

                // Ocultar todos los autos
                autos.forEach(function(auto) {
                    auto.style.display = 'none';
                });

                // Mostrar solo los autos correspondientes a la marca seleccionada
                autos.forEach(function(auto) {
                    if (auto.innerText.includes(marcaSeleccionada)) {
                        auto.style.display = 'block';
                    }
                });
            }

            // Agregar un evento de cambio al select para llamar a la función mostrarAutosPorMarca
            document.getElementById('selectMarca').addEventListener('change', mostrarAutosPorMarca);
        });
    </script>

</body>


</html>