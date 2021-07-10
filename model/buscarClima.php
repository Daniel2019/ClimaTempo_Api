<?php
    if(session_status() !== PHP_SESSION_ACTIVE){
        echo("Não criou");
        header("Location: ../index.php");
    }
    class BuscarClima{
        private $status;
        private $mensagem;
        private $cidade;
        private $estado;
        private $clima;
        private $sensacao;
        private $temperatura;
        private $umidade;
        private $vento;

        private function setStaus($status){
            $this->status = $status;
        }

        private function setMensagem($mensagem){
            $this->mensagem = $mensagem;
        }

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

        public function getStatus(){
            return $this->status;
        }

        public function getMensagem(){
            return $this->mensagem;
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

        function Clima($cidade, $estado){
            ini_set('display_errors', 1);
    	    error_reporting(E_ALL);
            include("config.php");
            $pesquisa = "https://api.hgbrasil.com/weather?key=$chave&city_name=$cidade,$estado";
            $result = json_decode(@file_get_contents($pesquisa, true));
            if($result == null){
                $this->setMensagem("Oh não! A cidade não foi encontrada.");
                $this->setStaus(1);
            }else {
                $nome = get_object_vars($result);
                $nome2 = $nome['results'];
                $partes = explode(",", $nome2->city);
                $vento = explode(" ", $nome2->wind_speedy);
                $cidade2 = urldecode($cidade);
                $estado2 = strtoupper(urldecode($estado));
                $tipo_estado = explode(" ", $partes[1]);
                if($cidade2 == $partes[0] && $tipo_estado[1] == $estado2){
                    $this->setMensagem("Parabéns! A cidade foi encontrada.");
                    $this->setCidade($partes[0]);
                    $this->setEstado($partes[1]);
                    $this->setClima($nome2->description);
                    $this->setSensacao($nome2->currently);
                    $this->setTemperatura($nome2->temp);
                    $this->setUmidade($nome2->humidity);
                    $this->setVento($vento[0]);
                    $this->setStaus(2);
                }else{
                    $this->setMensagem("Oh não! A cidade não foi encontrada.");
                    $this->setStaus(1);
                }
            }
        }
    }
    
        
    