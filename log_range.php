<?php
function logRange($msg, $file = 'main_range.log' ){

    // data atual
    date_default_timezone_set('America/Sao_Paulo');
    $date = date( 'd-m-Y H:i:s');
    $use = $_SESSION['usuario'];
 
    // formata a mensagem do log
    // 1o: data atual
    // 2o: nível da mensagem (INFO, WARNING ou ERROR)
    // 3o: a mensagem propriamente dita
    // 4o: uma quebra de linha
    $msg = sprintf("[%s] [%s]: %s%s", $date, $use, $msg, PHP_EOL);
 
    // escreve o log no arquivo
    // é necessário usar FILE_APPEND para que a mensagem seja escrita no final do arquivo, preservando o conteúdo antigo do arquivo
    file_put_contents( $file, $msg, FILE_APPEND );
}
?>