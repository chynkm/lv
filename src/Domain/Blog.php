<?php
namespace App\Domain;

class Blog
{
    public $title, $author, $content;

    public function __construct($title, $author, $content)
    {
        $this->title = $title;
        $this->author = $author;
        $this->content = $content;
    }
}
