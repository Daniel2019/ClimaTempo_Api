<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        echo("Não criou");
        header("Location: ../index.php");
    }
    session_destroy();
    error_reporting(0);
    class ClimaPadrão{
        private $cidade;
        private $estado;
        private $clima;
        private $sensacao;
        private $temperatura;
        private $umidade;
        private $vento;
        private $status = 1;

        private function setCidade($cidade){
            $this->cidade = $cidade;
        }

        private function setEstado($estado){
            $this->estado = $estado;
        }

        private function setClima($clima){
            $this->clima = $clima;
        }

        private function setSensacao($sensacao){
            $this->sensacao = $sensacao;
        }

        private function setTemperatura($temperatura){
            $this->temperatura = $temperatura;
        }

        private function setUmidade($umidade){
            $this->umidade = $umidade;
        }

        private function setVento($vento){
            $this->vento = $vento;
        }

        public function getCidade(){
            return $this->cidade;
        }

        public function getEstado(){
            return $this->estado;
        }

        public function getClima(){
            return $this->clima;
        }

        public function getSensacao(){
            return $this->sensacao;
        }

        public function getTemperatura(){
            return $this->temperatura;
        }

        public function getUmidade(){
            return $this->umidade;
        }

        public function getVento(){
            return $this->vento;
        }

        public function getStatus(){
            return $this->status;
        }

        public function Pesquisar(){
            ini_set('display_errors', 1);
            error_reporting(E_ALL);
            $pesquisa = "https://api.hgbrasil.com/weather";
            $result = json_decode(file_get_contents($pesquisa, true));
            $nome = get_object_vars($result);
            $nome2 = $nome['results'];
            $partes = explode(",", $nome2->city);
            $vento = explode(" ", $nome2->wind_speedy);
            $this->setCidade($partes[0]);
            $this->setEstado($partes[1]);
            $this->setClima($nome2->description);
            $this->setSensacao($nome2->currently);
            $this->setTemperatura($nome2->temp);
            $this->setUmidade($nome2->humidity);
            $this->setVento($vento[0]);
            //var_dump($nome2);
        }
    }
?>
