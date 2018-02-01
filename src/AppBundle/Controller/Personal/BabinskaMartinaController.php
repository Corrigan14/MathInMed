<?php

namespace AppBundle\Controller\Personal;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package AppBundle\Controller\Personal
 */
class BabinskaMartinaController extends Controller
{
    /**
     * @Template()
     *
     * @param string|boolean $locale
     * @return array
     */
    public function introductionAction($locale = false): array
    {
        return [];
    }
}
