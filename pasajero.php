<?php
class Pasajero{
    private $nombre ;
    private $apellido ;
    private $nroDoc ;
    private $tel ;
    private $nroAsiento ;
    private $nroTicket ;
   


public function __construct($nombre, $apellido, $nroDoc, $tel, $nroAsiento, $nroTicket){
    $this -> nombre = $nombre ;
    $this -> apellido = $apellido ;
    $this -> nroDoc = $nroDoc ;
    $this -> tel = $tel ;
    $this -> nroAsiento = $nroAsiento ;
    $this -> nroTicket = $nroTicket ;
}
// METODOS
public function get_nombre(){
    return $this -> nombre; 
}

public function get_apellido(){
    return $this -> apellido ;
}

public function get_nroDoc(){
    return $this -> nroDoc ;
}

public function get_tel(){
    return $this -> tel ;
}

public function get_nroAsiento(){
    return $this -> nroAsiento ;
}

public function get_nroTicket(){
    return $this -> nroTicket ;
}


public function set_nombre($nombre){
    $this -> nombre = $nombre ;
}

public function set_apellido($apellido){
    $this -> apellido = $apellido ;
}

public function set_nroDoc($nroDoc){
    $this -> nroDoc = $nroDoc ;
}

public function set_tel ($tel){
    $this -> tel = $tel ;
}

public function set_nroAsiento($nroAsiento){
    $this -> nroAsiento = $nroAsiento ;
}

public function set_nroTicket($nroTicket){
    $this -> nroTicket = $nroTicket ;
}

    public function __toString()
{
    return "nombre: " . $this -> get_nombre(). 
    "Apellido: ". $this -> get_apellido(). 
    "NroDoc: ". $this -> get_nroDoc(). 
    "telefono: ". $this -> get_tel().
    "Numero de asiento: ". $this -> get_nroAsiento(). 
    "Numero de ticket: ". $this -> get_nroTicket() ;
}

// metodos 
public function darPorcentajeIncremento($tipoPasajero){
    $porcentaje = 0 ;
        if($tipoPasajero == ""){
            $porcentaje = $porcentaje;
        }
        return $porcentaje ;
}
}
