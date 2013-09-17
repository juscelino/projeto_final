<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
function get_connection(){
    $conn = new PDO('mysql:host=localhost;port=3306;dbname=project','php_user','php_user');
    
    return $conn;
    
    
}

?>
