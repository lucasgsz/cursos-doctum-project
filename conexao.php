<?php 
$cursos;
$link = mysqli_connect("127.0.0.1", "admin", "123456", "doctum_project_bd");
$teste = "SELECT * FROM cursos";
$rs =mysqli_query($link, $teste);
$cursos = $link->query($teste);
