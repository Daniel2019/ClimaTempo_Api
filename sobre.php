<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/sobre.css">
    <title>Quem Somos</title>
</head>
<body>
    <div class="header">
        <div class="logo">
            <a href="index.php"><img src="img/icone-logo.png" alt="icone-logo"></a>
        </div>
        <div class='links' id="link">
            <a href="index.php">HOME</a>
            <a href="">QUEM SOMOS</a>
            <a  class="id-pesquisa" id='id-pesquisa'>PESQUISAR</a>
        </div>
        <div class="linhas" id="linha-tempo">
            <img src="img/linhas.png" alt="linha">
        </div>
    </div>
    <div class="links-mobile" id="links-mobile">
        <a href="index.php">HOME</a>
        <a href="">QUEM SOMOS</a>
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
        <h3>QUEM SOMOS</h3>
        <section class='card-tempo'>
            <div class='sub-card'>
                <div>
                    <h3>Clima Tempo - Previsão</h3>
                </div>
                <div class="logo-quem">
                    <img src="img/icone-logo.png" alt="">
                </div>
                <div class="text">
                <p>
                        O site de temperatura do clima chamado de Clima Tempo foi criado por Daniel Soares de Oliveira respectivamente eu, 
                        com o objetivo de desenvolver e colocar em prática todos os meus conhecimentos adquiridos nesses meus 
                        quase 4 anos de estudos na área de desenvolvimento de software.</p> 
                        <p>Falando mais sobre mim, sou técnico 
                        em Desenvolvimento de Sistemas pela Etec de Itaquaquecetuba, meus estudos sobre programação teve começo 
                        por volta dos meus 14 anos e continuo estudando até hoje, sou uma pessoa apaixonado por tecnologia e 
                        desenvolvimento de sistemas.</p> 
                        <p>Como falado antes o site foi feito para colocar pratica meus conhecimentos 
                        em varias tecnologias usadas na web. Utilizando uma API disponibilizada 
                        pela HG Weather para encontrar os respectivos dados sobre os climas no país. Gostaria de agradecer pela 
                         no site, para acompanhar mais sobre meu trabalho meu Linkedin e GitHub estão no rodapé do site.
                    </p>
                </div>
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
    <script src="js/sobre.js"></script>
</body>
</html>

<?php
    
?>