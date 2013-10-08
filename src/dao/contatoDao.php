<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once '../src/dominio/contato.class.php';
include 'connectionFactory.inc.php';

class ContatoDao{
    
    public function insertContato($contato){
        try{
            $conn = get_connection();

            $stmt = $conn->prepare("INSERT INTO contato(idDados_Pessoais,nome,sobrenome,
                                    sexo,email,tipo_mensagem,mensagem,id) " + 
                                    "VALUES(:idDados_Pessoais, :nome, :sobrenome, :sexo
                                    :email, :tipo_mensagem, :mensagem)"); 
            /* @var $contato type */
            $stmt->bindValue(":idDados_Pessoais", $contato->get_idDados_Pessoais(), PDO::PARAM_STR);
            $stmt->bindParam(":nome", $contato->getNome(), PDO::PARAM_STR);
            $stmt->bindParam(":sobrenome", $contato->getSobrenome(), PDO::PARAM_STR);
            $stmt->bindParam(":sexo", $contato->getSexo(), PDO::PARAM_STR);
            $stmt->bindParam(":email", $contato->getEmail(), PDO::PARAM_STR);
            $stmt->bindParam("tipo_mensagem", $contato->getTipo_mensagem(), PDO::PARAM_STR);
            $stmt->bindParam("mensagem", $contato->getMensagem(), PDO::PARAM_STR);
            $stmt->execute();

            return null;
        } catch (PDOException $ex){
            echo 'ERRO: '.$ex->getMessage();
        }
    }
    public function deleteContato($contato){
        
        $conn = get_connection();
        
        $stmt = $conn->prepare("DELETE FROM contato WHERE idDados_Pessoais = ?");
        
        $stmt->bindParam(1,$contato->get_idDados_Pessoais());
        $stmt->execute();
    }
    
    public function updateContato($idDados_Pessoais,$contato){
        $conn = get_connection();
        
        $sql ="UPDATE Contato SET nome = ?, sobrenome = ?, sexo = ?, email = ?, 
                tipo_mensagem = ?, mensagem = ?, WHERE idDados_Pessoais = ?";
        
        $stmt = $conn->prepare($sql);
	$stmt->bindParam(1,$contato->getnome() );
        $stmt->bindParam(2,$contato->getsobrenome() );
        $stmt->bindParam(3,$contato->getsexo() );
        $stmt->bindParam(4,$contato->getemail() );
        $stmt->bindParam(5,$contato->get_tipo_mensagem() );
        $stmt->bindParam(6,$contato->getmensagem() );
        $stmt->bindParam(7,$idDados_Pessoais); 
	$stmt->execute();
        
    }
    
    public function selectContato($idDados_Pessoais){
        $conn = get_connection();
        
        $sql ="SELECT * FROM Contato WHERE idDados_Pessoais = ?";
        
        $stmt = $conn->prepare($sql);
        $stmt ->bindParam(1, $idDados_Pessoais);        
        $rs = $conn->query();
        
        while ($ron = $rs->fetch(PDO::FETCH_OBJ)){
            echo $ron->idDados_Pessoais . "<br />";
            echo $ron->nome . "<br />";
            echo $ron->sobrenome . "<br />";
            echo $ron->sexo . "<br />";
            echo $ron->email . "<br />";
            echo $ron->tipo_mensagem . "<br />";
            echo $ron->mensagem . "<br />";     
        }
        
    }
    
    public function selectAllContato(){
        $conn = get_connection();
        
        $rs = $conn->query("SELECT * FROM contato");
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            echo $row->idDados_Pessoais . "<br />";
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
