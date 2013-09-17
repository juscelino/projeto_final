<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/contato.class.php';
include 'connectionFactory.inc.php';

class ContatoDao{
    public function insertContato($contato){
        $conn = get_connection();
        
        $stmt = $conn->prepare("INSERT INTO contato(nome,sobrenome,sexo,email,tipo_mensagem,mensagem,id) " +
                                "VALUES(?,?,?,?,?,?)");
        /* @var $contato type */
        $stmt->bindParam(1, $contato->get_nome());
        $stmt->bindParam(2, $contato->get_sobrenome());
        $stmt->bindParam(3, $contato->get_sexo());
        $stmt->bindParam(4, $contato->get_email());
        $stmt->bindParam(5, $contato->get_tipo_mensagem());
        $stmt->bindParam(6, $contato->get_mensagem());
        $stmt->bindParam(7, $contato->get_id());
        $stmt->execute();
                      
    }
    
    public function deleteContato($contato){}
    
    public function updateContato($nome,$contato){}
    
    public function selectContato($nome){}
    
    public function selectAllContato(){}
    
}
    

?>
