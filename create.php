<?php include "db.php"; ?>
<link rel="stylesheet" href="css/style.css">
<div class="container">

<h1>Cadastrar Produto</h1>

<form method="POST">
    <input type="text" name="nome" placeholder="Nome do produto" required>
    <textarea name="descricao" placeholder="Descrição"></textarea>
    <input type="text" name="preco" placeholder="Preço" required>
    <button type="submit">Salvar</button>
</form>

<?php
if ($_POST){
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    $sql = "INSERT INTO produtos (nome, descricao, preco) VALUES ('$nome', '$descricao', '$preco')";
    $conn->query($sql);

    echo "<p class='message'>Produto cadastrado com sucesso!</p>";
    echo "<br><a class='btn' href='index.php'>Voltar ao início</a>";
}
?>

</div>
