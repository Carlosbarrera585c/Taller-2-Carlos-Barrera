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
<?php
require_once ('DataBaseClass.php');
$id_apre = $_POST['id_apre'];
try {
    $objDB=new DataBaseClass('localhost','desercion','root','');
	$sql="SELECT * from aprendiz where id_apre='$id_apre'";
	$arrData=$objDB->getInstance()
	->query($sql)
	->fetchAll(PDO::FETCH_ASSOC);
}catch (PDOExcepcion $ex){
	echo $exc->getmessage();
}
?>
<html>
    <head>
        <title>Campos a Modificar</title>
    </head>
    <body>
    <form name="datos" method="post" action="modAprendiz.php">
	  <div align="center">
	    <table width="1204" border="1">
	      <tr>
	        <th width="144">Nombre Aprendiz </th>
      <th width="144">Apellido Aprendiz </th>
      <th width="144">Telefono</th>
      <th width="144">Codigo Ciudad </th>
      <th width="144">Codigo TipoID</th>
      <th width="144">Codigo RH </th>
      <th width="144">Genero  </th>
      <th width="144">Edad</th>
    </tr>
	<?php foreach ($arrData as $row):?>
				<input type="hidden" name="id_apre2" value="<?php echo $row['id_apre'] ?>">
	      <tr>
	        <td><input type="text" name="nom_apre2" value="<?php echo $row['nom_apre']?>"></td>
	        <td><input type="text" name="apel_apre2" value="<?php echo $row['apel_aprn']?>"></td>
	        <td><input type="text" name="tel_apre2" value="<?php echo $row['telefono_apre']?>"></td>
	        <td><input type="text" name="cod_ciudad2" value="<?php echo $row['cod_ciudad']?>" size="5"></td>
	        <td><input type="text" name="cod_tipo_id2" value="<?php echo $row['cod_tipo_id']?>" size='5'></td>
	        <td><input type="text" name="cod_rh2" value="<?php echo $row['cod_rh']?>" size='5'></td>
	        <td><input type="text" name="genero2" value="<?php echo $row['genero']?>" size="5"></td>
	        <td><input type="text" name="edad2" value="<?php echo $row['edad']?>" size="5"></td>
          </tr>
	      <tr>
	        <td colspan="8"><div align="center"><input name="submit" type="submit" value="Modificar"></div></td>
          </tr>
	<?php endforeach ?>
        </table>
        <p>&nbsp;</p>
		
	  </div>
    </form>
    </body>
</html>
