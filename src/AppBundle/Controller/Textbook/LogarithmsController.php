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

    /**
     * @Template("@App/Textbook/Logarithms/LogarithmicInequalities/Problems/problem1.html.twig")
     *
     * @param string|boolean $locale
     * @return array
     */
    public function logarithmicInequalitiesProblem1Action($locale = false): array
    {
        return [];
    }

    /**
     * @Template("@App/Textbook/Logarithms/LogarithmicInequalities/Problems/problem1challenge1.html.twig")
     *
     * @param string|boolean $locale
     * @return array
     */
    public function logarithmicInequalitiesProblem1Challenge1Action($locale = false): array
    {
        return [];
    }

    /**
     * @Template("@App/Textbook/Logarithms/LogarithmicInequalities/Problems/problem1challenge2.html.twig")
     *
     * @param string|boolean $locale
     * @return array
     */
    public function logarithmicInequalitiesProblem1Challenge2Action($locale = false): array
    {
        return [];
    }

    /**
     * @Template("@App/Textbook/Logarithms/LogarithmicInequalities/Problems/problem1challenge3.html.twig")
     *
     * @param string|boolean $locale
     * @return array
     */
    public function logarithmicInequalitiesProblem1Challenge3Action($locale = false): array
    {
        return [];
    }
}
