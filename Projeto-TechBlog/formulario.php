<?php
  $nome = htmlspecialchars($_POST['nome']);
  $email = htmlspecialchars($_POST['email']);
  $pais = htmlspecialchars($_POST['pais']);
  $nascimento = htmlspecialchars($_POST['nascimento']);
  $areatexto = htmlspecialchars($_POST['areatexto']);

  $linha=''.$nome .',' . $email . ',' . $pais . ',' . $nascimento . ',' . areatexto . '\n';

  $arquivo = fopen('./registros.csv', 'a');
  fwrite($arquivo, $linha);
  fclose($arquivo);

  echo'<script type="text/javascript">alert('Inscrição recebida com sucesso, obrigado pela seu feedback . $nome .'!');</script>';
  include('./home.html');
?>