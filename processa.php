<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$nome= $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$sexo = $_POST["sexo"];
$sexo = $_POST["sexo"];
//$email = $_POST["email"];
//$areap = $_POST["areap"];
$erro = 0;


if (empty($nome) OR strstr($nome, ' ')== TRUE){
    echo 'Favor digitar seu nome!<br>'; $erro = 1;
} 
if (empty($sobrenome) OR strstr($sobrenome, ' ')== TRUE){
    echo 'Favor digitar seu sobrenome!<br>'; $erro = 1;
} 
if (erro == 0) {
    echo $nome . " " . $sobrenome;
}
if ($sexo == 2){
    echo 'Feminino';   
}
if ($sexo == 3){
    echo 'Masculino';
} else {echo 'Selecione o sexo do usuario';}




?>
