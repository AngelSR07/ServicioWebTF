<?php

class User
{

    //Atributos
    private $id;
    private $name;
    private $password;

    //Constructor
    public function __construct()
    {
    }


    //Metodos Getter and Setter
    public function setId($idC)
    {
        $this->id = $idC;
    }
    public function getId()
    {
        return $this->id;
    }



    public function setName($nameC)
    {
        $this->name = $nameC;
    }
    public function getName()
    {
        return $this->name;
    }



    public function setPassword($passwordC)
    {
        $this->password = $passwordC;
    }
    public function getPassword()
    {
        return $this->password;
    }
}
