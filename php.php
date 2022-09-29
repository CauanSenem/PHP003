<?php
$totalmaca = 0;
$totalmelancia = 0;
$totallaranja = 0;
$totalrepolho = 0;
$totalcenoura = 0;
$totalbatata = 0;
if (isset($_POST['Enviar']))
{
    $valormaca = floatval($_POST['valormaca']);
    $quantidademaca = floatval($_POST['quantidademaca']);
    $totalmaca = $valormaca * $quantidademaca;

    $valormelancia = floatval($_POST['valormelancia']);
    $quantidademelancia = floatval($_POST['quantidademelancia']);
    $totalmelancia = $valormelancia * $quantidademelancia;

    $valorlaranja = floatval($_POST['valorlaranja']);
    $quantidadelaranja = floatval($_POST['quantidadelaranja']);
    $totallaranja = $valorlaranja * $quantidadelaranja;

    $valorrepolho = floatval($_POST['valorrepolho']);
    $quantidaderepolho = floatval($_POST['quantidaderepolho']);
    $totalrepolho = $valorrepolho * $quantidaderepolho;

    $valorcenoura = floatval($_POST['valorcenoura']);
    $quantidadecenoura = floatval($_POST['quantidadecenoura']);
    $totalcenoura = $valorcenoura * $quantidadecenoura;

    $valorbatata = floatval($_POST['valorbatata']);
    $quantidadebatata = floatval($_POST['quantidadebatata']);
    $totalbatata = $valorbatata * $quantidadebatata;
}
?>