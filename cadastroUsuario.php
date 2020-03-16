<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">        
        <title>Formulário</title>  
        <link rel="stylesheet" href="estilizacao.css">
    </head>
    <body>
        <h1>Cadastro de usuario</h1>
        <form action="cadastroUsuario.php" calss="formulario" method="POST">
            <p> Preencha o formulário abaixo</p>

            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" maxlength="25" required placeholder="Seu nome">                                
            </div>            
            <div class="campo">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" required placeholder="Seu Sobrenome">
            </div>
            <div class="campo">
                <label for="rg">RG</label>
                <input type="text" name="rg" id="rg" required placeholder="Seu rg">
            </div>
            <div class="campo">
                <label for="cpf">CPF</label>
                <input type="text" name="cpf" id="cpf" requred placeholder="Seu cpf">
            </div>
            <div class="campo">
                <label for="senha">Senha</label>
                <input type="text" name="senha" id="senha" requred placeholder="digite uma senha">
            </div> 
            <!--<div class="campo">
                <label for="dataNascimento">Data de Nascimento</label>
                <input type="date" name="dataNascimento" id="dataNascimento" autocomplete="bday">                
            </div>

            <div class="campo">
                <label for="email">E-mail</label>
                <input type="email" name="email" id="email" maxlength="25" 
                       required placeholder="e-mail">                                
            </div> 
            <div class="campo">
                <label for="emailConfirmacao">Confirmação</label>
                <input type="email" name="emailConfirmacao" id="emailConfirmacao" maxlength="25" 
                       required placeholder="Confirmação" autocomplete="off">    
            </div> -->
            <div>
                <! -- não se usa mais <input type="submit" value="Enviar" onclick="msg()">
                <button type="submit" name="enviar">Enviar</button>
                <button type="reset">Limpar</button>                
            </div>  
            
        </form>
        <?php
        include_once 'Conexao.php';
        include_once 'models/UsuarioModel.php';
        if (isset($_POST["enviar"])) {
            echo "<script>alert('Formulário foi enviado')</script>";
        }
        if (isset($_POST["enviar"])){
            $usuario = new UsuarioModel();
            $usuario->setCpf($_POST["rg"]);
            $usuario->setRg($_POST["cpf"]);
            $usuario->setNome($_POST["nome"]);
            $usuario->setSobrenome($_POST["sobrenome"]);
            $usuario->setSenha($_POST["senha"]);
            $usuario->criar();
            $usuario->listar();            
            echo '<pre>';
            
    }
        ?>
    </body>
</html>

