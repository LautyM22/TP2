<?php 

Class Pasajero{
    //Atributos
    private $nombre;
    private $apellido;
    private $dni;
    private $telefono;

    //Metodos
    public function __construct($nombre, $apellido, $dni, $telefono){
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->dni = $dni;
        $this->telefono = $telefono;
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

    //Retorna el valor del dni
    public function getDni(){
        return $this->dni;
    }

    //Setea el valor del dni
    public function setDni($dni){
        $this->dni=$dni;
    }

    //Retorna el valor del telefono
    public function getTelefono(){
        return $this->telefono;
    }

    //Setea el valor del telefono
    public function setTelefono($telefono){
        $this->telefono=$telefono;
    }

    public function __toString(){
        return $cadena = "Nombre: ".$this->getNombre()." Apellido: ".$this->getApellido()." DNI: ".$this->getDni()." Teléfono: ".$this->getTelefono();
    }

    
}
?>