<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Gestion</title>
        <style type="text/css">
            body {
                background-image: url(objetos/fondo-madera-negro.jpg);
            }

            * {
                margin:0px;
                padding:0px;
            }

            #header {
                margin:auto;
                width:600px;
                font-family:Comic Sans MS;
            }

            ul, ol {
                list-style:none;
            }

            .nav > li {
                float:left;
            }
            /*
            *color letra y fondo
            */
            .nav li a {
                background-color:#779ECB;
                color:#fff;
                text-decoration:none;
                padding:12px 19px;
                display:block;
            }
            /*
            *Color de seleccion
            */
            .nav li a:hover {
                background-color:#FF6961;
            }

            .nav li ul {
                display:none;
                position:absolute;
                min-width:140px;
            }

            .nav li:hover > ul {
                display:block;
            }

            .nav li ul li {
                position:relative;
            }

            .nav li ul li ul {
                right:-140px;
                top:0px;
            }
        </style>
    </head>
    <body>
    <center>
        <table width="1000">
            <tr>
                <td height="80" bgcolor="#779ECB"><div align="center"><font face="Comic Sans MS" size=5 color=white>TALLERES</font></div></td>
            </tr>
        </table>
    </center>
    <div id="header">
        <ul class="nav">
            <li>
                <a href="">Taller 1</a>
                <ul>
                    <li><a href="taller-1/Lista/index.php">Lista</a></li>
                    <li><a href="taller-1/Insertar/index.php">Insertar</a></li>
                    <li><a href="taller-1/Modificar/index.php">Modificar</a></li>
                    <li><a href="taller-1/Eliminar/index.php">Eliminar</a></li>
                    <li><a href="taller-1/Consultas/index.php">Consultar</a></li>
                </ul>
            </li>
            <li><a href="">Taller 2 </a>
                <ul>
                    <li><a href="carpetas/aprendiz/index.php"> Gestión de Aprendiz </a></li>
                    <li><a href="carpetas/causa_Desercion/index.php">Gestión Causa de Desercion </a></li>
                    <li><a href="carpetas/centro/index.php">Gestión Centro </a></li> 
                    <li><a href="carpetas/ciudad/index.php">Gestión Ciudad </a></li> 
                    <li><a href="carpetas/credencial/index.php">Gestión Credencial </a></li> 
                    <li><a href="carpetas/datos_usuario/index.php">Gestión Datos de Usuario</a></li> 
                    <li><a href="carpetas/depto/index.php">Gestión Departamento </a></li> 
                    <li><a href="carpetas/desercion/index.php">Gestión Desercion </a></li> 
                    <li><a href="carpetas/ficha/index.php">Gestión Ficha </a></li> 
                    <li><a href="carpetas/localidad/index.php">Gestión Localidad </a></li> 
                    <li><a href="carpetas/matricula/index.php">Gestión Matricula </a></li> 
                    <li><a href="carpetas/programa/index.php">Gestión Programa </a></li> 
                    <li><a href="carpetas/rh/index.php">Gestión de Rh</a></li>
                    <li><a href="carpetas/tipo_id/index.php">Gestión Tipo Id </a></li> 
                    <li><a href="carpetas/usuario/index.php">Gestión Usuario </a></li> 
                    <li><a href="carpetas/usuario_credencial/index.php">Gestión Usuario Credencial </a></li> 
                </ul>
            </li>
            <li>
                <a href="">Consultar Tablas</a>
                <ul>
                    <li><a href="consultas/aprendiz/index.php">Aprendiz</a></li>
                    <li><a href="consultas/causa_Desercion/index.php">Causa de Desercion</a></li>
                    <li><a href="consultas/centro/index.php">Centro</a></li>
                    <li><a href="consultas/ciudad/index.php">Ciudad</a></li>
                    <li><a href="consultas/credencial/index.php">Credencial</a></li>
                    <li><a href="consultas/datos_usuario/index.php">Datos de Usuario</a></li>
                    <li><a href="consultas/depto/index.php">Departamento</a></li>
                    <li><a href="consultas/desercion/index.php">Desercion</a></li>
                    <li><a href="consultas/ficha/index.php">Ficha</a></li>
                    <li><a href="consultas/localidad/index.php">Localidad</a></li>
                    <li><a href="consultas/matricula/index.php">Matricula</a></li>
                    <li><a href="consultas/programa/index.php">Programa</a></li>
                    <li><a href="consultas/rh/index.php">Rh</a></li>
                    <li><a href="consultas/tipo_id/index.php">Tipo Id</a></li>
                    <li><a href="consultas/usuario/index.php">Usuario</a></li>
                    <li><a href="consultas/usuario_credencial/index.php">Usuario Credencial</a></li>

                </ul>
            </li>
            <li>
                <a href="">Consultas de Doneya</a>
                <ul>
                    <li><a href="consultasDoneya/consulta1/index.php">Consulta 1</a></li>
                    <li><a href="consultasDoneya/consulta2/index.php">Consulta 2</a></li>
                    <li><a href="consultasDoneya/consulta3/index.php">Consulta 3</a></li>
                    <li><a href="consultasDoneya/consulta4/index.php">Consulta 4</a></li>
                    <li><a href="consultasDoneya/consulta5/index.php">Consulta 5</a></li>
                    <li><a href="consultasDoneya/consulta6/index.php">Consulta 6</a></li>
                    <li><a href="consultasDoneya/consulta7/index.php">Consulta 7</a></li>
                    <li><a href="consultasDoneya/consulta8/index.php">Consulta 8</a></li>
                </ul>
            </li>
        </ul>
    </div>
</body>
</html>





