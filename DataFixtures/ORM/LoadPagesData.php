<?php

namespace Stfalcon\Bundle\PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Stfalcon\Bundle\PageBundle\Entity\Page;

class LoadPagesData extends AbstractFixture
{
    public function load($manager)
    {
        $page = new Page();
        $page->setSlug('testPage');
        $text = '<table style="width:100%"><tr><th>Test content table</th></tr><tr><td><a href="http://google.com">go to google</a></td></tr><tr><td>This is test page text</td></tr></table>';
        $page->setText($text);
        $page->setTitle('This is test page title');
        $manager->persist($page);
        $manager->flush();
    }
}