<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 16/05/18
 * Time: 20:45
 */

$bd_local = 'localhost';
$usuario = 'id5784320_roletiadm';
$senha = 'senhasegura';
$bd = 'id5784320_roleti';
$link = mysqli_connect($bd_local, $usuario, $senha, $bd) or die (mysqli_error($link));

?>