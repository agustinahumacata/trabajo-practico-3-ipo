<?php 
include_once "pasajero.php" ;
include_once "responsableV.php" ;
include_once "viaje.php" ;
include_once "pasajeroVip.php" ;
include_once "pasajerosNE.php" ;
include_once "pasajeroEstandar.php" ;

 // PROGRAMA PRINCIPAL // 

$pasajeros = 0 ;

do{
        echo "-------Menu de opciones------- 
             Seleccione una opcion: 
            1) cargar informacion del viaje.  
            2) cargar informacion del responsable. 
            3) modificar informacion del viaje
            4) cargar el/los pasajeros.
            5) modificar datos de pasajero.
            6) Ver datos.  
            7) salir \n" ;    
           $opcion = trim(fgets(STDIN)) ;
   while ($opcion >= 1 && $opcion <= 5 && is_int($opcion)){
        echo "ERROR : seleccione una opcion valida. \n" ;
             echo "-------Menu de opciones------- 
                Seleccione una opcion: 
             1) cargar informacion del viaje.
             2) cargar informacion del responsable.   
             3) modificar informacion del viaje
             4) cargar el/los pasajeros.
             5) modificar datos de pasajero.
             6) Ver datos. 
             7) salir \n" ;
           
                $opcion = trim(fgets(STDIN)) ;
}
    $pasajeros = 0 ;
    
    switch ($opcion){
        case 1:            // case que carga la informacion del viaje 
    
         echo "ingrese codigo: \n" ;
             $codig = trim(fgets(STDIN)) ;
        while(is_int($codig)){
            echo "error : ingrese un codigo numerico: " ;
              $codig = trim(fgets(STDIN)) ;
     }
      
         echo "ingrese destino: \n" ;
             $dest = trim(fgets(STDIN)) ;
       while (!ctype_alpha($dest)){
             echo "error : ingrese destino en letras: " ;
             $dest = trim(fgets(STDIN)) ;
     } 
        echo "ingrese cantidad de pasajeros: \n" ;
         $cantPasaj = trim(fgets(STDIN)) ;
        while (is_int($cantPasaj)){
           echo "error : ingrese cantidad de pasajeros en forma numerica: \n" ;
           $cantPasaj = trim(fgets(STDIN)) ;
                
        }   
     
        break ;
        case 2: // cargar informacion del resposable 
            echo "ingrese numero de empleado: \n" ;
            $nroEmpleado = trim(fgets(STDIN));
            echo "ingrese numero de licencia: \n" ;
            $nroLicencia = trim(fgets(STDIN)) ;
            echo "ingrese nombre: \n" ;
            $nombreR = trim(fgets(STDIN));
            echo "ingrese apellido: \n" ;
            $apellidoR = trim(fgets(STDIN));
        $claseResponsable = new responsableV($nroEmpleado,$nroLicencia,$nombreR,$apellidoR) ;
        $viaje = new Viaje ($codig, $dest, $cantPasaj, $claseResponsable) ;
        
        break ;
        case 3:              // este case modifica viaje de datos
             echo "que datos desea modificar?: \n" ;
             echo "a) codigo: \n" ;
             echo "b) destino \n" ;
             echo "c) cantidad maxima de pasajeros: \n" ;
                $rta2 = trim(fgets(STDIN)) ;
        while(!ctype_alpha($rta2)){
            echo "error - ingrese una opcion valida: \n" ;
            $rta2 = trim(fgets(STDIN)) ;
    }
            
             if($rta2 == "a"){
                        echo "ingrese nuevo codigo: \n" ;
                       $nuevoCodig = trim(fgets(STDIN)) ;
                 while(is_int($nuevoCodig)){
                        echo "error: ingrese un codigo numerico: \n" ;
                        $nuevoCodig = trim(fgets(STDIN)) ;
            }
            $viaje -> set_codigoviaje($nuevoCodig) ;
        }elseif($rta2 == "b"){
            echo "ingrese destino nuevo: \n" ;
               $nuevoDesti = trim(fgets(STDIN)) ;
                    while (!ctype_alpha($nuevoDesti)){
                        echo "error : ingrese destino en letras: \n" ;
                        $nuevoDesti = trim(fgets(STDIN)) ;
                }
             $viaje -> set_destino($nuevoDesti) ;
            }elseif($rta2 == "c"){
                      echo "ingrese cantidad maxima de pasajeros nueva: \n" ;
                         $nuevoCantMax = trim(fgets(STDIN)) ;
                    while (is_int($nuevoCantMax)){
                         echo "error : ingrese cantidad de pasajeros en forma numerica/entero: \n" ;
                         $nuevoCantMax = trim(fgets(STDIN)) ;
                } 
                $viaje -> set_cantPasajeros($nuevoCantMax) ;
            
        }
break ;
      
          case 4 :          // este case ingresa datos del/los pasajeros

         echo "cuantos pasajeros desea ingresar: "; 
         $cantPasajeros = trim(fgets(STDIN)) ;
         while (is_int($cantPasajeros)){
            echo "error : ingrese nuevamente cantidad de pasajeros \n" ;
            $cantPasajeros = trim(fgets(STDIN)) ;
   }    
   echo "Que tipo de pasajero es?: \n" ;
   echo "a) Estandar. \n" ;
    echo "b) VIP. \n" ;
    echo "c) Necesidades Especiales. \n" ;
    $rta4 = trim(fgets(STDIN));

        switch($rta4) {
            case "a":
                while($pasajeros < $cantPasajeros){
                  echo "Ingrese nombre: \n" ;
                     $nombre = trim(fgets(STDIN)) ;
                     while (!ctype_alpha($nombre)){
                        echo "error : ingrese nombre en letras: \n" ;
                        $nombre = trim(fgets(STDIN)) ;
                        
                }
                echo "Ingrese apellido: \n" ;
                     $apellido = trim(fgets(STDIN)) ;
                     while (!ctype_alpha($apellido)){
                        echo "error : ingrese apellido en letras: \n" ;
                        $apellido = trim(fgets(STDIN)) ;
                }
                
                     echo "ingrese dni: " ;
                     $dni = trim(fgets(STDIN)) ;
                     while (is_int($dni)){
                        echo "error : ingrese dni en forma numerica/entero: \n" ;
                        $dni = trim(fgets(STDIN)) ;
               } 
                    echo "ingrese telefono: "; 
                    $telefono = trim(fgets(STDIN));
                    while(is_int($telefono)){
                        echo "error : ingrese telefono: " ;
                        $telefono = trim(fgets(STDIN)) ;                    }
    
                     echo "Ingrese numero de asiento: \n" ;
                     $nroAsiento = trim(fgets(STDIN)) ;
                     while (is_int($nroAsiento)){
                        echo "error : ingrese apellido en numeros: \n" ;
                        $nroAsiento = trim(fgets(STDIN)) ;
                }
                
                     echo "ingrese numero de ticket: " ;
                     $nroTicket = trim(fgets(STDIN)) ;
                     while (is_int($nroTicket)){
                        echo "error : ingrese dni en forma numerica/entero: \n" ;
                        $nroTicket = trim(fgets(STDIN)) ;
               } 
               $pasajeros++ ;
               $objPasajero = new Pasajero($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket) ;
               $objPestandar = new pasajeroEstandar($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket) ;
                $viaje -> cargarPasajeros($objPestandar) ; 
             }
        break ;
        case "b": 
            while($pasajeros < $cantPasajeros){
                echo "Ingrese nombre: \n" ;
                   $nombre = trim(fgets(STDIN)) ;
                   while (!ctype_alpha($nombre)){
                      echo "error : ingrese nombre en letras: \n" ;
                      $nombre = trim(fgets(STDIN)) ;
                      
              }
              echo "Ingrese apellido: \n" ;
                     $apellido = trim(fgets(STDIN)) ;
                     while (!ctype_alpha($apellido)){
                        echo "error : ingrese apellido en letras: \n" ;
                        $apellido = trim(fgets(STDIN)) ;
                }
                
                     echo "ingrese dni: " ;
                     $dni = trim(fgets(STDIN)) ;
                     while (is_int($dni)){
                        echo "error : ingrese dni en forma numerica/entero: \n" ;
                        $dni = trim(fgets(STDIN)) ;
               } 
                    echo "ingrese telefono: "; 
                    $telefono = trim(fgets(STDIN));
                    while(is_int($telefono)){
                        echo "error : ingrese telefono: " ;
                        $telefono = trim(fgets(STDIN)) ;                    }
          
  
                   echo "Ingrese numero de asiento: \n" ;
                   $nroAsiento = trim(fgets(STDIN)) ;
                   while (is_int($nroAsiento)){
                      echo "error : ingrese apellido en numeros: \n" ;
                      $nroAsiento = trim(fgets(STDIN)) ;
              }
              
                   echo "ingrese numero de ticket: " ;
                   $nroTicket = trim(fgets(STDIN)) ;
                   while (is_int($nroTicket)){
                      echo "error : ingrese dni en forma numerica/entero: \n" ;
                      $nroTicket = trim(fgets(STDIN)) ;
             } 
                    echo "Ingrese numero de viajero frecuente: \n" ;
                    $nroViajeroFre = trim(fgets(STDIN));
                    while (is_int($nroViajeroFre)){
                        echo "error : ingrese dni en forma numerica/entero: \n" ;
                        $nroViajeroFre = trim(fgets(STDIN)) ;
               }
                echo "ingrese cantidad de millas: \n" ;
                $cantMillas = trim(fgets(STDIN));
                while (is_int($cantMillas)){
                    echo "error : ingrese dni en forma numerica/entero: \n" ;
                    $cantMillas = trim(fgets(STDIN)) ;
           }
             $pasajeros++ ;
             $objPasajero = new Pasajero($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket) ;
             $objPvip = new pasajeroVip($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket, $nroViajeroFre, $cantMillas) ;
              $viaje -> cargarPasajeros($objPvip) ; 
           }
           break ;
        case "c":
            while($pasajeros < $cantPasajeros){
                echo "Ingrese nombre: \n" ;
                   $nombre = trim(fgets(STDIN)) ;
                   while (!ctype_alpha($nombre)){
                      echo "error : ingrese nombre en letras: \n" ;
                      $nombre = trim(fgets(STDIN)) ;
                      
              }
          
  
                   echo "Ingrese numero de asiento: \n" ;
                   $nroAsiento = trim(fgets(STDIN)) ;
                   while (is_int($nroAsiento)){
                      echo "error : ingrese apellido en numeros: \n" ;
                      $nroAsiento = trim(fgets(STDIN)) ;
              }
              
                   echo "ingrese numero de ticket: " ;
                   $nroTicket = trim(fgets(STDIN)) ;
                   while (is_int($nroTicket)){
                      echo "error : ingrese dni en forma numerica/entero: \n" ;
                      $nroTicket = trim(fgets(STDIN)) ;
             } 
                 echo "Que tipo de servicio requiere: (silla, asistencia, comida o todos) \n" ;
                $servicio = trim(fgets(STDIN));
                while (!ctype_alpha($servicio)){
                    echo "error : ingrese nombre en letras: \n" ;
                    $servicio = trim(fgets(STDIN)) ;
            }

             $pasajeros++ ;
             $objPasajero = new Pasajero($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket) ;
             $objNE = new pasajerosNE($nombre, $apellido, $dni, $telefono, $nroAsiento, $nroTicket, $servicio) ;
              $viaje -> cargarPasajeros($objNE) ; 
         }
        break ;      
        }
        break ;
        case 5 :            // este case modifica datos del/los pasajeros
            echo "que datos desea modificar?: \n" ;
            echo "a) Nombre. \n" ;
            echo "b) Apellido. \n" ;
            echo "c) DNI. \n" ;
            echo "d) telefono. \n" ;
             echo "e) Numero de asiento. \n" ;
             echo "f) Numero de ticket. \n" ;
                 $rta5 = trim(fgets(STDIN)) ;
                 while (!ctype_alpha($rta5)){
                    echo "error - ingrese una opcion valida \n" ;
                    $rta5 = trim(fgets(STDIN)) ;
           } 
            switch($rta5){
                case "a"  :
                    echo "ingrese numero de ticket de la persona que quiere modificar: ";
                        $nroTicketX= trim(fgets(STDIN)) ;
                    echo "Ingrese nuevo nombre: \n";
                    $datoNuevo = trim(fgets(STDIN)) ;
                    $viaje -> modificarNombrePasajeros($datoNuevo, $nroTicketX) ;
                           
                     break ;   
                 case "b" :
                        echo "ingrese dni de la persona que quiere modificar: ";
                        $dniX= trim(fgets(STDIN)) ;
                        echo "Ingrese nuevo apellido: \n";
                            $datoNuevo = trim(fgets(STDIN)) ;
                            $viaje -> modificarApellidoPasajeros($datoNuevo, $dniX) ;
                         
                        break ;
                case"c" :
                        echo "ingrese dni de la persona que quiere modificar: ";
                        $dniX= trim(fgets(STDIN)) ;
                        echo "Ingrese nuevo DNI: \n";
                            $datoNuevo = trim(fgets(STDIN)) ;
                            $viaje -> modificarDniPasajeros($datoNuevo, $dniX) ;
                        break ;
                case "d":
                        echo "ingrese dni de la persona que quiere modificar: ";
                        $dniX= trim(fgets(STDIN)) ;
                        echo "Ingrese nuevo telefono: \n";
                            $datoNuevo = trim(fgets(STDIN)) ;
                            $viaje -> modificarTelefonoPasajeros($datoNuevo, $dniX) ;
                        break ;
                 case "e" :
                    echo "ingrese numero de ticket de la persona que quiere modificar: ";
                    $nroTicketX= trim(fgets(STDIN)) ;
                    echo "Ingrese nuevo apellido: \n";
                        $datoNuevo = trim(fgets(STDIN)) ;
                        $viaje -> modificarApellidoPasajeros($datoNuevo, $nroTicketX) ;
                     
                    break ;
               case"f" :
                    echo "ingrese numero de ticket de la persona que quiere modificar: ";
                    $nroTicketX= trim(fgets(STDIN)) ;
                    echo "Ingrese nuevo DNI: \n";
                        $datoNuevo = trim(fgets(STDIN)) ;
                        $viaje -> modificarDniPasajeros($datoNuevo, $nroTicketX) ;
                    break ;
                }
         
           
        
                 
            
        break ;
        case 6:         // este case muestra los datos 
            $viaje -> mostrarDatosPasajero() ;
            echo $viaje. "\n" ; 

            break ;
        
 
            }
  
   
}while($opcion != 7) ;


