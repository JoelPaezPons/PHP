<?php


?>



<form action="404subida.php" method="post" enctype="multipart/form-data">
    <label for="imagen">Imagen:</label>
    <input type="file" name="imagen" id="imagen"><br><br>

    <label for="anchura">Anchura:</label>
    <input type="number" name="anchura" id="anchura"><br><br>

    <label for="altura">Altura:</label>
    <input type="number" name="altura" id="altura"><br><br>

    <input type="submit" name="accion" value="Subir">
</form>