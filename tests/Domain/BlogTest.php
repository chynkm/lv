<?php

namespace App\Test\Domain;

use App\Domain\Blog;
use PHPUnit\Framework\TestCase;

class BlogTest extends TestCase
{
    public function testBlogHasRequiredAttributes(): void
    {
        $gotBlog = new Blog('First blog', 'KM', 'Lorem ipsum');
        $wantBlog = new \stdClass;
        $this->assertEquals($gotBlog->title, 'First blog');
        $this->assertEquals($gotBlog->author, 'KM');
        $this->assertEquals($gotBlog->content, 'Lorem ipsum');
    }
}
