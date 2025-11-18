<?php include "db.php"; ?>
<link rel="stylesheet" href="css/style.css">
<div class="container">

<?php 
$id = $_GET["id"];
$res = $conn->query("SELECT * FROM produtos WHERE id=$id");
$p = $res->fetch_assoc();
?>

<h1>Editar Produto</h1>

<form method="POST">
    <input type="text" name="nome" value="<?= $p['nome'] ?>" required>
    <textarea name="descricao"><?= $p['descricao'] ?></textarea>
    <input type="text" name="preco" value="<?= $p['preco'] ?>" required>
    <button type="submit">Atualizar</button>
</form>

<?php
if($_POST){
    $nome = $_POST["nome"];
    $descricao = $_POST["descricao"];
    $preco = $_POST["preco"];

    $sql = "UPDATE produtos SET nome='$nome', descricao='$descricao', preco='$preco' WHERE id=$id";
    $conn->query($sql);

    echo "<p class='message'>Produto atualizado!</p>";
    echo "<br><a class='btn' href='index.php'>Voltar ao início</a>";
}
?>

</div>
