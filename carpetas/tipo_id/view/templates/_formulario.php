<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textCod">Codigo del tipo Id</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCod)) ? ($textCod) : '') ?>" id="textCod" name="textCod" required min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textDes">Descripcion del Tipo Id</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textDes)) ? ($textDes) : '') ?>" id="textDes" name="textDes" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textTipo">Tipo de Documento</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textTipo)) ? ($textTipo) : '') ?>" id="textTipo" name="textTipo" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>