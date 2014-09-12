<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textNum">Numero de Ficha</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textNum)) ? ($textNum) : '') ?>" id="textNum" name="textNum" required min="" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textId">Identificacion del Aprendiz</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textId)) ? ($textId) : '') ?>" id="textId" name="textId" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textEsta">Estado</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textEsta)) ? ($textEsta) : '') ?>" id="textEsta" name="textEsta" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>