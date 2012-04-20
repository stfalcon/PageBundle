<?php

namespace Stfalcon\Bundle\PageBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Stfalcon\Bundle\PageBundle\Entity\Page;
use Doctrine\Common\Persistence\ObjectManager;

/**
 * Fixtures for the pages
 */
class LoadPagesData extends AbstractFixture
{
    /**
     * Load data fixtures with the passed EntityManager
     *
     * @param \Doctrine\Common\Persistence\ObjectManager $manager
     */
    public function load(ObjectManager $manager)
    {
        $page = new Page();
        $page->setSlug('testPage');
        $text = '<table style="width:100%"><tr><th>Test content table</th></tr><tr><td><a href="http://google.com">go to google</a></td></tr><tr><td>This is test page text</td></tr></table>';
        $page->setText($text);
        $page->setTitle('This is test page title');
        $page->setMetaKeywords('Stfalcon, pagebundle');
        $page->setMetaDescription('Simple Page bundle by Stfalcon web-studio');
        $manager->persist($page);
        $manager->flush();
    }
}