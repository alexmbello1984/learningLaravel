<?php
namespace PlatziPHP;

class User
{
    /**
     * @var type string
     */
    protected $user;
    
    /**
     * @var type string
     */
    protected $password;
    
    /**
     * @var type string
     */
    protected $name;
    
    /**
     * @var type string
     */
    protected $lastName;
    
    public function __construct($email, $password) 
    {
        $this->email = $email;
        $this->password = password_hash($password, PASSWORD_DEFAULT);
    }
    
    public function setName($name, $lastName)
    {
        $this->name = $name;
        $this->lastName = $lastName;
    }
    
    public function getFirstName()
    {
        return $this->name;
    }
    
    public function getLastName()
    {
        return $this->lastName;
    }
}

