<?php
/**
 * Description of LivroModel
 *
 * @author Lincoln
 */
class LivroModel {
    private $idlivro;
    private $titulo;
    private $editora;
    private $ano;
    private $edicao;
    private $autor;
    private $assunto;
    private $conexao;
    
    public function criar() {
        $sql = "INSERT INTO livros 
                (idlivro,titulo,editora,ano,edicao,autor,assunto)
                VALUES
                ('$this->idlivro','$this->titulo','$this->editora','$this->ano','$this->edicao','$this->autor','$this->assunto');";
        try {
        $this->conexao->executar($sql);            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        }
    
        public function listar() {
            
        }
}
