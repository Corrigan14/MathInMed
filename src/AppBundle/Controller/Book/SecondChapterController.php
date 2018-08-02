<?php

namespace AppBundle\Controller\Book;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class SecondChapterController
 * @package AppBundle\Controller\Book
 */
class SecondChapterController extends Controller
{
    /**
     * @Template()
     *
     * @param bool|string $locale
     * @return array
     */
    public function tasksAction($locale = false): array
    {
        return [];
    }
}
