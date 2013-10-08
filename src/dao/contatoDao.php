<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './src/dominio/contato.class.php';
require_once './src/dao/connectionFactory.inc.php';

class ContatoDao{
    
    public function insertContato($contato){
        try{
            $conn = get_connection();
           
            $stmt = $conn->prepare("INSERT INTO Dados_Pessoais(idDados_Pessoais,nome,sobrenome,
                                    sexo,email,tipo_mensagem,comentario) " + 
                                    "VALUES(:idDados_Pessoais, :nome, :sobrenome, :sexo
                                    :email, :tipo_mensagem, :comentario)");
            /* @var $contato type */
            /*$stmt->bindValue(":idDados_Pessoais", $contato->get_idDados_Pessoais(), PDO::PARAM_INT);
            $stmt->bindValue(":nome", $contato->getNome(), PDO::PARAM_VACHAR);
            $stmt->bindValue(":sobrenome", $contato->getSobrenome(), PDO::PARAM_VACHAR);
            $stmt->bindValue(":sexo", $contato->getSexo(), PDO::PARAM_VACHAR);
            $stmt->bindValue(":email", $contato->getEmail(), PDO::PARAM_VACHAR);
            $stmt->bindValue("tipo_mensagem", $contato->getTipo_mensagem(), PDO::PARAM_VACHAR);
            $stmt->bindValue("comentario", $contato->getMensagem(), PDO::PARAM_VACHAR);
            
            $stmt->execute();*/
            
           $stmt->execute(array($contato->get_idDados_Pessoais(),$contato->getNome(),
                                 $contato->getSobrenome(),$contato->getSexo(),
                                 $contato->getEmail(),$contato->getTipo_mensagem(),
                                 $contato->getMensagem()));

            return null;
        } catch (PDOException $ex){
            echo 'ERRO: '.$ex->getMessage();
        }
    }
    public function deleteContato($contato){
        
        $conn = get_connection();
        
        $stmt = $conn->prepare("DELETE FROM Dados_Pessoais WHERE idDados_Pessoais = ?");
        
        $stmt->bindParam(1,$contato->get_idDados_Pessoais());
        $stmt->execute();
    }
    
    public function updateContato($idDados_Pessoais,$contato){
        $conn = get_connection();
        
        $sql ="UPDATE Dados_Pessoais SET nome = ?, sobrenome = ?, sexo = ?, email = ?, 
                tipo_mensagem = ?, comentario = ?, WHERE idDados_Pessoais = ?";
        
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
        
        $sql ="SELECT * FROM Dados_Pessoais WHERE idDados_Pessoais = ?";
        
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
            echo $ron->comentario . "<br />";     
        }
        
    }
    
    public function selectAllContato(){
        $conn = get_connection();
        
        $rs = $conn->query("SELECT * FROM Dados_Pessoais");
        while($row = $rs->fetch(PDO::FETCH_OBJ)){
            echo $row->idDados_Pessoais . "<br />";
            echo $row->nome . "<br />";
            echo $row->sobrenome . "<br />";
            echo $row->sexo . "<br />";
            echo $row->email . "<br />";
            echo $row->tipo_mensagem . "<br />";
            echo $row->comentario . "<br />";
        }
    
    }  
    
}

?>
