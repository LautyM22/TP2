<?php 

Class Viajes{
    //Atributos
    private $codigo;
    private $destino;
    private $cantmax_pasajeros;
    private $colPasajeros;

    //Metodos
    public function __construct($codigo, $destino, $cantmax_pasajeros, $colPasajeros){
        $this->codigo = $codigo;
        $this->destino = $destino;
        $this->cantmax_pasajeros = $cantmax_pasajeros;
        $this->colPasajeros = [];
    }

    //Retorna el valor del código
    public function getCodigo(){
        return $this->codigo;
    }

    //Retorna el lugar de destino
    public function getDestino(){
        return $this->destino;
    }

    //Retorna la cantidad maxima de pasajeros
    public function getCantmax_pasajeros(){
        return $this->cantmax_pasajeros;
    }
    
    
    //Retorna los pasajeros del viaje
    public function getcolPasajeros(){
        return $this->colPasajeros;
    }
 

    //setea el valor del codigo del viaje
    public function setCodigo($codigo){
        $this->codigo = $codigo;
    }

    //setea el lugar de destino
    public function setDestino($destino){
        $this->destino = $destino;
    }

    //setea la cantidad maxima de pasajeros
    public function setCantmax_pasajeros($cantmax_pasajeros){
        $this->cantmax_pasajeros = $cantmax_pasajeros;
    }

    
    public function setcolPasajeros($colPasajeros){
        $this->colPasajeros = $colPasajeros;
    }
 
    public function __toString(){
        //$cadena = "";
        return $cadena = "Cod viaje: ".$this->getCodigo()." Destino: ".$this->getDestino()." Cant.max.Pasajeros: ".$this->getCantmax_pasajeros();
    }

    public function mostrarDatosPasajeros(){
        $cadena = "";
        $colPasajeros=$this->getcolPasajeros();
        for($i=0; $i<count($colPasajeros); $i++){
            $pnombre = $colPasajeros[$i]["nombre"];
            $papellido = $colPasajeros[$i]["apellido"];
            $pdni = $colPasajeros[$i]["dni"];

            $cadena = $cadena . " Pasajero ".$i." ".$pnombre." ".$papellido." ".$pdni. " ";
            return $cadena;  
        }
    }

    public function buscar_pasajero($pdni){
        $i=0;
        $bandera=false;
        $colPasajeros=$this->getcolPasajeros();
        while($i=count($colPasajeros)&&!$bandera){
            $bandera=$colPasajeros[$i]["dni"] == $pdni;
            $i = $i + 1;
        }
        return $i-1;
    }

    public function modificarPasajero($pdni, $pnombre, $papellido, $pdnibuscar){
        $indice = $this->buscar_pasajero($pdnibuscar);
        if($indice>0){
            $colPasajeros=$this->getcolPasajeros();
            $colPasajeros[$indice]["nombre"] = $pnombre;
            $colPasajeros[$indice]["apellido"] = $papellido;
            $colPasajeros[$indice]["pdni"]=$pdni;
            $this->setcolPasajeros($colPasajeros);
        }
        return $indice;
    }

    public function agregarPasajero($pdni, $pnombre, $papellido){

        $colPasajeros= $this->getcolPasajeros();

        if($this->getCantmax_pasajeros()<count($colPasajeros)){
            $colPasajeros[count($colPasajeros)] = ["nombre" => $pnombre, "apellido" => $papellido];
            $this->setcolPasajeros($colPasajeros);
        }
    }

    
}
?>