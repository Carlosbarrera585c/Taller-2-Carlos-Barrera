<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textId">Id de Localidad</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textId)) ? ($textId) : '') ?>" id="textId" name="textId" required min="" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textNom">Nombre de Localidad</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textNom)) ? ($textNom) : '') ?>" id="textNom" name="textNom" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textLoca">Localidad</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textLoca)) ? ($textLoca) : '') ?>" id="textLoca" name="textLoca" min="" max="1">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>