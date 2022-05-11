<html lang="pt">
<?php
if ($_REQUEST)
    if ($_REQUEST['sucesso']) {
        echo "Produto inserido com sucesso";
    } else {
        echo "Error";
    }

?>
<h1>Cadastrar Produto</h1>
<form action="../index.php?classe=Produtos&acao=store" method="POST">
    <label>Nome:<input name="nome" style="display: block"></label>
    <br>
    <label>Descrição:<input name="descricao" style="display: block"></label>
    <br>
    <label>Categorias:<input name="categoria_id" style="display: block"></label>
    <br>
    <label>Quantidade:<input name="quantidade" style="display: block"></label>
    <br>
    <label>Preço:<input name="preco" style="display: block"></label>
    <br>
    <label>NCM:<input name="ncm" style="display: block"></label>
    <br>
    <label>Imagem:<input name="caminho_imagem" style="display: block"></label>
    <br>

    <input type="submit" style="background-color: green"/>
</form>
</html>