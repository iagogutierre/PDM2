<?php
/**
 * Created by PhpStorm.
 * User: everton
 * Date: 16/05/18
 * Time: 21:18
 */
    
    include "conexao.php";
    include "scriptInsert.php";
    
    //Função para gerar nomes aleatórios
    // retorna uma string separada por espaços
    function gerarNome(){
        $tipo = array(
            1 => "Forum",
            2 => "Congresso",
            3 => "Feira"
        );
        $onde = array(
            1 => "Charqueadas",
            2 => "Porto Alegre",
            3 => "Vale dos Sinos"
        );
        $doque = array(
            1 => "Linux",
            2 => "Windows",
            3 => "MacOs"
        );

        $titulo = $tipo[rand(1,3)]." ".$onde[rand(1,3)]." ".$doque[rand(1, 3)];
        return $titulo;
    }
    
    function geraLocal(){
        $local = array(
            1 => "Charqueadas",
            2 => "Porto Alegre",
            3 => "Vale dos Sinos"
        );
        
        return $local[rand(1,3)];
    }

    if (cadastraEvento($link, gerarNome(),
        "https://picsum.photos/200/300/?random",geraLocal())){
        echo "Cadastrado";
    }
    else{
        echo "Erro ao cadastrar";
    }

?>