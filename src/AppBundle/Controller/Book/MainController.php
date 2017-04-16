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
     * @return array
     */
    public function introductionAction()
    {
        return [];
    }
}
