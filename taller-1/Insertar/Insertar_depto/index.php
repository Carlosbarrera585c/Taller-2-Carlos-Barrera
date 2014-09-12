<!DOCTYPE html>
<html lang="es"><!--esto es para que el navegador lea la pagina y reconozca que es en español-->
    <head>

        <meta charset="UTF-8"><!--es para organizar o codificar los caracteres especiales de mi idioma en este caso español latinoamerica-->
        <meta name="description" content="practica de estilos"><!--es la descricion general o global de mi sitio web-->
        <meta name="keywords" content="html5, css3, javascript"><!--son las palabras claves que trabajo en mi sitio web-->

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
        <div align="center">INSERTAR EN TABLA DEPTO</div>
        <div align="center">
            <form action="insertar.php" name="IR" method="post">
                <table>
                    <tr>
                        <td>Inserte el Codigo del Departamento</td>
                        <td><label>
                                <input type="text" name="coddepto" />
                            </label></td>
                    </tr>
                    <tr>
                        <td>Inserte el Nombre del Departamento</td>
                        <td>
                            <input type="text" name="nomdepto" />
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="enviar" value="Insertar"></td>
                        <td><input type="reset" name="reset" value="Resetear" /></td>
                    </tr>

                    </body>
                    </html>
