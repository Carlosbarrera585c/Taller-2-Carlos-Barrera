<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textCod">Codigo de Causa</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCod)) ? ($textCod) : '') ?>" id="textCod" name="textCod" required min="1" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textDes">Descripcion</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textDes)) ? ($textDes) : '') ?>" id="textDes" name="textDes" min="" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textEs">Estado</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textEs)) ? ($textEs) : '') ?>" id="textEs" name="textEs" min="" max="1">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>