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
        <form calss="formulario" method="POST" action="UsuarioModel.php">
            <p> Preencha o formulário abaixo</p>

            <div class="campo">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" maxlength="25" required placeholder="Seu nome">                                
            </div>            
            <div class="campo">
                <label for="sobrenome">Sobrenome</label>
                <input type="text" name="sobrenome" id="sobrenome" required placeholder="Sobrenome" autocomplete="name">
            </div>
            <div class="campo">
                <label for="rg">rg</label>
                <input typr="text" name="rg" id="rg" required placeholder="rg">
            </div>
            <div class="campo">
                <label for="cpf">cpf</label>
                <input type="text" name="cpf" id="cpf" requred placeholder="cpf">
            </div>
            <div class="campo">
                <label for="senha">senha<</label>
                <input type="password" name="senha" id="senha" requred placeholder="Digite sua senha">
            </div> 
            <div class="campo">
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
            </div>       
            <div>
                <! -- não se usa mais <input type="submit" value="Enviar" onclick="msg()">
                <button type="submit">Enviar</button>
                <button type="reset">Limpar</button>
                <script>
                    function msg() {
                        alert("Dados enviados!");
                    }
                </script>
            </div>  
            <div>
                <textarea name="comentarios" id="comentarios"></textarea>
            </div>
        </form>
        <?php
        if (isset($_POST["acao"])) {
            echo "<script>alert('Formulário Foi enviado pelo método POST')</script>";
        }
        if (isset($_POST["acao"])){
            $usuario = new UsuarioModel();
            $usuario->setProntuario($_POST["nome"]);
            $usuario->setNome($_POST["sobrenome"]);
            $usuario->setCpf($_POST["rg"]);
            $usuario->setRg($_POST["cpf"]);
            $usuario->setSenha($_POST["nsenha"]);
            $usuario->criar();
            $usuario->listar();           
    }
        ?>
    </body>
</html>

