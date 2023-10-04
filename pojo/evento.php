<?php
    class Evento {
        public $attends;
        public $nome_evento;
        public $data_evento;

        public function __construct($attends, $nome_evento, $data_evento) {
            $this->attends = $attends;
            $this->nome_evento = $nome_evento;
            $this->data_evento = $data_evento;
        }
    }
?>