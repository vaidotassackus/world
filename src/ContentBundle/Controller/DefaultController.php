<?php

namespace ContentBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

/**
 * Class DefaultController
 * @package ContentBundle\Controller
 */
class DefaultController extends Controller
{
    /**
     * Index function.
     * @return array
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        $name = 'Laba diena, su vistiena';

        return ['name' => $name];
    }
}
