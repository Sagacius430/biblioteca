<?php include("views/includes/cabecalho.php"); ?>
<div class="conteudo">
    <?php
    include_once 'Conexao.php';
    include_once 'models/UsuarioModel.php';
    ?>
</div>
<div class="formulario">
    <div>
        <?php include("cadastroUsuario.php");?>
    </div>
</div>
<?php
include("views/includes/rodape.php");
