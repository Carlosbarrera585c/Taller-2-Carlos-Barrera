<!DOCTYPE html>
<html lang="es"><!--esto es para que el navegador lea la pagina y reconozca que es en español-->
    <head>

        <meta charset="UTF-8"><!--es para organizar o codificar los caracteres especiales de mi idioma en este caso español latinoamerica-->
        <meta name="description" content="practica de estilos"><!--es la descricion general o global de mi sitio web-->
        <meta name="keywords" content="html5, css3, javascript"><!--son las palabras claves que trabajo en mi sitio web-->
    <a href="DataBaseClass.php"></a>
    <title>Insertar Registros</title>
    <style type="text/css">

        body {
            background-color: #00BFFF;
        }
        body,td,th {
            color: #0B3B17;
        }

    </style></head>

<body>
    <div align="center">INSERTAR EN TABLA APRENDIZ</div>
    <div align="center">
        <form action="insertar.php" name="IR" method="post">
            <table>
                <tr>
                    <td>Inserte El Numero de Identificacion</td>
                    <td><label>
                            <input type="text" name="id_apre" />
                        </label></td>
                </tr>


                <tr>
                    <td>Inserte el Nombre:</td>
                    <td>
                        <input type="text" name="nombre" />
                    </td>
                </tr>


                <tr>
                    <td>Inserte el Apellido</td>
                    <td>
                        <input type="text" name="apellido" />
                    </td>
                </tr>

                <tr>
                    <td>Describa la Ciudad</td>
                    <td>
                        <input type="text" name="ciudad" />
                    </td>
                </tr>

                <tr>
                    <td>Describa el Tipo de Identificacion</td>
                    <td>
                        <input type="text" name="tipo_id" />
                    </td>
                </tr>


                <tr>
                    <td>Escriba el RH</td>
                    <td>
                        <input type="text" name="rh" />
                    </td>
                </tr>

                <tr>
                    <td>Escriba el Genero</td>
                    <td>
                        <input type="text" name="genero" />
                    </td>
                </tr>

                <tr>
                    <td>Escriba la Edad</td>
                    <td>
                        <input type="text" name="edad" />
                    </td>
                </tr>


                <tr>
                    <td>Escriba el Telefono</td>
                    <td>
                        <input type="text" name="telefono" />
                    </td>
                </tr>



                <tr>
                    <td><input type="submit" name="enviar" value="Insertar"></td>
                    <td><input type="reset" name="reset" value="Resetear" /></td>
                </tr>

                </body>
                </html>
