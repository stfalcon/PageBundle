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
        $page->setText('This is test page text');
        $page->setTitle('This is test page title');
        $manager->persist($page);
        $manager->flush();
    }
}