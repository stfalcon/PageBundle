<?php

namespace Stfalcon\Bundle\PageBundle\Tests\Entity;

use Stfalcon\Bundle\PageBundle\Entity\Page;

/**
 * test Page entity
 */
class PageEntityTest extends \PHPUnit_Framework_TestCase
{

    public function testEmptyPageIdisNull()
    {
        $page = new Page();
        $this->assertNull($page->getId());
    }

    public function testSetAndGetPageText()
    {
        $text = "Design can help you improve your sustainability credentials, create products and services that make people happy and it has positive benefits on business's bottom line.";

        $page = new Page();
        $page->setText($text);

        $this->assertEquals($text, $page->getText());
    }

    public function testSetAndGetPageSlug()
    {
        $page = new Page();

        $slug = 'web-development';
        $page->setSlug($slug);

        $this->assertEquals($slug, $page->getSlug());
    }

    public function testGetAndAddPageTitle()
    {
        $page = new Page();

        $title = 'web-development';
        $page->setTitle($title);

        $this->assertEquals($title, $page->getTitle());

    }
}