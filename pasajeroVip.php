<?php
    class pasajeroVip extends pasajero {
        private $nroViajeroFrecuente;
        private $cantMillas;

    public function __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket, $nroViajeroFrecuente, $cantMillas)
    {
        parent :: __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket) ;
        $this -> nroViajeroFrecuente = $nroViajeroFrecuente;
        $this -> cantMillas = $cantMillas;
    }

    public function get_nroViajero(){
        return $this -> nroViajeroFrecuente;
    }

    public function get_cantMillas(){
        return $this -> cantMillas;
    }

    public function set_nroViajero($nroViajeroFrecuente){
        $this -> nroViajeroFrecuente = $nroViajeroFrecuente;
    }

    public function set_cantMillas($cantMillas){
        $this -> cantMillas = $cantMillas;
    }

    public function __toString()
{
    $cadena = parent:: __toString() ; 
    $cadena = "numero viajero frecuente: " . $this -> get_nroViajero(). 
    "Cantidad de millas: ". $this -> get_cantMillas();
    return $cadena ;
}

    // Metodos
    public function darPorcentajeIncremento($tipoPasajero){
        $porcentaje = 0 ;
        $millas = $this -> get_cantMillas();
            if($tipoPasajero == "vip" && $millas > 300){
                $porcentaje = 30;
            }else{
                $porcentaje = 35;
            }
            return $porcentaje ;
    }

    }