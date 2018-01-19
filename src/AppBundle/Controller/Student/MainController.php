<?php

namespace AppBundle\Controller\Student;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package AppBundle\Student\Controller
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
