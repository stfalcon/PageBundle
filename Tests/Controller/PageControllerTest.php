<?php

namespace Stfalcon\Bundle\PageBundle\Tests\Controller;

use Liip\FunctionalTestBundle\Test\WebTestCase;

/**
 * Page controller test
 */
class PageControllerTest  extends WebTestCase
{

    public function testBrowseByUsers()
    {
        $this->loadFixtures(array('Stfalcon\Bundle\PageBundle\DataFixtures\ORM\LoadPagesData'));

        $crawler = $this->fetchCrawler($this->getUrl('page_show', array('slug' => 'testPage')), 'GET', true, true);
        $this->assertEquals(1, $crawler->filter('h2:contains("This is test page title")')->count());
        $this->assertEquals(1, $crawler->filter('#content:contains("This is test page text")')->count());

    }
}