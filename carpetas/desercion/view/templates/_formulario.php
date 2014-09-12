<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textDoc">Numero de Documento</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textDoc)) ? ($textDoc) : '') ?>" id="textDoc" name="textDoc" required min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textFecha">Fecha del Documento</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textFecha)) ? ($textFecha) : '') ?>" id="textFecha" name="textFecha" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textIdApre">Identificacion del Aprendiz</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textIdApre)) ? ($textIdApre) : '') ?>" id="textIdApre" name="textIdApre" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textNumFicha">Numero de Ficha</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textNumFicha)) ? ($textNumFicha) : '') ?>" id="textNumFicha" name="textNumFicha" min="" max="">
            </div>
        </div>
        <div>
            <div class="floatLeft">
                <label for="textCodCausa">Codigo de Causa</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCodCausa)) ? ($textCodCausa) : '') ?>" id="textCodCausa" name="textCodCausa" min="" max="">
            </div>
        </div>
         <div>
            <div class="floatLeft">
                <label for="textFechaDeser">Fecha de Desercion</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textFechaDeser)) ? ($textFechaDeser) : '') ?>" id="textFechaDeser" name="textFechaDeser" min="" max="">
            </div>
        </div>
         <div>
            <div class="floatLeft">
                <label for="textFase">Fase de Desercion</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textFase)) ? ($textFase) : '') ?>" id="textFase" name="textFase" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>