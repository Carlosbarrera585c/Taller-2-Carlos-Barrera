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
<div align="center">INSERTAR EN TABLA PROGRAMA</div>
<div align="center">
    <form action="insertar.php" name="IR" method="post">
  <table>
    <tr>
      <td>Inserte el Codigo</td>
      <td><label>
        <input type="text" name="codprograma" />
      </label></td>
    </tr>
    <tr>
      <td>Describa el Programa:</td>
      <td>
          <input type="text" name="desprograma" />
      </td>
    </tr>
    <tr>
      <td>Estado</td>
      <td>
        <input type="text" name="estado" />
      </td>
    </tr>
    <tr>
      <td><input type="submit" name="enviar" value="Insertar"></td>
      <td><input type="reset" name="reset" value="Resetear" /></td>
    </tr>
      
</body>
</html>
