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
        <h1>Cadastro de livro</h1>
        <form action="cadastroLivro.php" calss="formulario" method="POST">
            <p> Preencha o formulário abaixo</p>

            <div class="campo">
                <label for="titulo">Titulo</label>
                <input type="text" name="titulo" id="titulo" maxlength="25" required placeholder="Nome do livro">                                
            </div>            
            <div class="campo">
                <label for="editora">Editora</label>
                <input type="text" name="editora" id="editora" required placeholder="Editora do livro">
            </div>
            <div class="campo">
                <label for="ano">Ano</label>
                <input type="date" name="ano" id="ano" required placeholder="Ano de publicação">
            </div>
            <div class="campo">
                <label for="edicao">Edição</label>
                <input type="text" name="edicao" id="edicao" requred placeholder="Ediçao">
            </div>
            <div class="campo">
                <label for="autor">Autor</label>
                <input type="text" name="autor" id="autor" requred placeholder="Autor do livro">
            </div>
            <div class="campo">
                <label for="assunto">Assunto</label>
                <input type="text" name="assunto" id="assunto" requred placeholder="Assunto do livro">
            </div>            
            <div>
                <! -- não se usa mais <input type="submit" value="Enviar" onclick="msg()">
                <button type="submit" name="enviar">Enviar</button>
                <button type="reset">Limpar</button>                
            </div>  
            
        </form>
        <?php
        include_once 'Conexao.php';
        include_once 'models/LivroModel.php';
        if (isset($_POST["enviar"])) {
            echo "<script>alert('Formulário foi enviado')</script>";
        }
        if (isset($_POST["enviar"])){
            $livro = new LivroModel();
            $livro->setTitulo($_POST["titulo"]);
            $livro->setEditora($_POST["editora"]);
            $livro->setAno($_POST["ano"]);
            $livro->setEdicao($_POST["edicao"]);
            $livro->setAutor($_POST["autor"]);
            $livro->setAssunto($_POST["assunto"]);
            $livro->criar();
            $livro->listar();            
    }
        ?>
    </body>
</html>
