<?php

namespace AppBundle\Controller\Researcher;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package AppBundle\Controller\Researcher
 */
class MainController extends Controller
{
    /**
     * @Template()
     *
     * @param string|boolean $locale
     * @return array
     */
    public function resourcesAction($locale = false): array
    {
        return [];
    }
}
