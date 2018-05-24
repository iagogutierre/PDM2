<?php
include "conexao.php";
function cadastraEvento($link, $descricaoEvento, $capaURL, $localEvento){
    $query = "INSERT INTO eventos(descricao, capa, dataevento, hora, localevento)"
        ."VALUES('$descricaoEvento','$capaURL',CURDATE(), CURTIME(),'$localEvento')";
    mysqli_query($link,$query) or die (mysqli_error($link));
    if (mysqli_affected_rows($link) == 1){
        return TRUE;
    }
    else {
        if(mysqli_errno($link) == 1062){
            echo "Erro ao cadastrar o evento!";
            return FALSE;
        }
    }
}

?>