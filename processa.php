<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$nome= $_POST["nome"];
$sobrenome = $_POST["sobrenome"];
$sexo = $_POST["sexo"];
$email = $_POST["email"];
$comentarios = $_POST["comentarios"];
$_comentarios = $_POST["_comentarios"];
$erro = 0;

                                          // preg_match so aceita o que vc definir no campo entre ''.
    if (empty($nome) or strstr($nome, ' ') or ereg('^[A-Z][a-z`´^~ç¨]', $nome)== FALSE){
        echo 'Favor digitar seu nome!'; 
        $erro = 1;
    } 
    if (empty($sobrenome) or strstr($sobrenome, ' ') or ereg('^[A-Z][a-z`´^~ç]', $sobrenome)== FALSE){
        echo 'Favor digitar seu sobrenome!'; 
        $erro = 1;
    }  
    else {
        echo $nome . " " . $sobrenome;
        echo '<br/>';
    }



    if ($sexo == 2){
        echo 'Feminino';
        echo '<br/>';
    }
    elseif ($sexo == 3){
        echo 'Masculino';
        echo '<br/>';
    } 
    else {
        echo 'Selecione uma opção!';
        echo '<br/>';
        
    }
    
    
    if (empty($email) or strstr($email, ' ') or ereg('^[a-z][a-z0-9@.]', $email)== FALSE){
        echo 'Favor digitar seu Email!'; 
        $erro = 1;
    }
    else {
        echo $email;
        echo '<br/>';
    }
    
    
    if ($comentarios == 2){
        echo 'Sugestão';
        echo '<br/>';
    }
    elseif ($comentarios == 3){
        echo 'Reclamação';
        echo '<br/>';
    } 
    elseif ($comentarios == 4){
        echo 'Elogios';
        echo '<br/>';
    }
    elseif ($comentarios == 5){
        echo 'Outros';
        echo '<br/>';
    }
    
    
    if (empty($_comentarios) or strstr($_comentarios, ' ')== FALSE){
        echo 'Digite a mensagem!';
    }
    else {
        echo $_comentarios . " " . $_comentarios;
        echo '<br/>';
    }
?>