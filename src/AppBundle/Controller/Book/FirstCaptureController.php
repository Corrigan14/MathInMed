<?php

namespace AppBundle\Controller\Book;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class FirstCaptureController
 *
 * @package AppBundle\Controller
 */
class FirstCaptureController extends Controller
{
    /**
     * @Template()
     *
     * @param bool|string $locale
     * @return array
     */
    public function tasksAction($locale = false):array {
        return [];
    }

    /**
     * @Template()
     *
     * @param bool|string $locale
     * @return array
     */
    public function resultAction($locale = false):array {
        return [];
    }

    /**
     * @Template()
     *
     * @param bool|string $locale
     * @return array
     */
    public function gameAction($locale = false):array {
        return [];
    }
}
