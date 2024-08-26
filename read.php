<?php 
    include "conexao.php";

    $select = "SELECT * FROM aluno";

    $resultado = $conn->query($select);

?>

<a href="index.php">voltar</a>
<br>
<br>

<table border="1">
    <thead>
        <th>id</th> <th>Nome</th> <th>Nota</th> <th>ação</th>
    </thead>
    <tbody>
        <?php 
            while($aluno = $resultado->fetch_object()){
                echo "<tr>";
                    echo "<td>".$aluno->id."</td>";
                    echo "<td>".$aluno->nome."</td>";
                    echo "<td>".$aluno->nota."</td>";

                    echo "<td>";
                        echo "<a href='delete.php'>Excluir</a>";
                    echo "</td>";
                echo "</tr>";    

            }
        ?>

    </tbody>



</table>