<?php

namespace AppBundle\Controller\Teacher;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package AppBundle\Controller\Teacher
 */
class MainController extends Controller
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
