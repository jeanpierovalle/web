<?php
function conectar()
{
    $host = "sql303.infinityfree.com";
    $user = "if0_37675209";
    $pass = "oH1WKMVcUE487O";
    $bd = "if0_37675209_rincon_del_movil";

    $con = mysqli_connect($host, $user, $pass, $bd);

    return $con;
}
