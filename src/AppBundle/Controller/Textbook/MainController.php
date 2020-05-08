<?php

namespace AppBundle\Controller\Textbook;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 * @package AppBundle\Controller\Textbook
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
