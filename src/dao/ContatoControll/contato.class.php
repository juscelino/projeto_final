<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of contato
 *
 * @author 20111144110246
 */
class contato {
    //put your code here
    
    function cadastroContato($nome,$contato){
        
        $dao = new ContatoDao();
        
        
        if (validarNome($contato)== False){
            header("Location: ../../erroCadastroNome.php");            
        }
    }
    
    function validarNome($contato){
        
        
        return True;
        
    }
}

?>
