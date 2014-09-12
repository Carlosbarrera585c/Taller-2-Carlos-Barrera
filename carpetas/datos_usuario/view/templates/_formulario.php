<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textId">Id Datos</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textId)) ? ($textId) : '') ?>" id="textId" name="textId" required min="1" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textUsuId">Id Usuario</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textUsuId)) ? ($textUsuId) : '') ?>" id="textUsuId" name="textUsuId" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textNom">Nombre del Usuario</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textNom)) ? ($textNom) : '') ?>" id="textNom" name="textNom" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textApel">Apellido del Usuario</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textApel)) ? ($textApel) : '') ?>" id="textApel" name="textApel" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textDir">Direccion del Usuario</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textDir)) ? ($textDir) : '') ?>" id="textDir" name="textDir" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textTel">Telefono del Usuario</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textTel)) ? ($textTel) : '') ?>" id="textTel" name="textTel" min="" max="">
            </div>
            <br>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textLocalId">Id de la Localidad del Usuario</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textLocalId)) ? ($textLocalId) : '') ?>" id="textLocalId" name="textLocalId" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>