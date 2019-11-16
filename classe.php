<?php

    class Numeros {
        private $n1;
        private $n2;
        private $n3;

        public function getn1() {
            return $this->n1;
        }

        public function setn1($n1) {
            $this->n1 = $n1;
        }
        
        public function getn2() {
            return $this->n2;
        }

        public function setn2($n2) {
            $this->n2 = $n2;
        }

        public function getn3() {
            return $this->n3;
        }

        public function setn3($n3) {
            $this->n3 = $n3;
        }

        public function produton1n2n3() {
            return ($this->n1 * $this->n2 * $this->n3);
        }


    }

    $numeros = new Numeros();
    $numeros->setn1(3);
    $numeros->setn2(4);
    $numeros->setn3(10);

    echo $numeros->produton1n2n3();

?>