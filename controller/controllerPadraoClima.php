<?php
  if(session_status() !== PHP_SESSION_ACTIVE){
    echo("Não criou");
    header("Location: ../index.php");
  }

  function ControlPes(){
    include("model/climaPadrão.php");
    $nome = new ClimaPadrão();
    $nome->Pesquisar();
    return $nome;
    echo($nome->getCidade());
    echo($nome->getEstado());
    echo($nome->getTemperatura());
    echo($nome->getClima());
    echo($nome->getUmidade());
    echo($nome->getSensacao());
    echo($nome->getVento());
  };
?>