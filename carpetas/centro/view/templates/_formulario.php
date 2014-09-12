<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textCod">Codigo del Centro</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCod)) ? ($textCod) : '') ?>" id="textCod" name="textCod" required min="1" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textDes">Descripcion del Centro</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textDes)) ? ($textDes) : '') ?>" id="textDes" name="textDes" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textTel">Telefono</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textTel)) ? ($textTel) : '') ?>" id="textTel" name="textTel" min="" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textDir">Direccion</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textDir)) ? ($textDir) : '') ?>" id="textDir" name="textDir" min="" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textCiu">Codigo de la Ciudad</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCiu)) ? ($textCiu) : '') ?>" id="textCiu" name="textCiu" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>