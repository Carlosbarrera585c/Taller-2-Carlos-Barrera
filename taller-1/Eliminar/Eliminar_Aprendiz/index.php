<html>
    <head>
        <title>Buscar y Eliminar</title>
        <style type="text/css">
            <!--
            body {
                background-color: #00BFFF;
            }
            body,td,th {
                color: #0B3B17;
            }
        </style></head>

    <body>
        <div align="center">ELIMINAR REGISTROS  </div>
        <div align="center">
            <form action="eliminarAprendiz.php" name="IR" method="post">
                <table border="1" align="center">
                    <tr>
                        <td width="138">ID APRENDIZ:</td>
                        <td width="208"><label>
                                <input type="text" name="id_apre" />
                            </label></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="enviar" value="Buscar y Eliminar"></td>
                    </tr>
                </table>
            </form>
        </div>
        <p>&nbsp;</p>
    </body>
</html>