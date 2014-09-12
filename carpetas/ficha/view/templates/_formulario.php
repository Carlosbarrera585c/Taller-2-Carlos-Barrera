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
        <br>
        <div>
            <div class="floatLeft">
                <label for="textCodPro">Codigo del Programa</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCodPro)) ? ($textCodPro) : '') ?>" id="textCodPro" name="textCodPro" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textFechaIni">Fecha de Inicio</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textFechaIni)) ? ($textFechaIni) : '') ?>" id="textFechaIni" name="textFechaIni" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textFechaFin">Fecha de Finalizacion</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textFechaFin)) ? ($textFechaFin) : '') ?>" id="textFechaFin" name="textFechaFin" min="" max="">
            </div>
        </div>
        <br
            <div>
            <div class="floatLeft">
                <label for="textCodCen">Codigo del Centro</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCodCen)) ? ($textCodCen) : '') ?>" id="textCodCen" name="textCodCen" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>