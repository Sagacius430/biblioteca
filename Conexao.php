<?php

class Conexao {//lembrar de tornar essa class abstrata pq ela não pode ser instanciada somente extendida
 
    private $host;
    private $base;
    private $conexao;
    private $usuario;
    private $senha;
    private static $instance;

    private function __construct() {
        $this->set("127.0.0.1", "biblioteca", "root", "");
        $this->conectar();
    }

    public function set($host, $base, $usuario, $senha) {
        $this->host = $host;
        $this->base = $base;
        $this->usuario = $usuario;
        $this->senha = $senha;
    }

    public static function getInstance() {
        if (empty(self::$instance)) {
            self::$instance = new self;
        }
        return self::$instance;
    }

    public function conectar() {
        try {
            $this->conexao = new PDO("mysql:host=$this->host;dbname=$this->base", $this->usuario, $this->senha);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "conectado <br>";
        } catch (PDOException $e) {
            echo 'ERRO DE CONEXAO: ' . $e->getMessage();
        }
    }
    
    public function executar($sql){
        try {
            if(isset($this->conexao)){
                $this->conexao->exec($sql);
                echo "sql inserido";
            }
        } catch (PDOException $e) {
            echo 'ERRO DE CONEXAO: ' . $e->getMessage();
        }
    }
    
    public function carregar($sql){
        try {
            $result= array();
            if(isset($this->conexao)){
                $result= $this->conexao->query($sql);
                echo "requisição realizada";
            }
        } catch (PDOException $e) {
            echo 'ERRO DE CONEXAO: ' . $e->getMessage();
        } 
        return $result;
        
    }
}
