<?php
    class pasajeroEstandar extends pasajero {

        public function __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket)
        {
            parent :: __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket) ;
        }
        // Metodos 

        public function darPorcentajeIncremento($tipoPasajero){
            $porcentaje = 0 ;
                if($tipoPasajero == "comun"){
                    $porcentaje = 10;
                }
                return $porcentaje ;
        }
    }