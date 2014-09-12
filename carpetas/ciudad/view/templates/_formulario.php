<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textCod">Codigo de la Ciudad</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textCod)) ? ($textCod) : '') ?>" id="textCod" name="textCod" required min="1" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textNom">Nombre de la Ciudad</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textNom)) ? ($textNom) : '') ?>" id="textNom" name="textNom" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textDepto">Codigo del Departamento</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textDepto)) ? ($textDepto) : '') ?>" id="textDepto" name="textDepto" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textHabi">Habitantes</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textHabi)) ? ($textHabi) : '') ?>" id="textHabi" name="textHabi" min="" max="">
            </div>
        </div>
    </div>
    <div>
        <a href="index.php">Volver</a>
        <button type="submit">Registrar</button>
    </div>
</form>