<?php
use \PlatziPHP\Author;

class AuthorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_shoud_be_constructed()
    {
        $author = new Author('email@domain.dev', '123456', 'AUTOR_DE_PLATZI');
        $this->assertInstanceOf(Author::class, $author);
    }
    /**
     * @test
     */
    function it_should_fail_when_no_key_is_given()
    {
        $this->setExpectedException(InvalidArgumentException::class);
        $author = new Author('email@domain.com', '123456', 'MONTAÑA');
    }
}
