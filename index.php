<?php include "db.php"; ?>
<link rel="stylesheet" href="css/style.css">
<div class="container">

<h1>Lista de Produtos</h1>
<a class="btn" href="create.php">Cadastrar Produto</a>

<table>
<tr>
    <th>ID</th>
    <th>Nome</th>
    <th>Preço</th>
    <th>Ações</th>
</tr>

<?php
$res = $conn->query("SELECT * FROM produtos");
while($row = $res->fetch_assoc()){
    echo "<tr>";
    echo "<td>".$row['id']."</td>";
    echo "<td>".$row['nome']."</td>";
    echo "<td>R$ ".$row['preco']."</td>";
    echo "<td>
        <a class='btn' href='edit.php?id=".$row['id']."'>Editar</a>
        <a class='btn btn-danger' href='delete.php?id=".$row['id']."'>Excluir</a>
    </td>";
    echo "</tr>";
}
?>
</table>

</div>
