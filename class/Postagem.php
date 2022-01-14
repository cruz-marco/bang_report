<?php 
/** 
 * CLASSE DAS POSTAGENS
 * 
 * Classe que recebe as postagens dos usuários
 * 
 */

class Postagem {
    private $pid;
    private $autor;
    private $data_post;
    private $content;
    private $comment = array();

    function __construct ($autor, $content){
        this->autor = $autor;
        this->content = $content;
        this->data = date("d/m/Y - H:i:s");
    }

}

?>