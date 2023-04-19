<?php 

Class ResponsableV{
    //atributos
    private $nempleado;
    private $nlicencia;
    private $nombre;
    private $apellido;

    //Metodos
    public function __construct($nempleado, $nlicencia, $nombre, $apellido){
        $this->nempleado = $nempleado;
        $this->nlicencia = $nlicencia;
        $this->nombre = $nombre;
        $this->apellido = $apellido;
    }

    //Retorna el valor del numero de empleado
    public function getNempleado(){
        return $this->nempleado;
    }

    //Setea el valor del numero de empleado
    public function setNempleado($nempleado){
        $this->nempleado=$nempleado;
    }

    //Retorna el valor del numero de legajo
    public function getNlicencia(){
        return $this->nlicencia;
    }

    //Setea el valor del numero de legajo
    public function setNlegajo($nlegajo){
        $this->nlegajo=$nlegajo;
    }

    //Retorna el valor del nombre
    public function getNombre(){
        return $this->nombre;
    }

    //Setea el valor del nombre
    public function setNombre($nombre){
        $this->nombre=$nombre;
    }

    //Retorna el valor del apellido
    public function getApellido(){
        return $this->apellido;
    }

    //Setea el valor del apellido
    public function setApellido($apellido){
        $this->apellido=$apellido;
    }

    public function __toString(){
        return $cadena = "N° empleado: ".$this->getNempleado()." N° licencia: ".$this->getNlicencia()." Nombre: ".$this->getNombre()." Apellido: ".$this->getApellido();
    }
}

?>