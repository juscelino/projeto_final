<?php
    require_once './src/dao/contatoDao.php';
    require_once './src/dominio/contato.class.php';

    class contatoControl{
        
        public function cadastroContato($nome, $sobrenome, $sexo, $email, $tipo_mensagem, $comentarios){                
            $dao = new contatoDao();
            $contato = new Contato($nome, $sobrenome, $sexo, $email, $tipo_mensagem, $comentarios);

            $dao->insertContato($contato);
        }
    }
?>
