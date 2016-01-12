<?php


class UserTest extends PHPUnit_Framework_TestCase 
{
    /** @test */
    public function is_should_be_able_to_construct()
    {
        $user = new \PlatziPHP\User('fake@email.dev', '123456');
        $this->assertInstanceOf(\PlatziPHP\User::class, $user);
    }
    
    public function test_it_should_have_a_first_name()
    {
        $user = new \PlatziPHP\User('email@example.com', '12345');
        $user->setName('alexander', 'montaña');
        $this->assertEquals("alexander", $user->getFirstName());
    }
}
