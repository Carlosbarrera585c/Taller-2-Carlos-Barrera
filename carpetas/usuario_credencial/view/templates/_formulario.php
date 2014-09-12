<form method="post" action="<?php echo $formAction ?>" enctype="application/x-www-form-urlencoded">
    <div>
        <div>
            <div class="floatLeft">
                <label for="textId">Identificacion Credencial</label>
            </div>
            <div>
                <input type="number" value="<?php echo ((isset($textId)) ? ($textId) : '') ?>" id="textId" name="textId" required min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textUsuId">Identificacion de Usuario</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textUsuId)) ? ($textUsuId) : '') ?>" id="textUsuId" name="textUsuId" min="" max="">
            </div>
        </div>
        <br>
        <div>
            <div class="floatLeft">
                <label for="textCredId">Identificacion Credencial</label>
            </div>
            <div>
                <input type="text" value="<?php echo ((isset($textCredId)) ? ($textCredId) : '') ?>" id="textCredId" name="textCredId" min="" max="">
            </div>
        </div>
    </div>
</div>
<div>
    <a href="index.php">Volver</a>
    <button type="submit">Registrar</button>
</div>
</form>