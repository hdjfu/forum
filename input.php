<?php
    include 'insert.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // collect value of input field
  $nome = $_POST['nome'];
    $texto = $_POST['texto'];
  if (empty($nome) || empty($texto)) {
    echo "Name is empty: $nome";
  } else {
    $datahora = date('Y-m-d H:i:s');
    inserir("INSERT INTO teste VALUES(NULL, '$nome', '$texto', '$datahora')");
  }
}
header("Location: index.php"); 
exit();