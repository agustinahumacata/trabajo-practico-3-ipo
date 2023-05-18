<?php
    class pasajerosNE extends pasajero {
    private $servicios;

    public function __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket, $servicios)
    {
        parent :: __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket) ;
        $this -> servicios = $servicios;
    }

    public function get_servicios(){
        return $this -> servicios;
    }

    public function set_servicios($servicios){
        $this -> servicios = $servicios ;
    }

    public function __toString()
{
    $cadena = parent:: __toString() ;
    $cadena = "Servicios: " . $this -> get_servicios();
    return $cadena ;
}

// Metodos 

public function darPorcentajeIncremento($tipoPasajero){
    $porcentaje = 0 ;
    $servicios = $this -> get_servicios();
        if($servicios == "silla" || $servicios == "asistencia" || $servicios == "comida" ){
            $porcentaje = 15;
        }else{
            $porcentaje = 30;
        }
        return $porcentaje ;
}
    }