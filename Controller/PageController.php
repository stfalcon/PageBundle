<?php

namespace Stfalcon\Bundle\PageBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Stfalcon\Bundle\PageBundle\Entity\Page;

/**
 * Page controller
 */
class PageController extends Controller
{
    /**
     * Finds and displays a Page entity.
     *
     * @param \Stfalcon\Bundle\PageBundle\Entity\Page $page
     *
     * @Route   ("/{slug}", name="page_show")
     * @Template()
     *
     * @return array
     */
    public function showAction(Page $page)
    {
        return array('page' => $page);
    }

}