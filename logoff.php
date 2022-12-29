<?php

session_start();

//Remover índices do Array de sessão
//unset() - Exclui indices de qualquer array desde _SESSION, _GET, _POST

//unset($_SESSION['x']);//Remove o item apenas se ele existir

//Destruir a variavel de sessão
//Session_destroy() - Elimina todos os índices da sessão

session_destroy();
header("Location: index.php")
//Só será removida de fato após a próxima requisição, 
//a partir daqui como a requisição ja foi feita eu ainda posso acessar os indices da sessão
//pr isso geralmente após um session destroy é forçado um redirecionamento, para ser feito uma nova requisição

?>