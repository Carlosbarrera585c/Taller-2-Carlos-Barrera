<html>
    <head>
        <title>Insertar Registros</title>
        <style type="text/css">
            <!--
            body {
                background-color: #00BFFF;
            }
            body,td,th {
                color: #0B3B17;
            }
            -->
        </style></head>

    <body>
        <div align="center">INGRESE EL CODIGO DE LA CIUDAD </div>
        <div align="center">
            <form action="modificarCiudad.php" name="IR" method="post">
                <table border="1" align="center">
                    <tr>
                        <td width="138">CODIGO CIUDAD:</td>
                        <td width="208"><label>
                                <input type="text" name="cod_ciudad" />
                            </label></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar y Modificar"></td>
                    </tr>
                </table>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>