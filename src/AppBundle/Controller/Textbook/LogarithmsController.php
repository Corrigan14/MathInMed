<?php

namespace AppBundle\Controller\Textbook;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class LogarithmsController
 * @package AppBundle\Controller\Textbook
 */
class LogarithmsController extends Controller
{
    /**
     * @Template("@App/Textbook/Logarithms/LogarithmicInequalities/introduction.html.twig")
     *
     * @param string|boolean $locale
     * @return array
     */
    public function logarithmicInequalitiesIntroductionAction($locale = false): array
    {
        return [];
    }
}
