<?php
// Definicion de herencia = la posibilidad de compartir atributos y metodos entre clases;
class Persona
{
    public $nombre;
    public $apellidos;
    public $edad;
    public $altura;

    //Get function
    public function getNombre()
    {
        return $this->nombre;
    }

    public function getApellidos()
    {
        return $this->apellidos;
    }

    public function getEdad()
    {
        return $this->edad;
    }

    public function getAltura()
    {
        return $this->altura;
    }

    //Set Function
    public function setNombre()
    {
        $this->nombre;
    }

    public function setApellidos()
    {
        $this->apellidos;
    }

    public function setEdad()
    {
        $this->edad;
    }

    public function setAltura()
    {
        $this->altura;
    }

    public function hablar()
    {
        return "Estoy hablando";
    }

    public function correr()
    {
        return "Estoy corriendo";
    }
}


class Informatico extends  Persona
{
    public $lenguajes;
    public $experienciaProgramador;

    public function __construct()
    {
        echo "<pre>" . $this->lenguajes = "HTML, CSS, JS, PHP, SQL, MVC" . "</pre>";
        echo "<pre>" . $this->experienciaProgramador = "proyecto propio en hack a boss, junior en duacode, master en php, fullstack developer" . "</pre>";
    }

    public function sabeLenguajes($lenguajes)
    {
        $this->lenguajes;

        return $this->lenguajes;
    }
    public function programar()
    {
        return "soy programador";
    }

    public function repararOrdenador()
    {
        return "estoy reparando el ordenador";
    }
    public function ofimatica()
    {
        return "Estoy trabajando con un world";
    }
}
class TecnicoRedes extends Informatico
{
    public $auditarRedes;
    public $experienciaRedes;


    public function __construct()
    {
        $this->auditarRedes = 'experto';
        $this->experienciaRedes = 5;
    }

    public function auditoria()
    {
        return "estoy auditando una red";
    }
}
