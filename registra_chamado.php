<?php

    echo '<pre>';
    print_r($_POST);
    echo '</pre>';

    //Trabalhando a montagem do texto
    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);

    //Abrindo o arquivo
    //Espera o nome do arquivo | Algum parâmetro que pode ser visto da documentação nesse caso esse parametro diz que permite apenas a escrita do arquivo
    $arquivo = fopen('arquivo.hd', 'a');

    // o '#' sera o caractere de separação

    //implode('#', $_POST)
                                        //Adiciona uma quebra d elinha com base no Sistema Operacional
    $texto = $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    //Escrevendo o arquivo
    //Espera a referencia do arquivo aberto | e o que será escrito
    fwrite($arquivo, $texto);

    //fechando o arquivo
    fclose($arquivo);

    header('Location: abrir_chamado.php');
?>