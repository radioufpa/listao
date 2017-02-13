<!-- 
# LAST CHANGE - 07/06/2015 #
User: Lucas M 
Description: adicionei novo script PHP para download, pois o outro não estava funcionando
-->

<?php 
$arquivo = $_GET["arquivo"]; 
if(isset($arquivo) && file_exists($arquivo)){
      switch(strtolower(substr(strrchr(basename($arquivo),"."),1))){
         case "mp3": $tipo="audio/mpeg"; break;
         case "php": // deixar vazio por seurança
         case "html": // deixar vazio por seurança
      }
      header("Content-Type: ".$tipo); // informa o tipo do arquivo ao navegador
      header("Content-Length: ".filesize($arquivo)); // informa o tamanho do arquivo ao navegador
      header("Content-Disposition: attachment; filename=".basename($arquivo)); // informa ao navegador que é tipo anexo e faz abrir a janela de download, tambem informa o nome do arquivo
      readfile($arquivo); // lê o arquivo
      exit; // aborta pós-ações   
}
?>