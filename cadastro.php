<?php


echo $nome = $_POST['nome']; 
echo $sobrenome = $_POST['sobrenome'];
echo $email = $_POST['email'];
echo $sexo = $_POST['sexo'];


if ($nome == null){
     echo "Nenhuma informação adicionada!" ;
}
elseif($sobrenome == null){
    echo "Nenhuma informação adicionada!" ; 
}
elseif($email == null){
    echo "Nenhuma informação adicionada!" ;
}
elseif($sexo == null){
    echo "Nenhuma informação adicionada!" ;
}
else{
    echo $nome . '<br>';
    echo $sobrenome . '<br>';
    echo $email . '<br>';
    echo $sexo . '<br>'; 
}

