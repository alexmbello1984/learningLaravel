<?php

namespace PlatziPHP;

class Email
{
    /**
     *
     * @var type string
     */
    private $addres;
    
    public function __construct($addres)
    {
        if(!filter_var($addres, FILTER_VALIDATE_EMAIL)){
            throw new \InvalidArgumentException("invalid Email addres: $addres");
        }
        $this->addres = $addres;
    }
    
    public function getAddres()
    {
        return $this->addres;
    }
}

