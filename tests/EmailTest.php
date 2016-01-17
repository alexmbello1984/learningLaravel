<?php
use \PlatziPHP\Email;

class EmailTest extends PHPUnit_Framework_TestCase
{
    function test_email_is_valid(){
        $email = new Email('alexander@gmail.dev.co');
        $this->assertInstanceOf(Email::class, $email);
    }
    
    function test_email_is_invalid(){
        $this->setExpectedException(InvalidArgumentException::class);
        $email = new Email('alexandergmail.dev.co');
    }
    
    function test_get_addres()
    {
        $email = new Email('fakeemail@gmail.com');
        $this->assertEquals('fakeemail@gmail.com', $email->getAddres());
    }
    
}
