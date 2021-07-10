<?php
    session_start();
    if(isset($_POST['pesquisar'])){
        include("controller/controllerPesquisa.php");
        $cidade2 = $_POST['cidade'];
        $estado = $_POST['estados'];
        if(is_string($cidade2)){
            $cidade3  = urlencode($cidade2);
            $nome = controlPesquisa($cidade3, $estado);
            $status = $nome->getStatus();
            if($status == 1){
                $mensagem = "Deu Erro!! &nbsp Por Favor faça novamente";
            }else{
                $mensagem = ("Parabéns! A cidade foi encontrada.");
            }
            $cidade = $nome->getCidade();
            $estado= $nome->getEstado();
            $temperatura = $nome->getTemperatura();
            $clima = $nome->getClima();
            $umidade = $nome->getUmidade();
            $sensacao = $nome->getSensacao();
            $vento = $nome->getVento();
        }else{
            $mensagem = "Deu Erro!! &nbsp Por Favor faça novamente";
            $status = 1;
        }
    }
    else{
        include("controller/controllerPadraoClima.php");
        $nome = ControlPes();
        $cidade = $nome->getCidade();
        $estado= $nome->getEstado();
        $temperatura = $nome->getTemperatura();
        $clima = $nome->getClima();
        $umidade = $nome->getUmidade();
        $sensacao = $nome->getSensacao();
        $vento = $nome->getVento();
    }    
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <title>Clima Tempo - Previsão</title>
    <link rel="stylesheet" href="css/style-header.css">
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href=""><img src="img/icone-logo.png" alt="icone-logo"></a>
        </div>
        <div class='links' id="link">
            <a href="">HOME</a>
            <a href="sobre.php">QUEM SOMOS</a>
            <a  class="id-pesquisa" id='id-pesquisa'>PESQUISAR</a>
        </div>
        <div class="linhas" id="linha-tempo">
            <img src="img/linhas.png" alt="linha">
        </div>
    </div>
    <div class="links-mobile" id="links-mobile">
        <a href="">HOME</a>
        <a href="sobre.php">QUEM SOMOS</a>
        <a  class="id-pesquisa" id="id-pesquisa2">PESQUISAR</a>
    </div>
    <section class='pesquisa' id="pesquisa">
    <div class="input">
            <form action="" method="POST" >
                <p>Cidade:</p>
                <input type="text" name="cidade" id="" class="cidade" placeholder="Nome da cidade.." required>
                <p>Estado:</p>
                <select name="estados" id="estados">
                    <option value="ac">AC</option>
                    <option value="al">AL</option>
                    <option value="ap">AP</option>
                    <option value="am">AM</option>
                    <option value="ba">BA</option>
                    <option value="ce">CE</option>
                    <option value="es">ES</option>
                    <option value="go">GO</option>
                    <option value="ma">MA</option>
                    <option value="mt">MT</option>
                    <option value="ms">MS</option>
                    <option value="mg">MG</option>
                    <option value="pa">PA</option>
                    <option value="pb">PB</option>
                    <option value="pr">PR</option>
                    <option value="pe">PE</option>
                    <option value="pi">PI</option>
                    <option value="rj">RJ</option>
                    <option value="rn">RN</option>
                    <option value="rs">RS</option>
                    <option value="ro">RO</option>
                    <option value="rr">RR</option>
                    <option value="sc">SC</option>
                    <option value="sp">SP</option>
                    <option value="se">SE</option>
                    <option value="to">TO</option>
                    <option value="df">DF</option>
                </select>
                <button type="submit" name="pesquisar">PESQUISAR</button>
            </form>
        </div>
    </section>
    <main class="main">
        <div class="erro">
            <div class="alerta error" id="erro"><?php echo($mensagem)?></div>
        </div>
        <section class='card-tempo'>
                <div class='sub-card'>
                    <p>Tempo agora em<br><?php echo($cidade)?>, <?php echo($estado)?></p>
                    <div class='icone-tempo'>
                        <img src="img/<?php echo($sensacao)?>.png" alt="icone-chuva">
                        <p>
                            <?php echo("$temperatura °")?>
                        </p>
                    </div>
                    <br>
                    <div class="tema">
                        <p><?php echo($clima)?></p>
                        <p><?php echo($sensacao)?></P>
                    </div>
                </div>
                <div class='sub-card2'>
                    <div class="linha"></div>
                    <div class="vento">
                        <div class='circulo-green'></div>
                        <h3>VENTO</h3>
                        <p><?php echo("$vento Km/h")?></p>
                    </div>
                    <div class="linha"></div>
                    <div class="umidade">
                        <div class='circulo-red'></div>
                        <h3>UMIDADE</h3>
                        <p><?php echo("$umidade%")?></p>
                    </div>
                    <div class="linha"></div>
                </div>
        </section>
    </main>
    <footer class="footer">
        <div class="conteudo">
            <div class="informacao">
                <h1>Clima Tempo</h1>
                <p>Site para ver o clima em sua cidade.</p>
            </div>
            <div class="img">
                <a href="https://github.com/Daniel2019" target="_blank"><img src="img/github.png" alt="icone-github"></a>
            </div>
            <div class="img2">
                <a href="https://www.linkedin.com/in/daniel-soares-de-oliveira-05a8641b3/" target="_blank"><img src="img/linkedin.png" alt="icone-linkedin"></a>
            </div>
        </div>
        <div class="linha2"></div>
        <div class="direitos">
            <img src="img/icone-logo.png" alt="nuvem-icone">
            <p>Copyright 2021 - Climatempo. Todos os direitos reservados - Site de Clima</p>
        </div>
    </footer>
    <script src="js/index.js"></script>
</body>
</html>

<?php
    if(isset($_GET['id'])){
        ?><script>
            form.style.display = "flex";
            window.history.replaceState({}, document.title, "?" + "");
        </script><?php
    }
    if(@$status == 2){
        ?><script>
            var forma = document.getElementById("erro");
            forma.className = "alerta sucesso";
            forma.style.display = "flex";
            setTimeout(function() {
                forma.style.display = "none";
            }, 2500);
        </script><?php
    }
    if(@$status == 1){
        ?><script>
            var forma = document.getElementById("erro");
            forma.className = "alerta error";
            forma.style.display = "flex";
            setTimeout(function() {
                forma.style.display = "none";
            }, 2500);
        </script><?php
    }
?>