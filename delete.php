<?php include "db.php"; ?>
<link rel="stylesheet" href="css/style.css">
<div class="container">

<?php
$id = $_GET["id"];
$conn->query("DELETE FROM produtos WHERE id=$id");
?>

<h1>Produto excluído!</h1>
<a class="btn" href="index.php">Voltar ao início</a>

</div>
