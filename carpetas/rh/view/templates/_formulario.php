<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textId">Codigo</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textId)) ? ($textId) : '') ?>" id="textId" name="textId" required min="1" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textDes">Descripcion</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textDes)) ? ($textDes) : '') ?>" id="textDes" name="textDes" min="1" max="20">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>