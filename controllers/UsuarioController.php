<?php
/**
 * Description of UsuarioController
 *
 * @author Lincoln
 */
class UsuarioController extends UsuarioModel{
    public function index() {
        echo 'Usando controller';
                
    }
    public function listar_array() {        
        $resultado = $this->listar();
        echo '<pre>';
        var_dump($resultado);
    }
}
