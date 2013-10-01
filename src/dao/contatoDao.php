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
                                "VALUES(?,?,?,?,?,?)"); /* Tenho que inserir id?*/
        /* @var $contato type */
        $stmt->bindParam(1, $contato->get_nome());
        $stmt->bindParam(2, $contato->get_sobrenome());
        $stmt->bindParam(3, $contato->get_sexo());
        $stmt->bindParam(4, $contato->get_email());
        $stmt->bindParam(5, $contato->get_tipo_mensagem());
        $stmt->bindParam(6, $contato->get_mensagem());
        $stmt->execute();
                      
    }
    
    public function deleteContato($contato){
        
        $conn = get_connection();
        
        $stmt = $conn->prepare("DELETE FROM contato WHERE nome = ?");/* PERGUNTA PARA DEMOSTINES: devo Acrescentar id? */
        
        $stmt->bindParam(1,$contato->get_nome()); /* PERGUNTA PARA DEMOSTINES: Devo manter apenas o id na descrição abaixo?*/
        $stmt->bindParam(2,$contato->get_sobrenome());
        $stmt->bindParam(3,$contato->get_sexo());
        $stmt->bindParam(4,$contato->get_email());
        $stmt->bindParam(5,$contato->get_tipo_mensagem());
        $stmt->bindParam(6,$contato->get_mensagem());
        $stmt->execute();
    }
    
    public function updateContato($nome,$contato){
        $conn = get_connection();
        
        $sql ="UPDATE Contato SET nome = ?, sobrenome = ?, sexo = ?, email = ?, 
                tipo_mensagem = ?, mensagem = ?, WHERE id = ?";
        
        $stmt = $conn->prepare($sql);
	/* $stmt->bindParam(1,$contato->getnome() ); *//*DEVO MANTER DESTA FORMA OU UTILIZAR ID.*/
        $stmt->bindParam(2,$contato->getsobrenome() );
        $stmt->bindParam(3,$contato->getsexo() );
        $stmt->bindParam(4,$contato->getemail() );
        $stmt->bindParam(5,$contato->get_tipo_mensagem() );
        $stmt->bindParam(6,$contato->getmensagem() );
        $stmt->bindParam(1,$nome); 
	$stmt->execute();
        
    }
    
    public function selectContato($nome){
        $conn = get_connection();
        
        $sql ="SELECT * FROM Contato WHERE nome = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt ->bindParam(1, $nome);        
        $rs = $conn->query();
        
        while ($ron = $rs->fetch(PDO::FETCH_OBJ)){
            echo $ron->nome . "<br />";
            echo $ron->sobrenome . "<br />";
            echo $ron->sexo . "<br />";
            echo $ron->email . "<br />";
            echo $ron->tipo_mensagem . "<br />";
            echo $ron->mensgem . "<br />";     
        }
        
    }
    
    public function selectAllContato(){
        $conn = get_connection();
        
        $rs = $conn->query("SELECT * FROM contato");
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            echo $row->nome . "<br />";
            echo $row->sobrenome . "<br />";
            echo $row->sexo . "<br />";
            echo $row->email . "<br />";
            echo $row->tipo_mensagem . "<br />";
            echo $row->mensagem . "<br />";
        }
    
    }
}  

?>
