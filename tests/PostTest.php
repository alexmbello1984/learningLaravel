<?php

class PostTest extends PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    function it_should_be_constructed()
    {
        $author = new \PlatziPHP\Author("alex@gmail.com", '123456', 'AUTOR_DE_PLATZI');
        $post = new \PlatziPHP\Post($author, 'My first Post', 'This is the content of my firstPost');
        $this->assertInstanceOf(\PlatziPHP\Post::class, $post);
    }
    
    /**
     * @test
     */
    function it_returns_the_title()
    {
        $author = new \PlatziPHP\Author("alex@gmail.com", '123456', 'AUTOR_DE_PLATZI');
        $post = new \PlatziPHP\Post($author, 'My first Post', 'This is the content of my firstPost');
        $this->assertEquals('My first Post', $post->getTitle());
    }
    
    /**
     * @test
     */
    function it_returns_the_body()
    {
        $author = new \PlatziPHP\Author("alex@gmail.com", '123456', 'AUTOR_DE_PLATZI');
        $post = new \PlatziPHP\Post($author, 'My first Post', 'This is the content of my firstPost');
        $this->assertEquals('This is the content of my firstPost', $post->getBody());
    }
    
    /**
     * @test
     */
    function it_returns_the_author()
    {
        $author = new \PlatziPHP\Author("alex@gmail.com", '123456', 'AUTOR_DE_PLATZI');
        $post = new \PlatziPHP\Post($author, 'My first Post', 'This is the content of my firstPost');
        $this->assertInstanceOf(PlatziPHP\Author::class, $post->getAuthor());
    }
    
    /**
     * @test
     */
    function it_prints_author_text()
    {
        $author = new \PlatziPHP\Author("alex@gmail.com", '123456', 'AUTOR_DE_PLATZI');
        $author->setName('alexander', 'montaña');
        $post = new \PlatziPHP\Post($author, 'My first Post', 'This is the content of my firstPost');
        $this->assertEquals('by alexander', $post->printAuthor());
    }
}
