<?php

namespace Stfalcon\Bundle\PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Stfalcon\Bundle\PageBundle\Entity\Page;
use Doctrine\Common\Persistence\ObjectManager;

class LoadPagesData extends AbstractFixture
{
    public function load(ObjectManager $manager)
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