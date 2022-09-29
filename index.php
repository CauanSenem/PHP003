<?php
include 'php.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menu</title>
</head>
<body>
    <form method="POST">
        Maçã
        <br>
        Valor do produto em KG:<input type="text" name="valormaca" placeholder="R$/KG">
        <br>
        Quantidade em KG:<input type="text" name="quantidademaca" placeholder="Quantidade">
        <br>
        <input type="text" value="<?php echo $totalmaca ?>" placeholder="Resultado">
        <br>
        <hr>
        Melancia
        <br>
        Valor do produto em KG:<input type="text" name="valormelancia" placeholder="R$/KG">
        <br>
        Quantidade em KG:<input type="text" name="quantidademelancia" placeholder="Quantidade">
        <br>
        <input type="text" value="<?php echo $totalmelancia ?>">
        <br>
        <hr>
        Laranja
        <br>
        Valor do produto em KG:<input type="text" name="valorlaranja" placeholder="R$/KG">
        <br>
        Quantidade em KG:<input type="text" name="quantidadelaranja" placeholder="Quantidade">
        <br>
        <input type="text" value="<?php echo $totallaranja ?>">
        <br>
        <hr>
        Repolho
        <br>
        Valor do produto em KG:<input type="text" name="valorrepolho" placeholder="R$/KG">
        <br>
        Quantidade em KG:<input type="text" name="quantidaderepolho" placeholder="Quantidade">
        <br>
        <input type="text" value="<?php echo $totalrepolho ?>">
        <br>
        <hr>
        Cenoura
        <br>
        Valor do produto em KG:<input type="text" name="valorcenoura" placeholder="R$/KG">
        <br>
        Quantidade em KG:<input type="text" name="quantidadecenoura" placeholder="Quantidade">
        <br>
        <input type="text" value="<?php echo $totalcenoura ?>">
        <br>
        <hr>
        Batata
        <br>
        Valor do produto em KG:<input type="text" name="valorbatata" placeholder="R$/KG">
        <br>
        Quantidade em KG:<input type="text" name="quantidadebatata" placeholder="Quantidade">
        <br>
        <input type="text" value="<?php echo $totalbatata ?>">
        <br>
        <hr>
        <input type="submit" value="Calcular" name="Enviar">
        <input type="reset" value="Apaga">
    </form>
</body>
</html>