<?php 
 $nome = $_POST['nome'];
 $unidade = $_POST['unidade-rec'];
 $modalidade = $_POST['modalidade'];
 $formacao = $_POST['formacao'];
 $link = mysqli_connect("127.0.0.1", "admin", "123456", "cursos");
 $sql = "INSERT INTO cursos (id, nome, modalidade, unidade, formacao) VALUES (0, '$nome', '$modalidade', '$unidade', '$formacao' )";
 $rs =mysqli_query($link, $sql);
 header("Location: index.php");
?>