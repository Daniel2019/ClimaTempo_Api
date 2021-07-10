<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        echo("Não criou");
        header("Location: ../index.php");
    }
    
    function controlPesquisa($cidade, $estado){
        include("model/buscarClima.php");
        $newClima = new BuscarClima();
        $newClima->Clima($cidade, $estado);
        $status = $newClima->getStatus();
        if($status == 1){
            include("controllerPadraoClima.php");
            $newClima2 = ControlPes();
            $newClima2->Pesquisar(); 
            return $newClima2;
        }
        else{
            $newClima->Clima($cidade, $estado);
            return $newClima;
        }
    }
?>