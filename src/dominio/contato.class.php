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
    
    public $nome;
    public $sobrenome;
    public $sexo;
    public $email;
    public $tipo_mensagem;
    public $mensagem;
    
    function __construct($nome, $sobrenome, $sexo, $email, $tipo_mensagem, $mensagem) {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
        $this->sexo = $sexo;
        $this->email = $email;
        $this->tipo_mensagem = $tipo_mensagem;
        $this->mensagem = $mensagem;
    }
    

public function getNome() {
return $this->nome;
}

public function setNome($nome) {
$this->nome = $nome;
}

public function getSobrenome() {
return $this->sobrenome;
}

public function setSobrenome($sobrenome) {
$this->sobrenome = $sobrenome;
}

public function getSexo() {
return $this->sexo;
}

public function setSexo($sexo) {
$this->sexo = $sexo;
}

public function getEmail() {
return $this->email;
}

public function setEmail($email) {
$this->email = $email;
}

public function getTipo_mensagem() {
return $this->tipo_mensagem;
}

public function setTipo_mensagem($tipo_mensagem) {
$this->tipo_mensagem = $tipo_mensagem;
}

public function getMensagem() {
return $this->mensagem;
}

public function setMensagem($mensagem) {
$this->mensagem = $mensagem;
}

}
?>
