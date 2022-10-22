<?php
include 'consulta.php';
$maxid = consultar("SELECT id FROM teste where id =(SELECT MAX(id) FROM teste)", "id");

function generatePost($id){
    $nome = consultar("SELECT nome FROM teste where id = $id", "nome");
    $texto= consultar("SELECT texto FROM teste where id = $id", "texto");
    $horario= consultar("SELECT horario FROM teste where id = $id", "horario");
    if($nome != "")
    echo "<div class=\"post\"> <h3>-$nome</h3> <div class=\"horario\">$horario</div><p>$texto</p><br> </div>";
}


for($i=0;$i<50;$i++){
    
    $id = $maxid - $i;
    generatePost($id);

    
}