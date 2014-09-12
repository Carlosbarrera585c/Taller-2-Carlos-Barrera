<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textId">Identificacion del Aprendiz</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textId)) ? ($textId) : '') ?>" id="textId" name="textId" required min="" max="">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textNom">Nombre del Aprendiz</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textNom)) ? ($textNom) : '') ?>" id="textNom" name="textNom">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textApel">Apellido del Aprendiz</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textApel)) ? ($textApel) : '') ?>" id="textApel" name="textApel">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textCiu">Codigo de la Ciudad</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCiu)) ? ($textCiu) : '') ?>" id="textCiu" name="textCiu" min="0" max="">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textTipoId">Tipo Id</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textTipoId)) ? ($textTipoId) : '') ?>" id="textTipoId" name="textTipoId" min="0" >
            </div>
            <br>
            <div class="floatLeft">
                <label for="textRh">Codigo de Rh</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textRh)) ? ($textRh) : '') ?>" id="textRh" name="textRh" min="" max="">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textGen">Genero</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textGen)) ? ($textGen) : '') ?>" id="textGen" name="textGen" min="0" maxlength="1">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textEdad">Edad</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textEdad)) ? ($textEdad) : '') ?>" id="textEdad" name="textEdad" min="0">
            </div>
            <br>
            <div class="floatLeft">
                <label for="textTel">Telefono</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textTel)) ? ($textTel) : '') ?>" id="textTel" name="textTel" min="0" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>