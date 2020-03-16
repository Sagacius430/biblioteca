<?php

include_once 'Conexao.php';

class UsuarioModel {

    private $prontuario;
    private $rg;
    private $cpf;
    private $senha;
    private $nome;
    private $sobrenome;
    private $conexao;

    public function criar() {
        $sql = "INSERT INTO usuario
                        (
                            prontuario,rg,cpf,senha,nome,sobrenome                            
                        )
                        VALUES
                        ('$this->prontuario', '$this->rg', '$this->cpf',  '$this->senha', '$this->nome', '$this->sobrenome');";
        try {
            $this->conexao->executar($sql);            
        } catch (Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function listar(){
        $sql = 'SELECT * FROM usuario;';             
        $usuarios = array();
        try
        {
            $rs = $this->conexao->carregar($sql); //recebe a tabela bruta RESULTSET
            while($tmp = $rs->fetchObject())            {
                $usuario = new UsuarioModel();
                $usuario->setProntuario($tmp->prontuario);
                $usuario->setRg($tmp->rg);
                $usuario->setCpf($tmp->cpf);
                $usuario->setNome($tmp->nome);
                $usuario->setSobrenome($tmp->sobrenome);               
                array_push($usuarios, $usuario);                 
            }
        }
        catch(PDOException $e)
        {
            
        }    
        print_r($usuarios);
        return $usuarios;
    }
    
    public function delevte($id) {
        $sql = "DELETE FROM usuario WHERE prontuario='{$id}';"; 
        try {
            
        } catch (Exception $exc) {
            echo $exc->getTraceAsString();
        }
        }

    public function update() {
        
    }
//------------- GETTERS and SETTERS --------------------------------------------    
    function getProntuario() {
        return $this->prontuario;
    }

    function getRg() {
        return $this->rg;
    }

    function getCpf() {
        return $this->cpf;
    }

    function getSenha() {
        return $this->senha;
    }

    function getNome() {
        return $this->nome;
    }

    function getSobrenome() {
        return $this->sobrenome;
    }

    function setProntuario($prontuario): void {
        $this->prontuario = $prontuario;
    }

    function setRg($rg): void {
        $this->rg = $rg;
    }

    function setCpf($cpf): void {
        $this->cpf = $cpf;
    }

    function setSenha($senha): void {
        $this->senha = $senha;
    }

    function setNome($nome): void {
        $this->nome = $nome;
    }

    function setSobrenome($sobrenome): void {
        $this->sobrenome = $sobrenome;
    }

    function __construct() {
        $this->conexao = Conexao::getInstance();
    }

}
