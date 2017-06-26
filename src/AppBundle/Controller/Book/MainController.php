<?php

namespace AppBundle\Controller\Book;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class MainController
 *
 * @package AppBundle\Controller\Book
 */
class MainController extends Controller
{
    /**
     * @Template()
     *
     * @param string|boolean $locale
     * @return array
     */
    public function introductionAction($locale = false)
    {
        return [];
    }

    /**
     * @Template()
     *
     * @param string|bool $locale
     * @return array
     */
    public function resultAction($locale = false){
        return [];
    }
}
