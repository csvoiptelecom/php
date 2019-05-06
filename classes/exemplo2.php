<?php
session_start();

    class Carro{ //Classe

        private $modelo;
        private $motor;
        private $ano; //atributos privados ou variavel privada

        public function getModelo(){ //metodos publico ou funcçao publica

            return $this->modelo;
        }

        public function setModelo($modelo){

            $this->modelo = $modelo;

        }

        public function getMotor(){

            return $this->motor;
        }

        public function setMotor($motor){

            $this->motor = $motor;
        }

        public function getAno(){

            return $this->ano;
        }

        public function setAno($ano){

            $this->ano = $ano;
        }

        public function exibir(){

            return array(
                "modelo" => $this->getModelo(),
                "motor" => $this->getMotor(),
                "ano" => $this->getAno()
            );
        }
    }
        $gol = new Carro();

        $gol->getModelo("Gol GT");
        $gol->getMotor("1.8");
        $gol->getAno("1995");

        print_r($gol->exibir());

        ?>
