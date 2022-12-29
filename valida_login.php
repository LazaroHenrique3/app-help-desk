<?php

    session_start();

$usuarios_app = array(
    array('email' => 'lazaro@gmail.com', 'senha' => '123456'),
    array('email' => 'user@teste.com.br', 'senha' => 'abcd'),

);

$autenticado = false;
foreach($usuarios_app as $usuario){
    if($_POST['email'] == $usuario['email'] && $_POST['senha'] == $usuario['senha']){
        $autenticado = true;
        break;
    }
}

if($autenticado){
    echo "Usuário autenticado!";
    $_SESSION['autenticado'] = 'SIM'; //Cria uma posição na variavel de sessão
    header('Location: home.php');//Funciona como um desvio
} else {
    $_SESSION['autenticado'] = 'NAO'; //Cria uma posição na variavel de sessão
    header('Location: index.php?login=erro');//Funciona como um desvio
}
    





/*
print_r($_GET)

echo '<br />'
echo $_GET['email']
echo '<br />'
echo $_GET['senha']

print_r($_POST);//Array

echo '<br />';
echo $_POST['email'];//Indices
echo '<br />';
echo $_POST['senha'];//Indices
*/

?>